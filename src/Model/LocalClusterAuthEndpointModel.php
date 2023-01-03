<?php

/**
 * LocalClusterAuthEndpointModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LocalClusterAuthEndpointModel implements ArrayAccess
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
        'caCerts',
        'enabled',
        'fqdn',
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
        'caCerts',
        'enabled',
        'fqdn',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'caCerts' => 'string',
        'enabled' => 'boolean',
        'fqdn' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'caCerts' => 'setCaCerts',
        'enabled' => 'setEnabled',
        'fqdn' => 'setFqdn',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'caCerts' => 'getCaCerts',
        'enabled' => 'getEnabled',
        'fqdn' => 'getFqdn',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['caCerts'] = isset($data['caCerts']) ? $data['caCerts'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['fqdn'] = isset($data['fqdn']) ? $data['fqdn'] : null;
    }

    /**
     * Gets caCerts
     * @return string
     */
    public function getCaCerts()
    {
        return $this->container['caCerts'];
    }

    /**
     * Sets caCerts
     * @param string $caCerts
     * @return $this
     */
    public function setCaCerts($caCerts)
    {
        $this->container['caCerts'] = $caCerts;

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
     * Gets fqdn
     * @return string
     */
    public function getFqdn()
    {
        return $this->container['fqdn'];
    }

    /**
     * Sets fqdn
     * @param string $fqdn
     * @return $this
     */
    public function setFqdn($fqdn)
    {
        $this->container['fqdn'] = $fqdn;

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

