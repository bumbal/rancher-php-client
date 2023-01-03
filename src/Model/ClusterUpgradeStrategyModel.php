<?php

/**
 * ClusterUpgradeStrategyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterUpgradeStrategyModel implements ArrayAccess
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
        'drainServerNodes',
        'drainWorkerNodes',
        'serverConcurrency',
        'workerConcurrency',
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
        'drainServerNodes',
        'drainWorkerNodes',
        'serverConcurrency',
        'workerConcurrency',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'drainServerNodes' => 'boolean',
        'drainWorkerNodes' => 'boolean',
        'serverConcurrency' => 'int',
        'workerConcurrency' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'drainServerNodes' => 'setDrainServerNodes',
        'drainWorkerNodes' => 'setDrainWorkerNodes',
        'serverConcurrency' => 'setServerConcurrency',
        'workerConcurrency' => 'setWorkerConcurrency',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'drainServerNodes' => 'getDrainServerNodes',
        'drainWorkerNodes' => 'getDrainWorkerNodes',
        'serverConcurrency' => 'getServerConcurrency',
        'workerConcurrency' => 'getWorkerConcurrency',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['drainServerNodes'] = isset($data['drainServerNodes']) ? $data['drainServerNodes'] : null;
        $this->container['drainWorkerNodes'] = isset($data['drainWorkerNodes']) ? $data['drainWorkerNodes'] : null;
        $this->container['serverConcurrency'] = isset($data['serverConcurrency']) ? $data['serverConcurrency'] : null;
        $this->container['workerConcurrency'] = isset($data['workerConcurrency']) ? $data['workerConcurrency'] : null;
    }

    /**
     * Gets drainServerNodes
     * @return boolean
     */
    public function getDrainServerNodes()
    {
        return $this->container['drainServerNodes'];
    }

    /**
     * Sets drainServerNodes
     * @param boolean $drainServerNodes
     * @return $this
     */
    public function setDrainServerNodes($drainServerNodes)
    {
        $this->container['drainServerNodes'] = $drainServerNodes;

        return $this;
    }


    /**
     * Gets drainWorkerNodes
     * @return boolean
     */
    public function getDrainWorkerNodes()
    {
        return $this->container['drainWorkerNodes'];
    }

    /**
     * Sets drainWorkerNodes
     * @param boolean $drainWorkerNodes
     * @return $this
     */
    public function setDrainWorkerNodes($drainWorkerNodes)
    {
        $this->container['drainWorkerNodes'] = $drainWorkerNodes;

        return $this;
    }


    /**
     * Gets serverConcurrency
     * @return int
     */
    public function getServerConcurrency()
    {
        return $this->container['serverConcurrency'];
    }

    /**
     * Sets serverConcurrency
     * @param int $serverConcurrency
     * @return $this
     */
    public function setServerConcurrency($serverConcurrency)
    {
        $this->container['serverConcurrency'] = $serverConcurrency;

        return $this;
    }


    /**
     * Gets workerConcurrency
     * @return int
     */
    public function getWorkerConcurrency()
    {
        return $this->container['workerConcurrency'];
    }

    /**
     * Sets workerConcurrency
     * @param int $workerConcurrency
     * @return $this
     */
    public function setWorkerConcurrency($workerConcurrency)
    {
        $this->container['workerConcurrency'] = $workerConcurrency;

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

