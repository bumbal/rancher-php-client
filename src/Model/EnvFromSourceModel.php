<?php

/**
 * EnvFromSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EnvFromSourceModel implements ArrayAccess
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
        'configMapRef',
        'prefix',
        'secretRef',
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
        'configMapRef',
        'prefix',
        'secretRef',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'configMapRef' => '\Rancher\Model\ConfigMapEnvSourceModel',
        'prefix' => 'string',
        'secretRef' => '\Rancher\Model\SecretEnvSourceModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'configMapRef' => 'setConfigMapRef',
        'prefix' => 'setPrefix',
        'secretRef' => 'setSecretRef',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'configMapRef' => 'getConfigMapRef',
        'prefix' => 'getPrefix',
        'secretRef' => 'getSecretRef',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['configMapRef'] = isset($data['configMapRef']) ? $data['configMapRef'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
    }

    /**
     * Gets configMapRef
     * @return \Rancher\Model\ConfigMapEnvSourceModel
     */
    public function getConfigMapRef()
    {
        return $this->container['configMapRef'];
    }

    /**
     * Sets configMapRef
     * @param \Rancher\Model\ConfigMapEnvSourceModel $configMapRef
     * @return $this
     */
    public function setConfigMapRef($configMapRef)
    {
        $this->container['configMapRef'] = $configMapRef;

        return $this;
    }


    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }


    /**
     * Gets secretRef
     * @return \Rancher\Model\SecretEnvSourceModel
     */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
     * Sets secretRef
     * @param \Rancher\Model\SecretEnvSourceModel $secretRef
     * @return $this
     */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;

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

