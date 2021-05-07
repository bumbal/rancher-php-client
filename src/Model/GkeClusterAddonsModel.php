<?php

/**
 * GkeClusterAddonsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeClusterAddonsModel implements ArrayAccess
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
        'horizontalPodAutoscaling',
        'httpLoadBalancing',
        'networkPolicyConfig',
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
        'horizontalPodAutoscaling',
        'httpLoadBalancing',
        'networkPolicyConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'horizontalPodAutoscaling' => 'boolean',
        'httpLoadBalancing' => 'boolean',
        'networkPolicyConfig' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'horizontalPodAutoscaling' => 'setHorizontalPodAutoscaling',
        'httpLoadBalancing' => 'setHttpLoadBalancing',
        'networkPolicyConfig' => 'setNetworkPolicyConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'horizontalPodAutoscaling' => 'getHorizontalPodAutoscaling',
        'httpLoadBalancing' => 'getHttpLoadBalancing',
        'networkPolicyConfig' => 'getNetworkPolicyConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['horizontalPodAutoscaling'] = isset($data['horizontalPodAutoscaling']) ? $data['horizontalPodAutoscaling'] : null;
        $this->container['httpLoadBalancing'] = isset($data['httpLoadBalancing']) ? $data['httpLoadBalancing'] : null;
        $this->container['networkPolicyConfig'] = isset($data['networkPolicyConfig']) ? $data['networkPolicyConfig'] : null;
    }

    /**
     * Gets horizontalPodAutoscaling
     * @return boolean
     */
    public function getHorizontalPodAutoscaling()
    {
        return $this->container['horizontalPodAutoscaling'];
    }

    /**
     * Sets horizontalPodAutoscaling
     * @param boolean $horizontalPodAutoscaling
     * @return $this
     */
    public function setHorizontalPodAutoscaling($horizontalPodAutoscaling)
    {
        $this->container['horizontalPodAutoscaling'] = $horizontalPodAutoscaling;

        return $this;
    }


    /**
     * Gets httpLoadBalancing
     * @return boolean
     */
    public function getHttpLoadBalancing()
    {
        return $this->container['httpLoadBalancing'];
    }

    /**
     * Sets httpLoadBalancing
     * @param boolean $httpLoadBalancing
     * @return $this
     */
    public function setHttpLoadBalancing($httpLoadBalancing)
    {
        $this->container['httpLoadBalancing'] = $httpLoadBalancing;

        return $this;
    }


    /**
     * Gets networkPolicyConfig
     * @return boolean
     */
    public function getNetworkPolicyConfig()
    {
        return $this->container['networkPolicyConfig'];
    }

    /**
     * Sets networkPolicyConfig
     * @param boolean $networkPolicyConfig
     * @return $this
     */
    public function setNetworkPolicyConfig($networkPolicyConfig)
    {
        $this->container['networkPolicyConfig'] = $networkPolicyConfig;

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

