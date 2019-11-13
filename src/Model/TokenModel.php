<?php

/**
 * TokenModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TokenModel implements ArrayAccess
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
        'authProvider',
        'clusterId',
        'current',
        'description',
        'enabled',
        'expired',
        'expiresAt',
        'groupPrincipals',
        'isDerived',
        'labels',
        'lastUpdateTime',
        'name',
        'providerInfo',
        'token',
        'ttl',
        'userId',
        'userPrincipal',
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
        'authProvider',
        'current',
        'description',
        'enabled',
        'expired',
        'expiresAt',
        'groupPrincipals',
        'isDerived',
        'labels',
        'lastUpdateTime',
        'providerInfo',
        'ttl',
        'userId',
        'userPrincipal',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'authProvider' => 'string',
        'clusterId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'current' => 'boolean',
        'description' => 'string',
        'enabled' => 'boolean',
        'expired' => 'boolean',
        'expiresAt' => 'string',
        'groupPrincipals' => 'string[]',
        'isDerived' => 'boolean',
        'labels' => 'map[string]',
        'lastUpdateTime' => 'string',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'providerInfo' => 'map[string]',
        'removed' => '\DateTime',
        'token' => 'string',
        'ttl' => 'int',
        'userId' => 'string',
        'userPrincipal' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'authProvider' => 'setAuthProvider',
        'clusterId' => 'setClusterId',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'current' => 'setCurrent',
        'description' => 'setDescription',
        'enabled' => 'setEnabled',
        'expired' => 'setExpired',
        'expiresAt' => 'setExpiresAt',
        'groupPrincipals' => 'setGroupPrincipals',
        'isDerived' => 'setIsDerived',
        'labels' => 'setLabels',
        'lastUpdateTime' => 'setLastUpdateTime',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'providerInfo' => 'setProviderInfo',
        'removed' => 'setRemoved',
        'token' => 'setToken',
        'ttl' => 'setTtl',
        'userId' => 'setUserId',
        'userPrincipal' => 'setUserPrincipal',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'authProvider' => 'getAuthProvider',
        'clusterId' => 'getClusterId',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'current' => 'getCurrent',
        'description' => 'getDescription',
        'enabled' => 'getEnabled',
        'expired' => 'getExpired',
        'expiresAt' => 'getExpiresAt',
        'groupPrincipals' => 'getGroupPrincipals',
        'isDerived' => 'getIsDerived',
        'labels' => 'getLabels',
        'lastUpdateTime' => 'getLastUpdateTime',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'providerInfo' => 'getProviderInfo',
        'removed' => 'getRemoved',
        'token' => 'getToken',
        'ttl' => 'getTtl',
        'userId' => 'getUserId',
        'userPrincipal' => 'getUserPrincipal',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['authProvider'] = isset($data['authProvider']) ? $data['authProvider'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['current'] = isset($data['current']) ? $data['current'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['groupPrincipals'] = isset($data['groupPrincipals']) ? $data['groupPrincipals'] : null;
        $this->container['isDerived'] = isset($data['isDerived']) ? $data['isDerived'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['providerInfo'] = isset($data['providerInfo']) ? $data['providerInfo'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userPrincipal'] = isset($data['userPrincipal']) ? $data['userPrincipal'] : null;
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
     * Gets authProvider
     * @return string
     */
    public function getAuthProvider()
    {
        return $this->container['authProvider'];
    }

    /**
     * Sets authProvider
     * @param string $authProvider
     * @return $this
     */
    public function setAuthProvider($authProvider)
    {
        $this->container['authProvider'] = $authProvider;

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
     * Gets current
     * @return boolean
     */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
     * Sets current
     * @param boolean $current
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->container['current'] = $current;

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
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets expired
     * @return boolean
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     * @param boolean $expired
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }


    /**
     * Gets expiresAt
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     * @param string $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }


    /**
     * Gets groupPrincipals
     * @return string[]
     */
    public function getGroupPrincipals()
    {
        return $this->container['groupPrincipals'];
    }

    /**
     * Sets groupPrincipals
     * @param string[] $groupPrincipals
     * @return $this
     */
    public function setGroupPrincipals($groupPrincipals)
    {
        $this->container['groupPrincipals'] = $groupPrincipals;

        return $this;
    }


    /**
     * Gets isDerived
     * @return boolean
     */
    public function getIsDerived()
    {
        return $this->container['isDerived'];
    }

    /**
     * Sets isDerived
     * @param boolean $isDerived
     * @return $this
     */
    public function setIsDerived($isDerived)
    {
        $this->container['isDerived'] = $isDerived;

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
     * Gets lastUpdateTime
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
     * Sets lastUpdateTime
     * @param string $lastUpdateTime
     * @return $this
     */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;

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
     * Gets providerInfo
     * @return string[]
     */
    public function getProviderInfo()
    {
        return $this->container['providerInfo'];
    }

    /**
     * Sets providerInfo
     * @param string[] $providerInfo
     * @return $this
     */
    public function setProviderInfo($providerInfo)
    {
        $this->container['providerInfo'] = $providerInfo;

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
     * Gets ttl
     * @return int
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     * @param int $ttl
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

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
     * Gets userPrincipal
     * @return string
     */
    public function getUserPrincipal()
    {
        return $this->container['userPrincipal'];
    }

    /**
     * Sets userPrincipal
     * @param string $userPrincipal
     * @return $this
     */
    public function setUserPrincipal($userPrincipal)
    {
        $this->container['userPrincipal'] = $userPrincipal;

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

