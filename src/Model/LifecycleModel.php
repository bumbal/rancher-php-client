<?php

/**
 * LifecycleModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LifecycleModel implements ArrayAccess
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
        'postStart',
        'preStop',
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
        'postStart',
        'preStop',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'postStart' => '\Rancher\Model\LifecycleHandlerModel',
        'preStop' => '\Rancher\Model\LifecycleHandlerModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'postStart' => 'setPostStart',
        'preStop' => 'setPreStop',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'postStart' => 'getPostStart',
        'preStop' => 'getPreStop',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['postStart'] = isset($data['postStart']) ? $data['postStart'] : null;
        $this->container['preStop'] = isset($data['preStop']) ? $data['preStop'] : null;
    }

    /**
     * Gets postStart
     * @return \Rancher\Model\LifecycleHandlerModel
     */
    public function getPostStart()
    {
        return $this->container['postStart'];
    }

    /**
     * Sets postStart
     * @param \Rancher\Model\LifecycleHandlerModel $postStart
     * @return $this
     */
    public function setPostStart($postStart)
    {
        $this->container['postStart'] = $postStart;

        return $this;
    }


    /**
     * Gets preStop
     * @return \Rancher\Model\LifecycleHandlerModel
     */
    public function getPreStop()
    {
        return $this->container['preStop'];
    }

    /**
     * Sets preStop
     * @param \Rancher\Model\LifecycleHandlerModel $preStop
     * @return $this
     */
    public function setPreStop($preStop)
    {
        $this->container['preStop'] = $preStop;

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

