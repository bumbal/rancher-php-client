<?php

/**
 * ReplicationControllerStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ReplicationControllerStatusModel implements ArrayAccess
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
        'availableReplicas' => 'int',
        'conditions' => '\Rancher\Model\ReplicationControllerConditionModel[]',
        'fullyLabeledReplicas' => 'int',
        'observedGeneration' => 'int',
        'readyReplicas' => 'int',
        'replicas' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'availableReplicas' => 'setAvailableReplicas',
        'conditions' => 'setConditions',
        'fullyLabeledReplicas' => 'setFullyLabeledReplicas',
        'observedGeneration' => 'setObservedGeneration',
        'readyReplicas' => 'setReadyReplicas',
        'replicas' => 'setReplicas',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'availableReplicas' => 'getAvailableReplicas',
        'conditions' => 'getConditions',
        'fullyLabeledReplicas' => 'getFullyLabeledReplicas',
        'observedGeneration' => 'getObservedGeneration',
        'readyReplicas' => 'getReadyReplicas',
        'replicas' => 'getReplicas',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['availableReplicas'] = isset($data['availableReplicas']) ? $data['availableReplicas'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['fullyLabeledReplicas'] = isset($data['fullyLabeledReplicas']) ? $data['fullyLabeledReplicas'] : null;
        $this->container['observedGeneration'] = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->container['readyReplicas'] = isset($data['readyReplicas']) ? $data['readyReplicas'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
    }

    /**
     * Gets availableReplicas
     * @return int
     */
    public function getAvailableReplicas()
    {
        return $this->container['availableReplicas'];
    }

    /**
     * Sets availableReplicas
     * @param int $availableReplicas
     * @return $this
     */
    public function setAvailableReplicas($availableReplicas)
    {
        $this->container['availableReplicas'] = $availableReplicas;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\ReplicationControllerConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\ReplicationControllerConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets fullyLabeledReplicas
     * @return int
     */
    public function getFullyLabeledReplicas()
    {
        return $this->container['fullyLabeledReplicas'];
    }

    /**
     * Sets fullyLabeledReplicas
     * @param int $fullyLabeledReplicas
     * @return $this
     */
    public function setFullyLabeledReplicas($fullyLabeledReplicas)
    {
        $this->container['fullyLabeledReplicas'] = $fullyLabeledReplicas;

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
     * Gets readyReplicas
     * @return int
     */
    public function getReadyReplicas()
    {
        return $this->container['readyReplicas'];
    }

    /**
     * Sets readyReplicas
     * @param int $readyReplicas
     * @return $this
     */
    public function setReadyReplicas($readyReplicas)
    {
        $this->container['readyReplicas'] = $readyReplicas;

        return $this;
    }


    /**
     * Gets replicas
     * @return int
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     * @param int $replicas
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

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

