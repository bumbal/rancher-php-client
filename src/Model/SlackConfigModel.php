<?php

/**
 * SlackConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SlackConfigModel implements ArrayAccess
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
        'defaultRecipient',
        'proxyUrl',
        'url',
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
        'defaultRecipient',
        'proxyUrl',
        'url',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaultRecipient' => 'string',
        'proxyUrl' => 'string',
        'url' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaultRecipient' => 'setDefaultRecipient',
        'proxyUrl' => 'setProxyUrl',
        'url' => 'setUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaultRecipient' => 'getDefaultRecipient',
        'proxyUrl' => 'getProxyUrl',
        'url' => 'getUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaultRecipient'] = isset($data['defaultRecipient']) ? $data['defaultRecipient'] : null;
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Gets defaultRecipient
     * @return string
     */
    public function getDefaultRecipient()
    {
        return $this->container['defaultRecipient'];
    }

    /**
     * Sets defaultRecipient
     * @param string $defaultRecipient
     * @return $this
     */
    public function setDefaultRecipient($defaultRecipient)
    {
        $this->container['defaultRecipient'] = $defaultRecipient;

        return $this;
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

