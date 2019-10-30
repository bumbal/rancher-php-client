<?php

/**
 * DynamicSchemaModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class DynamicSchemaModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'collectionActions' => 'map[\Rancher\Model\ActionModel]',
        'collectionFields' => 'map[\Rancher\Model\FieldModel]',
        'collectionFilters' => 'map[\Rancher\Model\FilterModel]',
        'collectionMethods' => 'string[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'dynamicSchemaVersion' => 'string',
        'embed' => 'boolean',
        'embedType' => 'string',
        'includeableLinks' => 'string[]',
        'labels' => 'map[string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'pluralName' => 'string',
        'removed' => '\DateTime',
        'resourceActions' => 'map[\Rancher\Model\ActionModel]',
        'resourceFields' => 'map[\Rancher\Model\FieldModel]',
        'resourceMethods' => 'string[]',
        'schemaName' => 'string',
        'state' => 'string',
        'status' => '\Rancher\Model\DynamicSchemaStatusModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'collectionActions' => 'setCollectionActions',
        'collectionFields' => 'setCollectionFields',
        'collectionFilters' => 'setCollectionFilters',
        'collectionMethods' => 'setCollectionMethods',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'dynamicSchemaVersion' => 'setDynamicSchemaVersion',
        'embed' => 'setEmbed',
        'embedType' => 'setEmbedType',
        'includeableLinks' => 'setIncludeableLinks',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'pluralName' => 'setPluralName',
        'removed' => 'setRemoved',
        'resourceActions' => 'setResourceActions',
        'resourceFields' => 'setResourceFields',
        'resourceMethods' => 'setResourceMethods',
        'schemaName' => 'setSchemaName',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'collectionActions' => 'getCollectionActions',
        'collectionFields' => 'getCollectionFields',
        'collectionFilters' => 'getCollectionFilters',
        'collectionMethods' => 'getCollectionMethods',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'dynamicSchemaVersion' => 'getDynamicSchemaVersion',
        'embed' => 'getEmbed',
        'embedType' => 'getEmbedType',
        'includeableLinks' => 'getIncludeableLinks',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'pluralName' => 'getPluralName',
        'removed' => 'getRemoved',
        'resourceActions' => 'getResourceActions',
        'resourceFields' => 'getResourceFields',
        'resourceMethods' => 'getResourceMethods',
        'schemaName' => 'getSchemaName',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['collectionActions'] = isset($data['collectionActions']) ? $data['collectionActions'] : null;
        $this->container['collectionFields'] = isset($data['collectionFields']) ? $data['collectionFields'] : null;
        $this->container['collectionFilters'] = isset($data['collectionFilters']) ? $data['collectionFilters'] : null;
        $this->container['collectionMethods'] = isset($data['collectionMethods']) ? $data['collectionMethods'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['dynamicSchemaVersion'] = isset($data['dynamicSchemaVersion']) ? $data['dynamicSchemaVersion'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['embedType'] = isset($data['embedType']) ? $data['embedType'] : null;
        $this->container['includeableLinks'] = isset($data['includeableLinks']) ? $data['includeableLinks'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['pluralName'] = isset($data['pluralName']) ? $data['pluralName'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['resourceActions'] = isset($data['resourceActions']) ? $data['resourceActions'] : null;
        $this->container['resourceFields'] = isset($data['resourceFields']) ? $data['resourceFields'] : null;
        $this->container['resourceMethods'] = isset($data['resourceMethods']) ? $data['resourceMethods'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
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
     * Gets collectionActions
     * @return \Rancher\Model\ActionModel[]
     */
    public function getCollectionActions()
    {
        return $this->container['collectionActions'];
    }

    /**
     * Sets collectionActions
     * @param \Rancher\Model\ActionModel[] $collectionActions
     * @return $this
     */
    public function setCollectionActions($collectionActions)
    {
        $this->container['collectionActions'] = $collectionActions;

        return $this;
    }


    /**
     * Gets collectionFields
     * @return \Rancher\Model\FieldModel[]
     */
    public function getCollectionFields()
    {
        return $this->container['collectionFields'];
    }

    /**
     * Sets collectionFields
     * @param \Rancher\Model\FieldModel[] $collectionFields
     * @return $this
     */
    public function setCollectionFields($collectionFields)
    {
        $this->container['collectionFields'] = $collectionFields;

        return $this;
    }


    /**
     * Gets collectionFilters
     * @return \Rancher\Model\FilterModel[]
     */
    public function getCollectionFilters()
    {
        return $this->container['collectionFilters'];
    }

    /**
     * Sets collectionFilters
     * @param \Rancher\Model\FilterModel[] $collectionFilters
     * @return $this
     */
    public function setCollectionFilters($collectionFilters)
    {
        $this->container['collectionFilters'] = $collectionFilters;

        return $this;
    }


    /**
     * Gets collectionMethods
     * @return string[]
     */
    public function getCollectionMethods()
    {
        return $this->container['collectionMethods'];
    }

    /**
     * Sets collectionMethods
     * @param string[] $collectionMethods
     * @return $this
     */
    public function setCollectionMethods($collectionMethods)
    {
        $this->container['collectionMethods'] = $collectionMethods;

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
     * Gets dynamicSchemaVersion
     * @return string
     */
    public function getDynamicSchemaVersion()
    {
        return $this->container['dynamicSchemaVersion'];
    }

    /**
     * Sets dynamicSchemaVersion
     * @param string $dynamicSchemaVersion
     * @return $this
     */
    public function setDynamicSchemaVersion($dynamicSchemaVersion)
    {
        $this->container['dynamicSchemaVersion'] = $dynamicSchemaVersion;

        return $this;
    }


    /**
     * Gets embed
     * @return boolean
     */
    public function getEmbed()
    {
        return $this->container['embed'];
    }

    /**
     * Sets embed
     * @param boolean $embed
     * @return $this
     */
    public function setEmbed($embed)
    {
        $this->container['embed'] = $embed;

        return $this;
    }


    /**
     * Gets embedType
     * @return string
     */
    public function getEmbedType()
    {
        return $this->container['embedType'];
    }

    /**
     * Sets embedType
     * @param string $embedType
     * @return $this
     */
    public function setEmbedType($embedType)
    {
        $this->container['embedType'] = $embedType;

        return $this;
    }


    /**
     * Gets includeableLinks
     * @return string[]
     */
    public function getIncludeableLinks()
    {
        return $this->container['includeableLinks'];
    }

    /**
     * Sets includeableLinks
     * @param string[] $includeableLinks
     * @return $this
     */
    public function setIncludeableLinks($includeableLinks)
    {
        $this->container['includeableLinks'] = $includeableLinks;

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
     * Gets pluralName
     * @return string
     */
    public function getPluralName()
    {
        return $this->container['pluralName'];
    }

    /**
     * Sets pluralName
     * @param string $pluralName
     * @return $this
     */
    public function setPluralName($pluralName)
    {
        $this->container['pluralName'] = $pluralName;

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
     * Gets resourceActions
     * @return \Rancher\Model\ActionModel[]
     */
    public function getResourceActions()
    {
        return $this->container['resourceActions'];
    }

    /**
     * Sets resourceActions
     * @param \Rancher\Model\ActionModel[] $resourceActions
     * @return $this
     */
    public function setResourceActions($resourceActions)
    {
        $this->container['resourceActions'] = $resourceActions;

        return $this;
    }


    /**
     * Gets resourceFields
     * @return \Rancher\Model\FieldModel[]
     */
    public function getResourceFields()
    {
        return $this->container['resourceFields'];
    }

    /**
     * Sets resourceFields
     * @param \Rancher\Model\FieldModel[] $resourceFields
     * @return $this
     */
    public function setResourceFields($resourceFields)
    {
        $this->container['resourceFields'] = $resourceFields;

        return $this;
    }


    /**
     * Gets resourceMethods
     * @return string[]
     */
    public function getResourceMethods()
    {
        return $this->container['resourceMethods'];
    }

    /**
     * Sets resourceMethods
     * @param string[] $resourceMethods
     * @return $this
     */
    public function setResourceMethods($resourceMethods)
    {
        $this->container['resourceMethods'] = $resourceMethods;

        return $this;
    }


    /**
     * Gets schemaName
     * @return string
     */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
     * Sets schemaName
     * @param string $schemaName
     * @return $this
     */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;

        return $this;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets status
     * @return \Rancher\Model\DynamicSchemaStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\DynamicSchemaStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @return $this
     */
    public function setTransitioning($transitioning)
    {
        $this->container['transitioning'] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage)
    {
        $this->container['transitioningMessage'] = $transitioningMessage;

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

