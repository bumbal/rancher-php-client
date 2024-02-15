<?php

/**
 * GkeMasterAuthorizedNetworksConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeMasterAuthorizedNetworksConfigModel implements ArrayAccess
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
        'cidrBlocks',
        'enabled',
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
        'cidrBlocks',
        'enabled',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'cidrBlocks' => '\Rancher\Model\GkeCidrBlockModel[]',
        'enabled' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cidrBlocks' => 'setCidrBlocks',
        'enabled' => 'setEnabled',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cidrBlocks' => 'getCidrBlocks',
        'enabled' => 'getEnabled',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cidrBlocks'] = isset($data['cidrBlocks']) ? $data['cidrBlocks'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * Gets cidrBlocks
     * @return \Rancher\Model\GkeCidrBlockModel[]
     */
    public function getCidrBlocks()
    {
        return $this->container['cidrBlocks'];
    }

    /**
     * Sets cidrBlocks
     * @param \Rancher\Model\GkeCidrBlockModel[] $cidrBlocks
     * @return $this
     */
    public function setCidrBlocks($cidrBlocks)
    {
        $this->container['cidrBlocks'] = $cidrBlocks;

        return $this;
    }


    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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

