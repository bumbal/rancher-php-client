<?php

/**
 * SupplementalGroupsStrategyOptionsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SupplementalGroupsStrategyOptionsModel implements ArrayAccess
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
        'ranges',
        'rule',
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
        'ranges',
        'rule',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'ranges' => '\Rancher\Model\IdRangeModel[]',
        'rule' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ranges' => 'setRanges',
        'rule' => 'setRule',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ranges' => 'getRanges',
        'rule' => 'getRule',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ranges'] = isset($data['ranges']) ? $data['ranges'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
    }

    /**
     * Gets ranges
     * @return \Rancher\Model\IdRangeModel[]
     */
    public function getRanges()
    {
        return $this->container['ranges'];
    }

    /**
     * Sets ranges
     * @param \Rancher\Model\IdRangeModel[] $ranges
     * @return $this
     */
    public function setRanges($ranges)
    {
        $this->container['ranges'] = $ranges;

        return $this;
    }


    /**
     * Gets rule
     * @return string
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     * @param string $rule
     * @return $this
     */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;

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

