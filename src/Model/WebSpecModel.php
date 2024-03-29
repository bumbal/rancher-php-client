<?php

/**
 * WebSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class WebSpecModel implements ArrayAccess
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
        'pageTitle',
        'tlsConfig',
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
        'pageTitle',
        'tlsConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'pageTitle' => 'string',
        'tlsConfig' => '\Rancher\Model\WebTLSConfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'pageTitle' => 'setPageTitle',
        'tlsConfig' => 'setTlsConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'pageTitle' => 'getPageTitle',
        'tlsConfig' => 'getTlsConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['pageTitle'] = isset($data['pageTitle']) ? $data['pageTitle'] : null;
        $this->container['tlsConfig'] = isset($data['tlsConfig']) ? $data['tlsConfig'] : null;
    }

    /**
     * Gets pageTitle
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['pageTitle'];
    }

    /**
     * Sets pageTitle
     * @param string $pageTitle
     * @return $this
     */
    public function setPageTitle($pageTitle)
    {
        $this->container['pageTitle'] = $pageTitle;

        return $this;
    }


    /**
     * Gets tlsConfig
     * @return \Rancher\Model\WebTLSConfigModel
     */
    public function getTlsConfig()
    {
        return $this->container['tlsConfig'];
    }

    /**
     * Sets tlsConfig
     * @param \Rancher\Model\WebTLSConfigModel $tlsConfig
     * @return $this
     */
    public function setTlsConfig($tlsConfig)
    {
        $this->container['tlsConfig'] = $tlsConfig;

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

