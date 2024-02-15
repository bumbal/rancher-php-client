<?php

/**
 * AwsElasticBlockStoreVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AwsElasticBlockStoreVolumeSourceModel implements ArrayAccess
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
        'fsType',
        'partition',
        'readOnly',
        'volumeID',
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
        'fsType',
        'partition',
        'readOnly',
        'volumeID',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'fsType' => 'string',
        'partition' => 'int',
        'readOnly' => 'boolean',
        'volumeID' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsType' => 'setFsType',
        'partition' => 'setPartition',
        'readOnly' => 'setReadOnly',
        'volumeID' => 'setVolumeID',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsType' => 'getFsType',
        'partition' => 'getPartition',
        'readOnly' => 'getReadOnly',
        'volumeID' => 'getVolumeID',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['volumeID'] = isset($data['volumeID']) ? $data['volumeID'] : null;
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
     * Gets partition
     * @return int
     */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
     * Sets partition
     * @param int $partition
     * @return $this
     */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;

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
     * Gets volumeID
     * @return string
     */
    public function getVolumeID()
    {
        return $this->container['volumeID'];
    }

    /**
     * Sets volumeID
     * @param string $volumeID
     * @return $this
     */
    public function setVolumeID($volumeID)
    {
        $this->container['volumeID'] = $volumeID;

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

