<?php

namespace Rancher\Model;

use \ArrayAccess;

class PushPipelineConfigInput implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'configs' => 'map[\Rancher\Model\PipelineConfig]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'configs' => 'setConfigs',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'configs' => 'getConfigs',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
    }

    /**
     * Gets configs
     * @return \Rancher\Model\PipelineConfig[]
     */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
     * Sets configs
     * @param \Rancher\Model\PipelineConfig[] $configs
     * @return $this
     */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;

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

