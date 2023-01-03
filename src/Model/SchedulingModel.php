<?php

/**
 * SchedulingModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SchedulingModel implements ArrayAccess
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
        'node',
        'priority',
        'priorityClassName',
        'scheduler',
        'tolerate',
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
        'node',
        'priority',
        'priorityClassName',
        'scheduler',
        'tolerate',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'node' => '\Rancher\Model\NodeSchedulingModel',
        'priority' => 'int',
        'priorityClassName' => 'string',
        'scheduler' => 'string',
        'tolerate' => '\Rancher\Model\TolerationModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'node' => 'setNode',
        'priority' => 'setPriority',
        'priorityClassName' => 'setPriorityClassName',
        'scheduler' => 'setScheduler',
        'tolerate' => 'setTolerate',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'node' => 'getNode',
        'priority' => 'getPriority',
        'priorityClassName' => 'getPriorityClassName',
        'scheduler' => 'getScheduler',
        'tolerate' => 'getTolerate',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['node'] = isset($data['node']) ? $data['node'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['priorityClassName'] = isset($data['priorityClassName']) ? $data['priorityClassName'] : null;
        $this->container['scheduler'] = isset($data['scheduler']) ? $data['scheduler'] : null;
        $this->container['tolerate'] = isset($data['tolerate']) ? $data['tolerate'] : null;
    }

    /**
     * Gets node
     * @return \Rancher\Model\NodeSchedulingModel
     */
    public function getNode()
    {
        return $this->container['node'];
    }

    /**
     * Sets node
     * @param \Rancher\Model\NodeSchedulingModel $node
     * @return $this
     */
    public function setNode($node)
    {
        $this->container['node'] = $node;

        return $this;
    }


    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }


    /**
     * Gets priorityClassName
     * @return string
     */
    public function getPriorityClassName()
    {
        return $this->container['priorityClassName'];
    }

    /**
     * Sets priorityClassName
     * @param string $priorityClassName
     * @return $this
     */
    public function setPriorityClassName($priorityClassName)
    {
        $this->container['priorityClassName'] = $priorityClassName;

        return $this;
    }


    /**
     * Gets scheduler
     * @return string
     */
    public function getScheduler()
    {
        return $this->container['scheduler'];
    }

    /**
     * Sets scheduler
     * @param string $scheduler
     * @return $this
     */
    public function setScheduler($scheduler)
    {
        $this->container['scheduler'] = $scheduler;

        return $this;
    }


    /**
     * Gets tolerate
     * @return \Rancher\Model\TolerationModel[]
     */
    public function getTolerate()
    {
        return $this->container['tolerate'];
    }

    /**
     * Sets tolerate
     * @param \Rancher\Model\TolerationModel[] $tolerate
     * @return $this
     */
    public function setTolerate($tolerate)
    {
        $this->container['tolerate'] = $tolerate;

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

