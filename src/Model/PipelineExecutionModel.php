<?php

/**
 * PipelineExecutionModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PipelineExecutionModel implements ArrayAccess
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
        'author',
        'avatarUrl',
        'branch',
        'commit',
        'email',
        'event',
        'htmlLink',
        'labels',
        'message',
        'name',
        'namespaceId',
        'pipelineConfig',
        'pipelineId',
        'projectId',
        'ref',
        'repositoryUrl',
        'run',
        'title',
        'triggerUserId',
        'triggeredBy',
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
        'author',
        'avatarUrl',
        'branch',
        'commit',
        'email',
        'event',
        'htmlLink',
        'labels',
        'message',
        'pipelineConfig',
        'pipelineId',
        'projectId',
        'ref',
        'repositoryUrl',
        'run',
        'title',
        'triggerUserId',
        'triggeredBy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'author' => 'string',
        'avatarUrl' => 'string',
        'branch' => 'string',
        'commit' => 'string',
        'conditions' => '\Rancher\Model\PipelineConditionModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'email' => 'string',
        'ended' => 'string',
        'event' => 'string',
        'executionState' => 'string',
        'htmlLink' => 'string',
        'labels' => 'map[string,string]',
        'message' => 'string',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'pipelineConfig' => '\Rancher\Model\PipelineConfigModel',
        'pipelineId' => 'string',
        'projectId' => 'string',
        'ref' => 'string',
        'removed' => '\DateTime',
        'repositoryUrl' => 'string',
        'run' => 'int',
        'stages' => '\Rancher\Model\StageStatusModel[]',
        'started' => 'string',
        'state' => 'string',
        'title' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'triggerUserId' => 'string',
        'triggeredBy' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'author' => 'setAuthor',
        'avatarUrl' => 'setAvatarUrl',
        'branch' => 'setBranch',
        'commit' => 'setCommit',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'email' => 'setEmail',
        'ended' => 'setEnded',
        'event' => 'setEvent',
        'executionState' => 'setExecutionState',
        'htmlLink' => 'setHtmlLink',
        'labels' => 'setLabels',
        'message' => 'setMessage',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'pipelineConfig' => 'setPipelineConfig',
        'pipelineId' => 'setPipelineId',
        'projectId' => 'setProjectId',
        'ref' => 'setRef',
        'removed' => 'setRemoved',
        'repositoryUrl' => 'setRepositoryUrl',
        'run' => 'setRun',
        'stages' => 'setStages',
        'started' => 'setStarted',
        'state' => 'setState',
        'title' => 'setTitle',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'triggerUserId' => 'setTriggerUserId',
        'triggeredBy' => 'setTriggeredBy',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'author' => 'getAuthor',
        'avatarUrl' => 'getAvatarUrl',
        'branch' => 'getBranch',
        'commit' => 'getCommit',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'email' => 'getEmail',
        'ended' => 'getEnded',
        'event' => 'getEvent',
        'executionState' => 'getExecutionState',
        'htmlLink' => 'getHtmlLink',
        'labels' => 'getLabels',
        'message' => 'getMessage',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'pipelineConfig' => 'getPipelineConfig',
        'pipelineId' => 'getPipelineId',
        'projectId' => 'getProjectId',
        'ref' => 'getRef',
        'removed' => 'getRemoved',
        'repositoryUrl' => 'getRepositoryUrl',
        'run' => 'getRun',
        'stages' => 'getStages',
        'started' => 'getStarted',
        'state' => 'getState',
        'title' => 'getTitle',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'triggerUserId' => 'getTriggerUserId',
        'triggeredBy' => 'getTriggeredBy',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['ended'] = isset($data['ended']) ? $data['ended'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['executionState'] = isset($data['executionState']) ? $data['executionState'] : null;
        $this->container['htmlLink'] = isset($data['htmlLink']) ? $data['htmlLink'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['pipelineConfig'] = isset($data['pipelineConfig']) ? $data['pipelineConfig'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['repositoryUrl'] = isset($data['repositoryUrl']) ? $data['repositoryUrl'] : null;
        $this->container['run'] = isset($data['run']) ? $data['run'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['triggerUserId'] = isset($data['triggerUserId']) ? $data['triggerUserId'] : null;
        $this->container['triggeredBy'] = isset($data['triggeredBy']) ? $data['triggeredBy'] : null;
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
     * Gets author
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     * @param string $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }


    /**
     * Gets avatarUrl
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
     * Sets avatarUrl
     * @param string $avatarUrl
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }


    /**
     * Gets branch
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     * @param string $branch
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }


    /**
     * Gets commit
     * @return string
     */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
     * Sets commit
     * @param string $commit
     * @return $this
     */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\PipelineConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\PipelineConditionModel[] $conditions
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
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }


    /**
     * Gets ended
     * @return string
     */
    public function getEnded()
    {
        return $this->container['ended'];
    }

    /**
     * Sets ended
     * @param string $ended
     * @return $this
     */
    public function setEnded($ended)
    {
        $this->container['ended'] = $ended;

        return $this;
    }


    /**
     * Gets event
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     * @param string $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }


    /**
     * Gets executionState
     * @return string
     */
    public function getExecutionState()
    {
        return $this->container['executionState'];
    }

    /**
     * Sets executionState
     * @param string $executionState
     * @return $this
     */
    public function setExecutionState($executionState)
    {
        $this->container['executionState'] = $executionState;

        return $this;
    }


    /**
     * Gets htmlLink
     * @return string
     */
    public function getHtmlLink()
    {
        return $this->container['htmlLink'];
    }

    /**
     * Sets htmlLink
     * @param string $htmlLink
     * @return $this
     */
    public function setHtmlLink($htmlLink)
    {
        $this->container['htmlLink'] = $htmlLink;

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
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * Gets pipelineConfig
     * @return \Rancher\Model\PipelineConfigModel
     */
    public function getPipelineConfig()
    {
        return $this->container['pipelineConfig'];
    }

    /**
     * Sets pipelineConfig
     * @param \Rancher\Model\PipelineConfigModel $pipelineConfig
     * @return $this
     */
    public function setPipelineConfig($pipelineConfig)
    {
        $this->container['pipelineConfig'] = $pipelineConfig;

        return $this;
    }


    /**
     * Gets pipelineId
     * @return string
     */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
     * Sets pipelineId
     * @param string $pipelineId
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;

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
     * Gets ref
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     * @param string $ref
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

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
     * Gets run
     * @return int
     */
    public function getRun()
    {
        return $this->container['run'];
    }

    /**
     * Sets run
     * @param int $run
     * @return $this
     */
    public function setRun($run)
    {
        $this->container['run'] = $run;

        return $this;
    }


    /**
     * Gets stages
     * @return \Rancher\Model\StageStatusModel[]
     */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
     * Sets stages
     * @param \Rancher\Model\StageStatusModel[] $stages
     * @return $this
     */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;

        return $this;
    }


    /**
     * Gets started
     * @return string
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     * @param string $started
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

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
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets triggerUserId
     * @return string
     */
    public function getTriggerUserId()
    {
        return $this->container['triggerUserId'];
    }

    /**
     * Sets triggerUserId
     * @param string $triggerUserId
     * @return $this
     */
    public function setTriggerUserId($triggerUserId)
    {
        $this->container['triggerUserId'] = $triggerUserId;

        return $this;
    }


    /**
     * Gets triggeredBy
     * @return string
     */
    public function getTriggeredBy()
    {
        return $this->container['triggeredBy'];
    }

    /**
     * Sets triggeredBy
     * @param string $triggeredBy
     * @return $this
     */
    public function setTriggeredBy($triggeredBy)
    {
        $this->container['triggeredBy'] = $triggeredBy;

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

