<?php

/**
 * ServiceOverrideModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ServiceOverrideModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'region' => 'string',
        'service' => 'string',
        'signing-method' => 'string',
        'signing-name' => 'string',
        'signing-region' => 'string',
        'url' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'region' => 'setRegion',
        'service' => 'setService',
        'signing-method' => 'setSigning-method',
        'signing-name' => 'setSigning-name',
        'signing-region' => 'setSigning-region',
        'url' => 'setUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'region' => 'getRegion',
        'service' => 'getService',
        'signing-method' => 'getSigning-method',
        'signing-name' => 'getSigning-name',
        'signing-region' => 'getSigning-region',
        'url' => 'getUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['signing-method'] = isset($data['signing-method']) ? $data['signing-method'] : null;
        $this->container['signing-name'] = isset($data['signing-name']) ? $data['signing-name'] : null;
        $this->container['signing-region'] = isset($data['signing-region']) ? $data['signing-region'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }


    /**
     * Gets service
     * @return string
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     * @param string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }


    /**
     * Gets signing-method
     * @return string
     */
    public function getSigning-method()
    {
        return $this->container['signing-method'];
    }

    /**
     * Sets signing-method
     * @param string $signing-method
     * @return $this
     */
    public function setSigning-method($signing-method)
    {
        $this->container['signing-method'] = $signing-method;

        return $this;
    }


    /**
     * Gets signing-name
     * @return string
     */
    public function getSigning-name()
    {
        return $this->container['signing-name'];
    }

    /**
     * Sets signing-name
     * @param string $signing-name
     * @return $this
     */
    public function setSigning-name($signing-name)
    {
        $this->container['signing-name'] = $signing-name;

        return $this;
    }


    /**
     * Gets signing-region
     * @return string
     */
    public function getSigning-region()
    {
        return $this->container['signing-region'];
    }

    /**
     * Sets signing-region
     * @param string $signing-region
     * @return $this
     */
    public function setSigning-region($signing-region)
    {
        $this->container['signing-region'] = $signing-region;

        return $this;
    }


    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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

