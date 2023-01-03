<?php

/**
 * GlobalDnsStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GlobalDnsStatusModel implements ArrayAccess
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
        'clusterEndpoints' => 'map[string,\Rancher\Model\Array[string]Model]',
        'endpoints' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterEndpoints' => 'setClusterEndpoints',
        'endpoints' => 'setEndpoints',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterEndpoints' => 'getClusterEndpoints',
        'endpoints' => 'getEndpoints',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterEndpoints'] = isset($data['clusterEndpoints']) ? $data['clusterEndpoints'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
    }

    /**
     * Gets clusterEndpoints
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getClusterEndpoints()
    {
        return $this->container['clusterEndpoints'];
    }

    /**
     * Sets clusterEndpoints
     * @param \Rancher\Model\Array[string]Model[] $clusterEndpoints
     * @return $this
     */
    public function setClusterEndpoints($clusterEndpoints)
    {
        $this->container['clusterEndpoints'] = $clusterEndpoints;

        return $this;
    }


    /**
     * Gets endpoints
     * @return string[]
     */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
     * Sets endpoints
     * @param string[] $endpoints
     * @return $this
     */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;

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

