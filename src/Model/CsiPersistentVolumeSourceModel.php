<?php

/**
 * CsiPersistentVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CsiPersistentVolumeSourceModel implements ArrayAccess
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
        'controllerExpandSecretRef',
        'controllerPublishSecretRef',
        'driver',
        'fsType',
        'nodeExpandSecretRef',
        'nodePublishSecretRef',
        'nodeStageSecretRef',
        'readOnly',
        'volumeAttributes',
        'volumeHandle',
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'controllerExpandSecretRef' => '\Rancher\Model\SecretReferenceModel',
        'controllerPublishSecretRef' => '\Rancher\Model\SecretReferenceModel',
        'driver' => 'string',
        'fsType' => 'string',
        'nodeExpandSecretRef' => '\Rancher\Model\SecretReferenceModel',
        'nodePublishSecretRef' => '\Rancher\Model\SecretReferenceModel',
        'nodeStageSecretRef' => '\Rancher\Model\SecretReferenceModel',
        'readOnly' => 'boolean',
        'volumeAttributes' => 'map[string,string]',
        'volumeHandle' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'controllerExpandSecretRef' => 'setControllerExpandSecretRef',
        'controllerPublishSecretRef' => 'setControllerPublishSecretRef',
        'driver' => 'setDriver',
        'fsType' => 'setFsType',
        'nodeExpandSecretRef' => 'setNodeExpandSecretRef',
        'nodePublishSecretRef' => 'setNodePublishSecretRef',
        'nodeStageSecretRef' => 'setNodeStageSecretRef',
        'readOnly' => 'setReadOnly',
        'volumeAttributes' => 'setVolumeAttributes',
        'volumeHandle' => 'setVolumeHandle',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'controllerExpandSecretRef' => 'getControllerExpandSecretRef',
        'controllerPublishSecretRef' => 'getControllerPublishSecretRef',
        'driver' => 'getDriver',
        'fsType' => 'getFsType',
        'nodeExpandSecretRef' => 'getNodeExpandSecretRef',
        'nodePublishSecretRef' => 'getNodePublishSecretRef',
        'nodeStageSecretRef' => 'getNodeStageSecretRef',
        'readOnly' => 'getReadOnly',
        'volumeAttributes' => 'getVolumeAttributes',
        'volumeHandle' => 'getVolumeHandle',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['controllerExpandSecretRef'] = isset($data['controllerExpandSecretRef']) ? $data['controllerExpandSecretRef'] : null;
        $this->container['controllerPublishSecretRef'] = isset($data['controllerPublishSecretRef']) ? $data['controllerPublishSecretRef'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['nodeExpandSecretRef'] = isset($data['nodeExpandSecretRef']) ? $data['nodeExpandSecretRef'] : null;
        $this->container['nodePublishSecretRef'] = isset($data['nodePublishSecretRef']) ? $data['nodePublishSecretRef'] : null;
        $this->container['nodeStageSecretRef'] = isset($data['nodeStageSecretRef']) ? $data['nodeStageSecretRef'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['volumeAttributes'] = isset($data['volumeAttributes']) ? $data['volumeAttributes'] : null;
        $this->container['volumeHandle'] = isset($data['volumeHandle']) ? $data['volumeHandle'] : null;
    }

    /**
     * Gets controllerExpandSecretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getControllerExpandSecretRef()
    {
        return $this->container['controllerExpandSecretRef'];
    }

    /**
     * Sets controllerExpandSecretRef
     * @param \Rancher\Model\SecretReferenceModel $controllerExpandSecretRef
     * @return $this
     */
    public function setControllerExpandSecretRef($controllerExpandSecretRef)
    {
        $this->container['controllerExpandSecretRef'] = $controllerExpandSecretRef;

        return $this;
    }


    /**
     * Gets controllerPublishSecretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getControllerPublishSecretRef()
    {
        return $this->container['controllerPublishSecretRef'];
    }

    /**
     * Sets controllerPublishSecretRef
     * @param \Rancher\Model\SecretReferenceModel $controllerPublishSecretRef
     * @return $this
     */
    public function setControllerPublishSecretRef($controllerPublishSecretRef)
    {
        $this->container['controllerPublishSecretRef'] = $controllerPublishSecretRef;

        return $this;
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
     * Gets nodeExpandSecretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getNodeExpandSecretRef()
    {
        return $this->container['nodeExpandSecretRef'];
    }

    /**
     * Sets nodeExpandSecretRef
     * @param \Rancher\Model\SecretReferenceModel $nodeExpandSecretRef
     * @return $this
     */
    public function setNodeExpandSecretRef($nodeExpandSecretRef)
    {
        $this->container['nodeExpandSecretRef'] = $nodeExpandSecretRef;

        return $this;
    }


    /**
     * Gets nodePublishSecretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getNodePublishSecretRef()
    {
        return $this->container['nodePublishSecretRef'];
    }

    /**
     * Sets nodePublishSecretRef
     * @param \Rancher\Model\SecretReferenceModel $nodePublishSecretRef
     * @return $this
     */
    public function setNodePublishSecretRef($nodePublishSecretRef)
    {
        $this->container['nodePublishSecretRef'] = $nodePublishSecretRef;

        return $this;
    }


    /**
     * Gets nodeStageSecretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getNodeStageSecretRef()
    {
        return $this->container['nodeStageSecretRef'];
    }

    /**
     * Sets nodeStageSecretRef
     * @param \Rancher\Model\SecretReferenceModel $nodeStageSecretRef
     * @return $this
     */
    public function setNodeStageSecretRef($nodeStageSecretRef)
    {
        $this->container['nodeStageSecretRef'] = $nodeStageSecretRef;

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
     * Gets volumeHandle
     * @return string
     */
    public function getVolumeHandle()
    {
        return $this->container['volumeHandle'];
    }

    /**
     * Sets volumeHandle
     * @param string $volumeHandle
     * @return $this
     */
    public function setVolumeHandle($volumeHandle)
    {
        $this->container['volumeHandle'] = $volumeHandle;

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

