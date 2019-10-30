<?php

/**
 * NodeSchedulingModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeSchedulingModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'nodeId' => 'string',
        'preferred' => 'string[]',
        'requireAll' => 'string[]',
        'requireAny' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'nodeId' => 'setNodeId',
        'preferred' => 'setPreferred',
        'requireAll' => 'setRequireAll',
        'requireAny' => 'setRequireAny',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'nodeId' => 'getNodeId',
        'preferred' => 'getPreferred',
        'requireAll' => 'getRequireAll',
        'requireAny' => 'getRequireAny',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['preferred'] = isset($data['preferred']) ? $data['preferred'] : null;
        $this->container['requireAll'] = isset($data['requireAll']) ? $data['requireAll'] : null;
        $this->container['requireAny'] = isset($data['requireAny']) ? $data['requireAny'] : null;
    }

    /**
     * Gets nodeId
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;

        return $this;
    }


    /**
     * Gets preferred
     * @return string[]
     */
    public function getPreferred()
    {
        return $this->container['preferred'];
    }

    /**
     * Sets preferred
     * @param string[] $preferred
     * @return $this
     */
    public function setPreferred($preferred)
    {
        $this->container['preferred'] = $preferred;

        return $this;
    }


    /**
     * Gets requireAll
     * @return string[]
     */
    public function getRequireAll()
    {
        return $this->container['requireAll'];
    }

    /**
     * Sets requireAll
     * @param string[] $requireAll
     * @return $this
     */
    public function setRequireAll($requireAll)
    {
        $this->container['requireAll'] = $requireAll;

        return $this;
    }


    /**
     * Gets requireAny
     * @return string[]
     */
    public function getRequireAny()
    {
        return $this->container['requireAny'];
    }

    /**
     * Sets requireAny
     * @param string[] $requireAny
     * @return $this
     */
    public function setRequireAny($requireAny)
    {
        $this->container['requireAny'] = $requireAny;

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

