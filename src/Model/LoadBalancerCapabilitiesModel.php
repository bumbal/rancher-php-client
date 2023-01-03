<?php

/**
 * LoadBalancerCapabilitiesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LoadBalancerCapabilitiesModel implements ArrayAccess
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
        'enabled',
        'healthCheckSupported',
        'protocolsSupported',
        'provider',
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
        'enabled',
        'healthCheckSupported',
        'protocolsSupported',
        'provider',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'enabled' => 'boolean',
        'healthCheckSupported' => 'boolean',
        'protocolsSupported' => 'string[]',
        'provider' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'enabled' => 'setEnabled',
        'healthCheckSupported' => 'setHealthCheckSupported',
        'protocolsSupported' => 'setProtocolsSupported',
        'provider' => 'setProvider',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'enabled' => 'getEnabled',
        'healthCheckSupported' => 'getHealthCheckSupported',
        'protocolsSupported' => 'getProtocolsSupported',
        'provider' => 'getProvider',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['healthCheckSupported'] = isset($data['healthCheckSupported']) ? $data['healthCheckSupported'] : null;
        $this->container['protocolsSupported'] = isset($data['protocolsSupported']) ? $data['protocolsSupported'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
    }

    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets healthCheckSupported
     * @return boolean
     */
    public function getHealthCheckSupported()
    {
        return $this->container['healthCheckSupported'];
    }

    /**
     * Sets healthCheckSupported
     * @param boolean $healthCheckSupported
     * @return $this
     */
    public function setHealthCheckSupported($healthCheckSupported)
    {
        $this->container['healthCheckSupported'] = $healthCheckSupported;

        return $this;
    }


    /**
     * Gets protocolsSupported
     * @return string[]
     */
    public function getProtocolsSupported()
    {
        return $this->container['protocolsSupported'];
    }

    /**
     * Sets protocolsSupported
     * @param string[] $protocolsSupported
     * @return $this
     */
    public function setProtocolsSupported($protocolsSupported)
    {
        $this->container['protocolsSupported'] = $protocolsSupported;

        return $this;
    }


    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

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

