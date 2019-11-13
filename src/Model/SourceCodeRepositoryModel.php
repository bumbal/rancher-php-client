<?php

/**
 * SourceCodeRepositoryModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SourceCodeRepositoryModel implements ArrayAccess
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
        'defaultBranch',
        'labels',
        'language',
        'name',
        'permissions',
        'projectId',
        'sourceCodeCredentialId',
        'sourceCodeType',
        'url',
        'userId',
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
        'defaultBranch',
        'labels',
        'language',
        'permissions',
        'projectId',
        'sourceCodeCredentialId',
        'sourceCodeType',
        'url',
        'userId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'defaultBranch' => 'string',
        'labels' => 'map[string]',
        'language' => 'string',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'permissions' => '\Rancher\Model\RepoPermModel',
        'projectId' => 'string',
        'removed' => '\DateTime',
        'sourceCodeCredentialId' => 'string',
        'sourceCodeType' => 'string',
        'state' => 'string',
        'status' => '\Rancher\Model\SourceCodeRepositoryStatusModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'url' => 'string',
        'userId' => 'string',
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
        'defaultBranch' => 'setDefaultBranch',
        'labels' => 'setLabels',
        'language' => 'setLanguage',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'permissions' => 'setPermissions',
        'projectId' => 'setProjectId',
        'removed' => 'setRemoved',
        'sourceCodeCredentialId' => 'setSourceCodeCredentialId',
        'sourceCodeType' => 'setSourceCodeType',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'url' => 'setUrl',
        'userId' => 'setUserId',
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
        'defaultBranch' => 'getDefaultBranch',
        'labels' => 'getLabels',
        'language' => 'getLanguage',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'permissions' => 'getPermissions',
        'projectId' => 'getProjectId',
        'removed' => 'getRemoved',
        'sourceCodeCredentialId' => 'getSourceCodeCredentialId',
        'sourceCodeType' => 'getSourceCodeType',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'url' => 'getUrl',
        'userId' => 'getUserId',
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
        $this->container['defaultBranch'] = isset($data['defaultBranch']) ? $data['defaultBranch'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['sourceCodeCredentialId'] = isset($data['sourceCodeCredentialId']) ? $data['sourceCodeCredentialId'] : null;
        $this->container['sourceCodeType'] = isset($data['sourceCodeType']) ? $data['sourceCodeType'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
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
     * Gets defaultBranch
     * @return string
     */
    public function getDefaultBranch()
    {
        return $this->container['defaultBranch'];
    }

    /**
     * Sets defaultBranch
     * @param string $defaultBranch
     * @return $this
     */
    public function setDefaultBranch($defaultBranch)
    {
        $this->container['defaultBranch'] = $defaultBranch;

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
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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
     * Gets permissions
     * @return \Rancher\Model\RepoPermModel
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param \Rancher\Model\RepoPermModel $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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
     * Gets sourceCodeType
     * @return string
     */
    public function getSourceCodeType()
    {
        return $this->container['sourceCodeType'];
    }

    /**
     * Sets sourceCodeType
     * @param string $sourceCodeType
     * @return $this
     */
    public function setSourceCodeType($sourceCodeType)
    {
        $this->container['sourceCodeType'] = $sourceCodeType;

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
     * @return \Rancher\Model\SourceCodeRepositoryStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\SourceCodeRepositoryStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }


    /**
     * Gets userId
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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

