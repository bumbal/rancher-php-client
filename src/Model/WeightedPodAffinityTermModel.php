<?php

/**
 * WeightedPodAffinityTermModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class WeightedPodAffinityTermModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'podAffinityTerm' => '\Rancher\Model\PodAffinityTermModel',
        'weight' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'podAffinityTerm' => 'setPodAffinityTerm',
        'weight' => 'setWeight',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'podAffinityTerm' => 'getPodAffinityTerm',
        'weight' => 'getWeight',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['podAffinityTerm'] = isset($data['podAffinityTerm']) ? $data['podAffinityTerm'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * Gets podAffinityTerm
     * @return \Rancher\Model\PodAffinityTermModel
     */
    public function getPodAffinityTerm()
    {
        return $this->container['podAffinityTerm'];
    }

    /**
     * Sets podAffinityTerm
     * @param \Rancher\Model\PodAffinityTermModel $podAffinityTerm
     * @return $this
     */
    public function setPodAffinityTerm($podAffinityTerm)
    {
        $this->container['podAffinityTerm'] = $podAffinityTerm;

        return $this;
    }


    /**
     * Gets weight
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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

