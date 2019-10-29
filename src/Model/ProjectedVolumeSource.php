<?php

namespace Rancher\Model;

use \ArrayAccess;

class ProjectedVolumeSource implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'defaultMode' => 'int',
        'sources' => '\Rancher\Model\VolumeProjection[]',
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
     * @return \Rancher\Model\VolumeProjection[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     * @param \Rancher\Model\VolumeProjection[] $sources
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

