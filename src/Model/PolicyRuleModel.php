<?php

/**
 * PolicyRuleModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PolicyRuleModel implements ArrayAccess
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
        'apiGroups',
        'nonResourceURLs',
        'resourceNames',
        'resources',
        'verbs',
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
        'apiGroups',
        'nonResourceURLs',
        'resourceNames',
        'resources',
        'verbs',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'apiGroups' => 'string[]',
        'nonResourceURLs' => 'string[]',
        'resourceNames' => 'string[]',
        'resources' => 'string[]',
        'verbs' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'apiGroups' => 'setApiGroups',
        'nonResourceURLs' => 'setNonResourceURLs',
        'resourceNames' => 'setResourceNames',
        'resources' => 'setResources',
        'verbs' => 'setVerbs',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'apiGroups' => 'getApiGroups',
        'nonResourceURLs' => 'getNonResourceURLs',
        'resourceNames' => 'getResourceNames',
        'resources' => 'getResources',
        'verbs' => 'getVerbs',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['apiGroups'] = isset($data['apiGroups']) ? $data['apiGroups'] : null;
        $this->container['nonResourceURLs'] = isset($data['nonResourceURLs']) ? $data['nonResourceURLs'] : null;
        $this->container['resourceNames'] = isset($data['resourceNames']) ? $data['resourceNames'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['verbs'] = isset($data['verbs']) ? $data['verbs'] : null;
    }

    /**
     * Gets apiGroups
     * @return string[]
     */
    public function getApiGroups()
    {
        return $this->container['apiGroups'];
    }

    /**
     * Sets apiGroups
     * @param string[] $apiGroups
     * @return $this
     */
    public function setApiGroups($apiGroups)
    {
        $this->container['apiGroups'] = $apiGroups;

        return $this;
    }


    /**
     * Gets nonResourceURLs
     * @return string[]
     */
    public function getNonResourceURLs()
    {
        return $this->container['nonResourceURLs'];
    }

    /**
     * Sets nonResourceURLs
     * @param string[] $nonResourceURLs
     * @return $this
     */
    public function setNonResourceURLs($nonResourceURLs)
    {
        $this->container['nonResourceURLs'] = $nonResourceURLs;

        return $this;
    }


    /**
     * Gets resourceNames
     * @return string[]
     */
    public function getResourceNames()
    {
        return $this->container['resourceNames'];
    }

    /**
     * Sets resourceNames
     * @param string[] $resourceNames
     * @return $this
     */
    public function setResourceNames($resourceNames)
    {
        $this->container['resourceNames'] = $resourceNames;

        return $this;
    }


    /**
     * Gets resources
     * @return string[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param string[] $resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }


    /**
     * Gets verbs
     * @return string[]
     */
    public function getVerbs()
    {
        return $this->container['verbs'];
    }

    /**
     * Sets verbs
     * @param string[] $verbs
     * @return $this
     */
    public function setVerbs($verbs)
    {
        $this->container['verbs'] = $verbs;

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

