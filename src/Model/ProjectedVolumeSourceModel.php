<?php

/**
 * ProjectedVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProjectedVolumeSourceModel implements ArrayAccess
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
        'defaultMode',
        'sources',
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
        'defaultMode',
        'sources',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaultMode' => 'int',
        'sources' => '\Rancher\Model\VolumeProjectionModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaultMode' => 'setDefaultMode',
        'sources' => 'setSources',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaultMode' => 'getDefaultMode',
        'sources' => 'getSources',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaultMode'] = isset($data['defaultMode']) ? $data['defaultMode'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
    }

    /**
     * Gets defaultMode
     * @return int
     */
    public function getDefaultMode()
    {
        return $this->container['defaultMode'];
    }

    /**
     * Sets defaultMode
     * @param int $defaultMode
     * @return $this
     */
    public function setDefaultMode($defaultMode)
    {
        $this->container['defaultMode'] = $defaultMode;

        return $this;
    }


    /**
     * Gets sources
     * @return \Rancher\Model\VolumeProjectionModel[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     * @param \Rancher\Model\VolumeProjectionModel[] $sources
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

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

