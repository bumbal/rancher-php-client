<?php

namespace Rancher\Model;

use \ArrayAccess;

class Handler implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'command' => 'string[]',
        'host' => 'string',
        'httpHeaders' => '\Rancher\Model\HttpHeader[]',
        'path' => 'string',
        'port' => '\Rancher\Model\IntOrString',
        'scheme' => 'string',
        'tcp' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'command' => 'setCommand',
        'host' => 'setHost',
        'httpHeaders' => 'setHttpHeaders',
        'path' => 'setPath',
        'port' => 'setPort',
        'scheme' => 'setScheme',
        'tcp' => 'setTcp',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'command' => 'getCommand',
        'host' => 'getHost',
        'httpHeaders' => 'getHttpHeaders',
        'path' => 'getPath',
        'port' => 'getPort',
        'scheme' => 'getScheme',
        'tcp' => 'getTcp',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['httpHeaders'] = isset($data['httpHeaders']) ? $data['httpHeaders'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['tcp'] = isset($data['tcp']) ? $data['tcp'] : null;
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
     * @return \Rancher\Model\HttpHeader[]
     */
    public function getHttpHeaders()
    {
        return $this->container['httpHeaders'];
    }

    /**
     * Sets httpHeaders
     * @param \Rancher\Model\HttpHeader[] $httpHeaders
     * @return $this
     */
    public function setHttpHeaders($httpHeaders)
    {
        $this->container['httpHeaders'] = $httpHeaders;

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
     * Gets port
     * @return \Rancher\Model\IntOrString
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param \Rancher\Model\IntOrString $port
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

