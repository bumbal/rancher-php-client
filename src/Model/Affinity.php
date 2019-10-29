<?php

namespace Rancher\Model;

use \ArrayAccess;

class Affinity implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'nodeAffinity' => '\Rancher\Model\NodeAffinity',
        'podAffinity' => '\Rancher\Model\PodAffinity',
        'podAntiAffinity' => '\Rancher\Model\PodAntiAffinity',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'nodeAffinity' => 'setNodeAffinity',
        'podAffinity' => 'setPodAffinity',
        'podAntiAffinity' => 'setPodAntiAffinity',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'nodeAffinity' => 'getNodeAffinity',
        'podAffinity' => 'getPodAffinity',
        'podAntiAffinity' => 'getPodAntiAffinity',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['nodeAffinity'] = isset($data['nodeAffinity']) ? $data['nodeAffinity'] : null;
        $this->container['podAffinity'] = isset($data['podAffinity']) ? $data['podAffinity'] : null;
        $this->container['podAntiAffinity'] = isset($data['podAntiAffinity']) ? $data['podAntiAffinity'] : null;
    }

    /**
     * Gets nodeAffinity
     * @return \Rancher\Model\NodeAffinity
     */
    public function getNodeAffinity()
    {
        return $this->container['nodeAffinity'];
    }

    /**
     * Sets nodeAffinity
     * @param \Rancher\Model\NodeAffinity $nodeAffinity
     * @return $this
     */
    public function setNodeAffinity($nodeAffinity)
    {
        $this->container['nodeAffinity'] = $nodeAffinity;

        return $this;
    }


    /**
     * Gets podAffinity
     * @return \Rancher\Model\PodAffinity
     */
    public function getPodAffinity()
    {
        return $this->container['podAffinity'];
    }

    /**
     * Sets podAffinity
     * @param \Rancher\Model\PodAffinity $podAffinity
     * @return $this
     */
    public function setPodAffinity($podAffinity)
    {
        $this->container['podAffinity'] = $podAffinity;

        return $this;
    }


    /**
     * Gets podAntiAffinity
     * @return \Rancher\Model\PodAntiAffinity
     */
    public function getPodAntiAffinity()
    {
        return $this->container['podAntiAffinity'];
    }

    /**
     * Sets podAntiAffinity
     * @param \Rancher\Model\PodAntiAffinity $podAntiAffinity
     * @return $this
     */
    public function setPodAntiAffinity($podAntiAffinity)
    {
        $this->container['podAntiAffinity'] = $podAntiAffinity;

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

