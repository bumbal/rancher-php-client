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
        'clientCert',
        'clientKey',
        'clientKeyPass',
        'compress',
        'enableTls',
        'fluentServers',
        'sslVerify',
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
        'clientCert',
        'clientKey',
        'clientKeyPass',
        'compress',
        'enableTls',
        'fluentServers',
        'sslVerify',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'certificate' => 'string',
        'clientCert' => 'string',
        'clientKey' => 'string',
        'clientKeyPass' => 'string',
        'compress' => 'boolean',
        'enableTls' => 'boolean',
        'fluentServers' => '\Rancher\Model\FluentServerModel[]',
        'sslVerify' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'certificate' => 'setCertificate',
        'clientCert' => 'setClientCert',
        'clientKey' => 'setClientKey',
        'clientKeyPass' => 'setClientKeyPass',
        'compress' => 'setCompress',
        'enableTls' => 'setEnableTls',
        'fluentServers' => 'setFluentServers',
        'sslVerify' => 'setSslVerify',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'certificate' => 'getCertificate',
        'clientCert' => 'getClientCert',
        'clientKey' => 'getClientKey',
        'clientKeyPass' => 'getClientKeyPass',
        'compress' => 'getCompress',
        'enableTls' => 'getEnableTls',
        'fluentServers' => 'getFluentServers',
        'sslVerify' => 'getSslVerify',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['clientCert'] = isset($data['clientCert']) ? $data['clientCert'] : null;
        $this->container['clientKey'] = isset($data['clientKey']) ? $data['clientKey'] : null;
        $this->container['clientKeyPass'] = isset($data['clientKeyPass']) ? $data['clientKeyPass'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['enableTls'] = isset($data['enableTls']) ? $data['enableTls'] : null;
        $this->container['fluentServers'] = isset($data['fluentServers']) ? $data['fluentServers'] : null;
        $this->container['sslVerify'] = isset($data['sslVerify']) ? $data['sslVerify'] : null;
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
     * Gets clientCert
     * @return string
     */
    public function getClientCert()
    {
        return $this->container['clientCert'];
    }

    /**
     * Sets clientCert
     * @param string $clientCert
     * @return $this
     */
    public function setClientCert($clientCert)
    {
        $this->container['clientCert'] = $clientCert;

        return $this;
    }


    /**
     * Gets clientKey
     * @return string
     */
    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    /**
     * Sets clientKey
     * @param string $clientKey
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->container['clientKey'] = $clientKey;

        return $this;
    }


    /**
     * Gets clientKeyPass
     * @return string
     */
    public function getClientKeyPass()
    {
        return $this->container['clientKeyPass'];
    }

    /**
     * Sets clientKeyPass
     * @param string $clientKeyPass
     * @return $this
     */
    public function setClientKeyPass($clientKeyPass)
    {
        $this->container['clientKeyPass'] = $clientKeyPass;

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
     * Gets sslVerify
     * @return boolean
     */
    public function getSslVerify()
    {
        return $this->container['sslVerify'];
    }

    /**
     * Sets sslVerify
     * @param boolean $sslVerify
     * @return $this
     */
    public function setSslVerify($sslVerify)
    {
        $this->container['sslVerify'] = $sslVerify;

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

