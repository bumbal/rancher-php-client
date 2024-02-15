<?php

/**
 * PodSecurityAdmissionConfigurationTemplateExemptionsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodSecurityAdmissionConfigurationTemplateExemptionsModel implements ArrayAccess
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
        'namespaces',
        'runtimeClasses',
        'usernames',
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
        'namespaces',
        'runtimeClasses',
        'usernames',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'namespaces' => 'string[]',
        'runtimeClasses' => 'string[]',
        'usernames' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'namespaces' => 'setNamespaces',
        'runtimeClasses' => 'setRuntimeClasses',
        'usernames' => 'setUsernames',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'namespaces' => 'getNamespaces',
        'runtimeClasses' => 'getRuntimeClasses',
        'usernames' => 'getUsernames',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
        $this->container['runtimeClasses'] = isset($data['runtimeClasses']) ? $data['runtimeClasses'] : null;
        $this->container['usernames'] = isset($data['usernames']) ? $data['usernames'] : null;
    }

    /**
     * Gets namespaces
     * @return string[]
     */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
     * Sets namespaces
     * @param string[] $namespaces
     * @return $this
     */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;

        return $this;
    }


    /**
     * Gets runtimeClasses
     * @return string[]
     */
    public function getRuntimeClasses()
    {
        return $this->container['runtimeClasses'];
    }

    /**
     * Sets runtimeClasses
     * @param string[] $runtimeClasses
     * @return $this
     */
    public function setRuntimeClasses($runtimeClasses)
    {
        $this->container['runtimeClasses'] = $runtimeClasses;

        return $this;
    }


    /**
     * Gets usernames
     * @return string[]
     */
    public function getUsernames()
    {
        return $this->container['usernames'];
    }

    /**
     * Sets usernames
     * @param string[] $usernames
     * @return $this
     */
    public function setUsernames($usernames)
    {
        $this->container['usernames'] = $usernames;

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

