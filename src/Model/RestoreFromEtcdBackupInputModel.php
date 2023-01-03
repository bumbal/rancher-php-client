<?php

/**
 * RestoreFromEtcdBackupInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RestoreFromEtcdBackupInputModel implements ArrayAccess
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
        'etcdBackupId',
        'restoreRkeConfig',
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
        'etcdBackupId',
        'restoreRkeConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'etcdBackupId' => 'string',
        'restoreRkeConfig' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'etcdBackupId' => 'setEtcdBackupId',
        'restoreRkeConfig' => 'setRestoreRkeConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'etcdBackupId' => 'getEtcdBackupId',
        'restoreRkeConfig' => 'getRestoreRkeConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['etcdBackupId'] = isset($data['etcdBackupId']) ? $data['etcdBackupId'] : null;
        $this->container['restoreRkeConfig'] = isset($data['restoreRkeConfig']) ? $data['restoreRkeConfig'] : null;
    }

    /**
     * Gets etcdBackupId
     * @return string
     */
    public function getEtcdBackupId()
    {
        return $this->container['etcdBackupId'];
    }

    /**
     * Sets etcdBackupId
     * @param string $etcdBackupId
     * @return $this
     */
    public function setEtcdBackupId($etcdBackupId)
    {
        $this->container['etcdBackupId'] = $etcdBackupId;

        return $this;
    }


    /**
     * Gets restoreRkeConfig
     * @return string
     */
    public function getRestoreRkeConfig()
    {
        return $this->container['restoreRkeConfig'];
    }

    /**
     * Sets restoreRkeConfig
     * @param string $restoreRkeConfig
     * @return $this
     */
    public function setRestoreRkeConfig($restoreRkeConfig)
    {
        $this->container['restoreRkeConfig'] = $restoreRkeConfig;

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

