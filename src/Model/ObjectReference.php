<?php

namespace Rancher\Model;

use \ArrayAccess;

class ObjectReference implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'apiVersion' => 'string',
        'fieldPath' => 'string',
        'kind' => 'string',
        'name' => 'string',
        'namespace' => 'string',
        'resourceVersion' => 'string',
        'uid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'apiVersion' => 'setApiVersion',
        'fieldPath' => 'setFieldPath',
        'kind' => 'setKind',
        'name' => 'setName',
        'namespace' => 'setNamespace',
        'resourceVersion' => 'setResourceVersion',
        'uid' => 'setUid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'apiVersion' => 'getApiVersion',
        'fieldPath' => 'getFieldPath',
        'kind' => 'getKind',
        'name' => 'getName',
        'namespace' => 'getNamespace',
        'resourceVersion' => 'getResourceVersion',
        'uid' => 'getUid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['fieldPath'] = isset($data['fieldPath']) ? $data['fieldPath'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['resourceVersion'] = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
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
     * Gets fieldPath
     * @return string
     */
    public function getFieldPath()
    {
        return $this->container['fieldPath'];
    }

    /**
     * Sets fieldPath
     * @param string $fieldPath
     * @return $this
     */
    public function setFieldPath($fieldPath)
    {
        $this->container['fieldPath'] = $fieldPath;

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
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }


    /**
     * Gets resourceVersion
     * @return string
     */
    public function getResourceVersion()
    {
        return $this->container['resourceVersion'];
    }

    /**
     * Sets resourceVersion
     * @param string $resourceVersion
     * @return $this
     */
    public function setResourceVersion($resourceVersion)
    {
        $this->container['resourceVersion'] = $resourceVersion;

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

