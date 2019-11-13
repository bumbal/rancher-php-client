<?php

/**
 * BitbucketServerApplyInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class BitbucketServerApplyInputModel implements ArrayAccess
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
        'hostname',
        'oauthToken',
        'oauthVerifier',
        'redirectUrl',
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
        'hostname',
        'oauthToken',
        'oauthVerifier',
        'redirectUrl',
        'tls',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'hostname' => 'string',
        'oauthToken' => 'string',
        'oauthVerifier' => 'string',
        'redirectUrl' => 'string',
        'tls' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'hostname' => 'setHostname',
        'oauthToken' => 'setOauthToken',
        'oauthVerifier' => 'setOauthVerifier',
        'redirectUrl' => 'setRedirectUrl',
        'tls' => 'setTls',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'hostname' => 'getHostname',
        'oauthToken' => 'getOauthToken',
        'oauthVerifier' => 'getOauthVerifier',
        'redirectUrl' => 'getRedirectUrl',
        'tls' => 'getTls',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['oauthToken'] = isset($data['oauthToken']) ? $data['oauthToken'] : null;
        $this->container['oauthVerifier'] = isset($data['oauthVerifier']) ? $data['oauthVerifier'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
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
     * Gets oauthToken
     * @return string
     */
    public function getOauthToken()
    {
        return $this->container['oauthToken'];
    }

    /**
     * Sets oauthToken
     * @param string $oauthToken
     * @return $this
     */
    public function setOauthToken($oauthToken)
    {
        $this->container['oauthToken'] = $oauthToken;

        return $this;
    }


    /**
     * Gets oauthVerifier
     * @return string
     */
    public function getOauthVerifier()
    {
        return $this->container['oauthVerifier'];
    }

    /**
     * Sets oauthVerifier
     * @param string $oauthVerifier
     * @return $this
     */
    public function setOauthVerifier($oauthVerifier)
    {
        $this->container['oauthVerifier'] = $oauthVerifier;

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

