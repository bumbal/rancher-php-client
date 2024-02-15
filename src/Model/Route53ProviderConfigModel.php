<?php

/**
 * Route53ProviderConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class Route53ProviderConfigModel implements ArrayAccess
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
        'additionalOptions',
        'credentialsPath',
        'region',
        'roleArn',
        'secretKey',
        'zoneType',
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
        'additionalOptions',
        'credentialsPath',
        'region',
        'roleArn',
        'secretKey',
        'zoneType',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessKey' => 'string',
        'additionalOptions' => 'map[string,string]',
        'credentialsPath' => 'string',
        'region' => 'string',
        'roleArn' => 'string',
        'secretKey' => '\Rancher\Model\PasswordModel',
        'zoneType' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'additionalOptions' => 'setAdditionalOptions',
        'credentialsPath' => 'setCredentialsPath',
        'region' => 'setRegion',
        'roleArn' => 'setRoleArn',
        'secretKey' => 'setSecretKey',
        'zoneType' => 'setZoneType',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'additionalOptions' => 'getAdditionalOptions',
        'credentialsPath' => 'getCredentialsPath',
        'region' => 'getRegion',
        'roleArn' => 'getRoleArn',
        'secretKey' => 'getSecretKey',
        'zoneType' => 'getZoneType',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['additionalOptions'] = isset($data['additionalOptions']) ? $data['additionalOptions'] : null;
        $this->container['credentialsPath'] = isset($data['credentialsPath']) ? $data['credentialsPath'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['roleArn'] = isset($data['roleArn']) ? $data['roleArn'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['zoneType'] = isset($data['zoneType']) ? $data['zoneType'] : null;
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
     * Gets credentialsPath
     * @return string
     */
    public function getCredentialsPath()
    {
        return $this->container['credentialsPath'];
    }

    /**
     * Sets credentialsPath
     * @param string $credentialsPath
     * @return $this
     */
    public function setCredentialsPath($credentialsPath)
    {
        $this->container['credentialsPath'] = $credentialsPath;

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
     * Gets zoneType
     * @return string
     */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
     * Sets zoneType
     * @param string $zoneType
     * @return $this
     */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;

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

