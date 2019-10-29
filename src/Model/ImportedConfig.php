<?php

namespace Rancher\Model;

use \ArrayAccess;

class ImportedConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'kubeConfig' => '\Rancher\Model\Password',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'kubeConfig' => 'setKubeConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'kubeConfig' => 'getKubeConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['kubeConfig'] = isset($data['kubeConfig']) ? $data['kubeConfig'] : null;
    }

    /**
     * Gets kubeConfig
     * @return \Rancher\Model\Password
     */
    public function getKubeConfig()
    {
        return $this->container['kubeConfig'];
    }

    /**
     * Sets kubeConfig
     * @param \Rancher\Model\Password $kubeConfig
     * @return $this
     */
    public function setKubeConfig($kubeConfig)
    {
        $this->container['kubeConfig'] = $kubeConfig;

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

