<?php

/**
 * GkeNodePoolConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeNodePoolConfigModel implements ArrayAccess
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
        'autoscaling',
        'config',
        'initialNodeCount',
        'management',
        'maxPodsConstraint',
        'name',
        'version',
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
        'autoscaling',
        'config',
        'initialNodeCount',
        'management',
        'maxPodsConstraint',
        'name',
        'version',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'autoscaling' => '\Rancher\Model\GkeNodePoolAutoscalingModel',
        'config' => '\Rancher\Model\GkeNodeConfigModel',
        'initialNodeCount' => 'int',
        'management' => '\Rancher\Model\GkeNodePoolManagementModel',
        'maxPodsConstraint' => 'int',
        'name' => 'string',
        'version' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'autoscaling' => 'setAutoscaling',
        'config' => 'setConfig',
        'initialNodeCount' => 'setInitialNodeCount',
        'management' => 'setManagement',
        'maxPodsConstraint' => 'setMaxPodsConstraint',
        'name' => 'setName',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'autoscaling' => 'getAutoscaling',
        'config' => 'getConfig',
        'initialNodeCount' => 'getInitialNodeCount',
        'management' => 'getManagement',
        'maxPodsConstraint' => 'getMaxPodsConstraint',
        'name' => 'getName',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['initialNodeCount'] = isset($data['initialNodeCount']) ? $data['initialNodeCount'] : null;
        $this->container['management'] = isset($data['management']) ? $data['management'] : null;
        $this->container['maxPodsConstraint'] = isset($data['maxPodsConstraint']) ? $data['maxPodsConstraint'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets autoscaling
     * @return \Rancher\Model\GkeNodePoolAutoscalingModel
     */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
     * Sets autoscaling
     * @param \Rancher\Model\GkeNodePoolAutoscalingModel $autoscaling
     * @return $this
     */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;

        return $this;
    }


    /**
     * Gets config
     * @return \Rancher\Model\GkeNodeConfigModel
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param \Rancher\Model\GkeNodeConfigModel $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }


    /**
     * Gets initialNodeCount
     * @return int
     */
    public function getInitialNodeCount()
    {
        return $this->container['initialNodeCount'];
    }

    /**
     * Sets initialNodeCount
     * @param int $initialNodeCount
     * @return $this
     */
    public function setInitialNodeCount($initialNodeCount)
    {
        $this->container['initialNodeCount'] = $initialNodeCount;

        return $this;
    }


    /**
     * Gets management
     * @return \Rancher\Model\GkeNodePoolManagementModel
     */
    public function getManagement()
    {
        return $this->container['management'];
    }

    /**
     * Sets management
     * @param \Rancher\Model\GkeNodePoolManagementModel $management
     * @return $this
     */
    public function setManagement($management)
    {
        $this->container['management'] = $management;

        return $this;
    }


    /**
     * Gets maxPodsConstraint
     * @return int
     */
    public function getMaxPodsConstraint()
    {
        return $this->container['maxPodsConstraint'];
    }

    /**
     * Sets maxPodsConstraint
     * @param int $maxPodsConstraint
     * @return $this
     */
    public function setMaxPodsConstraint($maxPodsConstraint)
    {
        $this->container['maxPodsConstraint'] = $maxPodsConstraint;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

