<?php

namespace Rancher\Model;

use \ArrayAccess;

class ClusterMonitorGraph implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'clusterId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'detailsMetricsSelector' => 'map[string]',
        'displayResourceType' => 'string',
        'graphType' => 'string',
        'labels' => 'map[string]',
        'metricsSelector' => 'map[string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'priority' => 'int',
        'removed' => '\DateTime',
        'resourceType' => 'string',
        'uuid' => 'string',
        'yAxis' => '\Rancher\Model\YAxis',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'clusterId' => 'setClusterId',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'detailsMetricsSelector' => 'setDetailsMetricsSelector',
        'displayResourceType' => 'setDisplayResourceType',
        'graphType' => 'setGraphType',
        'labels' => 'setLabels',
        'metricsSelector' => 'setMetricsSelector',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'priority' => 'setPriority',
        'removed' => 'setRemoved',
        'resourceType' => 'setResourceType',
        'uuid' => 'setUuid',
        'yAxis' => 'setYAxis',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'clusterId' => 'getClusterId',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'detailsMetricsSelector' => 'getDetailsMetricsSelector',
        'displayResourceType' => 'getDisplayResourceType',
        'graphType' => 'getGraphType',
        'labels' => 'getLabels',
        'metricsSelector' => 'getMetricsSelector',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'priority' => 'getPriority',
        'removed' => 'getRemoved',
        'resourceType' => 'getResourceType',
        'uuid' => 'getUuid',
        'yAxis' => 'getYAxis',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['detailsMetricsSelector'] = isset($data['detailsMetricsSelector']) ? $data['detailsMetricsSelector'] : null;
        $this->container['displayResourceType'] = isset($data['displayResourceType']) ? $data['displayResourceType'] : null;
        $this->container['graphType'] = isset($data['graphType']) ? $data['graphType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['metricsSelector'] = isset($data['metricsSelector']) ? $data['metricsSelector'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['yAxis'] = isset($data['yAxis']) ? $data['yAxis'] : null;
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
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

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
     * Gets detailsMetricsSelector
     * @return string[]
     */
    public function getDetailsMetricsSelector()
    {
        return $this->container['detailsMetricsSelector'];
    }

    /**
     * Sets detailsMetricsSelector
     * @param string[] $detailsMetricsSelector
     * @return $this
     */
    public function setDetailsMetricsSelector($detailsMetricsSelector)
    {
        $this->container['detailsMetricsSelector'] = $detailsMetricsSelector;

        return $this;
    }


    /**
     * Gets displayResourceType
     * @return string
     */
    public function getDisplayResourceType()
    {
        return $this->container['displayResourceType'];
    }

    /**
     * Sets displayResourceType
     * @param string $displayResourceType
     * @return $this
     */
    public function setDisplayResourceType($displayResourceType)
    {
        $this->container['displayResourceType'] = $displayResourceType;

        return $this;
    }


    /**
     * Gets graphType
     * @return string
     */
    public function getGraphType()
    {
        return $this->container['graphType'];
    }

    /**
     * Sets graphType
     * @param string $graphType
     * @return $this
     */
    public function setGraphType($graphType)
    {
        $this->container['graphType'] = $graphType;

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
     * Gets metricsSelector
     * @return string[]
     */
    public function getMetricsSelector()
    {
        return $this->container['metricsSelector'];
    }

    /**
     * Sets metricsSelector
     * @param string[] $metricsSelector
     * @return $this
     */
    public function setMetricsSelector($metricsSelector)
    {
        $this->container['metricsSelector'] = $metricsSelector;

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
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReference[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * Gets resourceType
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
     * Sets resourceType
     * @param string $resourceType
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;

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
     * Gets yAxis
     * @return \Rancher\Model\YAxis
     */
    public function getYAxis()
    {
        return $this->container['yAxis'];
    }

    /**
     * Sets yAxis
     * @param \Rancher\Model\YAxis $yAxis
     * @return $this
     */
    public function setYAxis($yAxis)
    {
        $this->container['yAxis'] = $yAxis;

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

