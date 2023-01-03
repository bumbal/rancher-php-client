<?php

/**
 * RestoreConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RestoreConfigModel implements ArrayAccess
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
        'restore',
        'snapshotName',
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
        'restore',
        'snapshotName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'restore' => 'boolean',
        'snapshotName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'restore' => 'setRestore',
        'snapshotName' => 'setSnapshotName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'restore' => 'getRestore',
        'snapshotName' => 'getSnapshotName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['restore'] = isset($data['restore']) ? $data['restore'] : null;
        $this->container['snapshotName'] = isset($data['snapshotName']) ? $data['snapshotName'] : null;
    }

    /**
     * Gets restore
     * @return boolean
     */
    public function getRestore()
    {
        return $this->container['restore'];
    }

    /**
     * Sets restore
     * @param boolean $restore
     * @return $this
     */
    public function setRestore($restore)
    {
        $this->container['restore'] = $restore;

        return $this;
    }


    /**
     * Gets snapshotName
     * @return string
     */
    public function getSnapshotName()
    {
        return $this->container['snapshotName'];
    }

    /**
     * Sets snapshotName
     * @param string $snapshotName
     * @return $this
     */
    public function setSnapshotName($snapshotName)
    {
        $this->container['snapshotName'] = $snapshotName;

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

