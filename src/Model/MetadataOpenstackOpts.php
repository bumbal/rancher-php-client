<?php

namespace Rancher\Model;

use \ArrayAccess;

class MetadataOpenstackOpts implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'request-timeout' => 'int',
        'search-order' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'request-timeout' => 'setRequest-timeout',
        'search-order' => 'setSearch-order',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'request-timeout' => 'getRequest-timeout',
        'search-order' => 'getSearch-order',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['request-timeout'] = isset($data['request-timeout']) ? $data['request-timeout'] : null;
        $this->container['search-order'] = isset($data['search-order']) ? $data['search-order'] : null;
    }

    /**
     * Gets request-timeout
     * @return int
     */
    public function getRequest-timeout()
    {
        return $this->container['request-timeout'];
    }

    /**
     * Sets request-timeout
     * @param int $request-timeout
     * @return $this
     */
    public function setRequest-timeout($request-timeout)
    {
        $this->container['request-timeout'] = $request-timeout;

        return $this;
    }


    /**
     * Gets search-order
     * @return string
     */
    public function getSearch-order()
    {
        return $this->container['search-order'];
    }

    /**
     * Sets search-order
     * @param string $search-order
     * @return $this
     */
    public function setSearch-order($search-order)
    {
        $this->container['search-order'] = $search-order;

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

