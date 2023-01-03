<?php

/**
 * ServiceAccountTokenProjectionModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ServiceAccountTokenProjectionModel implements ArrayAccess
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
        'audience',
        'expirationSeconds',
        'path',
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
        'audience',
        'expirationSeconds',
        'path',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'audience' => 'string',
        'expirationSeconds' => 'int',
        'path' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'audience' => 'setAudience',
        'expirationSeconds' => 'setExpirationSeconds',
        'path' => 'setPath',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'audience' => 'getAudience',
        'expirationSeconds' => 'getExpirationSeconds',
        'path' => 'getPath',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['expirationSeconds'] = isset($data['expirationSeconds']) ? $data['expirationSeconds'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
     * Gets audience
     * @return string
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     * @param string $audience
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

        return $this;
    }


    /**
     * Gets expirationSeconds
     * @return int
     */
    public function getExpirationSeconds()
    {
        return $this->container['expirationSeconds'];
    }

    /**
     * Sets expirationSeconds
     * @param int $expirationSeconds
     * @return $this
     */
    public function setExpirationSeconds($expirationSeconds)
    {
        $this->container['expirationSeconds'] = $expirationSeconds;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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

