<?php

namespace Rancher\Model;

use \ArrayAccess;

class DeploymentStatus implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'availableReplicas' => 'int',
        'collisionCount' => 'int',
        'conditions' => '\Rancher\Model\DeploymentCondition[]',
        'observedGeneration' => 'int',
        'readyReplicas' => 'int',
        'replicas' => 'int',
        'unavailableReplicas' => 'int',
        'updatedReplicas' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'availableReplicas' => 'setAvailableReplicas',
        'collisionCount' => 'setCollisionCount',
        'conditions' => 'setConditions',
        'observedGeneration' => 'setObservedGeneration',
        'readyReplicas' => 'setReadyReplicas',
        'replicas' => 'setReplicas',
        'unavailableReplicas' => 'setUnavailableReplicas',
        'updatedReplicas' => 'setUpdatedReplicas',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'availableReplicas' => 'getAvailableReplicas',
        'collisionCount' => 'getCollisionCount',
        'conditions' => 'getConditions',
        'observedGeneration' => 'getObservedGeneration',
        'readyReplicas' => 'getReadyReplicas',
        'replicas' => 'getReplicas',
        'unavailableReplicas' => 'getUnavailableReplicas',
        'updatedReplicas' => 'getUpdatedReplicas',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['availableReplicas'] = isset($data['availableReplicas']) ? $data['availableReplicas'] : null;
        $this->container['collisionCount'] = isset($data['collisionCount']) ? $data['collisionCount'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['observedGeneration'] = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->container['readyReplicas'] = isset($data['readyReplicas']) ? $data['readyReplicas'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['unavailableReplicas'] = isset($data['unavailableReplicas']) ? $data['unavailableReplicas'] : null;
        $this->container['updatedReplicas'] = isset($data['updatedReplicas']) ? $data['updatedReplicas'] : null;
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
     * @return \Rancher\Model\DeploymentCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\DeploymentCondition[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
     * Gets unavailableReplicas
     * @return int
     */
    public function getUnavailableReplicas()
    {
        return $this->container['unavailableReplicas'];
    }

    /**
     * Sets unavailableReplicas
     * @param int $unavailableReplicas
     * @return $this
     */
    public function setUnavailableReplicas($unavailableReplicas)
    {
        $this->container['unavailableReplicas'] = $unavailableReplicas;

        return $this;
    }


    /**
     * Gets updatedReplicas
     * @return int
     */
    public function getUpdatedReplicas()
    {
        return $this->container['updatedReplicas'];
    }

    /**
     * Sets updatedReplicas
     * @param int $updatedReplicas
     * @return $this
     */
    public function setUpdatedReplicas($updatedReplicas)
    {
        $this->container['updatedReplicas'] = $updatedReplicas;

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

