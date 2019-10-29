<?php

namespace Rancher\Model;

use \ArrayAccess;

class Target implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'appId' => 'string',
        'healthState' => 'string',
        'projectId' => 'string',
        'state' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'appId' => 'setAppId',
        'healthState' => 'setHealthState',
        'projectId' => 'setProjectId',
        'state' => 'setState',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'appId' => 'getAppId',
        'healthState' => 'getHealthState',
        'projectId' => 'getProjectId',
        'state' => 'getState',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['healthState'] = isset($data['healthState']) ? $data['healthState'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Gets appId
     * @return string
     */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
     * Sets appId
     * @param string $appId
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;

        return $this;
    }


    /**
     * Gets healthState
     * @return string
     */
    public function getHealthState()
    {
        return $this->container['healthState'];
    }

    /**
     * Sets healthState
     * @param string $healthState
     * @return $this
     */
    public function setHealthState($healthState)
    {
        $this->container['healthState'] = $healthState;

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

