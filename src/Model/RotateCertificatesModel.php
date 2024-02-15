<?php

/**
 * RotateCertificatesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RotateCertificatesModel implements ArrayAccess
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
        'caCertificates',
        'services',
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
        'caCertificates',
        'services',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'caCertificates' => 'boolean',
        'services' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'caCertificates' => 'setCaCertificates',
        'services' => 'setServices',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'caCertificates' => 'getCaCertificates',
        'services' => 'getServices',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['caCertificates'] = isset($data['caCertificates']) ? $data['caCertificates'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
    }

    /**
     * Gets caCertificates
     * @return boolean
     */
    public function getCaCertificates()
    {
        return $this->container['caCertificates'];
    }

    /**
     * Sets caCertificates
     * @param boolean $caCertificates
     * @return $this
     */
    public function setCaCertificates($caCertificates)
    {
        $this->container['caCertificates'] = $caCertificates;

        return $this;
    }


    /**
     * Gets services
     * @return string
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param string $services
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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

