<?php

/**
 * FluentForwarderConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class FluentForwarderConfigModel implements ArrayAccess
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
        'certificate',
        'compress',
        'enableTls',
        'fluentServers',
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
        'certificate',
        'compress',
        'enableTls',
        'fluentServers',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'certificate' => 'string',
        'compress' => 'boolean',
        'enableTls' => 'boolean',
        'fluentServers' => '\Rancher\Model\FluentServerModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'certificate' => 'setCertificate',
        'compress' => 'setCompress',
        'enableTls' => 'setEnableTls',
        'fluentServers' => 'setFluentServers',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'certificate' => 'getCertificate',
        'compress' => 'getCompress',
        'enableTls' => 'getEnableTls',
        'fluentServers' => 'getFluentServers',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['enableTls'] = isset($data['enableTls']) ? $data['enableTls'] : null;
        $this->container['fluentServers'] = isset($data['fluentServers']) ? $data['fluentServers'] : null;
    }

    /**
     * Gets certificate
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     * @param string $certificate
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }


    /**
     * Gets compress
     * @return boolean
     */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
     * Sets compress
     * @param boolean $compress
     * @return $this
     */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;

        return $this;
    }


    /**
     * Gets enableTls
     * @return boolean
     */
    public function getEnableTls()
    {
        return $this->container['enableTls'];
    }

    /**
     * Sets enableTls
     * @param boolean $enableTls
     * @return $this
     */
    public function setEnableTls($enableTls)
    {
        $this->container['enableTls'] = $enableTls;

        return $this;
    }


    /**
     * Gets fluentServers
     * @return \Rancher\Model\FluentServerModel[]
     */
    public function getFluentServers()
    {
        return $this->container['fluentServers'];
    }

    /**
     * Sets fluentServers
     * @param \Rancher\Model\FluentServerModel[] $fluentServers
     * @return $this
     */
    public function setFluentServers($fluentServers)
    {
        $this->container['fluentServers'] = $fluentServers;

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

