<?php

/**
 * ScheduledClusterScanModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ScheduledClusterScanModel implements ArrayAccess
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
        'enabled',
        'scanConfig',
        'scheduleConfig',
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
        'enabled',
        'scanConfig',
        'scheduleConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'enabled' => 'boolean',
        'scanConfig' => '\Rancher\Model\ClusterScanConfigModel',
        'scheduleConfig' => '\Rancher\Model\ScheduledClusterScanConfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'enabled' => 'setEnabled',
        'scanConfig' => 'setScanConfig',
        'scheduleConfig' => 'setScheduleConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'enabled' => 'getEnabled',
        'scanConfig' => 'getScanConfig',
        'scheduleConfig' => 'getScheduleConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['scanConfig'] = isset($data['scanConfig']) ? $data['scanConfig'] : null;
        $this->container['scheduleConfig'] = isset($data['scheduleConfig']) ? $data['scheduleConfig'] : null;
    }

    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets scanConfig
     * @return \Rancher\Model\ClusterScanConfigModel
     */
    public function getScanConfig()
    {
        return $this->container['scanConfig'];
    }

    /**
     * Sets scanConfig
     * @param \Rancher\Model\ClusterScanConfigModel $scanConfig
     * @return $this
     */
    public function setScanConfig($scanConfig)
    {
        $this->container['scanConfig'] = $scanConfig;

        return $this;
    }


    /**
     * Gets scheduleConfig
     * @return \Rancher\Model\ScheduledClusterScanConfigModel
     */
    public function getScheduleConfig()
    {
        return $this->container['scheduleConfig'];
    }

    /**
     * Sets scheduleConfig
     * @param \Rancher\Model\ScheduledClusterScanConfigModel $scheduleConfig
     * @return $this
     */
    public function setScheduleConfig($scheduleConfig)
    {
        $this->container['scheduleConfig'] = $scheduleConfig;

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

