<?php

/**
 * CloudCredentialModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CloudCredentialModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'amazonec2credentialConfig' => '\Rancher\Model\Amazonec2credentialconfigModel',
        'annotations' => 'map[string]',
        'azurecredentialConfig' => '\Rancher\Model\AzurecredentialconfigModel',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'digitaloceancredentialConfig' => '\Rancher\Model\DigitaloceancredentialconfigModel',
        'labels' => 'map[string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'uuid' => 'string',
        'vmwarevspherecredentialConfig' => '\Rancher\Model\VmwarevspherecredentialconfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'amazonec2credentialConfig' => 'setAmazonec2credentialConfig',
        'annotations' => 'setAnnotations',
        'azurecredentialConfig' => 'setAzurecredentialConfig',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'digitaloceancredentialConfig' => 'setDigitaloceancredentialConfig',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'uuid' => 'setUuid',
        'vmwarevspherecredentialConfig' => 'setVmwarevspherecredentialConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'amazonec2credentialConfig' => 'getAmazonec2credentialConfig',
        'annotations' => 'getAnnotations',
        'azurecredentialConfig' => 'getAzurecredentialConfig',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'digitaloceancredentialConfig' => 'getDigitaloceancredentialConfig',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'uuid' => 'getUuid',
        'vmwarevspherecredentialConfig' => 'getVmwarevspherecredentialConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['amazonec2credentialConfig'] = isset($data['amazonec2credentialConfig']) ? $data['amazonec2credentialConfig'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['azurecredentialConfig'] = isset($data['azurecredentialConfig']) ? $data['azurecredentialConfig'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['digitaloceancredentialConfig'] = isset($data['digitaloceancredentialConfig']) ? $data['digitaloceancredentialConfig'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['vmwarevspherecredentialConfig'] = isset($data['vmwarevspherecredentialConfig']) ? $data['vmwarevspherecredentialConfig'] : null;
    }

    /**
     * Gets amazonec2credentialConfig
     * @return \Rancher\Model\Amazonec2credentialconfigModel
     */
    public function getAmazonec2credentialConfig()
    {
        return $this->container['amazonec2credentialConfig'];
    }

    /**
     * Sets amazonec2credentialConfig
     * @param \Rancher\Model\Amazonec2credentialconfigModel $amazonec2credentialConfig
     * @return $this
     */
    public function setAmazonec2credentialConfig($amazonec2credentialConfig)
    {
        $this->container['amazonec2credentialConfig'] = $amazonec2credentialConfig;

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
     * Gets azurecredentialConfig
     * @return \Rancher\Model\AzurecredentialconfigModel
     */
    public function getAzurecredentialConfig()
    {
        return $this->container['azurecredentialConfig'];
    }

    /**
     * Sets azurecredentialConfig
     * @param \Rancher\Model\AzurecredentialconfigModel $azurecredentialConfig
     * @return $this
     */
    public function setAzurecredentialConfig($azurecredentialConfig)
    {
        $this->container['azurecredentialConfig'] = $azurecredentialConfig;

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
     * Gets digitaloceancredentialConfig
     * @return \Rancher\Model\DigitaloceancredentialconfigModel
     */
    public function getDigitaloceancredentialConfig()
    {
        return $this->container['digitaloceancredentialConfig'];
    }

    /**
     * Sets digitaloceancredentialConfig
     * @param \Rancher\Model\DigitaloceancredentialconfigModel $digitaloceancredentialConfig
     * @return $this
     */
    public function setDigitaloceancredentialConfig($digitaloceancredentialConfig)
    {
        $this->container['digitaloceancredentialConfig'] = $digitaloceancredentialConfig;

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
     * Gets vmwarevspherecredentialConfig
     * @return \Rancher\Model\VmwarevspherecredentialconfigModel
     */
    public function getVmwarevspherecredentialConfig()
    {
        return $this->container['vmwarevspherecredentialConfig'];
    }

    /**
     * Sets vmwarevspherecredentialConfig
     * @param \Rancher\Model\VmwarevspherecredentialconfigModel $vmwarevspherecredentialConfig
     * @return $this
     */
    public function setVmwarevspherecredentialConfig($vmwarevspherecredentialConfig)
    {
        $this->container['vmwarevspherecredentialConfig'] = $vmwarevspherecredentialConfig;

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

