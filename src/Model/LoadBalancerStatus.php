<?php

namespace Rancher\Model;

use \ArrayAccess;

class LoadBalancerStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'ingress' => '\Rancher\Model\LoadBalancerIngress[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ingress' => 'setIngress',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ingress' => 'getIngress',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ingress'] = isset($data['ingress']) ? $data['ingress'] : null;
    }

    /**
     * Gets ingress
     * @return \Rancher\Model\LoadBalancerIngress[]
     */
    public function getIngress()
    {
        return $this->container['ingress'];
    }

    /**
     * Sets ingress
     * @param \Rancher\Model\LoadBalancerIngress[] $ingress
     * @return $this
     */
    public function setIngress($ingress)
    {
        $this->container['ingress'] = $ingress;

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

