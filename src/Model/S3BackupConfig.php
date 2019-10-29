<?php

namespace Rancher\Model;

use \ArrayAccess;

class S3BackupConfig implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'accessKey' => 'string',
        'bucketName' => 'string',
        'customCa' => 'string',
        'endpoint' => 'string',
        'folder' => 'string',
        'region' => 'string',
        'secretKey' => '\Rancher\Model\Password',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'bucketName' => 'setBucketName',
        'customCa' => 'setCustomCa',
        'endpoint' => 'setEndpoint',
        'folder' => 'setFolder',
        'region' => 'setRegion',
        'secretKey' => 'setSecretKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'bucketName' => 'getBucketName',
        'customCa' => 'getCustomCa',
        'endpoint' => 'getEndpoint',
        'folder' => 'getFolder',
        'region' => 'getRegion',
        'secretKey' => 'getSecretKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['customCa'] = isset($data['customCa']) ? $data['customCa'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
     * Gets bucketName
     * @return string
     */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
     * Sets bucketName
     * @param string $bucketName
     * @return $this
     */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;

        return $this;
    }


    /**
     * Gets customCa
     * @return string
     */
    public function getCustomCa()
    {
        return $this->container['customCa'];
    }

    /**
     * Sets customCa
     * @param string $customCa
     * @return $this
     */
    public function setCustomCa($customCa)
    {
        $this->container['customCa'] = $customCa;

        return $this;
    }


    /**
     * Gets endpoint
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }


    /**
     * Gets folder
     * @return string
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param string $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

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
     * Gets secretKey
     * @return \Rancher\Model\Password
     */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
     * Sets secretKey
     * @param \Rancher\Model\Password $secretKey
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

