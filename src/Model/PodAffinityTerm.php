<?php

namespace Rancher\Model;

use \ArrayAccess;

class PodAffinityTerm implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'labelSelector' => '\Rancher\Model\LabelSelector',
        'namespaces' => 'string[]',
        'topologyKey' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'labelSelector' => 'setLabelSelector',
        'namespaces' => 'setNamespaces',
        'topologyKey' => 'setTopologyKey',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'labelSelector' => 'getLabelSelector',
        'namespaces' => 'getNamespaces',
        'topologyKey' => 'getTopologyKey',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['labelSelector'] = isset($data['labelSelector']) ? $data['labelSelector'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
        $this->container['topologyKey'] = isset($data['topologyKey']) ? $data['topologyKey'] : null;
    }

    /**
     * Gets labelSelector
     * @return \Rancher\Model\LabelSelector
     */
    public function getLabelSelector()
    {
        return $this->container['labelSelector'];
    }

    /**
     * Sets labelSelector
     * @param \Rancher\Model\LabelSelector $labelSelector
     * @return $this
     */
    public function setLabelSelector($labelSelector)
    {
        $this->container['labelSelector'] = $labelSelector;

        return $this;
    }


    /**
     * Gets namespaces
     * @return string[]
     */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
     * Sets namespaces
     * @param string[] $namespaces
     * @return $this
     */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;

        return $this;
    }


    /**
     * Gets topologyKey
     * @return string
     */
    public function getTopologyKey()
    {
        return $this->container['topologyKey'];
    }

    /**
     * Sets topologyKey
     * @param string $topologyKey
     * @return $this
     */
    public function setTopologyKey($topologyKey)
    {
        $this->container['topologyKey'] = $topologyKey;

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

