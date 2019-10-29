<?php

namespace Rancher\Model;

use \ArrayAccess;

class QueryProjectGraph implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'graphID' => 'string',
        'series' => '\Rancher\Model\Reference[timeSeries][]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'graphID' => 'setGraphID',
        'series' => 'setSeries',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'graphID' => 'getGraphID',
        'series' => 'getSeries',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['graphID'] = isset($data['graphID']) ? $data['graphID'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
    }

    /**
     * Gets graphID
     * @return string
     */
    public function getGraphID()
    {
        return $this->container['graphID'];
    }

    /**
     * Sets graphID
     * @param string $graphID
     * @return $this
     */
    public function setGraphID($graphID)
    {
        $this->container['graphID'] = $graphID;

        return $this;
    }


    /**
     * Gets series
     * @return \Rancher\Model\Reference[timeSeries][]
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     * @param \Rancher\Model\Reference[timeSeries][] $series
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

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

