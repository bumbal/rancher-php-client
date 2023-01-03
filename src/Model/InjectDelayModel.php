<?php

/**
 * InjectDelayModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class InjectDelayModel implements ArrayAccess
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
        'exponentialDelay',
        'fixedDelay',
        'percent',
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
        'exponentialDelay',
        'fixedDelay',
        'percent',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'exponentialDelay' => 'string',
        'fixedDelay' => 'string',
        'percent' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'exponentialDelay' => 'setExponentialDelay',
        'fixedDelay' => 'setFixedDelay',
        'percent' => 'setPercent',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'exponentialDelay' => 'getExponentialDelay',
        'fixedDelay' => 'getFixedDelay',
        'percent' => 'getPercent',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['exponentialDelay'] = isset($data['exponentialDelay']) ? $data['exponentialDelay'] : null;
        $this->container['fixedDelay'] = isset($data['fixedDelay']) ? $data['fixedDelay'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
    }

    /**
     * Gets exponentialDelay
     * @return string
     */
    public function getExponentialDelay()
    {
        return $this->container['exponentialDelay'];
    }

    /**
     * Sets exponentialDelay
     * @param string $exponentialDelay
     * @return $this
     */
    public function setExponentialDelay($exponentialDelay)
    {
        $this->container['exponentialDelay'] = $exponentialDelay;

        return $this;
    }


    /**
     * Gets fixedDelay
     * @return string
     */
    public function getFixedDelay()
    {
        return $this->container['fixedDelay'];
    }

    /**
     * Sets fixedDelay
     * @param string $fixedDelay
     * @return $this
     */
    public function setFixedDelay($fixedDelay)
    {
        $this->container['fixedDelay'] = $fixedDelay;

        return $this;
    }


    /**
     * Gets percent
     * @return int
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     * @param int $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

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

