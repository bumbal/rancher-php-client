<?php

/**
 * DownwardAPIVolumeFileModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class DownwardAPIVolumeFileModel implements ArrayAccess
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
        'fieldRef',
        'mode',
        'path',
        'resourceFieldRef',
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
        'fieldRef',
        'mode',
        'path',
        'resourceFieldRef',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'fieldRef' => '\Rancher\Model\ObjectFieldSelectorModel',
        'mode' => 'int',
        'path' => 'string',
        'resourceFieldRef' => '\Rancher\Model\ResourceFieldSelectorModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fieldRef' => 'setFieldRef',
        'mode' => 'setMode',
        'path' => 'setPath',
        'resourceFieldRef' => 'setResourceFieldRef',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fieldRef' => 'getFieldRef',
        'mode' => 'getMode',
        'path' => 'getPath',
        'resourceFieldRef' => 'getResourceFieldRef',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fieldRef'] = isset($data['fieldRef']) ? $data['fieldRef'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['resourceFieldRef'] = isset($data['resourceFieldRef']) ? $data['resourceFieldRef'] : null;
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
     * Gets mode
     * @return int
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param int $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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

