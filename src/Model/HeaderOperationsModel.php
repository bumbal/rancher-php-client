<?php

/**
 * HeaderOperationsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HeaderOperationsModel implements ArrayAccess
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
        'add',
        'remove',
        'set',
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
        'add',
        'remove',
        'set',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'add' => 'map[string,string]',
        'remove' => 'string[]',
        'set' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'add' => 'setAdd',
        'remove' => 'setRemove',
        'set' => 'setSet',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'add' => 'getAdd',
        'remove' => 'getRemove',
        'set' => 'getSet',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['add'] = isset($data['add']) ? $data['add'] : null;
        $this->container['remove'] = isset($data['remove']) ? $data['remove'] : null;
        $this->container['set'] = isset($data['set']) ? $data['set'] : null;
    }

    /**
     * Gets add
     * @return string[]
     */
    public function getAdd()
    {
        return $this->container['add'];
    }

    /**
     * Sets add
     * @param string[] $add
     * @return $this
     */
    public function setAdd($add)
    {
        $this->container['add'] = $add;

        return $this;
    }


    /**
     * Gets remove
     * @return string[]
     */
    public function getRemove()
    {
        return $this->container['remove'];
    }

    /**
     * Sets remove
     * @param string[] $remove
     * @return $this
     */
    public function setRemove($remove)
    {
        $this->container['remove'] = $remove;

        return $this;
    }


    /**
     * Gets set
     * @return string[]
     */
    public function getSet()
    {
        return $this->container['set'];
    }

    /**
     * Sets set
     * @param string[] $set
     * @return $this
     */
    public function setSet($set)
    {
        $this->container['set'] = $set;

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

