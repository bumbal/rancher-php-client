<?php

/**
 * SecretOrConfigMapModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SecretOrConfigMapModel implements ArrayAccess
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
        'configMap',
        'secret',
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
        'configMap',
        'secret',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'configMap' => '\Rancher\Model\ConfigMapKeySelectorModel',
        'secret' => '\Rancher\Model\SecretKeySelectorModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'configMap' => 'setConfigMap',
        'secret' => 'setSecret',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'configMap' => 'getConfigMap',
        'secret' => 'getSecret',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['configMap'] = isset($data['configMap']) ? $data['configMap'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
    }

    /**
     * Gets configMap
     * @return \Rancher\Model\ConfigMapKeySelectorModel
     */
    public function getConfigMap()
    {
        return $this->container['configMap'];
    }

    /**
     * Sets configMap
     * @param \Rancher\Model\ConfigMapKeySelectorModel $configMap
     * @return $this
     */
    public function setConfigMap($configMap)
    {
        $this->container['configMap'] = $configMap;

        return $this;
    }


    /**
     * Gets secret
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     * @param \Rancher\Model\SecretKeySelectorModel $secret
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

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

