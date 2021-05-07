<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Output\ConsoleOutput;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

/**
 * Class APIGenerator
 */
class APIGenerator
{
    /**
     * @var float
     */
    private $startTime = null;

    /**
     * @var ConsoleOutput
     */
    private $out = null;

    /**
     * @var array
     */
    private $_config = null;

    /**
     * APIGenerator constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        try
        {
            $this->startTime = microtime(true);

            $this->logToConsole(file_get_contents('templates/header.txt'), 'info', true);

            $this->_config = $config;

            // do some checking
            $check = $this->retrieveEndpoint('schemas/');

            if(array_key_exists('status', $check) && $check['status'] == '401')
            {
                throw new Exception($check['message']);
            }

            // now run!
            $this->run();
        }
        catch (Error $err)
        {
            $this->logToConsole('Error: ' . $err->getMessage(), 'error');
        }
        catch (Exception $exp)
        {
            $this->logToConsole('Exception: ' . $exp->getMessage(), 'error');
        }
    }

    /**
     * public run function, builds your API
     * @throws Exception
     */
    public function run()
    {
        $groups = ['schemas/', 'clusters/schemas/', 'projects/schemas/'];

        $this->clearDirectory('../src/Model/*');
        $this->clearDirectory('../src/Resource/*');
        $this->clearDirectory('../src/Filter/*');

        $this->logToConsole("Old classes removed", 'info');

        foreach ($groups as $group)
        {
            $schemas = $this->retrieveEndpoint($group);

            $this->logToConsole("Endpoints for {$group} loaded...", 'comment');

            foreach ($schemas['data'] as $entry)
            {
                $this->buildModelFromScheme($entry);
                $this->buildResourceFromScheme($entry);
                $this->buildFilterFromScheme($entry);
            }

            $this->logToConsole("Endpoints for {$group} processed", 'success');
        }

        $runtime = microtime(true) - $this->startTime;

        $this->logToConsole('----------------------------------', 'standard');
        $this->logToConsole('Rancher PHP Client Generator Done!', 'standard');
        $this->logToConsole('Runtime: ' . number_format($runtime, 3, '.') . " sec", 'standard');
        $this->logToConsole('----------------------------------', 'standard');
    }

    /**
     * retrieveEndpoint
     *
     * retrieves an endpoint using CURL
     *
     * @param string $endpoint
     * @return mixed
     * @throws Exception
     */
    private function retrieveEndpoint(string $endpoint)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,  $this->_config['rancher_url'] . $endpoint);
        curl_setopt($ch, CURLOPT_USERPWD, $this->_config['rancher_token'] . ":" . $this->_config['rancher_secret']);

        // disable SSL checks to allow using a local docker based rancher
        // installation as a source.
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        if($error)
        {
            throw new Exception($error);
        }

        return json_decode($output, true);
    }

    /**
     * startsWith
     *
     * simple string comparison function
     *
     * @param $string
     * @param $query
     * @return bool
     */
    private function startsWith($string, $query): bool
    {
        return substr($string, 0, strlen($query)) === $query;
    }

    /**
     * endsWith
     *
     * simple string comparison function
     *
     * @param $string
     * @param $query
     * @return bool
     */
    private function endsWith($string, $query): bool
    {
        $length = strlen($query);

        if ($length == 0)
        {
            return true;
        }

        return (substr($string, -$length) === $query);
    }

    /**
     * buildModelFromScheme
     *
     * main build function, uses scheme to build an PHP model class and writes it to disk
     *
     * @param $scheme
     */
    private function buildModelFromScheme($scheme)
    {
        $schemeName = ucfirst($scheme['id']);

        $content = [
            'name' => $schemeName,
            'properties' => [],
            'can_be_created' => [],
            'can_be_updated' => []
        ];

        foreach ($scheme['resourceFields'] as $name => $property)
        {
            $docType = false;

            // do some type checking
            if($this->startsWith( $property['type'], 'reference'))
            {
                $type = "string";
            }
            elseif($this->startsWith( $property['type'], 'array'))
            {
                $type = substr($property['type'], 6, -1);

                if($this->startsWith( $type, 'reference'))
                {
                    $type = "string[]";
                }
                else
                {
                    if(!in_array($type, ['bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void']))
                    {
                        if($type == 'enum')
                        {
                            $type = 'string[]';
                        }
                        else
                        {
                            $type = '\Rancher\Model\\' . ucfirst($type) . 'Model[]';
                        }
                    }
                    else
                    {
                        $type = $type . '[]';
                    }
                }
            }
            elseif($this->startsWith($property['type'], 'map'))
            {
                $tmpType = substr($property['type'], 4, -1);

                if(!in_array($tmpType, ['bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void']))
                {
                    if($tmpType == 'enum')
                    {
                        $type = 'map[string,string]';
                        $docType = 'string[]';
                    }
                    else
                    {
                        $type = 'map[string,\Rancher\Model\\' . ucfirst($tmpType) . 'Model]';
                        $docType = '\Rancher\Model\\' . ucfirst($tmpType) . 'Model[]';
                    }
                }
                else
                {
                    $type = 'map[string,'.$tmpType.']';
                    $docType = $tmpType . '[]';
                }
            }
            elseif($property['type'] == 'date')
            {
                $type = '\DateTime';
            }
            elseif($property['type'] == 'base64')
            {
                $type = "string";
            }
            elseif($property['type'] == 'hostname')
            {
                $type = "string";
            }
            elseif(!in_array($property['type'], ['bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void']))
            {
                $type = '\Rancher\Model\\' . ucfirst($property['type']) . 'Model';
            }
            else
            {
                $type = $property['type'];
            }

            // override some non standard model names
            if(
                $this->endsWith($type, 'DnsLabelModel') ||
                $this->endsWith($type, 'DnsLabelRestrictedModel') ||
                $this->endsWith($type, 'EnumModel') ||
                $this->endsWith($type, 'IntOrStringModel')
            )
            {
                $type = "string";
            }

            if($property['create'])
            {
                $content['can_be_created'][] = $name;
            }

            if($property['update'])
            {
                $content['can_be_updated'][] = $name;
            }

            $content['properties'][] = [
                'name' => $name,
                'type' => $type,
                'doc_type' => $docType
            ];
        }

        try
        {
            $loader = new FilesystemLoader("./templates");
            $twig = new Environment($loader);
            $twig->addFilter(new TwigFilter('ucfirst', 'ucfirst'));

            $output = $twig->render('model.twig', $content);

            file_put_contents('../src/Model/' . $schemeName . 'Model.php', $output);

            $this->logToConsole("Endpoints for {$schemeName}Model.php generated", 'debug');
        }
        catch (Exception $exception)
        {
            $this->logToConsole($exception->getMessage(), 'error'); die;
        }
    }

    /**
     * buildResourceFromScheme
     *
     * main build function, uses scheme to build an PHP model resource and writes it to disk
     *
     * @param $scheme
     */
    private function buildResourceFromScheme($scheme)
    {
        // no methods? ignore
        if(!array_key_exists('resourceMethods', $scheme))
        {
            return;
        }

        $schemeName = ucfirst($scheme['id']);

        $content = [
            'name' => $schemeName,
            'path' => $scheme['version']['path'],
            'resource_name' => $scheme['id'],
            'resource_methods' => $scheme['resourceMethods'],
            'resource_actions' => array_key_exists('resourceActions', $scheme) ? $scheme['resourceActions'] : [],
            'resource_plural_name' => array_key_exists('pluralName', $scheme) ? $scheme['pluralName'] : ""
        ];

        try
        {
            $loader = new FilesystemLoader("./templates");
            $twig = new Environment($loader);
            $twig->addFilter(new TwigFilter('ucfirst', 'ucfirst'));

            $output = $twig->render('resource.twig', $content);

            file_put_contents('../src/Resource/' . $schemeName . 'Resource.php', $output);

            $this->logToConsole("Endpoints for {$schemeName}Resource.php generated", 'debug');
        }
        catch (Exception $exception)
        {
            $this->logToConsole($exception->getMessage(), 'error'); die;
        }
    }

    /**
     * buildFilterFromScheme
     *
     * main build function, uses scheme to build an PHP filter class and writes it to disk
     *
     * @param $scheme
     */
    private function buildFilterFromScheme($scheme)
    {
        // no methods? ignore
        if(!array_key_exists('collectionFilters', $scheme))
        {
            return;
        }

        $schemeName = ucfirst($scheme['id']);

        $content = [
            'name' => $schemeName,
            'filters' => $scheme['collectionFilters']
        ];

        try
        {
            $loader = new FilesystemLoader("./templates");
            $twig = new Environment($loader);
            $twig->addFilter(new TwigFilter('ucfirst', 'ucfirst'));

            $output = $twig->render('filter.twig', $content);

            file_put_contents('../src/Filter/' . $schemeName . 'Filter.php', $output);

            $this->logToConsole("Endpoints for {$schemeName}Filter.php generated", 'debug');
        }
        catch (Exception $exception)
        {
            $this->logToConsole($exception->getMessage(), 'error'); die;
        }
    }

    /**
     * clearDirectory
     *
     * clear src directory before running the builders
     *
     * @param string $path
     */
    private function clearDirectory(string $path)
    {
        $files = glob($path);

        foreach($files as $file)
        {
            if(is_file($file))
            {
                unlink($file);
            }
        }
    }

    /**
     * @param $text
     * @param string $type
     * @param bool $omitTimeStamp
     */
    public function logToConsole($text, $type = 'success', $omitTimeStamp = false)
    {
        if(!$this->out)
        {
            $this->out = new ConsoleOutput();

            $outputStyle = new OutputFormatterStyle('magenta');
            $this->out->getFormatter()->setStyle('debug', $outputStyle);

            $outputStyle = new OutputFormatterStyle('white');
            $this->out->getFormatter()->setStyle('default', $outputStyle);

            $outputStyle = new OutputFormatterStyle('cyan');
            $this->out->getFormatter()->setStyle('standard', $outputStyle);
        }

        if(!$omitTimeStamp)
        {
            $date = new \DateTime();
            $text = "[".$date->format('Y-m-d H:i:s')."] ".$text;
        }

        switch ($type)
        {
            case "success":
                $this->out->writeln('<info>'.$text.'</info>');
                break;

            case "comment":
                $this->out->writeln('<comment>'.$text.'</comment>');
                break;

            case "error":
                $this->out->writeln('<error>'.$text.'</error>');
                break;

            case "debug":
                $this->out->writeln('<debug>'.$text.'</debug>');
                break;

            case "default":
                $this->out->writeln('<default>'.$text.'</default>');
                break;

            default:
                $this->out->writeln('<standard>'.$text.'</standard>');
                break;
        }
    }
}

$apiGenerator = new APIGenerator(include 'config.php');

?>