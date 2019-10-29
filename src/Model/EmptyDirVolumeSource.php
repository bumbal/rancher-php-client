<?php

namespace Rancher\Model;

use \ArrayAccess;

class EmptyDirVolumeSource implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'medium' => 'string',
        'sizeLimit' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'medium' => 'setMedium',
        'sizeLimit' => 'setSizeLimit',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'medium' => 'getMedium',
        'sizeLimit' => 'getSizeLimit',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['sizeLimit'] = isset($data['sizeLimit']) ? $data['sizeLimit'] : null;
    }

    /**
     * Gets medium
     * @return string
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     * @param string $medium
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }


    /**
     * Gets sizeLimit
     * @return string
     */
    public function getSizeLimit()
    {
        return $this->container['sizeLimit'];
    }

    /**
     * Sets sizeLimit
     * @param string $sizeLimit
     * @return $this
     */
    public function setSizeLimit($sizeLimit)
    {
        $this->container['sizeLimit'] = $sizeLimit;

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

