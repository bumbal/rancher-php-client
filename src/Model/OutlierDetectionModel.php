<?php

/**
 * OutlierDetectionModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class OutlierDetectionModel implements ArrayAccess
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
        'baseEjectionTime',
        'consecutiveErrors',
        'interval',
        'maxEjectionPercent',
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
        'baseEjectionTime',
        'consecutiveErrors',
        'interval',
        'maxEjectionPercent',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'baseEjectionTime' => 'string',
        'consecutiveErrors' => 'int',
        'interval' => 'string',
        'maxEjectionPercent' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'baseEjectionTime' => 'setBaseEjectionTime',
        'consecutiveErrors' => 'setConsecutiveErrors',
        'interval' => 'setInterval',
        'maxEjectionPercent' => 'setMaxEjectionPercent',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'baseEjectionTime' => 'getBaseEjectionTime',
        'consecutiveErrors' => 'getConsecutiveErrors',
        'interval' => 'getInterval',
        'maxEjectionPercent' => 'getMaxEjectionPercent',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['baseEjectionTime'] = isset($data['baseEjectionTime']) ? $data['baseEjectionTime'] : null;
        $this->container['consecutiveErrors'] = isset($data['consecutiveErrors']) ? $data['consecutiveErrors'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['maxEjectionPercent'] = isset($data['maxEjectionPercent']) ? $data['maxEjectionPercent'] : null;
    }

    /**
     * Gets baseEjectionTime
     * @return string
     */
    public function getBaseEjectionTime()
    {
        return $this->container['baseEjectionTime'];
    }

    /**
     * Sets baseEjectionTime
     * @param string $baseEjectionTime
     * @return $this
     */
    public function setBaseEjectionTime($baseEjectionTime)
    {
        $this->container['baseEjectionTime'] = $baseEjectionTime;

        return $this;
    }


    /**
     * Gets consecutiveErrors
     * @return int
     */
    public function getConsecutiveErrors()
    {
        return $this->container['consecutiveErrors'];
    }

    /**
     * Sets consecutiveErrors
     * @param int $consecutiveErrors
     * @return $this
     */
    public function setConsecutiveErrors($consecutiveErrors)
    {
        $this->container['consecutiveErrors'] = $consecutiveErrors;

        return $this;
    }


    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }


    /**
     * Gets maxEjectionPercent
     * @return int
     */
    public function getMaxEjectionPercent()
    {
        return $this->container['maxEjectionPercent'];
    }

    /**
     * Sets maxEjectionPercent
     * @param int $maxEjectionPercent
     * @return $this
     */
    public function setMaxEjectionPercent($maxEjectionPercent)
    {
        $this->container['maxEjectionPercent'] = $maxEjectionPercent;

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

