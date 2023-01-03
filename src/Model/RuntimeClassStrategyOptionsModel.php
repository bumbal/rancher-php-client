<?php

/**
 * RuntimeClassStrategyOptionsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RuntimeClassStrategyOptionsModel implements ArrayAccess
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
        'allowedRuntimeClassNames',
        'defaultRuntimeClassName',
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
        'allowedRuntimeClassNames',
        'defaultRuntimeClassName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allowedRuntimeClassNames' => 'string[]',
        'defaultRuntimeClassName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allowedRuntimeClassNames' => 'setAllowedRuntimeClassNames',
        'defaultRuntimeClassName' => 'setDefaultRuntimeClassName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allowedRuntimeClassNames' => 'getAllowedRuntimeClassNames',
        'defaultRuntimeClassName' => 'getDefaultRuntimeClassName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allowedRuntimeClassNames'] = isset($data['allowedRuntimeClassNames']) ? $data['allowedRuntimeClassNames'] : null;
        $this->container['defaultRuntimeClassName'] = isset($data['defaultRuntimeClassName']) ? $data['defaultRuntimeClassName'] : null;
    }

    /**
     * Gets allowedRuntimeClassNames
     * @return string[]
     */
    public function getAllowedRuntimeClassNames()
    {
        return $this->container['allowedRuntimeClassNames'];
    }

    /**
     * Sets allowedRuntimeClassNames
     * @param string[] $allowedRuntimeClassNames
     * @return $this
     */
    public function setAllowedRuntimeClassNames($allowedRuntimeClassNames)
    {
        $this->container['allowedRuntimeClassNames'] = $allowedRuntimeClassNames;

        return $this;
    }


    /**
     * Gets defaultRuntimeClassName
     * @return string
     */
    public function getDefaultRuntimeClassName()
    {
        return $this->container['defaultRuntimeClassName'];
    }

    /**
     * Sets defaultRuntimeClassName
     * @param string $defaultRuntimeClassName
     * @return $this
     */
    public function setDefaultRuntimeClassName($defaultRuntimeClassName)
    {
        $this->container['defaultRuntimeClassName'] = $defaultRuntimeClassName;

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

