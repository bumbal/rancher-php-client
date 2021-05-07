<?php

/**
 * GkeNodePoolManagementModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeNodePoolManagementModel implements ArrayAccess
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
        'autoRepair',
        'autoUpgrade',
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
        'autoRepair',
        'autoUpgrade',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'autoRepair' => 'boolean',
        'autoUpgrade' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'autoRepair' => 'setAutoRepair',
        'autoUpgrade' => 'setAutoUpgrade',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'autoRepair' => 'getAutoRepair',
        'autoUpgrade' => 'getAutoUpgrade',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['autoRepair'] = isset($data['autoRepair']) ? $data['autoRepair'] : null;
        $this->container['autoUpgrade'] = isset($data['autoUpgrade']) ? $data['autoUpgrade'] : null;
    }

    /**
     * Gets autoRepair
     * @return boolean
     */
    public function getAutoRepair()
    {
        return $this->container['autoRepair'];
    }

    /**
     * Sets autoRepair
     * @param boolean $autoRepair
     * @return $this
     */
    public function setAutoRepair($autoRepair)
    {
        $this->container['autoRepair'] = $autoRepair;

        return $this;
    }


    /**
     * Gets autoUpgrade
     * @return boolean
     */
    public function getAutoUpgrade()
    {
        return $this->container['autoUpgrade'];
    }

    /**
     * Sets autoUpgrade
     * @param boolean $autoUpgrade
     * @return $this
     */
    public function setAutoUpgrade($autoUpgrade)
    {
        $this->container['autoUpgrade'] = $autoUpgrade;

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

