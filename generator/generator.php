<?php

require_once __DIR__.'/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

class APIGenerator
{
    private $_config = null;

    public function __construct($config)
    {
        $this->_config = $config;
    }

    public function run()
    {
        $groups = ['schemas/', 'clusters/schemas/', 'projects/schemas/'];

        $this->clearDirectory('../src/Model/*');
        $this->clearDirectory('../src/Resource/*');
        $this->clearDirectory('../src/Filter/*');

        foreach ($groups as $group)
        {
            $schemas = $this->retrieveEndpoint($group);

            foreach ($schemas['data'] as $entry)
            {
                $this->buildModelFromScheme($entry);
                $this->buildResourceFromScheme($entry);
                $this->buildFilterFromScheme($entry);
            }

            echo $group . " done\n";
        }
    }

    private function retrieveEndpoint(string $endpoint)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,  $this->_config['rancher_url'] . $endpoint);
        curl_setopt($ch, CURLOPT_USERPWD, $this->_config['rancher_token'] . ":" . $this->_config['rancher_secret']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);

        return json_decode($output, true);
    }

    private function startsWith($string, $query)
    {
        return substr($string, 0, strlen($query)) === $query;
    }

    private function endsWith($string, $query)
    {
        $length = strlen($query);

        if ($length == 0)
        {
            return true;
        }

        return (substr($string, -$length) === $query);
    }

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
            elseif($this->startsWith( $property['type'], 'hostname'))
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
        }
        catch (\Exception $exception)
        {
            print_r($exception->getMessage()); die;
        }
    }

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
        }
        catch (\Exception $exception)
        {
            print_r($exception->getMessage()); die;
        }
    }

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
        }
        catch (\Exception $exception)
        {
            print_r($exception->getMessage()); die;
        }
    }

    private function clearDirectory($path)
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
}

$apiGenerator  = new APIGenerator(include 'config.php');
$apiGenerator->run();

?>