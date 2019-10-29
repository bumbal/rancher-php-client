<?php

namespace Rancher\Model;

use \ArrayAccess;

class StepStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'ended' => 'string',
        'started' => 'string',
        'state' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ended' => 'setEnded',
        'started' => 'setStarted',
        'state' => 'setState',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ended' => 'getEnded',
        'started' => 'getStarted',
        'state' => 'getState',
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

