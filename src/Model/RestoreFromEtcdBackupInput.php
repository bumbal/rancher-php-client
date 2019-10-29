<?php

namespace Rancher\Model;

use \ArrayAccess;

class RestoreFromEtcdBackupInput implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'etcdBackupId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'etcdBackupId' => 'setEtcdBackupId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'etcdBackupId' => 'getEtcdBackupId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['etcdBackupId'] = isset($data['etcdBackupId']) ? $data['etcdBackupId'] : null;
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

