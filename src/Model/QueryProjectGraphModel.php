<?php

/**
 * QueryProjectGraphModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class QueryProjectGraphModel implements ArrayAccess
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
        'graphID',
        'series',
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
        'graphID',
        'series',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'graphID' => 'string',
        'series' => 'string[]',
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
     * @return string[]
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     * @param string[] $series
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

