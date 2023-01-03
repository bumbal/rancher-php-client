<?php

/**
 * CsiVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CsiVolumeSourceModel implements ArrayAccess
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
        'driver',
        'fsType',
        'nodePublishSecretRef',
        'readOnly',
        'volumeAttributes',
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
        'driver',
        'fsType',
        'nodePublishSecretRef',
        'readOnly',
        'volumeAttributes',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'driver' => 'string',
        'fsType' => 'string',
        'nodePublishSecretRef' => '\Rancher\Model\LocalObjectReferenceModel',
        'readOnly' => 'boolean',
        'volumeAttributes' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'driver' => 'setDriver',
        'fsType' => 'setFsType',
        'nodePublishSecretRef' => 'setNodePublishSecretRef',
        'readOnly' => 'setReadOnly',
        'volumeAttributes' => 'setVolumeAttributes',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'driver' => 'getDriver',
        'fsType' => 'getFsType',
        'nodePublishSecretRef' => 'getNodePublishSecretRef',
        'readOnly' => 'getReadOnly',
        'volumeAttributes' => 'getVolumeAttributes',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['nodePublishSecretRef'] = isset($data['nodePublishSecretRef']) ? $data['nodePublishSecretRef'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['volumeAttributes'] = isset($data['volumeAttributes']) ? $data['volumeAttributes'] : null;
    }

    /**
     * Gets driver
     * @return string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     * @param string $driver
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

        return $this;
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
     * Gets nodePublishSecretRef
     * @return \Rancher\Model\LocalObjectReferenceModel
     */
    public function getNodePublishSecretRef()
    {
        return $this->container['nodePublishSecretRef'];
    }

    /**
     * Sets nodePublishSecretRef
     * @param \Rancher\Model\LocalObjectReferenceModel $nodePublishSecretRef
     * @return $this
     */
    public function setNodePublishSecretRef($nodePublishSecretRef)
    {
        $this->container['nodePublishSecretRef'] = $nodePublishSecretRef;

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
     * Gets volumeAttributes
     * @return string[]
     */
    public function getVolumeAttributes()
    {
        return $this->container['volumeAttributes'];
    }

    /**
     * Sets volumeAttributes
     * @param string[] $volumeAttributes
     * @return $this
     */
    public function setVolumeAttributes($volumeAttributes)
    {
        $this->container['volumeAttributes'] = $volumeAttributes;

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

