<?php

namespace Rancher\Model;

use \ArrayAccess;

class OsInfo implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'dockerVersion' => 'string',
        'kernelVersion' => 'string',
        'operatingSystem' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'dockerVersion' => 'setDockerVersion',
        'kernelVersion' => 'setKernelVersion',
        'operatingSystem' => 'setOperatingSystem',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'dockerVersion' => 'getDockerVersion',
        'kernelVersion' => 'getKernelVersion',
        'operatingSystem' => 'getOperatingSystem',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['dockerVersion'] = isset($data['dockerVersion']) ? $data['dockerVersion'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
    }

    /**
     * Gets dockerVersion
     * @return string
     */
    public function getDockerVersion()
    {
        return $this->container['dockerVersion'];
    }

    /**
     * Sets dockerVersion
     * @param string $dockerVersion
     * @return $this
     */
    public function setDockerVersion($dockerVersion)
    {
        $this->container['dockerVersion'] = $dockerVersion;

        return $this;
    }


    /**
     * Gets kernelVersion
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
     * Sets kernelVersion
     * @param string $kernelVersion
     * @return $this
     */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;

        return $this;
    }


    /**
     * Gets operatingSystem
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
     * Sets operatingSystem
     * @param string $operatingSystem
     * @return $this
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;

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

