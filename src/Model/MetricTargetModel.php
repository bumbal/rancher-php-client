<?php

/**
 * MetricTargetModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class MetricTargetModel implements ArrayAccess
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
        'averageValue',
        'type',
        'utilization',
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
        'averageValue',
        'type',
        'utilization',
        'value',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'averageValue' => 'string',
        'type' => 'string',
        'utilization' => 'int',
        'value' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'averageValue' => 'setAverageValue',
        'type' => 'setType',
        'utilization' => 'setUtilization',
        'value' => 'setValue',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'averageValue' => 'getAverageValue',
        'type' => 'getType',
        'utilization' => 'getUtilization',
        'value' => 'getValue',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['averageValue'] = isset($data['averageValue']) ? $data['averageValue'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['utilization'] = isset($data['utilization']) ? $data['utilization'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Gets averageValue
     * @return string
     */
    public function getAverageValue()
    {
        return $this->container['averageValue'];
    }

    /**
     * Sets averageValue
     * @param string $averageValue
     * @return $this
     */
    public function setAverageValue($averageValue)
    {
        $this->container['averageValue'] = $averageValue;

        return $this;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }


    /**
     * Gets utilization
     * @return int
     */
    public function getUtilization()
    {
        return $this->container['utilization'];
    }

    /**
     * Sets utilization
     * @param int $utilization
     * @return $this
     */
    public function setUtilization($utilization)
    {
        $this->container['utilization'] = $utilization;

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

