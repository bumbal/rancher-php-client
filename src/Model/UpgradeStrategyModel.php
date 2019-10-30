<?php

/**
 * UpgradeStrategyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class UpgradeStrategyModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'rollingUpdate' => '\Rancher\Model\RollingUpdateModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'rollingUpdate' => 'setRollingUpdate',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'rollingUpdate' => 'getRollingUpdate',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['rollingUpdate'] = isset($data['rollingUpdate']) ? $data['rollingUpdate'] : null;
    }

    /**
     * Gets rollingUpdate
     * @return \Rancher\Model\RollingUpdateModel
     */
    public function getRollingUpdate()
    {
        return $this->container['rollingUpdate'];
    }

    /**
     * Sets rollingUpdate
     * @param \Rancher\Model\RollingUpdateModel $rollingUpdate
     * @return $this
     */
    public function setRollingUpdate($rollingUpdate)
    {
        $this->container['rollingUpdate'] = $rollingUpdate;

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

