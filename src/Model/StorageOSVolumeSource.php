<?php

namespace Rancher\Model;

use \ArrayAccess;

class StorageOSVolumeSource implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'fsType' => 'string',
        'readOnly' => 'boolean',
        'secretRef' => '\Rancher\Model\LocalObjectReference',
        'volumeName' => 'string',
        'volumeNamespace' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsType' => 'setFsType',
        'readOnly' => 'setReadOnly',
        'secretRef' => 'setSecretRef',
        'volumeName' => 'setVolumeName',
        'volumeNamespace' => 'setVolumeNamespace',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsType' => 'getFsType',
        'readOnly' => 'getReadOnly',
        'secretRef' => 'getSecretRef',
        'volumeName' => 'getVolumeName',
        'volumeNamespace' => 'getVolumeNamespace',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['volumeName'] = isset($data['volumeName']) ? $data['volumeName'] : null;
        $this->container['volumeNamespace'] = isset($data['volumeNamespace']) ? $data['volumeNamespace'] : null;
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
     * Gets secretRef
     * @return \Rancher\Model\LocalObjectReference
     */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
     * Sets secretRef
     * @param \Rancher\Model\LocalObjectReference $secretRef
     * @return $this
     */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;

        return $this;
    }


    /**
     * Gets volumeName
     * @return string
     */
    public function getVolumeName()
    {
        return $this->container['volumeName'];
    }

    /**
     * Sets volumeName
     * @param string $volumeName
     * @return $this
     */
    public function setVolumeName($volumeName)
    {
        $this->container['volumeName'] = $volumeName;

        return $this;
    }


    /**
     * Gets volumeNamespace
     * @return string
     */
    public function getVolumeNamespace()
    {
        return $this->container['volumeNamespace'];
    }

    /**
     * Sets volumeNamespace
     * @param string $volumeNamespace
     * @return $this
     */
    public function setVolumeNamespace($volumeNamespace)
    {
        $this->container['volumeNamespace'] = $volumeNamespace;

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

