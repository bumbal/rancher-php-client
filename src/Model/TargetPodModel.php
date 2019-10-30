<?php

/**
 * TargetPodModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TargetPodModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'condition' => 'string',
        'podId' => 'string',
        'restartIntervalSeconds' => 'int',
        'restartTimes' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'condition' => 'setCondition',
        'podId' => 'setPodId',
        'restartIntervalSeconds' => 'setRestartIntervalSeconds',
        'restartTimes' => 'setRestartTimes',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'condition' => 'getCondition',
        'podId' => 'getPodId',
        'restartIntervalSeconds' => 'getRestartIntervalSeconds',
        'restartTimes' => 'getRestartTimes',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['restartIntervalSeconds'] = isset($data['restartIntervalSeconds']) ? $data['restartIntervalSeconds'] : null;
        $this->container['restartTimes'] = isset($data['restartTimes']) ? $data['restartTimes'] : null;
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
     * Gets podId
     * @return string
     */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
     * Sets podId
     * @param string $podId
     * @return $this
     */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;

        return $this;
    }


    /**
     * Gets restartIntervalSeconds
     * @return int
     */
    public function getRestartIntervalSeconds()
    {
        return $this->container['restartIntervalSeconds'];
    }

    /**
     * Sets restartIntervalSeconds
     * @param int $restartIntervalSeconds
     * @return $this
     */
    public function setRestartIntervalSeconds($restartIntervalSeconds)
    {
        $this->container['restartIntervalSeconds'] = $restartIntervalSeconds;

        return $this;
    }


    /**
     * Gets restartTimes
     * @return int
     */
    public function getRestartTimes()
    {
        return $this->container['restartTimes'];
    }

    /**
     * Sets restartTimes
     * @param int $restartTimes
     * @return $this
     */
    public function setRestartTimes($restartTimes)
    {
        $this->container['restartTimes'] = $restartTimes;

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

