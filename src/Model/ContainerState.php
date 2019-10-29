<?php

namespace Rancher\Model;

use \ArrayAccess;

class ContainerState implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'running' => '\Rancher\Model\ContainerStateRunning',
        'terminated' => '\Rancher\Model\ContainerStateTerminated',
        'waiting' => '\Rancher\Model\ContainerStateWaiting',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'running' => 'setRunning',
        'terminated' => 'setTerminated',
        'waiting' => 'setWaiting',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'running' => 'getRunning',
        'terminated' => 'getTerminated',
        'waiting' => 'getWaiting',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['running'] = isset($data['running']) ? $data['running'] : null;
        $this->container['terminated'] = isset($data['terminated']) ? $data['terminated'] : null;
        $this->container['waiting'] = isset($data['waiting']) ? $data['waiting'] : null;
    }

    /**
     * Gets running
     * @return \Rancher\Model\ContainerStateRunning
     */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
     * Sets running
     * @param \Rancher\Model\ContainerStateRunning $running
     * @return $this
     */
    public function setRunning($running)
    {
        $this->container['running'] = $running;

        return $this;
    }


    /**
     * Gets terminated
     * @return \Rancher\Model\ContainerStateTerminated
     */
    public function getTerminated()
    {
        return $this->container['terminated'];
    }

    /**
     * Sets terminated
     * @param \Rancher\Model\ContainerStateTerminated $terminated
     * @return $this
     */
    public function setTerminated($terminated)
    {
        $this->container['terminated'] = $terminated;

        return $this;
    }


    /**
     * Gets waiting
     * @return \Rancher\Model\ContainerStateWaiting
     */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
     * Sets waiting
     * @param \Rancher\Model\ContainerStateWaiting $waiting
     * @return $this
     */
    public function setWaiting($waiting)
    {
        $this->container['waiting'] = $waiting;

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

