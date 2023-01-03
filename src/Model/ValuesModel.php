<?php

/**
 * ValuesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ValuesModel implements ArrayAccess
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
        'boolValue',
        'intValue',
        'stringSliceValue',
        'stringValue',
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
        'boolValue',
        'intValue',
        'stringSliceValue',
        'stringValue',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'boolValue' => 'boolean',
        'intValue' => 'int',
        'stringSliceValue' => 'string[]',
        'stringValue' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'boolValue' => 'setBoolValue',
        'intValue' => 'setIntValue',
        'stringSliceValue' => 'setStringSliceValue',
        'stringValue' => 'setStringValue',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'boolValue' => 'getBoolValue',
        'intValue' => 'getIntValue',
        'stringSliceValue' => 'getStringSliceValue',
        'stringValue' => 'getStringValue',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['boolValue'] = isset($data['boolValue']) ? $data['boolValue'] : null;
        $this->container['intValue'] = isset($data['intValue']) ? $data['intValue'] : null;
        $this->container['stringSliceValue'] = isset($data['stringSliceValue']) ? $data['stringSliceValue'] : null;
        $this->container['stringValue'] = isset($data['stringValue']) ? $data['stringValue'] : null;
    }

    /**
     * Gets boolValue
     * @return boolean
     */
    public function getBoolValue()
    {
        return $this->container['boolValue'];
    }

    /**
     * Sets boolValue
     * @param boolean $boolValue
     * @return $this
     */
    public function setBoolValue($boolValue)
    {
        $this->container['boolValue'] = $boolValue;

        return $this;
    }


    /**
     * Gets intValue
     * @return int
     */
    public function getIntValue()
    {
        return $this->container['intValue'];
    }

    /**
     * Sets intValue
     * @param int $intValue
     * @return $this
     */
    public function setIntValue($intValue)
    {
        $this->container['intValue'] = $intValue;

        return $this;
    }


    /**
     * Gets stringSliceValue
     * @return string[]
     */
    public function getStringSliceValue()
    {
        return $this->container['stringSliceValue'];
    }

    /**
     * Sets stringSliceValue
     * @param string[] $stringSliceValue
     * @return $this
     */
    public function setStringSliceValue($stringSliceValue)
    {
        $this->container['stringSliceValue'] = $stringSliceValue;

        return $this;
    }


    /**
     * Gets stringValue
     * @return string
     */
    public function getStringValue()
    {
        return $this->container['stringValue'];
    }

    /**
     * Sets stringValue
     * @param string $stringValue
     * @return $this
     */
    public function setStringValue($stringValue)
    {
        $this->container['stringValue'] = $stringValue;

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

