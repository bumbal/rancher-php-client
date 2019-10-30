<?php

/**
 * ProjectAlertRuleModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProjectAlertRuleModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'alertState' => 'string',
        'annotations' => 'map[string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'groupId' => 'string',
        'groupIntervalSeconds' => 'int',
        'groupWaitSeconds' => 'int',
        'id' => 'string',
        'inherited' => 'boolean',
        'labels' => 'map[string]',
        'metricRule' => '\Rancher\Model\MetricRuleModel',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'podRule' => '\Rancher\Model\PodRuleModel',
        'projectId' => 'string',
        'removed' => '\DateTime',
        'repeatIntervalSeconds' => 'int',
        'severity' => 'string',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'workloadRule' => '\Rancher\Model\WorkloadRuleModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alertState' => 'setAlertState',
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'groupId' => 'setGroupId',
        'groupIntervalSeconds' => 'setGroupIntervalSeconds',
        'groupWaitSeconds' => 'setGroupWaitSeconds',
        'id' => 'setId',
        'inherited' => 'setInherited',
        'labels' => 'setLabels',
        'metricRule' => 'setMetricRule',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'podRule' => 'setPodRule',
        'projectId' => 'setProjectId',
        'removed' => 'setRemoved',
        'repeatIntervalSeconds' => 'setRepeatIntervalSeconds',
        'severity' => 'setSeverity',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'workloadRule' => 'setWorkloadRule',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alertState' => 'getAlertState',
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'groupId' => 'getGroupId',
        'groupIntervalSeconds' => 'getGroupIntervalSeconds',
        'groupWaitSeconds' => 'getGroupWaitSeconds',
        'id' => 'getId',
        'inherited' => 'getInherited',
        'labels' => 'getLabels',
        'metricRule' => 'getMetricRule',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'podRule' => 'getPodRule',
        'projectId' => 'getProjectId',
        'removed' => 'getRemoved',
        'repeatIntervalSeconds' => 'getRepeatIntervalSeconds',
        'severity' => 'getSeverity',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'workloadRule' => 'getWorkloadRule',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['alertState'] = isset($data['alertState']) ? $data['alertState'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupIntervalSeconds'] = isset($data['groupIntervalSeconds']) ? $data['groupIntervalSeconds'] : null;
        $this->container['groupWaitSeconds'] = isset($data['groupWaitSeconds']) ? $data['groupWaitSeconds'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inherited'] = isset($data['inherited']) ? $data['inherited'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['metricRule'] = isset($data['metricRule']) ? $data['metricRule'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podRule'] = isset($data['podRule']) ? $data['podRule'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['repeatIntervalSeconds'] = isset($data['repeatIntervalSeconds']) ? $data['repeatIntervalSeconds'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['workloadRule'] = isset($data['workloadRule']) ? $data['workloadRule'] : null;
    }

    /**
     * Gets alertState
     * @return string
     */
    public function getAlertState()
    {
        return $this->container['alertState'];
    }

    /**
     * Sets alertState
     * @param string $alertState
     * @return $this
     */
    public function setAlertState($alertState)
    {
        $this->container['alertState'] = $alertState;

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
     * Gets groupId
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }


    /**
     * Gets groupIntervalSeconds
     * @return int
     */
    public function getGroupIntervalSeconds()
    {
        return $this->container['groupIntervalSeconds'];
    }

    /**
     * Sets groupIntervalSeconds
     * @param int $groupIntervalSeconds
     * @return $this
     */
    public function setGroupIntervalSeconds($groupIntervalSeconds)
    {
        $this->container['groupIntervalSeconds'] = $groupIntervalSeconds;

        return $this;
    }


    /**
     * Gets groupWaitSeconds
     * @return int
     */
    public function getGroupWaitSeconds()
    {
        return $this->container['groupWaitSeconds'];
    }

    /**
     * Sets groupWaitSeconds
     * @param int $groupWaitSeconds
     * @return $this
     */
    public function setGroupWaitSeconds($groupWaitSeconds)
    {
        $this->container['groupWaitSeconds'] = $groupWaitSeconds;

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
     * Gets inherited
     * @return boolean
     */
    public function getInherited()
    {
        return $this->container['inherited'];
    }

    /**
     * Sets inherited
     * @param boolean $inherited
     * @return $this
     */
    public function setInherited($inherited)
    {
        $this->container['inherited'] = $inherited;

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
     * Gets metricRule
     * @return \Rancher\Model\MetricRuleModel
     */
    public function getMetricRule()
    {
        return $this->container['metricRule'];
    }

    /**
     * Sets metricRule
     * @param \Rancher\Model\MetricRuleModel $metricRule
     * @return $this
     */
    public function setMetricRule($metricRule)
    {
        $this->container['metricRule'] = $metricRule;

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
     * Gets podRule
     * @return \Rancher\Model\PodRuleModel
     */
    public function getPodRule()
    {
        return $this->container['podRule'];
    }

    /**
     * Sets podRule
     * @param \Rancher\Model\PodRuleModel $podRule
     * @return $this
     */
    public function setPodRule($podRule)
    {
        $this->container['podRule'] = $podRule;

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
     * Gets repeatIntervalSeconds
     * @return int
     */
    public function getRepeatIntervalSeconds()
    {
        return $this->container['repeatIntervalSeconds'];
    }

    /**
     * Sets repeatIntervalSeconds
     * @param int $repeatIntervalSeconds
     * @return $this
     */
    public function setRepeatIntervalSeconds($repeatIntervalSeconds)
    {
        $this->container['repeatIntervalSeconds'] = $repeatIntervalSeconds;

        return $this;
    }


    /**
     * Gets severity
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     * @param string $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

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
     * Gets workloadRule
     * @return \Rancher\Model\WorkloadRuleModel
     */
    public function getWorkloadRule()
    {
        return $this->container['workloadRule'];
    }

    /**
     * Sets workloadRule
     * @param \Rancher\Model\WorkloadRuleModel $workloadRule
     * @return $this
     */
    public function setWorkloadRule($workloadRule)
    {
        $this->container['workloadRule'] = $workloadRule;

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

