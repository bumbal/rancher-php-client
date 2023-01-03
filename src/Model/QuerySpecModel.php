<?php

/**
 * QuerySpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class QuerySpecModel implements ArrayAccess
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
        'lookbackDelta',
        'maxConcurrency',
        'maxSamples',
        'timeout',
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
        'lookbackDelta',
        'maxConcurrency',
        'maxSamples',
        'timeout',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'lookbackDelta' => 'string',
        'maxConcurrency' => 'int',
        'maxSamples' => 'int',
        'timeout' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'lookbackDelta' => 'setLookbackDelta',
        'maxConcurrency' => 'setMaxConcurrency',
        'maxSamples' => 'setMaxSamples',
        'timeout' => 'setTimeout',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'lookbackDelta' => 'getLookbackDelta',
        'maxConcurrency' => 'getMaxConcurrency',
        'maxSamples' => 'getMaxSamples',
        'timeout' => 'getTimeout',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['lookbackDelta'] = isset($data['lookbackDelta']) ? $data['lookbackDelta'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['maxSamples'] = isset($data['maxSamples']) ? $data['maxSamples'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
     * Gets lookbackDelta
     * @return string
     */
    public function getLookbackDelta()
    {
        return $this->container['lookbackDelta'];
    }

    /**
     * Sets lookbackDelta
     * @param string $lookbackDelta
     * @return $this
     */
    public function setLookbackDelta($lookbackDelta)
    {
        $this->container['lookbackDelta'] = $lookbackDelta;

        return $this;
    }


    /**
     * Gets maxConcurrency
     * @return int
     */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
     * Sets maxConcurrency
     * @param int $maxConcurrency
     * @return $this
     */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;

        return $this;
    }


    /**
     * Gets maxSamples
     * @return int
     */
    public function getMaxSamples()
    {
        return $this->container['maxSamples'];
    }

    /**
     * Sets maxSamples
     * @param int $maxSamples
     * @return $this
     */
    public function setMaxSamples($maxSamples)
    {
        $this->container['maxSamples'] = $maxSamples;

        return $this;
    }


    /**
     * Gets timeout
     * @return string
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param string $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

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

