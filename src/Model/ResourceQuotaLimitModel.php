<?php

/**
 * ResourceQuotaLimitModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ResourceQuotaLimitModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'configMaps' => 'string',
        'limitsCpu' => 'string',
        'limitsMemory' => 'string',
        'persistentVolumeClaims' => 'string',
        'pods' => 'string',
        'replicationControllers' => 'string',
        'requestsCpu' => 'string',
        'requestsMemory' => 'string',
        'requestsStorage' => 'string',
        'secrets' => 'string',
        'services' => 'string',
        'servicesLoadBalancers' => 'string',
        'servicesNodePorts' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'configMaps' => 'setConfigMaps',
        'limitsCpu' => 'setLimitsCpu',
        'limitsMemory' => 'setLimitsMemory',
        'persistentVolumeClaims' => 'setPersistentVolumeClaims',
        'pods' => 'setPods',
        'replicationControllers' => 'setReplicationControllers',
        'requestsCpu' => 'setRequestsCpu',
        'requestsMemory' => 'setRequestsMemory',
        'requestsStorage' => 'setRequestsStorage',
        'secrets' => 'setSecrets',
        'services' => 'setServices',
        'servicesLoadBalancers' => 'setServicesLoadBalancers',
        'servicesNodePorts' => 'setServicesNodePorts',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'configMaps' => 'getConfigMaps',
        'limitsCpu' => 'getLimitsCpu',
        'limitsMemory' => 'getLimitsMemory',
        'persistentVolumeClaims' => 'getPersistentVolumeClaims',
        'pods' => 'getPods',
        'replicationControllers' => 'getReplicationControllers',
        'requestsCpu' => 'getRequestsCpu',
        'requestsMemory' => 'getRequestsMemory',
        'requestsStorage' => 'getRequestsStorage',
        'secrets' => 'getSecrets',
        'services' => 'getServices',
        'servicesLoadBalancers' => 'getServicesLoadBalancers',
        'servicesNodePorts' => 'getServicesNodePorts',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['configMaps'] = isset($data['configMaps']) ? $data['configMaps'] : null;
        $this->container['limitsCpu'] = isset($data['limitsCpu']) ? $data['limitsCpu'] : null;
        $this->container['limitsMemory'] = isset($data['limitsMemory']) ? $data['limitsMemory'] : null;
        $this->container['persistentVolumeClaims'] = isset($data['persistentVolumeClaims']) ? $data['persistentVolumeClaims'] : null;
        $this->container['pods'] = isset($data['pods']) ? $data['pods'] : null;
        $this->container['replicationControllers'] = isset($data['replicationControllers']) ? $data['replicationControllers'] : null;
        $this->container['requestsCpu'] = isset($data['requestsCpu']) ? $data['requestsCpu'] : null;
        $this->container['requestsMemory'] = isset($data['requestsMemory']) ? $data['requestsMemory'] : null;
        $this->container['requestsStorage'] = isset($data['requestsStorage']) ? $data['requestsStorage'] : null;
        $this->container['secrets'] = isset($data['secrets']) ? $data['secrets'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['servicesLoadBalancers'] = isset($data['servicesLoadBalancers']) ? $data['servicesLoadBalancers'] : null;
        $this->container['servicesNodePorts'] = isset($data['servicesNodePorts']) ? $data['servicesNodePorts'] : null;
    }

    /**
     * Gets configMaps
     * @return string
     */
    public function getConfigMaps()
    {
        return $this->container['configMaps'];
    }

    /**
     * Sets configMaps
     * @param string $configMaps
     * @return $this
     */
    public function setConfigMaps($configMaps)
    {
        $this->container['configMaps'] = $configMaps;

        return $this;
    }


    /**
     * Gets limitsCpu
     * @return string
     */
    public function getLimitsCpu()
    {
        return $this->container['limitsCpu'];
    }

    /**
     * Sets limitsCpu
     * @param string $limitsCpu
     * @return $this
     */
    public function setLimitsCpu($limitsCpu)
    {
        $this->container['limitsCpu'] = $limitsCpu;

        return $this;
    }


    /**
     * Gets limitsMemory
     * @return string
     */
    public function getLimitsMemory()
    {
        return $this->container['limitsMemory'];
    }

    /**
     * Sets limitsMemory
     * @param string $limitsMemory
     * @return $this
     */
    public function setLimitsMemory($limitsMemory)
    {
        $this->container['limitsMemory'] = $limitsMemory;

        return $this;
    }


    /**
     * Gets persistentVolumeClaims
     * @return string
     */
    public function getPersistentVolumeClaims()
    {
        return $this->container['persistentVolumeClaims'];
    }

    /**
     * Sets persistentVolumeClaims
     * @param string $persistentVolumeClaims
     * @return $this
     */
    public function setPersistentVolumeClaims($persistentVolumeClaims)
    {
        $this->container['persistentVolumeClaims'] = $persistentVolumeClaims;

        return $this;
    }


    /**
     * Gets pods
     * @return string
     */
    public function getPods()
    {
        return $this->container['pods'];
    }

    /**
     * Sets pods
     * @param string $pods
     * @return $this
     */
    public function setPods($pods)
    {
        $this->container['pods'] = $pods;

        return $this;
    }


    /**
     * Gets replicationControllers
     * @return string
     */
    public function getReplicationControllers()
    {
        return $this->container['replicationControllers'];
    }

    /**
     * Sets replicationControllers
     * @param string $replicationControllers
     * @return $this
     */
    public function setReplicationControllers($replicationControllers)
    {
        $this->container['replicationControllers'] = $replicationControllers;

        return $this;
    }


    /**
     * Gets requestsCpu
     * @return string
     */
    public function getRequestsCpu()
    {
        return $this->container['requestsCpu'];
    }

    /**
     * Sets requestsCpu
     * @param string $requestsCpu
     * @return $this
     */
    public function setRequestsCpu($requestsCpu)
    {
        $this->container['requestsCpu'] = $requestsCpu;

        return $this;
    }


    /**
     * Gets requestsMemory
     * @return string
     */
    public function getRequestsMemory()
    {
        return $this->container['requestsMemory'];
    }

    /**
     * Sets requestsMemory
     * @param string $requestsMemory
     * @return $this
     */
    public function setRequestsMemory($requestsMemory)
    {
        $this->container['requestsMemory'] = $requestsMemory;

        return $this;
    }


    /**
     * Gets requestsStorage
     * @return string
     */
    public function getRequestsStorage()
    {
        return $this->container['requestsStorage'];
    }

    /**
     * Sets requestsStorage
     * @param string $requestsStorage
     * @return $this
     */
    public function setRequestsStorage($requestsStorage)
    {
        $this->container['requestsStorage'] = $requestsStorage;

        return $this;
    }


    /**
     * Gets secrets
     * @return string
     */
    public function getSecrets()
    {
        return $this->container['secrets'];
    }

    /**
     * Sets secrets
     * @param string $secrets
     * @return $this
     */
    public function setSecrets($secrets)
    {
        $this->container['secrets'] = $secrets;

        return $this;
    }


    /**
     * Gets services
     * @return string
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param string $services
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }


    /**
     * Gets servicesLoadBalancers
     * @return string
     */
    public function getServicesLoadBalancers()
    {
        return $this->container['servicesLoadBalancers'];
    }

    /**
     * Sets servicesLoadBalancers
     * @param string $servicesLoadBalancers
     * @return $this
     */
    public function setServicesLoadBalancers($servicesLoadBalancers)
    {
        $this->container['servicesLoadBalancers'] = $servicesLoadBalancers;

        return $this;
    }


    /**
     * Gets servicesNodePorts
     * @return string
     */
    public function getServicesNodePorts()
    {
        return $this->container['servicesNodePorts'];
    }

    /**
     * Sets servicesNodePorts
     * @param string $servicesNodePorts
     * @return $this
     */
    public function setServicesNodePorts($servicesNodePorts)
    {
        $this->container['servicesNodePorts'] = $servicesNodePorts;

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

