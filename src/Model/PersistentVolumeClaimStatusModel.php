<?php

/**
 * PersistentVolumeClaimStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PersistentVolumeClaimStatusModel implements ArrayAccess
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
        'accessModes' => 'string[]',
        'allocatedResources' => 'map[string,string]',
        'capacity' => 'map[string,string]',
        'conditions' => '\Rancher\Model\PersistentVolumeClaimConditionModel[]',
        'phase' => 'string',
        'resizeStatus' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessModes' => 'setAccessModes',
        'allocatedResources' => 'setAllocatedResources',
        'capacity' => 'setCapacity',
        'conditions' => 'setConditions',
        'phase' => 'setPhase',
        'resizeStatus' => 'setResizeStatus',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessModes' => 'getAccessModes',
        'allocatedResources' => 'getAllocatedResources',
        'capacity' => 'getCapacity',
        'conditions' => 'getConditions',
        'phase' => 'getPhase',
        'resizeStatus' => 'getResizeStatus',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessModes'] = isset($data['accessModes']) ? $data['accessModes'] : null;
        $this->container['allocatedResources'] = isset($data['allocatedResources']) ? $data['allocatedResources'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['resizeStatus'] = isset($data['resizeStatus']) ? $data['resizeStatus'] : null;
    }

    /**
     * Gets accessModes
     * @return string[]
     */
    public function getAccessModes()
    {
        return $this->container['accessModes'];
    }

    /**
     * Sets accessModes
     * @param string[] $accessModes
     * @return $this
     */
    public function setAccessModes($accessModes)
    {
        $this->container['accessModes'] = $accessModes;

        return $this;
    }


    /**
     * Gets allocatedResources
     * @return string[]
     */
    public function getAllocatedResources()
    {
        return $this->container['allocatedResources'];
    }

    /**
     * Sets allocatedResources
     * @param string[] $allocatedResources
     * @return $this
     */
    public function setAllocatedResources($allocatedResources)
    {
        $this->container['allocatedResources'] = $allocatedResources;

        return $this;
    }


    /**
     * Gets capacity
     * @return string[]
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param string[] $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\PersistentVolumeClaimConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\PersistentVolumeClaimConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets phase
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     * @param string $phase
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }


    /**
     * Gets resizeStatus
     * @return string
     */
    public function getResizeStatus()
    {
        return $this->container['resizeStatus'];
    }

    /**
     * Sets resizeStatus
     * @param string $resizeStatus
     * @return $this
     */
    public function setResizeStatus($resizeStatus)
    {
        $this->container['resizeStatus'] = $resizeStatus;

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

