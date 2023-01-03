<?php

/**
 * NodeSelectorTermModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeSelectorTermModel implements ArrayAccess
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
        'matchExpressions',
        'matchFields',
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
        'matchExpressions',
        'matchFields',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'matchExpressions' => '\Rancher\Model\NodeSelectorRequirementModel[]',
        'matchFields' => '\Rancher\Model\NodeSelectorRequirementModel[]',
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
     * @return \Rancher\Model\NodeSelectorRequirementModel[]
     */
    public function getMatchExpressions()
    {
        return $this->container['matchExpressions'];
    }

    /**
     * Sets matchExpressions
     * @param \Rancher\Model\NodeSelectorRequirementModel[] $matchExpressions
     * @return $this
     */
    public function setMatchExpressions($matchExpressions)
    {
        $this->container['matchExpressions'] = $matchExpressions;

        return $this;
    }


    /**
     * Gets matchFields
     * @return \Rancher\Model\NodeSelectorRequirementModel[]
     */
    public function getMatchFields()
    {
        return $this->container['matchFields'];
    }

    /**
     * Sets matchFields
     * @param \Rancher\Model\NodeSelectorRequirementModel[] $matchFields
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

