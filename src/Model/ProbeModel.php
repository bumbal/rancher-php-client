<?php

/**
 * ProbeModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProbeModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    /**
     * Properties that can be created
     *
     * @var array
     */
    protected static $canBeCreated = [
        'command',
        'failureThreshold',
        'host',
        'httpHeaders',
        'initialDelaySeconds',
        'path',
        'periodSeconds',
        'port',
        'scheme',
        'successThreshold',
        'tcp',
        'timeoutSeconds',
    ];

    public static function canBeCreated()
    {
        return self::$canBeCreated;
    }

    /**
     * Properties that can be updated
     *
     * @var array
     */
    protected static $canBeUpdated = [
        'command',
        'failureThreshold',
        'host',
        'httpHeaders',
        'initialDelaySeconds',
        'path',
        'periodSeconds',
        'port',
        'scheme',
        'successThreshold',
        'tcp',
        'timeoutSeconds',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'command' => 'string[]',
        'failureThreshold' => 'int',
        'host' => 'string',
        'httpHeaders' => '\Rancher\Model\HttpHeaderModel[]',
        'initialDelaySeconds' => 'int',
        'path' => 'string',
        'periodSeconds' => 'int',
        'port' => 'string',
        'scheme' => 'string',
        'successThreshold' => 'int',
        'tcp' => 'boolean',
        'timeoutSeconds' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'command' => 'setCommand',
        'failureThreshold' => 'setFailureThreshold',
        'host' => 'setHost',
        'httpHeaders' => 'setHttpHeaders',
        'initialDelaySeconds' => 'setInitialDelaySeconds',
        'path' => 'setPath',
        'periodSeconds' => 'setPeriodSeconds',
        'port' => 'setPort',
        'scheme' => 'setScheme',
        'successThreshold' => 'setSuccessThreshold',
        'tcp' => 'setTcp',
        'timeoutSeconds' => 'setTimeoutSeconds',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'command' => 'getCommand',
        'failureThreshold' => 'getFailureThreshold',
        'host' => 'getHost',
        'httpHeaders' => 'getHttpHeaders',
        'initialDelaySeconds' => 'getInitialDelaySeconds',
        'path' => 'getPath',
        'periodSeconds' => 'getPeriodSeconds',
        'port' => 'getPort',
        'scheme' => 'getScheme',
        'successThreshold' => 'getSuccessThreshold',
        'tcp' => 'getTcp',
        'timeoutSeconds' => 'getTimeoutSeconds',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['failureThreshold'] = isset($data['failureThreshold']) ? $data['failureThreshold'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['httpHeaders'] = isset($data['httpHeaders']) ? $data['httpHeaders'] : null;
        $this->container['initialDelaySeconds'] = isset($data['initialDelaySeconds']) ? $data['initialDelaySeconds'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['periodSeconds'] = isset($data['periodSeconds']) ? $data['periodSeconds'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['successThreshold'] = isset($data['successThreshold']) ? $data['successThreshold'] : null;
        $this->container['tcp'] = isset($data['tcp']) ? $data['tcp'] : null;
        $this->container['timeoutSeconds'] = isset($data['timeoutSeconds']) ? $data['timeoutSeconds'] : null;
    }

    /**
     * Gets command
     * @return string[]
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     * @param string[] $command
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

        return $this;
    }


    /**
     * Gets failureThreshold
     * @return int
     */
    public function getFailureThreshold()
    {
        return $this->container['failureThreshold'];
    }

    /**
     * Sets failureThreshold
     * @param int $failureThreshold
     * @return $this
     */
    public function setFailureThreshold($failureThreshold)
    {
        $this->container['failureThreshold'] = $failureThreshold;

        return $this;
    }


    /**
     * Gets host
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }


    /**
     * Gets httpHeaders
     * @return \Rancher\Model\HttpHeaderModel[]
     */
    public function getHttpHeaders()
    {
        return $this->container['httpHeaders'];
    }

    /**
     * Sets httpHeaders
     * @param \Rancher\Model\HttpHeaderModel[] $httpHeaders
     * @return $this
     */
    public function setHttpHeaders($httpHeaders)
    {
        $this->container['httpHeaders'] = $httpHeaders;

        return $this;
    }


    /**
     * Gets initialDelaySeconds
     * @return int
     */
    public function getInitialDelaySeconds()
    {
        return $this->container['initialDelaySeconds'];
    }

    /**
     * Sets initialDelaySeconds
     * @param int $initialDelaySeconds
     * @return $this
     */
    public function setInitialDelaySeconds($initialDelaySeconds)
    {
        $this->container['initialDelaySeconds'] = $initialDelaySeconds;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets periodSeconds
     * @return int
     */
    public function getPeriodSeconds()
    {
        return $this->container['periodSeconds'];
    }

    /**
     * Sets periodSeconds
     * @param int $periodSeconds
     * @return $this
     */
    public function setPeriodSeconds($periodSeconds)
    {
        $this->container['periodSeconds'] = $periodSeconds;

        return $this;
    }


    /**
     * Gets port
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param string $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }


    /**
     * Gets scheme
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     * @param string $scheme
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }


    /**
     * Gets successThreshold
     * @return int
     */
    public function getSuccessThreshold()
    {
        return $this->container['successThreshold'];
    }

    /**
     * Sets successThreshold
     * @param int $successThreshold
     * @return $this
     */
    public function setSuccessThreshold($successThreshold)
    {
        $this->container['successThreshold'] = $successThreshold;

        return $this;
    }


    /**
     * Gets tcp
     * @return boolean
     */
    public function getTcp()
    {
        return $this->container['tcp'];
    }

    /**
     * Sets tcp
     * @param boolean $tcp
     * @return $this
     */
    public function setTcp($tcp)
    {
        $this->container['tcp'] = $tcp;

        return $this;
    }


    /**
     * Gets timeoutSeconds
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->container['timeoutSeconds'];
    }

    /**
     * Sets timeoutSeconds
     * @param int $timeoutSeconds
     * @return $this
     */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->container['timeoutSeconds'] = $timeoutSeconds;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

