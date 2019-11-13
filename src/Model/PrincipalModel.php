<?php

/**
 * PrincipalModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PrincipalModel implements ArrayAccess
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
        'extraInfo',
        'labels',
        'loginName',
        'me',
        'memberOf',
        'name',
        'principalType',
        'profilePicture',
        'profileURL',
        'provider',
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
        'extraInfo',
        'labels',
        'loginName',
        'me',
        'memberOf',
        'name',
        'principalType',
        'profilePicture',
        'profileURL',
        'provider',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'extraInfo' => 'map[string,string]',
        'id' => 'string',
        'labels' => 'map[string,string]',
        'loginName' => 'string',
        'me' => 'boolean',
        'memberOf' => 'boolean',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'principalType' => 'string',
        'profilePicture' => 'string',
        'profileURL' => 'string',
        'provider' => 'string',
        'removed' => '\DateTime',
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
        'extraInfo' => 'setExtraInfo',
        'id' => 'setId',
        'labels' => 'setLabels',
        'loginName' => 'setLoginName',
        'me' => 'setMe',
        'memberOf' => 'setMemberOf',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'principalType' => 'setPrincipalType',
        'profilePicture' => 'setProfilePicture',
        'profileURL' => 'setProfileURL',
        'provider' => 'setProvider',
        'removed' => 'setRemoved',
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
        'extraInfo' => 'getExtraInfo',
        'id' => 'getId',
        'labels' => 'getLabels',
        'loginName' => 'getLoginName',
        'me' => 'getMe',
        'memberOf' => 'getMemberOf',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'principalType' => 'getPrincipalType',
        'profilePicture' => 'getProfilePicture',
        'profileURL' => 'getProfileURL',
        'provider' => 'getProvider',
        'removed' => 'getRemoved',
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
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['loginName'] = isset($data['loginName']) ? $data['loginName'] : null;
        $this->container['me'] = isset($data['me']) ? $data['me'] : null;
        $this->container['memberOf'] = isset($data['memberOf']) ? $data['memberOf'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['principalType'] = isset($data['principalType']) ? $data['principalType'] : null;
        $this->container['profilePicture'] = isset($data['profilePicture']) ? $data['profilePicture'] : null;
        $this->container['profileURL'] = isset($data['profileURL']) ? $data['profileURL'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
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
     * Gets extraInfo
     * @return string[]
     */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
     * Sets extraInfo
     * @param string[] $extraInfo
     * @return $this
     */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;

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
     * Gets me
     * @return boolean
     */
    public function getMe()
    {
        return $this->container['me'];
    }

    /**
     * Sets me
     * @param boolean $me
     * @return $this
     */
    public function setMe($me)
    {
        $this->container['me'] = $me;

        return $this;
    }


    /**
     * Gets memberOf
     * @return boolean
     */
    public function getMemberOf()
    {
        return $this->container['memberOf'];
    }

    /**
     * Sets memberOf
     * @param boolean $memberOf
     * @return $this
     */
    public function setMemberOf($memberOf)
    {
        $this->container['memberOf'] = $memberOf;

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
     * Gets principalType
     * @return string
     */
    public function getPrincipalType()
    {
        return $this->container['principalType'];
    }

    /**
     * Sets principalType
     * @param string $principalType
     * @return $this
     */
    public function setPrincipalType($principalType)
    {
        $this->container['principalType'] = $principalType;

        return $this;
    }


    /**
     * Gets profilePicture
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->container['profilePicture'];
    }

    /**
     * Sets profilePicture
     * @param string $profilePicture
     * @return $this
     */
    public function setProfilePicture($profilePicture)
    {
        $this->container['profilePicture'] = $profilePicture;

        return $this;
    }


    /**
     * Gets profileURL
     * @return string
     */
    public function getProfileURL()
    {
        return $this->container['profileURL'];
    }

    /**
     * Sets profileURL
     * @param string $profileURL
     * @return $this
     */
    public function setProfileURL($profileURL)
    {
        $this->container['profileURL'] = $profileURL;

        return $this;
    }


    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

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

