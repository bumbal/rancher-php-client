<?php

/**
 * TargetNodeModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TargetNodeModel implements ArrayAccess
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
        'condition',
        'cpuThreshold',
        'memThreshold',
        'nodeId',
        'selector',
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
        'condition',
        'cpuThreshold',
        'memThreshold',
        'nodeId',
        'selector',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'condition' => 'string',
        'cpuThreshold' => 'int',
        'memThreshold' => 'int',
        'nodeId' => 'string',
        'selector' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'condition' => 'setCondition',
        'cpuThreshold' => 'setCpuThreshold',
        'memThreshold' => 'setMemThreshold',
        'nodeId' => 'setNodeId',
        'selector' => 'setSelector',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'condition' => 'getCondition',
        'cpuThreshold' => 'getCpuThreshold',
        'memThreshold' => 'getMemThreshold',
        'nodeId' => 'getNodeId',
        'selector' => 'getSelector',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['cpuThreshold'] = isset($data['cpuThreshold']) ? $data['cpuThreshold'] : null;
        $this->container['memThreshold'] = isset($data['memThreshold']) ? $data['memThreshold'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }


    /**
     * Gets cpuThreshold
     * @return int
     */
    public function getCpuThreshold()
    {
        return $this->container['cpuThreshold'];
    }

    /**
     * Sets cpuThreshold
     * @param int $cpuThreshold
     * @return $this
     */
    public function setCpuThreshold($cpuThreshold)
    {
        $this->container['cpuThreshold'] = $cpuThreshold;

        return $this;
    }


    /**
     * Gets memThreshold
     * @return int
     */
    public function getMemThreshold()
    {
        return $this->container['memThreshold'];
    }

    /**
     * Sets memThreshold
     * @param int $memThreshold
     * @return $this
     */
    public function setMemThreshold($memThreshold)
    {
        $this->container['memThreshold'] = $memThreshold;

        return $this;
    }


    /**
     * Gets nodeId
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;

        return $this;
    }


    /**
     * Gets selector
     * @return string[]
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     * @param string[] $selector
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

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

