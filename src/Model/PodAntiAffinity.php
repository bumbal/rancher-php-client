<?php

namespace Rancher\Model;

use \ArrayAccess;

class PodAntiAffinity implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'preferredDuringSchedulingIgnoredDuringExecution' => '\Rancher\Model\WeightedPodAffinityTerm[]',
        'requiredDuringSchedulingIgnoredDuringExecution' => '\Rancher\Model\PodAffinityTerm[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'preferredDuringSchedulingIgnoredDuringExecution' => 'setPreferredDuringSchedulingIgnoredDuringExecution',
        'requiredDuringSchedulingIgnoredDuringExecution' => 'setRequiredDuringSchedulingIgnoredDuringExecution',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'preferredDuringSchedulingIgnoredDuringExecution' => 'getPreferredDuringSchedulingIgnoredDuringExecution',
        'requiredDuringSchedulingIgnoredDuringExecution' => 'getRequiredDuringSchedulingIgnoredDuringExecution',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['preferredDuringSchedulingIgnoredDuringExecution'] = isset($data['preferredDuringSchedulingIgnoredDuringExecution']) ? $data['preferredDuringSchedulingIgnoredDuringExecution'] : null;
        $this->container['requiredDuringSchedulingIgnoredDuringExecution'] = isset($data['requiredDuringSchedulingIgnoredDuringExecution']) ? $data['requiredDuringSchedulingIgnoredDuringExecution'] : null;
    }

    /**
     * Gets preferredDuringSchedulingIgnoredDuringExecution
     * @return \Rancher\Model\WeightedPodAffinityTerm[]
     */
    public function getPreferredDuringSchedulingIgnoredDuringExecution()
    {
        return $this->container['preferredDuringSchedulingIgnoredDuringExecution'];
    }

    /**
     * Sets preferredDuringSchedulingIgnoredDuringExecution
     * @param \Rancher\Model\WeightedPodAffinityTerm[] $preferredDuringSchedulingIgnoredDuringExecution
     * @return $this
     */
    public function setPreferredDuringSchedulingIgnoredDuringExecution($preferredDuringSchedulingIgnoredDuringExecution)
    {
        $this->container['preferredDuringSchedulingIgnoredDuringExecution'] = $preferredDuringSchedulingIgnoredDuringExecution;

        return $this;
    }


    /**
     * Gets requiredDuringSchedulingIgnoredDuringExecution
     * @return \Rancher\Model\PodAffinityTerm[]
     */
    public function getRequiredDuringSchedulingIgnoredDuringExecution()
    {
        return $this->container['requiredDuringSchedulingIgnoredDuringExecution'];
    }

    /**
     * Sets requiredDuringSchedulingIgnoredDuringExecution
     * @param \Rancher\Model\PodAffinityTerm[] $requiredDuringSchedulingIgnoredDuringExecution
     * @return $this
     */
    public function setRequiredDuringSchedulingIgnoredDuringExecution($requiredDuringSchedulingIgnoredDuringExecution)
    {
        $this->container['requiredDuringSchedulingIgnoredDuringExecution'] = $requiredDuringSchedulingIgnoredDuringExecution;

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

