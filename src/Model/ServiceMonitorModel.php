<?php

/**
 * ServiceMonitorModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ServiceMonitorModel implements ArrayAccess
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
        'annotations',
        'endpoints',
        'jobLabel',
        'labels',
        'name',
        'namespaceId',
        'namespaceSelector',
        'podTargetLabels',
        'projectId',
        'sampleLimit',
        'selector',
        'targetLabels',
        'targetLimit',
        'targetService',
        'targetWorkload',
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
        'annotations',
        'endpoints',
        'jobLabel',
        'labels',
        'name',
        'namespaceSelector',
        'podTargetLabels',
        'sampleLimit',
        'selector',
        'targetLabels',
        'targetLimit',
        'targetService',
        'targetWorkload',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'endpoints' => '\Rancher\Model\EndpointModel[]',
        'id' => 'string',
        'jobLabel' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'namespaceSelector' => 'string[]',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'podTargetLabels' => 'string[]',
        'projectId' => 'string',
        'removed' => '\DateTime',
        'sampleLimit' => 'int',
        'selector' => '\Rancher\Model\LabelSelectorModel',
        'targetLabels' => 'string[]',
        'targetLimit' => 'int',
        'targetService' => 'string',
        'targetWorkload' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'endpoints' => 'setEndpoints',
        'id' => 'setId',
        'jobLabel' => 'setJobLabel',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'namespaceSelector' => 'setNamespaceSelector',
        'ownerReferences' => 'setOwnerReferences',
        'podTargetLabels' => 'setPodTargetLabels',
        'projectId' => 'setProjectId',
        'removed' => 'setRemoved',
        'sampleLimit' => 'setSampleLimit',
        'selector' => 'setSelector',
        'targetLabels' => 'setTargetLabels',
        'targetLimit' => 'setTargetLimit',
        'targetService' => 'setTargetService',
        'targetWorkload' => 'setTargetWorkload',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'endpoints' => 'getEndpoints',
        'id' => 'getId',
        'jobLabel' => 'getJobLabel',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'namespaceSelector' => 'getNamespaceSelector',
        'ownerReferences' => 'getOwnerReferences',
        'podTargetLabels' => 'getPodTargetLabels',
        'projectId' => 'getProjectId',
        'removed' => 'getRemoved',
        'sampleLimit' => 'getSampleLimit',
        'selector' => 'getSelector',
        'targetLabels' => 'getTargetLabels',
        'targetLimit' => 'getTargetLimit',
        'targetService' => 'getTargetService',
        'targetWorkload' => 'getTargetWorkload',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobLabel'] = isset($data['jobLabel']) ? $data['jobLabel'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['namespaceSelector'] = isset($data['namespaceSelector']) ? $data['namespaceSelector'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podTargetLabels'] = isset($data['podTargetLabels']) ? $data['podTargetLabels'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['sampleLimit'] = isset($data['sampleLimit']) ? $data['sampleLimit'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['targetLabels'] = isset($data['targetLabels']) ? $data['targetLabels'] : null;
        $this->container['targetLimit'] = isset($data['targetLimit']) ? $data['targetLimit'] : null;
        $this->container['targetService'] = isset($data['targetService']) ? $data['targetService'] : null;
        $this->container['targetWorkload'] = isset($data['targetWorkload']) ? $data['targetWorkload'] : null;
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
     * Gets endpoints
     * @return \Rancher\Model\EndpointModel[]
     */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
     * Sets endpoints
     * @param \Rancher\Model\EndpointModel[] $endpoints
     * @return $this
     */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;

        return $this;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets jobLabel
     * @return string
     */
    public function getJobLabel()
    {
        return $this->container['jobLabel'];
    }

    /**
     * Sets jobLabel
     * @param string $jobLabel
     * @return $this
     */
    public function setJobLabel($jobLabel)
    {
        $this->container['jobLabel'] = $jobLabel;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }


    /**
     * Gets namespaceSelector
     * @return string[]
     */
    public function getNamespaceSelector()
    {
        return $this->container['namespaceSelector'];
    }

    /**
     * Sets namespaceSelector
     * @param string[] $namespaceSelector
     * @return $this
     */
    public function setNamespaceSelector($namespaceSelector)
    {
        $this->container['namespaceSelector'] = $namespaceSelector;

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
     * Gets podTargetLabels
     * @return string[]
     */
    public function getPodTargetLabels()
    {
        return $this->container['podTargetLabels'];
    }

    /**
     * Sets podTargetLabels
     * @param string[] $podTargetLabels
     * @return $this
     */
    public function setPodTargetLabels($podTargetLabels)
    {
        $this->container['podTargetLabels'] = $podTargetLabels;

        return $this;
    }


    /**
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

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
     * Gets sampleLimit
     * @return int
     */
    public function getSampleLimit()
    {
        return $this->container['sampleLimit'];
    }

    /**
     * Sets sampleLimit
     * @param int $sampleLimit
     * @return $this
     */
    public function setSampleLimit($sampleLimit)
    {
        $this->container['sampleLimit'] = $sampleLimit;

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
     * Gets targetLabels
     * @return string[]
     */
    public function getTargetLabels()
    {
        return $this->container['targetLabels'];
    }

    /**
     * Sets targetLabels
     * @param string[] $targetLabels
     * @return $this
     */
    public function setTargetLabels($targetLabels)
    {
        $this->container['targetLabels'] = $targetLabels;

        return $this;
    }


    /**
     * Gets targetLimit
     * @return int
     */
    public function getTargetLimit()
    {
        return $this->container['targetLimit'];
    }

    /**
     * Sets targetLimit
     * @param int $targetLimit
     * @return $this
     */
    public function setTargetLimit($targetLimit)
    {
        $this->container['targetLimit'] = $targetLimit;

        return $this;
    }


    /**
     * Gets targetService
     * @return string
     */
    public function getTargetService()
    {
        return $this->container['targetService'];
    }

    /**
     * Sets targetService
     * @param string $targetService
     * @return $this
     */
    public function setTargetService($targetService)
    {
        $this->container['targetService'] = $targetService;

        return $this;
    }


    /**
     * Gets targetWorkload
     * @return string
     */
    public function getTargetWorkload()
    {
        return $this->container['targetWorkload'];
    }

    /**
     * Sets targetWorkload
     * @param string $targetWorkload
     * @return $this
     */
    public function setTargetWorkload($targetWorkload)
    {
        $this->container['targetWorkload'] = $targetWorkload;

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

