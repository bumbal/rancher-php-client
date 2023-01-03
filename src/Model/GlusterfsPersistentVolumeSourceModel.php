<?php

/**
 * GlusterfsPersistentVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GlusterfsPersistentVolumeSourceModel implements ArrayAccess
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
        'endpoints',
        'endpointsNamespace',
        'path',
        'readOnly',
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'endpoints' => 'string',
        'endpointsNamespace' => 'string',
        'path' => 'string',
        'readOnly' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'endpoints' => 'setEndpoints',
        'endpointsNamespace' => 'setEndpointsNamespace',
        'path' => 'setPath',
        'readOnly' => 'setReadOnly',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'endpoints' => 'getEndpoints',
        'endpointsNamespace' => 'getEndpointsNamespace',
        'path' => 'getPath',
        'readOnly' => 'getReadOnly',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['endpointsNamespace'] = isset($data['endpointsNamespace']) ? $data['endpointsNamespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
    }

    /**
     * Gets endpoints
     * @return string
     */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
     * Sets endpoints
     * @param string $endpoints
     * @return $this
     */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;

        return $this;
    }


    /**
     * Gets endpointsNamespace
     * @return string
     */
    public function getEndpointsNamespace()
    {
        return $this->container['endpointsNamespace'];
    }

    /**
     * Sets endpointsNamespace
     * @param string $endpointsNamespace
     * @return $this
     */
    public function setEndpointsNamespace($endpointsNamespace)
    {
        $this->container['endpointsNamespace'] = $endpointsNamespace;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets readOnly
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     * @param boolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

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

