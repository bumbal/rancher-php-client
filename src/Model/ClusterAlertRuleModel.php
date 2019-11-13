<?php

/**
 * ClusterAlertRuleModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterAlertRuleModel implements ArrayAccess
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
        'clusterId',
        'eventRule',
        'groupId',
        'groupIntervalSeconds',
        'groupWaitSeconds',
        'inherited',
        'labels',
        'metricRule',
        'name',
        'namespaceId',
        'nodeRule',
        'repeatIntervalSeconds',
        'severity',
        'systemServiceRule',
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
        'clusterId',
        'eventRule',
        'groupId',
        'groupIntervalSeconds',
        'groupWaitSeconds',
        'inherited',
        'labels',
        'metricRule',
        'name',
        'nodeRule',
        'repeatIntervalSeconds',
        'severity',
        'systemServiceRule',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'alertState' => 'string',
        'annotations' => 'map[string,string]',
        'clusterId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'eventRule' => '\Rancher\Model\EventRuleModel',
        'groupId' => 'string',
        'groupIntervalSeconds' => 'int',
        'groupWaitSeconds' => 'int',
        'id' => 'string',
        'inherited' => 'boolean',
        'labels' => 'map[string,string]',
        'metricRule' => '\Rancher\Model\MetricRuleModel',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeRule' => '\Rancher\Model\NodeRuleModel',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'repeatIntervalSeconds' => 'int',
        'severity' => 'string',
        'state' => 'string',
        'systemServiceRule' => '\Rancher\Model\SystemServiceRuleModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alertState' => 'setAlertState',
        'annotations' => 'setAnnotations',
        'clusterId' => 'setClusterId',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'eventRule' => 'setEventRule',
        'groupId' => 'setGroupId',
        'groupIntervalSeconds' => 'setGroupIntervalSeconds',
        'groupWaitSeconds' => 'setGroupWaitSeconds',
        'id' => 'setId',
        'inherited' => 'setInherited',
        'labels' => 'setLabels',
        'metricRule' => 'setMetricRule',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeRule' => 'setNodeRule',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'repeatIntervalSeconds' => 'setRepeatIntervalSeconds',
        'severity' => 'setSeverity',
        'state' => 'setState',
        'systemServiceRule' => 'setSystemServiceRule',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alertState' => 'getAlertState',
        'annotations' => 'getAnnotations',
        'clusterId' => 'getClusterId',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'eventRule' => 'getEventRule',
        'groupId' => 'getGroupId',
        'groupIntervalSeconds' => 'getGroupIntervalSeconds',
        'groupWaitSeconds' => 'getGroupWaitSeconds',
        'id' => 'getId',
        'inherited' => 'getInherited',
        'labels' => 'getLabels',
        'metricRule' => 'getMetricRule',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeRule' => 'getNodeRule',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'repeatIntervalSeconds' => 'getRepeatIntervalSeconds',
        'severity' => 'getSeverity',
        'state' => 'getState',
        'systemServiceRule' => 'getSystemServiceRule',
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
        $this->container['alertState'] = isset($data['alertState']) ? $data['alertState'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['eventRule'] = isset($data['eventRule']) ? $data['eventRule'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupIntervalSeconds'] = isset($data['groupIntervalSeconds']) ? $data['groupIntervalSeconds'] : null;
        $this->container['groupWaitSeconds'] = isset($data['groupWaitSeconds']) ? $data['groupWaitSeconds'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inherited'] = isset($data['inherited']) ? $data['inherited'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['metricRule'] = isset($data['metricRule']) ? $data['metricRule'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeRule'] = isset($data['nodeRule']) ? $data['nodeRule'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['repeatIntervalSeconds'] = isset($data['repeatIntervalSeconds']) ? $data['repeatIntervalSeconds'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['systemServiceRule'] = isset($data['systemServiceRule']) ? $data['systemServiceRule'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
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
     * Gets eventRule
     * @return \Rancher\Model\EventRuleModel
     */
    public function getEventRule()
    {
        return $this->container['eventRule'];
    }

    /**
     * Sets eventRule
     * @param \Rancher\Model\EventRuleModel $eventRule
     * @return $this
     */
    public function setEventRule($eventRule)
    {
        $this->container['eventRule'] = $eventRule;

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
     * Gets nodeRule
     * @return \Rancher\Model\NodeRuleModel
     */
    public function getNodeRule()
    {
        return $this->container['nodeRule'];
    }

    /**
     * Sets nodeRule
     * @param \Rancher\Model\NodeRuleModel $nodeRule
     * @return $this
     */
    public function setNodeRule($nodeRule)
    {
        $this->container['nodeRule'] = $nodeRule;

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
     * Gets systemServiceRule
     * @return \Rancher\Model\SystemServiceRuleModel
     */
    public function getSystemServiceRule()
    {
        return $this->container['systemServiceRule'];
    }

    /**
     * Sets systemServiceRule
     * @param \Rancher\Model\SystemServiceRuleModel $systemServiceRule
     * @return $this
     */
    public function setSystemServiceRule($systemServiceRule)
    {
        $this->container['systemServiceRule'] = $systemServiceRule;

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

