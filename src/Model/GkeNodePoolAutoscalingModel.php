<?php

/**
 * GkeNodePoolAutoscalingModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeNodePoolAutoscalingModel implements ArrayAccess
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
        'enabled',
        'maxNodeCount',
        'minNodeCount',
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
        'enabled',
        'maxNodeCount',
        'minNodeCount',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'enabled' => 'boolean',
        'maxNodeCount' => 'int',
        'minNodeCount' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'enabled' => 'setEnabled',
        'maxNodeCount' => 'setMaxNodeCount',
        'minNodeCount' => 'setMinNodeCount',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'enabled' => 'getEnabled',
        'maxNodeCount' => 'getMaxNodeCount',
        'minNodeCount' => 'getMinNodeCount',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['maxNodeCount'] = isset($data['maxNodeCount']) ? $data['maxNodeCount'] : null;
        $this->container['minNodeCount'] = isset($data['minNodeCount']) ? $data['minNodeCount'] : null;
    }

    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets maxNodeCount
     * @return int
     */
    public function getMaxNodeCount()
    {
        return $this->container['maxNodeCount'];
    }

    /**
     * Sets maxNodeCount
     * @param int $maxNodeCount
     * @return $this
     */
    public function setMaxNodeCount($maxNodeCount)
    {
        $this->container['maxNodeCount'] = $maxNodeCount;

        return $this;
    }


    /**
     * Gets minNodeCount
     * @return int
     */
    public function getMinNodeCount()
    {
        return $this->container['minNodeCount'];
    }

    /**
     * Sets minNodeCount
     * @param int $minNodeCount
     * @return $this
     */
    public function setMinNodeCount($minNodeCount)
    {
        $this->container['minNodeCount'] = $minNodeCount;

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

