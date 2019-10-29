<?php

namespace Rancher\Model;

use \ArrayAccess;

class PodReadinessGate implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'conditionType' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'conditionType' => 'setConditionType',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'conditionType' => 'getConditionType',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['conditionType'] = isset($data['conditionType']) ? $data['conditionType'] : null;
    }

    /**
     * Gets conditionType
     * @return string
     */
    public function getConditionType()
    {
        return $this->container['conditionType'];
    }

    /**
     * Sets conditionType
     * @param string $conditionType
     * @return $this
     */
    public function setConditionType($conditionType)
    {
        $this->container['conditionType'] = $conditionType;

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

