<?php

/**
 * JobStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class JobStatusModel implements ArrayAccess
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
        'active' => 'int',
        'completionTime' => '\DateTime',
        'conditions' => '\Rancher\Model\JobConditionModel[]',
        'failed' => 'int',
        'startTime' => '\DateTime',
        'succeeded' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'active' => 'setActive',
        'completionTime' => 'setCompletionTime',
        'conditions' => 'setConditions',
        'failed' => 'setFailed',
        'startTime' => 'setStartTime',
        'succeeded' => 'setSucceeded',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'active' => 'getActive',
        'completionTime' => 'getCompletionTime',
        'conditions' => 'getConditions',
        'failed' => 'getFailed',
        'startTime' => 'getStartTime',
        'succeeded' => 'getSucceeded',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['completionTime'] = isset($data['completionTime']) ? $data['completionTime'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['succeeded'] = isset($data['succeeded']) ? $data['succeeded'] : null;
    }

    /**
     * Gets active
     * @return int
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param int $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }


    /**
     * Gets completionTime
     * @return \DateTime
     */
    public function getCompletionTime()
    {
        return $this->container['completionTime'];
    }

    /**
     * Sets completionTime
     * @param \DateTime $completionTime
     * @return $this
     */
    public function setCompletionTime($completionTime)
    {
        $this->container['completionTime'] = $completionTime;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\JobConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\JobConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets failed
     * @return int
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     * @param int $failed
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }


    /**
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }


    /**
     * Gets succeeded
     * @return int
     */
    public function getSucceeded()
    {
        return $this->container['succeeded'];
    }

    /**
     * Sets succeeded
     * @param int $succeeded
     * @return $this
     */
    public function setSucceeded($succeeded)
    {
        $this->container['succeeded'] = $succeeded;

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

