<?php

/**
 * OwnerReferenceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class OwnerReferenceModel implements ArrayAccess
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
        'apiVersion',
        'blockOwnerDeletion',
        'controller',
        'kind',
        'name',
        'uid',
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
        'apiVersion',
        'blockOwnerDeletion',
        'controller',
        'kind',
        'name',
        'uid',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'apiVersion' => 'string',
        'blockOwnerDeletion' => 'boolean',
        'controller' => 'boolean',
        'kind' => 'string',
        'name' => 'string',
        'uid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'apiVersion' => 'setApiVersion',
        'blockOwnerDeletion' => 'setBlockOwnerDeletion',
        'controller' => 'setController',
        'kind' => 'setKind',
        'name' => 'setName',
        'uid' => 'setUid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'apiVersion' => 'getApiVersion',
        'blockOwnerDeletion' => 'getBlockOwnerDeletion',
        'controller' => 'getController',
        'kind' => 'getKind',
        'name' => 'getName',
        'uid' => 'getUid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['blockOwnerDeletion'] = isset($data['blockOwnerDeletion']) ? $data['blockOwnerDeletion'] : null;
        $this->container['controller'] = isset($data['controller']) ? $data['controller'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
    }

    /**
     * Gets apiVersion
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
     * Sets apiVersion
     * @param string $apiVersion
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;

        return $this;
    }


    /**
     * Gets blockOwnerDeletion
     * @return boolean
     */
    public function getBlockOwnerDeletion()
    {
        return $this->container['blockOwnerDeletion'];
    }

    /**
     * Sets blockOwnerDeletion
     * @param boolean $blockOwnerDeletion
     * @return $this
     */
    public function setBlockOwnerDeletion($blockOwnerDeletion)
    {
        $this->container['blockOwnerDeletion'] = $blockOwnerDeletion;

        return $this;
    }


    /**
     * Gets controller
     * @return boolean
     */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
     * Sets controller
     * @param boolean $controller
     * @return $this
     */
    public function setController($controller)
    {
        $this->container['controller'] = $controller;

        return $this;
    }


    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

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
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param string $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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

