<?php

/**
 * Amazonec2credentialconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class Amazonec2credentialconfigModel implements ArrayAccess
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
        'accessKey',
        'defaultRegion',
        'secretKey',
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
        'accessKey',
        'defaultRegion',
        'secretKey',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessKey' => 'string',
        'defaultRegion' => 'string',
        'secretKey' => '\Rancher\Model\PasswordModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'defaultRegion' => 'setDefaultRegion',
        'secretKey' => 'setSecretKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'defaultRegion' => 'getDefaultRegion',
        'secretKey' => 'getSecretKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['defaultRegion'] = isset($data['defaultRegion']) ? $data['defaultRegion'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
    }

    /**
     * Gets accessKey
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
     * Sets accessKey
     * @param string $accessKey
     * @return $this
     */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;

        return $this;
    }


    /**
     * Gets defaultRegion
     * @return string
     */
    public function getDefaultRegion()
    {
        return $this->container['defaultRegion'];
    }

    /**
     * Sets defaultRegion
     * @param string $defaultRegion
     * @return $this
     */
    public function setDefaultRegion($defaultRegion)
    {
        $this->container['defaultRegion'] = $defaultRegion;

        return $this;
    }


    /**
     * Gets secretKey
     * @return \Rancher\Model\PasswordModel
     */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
     * Sets secretKey
     * @param \Rancher\Model\PasswordModel $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;

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

