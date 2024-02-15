<?php

/**
 * MetadataConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class MetadataConfigModel implements ArrayAccess
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
        'send',
        'sendInterval',
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
        'send',
        'sendInterval',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'send' => 'boolean',
        'sendInterval' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'send' => 'setSend',
        'sendInterval' => 'setSendInterval',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'send' => 'getSend',
        'sendInterval' => 'getSendInterval',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['send'] = isset($data['send']) ? $data['send'] : null;
        $this->container['sendInterval'] = isset($data['sendInterval']) ? $data['sendInterval'] : null;
    }

    /**
     * Gets send
     * @return boolean
     */
    public function getSend()
    {
        return $this->container['send'];
    }

    /**
     * Sets send
     * @param boolean $send
     * @return $this
     */
    public function setSend($send)
    {
        $this->container['send'] = $send;

        return $this;
    }


    /**
     * Gets sendInterval
     * @return string
     */
    public function getSendInterval()
    {
        return $this->container['sendInterval'];
    }

    /**
     * Sets sendInterval
     * @param string $sendInterval
     * @return $this
     */
    public function setSendInterval($sendInterval)
    {
        $this->container['sendInterval'] = $sendInterval;

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

