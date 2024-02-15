<?php

/**
 * RollingUpdateDaemonSetModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RollingUpdateDaemonSetModel implements ArrayAccess
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
        'maxSurge',
        'maxUnavailable',
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
        'maxSurge',
        'maxUnavailable',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'maxSurge' => 'string',
        'maxUnavailable' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'maxSurge' => 'setMaxSurge',
        'maxUnavailable' => 'setMaxUnavailable',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'maxSurge' => 'getMaxSurge',
        'maxUnavailable' => 'getMaxUnavailable',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['maxSurge'] = isset($data['maxSurge']) ? $data['maxSurge'] : null;
        $this->container['maxUnavailable'] = isset($data['maxUnavailable']) ? $data['maxUnavailable'] : null;
    }

    /**
     * Gets maxSurge
     * @return string
     */
    public function getMaxSurge()
    {
        return $this->container['maxSurge'];
    }

    /**
     * Sets maxSurge
     * @param string $maxSurge
     * @return $this
     */
    public function setMaxSurge($maxSurge)
    {
        $this->container['maxSurge'] = $maxSurge;

        return $this;
    }


    /**
     * Gets maxUnavailable
     * @return string
     */
    public function getMaxUnavailable()
    {
        return $this->container['maxUnavailable'];
    }

    /**
     * Sets maxUnavailable
     * @param string $maxUnavailable
     * @return $this
     */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->container['maxUnavailable'] = $maxUnavailable;

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

