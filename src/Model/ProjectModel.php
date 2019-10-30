<?php

/**
 * ProjectModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProjectModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'clusterId' => 'string',
        'conditions' => '\Rancher\Model\ProjectConditionModel[]',
        'containerDefaultResourceLimit' => '\Rancher\Model\ContainerResourceLimitModel',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'enableProjectMonitoring' => 'boolean',
        'id' => 'string',
        'labels' => 'map[string]',
        'monitoringStatus' => '\Rancher\Model\MonitoringStatusModel',
        'name' => 'string',
        'namespaceDefaultResourceQuota' => '\Rancher\Model\NamespaceResourceQuotaModel',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'podSecurityPolicyTemplateId' => 'string',
        'removed' => '\DateTime',
        'resourceQuota' => '\Rancher\Model\ProjectResourceQuotaModel',
        'state' => 'string',
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
        'clusterId' => 'setClusterId',
        'conditions' => 'setConditions',
        'containerDefaultResourceLimit' => 'setContainerDefaultResourceLimit',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'enableProjectMonitoring' => 'setEnableProjectMonitoring',
        'id' => 'setId',
        'labels' => 'setLabels',
        'monitoringStatus' => 'setMonitoringStatus',
        'name' => 'setName',
        'namespaceDefaultResourceQuota' => 'setNamespaceDefaultResourceQuota',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'podSecurityPolicyTemplateId' => 'setPodSecurityPolicyTemplateId',
        'removed' => 'setRemoved',
        'resourceQuota' => 'setResourceQuota',
        'state' => 'setState',
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
        'clusterId' => 'getClusterId',
        'conditions' => 'getConditions',
        'containerDefaultResourceLimit' => 'getContainerDefaultResourceLimit',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'enableProjectMonitoring' => 'getEnableProjectMonitoring',
        'id' => 'getId',
        'labels' => 'getLabels',
        'monitoringStatus' => 'getMonitoringStatus',
        'name' => 'getName',
        'namespaceDefaultResourceQuota' => 'getNamespaceDefaultResourceQuota',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'podSecurityPolicyTemplateId' => 'getPodSecurityPolicyTemplateId',
        'removed' => 'getRemoved',
        'resourceQuota' => 'getResourceQuota',
        'state' => 'getState',
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['containerDefaultResourceLimit'] = isset($data['containerDefaultResourceLimit']) ? $data['containerDefaultResourceLimit'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableProjectMonitoring'] = isset($data['enableProjectMonitoring']) ? $data['enableProjectMonitoring'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['monitoringStatus'] = isset($data['monitoringStatus']) ? $data['monitoringStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceDefaultResourceQuota'] = isset($data['namespaceDefaultResourceQuota']) ? $data['namespaceDefaultResourceQuota'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podSecurityPolicyTemplateId'] = isset($data['podSecurityPolicyTemplateId']) ? $data['podSecurityPolicyTemplateId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['resourceQuota'] = isset($data['resourceQuota']) ? $data['resourceQuota'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
     * Gets conditions
     * @return \Rancher\Model\ProjectConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\ProjectConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets containerDefaultResourceLimit
     * @return \Rancher\Model\ContainerResourceLimitModel
     */
    public function getContainerDefaultResourceLimit()
    {
        return $this->container['containerDefaultResourceLimit'];
    }

    /**
     * Sets containerDefaultResourceLimit
     * @param \Rancher\Model\ContainerResourceLimitModel $containerDefaultResourceLimit
     * @return $this
     */
    public function setContainerDefaultResourceLimit($containerDefaultResourceLimit)
    {
        $this->container['containerDefaultResourceLimit'] = $containerDefaultResourceLimit;

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
     * Gets enableProjectMonitoring
     * @return boolean
     */
    public function getEnableProjectMonitoring()
    {
        return $this->container['enableProjectMonitoring'];
    }

    /**
     * Sets enableProjectMonitoring
     * @param boolean $enableProjectMonitoring
     * @return $this
     */
    public function setEnableProjectMonitoring($enableProjectMonitoring)
    {
        $this->container['enableProjectMonitoring'] = $enableProjectMonitoring;

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
     * Gets monitoringStatus
     * @return \Rancher\Model\MonitoringStatusModel
     */
    public function getMonitoringStatus()
    {
        return $this->container['monitoringStatus'];
    }

    /**
     * Sets monitoringStatus
     * @param \Rancher\Model\MonitoringStatusModel $monitoringStatus
     * @return $this
     */
    public function setMonitoringStatus($monitoringStatus)
    {
        $this->container['monitoringStatus'] = $monitoringStatus;

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
     * Gets namespaceDefaultResourceQuota
     * @return \Rancher\Model\NamespaceResourceQuotaModel
     */
    public function getNamespaceDefaultResourceQuota()
    {
        return $this->container['namespaceDefaultResourceQuota'];
    }

    /**
     * Sets namespaceDefaultResourceQuota
     * @param \Rancher\Model\NamespaceResourceQuotaModel $namespaceDefaultResourceQuota
     * @return $this
     */
    public function setNamespaceDefaultResourceQuota($namespaceDefaultResourceQuota)
    {
        $this->container['namespaceDefaultResourceQuota'] = $namespaceDefaultResourceQuota;

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
     * Gets podSecurityPolicyTemplateId
     * @return string
     */
    public function getPodSecurityPolicyTemplateId()
    {
        return $this->container['podSecurityPolicyTemplateId'];
    }

    /**
     * Sets podSecurityPolicyTemplateId
     * @param string $podSecurityPolicyTemplateId
     * @return $this
     */
    public function setPodSecurityPolicyTemplateId($podSecurityPolicyTemplateId)
    {
        $this->container['podSecurityPolicyTemplateId'] = $podSecurityPolicyTemplateId;

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
     * Gets resourceQuota
     * @return \Rancher\Model\ProjectResourceQuotaModel
     */
    public function getResourceQuota()
    {
        return $this->container['resourceQuota'];
    }

    /**
     * Sets resourceQuota
     * @param \Rancher\Model\ProjectResourceQuotaModel $resourceQuota
     * @return $this
     */
    public function setResourceQuota($resourceQuota)
    {
        $this->container['resourceQuota'] = $resourceQuota;

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

