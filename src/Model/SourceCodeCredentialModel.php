<?php

/**
 * SourceCodeCredentialModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SourceCodeCredentialModel implements ArrayAccess
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
        'accessToken',
        'annotations',
        'avatarUrl',
        'displayName',
        'expiry',
        'gitCloneToken',
        'gitLoginName',
        'htmlUrl',
        'labels',
        'loginName',
        'name',
        'projectId',
        'refreshToken',
        'sourceCodeType',
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
        'avatarUrl',
        'displayName',
        'expiry',
        'gitLoginName',
        'htmlUrl',
        'labels',
        'loginName',
        'projectId',
        'sourceCodeType',
        'userId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessToken' => 'string',
        'annotations' => 'map[string]',
        'avatarUrl' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'displayName' => 'string',
        'expiry' => 'string',
        'gitCloneToken' => 'string',
        'gitLoginName' => 'string',
        'htmlUrl' => 'string',
        'labels' => 'map[string]',
        'loginName' => 'string',
        'logout' => 'boolean',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'projectId' => 'string',
        'refreshToken' => 'string',
        'removed' => '\DateTime',
        'sourceCodeType' => 'string',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'userId' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'annotations' => 'setAnnotations',
        'avatarUrl' => 'setAvatarUrl',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'displayName' => 'setDisplayName',
        'expiry' => 'setExpiry',
        'gitCloneToken' => 'setGitCloneToken',
        'gitLoginName' => 'setGitLoginName',
        'htmlUrl' => 'setHtmlUrl',
        'labels' => 'setLabels',
        'loginName' => 'setLoginName',
        'logout' => 'setLogout',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'projectId' => 'setProjectId',
        'refreshToken' => 'setRefreshToken',
        'removed' => 'setRemoved',
        'sourceCodeType' => 'setSourceCodeType',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'userId' => 'setUserId',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'annotations' => 'getAnnotations',
        'avatarUrl' => 'getAvatarUrl',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'displayName' => 'getDisplayName',
        'expiry' => 'getExpiry',
        'gitCloneToken' => 'getGitCloneToken',
        'gitLoginName' => 'getGitLoginName',
        'htmlUrl' => 'getHtmlUrl',
        'labels' => 'getLabels',
        'loginName' => 'getLoginName',
        'logout' => 'getLogout',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'projectId' => 'getProjectId',
        'refreshToken' => 'getRefreshToken',
        'removed' => 'getRemoved',
        'sourceCodeType' => 'getSourceCodeType',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'userId' => 'getUserId',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['gitCloneToken'] = isset($data['gitCloneToken']) ? $data['gitCloneToken'] : null;
        $this->container['gitLoginName'] = isset($data['gitLoginName']) ? $data['gitLoginName'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['loginName'] = isset($data['loginName']) ? $data['loginName'] : null;
        $this->container['logout'] = isset($data['logout']) ? $data['logout'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['sourceCodeType'] = isset($data['sourceCodeType']) ? $data['sourceCodeType'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
     * Gets accessToken
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

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
     * Gets expiry
     * @return string
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     * @param string $expiry
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }


    /**
     * Gets gitCloneToken
     * @return string
     */
    public function getGitCloneToken()
    {
        return $this->container['gitCloneToken'];
    }

    /**
     * Sets gitCloneToken
     * @param string $gitCloneToken
     * @return $this
     */
    public function setGitCloneToken($gitCloneToken)
    {
        $this->container['gitCloneToken'] = $gitCloneToken;

        return $this;
    }


    /**
     * Gets gitLoginName
     * @return string
     */
    public function getGitLoginName()
    {
        return $this->container['gitLoginName'];
    }

    /**
     * Sets gitLoginName
     * @param string $gitLoginName
     * @return $this
     */
    public function setGitLoginName($gitLoginName)
    {
        $this->container['gitLoginName'] = $gitLoginName;

        return $this;
    }


    /**
     * Gets htmlUrl
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     * @param string $htmlUrl
     * @return $this
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

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
     * Gets loginName
     * @return string
     */
    public function getLoginName()
    {
        return $this->container['loginName'];
    }

    /**
     * Sets loginName
     * @param string $loginName
     * @return $this
     */
    public function setLoginName($loginName)
    {
        $this->container['loginName'] = $loginName;

        return $this;
    }


    /**
     * Gets logout
     * @return boolean
     */
    public function getLogout()
    {
        return $this->container['logout'];
    }

    /**
     * Sets logout
     * @param boolean $logout
     * @return $this
     */
    public function setLogout($logout)
    {
        $this->container['logout'] = $logout;

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
     * Gets refreshToken
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     * @param string $refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

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

