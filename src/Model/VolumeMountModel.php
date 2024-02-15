<?php

/**
 * VolumeMountModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class VolumeMountModel implements ArrayAccess
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
        'mountPath',
        'mountPropagation',
        'name',
        'readOnly',
        'subPath',
        'subPathExpr',
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
        'mountPath',
        'mountPropagation',
        'name',
        'readOnly',
        'subPath',
        'subPathExpr',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'mountPath' => 'string',
        'mountPropagation' => 'string',
        'name' => 'string',
        'readOnly' => 'boolean',
        'subPath' => 'string',
        'subPathExpr' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'mountPath' => 'setMountPath',
        'mountPropagation' => 'setMountPropagation',
        'name' => 'setName',
        'readOnly' => 'setReadOnly',
        'subPath' => 'setSubPath',
        'subPathExpr' => 'setSubPathExpr',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'mountPath' => 'getMountPath',
        'mountPropagation' => 'getMountPropagation',
        'name' => 'getName',
        'readOnly' => 'getReadOnly',
        'subPath' => 'getSubPath',
        'subPathExpr' => 'getSubPathExpr',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['mountPropagation'] = isset($data['mountPropagation']) ? $data['mountPropagation'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['subPath'] = isset($data['subPath']) ? $data['subPath'] : null;
        $this->container['subPathExpr'] = isset($data['subPathExpr']) ? $data['subPathExpr'] : null;
    }

    /**
     * Gets mountPath
     * @return string
     */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
     * Sets mountPath
     * @param string $mountPath
     * @return $this
     */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;

        return $this;
    }


    /**
     * Gets mountPropagation
     * @return string
     */
    public function getMountPropagation()
    {
        return $this->container['mountPropagation'];
    }

    /**
     * Sets mountPropagation
     * @param string $mountPropagation
     * @return $this
     */
    public function setMountPropagation($mountPropagation)
    {
        $this->container['mountPropagation'] = $mountPropagation;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets subPath
     * @return string
     */
    public function getSubPath()
    {
        return $this->container['subPath'];
    }

    /**
     * Sets subPath
     * @param string $subPath
     * @return $this
     */
    public function setSubPath($subPath)
    {
        $this->container['subPath'] = $subPath;

        return $this;
    }


    /**
     * Gets subPathExpr
     * @return string
     */
    public function getSubPathExpr()
    {
        return $this->container['subPathExpr'];
    }

    /**
     * Sets subPathExpr
     * @param string $subPathExpr
     * @return $this
     */
    public function setSubPathExpr($subPathExpr)
    {
        $this->container['subPathExpr'] = $subPathExpr;

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

