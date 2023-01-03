<?php

/**
 * MonitoringConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class MonitoringConfigModel implements ArrayAccess
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
        'metricsServerPriorityClassName',
        'nodeSelector',
        'options',
        'provider',
        'replicas',
        'tolerations',
        'updateStrategy',
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
        'metricsServerPriorityClassName',
        'nodeSelector',
        'options',
        'provider',
        'replicas',
        'tolerations',
        'updateStrategy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'metricsServerPriorityClassName' => 'string',
        'nodeSelector' => 'map[string,string]',
        'options' => 'map[string,string]',
        'provider' => 'string',
        'replicas' => 'int',
        'tolerations' => '\Rancher\Model\TolerationModel[]',
        'updateStrategy' => '\Rancher\Model\DeploymentStrategyModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'metricsServerPriorityClassName' => 'setMetricsServerPriorityClassName',
        'nodeSelector' => 'setNodeSelector',
        'options' => 'setOptions',
        'provider' => 'setProvider',
        'replicas' => 'setReplicas',
        'tolerations' => 'setTolerations',
        'updateStrategy' => 'setUpdateStrategy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'metricsServerPriorityClassName' => 'getMetricsServerPriorityClassName',
        'nodeSelector' => 'getNodeSelector',
        'options' => 'getOptions',
        'provider' => 'getProvider',
        'replicas' => 'getReplicas',
        'tolerations' => 'getTolerations',
        'updateStrategy' => 'getUpdateStrategy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['metricsServerPriorityClassName'] = isset($data['metricsServerPriorityClassName']) ? $data['metricsServerPriorityClassName'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['updateStrategy'] = isset($data['updateStrategy']) ? $data['updateStrategy'] : null;
    }

    /**
     * Gets metricsServerPriorityClassName
     * @return string
     */
    public function getMetricsServerPriorityClassName()
    {
        return $this->container['metricsServerPriorityClassName'];
    }

    /**
     * Sets metricsServerPriorityClassName
     * @param string $metricsServerPriorityClassName
     * @return $this
     */
    public function setMetricsServerPriorityClassName($metricsServerPriorityClassName)
    {
        $this->container['metricsServerPriorityClassName'] = $metricsServerPriorityClassName;

        return $this;
    }


    /**
     * Gets nodeSelector
     * @return string[]
     */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
     * Sets nodeSelector
     * @param string[] $nodeSelector
     * @return $this
     */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;

        return $this;
    }


    /**
     * Gets options
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param string[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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
     * Gets replicas
     * @return int
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     * @param int $replicas
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }


    /**
     * Gets tolerations
     * @return \Rancher\Model\TolerationModel[]
     */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
     * Sets tolerations
     * @param \Rancher\Model\TolerationModel[] $tolerations
     * @return $this
     */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;

        return $this;
    }


    /**
     * Gets updateStrategy
     * @return \Rancher\Model\DeploymentStrategyModel
     */
    public function getUpdateStrategy()
    {
        return $this->container['updateStrategy'];
    }

    /**
     * Sets updateStrategy
     * @param \Rancher\Model\DeploymentStrategyModel $updateStrategy
     * @return $this
     */
    public function setUpdateStrategy($updateStrategy)
    {
        $this->container['updateStrategy'] = $updateStrategy;

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

