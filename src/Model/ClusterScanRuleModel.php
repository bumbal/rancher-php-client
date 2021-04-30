<?php

/**
 * ClusterScanRuleModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterScanRuleModel implements ArrayAccess
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
        'failuresOnly',
        'scanRunType',
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
        'failuresOnly',
        'scanRunType',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'failuresOnly' => 'boolean',
        'scanRunType' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'failuresOnly' => 'setFailuresOnly',
        'scanRunType' => 'setScanRunType',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'failuresOnly' => 'getFailuresOnly',
        'scanRunType' => 'getScanRunType',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['failuresOnly'] = isset($data['failuresOnly']) ? $data['failuresOnly'] : null;
        $this->container['scanRunType'] = isset($data['scanRunType']) ? $data['scanRunType'] : null;
    }

    /**
     * Gets failuresOnly
     * @return boolean
     */
    public function getFailuresOnly()
    {
        return $this->container['failuresOnly'];
    }

    /**
     * Sets failuresOnly
     * @param boolean $failuresOnly
     * @return $this
     */
    public function setFailuresOnly($failuresOnly)
    {
        $this->container['failuresOnly'] = $failuresOnly;

        return $this;
    }


    /**
     * Gets scanRunType
     * @return string
     */
    public function getScanRunType()
    {
        return $this->container['scanRunType'];
    }

    /**
     * Sets scanRunType
     * @param string $scanRunType
     * @return $this
     */
    public function setScanRunType($scanRunType)
    {
        $this->container['scanRunType'] = $scanRunType;

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

