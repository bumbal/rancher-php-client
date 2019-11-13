<?php

/**
 * NodeDrainInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeDrainInputModel implements ArrayAccess
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
        'deleteLocalData',
        'force',
        'gracePeriod',
        'ignoreDaemonSets',
        'timeout',
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
        'deleteLocalData',
        'force',
        'gracePeriod',
        'ignoreDaemonSets',
        'timeout',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'deleteLocalData' => 'boolean',
        'force' => 'boolean',
        'gracePeriod' => 'int',
        'ignoreDaemonSets' => 'boolean',
        'timeout' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'deleteLocalData' => 'setDeleteLocalData',
        'force' => 'setForce',
        'gracePeriod' => 'setGracePeriod',
        'ignoreDaemonSets' => 'setIgnoreDaemonSets',
        'timeout' => 'setTimeout',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'deleteLocalData' => 'getDeleteLocalData',
        'force' => 'getForce',
        'gracePeriod' => 'getGracePeriod',
        'ignoreDaemonSets' => 'getIgnoreDaemonSets',
        'timeout' => 'getTimeout',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['deleteLocalData'] = isset($data['deleteLocalData']) ? $data['deleteLocalData'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
        $this->container['gracePeriod'] = isset($data['gracePeriod']) ? $data['gracePeriod'] : null;
        $this->container['ignoreDaemonSets'] = isset($data['ignoreDaemonSets']) ? $data['ignoreDaemonSets'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
     * Gets deleteLocalData
     * @return boolean
     */
    public function getDeleteLocalData()
    {
        return $this->container['deleteLocalData'];
    }

    /**
     * Sets deleteLocalData
     * @param boolean $deleteLocalData
     * @return $this
     */
    public function setDeleteLocalData($deleteLocalData)
    {
        $this->container['deleteLocalData'] = $deleteLocalData;

        return $this;
    }


    /**
     * Gets force
     * @return boolean
     */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
     * Sets force
     * @param boolean $force
     * @return $this
     */
    public function setForce($force)
    {
        $this->container['force'] = $force;

        return $this;
    }


    /**
     * Gets gracePeriod
     * @return int
     */
    public function getGracePeriod()
    {
        return $this->container['gracePeriod'];
    }

    /**
     * Sets gracePeriod
     * @param int $gracePeriod
     * @return $this
     */
    public function setGracePeriod($gracePeriod)
    {
        $this->container['gracePeriod'] = $gracePeriod;

        return $this;
    }


    /**
     * Gets ignoreDaemonSets
     * @return boolean
     */
    public function getIgnoreDaemonSets()
    {
        return $this->container['ignoreDaemonSets'];
    }

    /**
     * Sets ignoreDaemonSets
     * @param boolean $ignoreDaemonSets
     * @return $this
     */
    public function setIgnoreDaemonSets($ignoreDaemonSets)
    {
        $this->container['ignoreDaemonSets'] = $ignoreDaemonSets;

        return $this;
    }


    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

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

