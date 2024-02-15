<?php

/**
 * Sigv4Model
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class Sigv4Model implements ArrayAccess
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
        'profile',
        'region',
        'roleArn',
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
        'profile',
        'region',
        'roleArn',
        'secretKey',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessKey' => '\Rancher\Model\SecretKeySelectorModel',
        'profile' => 'string',
        'region' => 'string',
        'roleArn' => 'string',
        'secretKey' => '\Rancher\Model\SecretKeySelectorModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'profile' => 'setProfile',
        'region' => 'setRegion',
        'roleArn' => 'setRoleArn',
        'secretKey' => 'setSecretKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'profile' => 'getProfile',
        'region' => 'getRegion',
        'roleArn' => 'getRoleArn',
        'secretKey' => 'getSecretKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['roleArn'] = isset($data['roleArn']) ? $data['roleArn'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
    }

    /**
     * Gets accessKey
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
     * Sets accessKey
     * @param \Rancher\Model\SecretKeySelectorModel $accessKey
     * @return $this
     */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;

        return $this;
    }


    /**
     * Gets profile
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
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
     * Gets roleArn
     * @return string
     */
    public function getRoleArn()
    {
        return $this->container['roleArn'];
    }

    /**
     * Sets roleArn
     * @param string $roleArn
     * @return $this
     */
    public function setRoleArn($roleArn)
    {
        $this->container['roleArn'] = $roleArn;

        return $this;
    }


    /**
     * Gets secretKey
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
     * Sets secretKey
     * @param \Rancher\Model\SecretKeySelectorModel $secretKey
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

