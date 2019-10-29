<?php

namespace Rancher\Model;

use \ArrayAccess;

class BlockStorageOpenstackOpts implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'bs-version' => 'string',
        'ignore-volume-az' => 'boolean',
        'trust-device-path' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'bs-version' => 'setBs-version',
        'ignore-volume-az' => 'setIgnore-volume-az',
        'trust-device-path' => 'setTrust-device-path',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'bs-version' => 'getBs-version',
        'ignore-volume-az' => 'getIgnore-volume-az',
        'trust-device-path' => 'getTrust-device-path',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['bs-version'] = isset($data['bs-version']) ? $data['bs-version'] : null;
        $this->container['ignore-volume-az'] = isset($data['ignore-volume-az']) ? $data['ignore-volume-az'] : null;
        $this->container['trust-device-path'] = isset($data['trust-device-path']) ? $data['trust-device-path'] : null;
    }

    /**
     * Gets bs-version
     * @return string
     */
    public function getBs-version()
    {
        return $this->container['bs-version'];
    }

    /**
     * Sets bs-version
     * @param string $bs-version
     * @return $this
     */
    public function setBs-version($bs-version)
    {
        $this->container['bs-version'] = $bs-version;

        return $this;
    }


    /**
     * Gets ignore-volume-az
     * @return boolean
     */
    public function getIgnore-volume-az()
    {
        return $this->container['ignore-volume-az'];
    }

    /**
     * Sets ignore-volume-az
     * @param boolean $ignore-volume-az
     * @return $this
     */
    public function setIgnore-volume-az($ignore-volume-az)
    {
        $this->container['ignore-volume-az'] = $ignore-volume-az;

        return $this;
    }


    /**
     * Gets trust-device-path
     * @return boolean
     */
    public function getTrust-device-path()
    {
        return $this->container['trust-device-path'];
    }

    /**
     * Sets trust-device-path
     * @param boolean $trust-device-path
     * @return $this
     */
    public function setTrust-device-path($trust-device-path)
    {
        $this->container['trust-device-path'] = $trust-device-path;

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

