<?php

namespace Rancher\Model;

use \ArrayAccess;

class PodDNSConfig implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'nameservers' => 'string[]',
        'options' => '\Rancher\Model\PodDNSConfigOption[]',
        'searches' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'nameservers' => 'setNameservers',
        'options' => 'setOptions',
        'searches' => 'setSearches',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'nameservers' => 'getNameservers',
        'options' => 'getOptions',
        'searches' => 'getSearches',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['nameservers'] = isset($data['nameservers']) ? $data['nameservers'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['searches'] = isset($data['searches']) ? $data['searches'] : null;
    }

    /**
     * Gets nameservers
     * @return string[]
     */
    public function getNameservers()
    {
        return $this->container['nameservers'];
    }

    /**
     * Sets nameservers
     * @param string[] $nameservers
     * @return $this
     */
    public function setNameservers($nameservers)
    {
        $this->container['nameservers'] = $nameservers;

        return $this;
    }


    /**
     * Gets options
     * @return \Rancher\Model\PodDNSConfigOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \Rancher\Model\PodDNSConfigOption[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }


    /**
     * Gets searches
     * @return string[]
     */
    public function getSearches()
    {
        return $this->container['searches'];
    }

    /**
     * Sets searches
     * @param string[] $searches
     * @return $this
     */
    public function setSearches($searches)
    {
        $this->container['searches'] = $searches;

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

