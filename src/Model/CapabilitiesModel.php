<?php

/**
 * CapabilitiesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CapabilitiesModel implements ArrayAccess
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
        'ingressCapabilities',
        'loadBalancerCapabilities',
        'nodePoolScalingSupported',
        'nodePortRange',
        'pspEnabled',
        'taintSupport',
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
        'ingressCapabilities',
        'loadBalancerCapabilities',
        'nodePoolScalingSupported',
        'nodePortRange',
        'pspEnabled',
        'taintSupport',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'ingressCapabilities' => '\Rancher\Model\IngressCapabilitiesModel[]',
        'loadBalancerCapabilities' => '\Rancher\Model\LoadBalancerCapabilitiesModel',
        'nodePoolScalingSupported' => 'boolean',
        'nodePortRange' => 'string',
        'pspEnabled' => 'boolean',
        'taintSupport' => 'boolean',
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
        'pspEnabled' => 'setPspEnabled',
        'taintSupport' => 'setTaintSupport',
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
        'pspEnabled' => 'getPspEnabled',
        'taintSupport' => 'getTaintSupport',
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
        $this->container['pspEnabled'] = isset($data['pspEnabled']) ? $data['pspEnabled'] : null;
        $this->container['taintSupport'] = isset($data['taintSupport']) ? $data['taintSupport'] : null;
    }

    /**
     * Gets ingressCapabilities
     * @return \Rancher\Model\IngressCapabilitiesModel[]
     */
    public function getIngressCapabilities()
    {
        return $this->container['ingressCapabilities'];
    }

    /**
     * Sets ingressCapabilities
     * @param \Rancher\Model\IngressCapabilitiesModel[] $ingressCapabilities
     * @return $this
     */
    public function setIngressCapabilities($ingressCapabilities)
    {
        $this->container['ingressCapabilities'] = $ingressCapabilities;

        return $this;
    }


    /**
     * Gets loadBalancerCapabilities
     * @return \Rancher\Model\LoadBalancerCapabilitiesModel
     */
    public function getLoadBalancerCapabilities()
    {
        return $this->container['loadBalancerCapabilities'];
    }

    /**
     * Sets loadBalancerCapabilities
     * @param \Rancher\Model\LoadBalancerCapabilitiesModel $loadBalancerCapabilities
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
     * Gets pspEnabled
     * @return boolean
     */
    public function getPspEnabled()
    {
        return $this->container['pspEnabled'];
    }

    /**
     * Sets pspEnabled
     * @param boolean $pspEnabled
     * @return $this
     */
    public function setPspEnabled($pspEnabled)
    {
        $this->container['pspEnabled'] = $pspEnabled;

        return $this;
    }


    /**
     * Gets taintSupport
     * @return boolean
     */
    public function getTaintSupport()
    {
        return $this->container['taintSupport'];
    }

    /**
     * Sets taintSupport
     * @param boolean $taintSupport
     * @return $this
     */
    public function setTaintSupport($taintSupport)
    {
        $this->container['taintSupport'] = $taintSupport;

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

