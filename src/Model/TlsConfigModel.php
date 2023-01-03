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

    /**
     * Properties that can be created
     *
     * @var array
     */
    protected static $canBeCreated = [
        'ca',
        'caFile',
        'cert',
        'certFile',
        'insecureSkipVerify',
        'keyFile',
        'keySecret',
        'serverName',
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
        'ca',
        'caFile',
        'cert',
        'certFile',
        'insecureSkipVerify',
        'keyFile',
        'keySecret',
        'serverName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'ca' => '\Rancher\Model\SecretOrConfigMapModel',
        'caFile' => 'string',
        'cert' => '\Rancher\Model\SecretOrConfigMapModel',
        'certFile' => 'string',
        'insecureSkipVerify' => 'boolean',
        'keyFile' => 'string',
        'keySecret' => '\Rancher\Model\SecretKeySelectorModel',
        'serverName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ca' => 'setCa',
        'caFile' => 'setCaFile',
        'cert' => 'setCert',
        'certFile' => 'setCertFile',
        'insecureSkipVerify' => 'setInsecureSkipVerify',
        'keyFile' => 'setKeyFile',
        'keySecret' => 'setKeySecret',
        'serverName' => 'setServerName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ca' => 'getCa',
        'caFile' => 'getCaFile',
        'cert' => 'getCert',
        'certFile' => 'getCertFile',
        'insecureSkipVerify' => 'getInsecureSkipVerify',
        'keyFile' => 'getKeyFile',
        'keySecret' => 'getKeySecret',
        'serverName' => 'getServerName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ca'] = isset($data['ca']) ? $data['ca'] : null;
        $this->container['caFile'] = isset($data['caFile']) ? $data['caFile'] : null;
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['certFile'] = isset($data['certFile']) ? $data['certFile'] : null;
        $this->container['insecureSkipVerify'] = isset($data['insecureSkipVerify']) ? $data['insecureSkipVerify'] : null;
        $this->container['keyFile'] = isset($data['keyFile']) ? $data['keyFile'] : null;
        $this->container['keySecret'] = isset($data['keySecret']) ? $data['keySecret'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
    }

    /**
     * Gets ca
     * @return \Rancher\Model\SecretOrConfigMapModel
     */
    public function getCa()
    {
        return $this->container['ca'];
    }

    /**
     * Sets ca
     * @param \Rancher\Model\SecretOrConfigMapModel $ca
     * @return $this
     */
    public function setCa($ca)
    {
        $this->container['ca'] = $ca;

        return $this;
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
     * Gets cert
     * @return \Rancher\Model\SecretOrConfigMapModel
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     * @param \Rancher\Model\SecretOrConfigMapModel $cert
     * @return $this
     */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;

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
     * Gets keySecret
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getKeySecret()
    {
        return $this->container['keySecret'];
    }

    /**
     * Sets keySecret
     * @param \Rancher\Model\SecretKeySelectorModel $keySecret
     * @return $this
     */
    public function setKeySecret($keySecret)
    {
        $this->container['keySecret'] = $keySecret;

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

