<?php

namespace Rancher\Model;

use \ArrayAccess;

class PagerdutyConfig implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'proxyUrl' => 'string',
        'serviceKey' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'proxyUrl' => 'setProxyUrl',
        'serviceKey' => 'setServiceKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'proxyUrl' => 'getProxyUrl',
        'serviceKey' => 'getServiceKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['serviceKey'] = isset($data['serviceKey']) ? $data['serviceKey'] : null;
    }

    /**
     * Gets proxyUrl
     * @return string
     */
    public function getProxyUrl()
    {
        return $this->container['proxyUrl'];
    }

    /**
     * Sets proxyUrl
     * @param string $proxyUrl
     * @return $this
     */
    public function setProxyUrl($proxyUrl)
    {
        $this->container['proxyUrl'] = $proxyUrl;

        return $this;
    }


    /**
     * Gets serviceKey
     * @return string
     */
    public function getServiceKey()
    {
        return $this->container['serviceKey'];
    }

    /**
     * Sets serviceKey
     * @param string $serviceKey
     * @return $this
     */
    public function setServiceKey($serviceKey)
    {
        $this->container['serviceKey'] = $serviceKey;

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

