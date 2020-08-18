<?php

/**
 * HorizontalPodAutoscalerModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HorizontalPodAutoscalerModel implements ArrayAccess
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
        'description',
        'labels',
        'maxReplicas',
        'metrics',
        'minReplicas',
        'name',
        'namespaceId',
        'projectId',
        'workloadId',
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
        'description',
        'labels',
        'maxReplicas',
        'metrics',
        'minReplicas',
        'name',
        'workloadId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'conditions' => '\Rancher\Model\HorizontalPodAutoscalerConditionModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'currentReplicas' => 'int',
        'description' => 'string',
        'desiredReplicas' => 'int',
        'id' => 'string',
        'labels' => 'map[string,string]',
        'lastScaleTime' => '\DateTime',
        'maxReplicas' => 'int',
        'metrics' => '\Rancher\Model\MetricModel[]',
        'minReplicas' => 'int',
        'name' => 'string',
        'namespaceId' => 'string',
        'observedGeneration' => 'int',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'projectId' => 'string',
        'removed' => '\DateTime',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'workloadId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'currentReplicas' => 'setCurrentReplicas',
        'description' => 'setDescription',
        'desiredReplicas' => 'setDesiredReplicas',
        'id' => 'setId',
        'labels' => 'setLabels',
        'lastScaleTime' => 'setLastScaleTime',
        'maxReplicas' => 'setMaxReplicas',
        'metrics' => 'setMetrics',
        'minReplicas' => 'setMinReplicas',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'observedGeneration' => 'setObservedGeneration',
        'ownerReferences' => 'setOwnerReferences',
        'projectId' => 'setProjectId',
        'removed' => 'setRemoved',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'workloadId' => 'setWorkloadId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'currentReplicas' => 'getCurrentReplicas',
        'description' => 'getDescription',
        'desiredReplicas' => 'getDesiredReplicas',
        'id' => 'getId',
        'labels' => 'getLabels',
        'lastScaleTime' => 'getLastScaleTime',
        'maxReplicas' => 'getMaxReplicas',
        'metrics' => 'getMetrics',
        'minReplicas' => 'getMinReplicas',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'observedGeneration' => 'getObservedGeneration',
        'ownerReferences' => 'getOwnerReferences',
        'projectId' => 'getProjectId',
        'removed' => 'getRemoved',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'workloadId' => 'getWorkloadId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['currentReplicas'] = isset($data['currentReplicas']) ? $data['currentReplicas'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['desiredReplicas'] = isset($data['desiredReplicas']) ? $data['desiredReplicas'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['lastScaleTime'] = isset($data['lastScaleTime']) ? $data['lastScaleTime'] : null;
        $this->container['maxReplicas'] = isset($data['maxReplicas']) ? $data['maxReplicas'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['minReplicas'] = isset($data['minReplicas']) ? $data['minReplicas'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['observedGeneration'] = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
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
     * Gets conditions
     * @return \Rancher\Model\HorizontalPodAutoscalerConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\HorizontalPodAutoscalerConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
     * Gets currentReplicas
     * @return int
     */
    public function getCurrentReplicas()
    {
        return $this->container['currentReplicas'];
    }

    /**
     * Sets currentReplicas
     * @param int $currentReplicas
     * @return $this
     */
    public function setCurrentReplicas($currentReplicas)
    {
        $this->container['currentReplicas'] = $currentReplicas;

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
     * Gets desiredReplicas
     * @return int
     */
    public function getDesiredReplicas()
    {
        return $this->container['desiredReplicas'];
    }

    /**
     * Sets desiredReplicas
     * @param int $desiredReplicas
     * @return $this
     */
    public function setDesiredReplicas($desiredReplicas)
    {
        $this->container['desiredReplicas'] = $desiredReplicas;

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
     * Gets lastScaleTime
     * @return \DateTime
     */
    public function getLastScaleTime()
    {
        return $this->container['lastScaleTime'];
    }

    /**
     * Sets lastScaleTime
     * @param \DateTime $lastScaleTime
     * @return $this
     */
    public function setLastScaleTime($lastScaleTime)
    {
        $this->container['lastScaleTime'] = $lastScaleTime;

        return $this;
    }


    /**
     * Gets maxReplicas
     * @return int
     */
    public function getMaxReplicas()
    {
        return $this->container['maxReplicas'];
    }

    /**
     * Sets maxReplicas
     * @param int $maxReplicas
     * @return $this
     */
    public function setMaxReplicas($maxReplicas)
    {
        $this->container['maxReplicas'] = $maxReplicas;

        return $this;
    }


    /**
     * Gets metrics
     * @return \Rancher\Model\MetricModel[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     * @param \Rancher\Model\MetricModel[] $metrics
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }


    /**
     * Gets minReplicas
     * @return int
     */
    public function getMinReplicas()
    {
        return $this->container['minReplicas'];
    }

    /**
     * Sets minReplicas
     * @param int $minReplicas
     * @return $this
     */
    public function setMinReplicas($minReplicas)
    {
        $this->container['minReplicas'] = $minReplicas;

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
     * Gets observedGeneration
     * @return int
     */
    public function getObservedGeneration()
    {
        return $this->container['observedGeneration'];
    }

    /**
     * Sets observedGeneration
     * @param int $observedGeneration
     * @return $this
     */
    public function setObservedGeneration($observedGeneration)
    {
        $this->container['observedGeneration'] = $observedGeneration;

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
     * Gets workloadId
     * @return string
     */
    public function getWorkloadId()
    {
        return $this->container['workloadId'];
    }

    /**
     * Sets workloadId
     * @param string $workloadId
     * @return $this
     */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;

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

