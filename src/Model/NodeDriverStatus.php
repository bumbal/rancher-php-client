<?php

namespace Rancher\Model;

use \ArrayAccess;

class NodeDriverStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'appliedChecksum' => 'string',
        'appliedDockerMachineVersion' => 'string',
        'appliedURL' => 'string',
        'conditions' => '\Rancher\Model\Condition[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'appliedChecksum' => 'setAppliedChecksum',
        'appliedDockerMachineVersion' => 'setAppliedDockerMachineVersion',
        'appliedURL' => 'setAppliedURL',
        'conditions' => 'setConditions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'appliedChecksum' => 'getAppliedChecksum',
        'appliedDockerMachineVersion' => 'getAppliedDockerMachineVersion',
        'appliedURL' => 'getAppliedURL',
        'conditions' => 'getConditions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['appliedChecksum'] = isset($data['appliedChecksum']) ? $data['appliedChecksum'] : null;
        $this->container['appliedDockerMachineVersion'] = isset($data['appliedDockerMachineVersion']) ? $data['appliedDockerMachineVersion'] : null;
        $this->container['appliedURL'] = isset($data['appliedURL']) ? $data['appliedURL'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    }

    /**
     * Gets appliedChecksum
     * @return string
     */
    public function getAppliedChecksum()
    {
        return $this->container['appliedChecksum'];
    }

    /**
     * Sets appliedChecksum
     * @param string $appliedChecksum
     * @return $this
     */
    public function setAppliedChecksum($appliedChecksum)
    {
        $this->container['appliedChecksum'] = $appliedChecksum;

        return $this;
    }


    /**
     * Gets appliedDockerMachineVersion
     * @return string
     */
    public function getAppliedDockerMachineVersion()
    {
        return $this->container['appliedDockerMachineVersion'];
    }

    /**
     * Sets appliedDockerMachineVersion
     * @param string $appliedDockerMachineVersion
     * @return $this
     */
    public function setAppliedDockerMachineVersion($appliedDockerMachineVersion)
    {
        $this->container['appliedDockerMachineVersion'] = $appliedDockerMachineVersion;

        return $this;
    }


    /**
     * Gets appliedURL
     * @return string
     */
    public function getAppliedURL()
    {
        return $this->container['appliedURL'];
    }

    /**
     * Sets appliedURL
     * @param string $appliedURL
     * @return $this
     */
    public function setAppliedURL($appliedURL)
    {
        $this->container['appliedURL'] = $appliedURL;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\Condition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\Condition[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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

