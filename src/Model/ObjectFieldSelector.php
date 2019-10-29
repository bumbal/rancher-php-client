<?php

namespace Rancher\Model;

use \ArrayAccess;

class ObjectFieldSelector implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'apiVersion' => 'string',
        'fieldPath' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'apiVersion' => 'setApiVersion',
        'fieldPath' => 'setFieldPath',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'apiVersion' => 'getApiVersion',
        'fieldPath' => 'getFieldPath',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['fieldPath'] = isset($data['fieldPath']) ? $data['fieldPath'] : null;
    }

    /**
     * Gets apiVersion
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
     * Sets apiVersion
     * @param string $apiVersion
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;

        return $this;
    }


    /**
     * Gets fieldPath
     * @return string
     */
    public function getFieldPath()
    {
        return $this->container['fieldPath'];
    }

    /**
     * Sets fieldPath
     * @param string $fieldPath
     * @return $this
     */
    public function setFieldPath($fieldPath)
    {
        $this->container['fieldPath'] = $fieldPath;

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

