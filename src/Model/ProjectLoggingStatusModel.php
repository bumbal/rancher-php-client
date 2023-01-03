<?php

/**
 * ProjectLoggingStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProjectLoggingStatusModel implements ArrayAccess
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'appliedSpec' => '\Rancher\Model\ProjectLoggingSpecModel',
        'conditions' => '\Rancher\Model\LoggingConditionModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'appliedSpec' => 'setAppliedSpec',
        'conditions' => 'setConditions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'appliedSpec' => 'getAppliedSpec',
        'conditions' => 'getConditions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['appliedSpec'] = isset($data['appliedSpec']) ? $data['appliedSpec'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    }

    /**
     * Gets appliedSpec
     * @return \Rancher\Model\ProjectLoggingSpecModel
     */
    public function getAppliedSpec()
    {
        return $this->container['appliedSpec'];
    }

    /**
     * Sets appliedSpec
     * @param \Rancher\Model\ProjectLoggingSpecModel $appliedSpec
     * @return $this
     */
    public function setAppliedSpec($appliedSpec)
    {
        $this->container['appliedSpec'] = $appliedSpec;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\LoggingConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\LoggingConditionModel[] $conditions
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

