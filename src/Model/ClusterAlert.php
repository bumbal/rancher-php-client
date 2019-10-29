<?php

namespace Rancher\Model;

use \ArrayAccess;

class ClusterAlert implements ArrayAccess
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
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'displayName' => 'string',
        'initialWaitSeconds' => 'int',
        'labels' => 'map[string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'recipients' => '\Rancher\Model\Recipient[]',
        'removed' => '\DateTime',
        'repeatIntervalSeconds' => 'int',
        'severity' => 'string',
        'state' => 'string',
        'status' => '\Rancher\Model\AlertStatus',
        'targetEvent' => '\Rancher\Model\TargetEvent',
        'targetNode' => '\Rancher\Model\TargetNode',
        'targetSystemService' => '\Rancher\Model\TargetSystemService',
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
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'displayName' => 'setDisplayName',
        'initialWaitSeconds' => 'setInitialWaitSeconds',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'recipients' => 'setRecipients',
        'removed' => 'setRemoved',
        'repeatIntervalSeconds' => 'setRepeatIntervalSeconds',
        'severity' => 'setSeverity',
        'state' => 'setState',
        'status' => 'setStatus',
        'targetEvent' => 'setTargetEvent',
        'targetNode' => 'setTargetNode',
        'targetSystemService' => 'setTargetSystemService',
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
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'displayName' => 'getDisplayName',
        'initialWaitSeconds' => 'getInitialWaitSeconds',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'recipients' => 'getRecipients',
        'removed' => 'getRemoved',
        'repeatIntervalSeconds' => 'getRepeatIntervalSeconds',
        'severity' => 'getSeverity',
        'state' => 'getState',
        'status' => 'getStatus',
        'targetEvent' => 'getTargetEvent',
        'targetNode' => 'getTargetNode',
        'targetSystemService' => 'getTargetSystemService',
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['initialWaitSeconds'] = isset($data['initialWaitSeconds']) ? $data['initialWaitSeconds'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['repeatIntervalSeconds'] = isset($data['repeatIntervalSeconds']) ? $data['repeatIntervalSeconds'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['targetEvent'] = isset($data['targetEvent']) ? $data['targetEvent'] : null;
        $this->container['targetNode'] = isset($data['targetNode']) ? $data['targetNode'] : null;
        $this->container['targetSystemService'] = isset($data['targetSystemService']) ? $data['targetSystemService'] : null;
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
     * Gets displayName
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }


    /**
     * Gets initialWaitSeconds
     * @return int
     */
    public function getInitialWaitSeconds()
    {
        return $this->container['initialWaitSeconds'];
    }

    /**
     * Sets initialWaitSeconds
     * @param int $initialWaitSeconds
     * @return $this
     */
    public function setInitialWaitSeconds($initialWaitSeconds)
    {
        $this->container['initialWaitSeconds'] = $initialWaitSeconds;

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
     * Gets recipients
     * @return \Rancher\Model\Recipient[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     * @param \Rancher\Model\Recipient[] $recipients
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

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
     * Gets status
     * @return \Rancher\Model\AlertStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\AlertStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets targetEvent
     * @return \Rancher\Model\TargetEvent
     */
    public function getTargetEvent()
    {
        return $this->container['targetEvent'];
    }

    /**
     * Sets targetEvent
     * @param \Rancher\Model\TargetEvent $targetEvent
     * @return $this
     */
    public function setTargetEvent($targetEvent)
    {
        $this->container['targetEvent'] = $targetEvent;

        return $this;
    }


    /**
     * Gets targetNode
     * @return \Rancher\Model\TargetNode
     */
    public function getTargetNode()
    {
        return $this->container['targetNode'];
    }

    /**
     * Sets targetNode
     * @param \Rancher\Model\TargetNode $targetNode
     * @return $this
     */
    public function setTargetNode($targetNode)
    {
        $this->container['targetNode'] = $targetNode;

        return $this;
    }


    /**
     * Gets targetSystemService
     * @return \Rancher\Model\TargetSystemService
     */
    public function getTargetSystemService()
    {
        return $this->container['targetSystemService'];
    }

    /**
     * Sets targetSystemService
     * @param \Rancher\Model\TargetSystemService $targetSystemService
     * @return $this
     */
    public function setTargetSystemService($targetSystemService)
    {
        $this->container['targetSystemService'] = $targetSystemService;

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

