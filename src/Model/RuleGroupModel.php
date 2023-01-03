<?php

/**
 * RuleGroupModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RuleGroupModel implements ArrayAccess
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
        'interval',
        'name',
        'partial_response_strategy',
        'rules',
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
        'interval',
        'name',
        'partial_response_strategy',
        'rules',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'interval' => 'string',
        'name' => 'string',
        'partial_response_strategy' => 'string',
        'rules' => '\Rancher\Model\RuleModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'interval' => 'setInterval',
        'name' => 'setName',
        'partial_response_strategy' => 'setPartial_response_strategy',
        'rules' => 'setRules',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'interval' => 'getInterval',
        'name' => 'getName',
        'partial_response_strategy' => 'getPartial_response_strategy',
        'rules' => 'getRules',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partial_response_strategy'] = isset($data['partial_response_strategy']) ? $data['partial_response_strategy'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
    }

    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

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
     * Gets partial_response_strategy
     * @return string
     */
    public function getPartial_response_strategy()
    {
        return $this->container['partial_response_strategy'];
    }

    /**
     * Sets partial_response_strategy
     * @param string $partial_response_strategy
     * @return $this
     */
    public function setPartial_response_strategy($partial_response_strategy)
    {
        $this->container['partial_response_strategy'] = $partial_response_strategy;

        return $this;
    }


    /**
     * Gets rules
     * @return \Rancher\Model\RuleModel[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     * @param \Rancher\Model\RuleModel[] $rules
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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

