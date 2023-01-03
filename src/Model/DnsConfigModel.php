<?php

/**
 * DnsConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class DnsConfigModel implements ArrayAccess
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
        'linearAutoscalerParams',
        'nodeSelector',
        'nodelocal',
        'options',
        'provider',
        'reversecidrs',
        'stubdomains',
        'tolerations',
        'updateStrategy',
        'upstreamnameservers',
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
        'linearAutoscalerParams',
        'nodeSelector',
        'nodelocal',
        'options',
        'provider',
        'reversecidrs',
        'stubdomains',
        'tolerations',
        'updateStrategy',
        'upstreamnameservers',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'linearAutoscalerParams' => '\Rancher\Model\LinearAutoscalerParamsModel',
        'nodeSelector' => 'map[string,string]',
        'nodelocal' => '\Rancher\Model\NodelocalModel',
        'options' => 'map[string,string]',
        'provider' => 'string',
        'reversecidrs' => 'string[]',
        'stubdomains' => 'map[string,\Rancher\Model\Array[string]Model]',
        'tolerations' => '\Rancher\Model\TolerationModel[]',
        'updateStrategy' => '\Rancher\Model\DeploymentStrategyModel',
        'upstreamnameservers' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'linearAutoscalerParams' => 'setLinearAutoscalerParams',
        'nodeSelector' => 'setNodeSelector',
        'nodelocal' => 'setNodelocal',
        'options' => 'setOptions',
        'provider' => 'setProvider',
        'reversecidrs' => 'setReversecidrs',
        'stubdomains' => 'setStubdomains',
        'tolerations' => 'setTolerations',
        'updateStrategy' => 'setUpdateStrategy',
        'upstreamnameservers' => 'setUpstreamnameservers',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'linearAutoscalerParams' => 'getLinearAutoscalerParams',
        'nodeSelector' => 'getNodeSelector',
        'nodelocal' => 'getNodelocal',
        'options' => 'getOptions',
        'provider' => 'getProvider',
        'reversecidrs' => 'getReversecidrs',
        'stubdomains' => 'getStubdomains',
        'tolerations' => 'getTolerations',
        'updateStrategy' => 'getUpdateStrategy',
        'upstreamnameservers' => 'getUpstreamnameservers',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['linearAutoscalerParams'] = isset($data['linearAutoscalerParams']) ? $data['linearAutoscalerParams'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['nodelocal'] = isset($data['nodelocal']) ? $data['nodelocal'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['reversecidrs'] = isset($data['reversecidrs']) ? $data['reversecidrs'] : null;
        $this->container['stubdomains'] = isset($data['stubdomains']) ? $data['stubdomains'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['updateStrategy'] = isset($data['updateStrategy']) ? $data['updateStrategy'] : null;
        $this->container['upstreamnameservers'] = isset($data['upstreamnameservers']) ? $data['upstreamnameservers'] : null;
    }

    /**
     * Gets linearAutoscalerParams
     * @return \Rancher\Model\LinearAutoscalerParamsModel
     */
    public function getLinearAutoscalerParams()
    {
        return $this->container['linearAutoscalerParams'];
    }

    /**
     * Sets linearAutoscalerParams
     * @param \Rancher\Model\LinearAutoscalerParamsModel $linearAutoscalerParams
     * @return $this
     */
    public function setLinearAutoscalerParams($linearAutoscalerParams)
    {
        $this->container['linearAutoscalerParams'] = $linearAutoscalerParams;

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
     * Gets nodelocal
     * @return \Rancher\Model\NodelocalModel
     */
    public function getNodelocal()
    {
        return $this->container['nodelocal'];
    }

    /**
     * Sets nodelocal
     * @param \Rancher\Model\NodelocalModel $nodelocal
     * @return $this
     */
    public function setNodelocal($nodelocal)
    {
        $this->container['nodelocal'] = $nodelocal;

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
     * Gets reversecidrs
     * @return string[]
     */
    public function getReversecidrs()
    {
        return $this->container['reversecidrs'];
    }

    /**
     * Sets reversecidrs
     * @param string[] $reversecidrs
     * @return $this
     */
    public function setReversecidrs($reversecidrs)
    {
        $this->container['reversecidrs'] = $reversecidrs;

        return $this;
    }


    /**
     * Gets stubdomains
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getStubdomains()
    {
        return $this->container['stubdomains'];
    }

    /**
     * Sets stubdomains
     * @param \Rancher\Model\Array[string]Model[] $stubdomains
     * @return $this
     */
    public function setStubdomains($stubdomains)
    {
        $this->container['stubdomains'] = $stubdomains;

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
     * Gets upstreamnameservers
     * @return string[]
     */
    public function getUpstreamnameservers()
    {
        return $this->container['upstreamnameservers'];
    }

    /**
     * Sets upstreamnameservers
     * @param string[] $upstreamnameservers
     * @return $this
     */
    public function setUpstreamnameservers($upstreamnameservers)
    {
        $this->container['upstreamnameservers'] = $upstreamnameservers;

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

