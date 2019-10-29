<?php

namespace Rancher\Model;

use \ArrayAccess;

class NodeSelectorTerm implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'matchExpressions' => '\Rancher\Model\NodeSelectorRequirement[]',
        'matchFields' => '\Rancher\Model\NodeSelectorRequirement[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'matchExpressions' => 'setMatchExpressions',
        'matchFields' => 'setMatchFields',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'matchExpressions' => 'getMatchExpressions',
        'matchFields' => 'getMatchFields',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['matchExpressions'] = isset($data['matchExpressions']) ? $data['matchExpressions'] : null;
        $this->container['matchFields'] = isset($data['matchFields']) ? $data['matchFields'] : null;
    }

    /**
     * Gets matchExpressions
     * @return \Rancher\Model\NodeSelectorRequirement[]
     */
    public function getMatchExpressions()
    {
        return $this->container['matchExpressions'];
    }

    /**
     * Sets matchExpressions
     * @param \Rancher\Model\NodeSelectorRequirement[] $matchExpressions
     * @return $this
     */
    public function setMatchExpressions($matchExpressions)
    {
        $this->container['matchExpressions'] = $matchExpressions;

        return $this;
    }


    /**
     * Gets matchFields
     * @return \Rancher\Model\NodeSelectorRequirement[]
     */
    public function getMatchFields()
    {
        return $this->container['matchFields'];
    }

    /**
     * Sets matchFields
     * @param \Rancher\Model\NodeSelectorRequirement[] $matchFields
     * @return $this
     */
    public function setMatchFields($matchFields)
    {
        $this->container['matchFields'] = $matchFields;

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

