<?php

/**
 * CloudflareProviderConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CloudflareProviderConfigModel implements ArrayAccess
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
        'additionalOptions',
        'apiEmail',
        'apiKey',
        'proxySetting',
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
        'additionalOptions',
        'apiEmail',
        'apiKey',
        'proxySetting',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'additionalOptions' => 'map[string,string]',
        'apiEmail' => 'string',
        'apiKey' => '\Rancher\Model\PasswordModel',
        'proxySetting' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'additionalOptions' => 'setAdditionalOptions',
        'apiEmail' => 'setApiEmail',
        'apiKey' => 'setApiKey',
        'proxySetting' => 'setProxySetting',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'additionalOptions' => 'getAdditionalOptions',
        'apiEmail' => 'getApiEmail',
        'apiKey' => 'getApiKey',
        'proxySetting' => 'getProxySetting',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['additionalOptions'] = isset($data['additionalOptions']) ? $data['additionalOptions'] : null;
        $this->container['apiEmail'] = isset($data['apiEmail']) ? $data['apiEmail'] : null;
        $this->container['apiKey'] = isset($data['apiKey']) ? $data['apiKey'] : null;
        $this->container['proxySetting'] = isset($data['proxySetting']) ? $data['proxySetting'] : null;
    }

    /**
     * Gets additionalOptions
     * @return string[]
     */
    public function getAdditionalOptions()
    {
        return $this->container['additionalOptions'];
    }

    /**
     * Sets additionalOptions
     * @param string[] $additionalOptions
     * @return $this
     */
    public function setAdditionalOptions($additionalOptions)
    {
        $this->container['additionalOptions'] = $additionalOptions;

        return $this;
    }


    /**
     * Gets apiEmail
     * @return string
     */
    public function getApiEmail()
    {
        return $this->container['apiEmail'];
    }

    /**
     * Sets apiEmail
     * @param string $apiEmail
     * @return $this
     */
    public function setApiEmail($apiEmail)
    {
        $this->container['apiEmail'] = $apiEmail;

        return $this;
    }


    /**
     * Gets apiKey
     * @return \Rancher\Model\PasswordModel
     */
    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    /**
     * Sets apiKey
     * @param \Rancher\Model\PasswordModel $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;

        return $this;
    }


    /**
     * Gets proxySetting
     * @return boolean
     */
    public function getProxySetting()
    {
        return $this->container['proxySetting'];
    }

    /**
     * Sets proxySetting
     * @param boolean $proxySetting
     * @return $this
     */
    public function setProxySetting($proxySetting)
    {
        $this->container['proxySetting'] = $proxySetting;

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

