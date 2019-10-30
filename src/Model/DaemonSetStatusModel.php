<?php

/**
 * DaemonSetStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class DaemonSetStatusModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'collisionCount' => 'int',
        'conditions' => '\Rancher\Model\DaemonSetConditionModel[]',
        'currentNumberScheduled' => 'int',
        'desiredNumberScheduled' => 'int',
        'numberAvailable' => 'int',
        'numberMisscheduled' => 'int',
        'numberReady' => 'int',
        'numberUnavailable' => 'int',
        'observedGeneration' => 'int',
        'updatedNumberScheduled' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'collisionCount' => 'setCollisionCount',
        'conditions' => 'setConditions',
        'currentNumberScheduled' => 'setCurrentNumberScheduled',
        'desiredNumberScheduled' => 'setDesiredNumberScheduled',
        'numberAvailable' => 'setNumberAvailable',
        'numberMisscheduled' => 'setNumberMisscheduled',
        'numberReady' => 'setNumberReady',
        'numberUnavailable' => 'setNumberUnavailable',
        'observedGeneration' => 'setObservedGeneration',
        'updatedNumberScheduled' => 'setUpdatedNumberScheduled',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'collisionCount' => 'getCollisionCount',
        'conditions' => 'getConditions',
        'currentNumberScheduled' => 'getCurrentNumberScheduled',
        'desiredNumberScheduled' => 'getDesiredNumberScheduled',
        'numberAvailable' => 'getNumberAvailable',
        'numberMisscheduled' => 'getNumberMisscheduled',
        'numberReady' => 'getNumberReady',
        'numberUnavailable' => 'getNumberUnavailable',
        'observedGeneration' => 'getObservedGeneration',
        'updatedNumberScheduled' => 'getUpdatedNumberScheduled',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['collisionCount'] = isset($data['collisionCount']) ? $data['collisionCount'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['currentNumberScheduled'] = isset($data['currentNumberScheduled']) ? $data['currentNumberScheduled'] : null;
        $this->container['desiredNumberScheduled'] = isset($data['desiredNumberScheduled']) ? $data['desiredNumberScheduled'] : null;
        $this->container['numberAvailable'] = isset($data['numberAvailable']) ? $data['numberAvailable'] : null;
        $this->container['numberMisscheduled'] = isset($data['numberMisscheduled']) ? $data['numberMisscheduled'] : null;
        $this->container['numberReady'] = isset($data['numberReady']) ? $data['numberReady'] : null;
        $this->container['numberUnavailable'] = isset($data['numberUnavailable']) ? $data['numberUnavailable'] : null;
        $this->container['observedGeneration'] = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->container['updatedNumberScheduled'] = isset($data['updatedNumberScheduled']) ? $data['updatedNumberScheduled'] : null;
    }

    /**
     * Gets collisionCount
     * @return int
     */
    public function getCollisionCount()
    {
        return $this->container['collisionCount'];
    }

    /**
     * Sets collisionCount
     * @param int $collisionCount
     * @return $this
     */
    public function setCollisionCount($collisionCount)
    {
        $this->container['collisionCount'] = $collisionCount;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\DaemonSetConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\DaemonSetConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets currentNumberScheduled
     * @return int
     */
    public function getCurrentNumberScheduled()
    {
        return $this->container['currentNumberScheduled'];
    }

    /**
     * Sets currentNumberScheduled
     * @param int $currentNumberScheduled
     * @return $this
     */
    public function setCurrentNumberScheduled($currentNumberScheduled)
    {
        $this->container['currentNumberScheduled'] = $currentNumberScheduled;

        return $this;
    }


    /**
     * Gets desiredNumberScheduled
     * @return int
     */
    public function getDesiredNumberScheduled()
    {
        return $this->container['desiredNumberScheduled'];
    }

    /**
     * Sets desiredNumberScheduled
     * @param int $desiredNumberScheduled
     * @return $this
     */
    public function setDesiredNumberScheduled($desiredNumberScheduled)
    {
        $this->container['desiredNumberScheduled'] = $desiredNumberScheduled;

        return $this;
    }


    /**
     * Gets numberAvailable
     * @return int
     */
    public function getNumberAvailable()
    {
        return $this->container['numberAvailable'];
    }

    /**
     * Sets numberAvailable
     * @param int $numberAvailable
     * @return $this
     */
    public function setNumberAvailable($numberAvailable)
    {
        $this->container['numberAvailable'] = $numberAvailable;

        return $this;
    }


    /**
     * Gets numberMisscheduled
     * @return int
     */
    public function getNumberMisscheduled()
    {
        return $this->container['numberMisscheduled'];
    }

    /**
     * Sets numberMisscheduled
     * @param int $numberMisscheduled
     * @return $this
     */
    public function setNumberMisscheduled($numberMisscheduled)
    {
        $this->container['numberMisscheduled'] = $numberMisscheduled;

        return $this;
    }


    /**
     * Gets numberReady
     * @return int
     */
    public function getNumberReady()
    {
        return $this->container['numberReady'];
    }

    /**
     * Sets numberReady
     * @param int $numberReady
     * @return $this
     */
    public function setNumberReady($numberReady)
    {
        $this->container['numberReady'] = $numberReady;

        return $this;
    }


    /**
     * Gets numberUnavailable
     * @return int
     */
    public function getNumberUnavailable()
    {
        return $this->container['numberUnavailable'];
    }

    /**
     * Sets numberUnavailable
     * @param int $numberUnavailable
     * @return $this
     */
    public function setNumberUnavailable($numberUnavailable)
    {
        $this->container['numberUnavailable'] = $numberUnavailable;

        return $this;
    }


    /**
     * Gets observedGeneration
     * @return int
     */
    public function getObservedGeneration()
    {
        return $this->container['observedGeneration'];
    }

    /**
     * Sets observedGeneration
     * @param int $observedGeneration
     * @return $this
     */
    public function setObservedGeneration($observedGeneration)
    {
        $this->container['observedGeneration'] = $observedGeneration;

        return $this;
    }


    /**
     * Gets updatedNumberScheduled
     * @return int
     */
    public function getUpdatedNumberScheduled()
    {
        return $this->container['updatedNumberScheduled'];
    }

    /**
     * Sets updatedNumberScheduled
     * @param int $updatedNumberScheduled
     * @return $this
     */
    public function setUpdatedNumberScheduled($updatedNumberScheduled)
    {
        $this->container['updatedNumberScheduled'] = $updatedNumberScheduled;

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

