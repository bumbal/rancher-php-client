<?php

/**
 * CorsPolicyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CorsPolicyModel implements ArrayAccess
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
        'allowCredentials',
        'allowHeaders',
        'allowMethods',
        'allowOrigin',
        'exposeHeaders',
        'maxAge',
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
        'allowCredentials',
        'allowHeaders',
        'allowMethods',
        'allowOrigin',
        'exposeHeaders',
        'maxAge',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allowCredentials' => 'boolean',
        'allowHeaders' => 'string[]',
        'allowMethods' => 'string[]',
        'allowOrigin' => 'string[]',
        'exposeHeaders' => 'string[]',
        'maxAge' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allowCredentials' => 'setAllowCredentials',
        'allowHeaders' => 'setAllowHeaders',
        'allowMethods' => 'setAllowMethods',
        'allowOrigin' => 'setAllowOrigin',
        'exposeHeaders' => 'setExposeHeaders',
        'maxAge' => 'setMaxAge',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allowCredentials' => 'getAllowCredentials',
        'allowHeaders' => 'getAllowHeaders',
        'allowMethods' => 'getAllowMethods',
        'allowOrigin' => 'getAllowOrigin',
        'exposeHeaders' => 'getExposeHeaders',
        'maxAge' => 'getMaxAge',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allowCredentials'] = isset($data['allowCredentials']) ? $data['allowCredentials'] : null;
        $this->container['allowHeaders'] = isset($data['allowHeaders']) ? $data['allowHeaders'] : null;
        $this->container['allowMethods'] = isset($data['allowMethods']) ? $data['allowMethods'] : null;
        $this->container['allowOrigin'] = isset($data['allowOrigin']) ? $data['allowOrigin'] : null;
        $this->container['exposeHeaders'] = isset($data['exposeHeaders']) ? $data['exposeHeaders'] : null;
        $this->container['maxAge'] = isset($data['maxAge']) ? $data['maxAge'] : null;
    }

    /**
     * Gets allowCredentials
     * @return boolean
     */
    public function getAllowCredentials()
    {
        return $this->container['allowCredentials'];
    }

    /**
     * Sets allowCredentials
     * @param boolean $allowCredentials
     * @return $this
     */
    public function setAllowCredentials($allowCredentials)
    {
        $this->container['allowCredentials'] = $allowCredentials;

        return $this;
    }


    /**
     * Gets allowHeaders
     * @return string[]
     */
    public function getAllowHeaders()
    {
        return $this->container['allowHeaders'];
    }

    /**
     * Sets allowHeaders
     * @param string[] $allowHeaders
     * @return $this
     */
    public function setAllowHeaders($allowHeaders)
    {
        $this->container['allowHeaders'] = $allowHeaders;

        return $this;
    }


    /**
     * Gets allowMethods
     * @return string[]
     */
    public function getAllowMethods()
    {
        return $this->container['allowMethods'];
    }

    /**
     * Sets allowMethods
     * @param string[] $allowMethods
     * @return $this
     */
    public function setAllowMethods($allowMethods)
    {
        $this->container['allowMethods'] = $allowMethods;

        return $this;
    }


    /**
     * Gets allowOrigin
     * @return string[]
     */
    public function getAllowOrigin()
    {
        return $this->container['allowOrigin'];
    }

    /**
     * Sets allowOrigin
     * @param string[] $allowOrigin
     * @return $this
     */
    public function setAllowOrigin($allowOrigin)
    {
        $this->container['allowOrigin'] = $allowOrigin;

        return $this;
    }


    /**
     * Gets exposeHeaders
     * @return string[]
     */
    public function getExposeHeaders()
    {
        return $this->container['exposeHeaders'];
    }

    /**
     * Sets exposeHeaders
     * @param string[] $exposeHeaders
     * @return $this
     */
    public function setExposeHeaders($exposeHeaders)
    {
        $this->container['exposeHeaders'] = $exposeHeaders;

        return $this;
    }


    /**
     * Gets maxAge
     * @return string
     */
    public function getMaxAge()
    {
        return $this->container['maxAge'];
    }

    /**
     * Sets maxAge
     * @param string $maxAge
     * @return $this
     */
    public function setMaxAge($maxAge)
    {
        $this->container['maxAge'] = $maxAge;

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

