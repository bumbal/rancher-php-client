<?php

/**
 * PersistentVolumeClaimSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PersistentVolumeClaimSpecModel implements ArrayAccess
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
        'accessModes',
        'dataSource',
        'resources',
        'selector',
        'storageClassId',
        'volumeId',
        'volumeMode',
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
        'accessModes',
        'dataSource',
        'resources',
        'selector',
        'storageClassId',
        'volumeId',
        'volumeMode',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessModes' => 'string[]',
        'dataSource' => '\Rancher\Model\TypedLocalObjectReferenceModel',
        'resources' => '\Rancher\Model\ResourceRequirementsModel',
        'selector' => '\Rancher\Model\LabelSelectorModel',
        'storageClassId' => 'string',
        'volumeId' => 'string',
        'volumeMode' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessModes' => 'setAccessModes',
        'dataSource' => 'setDataSource',
        'resources' => 'setResources',
        'selector' => 'setSelector',
        'storageClassId' => 'setStorageClassId',
        'volumeId' => 'setVolumeId',
        'volumeMode' => 'setVolumeMode',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessModes' => 'getAccessModes',
        'dataSource' => 'getDataSource',
        'resources' => 'getResources',
        'selector' => 'getSelector',
        'storageClassId' => 'getStorageClassId',
        'volumeId' => 'getVolumeId',
        'volumeMode' => 'getVolumeMode',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessModes'] = isset($data['accessModes']) ? $data['accessModes'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['storageClassId'] = isset($data['storageClassId']) ? $data['storageClassId'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['volumeMode'] = isset($data['volumeMode']) ? $data['volumeMode'] : null;
    }

    /**
     * Gets accessModes
     * @return string[]
     */
    public function getAccessModes()
    {
        return $this->container['accessModes'];
    }

    /**
     * Sets accessModes
     * @param string[] $accessModes
     * @return $this
     */
    public function setAccessModes($accessModes)
    {
        $this->container['accessModes'] = $accessModes;

        return $this;
    }


    /**
     * Gets dataSource
     * @return \Rancher\Model\TypedLocalObjectReferenceModel
     */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
     * Sets dataSource
     * @param \Rancher\Model\TypedLocalObjectReferenceModel $dataSource
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;

        return $this;
    }


    /**
     * Gets resources
     * @return \Rancher\Model\ResourceRequirementsModel
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \Rancher\Model\ResourceRequirementsModel $resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }


    /**
     * Gets selector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     * @param \Rancher\Model\LabelSelectorModel $selector
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

        return $this;
    }


    /**
     * Gets storageClassId
     * @return string
     */
    public function getStorageClassId()
    {
        return $this->container['storageClassId'];
    }

    /**
     * Sets storageClassId
     * @param string $storageClassId
     * @return $this
     */
    public function setStorageClassId($storageClassId)
    {
        $this->container['storageClassId'] = $storageClassId;

        return $this;
    }


    /**
     * Gets volumeId
     * @return string
     */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
     * Sets volumeId
     * @param string $volumeId
     * @return $this
     */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;

        return $this;
    }


    /**
     * Gets volumeMode
     * @return string
     */
    public function getVolumeMode()
    {
        return $this->container['volumeMode'];
    }

    /**
     * Sets volumeMode
     * @param string $volumeMode
     * @return $this
     */
    public function setVolumeMode($volumeMode)
    {
        $this->container['volumeMode'] = $volumeMode;

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

