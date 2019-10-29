<?php

namespace Rancher\Model;

use \ArrayAccess;

class UpdateGlobalDNSTargetsInput implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'projectIds' => '\Rancher\Model\Reference[project][]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'projectIds' => 'setProjectIds',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'projectIds' => 'getProjectIds',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['projectIds'] = isset($data['projectIds']) ? $data['projectIds'] : null;
    }

    /**
     * Gets projectIds
     * @return \Rancher\Model\Reference[project][]
     */
    public function getProjectIds()
    {
        return $this->container['projectIds'];
    }

    /**
     * Sets projectIds
     * @param \Rancher\Model\Reference[project][] $projectIds
     * @return $this
     */
    public function setProjectIds($projectIds)
    {
        $this->container['projectIds'] = $projectIds;

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

