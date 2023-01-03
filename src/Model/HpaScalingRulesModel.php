<?php

/**
 * HpaScalingRulesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HpaScalingRulesModel implements ArrayAccess
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
        'policies',
        'selectPolicy',
        'stabilizationWindowSeconds',
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
        'policies',
        'selectPolicy',
        'stabilizationWindowSeconds',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'policies' => '\Rancher\Model\HpaScalingPolicyModel[]',
        'selectPolicy' => 'string',
        'stabilizationWindowSeconds' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'policies' => 'setPolicies',
        'selectPolicy' => 'setSelectPolicy',
        'stabilizationWindowSeconds' => 'setStabilizationWindowSeconds',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'policies' => 'getPolicies',
        'selectPolicy' => 'getSelectPolicy',
        'stabilizationWindowSeconds' => 'getStabilizationWindowSeconds',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['selectPolicy'] = isset($data['selectPolicy']) ? $data['selectPolicy'] : null;
        $this->container['stabilizationWindowSeconds'] = isset($data['stabilizationWindowSeconds']) ? $data['stabilizationWindowSeconds'] : null;
    }

    /**
     * Gets policies
     * @return \Rancher\Model\HpaScalingPolicyModel[]
     */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
     * Sets policies
     * @param \Rancher\Model\HpaScalingPolicyModel[] $policies
     * @return $this
     */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;

        return $this;
    }


    /**
     * Gets selectPolicy
     * @return string
     */
    public function getSelectPolicy()
    {
        return $this->container['selectPolicy'];
    }

    /**
     * Sets selectPolicy
     * @param string $selectPolicy
     * @return $this
     */
    public function setSelectPolicy($selectPolicy)
    {
        $this->container['selectPolicy'] = $selectPolicy;

        return $this;
    }


    /**
     * Gets stabilizationWindowSeconds
     * @return int
     */
    public function getStabilizationWindowSeconds()
    {
        return $this->container['stabilizationWindowSeconds'];
    }

    /**
     * Sets stabilizationWindowSeconds
     * @param int $stabilizationWindowSeconds
     * @return $this
     */
    public function setStabilizationWindowSeconds($stabilizationWindowSeconds)
    {
        $this->container['stabilizationWindowSeconds'] = $stabilizationWindowSeconds;

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

