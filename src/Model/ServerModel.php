<?php

/**
 * ServerModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ServerModel implements ArrayAccess
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
        'hosts',
        'port',
        'tls',
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
        'hosts',
        'port',
        'tls',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'hosts' => 'string[]',
        'port' => '\Rancher\Model\PortModel',
        'tls' => '\Rancher\Model\TlsOptionsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'hosts' => 'setHosts',
        'port' => 'setPort',
        'tls' => 'setTls',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'hosts' => 'getHosts',
        'port' => 'getPort',
        'tls' => 'getTls',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
    }

    /**
     * Gets hosts
     * @return string[]
     */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
     * Sets hosts
     * @param string[] $hosts
     * @return $this
     */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;

        return $this;
    }


    /**
     * Gets port
     * @return \Rancher\Model\PortModel
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param \Rancher\Model\PortModel $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }


    /**
     * Gets tls
     * @return \Rancher\Model\TlsOptionsModel
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     * @param \Rancher\Model\TlsOptionsModel $tls
     * @return $this
     */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;

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

