<?php

/**
 * SyslogConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SyslogConfigModel implements ArrayAccess
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
        'enableTls',
        'endpoint',
        'program',
        'protocol',
        'severity',
        'sslVerify',
        'token',
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
        'enableTls',
        'endpoint',
        'program',
        'protocol',
        'severity',
        'sslVerify',
        'token',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'certificate' => 'string',
        'clientCert' => 'string',
        'clientKey' => 'string',
        'enableTls' => 'boolean',
        'endpoint' => 'string',
        'program' => 'string',
        'protocol' => 'string',
        'severity' => 'string',
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
        'enableTls' => 'setEnableTls',
        'endpoint' => 'setEndpoint',
        'program' => 'setProgram',
        'protocol' => 'setProtocol',
        'severity' => 'setSeverity',
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
        'enableTls' => 'getEnableTls',
        'endpoint' => 'getEndpoint',
        'program' => 'getProgram',
        'protocol' => 'getProtocol',
        'severity' => 'getSeverity',
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
        $this->container['enableTls'] = isset($data['enableTls']) ? $data['enableTls'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
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
     * Gets program
     * @return string
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     * @param string $program
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }


    /**
     * Gets protocol
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     * @param string $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }


    /**
     * Gets severity
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     * @param string $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

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

