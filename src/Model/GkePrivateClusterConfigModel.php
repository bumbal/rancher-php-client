<?php

/**
 * GkePrivateClusterConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkePrivateClusterConfigModel implements ArrayAccess
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
        'enablePrivateEndpoint',
        'enablePrivateNodes',
        'masterIpv4CidrBlock',
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
        'enablePrivateEndpoint',
        'enablePrivateNodes',
        'masterIpv4CidrBlock',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'enablePrivateEndpoint' => 'boolean',
        'enablePrivateNodes' => 'boolean',
        'masterIpv4CidrBlock' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'enablePrivateEndpoint' => 'setEnablePrivateEndpoint',
        'enablePrivateNodes' => 'setEnablePrivateNodes',
        'masterIpv4CidrBlock' => 'setMasterIpv4CidrBlock',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'enablePrivateEndpoint' => 'getEnablePrivateEndpoint',
        'enablePrivateNodes' => 'getEnablePrivateNodes',
        'masterIpv4CidrBlock' => 'getMasterIpv4CidrBlock',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['enablePrivateEndpoint'] = isset($data['enablePrivateEndpoint']) ? $data['enablePrivateEndpoint'] : null;
        $this->container['enablePrivateNodes'] = isset($data['enablePrivateNodes']) ? $data['enablePrivateNodes'] : null;
        $this->container['masterIpv4CidrBlock'] = isset($data['masterIpv4CidrBlock']) ? $data['masterIpv4CidrBlock'] : null;
    }

    /**
     * Gets enablePrivateEndpoint
     * @return boolean
     */
    public function getEnablePrivateEndpoint()
    {
        return $this->container['enablePrivateEndpoint'];
    }

    /**
     * Sets enablePrivateEndpoint
     * @param boolean $enablePrivateEndpoint
     * @return $this
     */
    public function setEnablePrivateEndpoint($enablePrivateEndpoint)
    {
        $this->container['enablePrivateEndpoint'] = $enablePrivateEndpoint;

        return $this;
    }


    /**
     * Gets enablePrivateNodes
     * @return boolean
     */
    public function getEnablePrivateNodes()
    {
        return $this->container['enablePrivateNodes'];
    }

    /**
     * Sets enablePrivateNodes
     * @param boolean $enablePrivateNodes
     * @return $this
     */
    public function setEnablePrivateNodes($enablePrivateNodes)
    {
        $this->container['enablePrivateNodes'] = $enablePrivateNodes;

        return $this;
    }


    /**
     * Gets masterIpv4CidrBlock
     * @return string
     */
    public function getMasterIpv4CidrBlock()
    {
        return $this->container['masterIpv4CidrBlock'];
    }

    /**
     * Sets masterIpv4CidrBlock
     * @param string $masterIpv4CidrBlock
     * @return $this
     */
    public function setMasterIpv4CidrBlock($masterIpv4CidrBlock)
    {
        $this->container['masterIpv4CidrBlock'] = $masterIpv4CidrBlock;

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

