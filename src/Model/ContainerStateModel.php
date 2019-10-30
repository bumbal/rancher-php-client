<?php

/**
 * ContainerStateModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ContainerStateModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'running' => '\Rancher\Model\ContainerStateRunningModel',
        'terminated' => '\Rancher\Model\ContainerStateTerminatedModel',
        'waiting' => '\Rancher\Model\ContainerStateWaitingModel',
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
     * @return \Rancher\Model\ContainerStateRunningModel
     */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
     * Sets running
     * @param \Rancher\Model\ContainerStateRunningModel $running
     * @return $this
     */
    public function setRunning($running)
    {
        $this->container['running'] = $running;

        return $this;
    }


    /**
     * Gets terminated
     * @return \Rancher\Model\ContainerStateTerminatedModel
     */
    public function getTerminated()
    {
        return $this->container['terminated'];
    }

    /**
     * Sets terminated
     * @param \Rancher\Model\ContainerStateTerminatedModel $terminated
     * @return $this
     */
    public function setTerminated($terminated)
    {
        $this->container['terminated'] = $terminated;

        return $this;
    }


    /**
     * Gets waiting
     * @return \Rancher\Model\ContainerStateWaitingModel
     */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
     * Sets waiting
     * @param \Rancher\Model\ContainerStateWaitingModel $waiting
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

