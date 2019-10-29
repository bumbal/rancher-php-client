<?php

namespace Rancher\Model;

use \ArrayAccess;

class GithubApplyInput implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'clientId' => 'string',
        'clientSecret' => 'string',
        'code' => 'string',
        'hostname' => 'string',
        'inheritAuth' => 'boolean',
        'redirectUrl' => 'string',
        'tls' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'code' => 'setCode',
        'hostname' => 'setHostname',
        'inheritAuth' => 'setInheritAuth',
        'redirectUrl' => 'setRedirectUrl',
        'tls' => 'setTls',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'code' => 'getCode',
        'hostname' => 'getHostname',
        'inheritAuth' => 'getInheritAuth',
        'redirectUrl' => 'getRedirectUrl',
        'tls' => 'getTls',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['inheritAuth'] = isset($data['inheritAuth']) ? $data['inheritAuth'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
    }

    /**
     * Gets clientId
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }


    /**
     * Gets clientSecret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param string $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }


    /**
     * Gets hostname
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     * @param string $hostname
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }


    /**
     * Gets inheritAuth
     * @return boolean
     */
    public function getInheritAuth()
    {
        return $this->container['inheritAuth'];
    }

    /**
     * Sets inheritAuth
     * @param boolean $inheritAuth
     * @return $this
     */
    public function setInheritAuth($inheritAuth)
    {
        $this->container['inheritAuth'] = $inheritAuth;

        return $this;
    }


    /**
     * Gets redirectUrl
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     * @param string $redirectUrl
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }


    /**
     * Gets tls
     * @return boolean
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     * @param boolean $tls
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

