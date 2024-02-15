<?php

/**
 * AksStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AksStatusModel implements ArrayAccess
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
        'privateRequiresTunnel',
        'rbacEnabled',
        'upstreamSpec',
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
        'privateRequiresTunnel',
        'rbacEnabled',
        'upstreamSpec',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'privateRequiresTunnel' => 'boolean',
        'rbacEnabled' => 'boolean',
        'upstreamSpec' => '\Rancher\Model\AksClusterConfigSpecModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'privateRequiresTunnel' => 'setPrivateRequiresTunnel',
        'rbacEnabled' => 'setRbacEnabled',
        'upstreamSpec' => 'setUpstreamSpec',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'privateRequiresTunnel' => 'getPrivateRequiresTunnel',
        'rbacEnabled' => 'getRbacEnabled',
        'upstreamSpec' => 'getUpstreamSpec',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['privateRequiresTunnel'] = isset($data['privateRequiresTunnel']) ? $data['privateRequiresTunnel'] : null;
        $this->container['rbacEnabled'] = isset($data['rbacEnabled']) ? $data['rbacEnabled'] : null;
        $this->container['upstreamSpec'] = isset($data['upstreamSpec']) ? $data['upstreamSpec'] : null;
    }

    /**
     * Gets privateRequiresTunnel
     * @return boolean
     */
    public function getPrivateRequiresTunnel()
    {
        return $this->container['privateRequiresTunnel'];
    }

    /**
     * Sets privateRequiresTunnel
     * @param boolean $privateRequiresTunnel
     * @return $this
     */
    public function setPrivateRequiresTunnel($privateRequiresTunnel)
    {
        $this->container['privateRequiresTunnel'] = $privateRequiresTunnel;

        return $this;
    }


    /**
     * Gets rbacEnabled
     * @return boolean
     */
    public function getRbacEnabled()
    {
        return $this->container['rbacEnabled'];
    }

    /**
     * Sets rbacEnabled
     * @param boolean $rbacEnabled
     * @return $this
     */
    public function setRbacEnabled($rbacEnabled)
    {
        $this->container['rbacEnabled'] = $rbacEnabled;

        return $this;
    }


    /**
     * Gets upstreamSpec
     * @return \Rancher\Model\AksClusterConfigSpecModel
     */
    public function getUpstreamSpec()
    {
        return $this->container['upstreamSpec'];
    }

    /**
     * Sets upstreamSpec
     * @param \Rancher\Model\AksClusterConfigSpecModel $upstreamSpec
     * @return $this
     */
    public function setUpstreamSpec($upstreamSpec)
    {
        $this->container['upstreamSpec'] = $upstreamSpec;

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

