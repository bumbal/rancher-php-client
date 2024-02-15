<?php

/**
 * ResourceRequirementsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ResourceRequirementsModel implements ArrayAccess
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
        'claims',
        'limits',
        'requests',
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
        'claims',
        'limits',
        'requests',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'claims' => '\Rancher\Model\ResourceClaimModel[]',
        'limits' => 'map[string,string]',
        'requests' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'claims' => 'setClaims',
        'limits' => 'setLimits',
        'requests' => 'setRequests',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'claims' => 'getClaims',
        'limits' => 'getLimits',
        'requests' => 'getRequests',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['claims'] = isset($data['claims']) ? $data['claims'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['requests'] = isset($data['requests']) ? $data['requests'] : null;
    }

    /**
     * Gets claims
     * @return \Rancher\Model\ResourceClaimModel[]
     */
    public function getClaims()
    {
        return $this->container['claims'];
    }

    /**
     * Sets claims
     * @param \Rancher\Model\ResourceClaimModel[] $claims
     * @return $this
     */
    public function setClaims($claims)
    {
        $this->container['claims'] = $claims;

        return $this;
    }


    /**
     * Gets limits
     * @return string[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     * @param string[] $limits
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }


    /**
     * Gets requests
     * @return string[]
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     * @param string[] $requests
     * @return $this
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

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

