<?php

/**
 * TcpSettingsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TcpSettingsModel implements ArrayAccess
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
        'connectTimeout',
        'maxConnections',
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
        'connectTimeout',
        'maxConnections',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'connectTimeout' => 'string',
        'maxConnections' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'connectTimeout' => 'setConnectTimeout',
        'maxConnections' => 'setMaxConnections',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'connectTimeout' => 'getConnectTimeout',
        'maxConnections' => 'getMaxConnections',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['connectTimeout'] = isset($data['connectTimeout']) ? $data['connectTimeout'] : null;
        $this->container['maxConnections'] = isset($data['maxConnections']) ? $data['maxConnections'] : null;
    }

    /**
     * Gets connectTimeout
     * @return string
     */
    public function getConnectTimeout()
    {
        return $this->container['connectTimeout'];
    }

    /**
     * Sets connectTimeout
     * @param string $connectTimeout
     * @return $this
     */
    public function setConnectTimeout($connectTimeout)
    {
        $this->container['connectTimeout'] = $connectTimeout;

        return $this;
    }


    /**
     * Gets maxConnections
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->container['maxConnections'];
    }

    /**
     * Sets maxConnections
     * @param int $maxConnections
     * @return $this
     */
    public function setMaxConnections($maxConnections)
    {
        $this->container['maxConnections'] = $maxConnections;

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

