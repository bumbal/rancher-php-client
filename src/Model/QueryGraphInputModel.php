<?php

/**
 * QueryGraphInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class QueryGraphInputModel implements ArrayAccess
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
        'filters',
        'from',
        'interval',
        'isDetails',
        'metricParams',
        'to',
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
        'filters',
        'from',
        'interval',
        'isDetails',
        'metricParams',
        'to',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'filters' => 'map[string]',
        'from' => 'string',
        'interval' => 'string',
        'isDetails' => 'boolean',
        'metricParams' => 'map[string]',
        'to' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'filters' => 'setFilters',
        'from' => 'setFrom',
        'interval' => 'setInterval',
        'isDetails' => 'setIsDetails',
        'metricParams' => 'setMetricParams',
        'to' => 'setTo',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'filters' => 'getFilters',
        'from' => 'getFrom',
        'interval' => 'getInterval',
        'isDetails' => 'getIsDetails',
        'metricParams' => 'getMetricParams',
        'to' => 'getTo',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['isDetails'] = isset($data['isDetails']) ? $data['isDetails'] : null;
        $this->container['metricParams'] = isset($data['metricParams']) ? $data['metricParams'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
     * Gets filters
     * @return string[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param string[] $filters
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }


    /**
     * Gets from
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param string $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }


    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }


    /**
     * Gets isDetails
     * @return boolean
     */
    public function getIsDetails()
    {
        return $this->container['isDetails'];
    }

    /**
     * Sets isDetails
     * @param boolean $isDetails
     * @return $this
     */
    public function setIsDetails($isDetails)
    {
        $this->container['isDetails'] = $isDetails;

        return $this;
    }


    /**
     * Gets metricParams
     * @return string[]
     */
    public function getMetricParams()
    {
        return $this->container['metricParams'];
    }

    /**
     * Sets metricParams
     * @param string[] $metricParams
     * @return $this
     */
    public function setMetricParams($metricParams)
    {
        $this->container['metricParams'] = $metricParams;

        return $this;
    }


    /**
     * Gets to
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param string $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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

