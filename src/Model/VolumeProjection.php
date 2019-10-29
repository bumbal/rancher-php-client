<?php

namespace Rancher\Model;

use \ArrayAccess;

class VolumeProjection implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'configMap' => '\Rancher\Model\ConfigMapProjection',
        'downwardAPI' => '\Rancher\Model\DownwardAPIProjection',
        'secret' => '\Rancher\Model\SecretProjection',
        'serviceAccountToken' => '\Rancher\Model\ServiceAccountTokenProjection',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'configMap' => 'setConfigMap',
        'downwardAPI' => 'setDownwardAPI',
        'secret' => 'setSecret',
        'serviceAccountToken' => 'setServiceAccountToken',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'configMap' => 'getConfigMap',
        'downwardAPI' => 'getDownwardAPI',
        'secret' => 'getSecret',
        'serviceAccountToken' => 'getServiceAccountToken',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['configMap'] = isset($data['configMap']) ? $data['configMap'] : null;
        $this->container['downwardAPI'] = isset($data['downwardAPI']) ? $data['downwardAPI'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['serviceAccountToken'] = isset($data['serviceAccountToken']) ? $data['serviceAccountToken'] : null;
    }

    /**
     * Gets configMap
     * @return \Rancher\Model\ConfigMapProjection
     */
    public function getConfigMap()
    {
        return $this->container['configMap'];
    }

    /**
     * Sets configMap
     * @param \Rancher\Model\ConfigMapProjection $configMap
     * @return $this
     */
    public function setConfigMap($configMap)
    {
        $this->container['configMap'] = $configMap;

        return $this;
    }


    /**
     * Gets downwardAPI
     * @return \Rancher\Model\DownwardAPIProjection
     */
    public function getDownwardAPI()
    {
        return $this->container['downwardAPI'];
    }

    /**
     * Sets downwardAPI
     * @param \Rancher\Model\DownwardAPIProjection $downwardAPI
     * @return $this
     */
    public function setDownwardAPI($downwardAPI)
    {
        $this->container['downwardAPI'] = $downwardAPI;

        return $this;
    }


    /**
     * Gets secret
     * @return \Rancher\Model\SecretProjection
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     * @param \Rancher\Model\SecretProjection $secret
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }


    /**
     * Gets serviceAccountToken
     * @return \Rancher\Model\ServiceAccountTokenProjection
     */
    public function getServiceAccountToken()
    {
        return $this->container['serviceAccountToken'];
    }

    /**
     * Sets serviceAccountToken
     * @param \Rancher\Model\ServiceAccountTokenProjection $serviceAccountToken
     * @return $this
     */
    public function setServiceAccountToken($serviceAccountToken)
    {
        $this->container['serviceAccountToken'] = $serviceAccountToken;

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

