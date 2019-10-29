<?php

namespace Rancher\Model;

use \ArrayAccess;

class DownwardAPIVolumeFile implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'fieldRef' => '\Rancher\Model\ObjectFieldSelector',
        'mode' => 'int',
        'path' => 'string',
        'resourceFieldRef' => '\Rancher\Model\ResourceFieldSelector',
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
     * @return \Rancher\Model\ObjectFieldSelector
     */
    public function getFieldRef()
    {
        return $this->container['fieldRef'];
    }

    /**
     * Sets fieldRef
     * @param \Rancher\Model\ObjectFieldSelector $fieldRef
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
     * @return \Rancher\Model\ResourceFieldSelector
     */
    public function getResourceFieldRef()
    {
        return $this->container['resourceFieldRef'];
    }

    /**
     * Sets resourceFieldRef
     * @param \Rancher\Model\ResourceFieldSelector $resourceFieldRef
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

