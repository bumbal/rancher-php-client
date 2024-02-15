<?php

/**
 * IngressStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class IngressStatusModel implements ArrayAccess
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
        'loadBalancer' => '\Rancher\Model\IngressLoadBalancerStatusModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'loadBalancer' => 'setLoadBalancer',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'loadBalancer' => 'getLoadBalancer',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['loadBalancer'] = isset($data['loadBalancer']) ? $data['loadBalancer'] : null;
    }

    /**
     * Gets loadBalancer
     * @return \Rancher\Model\IngressLoadBalancerStatusModel
     */
    public function getLoadBalancer()
    {
        return $this->container['loadBalancer'];
    }

    /**
     * Sets loadBalancer
     * @param \Rancher\Model\IngressLoadBalancerStatusModel $loadBalancer
     * @return $this
     */
    public function setLoadBalancer($loadBalancer)
    {
        $this->container['loadBalancer'] = $loadBalancer;

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

