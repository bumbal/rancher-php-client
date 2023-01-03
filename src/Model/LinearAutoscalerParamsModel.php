<?php

/**
 * LinearAutoscalerParamsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LinearAutoscalerParamsModel implements ArrayAccess
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
        'coresPerReplica',
        'max',
        'min',
        'nodesPerReplica',
        'preventSinglePointFailure',
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
        'coresPerReplica',
        'max',
        'min',
        'nodesPerReplica',
        'preventSinglePointFailure',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'coresPerReplica' => 'float',
        'max' => 'int',
        'min' => 'int',
        'nodesPerReplica' => 'float',
        'preventSinglePointFailure' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'coresPerReplica' => 'setCoresPerReplica',
        'max' => 'setMax',
        'min' => 'setMin',
        'nodesPerReplica' => 'setNodesPerReplica',
        'preventSinglePointFailure' => 'setPreventSinglePointFailure',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'coresPerReplica' => 'getCoresPerReplica',
        'max' => 'getMax',
        'min' => 'getMin',
        'nodesPerReplica' => 'getNodesPerReplica',
        'preventSinglePointFailure' => 'getPreventSinglePointFailure',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['coresPerReplica'] = isset($data['coresPerReplica']) ? $data['coresPerReplica'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['nodesPerReplica'] = isset($data['nodesPerReplica']) ? $data['nodesPerReplica'] : null;
        $this->container['preventSinglePointFailure'] = isset($data['preventSinglePointFailure']) ? $data['preventSinglePointFailure'] : null;
    }

    /**
     * Gets coresPerReplica
     * @return float
     */
    public function getCoresPerReplica()
    {
        return $this->container['coresPerReplica'];
    }

    /**
     * Sets coresPerReplica
     * @param float $coresPerReplica
     * @return $this
     */
    public function setCoresPerReplica($coresPerReplica)
    {
        $this->container['coresPerReplica'] = $coresPerReplica;

        return $this;
    }


    /**
     * Gets max
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     * @param int $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }


    /**
     * Gets min
     * @return int
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     * @param int $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }


    /**
     * Gets nodesPerReplica
     * @return float
     */
    public function getNodesPerReplica()
    {
        return $this->container['nodesPerReplica'];
    }

    /**
     * Sets nodesPerReplica
     * @param float $nodesPerReplica
     * @return $this
     */
    public function setNodesPerReplica($nodesPerReplica)
    {
        $this->container['nodesPerReplica'] = $nodesPerReplica;

        return $this;
    }


    /**
     * Gets preventSinglePointFailure
     * @return boolean
     */
    public function getPreventSinglePointFailure()
    {
        return $this->container['preventSinglePointFailure'];
    }

    /**
     * Sets preventSinglePointFailure
     * @param boolean $preventSinglePointFailure
     * @return $this
     */
    public function setPreventSinglePointFailure($preventSinglePointFailure)
    {
        $this->container['preventSinglePointFailure'] = $preventSinglePointFailure;

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

