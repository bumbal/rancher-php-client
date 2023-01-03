<?php

/**
 * StringMatchModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class StringMatchModel implements ArrayAccess
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
        'exact',
        'prefix',
        'regex',
        'suffix',
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
        'exact',
        'prefix',
        'regex',
        'suffix',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'exact' => 'string',
        'prefix' => 'string',
        'regex' => 'string',
        'suffix' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'exact' => 'setExact',
        'prefix' => 'setPrefix',
        'regex' => 'setRegex',
        'suffix' => 'setSuffix',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'exact' => 'getExact',
        'prefix' => 'getPrefix',
        'regex' => 'getRegex',
        'suffix' => 'getSuffix',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['exact'] = isset($data['exact']) ? $data['exact'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
    }

    /**
     * Gets exact
     * @return string
     */
    public function getExact()
    {
        return $this->container['exact'];
    }

    /**
     * Sets exact
     * @param string $exact
     * @return $this
     */
    public function setExact($exact)
    {
        $this->container['exact'] = $exact;

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
     * Gets regex
     * @return string
     */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
     * Sets regex
     * @param string $regex
     * @return $this
     */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;

        return $this;
    }


    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

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

