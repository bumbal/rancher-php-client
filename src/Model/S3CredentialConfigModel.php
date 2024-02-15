<?php

/**
 * S3CredentialConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class S3CredentialConfigModel implements ArrayAccess
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
        'defaultBucket',
        'defaultEndpoint',
        'defaultEndpointCA',
        'defaultFolder',
        'defaultRegion',
        'defaultSkipSSLVerify',
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
        'defaultBucket',
        'defaultEndpoint',
        'defaultEndpointCA',
        'defaultFolder',
        'defaultRegion',
        'defaultSkipSSLVerify',
        'secretKey',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessKey' => 'string',
        'defaultBucket' => 'string',
        'defaultEndpoint' => 'string',
        'defaultEndpointCA' => 'string',
        'defaultFolder' => 'string',
        'defaultRegion' => 'string',
        'defaultSkipSSLVerify' => 'string',
        'secretKey' => '\Rancher\Model\PasswordModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'defaultBucket' => 'setDefaultBucket',
        'defaultEndpoint' => 'setDefaultEndpoint',
        'defaultEndpointCA' => 'setDefaultEndpointCA',
        'defaultFolder' => 'setDefaultFolder',
        'defaultRegion' => 'setDefaultRegion',
        'defaultSkipSSLVerify' => 'setDefaultSkipSSLVerify',
        'secretKey' => 'setSecretKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'defaultBucket' => 'getDefaultBucket',
        'defaultEndpoint' => 'getDefaultEndpoint',
        'defaultEndpointCA' => 'getDefaultEndpointCA',
        'defaultFolder' => 'getDefaultFolder',
        'defaultRegion' => 'getDefaultRegion',
        'defaultSkipSSLVerify' => 'getDefaultSkipSSLVerify',
        'secretKey' => 'getSecretKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['defaultBucket'] = isset($data['defaultBucket']) ? $data['defaultBucket'] : null;
        $this->container['defaultEndpoint'] = isset($data['defaultEndpoint']) ? $data['defaultEndpoint'] : null;
        $this->container['defaultEndpointCA'] = isset($data['defaultEndpointCA']) ? $data['defaultEndpointCA'] : null;
        $this->container['defaultFolder'] = isset($data['defaultFolder']) ? $data['defaultFolder'] : null;
        $this->container['defaultRegion'] = isset($data['defaultRegion']) ? $data['defaultRegion'] : null;
        $this->container['defaultSkipSSLVerify'] = isset($data['defaultSkipSSLVerify']) ? $data['defaultSkipSSLVerify'] : null;
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
     * Gets defaultBucket
     * @return string
     */
    public function getDefaultBucket()
    {
        return $this->container['defaultBucket'];
    }

    /**
     * Sets defaultBucket
     * @param string $defaultBucket
     * @return $this
     */
    public function setDefaultBucket($defaultBucket)
    {
        $this->container['defaultBucket'] = $defaultBucket;

        return $this;
    }


    /**
     * Gets defaultEndpoint
     * @return string
     */
    public function getDefaultEndpoint()
    {
        return $this->container['defaultEndpoint'];
    }

    /**
     * Sets defaultEndpoint
     * @param string $defaultEndpoint
     * @return $this
     */
    public function setDefaultEndpoint($defaultEndpoint)
    {
        $this->container['defaultEndpoint'] = $defaultEndpoint;

        return $this;
    }


    /**
     * Gets defaultEndpointCA
     * @return string
     */
    public function getDefaultEndpointCA()
    {
        return $this->container['defaultEndpointCA'];
    }

    /**
     * Sets defaultEndpointCA
     * @param string $defaultEndpointCA
     * @return $this
     */
    public function setDefaultEndpointCA($defaultEndpointCA)
    {
        $this->container['defaultEndpointCA'] = $defaultEndpointCA;

        return $this;
    }


    /**
     * Gets defaultFolder
     * @return string
     */
    public function getDefaultFolder()
    {
        return $this->container['defaultFolder'];
    }

    /**
     * Sets defaultFolder
     * @param string $defaultFolder
     * @return $this
     */
    public function setDefaultFolder($defaultFolder)
    {
        $this->container['defaultFolder'] = $defaultFolder;

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
     * Gets defaultSkipSSLVerify
     * @return string
     */
    public function getDefaultSkipSSLVerify()
    {
        return $this->container['defaultSkipSSLVerify'];
    }

    /**
     * Sets defaultSkipSSLVerify
     * @param string $defaultSkipSSLVerify
     * @return $this
     */
    public function setDefaultSkipSSLVerify($defaultSkipSSLVerify)
    {
        $this->container['defaultSkipSSLVerify'] = $defaultSkipSSLVerify;

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

