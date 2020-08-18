<?php

/**
 * EnvVarSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EnvVarSourceModel implements ArrayAccess
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
        'configMapKeyRef',
        'fieldRef',
        'resourceFieldRef',
        'secretKeyRef',
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
        'configMapKeyRef',
        'fieldRef',
        'resourceFieldRef',
        'secretKeyRef',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'configMapKeyRef' => '\Rancher\Model\ConfigMapKeySelectorModel',
        'fieldRef' => '\Rancher\Model\ObjectFieldSelectorModel',
        'resourceFieldRef' => '\Rancher\Model\ResourceFieldSelectorModel',
        'secretKeyRef' => '\Rancher\Model\SecretKeySelectorModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'configMapKeyRef' => 'setConfigMapKeyRef',
        'fieldRef' => 'setFieldRef',
        'resourceFieldRef' => 'setResourceFieldRef',
        'secretKeyRef' => 'setSecretKeyRef',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'configMapKeyRef' => 'getConfigMapKeyRef',
        'fieldRef' => 'getFieldRef',
        'resourceFieldRef' => 'getResourceFieldRef',
        'secretKeyRef' => 'getSecretKeyRef',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['configMapKeyRef'] = isset($data['configMapKeyRef']) ? $data['configMapKeyRef'] : null;
        $this->container['fieldRef'] = isset($data['fieldRef']) ? $data['fieldRef'] : null;
        $this->container['resourceFieldRef'] = isset($data['resourceFieldRef']) ? $data['resourceFieldRef'] : null;
        $this->container['secretKeyRef'] = isset($data['secretKeyRef']) ? $data['secretKeyRef'] : null;
    }

    /**
     * Gets configMapKeyRef
     * @return \Rancher\Model\ConfigMapKeySelectorModel
     */
    public function getConfigMapKeyRef()
    {
        return $this->container['configMapKeyRef'];
    }

    /**
     * Sets configMapKeyRef
     * @param \Rancher\Model\ConfigMapKeySelectorModel $configMapKeyRef
     * @return $this
     */
    public function setConfigMapKeyRef($configMapKeyRef)
    {
        $this->container['configMapKeyRef'] = $configMapKeyRef;

        return $this;
    }


    /**
     * Gets fieldRef
     * @return \Rancher\Model\ObjectFieldSelectorModel
     */
    public function getFieldRef()
    {
        return $this->container['fieldRef'];
    }

    /**
     * Sets fieldRef
     * @param \Rancher\Model\ObjectFieldSelectorModel $fieldRef
     * @return $this
     */
    public function setFieldRef($fieldRef)
    {
        $this->container['fieldRef'] = $fieldRef;

        return $this;
    }


    /**
     * Gets resourceFieldRef
     * @return \Rancher\Model\ResourceFieldSelectorModel
     */
    public function getResourceFieldRef()
    {
        return $this->container['resourceFieldRef'];
    }

    /**
     * Sets resourceFieldRef
     * @param \Rancher\Model\ResourceFieldSelectorModel $resourceFieldRef
     * @return $this
     */
    public function setResourceFieldRef($resourceFieldRef)
    {
        $this->container['resourceFieldRef'] = $resourceFieldRef;

        return $this;
    }


    /**
     * Gets secretKeyRef
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getSecretKeyRef()
    {
        return $this->container['secretKeyRef'];
    }

    /**
     * Sets secretKeyRef
     * @param \Rancher\Model\SecretKeySelectorModel $secretKeyRef
     * @return $this
     */
    public function setSecretKeyRef($secretKeyRef)
    {
        $this->container['secretKeyRef'] = $secretKeyRef;

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

