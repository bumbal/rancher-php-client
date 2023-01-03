<?php

/**
 * SecretVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SecretVolumeSourceModel implements ArrayAccess
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
        'defaultMode',
        'items',
        'optional',
        'secretName',
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
        'defaultMode',
        'items',
        'optional',
        'secretName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaultMode' => 'int',
        'items' => '\Rancher\Model\KeyToPathModel[]',
        'optional' => 'boolean',
        'secretName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaultMode' => 'setDefaultMode',
        'items' => 'setItems',
        'optional' => 'setOptional',
        'secretName' => 'setSecretName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaultMode' => 'getDefaultMode',
        'items' => 'getItems',
        'optional' => 'getOptional',
        'secretName' => 'getSecretName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaultMode'] = isset($data['defaultMode']) ? $data['defaultMode'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
    }

    /**
     * Gets defaultMode
     * @return int
     */
    public function getDefaultMode()
    {
        return $this->container['defaultMode'];
    }

    /**
     * Sets defaultMode
     * @param int $defaultMode
     * @return $this
     */
    public function setDefaultMode($defaultMode)
    {
        $this->container['defaultMode'] = $defaultMode;

        return $this;
    }


    /**
     * Gets items
     * @return \Rancher\Model\KeyToPathModel[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Rancher\Model\KeyToPathModel[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }


    /**
     * Gets optional
     * @return boolean
     */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
     * Sets optional
     * @param boolean $optional
     * @return $this
     */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;

        return $this;
    }


    /**
     * Gets secretName
     * @return string
     */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
     * Sets secretName
     * @param string $secretName
     * @return $this
     */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;

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

