<?php

/**
 * AwsCloudProviderModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AwsCloudProviderModel implements ArrayAccess
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
        'global',
        'serviceOverride',
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
        'global',
        'serviceOverride',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'global' => '\Rancher\Model\GlobalAwsOptsModel',
        'serviceOverride' => 'map[\Rancher\Model\ServiceOverrideModel]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'global' => 'setGlobal',
        'serviceOverride' => 'setServiceOverride',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'global' => 'getGlobal',
        'serviceOverride' => 'getServiceOverride',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
        $this->container['serviceOverride'] = isset($data['serviceOverride']) ? $data['serviceOverride'] : null;
    }

    /**
     * Gets global
     * @return \Rancher\Model\GlobalAwsOptsModel
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     * @param \Rancher\Model\GlobalAwsOptsModel $global
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }


    /**
     * Gets serviceOverride
     * @return \Rancher\Model\ServiceOverrideModel[]
     */
    public function getServiceOverride()
    {
        return $this->container['serviceOverride'];
    }

    /**
     * Sets serviceOverride
     * @param \Rancher\Model\ServiceOverrideModel[] $serviceOverride
     * @return $this
     */
    public function setServiceOverride($serviceOverride)
    {
        $this->container['serviceOverride'] = $serviceOverride;

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

