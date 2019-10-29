<?php

namespace Rancher\Model;

use \ArrayAccess;

class PersistentVolumeClaimVolumeSource implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'persistentVolumeClaimId' => 'string',
        'readOnly' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'persistentVolumeClaimId' => 'setPersistentVolumeClaimId',
        'readOnly' => 'setReadOnly',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'persistentVolumeClaimId' => 'getPersistentVolumeClaimId',
        'readOnly' => 'getReadOnly',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['persistentVolumeClaimId'] = isset($data['persistentVolumeClaimId']) ? $data['persistentVolumeClaimId'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
    }

    /**
     * Gets persistentVolumeClaimId
     * @return string
     */
    public function getPersistentVolumeClaimId()
    {
        return $this->container['persistentVolumeClaimId'];
    }

    /**
     * Sets persistentVolumeClaimId
     * @param string $persistentVolumeClaimId
     * @return $this
     */
    public function setPersistentVolumeClaimId($persistentVolumeClaimId)
    {
        $this->container['persistentVolumeClaimId'] = $persistentVolumeClaimId;

        return $this;
    }


    /**
     * Gets readOnly
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     * @param boolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

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

