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
        'completedIndexes' => 'string',
        'completionTime' => '\DateTime',
        'conditions' => '\Rancher\Model\JobConditionModel[]',
        'failed' => 'int',
        'ready' => 'int',
        'startTime' => '\DateTime',
        'succeeded' => 'int',
        'uncountedTerminatedPods' => '\Rancher\Model\UncountedTerminatedPodsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'active' => 'setActive',
        'completedIndexes' => 'setCompletedIndexes',
        'completionTime' => 'setCompletionTime',
        'conditions' => 'setConditions',
        'failed' => 'setFailed',
        'ready' => 'setReady',
        'startTime' => 'setStartTime',
        'succeeded' => 'setSucceeded',
        'uncountedTerminatedPods' => 'setUncountedTerminatedPods',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'active' => 'getActive',
        'completedIndexes' => 'getCompletedIndexes',
        'completionTime' => 'getCompletionTime',
        'conditions' => 'getConditions',
        'failed' => 'getFailed',
        'ready' => 'getReady',
        'startTime' => 'getStartTime',
        'succeeded' => 'getSucceeded',
        'uncountedTerminatedPods' => 'getUncountedTerminatedPods',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['completedIndexes'] = isset($data['completedIndexes']) ? $data['completedIndexes'] : null;
        $this->container['completionTime'] = isset($data['completionTime']) ? $data['completionTime'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['ready'] = isset($data['ready']) ? $data['ready'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['succeeded'] = isset($data['succeeded']) ? $data['succeeded'] : null;
        $this->container['uncountedTerminatedPods'] = isset($data['uncountedTerminatedPods']) ? $data['uncountedTerminatedPods'] : null;
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
     * Gets completedIndexes
     * @return string
     */
    public function getCompletedIndexes()
    {
        return $this->container['completedIndexes'];
    }

    /**
     * Sets completedIndexes
     * @param string $completedIndexes
     * @return $this
     */
    public function setCompletedIndexes($completedIndexes)
    {
        $this->container['completedIndexes'] = $completedIndexes;

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
     * Gets ready
     * @return int
     */
    public function getReady()
    {
        return $this->container['ready'];
    }

    /**
     * Sets ready
     * @param int $ready
     * @return $this
     */
    public function setReady($ready)
    {
        $this->container['ready'] = $ready;

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
     * Gets uncountedTerminatedPods
     * @return \Rancher\Model\UncountedTerminatedPodsModel
     */
    public function getUncountedTerminatedPods()
    {
        return $this->container['uncountedTerminatedPods'];
    }

    /**
     * Sets uncountedTerminatedPods
     * @param \Rancher\Model\UncountedTerminatedPodsModel $uncountedTerminatedPods
     * @return $this
     */
    public function setUncountedTerminatedPods($uncountedTerminatedPods)
    {
        $this->container['uncountedTerminatedPods'] = $uncountedTerminatedPods;

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

