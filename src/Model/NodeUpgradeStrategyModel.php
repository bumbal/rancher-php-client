<?php

/**
 * NodeUpgradeStrategyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeUpgradeStrategyModel implements ArrayAccess
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
        'drain',
        'maxUnavailableControlplane',
        'maxUnavailableWorker',
        'nodeDrainInput',
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
        'drain',
        'maxUnavailableControlplane',
        'maxUnavailableWorker',
        'nodeDrainInput',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'drain' => 'boolean',
        'maxUnavailableControlplane' => 'string',
        'maxUnavailableWorker' => 'string',
        'nodeDrainInput' => '\Rancher\Model\NodeDrainInputModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'drain' => 'setDrain',
        'maxUnavailableControlplane' => 'setMaxUnavailableControlplane',
        'maxUnavailableWorker' => 'setMaxUnavailableWorker',
        'nodeDrainInput' => 'setNodeDrainInput',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'drain' => 'getDrain',
        'maxUnavailableControlplane' => 'getMaxUnavailableControlplane',
        'maxUnavailableWorker' => 'getMaxUnavailableWorker',
        'nodeDrainInput' => 'getNodeDrainInput',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['drain'] = isset($data['drain']) ? $data['drain'] : null;
        $this->container['maxUnavailableControlplane'] = isset($data['maxUnavailableControlplane']) ? $data['maxUnavailableControlplane'] : null;
        $this->container['maxUnavailableWorker'] = isset($data['maxUnavailableWorker']) ? $data['maxUnavailableWorker'] : null;
        $this->container['nodeDrainInput'] = isset($data['nodeDrainInput']) ? $data['nodeDrainInput'] : null;
    }

    /**
     * Gets drain
     * @return boolean
     */
    public function getDrain()
    {
        return $this->container['drain'];
    }

    /**
     * Sets drain
     * @param boolean $drain
     * @return $this
     */
    public function setDrain($drain)
    {
        $this->container['drain'] = $drain;

        return $this;
    }


    /**
     * Gets maxUnavailableControlplane
     * @return string
     */
    public function getMaxUnavailableControlplane()
    {
        return $this->container['maxUnavailableControlplane'];
    }

    /**
     * Sets maxUnavailableControlplane
     * @param string $maxUnavailableControlplane
     * @return $this
     */
    public function setMaxUnavailableControlplane($maxUnavailableControlplane)
    {
        $this->container['maxUnavailableControlplane'] = $maxUnavailableControlplane;

        return $this;
    }


    /**
     * Gets maxUnavailableWorker
     * @return string
     */
    public function getMaxUnavailableWorker()
    {
        return $this->container['maxUnavailableWorker'];
    }

    /**
     * Sets maxUnavailableWorker
     * @param string $maxUnavailableWorker
     * @return $this
     */
    public function setMaxUnavailableWorker($maxUnavailableWorker)
    {
        $this->container['maxUnavailableWorker'] = $maxUnavailableWorker;

        return $this;
    }


    /**
     * Gets nodeDrainInput
     * @return \Rancher\Model\NodeDrainInputModel
     */
    public function getNodeDrainInput()
    {
        return $this->container['nodeDrainInput'];
    }

    /**
     * Sets nodeDrainInput
     * @param \Rancher\Model\NodeDrainInputModel $nodeDrainInput
     * @return $this
     */
    public function setNodeDrainInput($nodeDrainInput)
    {
        $this->container['nodeDrainInput'] = $nodeDrainInput;

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

