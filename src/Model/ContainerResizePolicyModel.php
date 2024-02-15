<?php

/**
 * ContainerResizePolicyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ContainerResizePolicyModel implements ArrayAccess
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
        'resourceName',
        'restartPolicy',
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
        'resourceName',
        'restartPolicy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'resourceName' => 'string',
        'restartPolicy' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'resourceName' => 'setResourceName',
        'restartPolicy' => 'setRestartPolicy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'resourceName' => 'getResourceName',
        'restartPolicy' => 'getRestartPolicy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['restartPolicy'] = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
    }

    /**
     * Gets resourceName
     * @return string
     */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
     * Sets resourceName
     * @param string $resourceName
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;

        return $this;
    }


    /**
     * Gets restartPolicy
     * @return string
     */
    public function getRestartPolicy()
    {
        return $this->container['restartPolicy'];
    }

    /**
     * Sets restartPolicy
     * @param string $restartPolicy
     * @return $this
     */
    public function setRestartPolicy($restartPolicy)
    {
        $this->container['restartPolicy'] = $restartPolicy;

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

