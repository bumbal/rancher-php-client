<?php

/**
 * PodAntiAffinityModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodAntiAffinityModel implements ArrayAccess
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
        'preferredDuringSchedulingIgnoredDuringExecution',
        'requiredDuringSchedulingIgnoredDuringExecution',
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
        'preferredDuringSchedulingIgnoredDuringExecution',
        'requiredDuringSchedulingIgnoredDuringExecution',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'preferredDuringSchedulingIgnoredDuringExecution' => '\Rancher\Model\WeightedPodAffinityTermModel[]',
        'requiredDuringSchedulingIgnoredDuringExecution' => '\Rancher\Model\PodAffinityTermModel[]',
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
     * @return \Rancher\Model\WeightedPodAffinityTermModel[]
     */
    public function getPreferredDuringSchedulingIgnoredDuringExecution()
    {
        return $this->container['preferredDuringSchedulingIgnoredDuringExecution'];
    }

    /**
     * Sets preferredDuringSchedulingIgnoredDuringExecution
     * @param \Rancher\Model\WeightedPodAffinityTermModel[] $preferredDuringSchedulingIgnoredDuringExecution
     * @return $this
     */
    public function setPreferredDuringSchedulingIgnoredDuringExecution($preferredDuringSchedulingIgnoredDuringExecution)
    {
        $this->container['preferredDuringSchedulingIgnoredDuringExecution'] = $preferredDuringSchedulingIgnoredDuringExecution;

        return $this;
    }


    /**
     * Gets requiredDuringSchedulingIgnoredDuringExecution
     * @return \Rancher\Model\PodAffinityTermModel[]
     */
    public function getRequiredDuringSchedulingIgnoredDuringExecution()
    {
        return $this->container['requiredDuringSchedulingIgnoredDuringExecution'];
    }

    /**
     * Sets requiredDuringSchedulingIgnoredDuringExecution
     * @param \Rancher\Model\PodAffinityTermModel[] $requiredDuringSchedulingIgnoredDuringExecution
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

