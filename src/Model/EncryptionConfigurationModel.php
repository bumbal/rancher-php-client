<?php

/**
 * EncryptionConfigurationModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EncryptionConfigurationModel implements ArrayAccess
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
        'kind',
        'resources',
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
        'kind',
        'resources',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'apiVersion' => 'string',
        'kind' => 'string',
        'resources' => '\Rancher\Model\ResourceConfigurationModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'apiVersion' => 'setApiVersion',
        'kind' => 'setKind',
        'resources' => 'setResources',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'apiVersion' => 'getApiVersion',
        'kind' => 'getKind',
        'resources' => 'getResources',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
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
     * Gets resources
     * @return \Rancher\Model\ResourceConfigurationModel[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \Rancher\Model\ResourceConfigurationModel[] $resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

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

