<?php

/**
 * StatefulSetPersistentVolumeClaimRetentionPolicyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class StatefulSetPersistentVolumeClaimRetentionPolicyModel implements ArrayAccess
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
        'whenDeleted',
        'whenScaled',
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
        'whenDeleted',
        'whenScaled',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'whenDeleted' => 'string',
        'whenScaled' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'whenDeleted' => 'setWhenDeleted',
        'whenScaled' => 'setWhenScaled',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'whenDeleted' => 'getWhenDeleted',
        'whenScaled' => 'getWhenScaled',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['whenDeleted'] = isset($data['whenDeleted']) ? $data['whenDeleted'] : null;
        $this->container['whenScaled'] = isset($data['whenScaled']) ? $data['whenScaled'] : null;
    }

    /**
     * Gets whenDeleted
     * @return string
     */
    public function getWhenDeleted()
    {
        return $this->container['whenDeleted'];
    }

    /**
     * Sets whenDeleted
     * @param string $whenDeleted
     * @return $this
     */
    public function setWhenDeleted($whenDeleted)
    {
        $this->container['whenDeleted'] = $whenDeleted;

        return $this;
    }


    /**
     * Gets whenScaled
     * @return string
     */
    public function getWhenScaled()
    {
        return $this->container['whenScaled'];
    }

    /**
     * Sets whenScaled
     * @param string $whenScaled
     * @return $this
     */
    public function setWhenScaled($whenScaled)
    {
        $this->container['whenScaled'] = $whenScaled;

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

