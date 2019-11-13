<?php

/**
 * StorageClassModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class StorageClassModel implements ArrayAccess
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
        'allowVolumeExpansion',
        'allowedTopologies',
        'annotations',
        'description',
        'labels',
        'mountOptions',
        'name',
        'parameters',
        'provisioner',
        'reclaimPolicy',
        'volumeBindingMode',
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
        'allowVolumeExpansion',
        'allowedTopologies',
        'annotations',
        'description',
        'labels',
        'mountOptions',
        'parameters',
        'provisioner',
        'reclaimPolicy',
        'volumeBindingMode',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allowVolumeExpansion' => 'boolean',
        'allowedTopologies' => '\Rancher\Model\TopologySelectorTermModel[]',
        'annotations' => 'map[string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'labels' => 'map[string]',
        'mountOptions' => 'string[]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'parameters' => 'map[string]',
        'provisioner' => 'string',
        'reclaimPolicy' => 'string',
        'removed' => '\DateTime',
        'uuid' => 'string',
        'volumeBindingMode' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allowVolumeExpansion' => 'setAllowVolumeExpansion',
        'allowedTopologies' => 'setAllowedTopologies',
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'labels' => 'setLabels',
        'mountOptions' => 'setMountOptions',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'parameters' => 'setParameters',
        'provisioner' => 'setProvisioner',
        'reclaimPolicy' => 'setReclaimPolicy',
        'removed' => 'setRemoved',
        'uuid' => 'setUuid',
        'volumeBindingMode' => 'setVolumeBindingMode',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allowVolumeExpansion' => 'getAllowVolumeExpansion',
        'allowedTopologies' => 'getAllowedTopologies',
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'labels' => 'getLabels',
        'mountOptions' => 'getMountOptions',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'parameters' => 'getParameters',
        'provisioner' => 'getProvisioner',
        'reclaimPolicy' => 'getReclaimPolicy',
        'removed' => 'getRemoved',
        'uuid' => 'getUuid',
        'volumeBindingMode' => 'getVolumeBindingMode',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allowVolumeExpansion'] = isset($data['allowVolumeExpansion']) ? $data['allowVolumeExpansion'] : null;
        $this->container['allowedTopologies'] = isset($data['allowedTopologies']) ? $data['allowedTopologies'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['mountOptions'] = isset($data['mountOptions']) ? $data['mountOptions'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['provisioner'] = isset($data['provisioner']) ? $data['provisioner'] : null;
        $this->container['reclaimPolicy'] = isset($data['reclaimPolicy']) ? $data['reclaimPolicy'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['volumeBindingMode'] = isset($data['volumeBindingMode']) ? $data['volumeBindingMode'] : null;
    }

    /**
     * Gets allowVolumeExpansion
     * @return boolean
     */
    public function getAllowVolumeExpansion()
    {
        return $this->container['allowVolumeExpansion'];
    }

    /**
     * Sets allowVolumeExpansion
     * @param boolean $allowVolumeExpansion
     * @return $this
     */
    public function setAllowVolumeExpansion($allowVolumeExpansion)
    {
        $this->container['allowVolumeExpansion'] = $allowVolumeExpansion;

        return $this;
    }


    /**
     * Gets allowedTopologies
     * @return \Rancher\Model\TopologySelectorTermModel[]
     */
    public function getAllowedTopologies()
    {
        return $this->container['allowedTopologies'];
    }

    /**
     * Sets allowedTopologies
     * @param \Rancher\Model\TopologySelectorTermModel[] $allowedTopologies
     * @return $this
     */
    public function setAllowedTopologies($allowedTopologies)
    {
        $this->container['allowedTopologies'] = $allowedTopologies;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }


    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }


    /**
     * Gets creatorId
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     * @param string $creatorId
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets mountOptions
     * @return string[]
     */
    public function getMountOptions()
    {
        return $this->container['mountOptions'];
    }

    /**
     * Sets mountOptions
     * @param string[] $mountOptions
     * @return $this
     */
    public function setMountOptions($mountOptions)
    {
        $this->container['mountOptions'] = $mountOptions;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReferenceModel[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReferenceModel[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets parameters
     * @return string[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     * @param string[] $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }


    /**
     * Gets provisioner
     * @return string
     */
    public function getProvisioner()
    {
        return $this->container['provisioner'];
    }

    /**
     * Sets provisioner
     * @param string $provisioner
     * @return $this
     */
    public function setProvisioner($provisioner)
    {
        $this->container['provisioner'] = $provisioner;

        return $this;
    }


    /**
     * Gets reclaimPolicy
     * @return string
     */
    public function getReclaimPolicy()
    {
        return $this->container['reclaimPolicy'];
    }

    /**
     * Sets reclaimPolicy
     * @param string $reclaimPolicy
     * @return $this
     */
    public function setReclaimPolicy($reclaimPolicy)
    {
        $this->container['reclaimPolicy'] = $reclaimPolicy;

        return $this;
    }


    /**
     * Gets removed
     * @return \DateTime
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param \DateTime $removed
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }


    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }


    /**
     * Gets volumeBindingMode
     * @return string
     */
    public function getVolumeBindingMode()
    {
        return $this->container['volumeBindingMode'];
    }

    /**
     * Sets volumeBindingMode
     * @param string $volumeBindingMode
     * @return $this
     */
    public function setVolumeBindingMode($volumeBindingMode)
    {
        $this->container['volumeBindingMode'] = $volumeBindingMode;

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

