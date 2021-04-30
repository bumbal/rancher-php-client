<?php

/**
 * ScheduledClusterScanConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ScheduledClusterScanConfigModel implements ArrayAccess
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
        'cronSchedule',
        'retention',
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
        'cronSchedule',
        'retention',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'cronSchedule' => 'string',
        'retention' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cronSchedule' => 'setCronSchedule',
        'retention' => 'setRetention',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cronSchedule' => 'getCronSchedule',
        'retention' => 'getRetention',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cronSchedule'] = isset($data['cronSchedule']) ? $data['cronSchedule'] : null;
        $this->container['retention'] = isset($data['retention']) ? $data['retention'] : null;
    }

    /**
     * Gets cronSchedule
     * @return string
     */
    public function getCronSchedule()
    {
        return $this->container['cronSchedule'];
    }

    /**
     * Sets cronSchedule
     * @param string $cronSchedule
     * @return $this
     */
    public function setCronSchedule($cronSchedule)
    {
        $this->container['cronSchedule'] = $cronSchedule;

        return $this;
    }


    /**
     * Gets retention
     * @return int
     */
    public function getRetention()
    {
        return $this->container['retention'];
    }

    /**
     * Sets retention
     * @param int $retention
     * @return $this
     */
    public function setRetention($retention)
    {
        $this->container['retention'] = $retention;

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

