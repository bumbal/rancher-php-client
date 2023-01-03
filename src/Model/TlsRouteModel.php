<?php

/**
 * TlsRouteModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TlsRouteModel implements ArrayAccess
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
        'match',
        'route',
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
        'match',
        'route',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'match' => '\Rancher\Model\TlsMatchAttributesModel[]',
        'route' => '\Rancher\Model\HttpRouteDestinationModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'match' => 'setMatch',
        'route' => 'setRoute',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'match' => 'getMatch',
        'route' => 'getRoute',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
    }

    /**
     * Gets match
     * @return \Rancher\Model\TlsMatchAttributesModel[]
     */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
     * Sets match
     * @param \Rancher\Model\TlsMatchAttributesModel[] $match
     * @return $this
     */
    public function setMatch($match)
    {
        $this->container['match'] = $match;

        return $this;
    }


    /**
     * Gets route
     * @return \Rancher\Model\HttpRouteDestinationModel[]
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param \Rancher\Model\HttpRouteDestinationModel[] $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

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

