<?php

/**
 * EcrCredentialPluginModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EcrCredentialPluginModel implements ArrayAccess
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
        'awsAccessKeyId',
        'awsAccessToken',
        'awsSecretAccessKey',
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
        'awsAccessKeyId',
        'awsAccessToken',
        'awsSecretAccessKey',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'awsAccessKeyId' => 'string',
        'awsAccessToken' => 'string',
        'awsSecretAccessKey' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'awsAccessKeyId' => 'setAwsAccessKeyId',
        'awsAccessToken' => 'setAwsAccessToken',
        'awsSecretAccessKey' => 'setAwsSecretAccessKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'awsAccessKeyId' => 'getAwsAccessKeyId',
        'awsAccessToken' => 'getAwsAccessToken',
        'awsSecretAccessKey' => 'getAwsSecretAccessKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['awsAccessKeyId'] = isset($data['awsAccessKeyId']) ? $data['awsAccessKeyId'] : null;
        $this->container['awsAccessToken'] = isset($data['awsAccessToken']) ? $data['awsAccessToken'] : null;
        $this->container['awsSecretAccessKey'] = isset($data['awsSecretAccessKey']) ? $data['awsSecretAccessKey'] : null;
    }

    /**
     * Gets awsAccessKeyId
     * @return string
     */
    public function getAwsAccessKeyId()
    {
        return $this->container['awsAccessKeyId'];
    }

    /**
     * Sets awsAccessKeyId
     * @param string $awsAccessKeyId
     * @return $this
     */
    public function setAwsAccessKeyId($awsAccessKeyId)
    {
        $this->container['awsAccessKeyId'] = $awsAccessKeyId;

        return $this;
    }


    /**
     * Gets awsAccessToken
     * @return string
     */
    public function getAwsAccessToken()
    {
        return $this->container['awsAccessToken'];
    }

    /**
     * Sets awsAccessToken
     * @param string $awsAccessToken
     * @return $this
     */
    public function setAwsAccessToken($awsAccessToken)
    {
        $this->container['awsAccessToken'] = $awsAccessToken;

        return $this;
    }


    /**
     * Gets awsSecretAccessKey
     * @return string
     */
    public function getAwsSecretAccessKey()
    {
        return $this->container['awsSecretAccessKey'];
    }

    /**
     * Sets awsSecretAccessKey
     * @param string $awsSecretAccessKey
     * @return $this
     */
    public function setAwsSecretAccessKey($awsSecretAccessKey)
    {
        $this->container['awsSecretAccessKey'] = $awsSecretAccessKey;

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

