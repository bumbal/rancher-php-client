<?php

/**
 * NodelocalModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodelocalModel implements ArrayAccess
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
        'ipAddress',
        'nodeLocalDnsPriorityClassName',
        'nodeSelector',
        'updateStrategy',
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
        'ipAddress',
        'nodeLocalDnsPriorityClassName',
        'nodeSelector',
        'updateStrategy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'ipAddress' => 'string',
        'nodeLocalDnsPriorityClassName' => 'string',
        'nodeSelector' => 'map[string,string]',
        'updateStrategy' => '\Rancher\Model\DaemonSetUpdateStrategyModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ipAddress' => 'setIpAddress',
        'nodeLocalDnsPriorityClassName' => 'setNodeLocalDnsPriorityClassName',
        'nodeSelector' => 'setNodeSelector',
        'updateStrategy' => 'setUpdateStrategy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ipAddress' => 'getIpAddress',
        'nodeLocalDnsPriorityClassName' => 'getNodeLocalDnsPriorityClassName',
        'nodeSelector' => 'getNodeSelector',
        'updateStrategy' => 'getUpdateStrategy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['nodeLocalDnsPriorityClassName'] = isset($data['nodeLocalDnsPriorityClassName']) ? $data['nodeLocalDnsPriorityClassName'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['updateStrategy'] = isset($data['updateStrategy']) ? $data['updateStrategy'] : null;
    }

    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }


    /**
     * Gets nodeLocalDnsPriorityClassName
     * @return string
     */
    public function getNodeLocalDnsPriorityClassName()
    {
        return $this->container['nodeLocalDnsPriorityClassName'];
    }

    /**
     * Sets nodeLocalDnsPriorityClassName
     * @param string $nodeLocalDnsPriorityClassName
     * @return $this
     */
    public function setNodeLocalDnsPriorityClassName($nodeLocalDnsPriorityClassName)
    {
        $this->container['nodeLocalDnsPriorityClassName'] = $nodeLocalDnsPriorityClassName;

        return $this;
    }


    /**
     * Gets nodeSelector
     * @return string[]
     */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
     * Sets nodeSelector
     * @param string[] $nodeSelector
     * @return $this
     */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;

        return $this;
    }


    /**
     * Gets updateStrategy
     * @return \Rancher\Model\DaemonSetUpdateStrategyModel
     */
    public function getUpdateStrategy()
    {
        return $this->container['updateStrategy'];
    }

    /**
     * Sets updateStrategy
     * @param \Rancher\Model\DaemonSetUpdateStrategyModel $updateStrategy
     * @return $this
     */
    public function setUpdateStrategy($updateStrategy)
    {
        $this->container['updateStrategy'] = $updateStrategy;

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

