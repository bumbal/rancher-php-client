<?php

/**
 * StageStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class StageStatusModel implements ArrayAccess
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
        'ended',
        'started',
        'state',
        'steps',
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
        'ended',
        'started',
        'state',
        'steps',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'ended' => 'string',
        'started' => 'string',
        'state' => 'string',
        'steps' => '\Rancher\Model\StepStatusModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ended' => 'setEnded',
        'started' => 'setStarted',
        'state' => 'setState',
        'steps' => 'setSteps',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ended' => 'getEnded',
        'started' => 'getStarted',
        'state' => 'getState',
        'steps' => 'getSteps',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ended'] = isset($data['ended']) ? $data['ended'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
    }

    /**
     * Gets ended
     * @return string
     */
    public function getEnded()
    {
        return $this->container['ended'];
    }

    /**
     * Sets ended
     * @param string $ended
     * @return $this
     */
    public function setEnded($ended)
    {
        $this->container['ended'] = $ended;

        return $this;
    }


    /**
     * Gets started
     * @return string
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     * @param string $started
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets steps
     * @return \Rancher\Model\StepStatusModel[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     * @param \Rancher\Model\StepStatusModel[] $steps
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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

