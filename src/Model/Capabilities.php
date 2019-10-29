<?php

namespace Rancher\Model;

use \ArrayAccess;

class Capabilities implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'ingressCapabilities' => '\Rancher\Model\IngressCapabilities[]',
        'loadBalancerCapabilities' => '\Rancher\Model\LoadBalancerCapabilities',
        'nodePoolScalingSupported' => 'boolean',
        'nodePortRange' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ingressCapabilities' => 'setIngressCapabilities',
        'loadBalancerCapabilities' => 'setLoadBalancerCapabilities',
        'nodePoolScalingSupported' => 'setNodePoolScalingSupported',
        'nodePortRange' => 'setNodePortRange',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ingressCapabilities' => 'getIngressCapabilities',
        'loadBalancerCapabilities' => 'getLoadBalancerCapabilities',
        'nodePoolScalingSupported' => 'getNodePoolScalingSupported',
        'nodePortRange' => 'getNodePortRange',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ingressCapabilities'] = isset($data['ingressCapabilities']) ? $data['ingressCapabilities'] : null;
        $this->container['loadBalancerCapabilities'] = isset($data['loadBalancerCapabilities']) ? $data['loadBalancerCapabilities'] : null;
        $this->container['nodePoolScalingSupported'] = isset($data['nodePoolScalingSupported']) ? $data['nodePoolScalingSupported'] : null;
        $this->container['nodePortRange'] = isset($data['nodePortRange']) ? $data['nodePortRange'] : null;
    }

    /**
     * Gets ingressCapabilities
     * @return \Rancher\Model\IngressCapabilities[]
     */
    public function getIngressCapabilities()
    {
        return $this->container['ingressCapabilities'];
    }

    /**
     * Sets ingressCapabilities
     * @param \Rancher\Model\IngressCapabilities[] $ingressCapabilities
     * @return $this
     */
    public function setIngressCapabilities($ingressCapabilities)
    {
        $this->container['ingressCapabilities'] = $ingressCapabilities;

        return $this;
    }


    /**
     * Gets loadBalancerCapabilities
     * @return \Rancher\Model\LoadBalancerCapabilities
     */
    public function getLoadBalancerCapabilities()
    {
        return $this->container['loadBalancerCapabilities'];
    }

    /**
     * Sets loadBalancerCapabilities
     * @param \Rancher\Model\LoadBalancerCapabilities $loadBalancerCapabilities
     * @return $this
     */
    public function setLoadBalancerCapabilities($loadBalancerCapabilities)
    {
        $this->container['loadBalancerCapabilities'] = $loadBalancerCapabilities;

        return $this;
    }


    /**
     * Gets nodePoolScalingSupported
     * @return boolean
     */
    public function getNodePoolScalingSupported()
    {
        return $this->container['nodePoolScalingSupported'];
    }

    /**
     * Sets nodePoolScalingSupported
     * @param boolean $nodePoolScalingSupported
     * @return $this
     */
    public function setNodePoolScalingSupported($nodePoolScalingSupported)
    {
        $this->container['nodePoolScalingSupported'] = $nodePoolScalingSupported;

        return $this;
    }


    /**
     * Gets nodePortRange
     * @return string
     */
    public function getNodePortRange()
    {
        return $this->container['nodePortRange'];
    }

    /**
     * Sets nodePortRange
     * @param string $nodePortRange
     * @return $this
     */
    public function setNodePortRange($nodePortRange)
    {
        $this->container['nodePortRange'] = $nodePortRange;

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

