<?php

/**
 * PipelineModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PipelineModel implements ArrayAccess
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
        'labels',
        'name',
        'namespaceId',
        'projectId',
        'repositoryUrl',
        'sourceCodeCredentialId',
        'triggerWebhookPr',
        'triggerWebhookPush',
        'triggerWebhookTag',
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
        'labels',
        'name',
        'projectId',
        'repositoryUrl',
        'triggerWebhookPr',
        'triggerWebhookPush',
        'triggerWebhookTag',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'id' => 'string',
        'labels' => 'map[string,string]',
        'lastExecutionId' => 'string',
        'lastRunState' => 'string',
        'lastStarted' => 'string',
        'name' => 'string',
        'namespaceId' => 'string',
        'nextRun' => 'int',
        'nextStart' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'pipelineState' => 'string',
        'projectId' => 'string',
        'removed' => '\DateTime',
        'repositoryUrl' => 'string',
        'sourceCodeCredential' => '\Rancher\Model\SourceCodeCredentialModel',
        'sourceCodeCredentialId' => 'string',
        'state' => 'string',
        'token' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'triggerWebhookPr' => 'boolean',
        'triggerWebhookPush' => 'boolean',
        'triggerWebhookTag' => 'boolean',
        'uuid' => 'string',
        'webhookId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'id' => 'setId',
        'labels' => 'setLabels',
        'lastExecutionId' => 'setLastExecutionId',
        'lastRunState' => 'setLastRunState',
        'lastStarted' => 'setLastStarted',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nextRun' => 'setNextRun',
        'nextStart' => 'setNextStart',
        'ownerReferences' => 'setOwnerReferences',
        'pipelineState' => 'setPipelineState',
        'projectId' => 'setProjectId',
        'removed' => 'setRemoved',
        'repositoryUrl' => 'setRepositoryUrl',
        'sourceCodeCredential' => 'setSourceCodeCredential',
        'sourceCodeCredentialId' => 'setSourceCodeCredentialId',
        'state' => 'setState',
        'token' => 'setToken',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'triggerWebhookPr' => 'setTriggerWebhookPr',
        'triggerWebhookPush' => 'setTriggerWebhookPush',
        'triggerWebhookTag' => 'setTriggerWebhookTag',
        'uuid' => 'setUuid',
        'webhookId' => 'setWebhookId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'id' => 'getId',
        'labels' => 'getLabels',
        'lastExecutionId' => 'getLastExecutionId',
        'lastRunState' => 'getLastRunState',
        'lastStarted' => 'getLastStarted',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nextRun' => 'getNextRun',
        'nextStart' => 'getNextStart',
        'ownerReferences' => 'getOwnerReferences',
        'pipelineState' => 'getPipelineState',
        'projectId' => 'getProjectId',
        'removed' => 'getRemoved',
        'repositoryUrl' => 'getRepositoryUrl',
        'sourceCodeCredential' => 'getSourceCodeCredential',
        'sourceCodeCredentialId' => 'getSourceCodeCredentialId',
        'state' => 'getState',
        'token' => 'getToken',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'triggerWebhookPr' => 'getTriggerWebhookPr',
        'triggerWebhookPush' => 'getTriggerWebhookPush',
        'triggerWebhookTag' => 'getTriggerWebhookTag',
        'uuid' => 'getUuid',
        'webhookId' => 'getWebhookId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['lastExecutionId'] = isset($data['lastExecutionId']) ? $data['lastExecutionId'] : null;
        $this->container['lastRunState'] = isset($data['lastRunState']) ? $data['lastRunState'] : null;
        $this->container['lastStarted'] = isset($data['lastStarted']) ? $data['lastStarted'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nextRun'] = isset($data['nextRun']) ? $data['nextRun'] : null;
        $this->container['nextStart'] = isset($data['nextStart']) ? $data['nextStart'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['pipelineState'] = isset($data['pipelineState']) ? $data['pipelineState'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['repositoryUrl'] = isset($data['repositoryUrl']) ? $data['repositoryUrl'] : null;
        $this->container['sourceCodeCredential'] = isset($data['sourceCodeCredential']) ? $data['sourceCodeCredential'] : null;
        $this->container['sourceCodeCredentialId'] = isset($data['sourceCodeCredentialId']) ? $data['sourceCodeCredentialId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['triggerWebhookPr'] = isset($data['triggerWebhookPr']) ? $data['triggerWebhookPr'] : null;
        $this->container['triggerWebhookPush'] = isset($data['triggerWebhookPush']) ? $data['triggerWebhookPush'] : null;
        $this->container['triggerWebhookTag'] = isset($data['triggerWebhookTag']) ? $data['triggerWebhookTag'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['webhookId'] = isset($data['webhookId']) ? $data['webhookId'] : null;
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
     * Gets lastExecutionId
     * @return string
     */
    public function getLastExecutionId()
    {
        return $this->container['lastExecutionId'];
    }

    /**
     * Sets lastExecutionId
     * @param string $lastExecutionId
     * @return $this
     */
    public function setLastExecutionId($lastExecutionId)
    {
        $this->container['lastExecutionId'] = $lastExecutionId;

        return $this;
    }


    /**
     * Gets lastRunState
     * @return string
     */
    public function getLastRunState()
    {
        return $this->container['lastRunState'];
    }

    /**
     * Sets lastRunState
     * @param string $lastRunState
     * @return $this
     */
    public function setLastRunState($lastRunState)
    {
        $this->container['lastRunState'] = $lastRunState;

        return $this;
    }


    /**
     * Gets lastStarted
     * @return string
     */
    public function getLastStarted()
    {
        return $this->container['lastStarted'];
    }

    /**
     * Sets lastStarted
     * @param string $lastStarted
     * @return $this
     */
    public function setLastStarted($lastStarted)
    {
        $this->container['lastStarted'] = $lastStarted;

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
     * Gets nextRun
     * @return int
     */
    public function getNextRun()
    {
        return $this->container['nextRun'];
    }

    /**
     * Sets nextRun
     * @param int $nextRun
     * @return $this
     */
    public function setNextRun($nextRun)
    {
        $this->container['nextRun'] = $nextRun;

        return $this;
    }


    /**
     * Gets nextStart
     * @return string
     */
    public function getNextStart()
    {
        return $this->container['nextStart'];
    }

    /**
     * Sets nextStart
     * @param string $nextStart
     * @return $this
     */
    public function setNextStart($nextStart)
    {
        $this->container['nextStart'] = $nextStart;

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
     * Gets pipelineState
     * @return string
     */
    public function getPipelineState()
    {
        return $this->container['pipelineState'];
    }

    /**
     * Sets pipelineState
     * @param string $pipelineState
     * @return $this
     */
    public function setPipelineState($pipelineState)
    {
        $this->container['pipelineState'] = $pipelineState;

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
     * Gets repositoryUrl
     * @return string
     */
    public function getRepositoryUrl()
    {
        return $this->container['repositoryUrl'];
    }

    /**
     * Sets repositoryUrl
     * @param string $repositoryUrl
     * @return $this
     */
    public function setRepositoryUrl($repositoryUrl)
    {
        $this->container['repositoryUrl'] = $repositoryUrl;

        return $this;
    }


    /**
     * Gets sourceCodeCredential
     * @return \Rancher\Model\SourceCodeCredentialModel
     */
    public function getSourceCodeCredential()
    {
        return $this->container['sourceCodeCredential'];
    }

    /**
     * Sets sourceCodeCredential
     * @param \Rancher\Model\SourceCodeCredentialModel $sourceCodeCredential
     * @return $this
     */
    public function setSourceCodeCredential($sourceCodeCredential)
    {
        $this->container['sourceCodeCredential'] = $sourceCodeCredential;

        return $this;
    }


    /**
     * Gets sourceCodeCredentialId
     * @return string
     */
    public function getSourceCodeCredentialId()
    {
        return $this->container['sourceCodeCredentialId'];
    }

    /**
     * Sets sourceCodeCredentialId
     * @param string $sourceCodeCredentialId
     * @return $this
     */
    public function setSourceCodeCredentialId($sourceCodeCredentialId)
    {
        $this->container['sourceCodeCredentialId'] = $sourceCodeCredentialId;

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
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * Gets triggerWebhookPr
     * @return boolean
     */
    public function getTriggerWebhookPr()
    {
        return $this->container['triggerWebhookPr'];
    }

    /**
     * Sets triggerWebhookPr
     * @param boolean $triggerWebhookPr
     * @return $this
     */
    public function setTriggerWebhookPr($triggerWebhookPr)
    {
        $this->container['triggerWebhookPr'] = $triggerWebhookPr;

        return $this;
    }


    /**
     * Gets triggerWebhookPush
     * @return boolean
     */
    public function getTriggerWebhookPush()
    {
        return $this->container['triggerWebhookPush'];
    }

    /**
     * Sets triggerWebhookPush
     * @param boolean $triggerWebhookPush
     * @return $this
     */
    public function setTriggerWebhookPush($triggerWebhookPush)
    {
        $this->container['triggerWebhookPush'] = $triggerWebhookPush;

        return $this;
    }


    /**
     * Gets triggerWebhookTag
     * @return boolean
     */
    public function getTriggerWebhookTag()
    {
        return $this->container['triggerWebhookTag'];
    }

    /**
     * Sets triggerWebhookTag
     * @param boolean $triggerWebhookTag
     * @return $this
     */
    public function setTriggerWebhookTag($triggerWebhookTag)
    {
        $this->container['triggerWebhookTag'] = $triggerWebhookTag;

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
     * Gets webhookId
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhookId'];
    }

    /**
     * Sets webhookId
     * @param string $webhookId
     * @return $this
     */
    public function setWebhookId($webhookId)
    {
        $this->container['webhookId'] = $webhookId;

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

