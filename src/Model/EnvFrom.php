<?php

namespace Rancher\Model;

use \ArrayAccess;

class EnvFrom implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'sourceKey' => 'string',
        'sourceName' => 'string',
        'targetKey' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'sourceKey' => 'setSourceKey',
        'sourceName' => 'setSourceName',
        'targetKey' => 'setTargetKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'sourceKey' => 'getSourceKey',
        'sourceName' => 'getSourceName',
        'targetKey' => 'getTargetKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['sourceKey'] = isset($data['sourceKey']) ? $data['sourceKey'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['targetKey'] = isset($data['targetKey']) ? $data['targetKey'] : null;
    }

    /**
     * Gets sourceKey
     * @return string
     */
    public function getSourceKey()
    {
        return $this->container['sourceKey'];
    }

    /**
     * Sets sourceKey
     * @param string $sourceKey
     * @return $this
     */
    public function setSourceKey($sourceKey)
    {
        $this->container['sourceKey'] = $sourceKey;

        return $this;
    }


    /**
     * Gets sourceName
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
     * Sets sourceName
     * @param string $sourceName
     * @return $this
     */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;

        return $this;
    }


    /**
     * Gets targetKey
     * @return string
     */
    public function getTargetKey()
    {
        return $this->container['targetKey'];
    }

    /**
     * Sets targetKey
     * @param string $targetKey
     * @return $this
     */
    public function setTargetKey($targetKey)
    {
        $this->container['targetKey'] = $targetKey;

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

