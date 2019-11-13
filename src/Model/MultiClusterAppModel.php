<?php

/**
 * MultiClusterAppModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class MultiClusterAppModel implements ArrayAccess
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
        'answers',
        'labels',
        'members',
        'name',
        'revisionHistoryLimit',
        'roles',
        'targets',
        'templateVersionId',
        'upgradeStrategy',
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
        'answers',
        'labels',
        'members',
        'revisionHistoryLimit',
        'roles',
        'templateVersionId',
        'upgradeStrategy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'answers' => '\Rancher\Model\AnswerModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'labels' => 'map[string]',
        'members' => '\Rancher\Model\MemberModel[]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'revisionHistoryLimit' => 'int',
        'roles' => 'string[]',
        'state' => 'string',
        'status' => '\Rancher\Model\MultiClusterAppStatusModel',
        'targets' => '\Rancher\Model\TargetModel[]',
        'templateVersionId' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'upgradeStrategy' => '\Rancher\Model\UpgradeStrategyModel',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'answers' => 'setAnswers',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'labels' => 'setLabels',
        'members' => 'setMembers',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'revisionHistoryLimit' => 'setRevisionHistoryLimit',
        'roles' => 'setRoles',
        'state' => 'setState',
        'status' => 'setStatus',
        'targets' => 'setTargets',
        'templateVersionId' => 'setTemplateVersionId',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'upgradeStrategy' => 'setUpgradeStrategy',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'answers' => 'getAnswers',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'labels' => 'getLabels',
        'members' => 'getMembers',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'revisionHistoryLimit' => 'getRevisionHistoryLimit',
        'roles' => 'getRoles',
        'state' => 'getState',
        'status' => 'getStatus',
        'targets' => 'getTargets',
        'templateVersionId' => 'getTemplateVersionId',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'upgradeStrategy' => 'getUpgradeStrategy',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['revisionHistoryLimit'] = isset($data['revisionHistoryLimit']) ? $data['revisionHistoryLimit'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['templateVersionId'] = isset($data['templateVersionId']) ? $data['templateVersionId'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['upgradeStrategy'] = isset($data['upgradeStrategy']) ? $data['upgradeStrategy'] : null;
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
     * Gets answers
     * @return \Rancher\Model\AnswerModel[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param \Rancher\Model\AnswerModel[] $answers
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

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
     * Gets members
     * @return \Rancher\Model\MemberModel[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     * @param \Rancher\Model\MemberModel[] $members
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

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
     * Gets revisionHistoryLimit
     * @return int
     */
    public function getRevisionHistoryLimit()
    {
        return $this->container['revisionHistoryLimit'];
    }

    /**
     * Sets revisionHistoryLimit
     * @param int $revisionHistoryLimit
     * @return $this
     */
    public function setRevisionHistoryLimit($revisionHistoryLimit)
    {
        $this->container['revisionHistoryLimit'] = $revisionHistoryLimit;

        return $this;
    }


    /**
     * Gets roles
     * @return string[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     * @param string[] $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

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
     * @return \Rancher\Model\MultiClusterAppStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\MultiClusterAppStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets targets
     * @return \Rancher\Model\TargetModel[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     * @param \Rancher\Model\TargetModel[] $targets
     * @return $this
     */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;

        return $this;
    }


    /**
     * Gets templateVersionId
     * @return string
     */
    public function getTemplateVersionId()
    {
        return $this->container['templateVersionId'];
    }

    /**
     * Sets templateVersionId
     * @param string $templateVersionId
     * @return $this
     */
    public function setTemplateVersionId($templateVersionId)
    {
        $this->container['templateVersionId'] = $templateVersionId;

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
     * Gets upgradeStrategy
     * @return \Rancher\Model\UpgradeStrategyModel
     */
    public function getUpgradeStrategy()
    {
        return $this->container['upgradeStrategy'];
    }

    /**
     * Sets upgradeStrategy
     * @param \Rancher\Model\UpgradeStrategyModel $upgradeStrategy
     * @return $this
     */
    public function setUpgradeStrategy($upgradeStrategy)
    {
        $this->container['upgradeStrategy'] = $upgradeStrategy;

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

