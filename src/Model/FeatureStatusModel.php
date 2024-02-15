<?php

/**
 * FeatureStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class FeatureStatusModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    /**
     * Properties that can be created
     *
     * @var array
     */
    protected static $canBeCreated = [
    ];

    public static function canBeCreated()
    {
        return self::$canBeCreated;
    }

    /**
     * Properties that can be updated
     *
     * @var array
     */
    protected static $canBeUpdated = [
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'default' => 'boolean',
        'description' => 'string',
        'dynamic' => 'boolean',
        'lockedValue' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'default' => 'setDefault',
        'description' => 'setDescription',
        'dynamic' => 'setDynamic',
        'lockedValue' => 'setLockedValue',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'default' => 'getDefault',
        'description' => 'getDescription',
        'dynamic' => 'getDynamic',
        'lockedValue' => 'getLockedValue',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dynamic'] = isset($data['dynamic']) ? $data['dynamic'] : null;
        $this->container['lockedValue'] = isset($data['lockedValue']) ? $data['lockedValue'] : null;
    }

    /**
     * Gets default
     * @return boolean
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param boolean $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets dynamic
     * @return boolean
     */
    public function getDynamic()
    {
        return $this->container['dynamic'];
    }

    /**
     * Sets dynamic
     * @param boolean $dynamic
     * @return $this
     */
    public function setDynamic($dynamic)
    {
        $this->container['dynamic'] = $dynamic;

        return $this;
    }


    /**
     * Gets lockedValue
     * @return boolean
     */
    public function getLockedValue()
    {
        return $this->container['lockedValue'];
    }

    /**
     * Sets lockedValue
     * @param boolean $lockedValue
     * @return $this
     */
    public function setLockedValue($lockedValue)
    {
        $this->container['lockedValue'] = $lockedValue;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

