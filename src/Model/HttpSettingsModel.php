<?php

/**
 * HttpSettingsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HttpSettingsModel implements ArrayAccess
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
        'http1MaxPendingRequests',
        'http2MaxRequests',
        'maxRequestsPerConnection',
        'maxRetries',
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
        'http1MaxPendingRequests',
        'http2MaxRequests',
        'maxRequestsPerConnection',
        'maxRetries',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'http1MaxPendingRequests' => 'int',
        'http2MaxRequests' => 'int',
        'maxRequestsPerConnection' => 'int',
        'maxRetries' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'http1MaxPendingRequests' => 'setHttp1MaxPendingRequests',
        'http2MaxRequests' => 'setHttp2MaxRequests',
        'maxRequestsPerConnection' => 'setMaxRequestsPerConnection',
        'maxRetries' => 'setMaxRetries',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'http1MaxPendingRequests' => 'getHttp1MaxPendingRequests',
        'http2MaxRequests' => 'getHttp2MaxRequests',
        'maxRequestsPerConnection' => 'getMaxRequestsPerConnection',
        'maxRetries' => 'getMaxRetries',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['http1MaxPendingRequests'] = isset($data['http1MaxPendingRequests']) ? $data['http1MaxPendingRequests'] : null;
        $this->container['http2MaxRequests'] = isset($data['http2MaxRequests']) ? $data['http2MaxRequests'] : null;
        $this->container['maxRequestsPerConnection'] = isset($data['maxRequestsPerConnection']) ? $data['maxRequestsPerConnection'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
    }

    /**
     * Gets http1MaxPendingRequests
     * @return int
     */
    public function getHttp1MaxPendingRequests()
    {
        return $this->container['http1MaxPendingRequests'];
    }

    /**
     * Sets http1MaxPendingRequests
     * @param int $http1MaxPendingRequests
     * @return $this
     */
    public function setHttp1MaxPendingRequests($http1MaxPendingRequests)
    {
        $this->container['http1MaxPendingRequests'] = $http1MaxPendingRequests;

        return $this;
    }


    /**
     * Gets http2MaxRequests
     * @return int
     */
    public function getHttp2MaxRequests()
    {
        return $this->container['http2MaxRequests'];
    }

    /**
     * Sets http2MaxRequests
     * @param int $http2MaxRequests
     * @return $this
     */
    public function setHttp2MaxRequests($http2MaxRequests)
    {
        $this->container['http2MaxRequests'] = $http2MaxRequests;

        return $this;
    }


    /**
     * Gets maxRequestsPerConnection
     * @return int
     */
    public function getMaxRequestsPerConnection()
    {
        return $this->container['maxRequestsPerConnection'];
    }

    /**
     * Sets maxRequestsPerConnection
     * @param int $maxRequestsPerConnection
     * @return $this
     */
    public function setMaxRequestsPerConnection($maxRequestsPerConnection)
    {
        $this->container['maxRequestsPerConnection'] = $maxRequestsPerConnection;

        return $this;
    }


    /**
     * Gets maxRetries
     * @return int
     */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
     * Sets maxRetries
     * @param int $maxRetries
     * @return $this
     */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;

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

