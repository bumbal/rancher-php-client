<?php

/**
 * NodePlanModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodePlanModel implements ArrayAccess
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
        'agentCheckInterval',
        'plan',
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
        'agentCheckInterval',
        'plan',
        'version',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'agentCheckInterval' => 'int',
        'plan' => '\Rancher\Model\RkeConfigNodePlanModel',
        'version' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'agentCheckInterval' => 'setAgentCheckInterval',
        'plan' => 'setPlan',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'agentCheckInterval' => 'getAgentCheckInterval',
        'plan' => 'getPlan',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['agentCheckInterval'] = isset($data['agentCheckInterval']) ? $data['agentCheckInterval'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets agentCheckInterval
     * @return int
     */
    public function getAgentCheckInterval()
    {
        return $this->container['agentCheckInterval'];
    }

    /**
     * Sets agentCheckInterval
     * @param int $agentCheckInterval
     * @return $this
     */
    public function setAgentCheckInterval($agentCheckInterval)
    {
        $this->container['agentCheckInterval'] = $agentCheckInterval;

        return $this;
    }


    /**
     * Gets plan
     * @return \Rancher\Model\RkeConfigNodePlanModel
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     * @param \Rancher\Model\RkeConfigNodePlanModel $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }


    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version
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

