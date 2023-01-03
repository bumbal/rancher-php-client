<?php

/**
 * ResourceFieldSelectorModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ResourceFieldSelectorModel implements ArrayAccess
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
        'containerName',
        'divisor',
        'resource',
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
        'containerName',
        'divisor',
        'resource',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'containerName' => 'string',
        'divisor' => 'string',
        'resource' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'containerName' => 'setContainerName',
        'divisor' => 'setDivisor',
        'resource' => 'setResource',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'containerName' => 'getContainerName',
        'divisor' => 'getDivisor',
        'resource' => 'getResource',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['divisor'] = isset($data['divisor']) ? $data['divisor'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
    }

    /**
     * Gets containerName
     * @return string
     */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
     * Sets containerName
     * @param string $containerName
     * @return $this
     */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;

        return $this;
    }


    /**
     * Gets divisor
     * @return string
     */
    public function getDivisor()
    {
        return $this->container['divisor'];
    }

    /**
     * Sets divisor
     * @param string $divisor
     * @return $this
     */
    public function setDivisor($divisor)
    {
        $this->container['divisor'] = $divisor;

        return $this;
    }


    /**
     * Gets resource
     * @return string
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     * @param string $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

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

