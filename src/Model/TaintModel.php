<?php

/**
 * TaintModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TaintModel implements ArrayAccess
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
        'effect',
        'key',
        'timeAdded',
        'value',
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
        'effect',
        'key',
        'timeAdded',
        'value',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'effect' => 'string',
        'key' => 'string',
        'timeAdded' => '\DateTime',
        'value' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'effect' => 'setEffect',
        'key' => 'setKey',
        'timeAdded' => 'setTimeAdded',
        'value' => 'setValue',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'effect' => 'getEffect',
        'key' => 'getKey',
        'timeAdded' => 'getTimeAdded',
        'value' => 'getValue',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['timeAdded'] = isset($data['timeAdded']) ? $data['timeAdded'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Gets effect
     * @return string
     */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
     * Sets effect
     * @param string $effect
     * @return $this
     */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;

        return $this;
    }


    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }


    /**
     * Gets timeAdded
     * @return \DateTime
     */
    public function getTimeAdded()
    {
        return $this->container['timeAdded'];
    }

    /**
     * Sets timeAdded
     * @param \DateTime $timeAdded
     * @return $this
     */
    public function setTimeAdded($timeAdded)
    {
        $this->container['timeAdded'] = $timeAdded;

        return $this;
    }


    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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

