<?php

/**
 * HttpRetryModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HttpRetryModel implements ArrayAccess
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
        'attempts',
        'perTryTimeout',
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
        'attempts',
        'perTryTimeout',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'attempts' => 'int',
        'perTryTimeout' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'attempts' => 'setAttempts',
        'perTryTimeout' => 'setPerTryTimeout',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'attempts' => 'getAttempts',
        'perTryTimeout' => 'getPerTryTimeout',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['perTryTimeout'] = isset($data['perTryTimeout']) ? $data['perTryTimeout'] : null;
    }

    /**
     * Gets attempts
     * @return int
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     * @param int $attempts
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }


    /**
     * Gets perTryTimeout
     * @return string
     */
    public function getPerTryTimeout()
    {
        return $this->container['perTryTimeout'];
    }

    /**
     * Sets perTryTimeout
     * @param string $perTryTimeout
     * @return $this
     */
    public function setPerTryTimeout($perTryTimeout)
    {
        $this->container['perTryTimeout'] = $perTryTimeout;

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

