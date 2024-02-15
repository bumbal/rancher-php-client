<?php

/**
 * UncountedTerminatedPodsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class UncountedTerminatedPodsModel implements ArrayAccess
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
        'failed',
        'succeeded',
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
        'failed',
        'succeeded',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'failed' => 'string[]',
        'succeeded' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'failed' => 'setFailed',
        'succeeded' => 'setSucceeded',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'failed' => 'getFailed',
        'succeeded' => 'getSucceeded',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['succeeded'] = isset($data['succeeded']) ? $data['succeeded'] : null;
    }

    /**
     * Gets failed
     * @return string[]
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     * @param string[] $failed
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }


    /**
     * Gets succeeded
     * @return string[]
     */
    public function getSucceeded()
    {
        return $this->container['succeeded'];
    }

    /**
     * Sets succeeded
     * @param string[] $succeeded
     * @return $this
     */
    public function setSucceeded($succeeded)
    {
        $this->container['succeeded'] = $succeeded;

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

