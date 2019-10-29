<?php

namespace Rancher\Model;

use \ArrayAccess;

class AuthWebhookConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'cacheTimeout' => 'string',
        'configFile' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cacheTimeout' => 'setCacheTimeout',
        'configFile' => 'setConfigFile',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cacheTimeout' => 'getCacheTimeout',
        'configFile' => 'getConfigFile',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cacheTimeout'] = isset($data['cacheTimeout']) ? $data['cacheTimeout'] : null;
        $this->container['configFile'] = isset($data['configFile']) ? $data['configFile'] : null;
    }

    /**
     * Gets cacheTimeout
     * @return string
     */
    public function getCacheTimeout()
    {
        return $this->container['cacheTimeout'];
    }

    /**
     * Sets cacheTimeout
     * @param string $cacheTimeout
     * @return $this
     */
    public function setCacheTimeout($cacheTimeout)
    {
        $this->container['cacheTimeout'] = $cacheTimeout;

        return $this;
    }


    /**
     * Gets configFile
     * @return string
     */
    public function getConfigFile()
    {
        return $this->container['configFile'];
    }

    /**
     * Sets configFile
     * @param string $configFile
     * @return $this
     */
    public function setConfigFile($configFile)
    {
        $this->container['configFile'] = $configFile;

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

