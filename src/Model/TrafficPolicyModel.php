<?php

/**
 * TrafficPolicyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TrafficPolicyModel implements ArrayAccess
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
        'connectionPool',
        'loadBalancer',
        'outlierDetection',
        'portLevelSettings',
        'tls',
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
        'connectionPool',
        'loadBalancer',
        'outlierDetection',
        'portLevelSettings',
        'tls',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'connectionPool' => '\Rancher\Model\ConnectionPoolSettingsModel',
        'loadBalancer' => '\Rancher\Model\LoadBalancerSettingsModel',
        'outlierDetection' => '\Rancher\Model\OutlierDetectionModel',
        'portLevelSettings' => '\Rancher\Model\PortTrafficPolicyModel[]',
        'tls' => '\Rancher\Model\TlsSettingsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'connectionPool' => 'setConnectionPool',
        'loadBalancer' => 'setLoadBalancer',
        'outlierDetection' => 'setOutlierDetection',
        'portLevelSettings' => 'setPortLevelSettings',
        'tls' => 'setTls',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'connectionPool' => 'getConnectionPool',
        'loadBalancer' => 'getLoadBalancer',
        'outlierDetection' => 'getOutlierDetection',
        'portLevelSettings' => 'getPortLevelSettings',
        'tls' => 'getTls',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['connectionPool'] = isset($data['connectionPool']) ? $data['connectionPool'] : null;
        $this->container['loadBalancer'] = isset($data['loadBalancer']) ? $data['loadBalancer'] : null;
        $this->container['outlierDetection'] = isset($data['outlierDetection']) ? $data['outlierDetection'] : null;
        $this->container['portLevelSettings'] = isset($data['portLevelSettings']) ? $data['portLevelSettings'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
    }

    /**
     * Gets connectionPool
     * @return \Rancher\Model\ConnectionPoolSettingsModel
     */
    public function getConnectionPool()
    {
        return $this->container['connectionPool'];
    }

    /**
     * Sets connectionPool
     * @param \Rancher\Model\ConnectionPoolSettingsModel $connectionPool
     * @return $this
     */
    public function setConnectionPool($connectionPool)
    {
        $this->container['connectionPool'] = $connectionPool;

        return $this;
    }


    /**
     * Gets loadBalancer
     * @return \Rancher\Model\LoadBalancerSettingsModel
     */
    public function getLoadBalancer()
    {
        return $this->container['loadBalancer'];
    }

    /**
     * Sets loadBalancer
     * @param \Rancher\Model\LoadBalancerSettingsModel $loadBalancer
     * @return $this
     */
    public function setLoadBalancer($loadBalancer)
    {
        $this->container['loadBalancer'] = $loadBalancer;

        return $this;
    }


    /**
     * Gets outlierDetection
     * @return \Rancher\Model\OutlierDetectionModel
     */
    public function getOutlierDetection()
    {
        return $this->container['outlierDetection'];
    }

    /**
     * Sets outlierDetection
     * @param \Rancher\Model\OutlierDetectionModel $outlierDetection
     * @return $this
     */
    public function setOutlierDetection($outlierDetection)
    {
        $this->container['outlierDetection'] = $outlierDetection;

        return $this;
    }


    /**
     * Gets portLevelSettings
     * @return \Rancher\Model\PortTrafficPolicyModel[]
     */
    public function getPortLevelSettings()
    {
        return $this->container['portLevelSettings'];
    }

    /**
     * Sets portLevelSettings
     * @param \Rancher\Model\PortTrafficPolicyModel[] $portLevelSettings
     * @return $this
     */
    public function setPortLevelSettings($portLevelSettings)
    {
        $this->container['portLevelSettings'] = $portLevelSettings;

        return $this;
    }


    /**
     * Gets tls
     * @return \Rancher\Model\TlsSettingsModel
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     * @param \Rancher\Model\TlsSettingsModel $tls
     * @return $this
     */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;

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

