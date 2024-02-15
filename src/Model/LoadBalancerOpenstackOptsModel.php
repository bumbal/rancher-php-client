<?php

/**
 * LoadBalancerOpenstackOptsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LoadBalancerOpenstackOptsModel implements ArrayAccess
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
        'create-monitor',
        'floating-network-id',
        'lb-method',
        'lb-provider',
        'lb-version',
        'manage-security-groups',
        'monitor-delay',
        'monitor-max-retries',
        'monitor-timeout',
        'subnet-id',
        'use-octavia',
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
        'create-monitor',
        'floating-network-id',
        'lb-method',
        'lb-provider',
        'lb-version',
        'manage-security-groups',
        'monitor-delay',
        'monitor-max-retries',
        'monitor-timeout',
        'subnet-id',
        'use-octavia',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'create-monitor' => 'boolean',
        'floating-network-id' => 'string',
        'lb-method' => 'string',
        'lb-provider' => 'string',
        'lb-version' => 'string',
        'manage-security-groups' => 'boolean',
        'monitor-delay' => 'string',
        'monitor-max-retries' => 'int',
        'monitor-timeout' => 'string',
        'subnet-id' => 'string',
        'use-octavia' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'create-monitor' => 'setCreate-monitor',
        'floating-network-id' => 'setFloating-network-id',
        'lb-method' => 'setLb-method',
        'lb-provider' => 'setLb-provider',
        'lb-version' => 'setLb-version',
        'manage-security-groups' => 'setManage-security-groups',
        'monitor-delay' => 'setMonitor-delay',
        'monitor-max-retries' => 'setMonitor-max-retries',
        'monitor-timeout' => 'setMonitor-timeout',
        'subnet-id' => 'setSubnet-id',
        'use-octavia' => 'setUse-octavia',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'create-monitor' => 'getCreate-monitor',
        'floating-network-id' => 'getFloating-network-id',
        'lb-method' => 'getLb-method',
        'lb-provider' => 'getLb-provider',
        'lb-version' => 'getLb-version',
        'manage-security-groups' => 'getManage-security-groups',
        'monitor-delay' => 'getMonitor-delay',
        'monitor-max-retries' => 'getMonitor-max-retries',
        'monitor-timeout' => 'getMonitor-timeout',
        'subnet-id' => 'getSubnet-id',
        'use-octavia' => 'getUse-octavia',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['create-monitor'] = isset($data['create-monitor']) ? $data['create-monitor'] : null;
        $this->container['floating-network-id'] = isset($data['floating-network-id']) ? $data['floating-network-id'] : null;
        $this->container['lb-method'] = isset($data['lb-method']) ? $data['lb-method'] : null;
        $this->container['lb-provider'] = isset($data['lb-provider']) ? $data['lb-provider'] : null;
        $this->container['lb-version'] = isset($data['lb-version']) ? $data['lb-version'] : null;
        $this->container['manage-security-groups'] = isset($data['manage-security-groups']) ? $data['manage-security-groups'] : null;
        $this->container['monitor-delay'] = isset($data['monitor-delay']) ? $data['monitor-delay'] : null;
        $this->container['monitor-max-retries'] = isset($data['monitor-max-retries']) ? $data['monitor-max-retries'] : null;
        $this->container['monitor-timeout'] = isset($data['monitor-timeout']) ? $data['monitor-timeout'] : null;
        $this->container['subnet-id'] = isset($data['subnet-id']) ? $data['subnet-id'] : null;
        $this->container['use-octavia'] = isset($data['use-octavia']) ? $data['use-octavia'] : null;
    }

    /**
     * Gets create-monitor
     * @return boolean
     */
    public function getCreate-monitor()
    {
        return $this->container['create-monitor'];
    }

    /**
     * Sets create-monitor
     * @param boolean $create-monitor
     * @return $this
     */
    public function setCreate-monitor($create-monitor)
    {
        $this->container['create-monitor'] = $create-monitor;

        return $this;
    }


    /**
     * Gets floating-network-id
     * @return string
     */
    public function getFloating-network-id()
    {
        return $this->container['floating-network-id'];
    }

    /**
     * Sets floating-network-id
     * @param string $floating-network-id
     * @return $this
     */
    public function setFloating-network-id($floating-network-id)
    {
        $this->container['floating-network-id'] = $floating-network-id;

        return $this;
    }


    /**
     * Gets lb-method
     * @return string
     */
    public function getLb-method()
    {
        return $this->container['lb-method'];
    }

    /**
     * Sets lb-method
     * @param string $lb-method
     * @return $this
     */
    public function setLb-method($lb-method)
    {
        $this->container['lb-method'] = $lb-method;

        return $this;
    }


    /**
     * Gets lb-provider
     * @return string
     */
    public function getLb-provider()
    {
        return $this->container['lb-provider'];
    }

    /**
     * Sets lb-provider
     * @param string $lb-provider
     * @return $this
     */
    public function setLb-provider($lb-provider)
    {
        $this->container['lb-provider'] = $lb-provider;

        return $this;
    }


    /**
     * Gets lb-version
     * @return string
     */
    public function getLb-version()
    {
        return $this->container['lb-version'];
    }

    /**
     * Sets lb-version
     * @param string $lb-version
     * @return $this
     */
    public function setLb-version($lb-version)
    {
        $this->container['lb-version'] = $lb-version;

        return $this;
    }


    /**
     * Gets manage-security-groups
     * @return boolean
     */
    public function getManage-security-groups()
    {
        return $this->container['manage-security-groups'];
    }

    /**
     * Sets manage-security-groups
     * @param boolean $manage-security-groups
     * @return $this
     */
    public function setManage-security-groups($manage-security-groups)
    {
        $this->container['manage-security-groups'] = $manage-security-groups;

        return $this;
    }


    /**
     * Gets monitor-delay
     * @return string
     */
    public function getMonitor-delay()
    {
        return $this->container['monitor-delay'];
    }

    /**
     * Sets monitor-delay
     * @param string $monitor-delay
     * @return $this
     */
    public function setMonitor-delay($monitor-delay)
    {
        $this->container['monitor-delay'] = $monitor-delay;

        return $this;
    }


    /**
     * Gets monitor-max-retries
     * @return int
     */
    public function getMonitor-max-retries()
    {
        return $this->container['monitor-max-retries'];
    }

    /**
     * Sets monitor-max-retries
     * @param int $monitor-max-retries
     * @return $this
     */
    public function setMonitor-max-retries($monitor-max-retries)
    {
        $this->container['monitor-max-retries'] = $monitor-max-retries;

        return $this;
    }


    /**
     * Gets monitor-timeout
     * @return string
     */
    public function getMonitor-timeout()
    {
        return $this->container['monitor-timeout'];
    }

    /**
     * Sets monitor-timeout
     * @param string $monitor-timeout
     * @return $this
     */
    public function setMonitor-timeout($monitor-timeout)
    {
        $this->container['monitor-timeout'] = $monitor-timeout;

        return $this;
    }


    /**
     * Gets subnet-id
     * @return string
     */
    public function getSubnet-id()
    {
        return $this->container['subnet-id'];
    }

    /**
     * Sets subnet-id
     * @param string $subnet-id
     * @return $this
     */
    public function setSubnet-id($subnet-id)
    {
        $this->container['subnet-id'] = $subnet-id;

        return $this;
    }


    /**
     * Gets use-octavia
     * @return boolean
     */
    public function getUse-octavia()
    {
        return $this->container['use-octavia'];
    }

    /**
     * Sets use-octavia
     * @param boolean $use-octavia
     * @return $this
     */
    public function setUse-octavia($use-octavia)
    {
        $this->container['use-octavia'] = $use-octavia;

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

