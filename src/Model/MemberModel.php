<?php

/**
 * MemberModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class MemberModel implements ArrayAccess
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
        'accessType',
        'groupPrincipalId',
        'userPrincipalId',
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
        'accessType',
        'groupPrincipalId',
        'userPrincipalId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessType' => 'string',
        'groupPrincipalId' => 'string',
        'userPrincipalId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessType' => 'setAccessType',
        'groupPrincipalId' => 'setGroupPrincipalId',
        'userPrincipalId' => 'setUserPrincipalId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessType' => 'getAccessType',
        'groupPrincipalId' => 'getGroupPrincipalId',
        'userPrincipalId' => 'getUserPrincipalId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['groupPrincipalId'] = isset($data['groupPrincipalId']) ? $data['groupPrincipalId'] : null;
        $this->container['userPrincipalId'] = isset($data['userPrincipalId']) ? $data['userPrincipalId'] : null;
    }

    /**
     * Gets accessType
     * @return string
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     * @param string $accessType
     * @return $this
     */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;

        return $this;
    }


    /**
     * Gets groupPrincipalId
     * @return string
     */
    public function getGroupPrincipalId()
    {
        return $this->container['groupPrincipalId'];
    }

    /**
     * Sets groupPrincipalId
     * @param string $groupPrincipalId
     * @return $this
     */
    public function setGroupPrincipalId($groupPrincipalId)
    {
        $this->container['groupPrincipalId'] = $groupPrincipalId;

        return $this;
    }


    /**
     * Gets userPrincipalId
     * @return string
     */
    public function getUserPrincipalId()
    {
        return $this->container['userPrincipalId'];
    }

    /**
     * Sets userPrincipalId
     * @param string $userPrincipalId
     * @return $this
     */
    public function setUserPrincipalId($userPrincipalId)
    {
        $this->container['userPrincipalId'] = $userPrincipalId;

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

