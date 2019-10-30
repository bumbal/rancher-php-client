<?php

/**
 * NodeSelectorModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeSelectorModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'nodeSelectorTerms' => '\Rancher\Model\NodeSelectorTermModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'nodeSelectorTerms' => 'setNodeSelectorTerms',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'nodeSelectorTerms' => 'getNodeSelectorTerms',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['nodeSelectorTerms'] = isset($data['nodeSelectorTerms']) ? $data['nodeSelectorTerms'] : null;
    }

    /**
     * Gets nodeSelectorTerms
     * @return \Rancher\Model\NodeSelectorTermModel[]
     */
    public function getNodeSelectorTerms()
    {
        return $this->container['nodeSelectorTerms'];
    }

    /**
     * Sets nodeSelectorTerms
     * @param \Rancher\Model\NodeSelectorTermModel[] $nodeSelectorTerms
     * @return $this
     */
    public function setNodeSelectorTerms($nodeSelectorTerms)
    {
        $this->container['nodeSelectorTerms'] = $nodeSelectorTerms;

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

