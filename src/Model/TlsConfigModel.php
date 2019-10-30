<?php

/**
 * TlsConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TlsConfigModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'caFile' => 'string',
        'certFile' => 'string',
        'insecureSkipVerify' => 'boolean',
        'keyFile' => 'string',
        'serverName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'caFile' => 'setCaFile',
        'certFile' => 'setCertFile',
        'insecureSkipVerify' => 'setInsecureSkipVerify',
        'keyFile' => 'setKeyFile',
        'serverName' => 'setServerName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'caFile' => 'getCaFile',
        'certFile' => 'getCertFile',
        'insecureSkipVerify' => 'getInsecureSkipVerify',
        'keyFile' => 'getKeyFile',
        'serverName' => 'getServerName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['caFile'] = isset($data['caFile']) ? $data['caFile'] : null;
        $this->container['certFile'] = isset($data['certFile']) ? $data['certFile'] : null;
        $this->container['insecureSkipVerify'] = isset($data['insecureSkipVerify']) ? $data['insecureSkipVerify'] : null;
        $this->container['keyFile'] = isset($data['keyFile']) ? $data['keyFile'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
    }

    /**
     * Gets caFile
     * @return string
     */
    public function getCaFile()
    {
        return $this->container['caFile'];
    }

    /**
     * Sets caFile
     * @param string $caFile
     * @return $this
     */
    public function setCaFile($caFile)
    {
        $this->container['caFile'] = $caFile;

        return $this;
    }


    /**
     * Gets certFile
     * @return string
     */
    public function getCertFile()
    {
        return $this->container['certFile'];
    }

    /**
     * Sets certFile
     * @param string $certFile
     * @return $this
     */
    public function setCertFile($certFile)
    {
        $this->container['certFile'] = $certFile;

        return $this;
    }


    /**
     * Gets insecureSkipVerify
     * @return boolean
     */
    public function getInsecureSkipVerify()
    {
        return $this->container['insecureSkipVerify'];
    }

    /**
     * Sets insecureSkipVerify
     * @param boolean $insecureSkipVerify
     * @return $this
     */
    public function setInsecureSkipVerify($insecureSkipVerify)
    {
        $this->container['insecureSkipVerify'] = $insecureSkipVerify;

        return $this;
    }


    /**
     * Gets keyFile
     * @return string
     */
    public function getKeyFile()
    {
        return $this->container['keyFile'];
    }

    /**
     * Sets keyFile
     * @param string $keyFile
     * @return $this
     */
    public function setKeyFile($keyFile)
    {
        $this->container['keyFile'] = $keyFile;

        return $this;
    }


    /**
     * Gets serverName
     * @return string
     */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
     * Sets serverName
     * @param string $serverName
     * @return $this
     */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;

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

