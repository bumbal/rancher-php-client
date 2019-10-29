<?php

namespace Rancher\Model;

use \ArrayAccess;

class DynamicSchemaStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'fake' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fake' => 'setFake',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fake' => 'getFake',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fake'] = isset($data['fake']) ? $data['fake'] : null;
    }

    /**
     * Gets fake
     * @return string
     */
    public function getFake()
    {
        return $this->container['fake'];
    }

    /**
     * Sets fake
     * @param string $fake
     * @return $this
     */
    public function setFake($fake)
    {
        $this->container['fake'] = $fake;

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

