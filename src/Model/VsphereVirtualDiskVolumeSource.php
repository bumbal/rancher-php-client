<?php

namespace Rancher\Model;

use \ArrayAccess;

class VsphereVirtualDiskVolumeSource implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'fsType' => 'string',
        'storagePolicyID' => 'string',
        'storagePolicyName' => 'string',
        'volumePath' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsType' => 'setFsType',
        'storagePolicyID' => 'setStoragePolicyID',
        'storagePolicyName' => 'setStoragePolicyName',
        'volumePath' => 'setVolumePath',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsType' => 'getFsType',
        'storagePolicyID' => 'getStoragePolicyID',
        'storagePolicyName' => 'getStoragePolicyName',
        'volumePath' => 'getVolumePath',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['storagePolicyID'] = isset($data['storagePolicyID']) ? $data['storagePolicyID'] : null;
        $this->container['storagePolicyName'] = isset($data['storagePolicyName']) ? $data['storagePolicyName'] : null;
        $this->container['volumePath'] = isset($data['volumePath']) ? $data['volumePath'] : null;
    }

    /**
     * Gets fsType
     * @return string
     */
    public function getFsType()
    {
        return $this->container['fsType'];
    }

    /**
     * Sets fsType
     * @param string $fsType
     * @return $this
     */
    public function setFsType($fsType)
    {
        $this->container['fsType'] = $fsType;

        return $this;
    }


    /**
     * Gets storagePolicyID
     * @return string
     */
    public function getStoragePolicyID()
    {
        return $this->container['storagePolicyID'];
    }

    /**
     * Sets storagePolicyID
     * @param string $storagePolicyID
     * @return $this
     */
    public function setStoragePolicyID($storagePolicyID)
    {
        $this->container['storagePolicyID'] = $storagePolicyID;

        return $this;
    }


    /**
     * Gets storagePolicyName
     * @return string
     */
    public function getStoragePolicyName()
    {
        return $this->container['storagePolicyName'];
    }

    /**
     * Sets storagePolicyName
     * @param string $storagePolicyName
     * @return $this
     */
    public function setStoragePolicyName($storagePolicyName)
    {
        $this->container['storagePolicyName'] = $storagePolicyName;

        return $this;
    }


    /**
     * Gets volumePath
     * @return string
     */
    public function getVolumePath()
    {
        return $this->container['volumePath'];
    }

    /**
     * Sets volumePath
     * @param string $volumePath
     * @return $this
     */
    public function setVolumePath($volumePath)
    {
        $this->container['volumePath'] = $volumePath;

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

