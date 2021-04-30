<?php

/**
 * CisConfigParamsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CisConfigParamsModel implements ArrayAccess
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
        'benchmarkVersion',
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
        'benchmarkVersion',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'benchmarkVersion' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'benchmarkVersion' => 'setBenchmarkVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'benchmarkVersion' => 'getBenchmarkVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['benchmarkVersion'] = isset($data['benchmarkVersion']) ? $data['benchmarkVersion'] : null;
    }

    /**
     * Gets benchmarkVersion
     * @return string
     */
    public function getBenchmarkVersion()
    {
        return $this->container['benchmarkVersion'];
    }

    /**
     * Sets benchmarkVersion
     * @param string $benchmarkVersion
     * @return $this
     */
    public function setBenchmarkVersion($benchmarkVersion)
    {
        $this->container['benchmarkVersion'] = $benchmarkVersion;

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

