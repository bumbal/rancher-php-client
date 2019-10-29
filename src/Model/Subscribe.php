<?php

namespace Rancher\Model;

use \ArrayAccess;

class Subscribe implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'apiVersions' => 'string[]',
        'projectId' => 'string',
        'resourceTypes' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'apiVersions' => 'setApiVersions',
        'projectId' => 'setProjectId',
        'resourceTypes' => 'setResourceTypes',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'apiVersions' => 'getApiVersions',
        'projectId' => 'getProjectId',
        'resourceTypes' => 'getResourceTypes',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['apiVersions'] = isset($data['apiVersions']) ? $data['apiVersions'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
    }

    /**
     * Gets apiVersions
     * @return string[]
     */
    public function getApiVersions()
    {
        return $this->container['apiVersions'];
    }

    /**
     * Sets apiVersions
     * @param string[] $apiVersions
     * @return $this
     */
    public function setApiVersions($apiVersions)
    {
        $this->container['apiVersions'] = $apiVersions;

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
     * Gets resourceTypes
     * @return string[]
     */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
     * Sets resourceTypes
     * @param string[] $resourceTypes
     * @return $this
     */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;

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

