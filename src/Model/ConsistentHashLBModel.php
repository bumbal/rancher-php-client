<?php

/**
 * ConsistentHashLBModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ConsistentHashLBModel implements ArrayAccess
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
        'httpCookie',
        'httpHeaderName',
        'minimumRingSize',
        'useSourceIp',
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
        'httpCookie',
        'httpHeaderName',
        'minimumRingSize',
        'useSourceIp',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'httpCookie' => '\Rancher\Model\HttpCookieModel',
        'httpHeaderName' => 'string',
        'minimumRingSize' => 'int',
        'useSourceIp' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'httpCookie' => 'setHttpCookie',
        'httpHeaderName' => 'setHttpHeaderName',
        'minimumRingSize' => 'setMinimumRingSize',
        'useSourceIp' => 'setUseSourceIp',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'httpCookie' => 'getHttpCookie',
        'httpHeaderName' => 'getHttpHeaderName',
        'minimumRingSize' => 'getMinimumRingSize',
        'useSourceIp' => 'getUseSourceIp',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['httpCookie'] = isset($data['httpCookie']) ? $data['httpCookie'] : null;
        $this->container['httpHeaderName'] = isset($data['httpHeaderName']) ? $data['httpHeaderName'] : null;
        $this->container['minimumRingSize'] = isset($data['minimumRingSize']) ? $data['minimumRingSize'] : null;
        $this->container['useSourceIp'] = isset($data['useSourceIp']) ? $data['useSourceIp'] : null;
    }

    /**
     * Gets httpCookie
     * @return \Rancher\Model\HttpCookieModel
     */
    public function getHttpCookie()
    {
        return $this->container['httpCookie'];
    }

    /**
     * Sets httpCookie
     * @param \Rancher\Model\HttpCookieModel $httpCookie
     * @return $this
     */
    public function setHttpCookie($httpCookie)
    {
        $this->container['httpCookie'] = $httpCookie;

        return $this;
    }


    /**
     * Gets httpHeaderName
     * @return string
     */
    public function getHttpHeaderName()
    {
        return $this->container['httpHeaderName'];
    }

    /**
     * Sets httpHeaderName
     * @param string $httpHeaderName
     * @return $this
     */
    public function setHttpHeaderName($httpHeaderName)
    {
        $this->container['httpHeaderName'] = $httpHeaderName;

        return $this;
    }


    /**
     * Gets minimumRingSize
     * @return int
     */
    public function getMinimumRingSize()
    {
        return $this->container['minimumRingSize'];
    }

    /**
     * Sets minimumRingSize
     * @param int $minimumRingSize
     * @return $this
     */
    public function setMinimumRingSize($minimumRingSize)
    {
        $this->container['minimumRingSize'] = $minimumRingSize;

        return $this;
    }


    /**
     * Gets useSourceIp
     * @return boolean
     */
    public function getUseSourceIp()
    {
        return $this->container['useSourceIp'];
    }

    /**
     * Sets useSourceIp
     * @param boolean $useSourceIp
     * @return $this
     */
    public function setUseSourceIp($useSourceIp)
    {
        $this->container['useSourceIp'] = $useSourceIp;

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

