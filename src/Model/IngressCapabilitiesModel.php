<?php

/**
 * IngressCapabilitiesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class IngressCapabilitiesModel implements ArrayAccess
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
        'customDefaultBackend',
        'ingressProvider',
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
        'customDefaultBackend',
        'ingressProvider',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'customDefaultBackend' => 'boolean',
        'ingressProvider' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'customDefaultBackend' => 'setCustomDefaultBackend',
        'ingressProvider' => 'setIngressProvider',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'customDefaultBackend' => 'getCustomDefaultBackend',
        'ingressProvider' => 'getIngressProvider',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['customDefaultBackend'] = isset($data['customDefaultBackend']) ? $data['customDefaultBackend'] : null;
        $this->container['ingressProvider'] = isset($data['ingressProvider']) ? $data['ingressProvider'] : null;
    }

    /**
     * Gets customDefaultBackend
     * @return boolean
     */
    public function getCustomDefaultBackend()
    {
        return $this->container['customDefaultBackend'];
    }

    /**
     * Sets customDefaultBackend
     * @param boolean $customDefaultBackend
     * @return $this
     */
    public function setCustomDefaultBackend($customDefaultBackend)
    {
        $this->container['customDefaultBackend'] = $customDefaultBackend;

        return $this;
    }


    /**
     * Gets ingressProvider
     * @return string
     */
    public function getIngressProvider()
    {
        return $this->container['ingressProvider'];
    }

    /**
     * Sets ingressProvider
     * @param string $ingressProvider
     * @return $this
     */
    public function setIngressProvider($ingressProvider)
    {
        $this->container['ingressProvider'] = $ingressProvider;

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

