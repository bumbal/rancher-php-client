<?php

/**
 * SamlConfigTestInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SamlConfigTestInputModel implements ArrayAccess
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
        'finalRedirectUrl',
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
        'finalRedirectUrl',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'finalRedirectUrl' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'finalRedirectUrl' => 'setFinalRedirectUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'finalRedirectUrl' => 'getFinalRedirectUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['finalRedirectUrl'] = isset($data['finalRedirectUrl']) ? $data['finalRedirectUrl'] : null;
    }

    /**
     * Gets finalRedirectUrl
     * @return string
     */
    public function getFinalRedirectUrl()
    {
        return $this->container['finalRedirectUrl'];
    }

    /**
     * Sets finalRedirectUrl
     * @param string $finalRedirectUrl
     * @return $this
     */
    public function setFinalRedirectUrl($finalRedirectUrl)
    {
        $this->container['finalRedirectUrl'] = $finalRedirectUrl;

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

