<?php

/**
 * ConnectionPoolSettingsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ConnectionPoolSettingsModel implements ArrayAccess
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
        'http',
        'tcp',
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
        'http',
        'tcp',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'http' => '\Rancher\Model\HttpSettingsModel',
        'tcp' => '\Rancher\Model\TcpSettingsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'http' => 'setHttp',
        'tcp' => 'setTcp',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'http' => 'getHttp',
        'tcp' => 'getTcp',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['http'] = isset($data['http']) ? $data['http'] : null;
        $this->container['tcp'] = isset($data['tcp']) ? $data['tcp'] : null;
    }

    /**
     * Gets http
     * @return \Rancher\Model\HttpSettingsModel
     */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
     * Sets http
     * @param \Rancher\Model\HttpSettingsModel $http
     * @return $this
     */
    public function setHttp($http)
    {
        $this->container['http'] = $http;

        return $this;
    }


    /**
     * Gets tcp
     * @return \Rancher\Model\TcpSettingsModel
     */
    public function getTcp()
    {
        return $this->container['tcp'];
    }

    /**
     * Sets tcp
     * @param \Rancher\Model\TcpSettingsModel $tcp
     * @return $this
     */
    public function setTcp($tcp)
    {
        $this->container['tcp'] = $tcp;

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

