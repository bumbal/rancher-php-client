<?php

/**
 * EnvironmentFromModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EnvironmentFromModel implements ArrayAccess
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
        'optional',
        'prefix',
        'source',
        'sourceKey',
        'sourceName',
        'targetKey',
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
        'optional',
        'prefix',
        'source',
        'sourceKey',
        'sourceName',
        'targetKey',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'optional' => 'boolean',
        'prefix' => 'string',
        'source' => 'string',
        'sourceKey' => 'string',
        'sourceName' => 'string',
        'targetKey' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'optional' => 'setOptional',
        'prefix' => 'setPrefix',
        'source' => 'setSource',
        'sourceKey' => 'setSourceKey',
        'sourceName' => 'setSourceName',
        'targetKey' => 'setTargetKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'optional' => 'getOptional',
        'prefix' => 'getPrefix',
        'source' => 'getSource',
        'sourceKey' => 'getSourceKey',
        'sourceName' => 'getSourceName',
        'targetKey' => 'getTargetKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceKey'] = isset($data['sourceKey']) ? $data['sourceKey'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['targetKey'] = isset($data['targetKey']) ? $data['targetKey'] : null;
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
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }


    /**
     * Gets sourceKey
     * @return string
     */
    public function getSourceKey()
    {
        return $this->container['sourceKey'];
    }

    /**
     * Sets sourceKey
     * @param string $sourceKey
     * @return $this
     */
    public function setSourceKey($sourceKey)
    {
        $this->container['sourceKey'] = $sourceKey;

        return $this;
    }


    /**
     * Gets sourceName
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
     * Sets sourceName
     * @param string $sourceName
     * @return $this
     */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;

        return $this;
    }


    /**
     * Gets targetKey
     * @return string
     */
    public function getTargetKey()
    {
        return $this->container['targetKey'];
    }

    /**
     * Sets targetKey
     * @param string $targetKey
     * @return $this
     */
    public function setTargetKey($targetKey)
    {
        $this->container['targetKey'] = $targetKey;

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

