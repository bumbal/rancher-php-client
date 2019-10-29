<?php

namespace Rancher\Model;

use \ArrayAccess;

class IngressStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'loadBalancer' => '\Rancher\Model\LoadBalancerStatus',
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
     * @return \Rancher\Model\LoadBalancerStatus
     */
    public function getLoadBalancer()
    {
        return $this->container['loadBalancer'];
    }

    /**
     * Sets loadBalancer
     * @param \Rancher\Model\LoadBalancerStatus $loadBalancer
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

