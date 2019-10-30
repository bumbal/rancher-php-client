<?php

/**
 * SplunkConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SplunkConfigModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'certificate' => 'string',
        'clientCert' => 'string',
        'clientKey' => 'string',
        'clientKeyPass' => 'string',
        'endpoint' => 'string',
        'index' => 'string',
        'source' => 'string',
        'sslVerify' => 'boolean',
        'token' => '\Rancher\Model\PasswordModel',
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
        'endpoint' => 'setEndpoint',
        'index' => 'setIndex',
        'source' => 'setSource',
        'sslVerify' => 'setSslVerify',
        'token' => 'setToken',
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
        'endpoint' => 'getEndpoint',
        'index' => 'getIndex',
        'source' => 'getSource',
        'sslVerify' => 'getSslVerify',
        'token' => 'getToken',
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sslVerify'] = isset($data['sslVerify']) ? $data['sslVerify'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
     * Gets endpoint
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }


    /**
     * Gets index
     * @return string
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     * @param string $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }


    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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
     * Gets token
     * @return \Rancher\Model\PasswordModel
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param \Rancher\Model\PasswordModel $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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

