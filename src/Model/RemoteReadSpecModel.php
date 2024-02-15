<?php

/**
 * RemoteReadSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RemoteReadSpecModel implements ArrayAccess
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
        'authorization',
        'basicAuth',
        'bearerToken',
        'bearerTokenFile',
        'name',
        'oauth2',
        'proxyUrl',
        'readRecent',
        'remoteTimeout',
        'requiredMatchers',
        'tlsConfig',
        'url',
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
        'authorization',
        'basicAuth',
        'bearerToken',
        'bearerTokenFile',
        'name',
        'oauth2',
        'proxyUrl',
        'readRecent',
        'remoteTimeout',
        'requiredMatchers',
        'tlsConfig',
        'url',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'authorization' => '\Rancher\Model\AuthorizationModel',
        'basicAuth' => '\Rancher\Model\BasicAuthModel',
        'bearerToken' => 'string',
        'bearerTokenFile' => 'string',
        'name' => 'string',
        'oauth2' => '\Rancher\Model\OAuth2Model',
        'proxyUrl' => 'string',
        'readRecent' => 'boolean',
        'remoteTimeout' => 'string',
        'requiredMatchers' => 'map[string,string]',
        'tlsConfig' => '\Rancher\Model\TlsConfigModel',
        'url' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'authorization' => 'setAuthorization',
        'basicAuth' => 'setBasicAuth',
        'bearerToken' => 'setBearerToken',
        'bearerTokenFile' => 'setBearerTokenFile',
        'name' => 'setName',
        'oauth2' => 'setOauth2',
        'proxyUrl' => 'setProxyUrl',
        'readRecent' => 'setReadRecent',
        'remoteTimeout' => 'setRemoteTimeout',
        'requiredMatchers' => 'setRequiredMatchers',
        'tlsConfig' => 'setTlsConfig',
        'url' => 'setUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'authorization' => 'getAuthorization',
        'basicAuth' => 'getBasicAuth',
        'bearerToken' => 'getBearerToken',
        'bearerTokenFile' => 'getBearerTokenFile',
        'name' => 'getName',
        'oauth2' => 'getOauth2',
        'proxyUrl' => 'getProxyUrl',
        'readRecent' => 'getReadRecent',
        'remoteTimeout' => 'getRemoteTimeout',
        'requiredMatchers' => 'getRequiredMatchers',
        'tlsConfig' => 'getTlsConfig',
        'url' => 'getUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['basicAuth'] = isset($data['basicAuth']) ? $data['basicAuth'] : null;
        $this->container['bearerToken'] = isset($data['bearerToken']) ? $data['bearerToken'] : null;
        $this->container['bearerTokenFile'] = isset($data['bearerTokenFile']) ? $data['bearerTokenFile'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['oauth2'] = isset($data['oauth2']) ? $data['oauth2'] : null;
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['readRecent'] = isset($data['readRecent']) ? $data['readRecent'] : null;
        $this->container['remoteTimeout'] = isset($data['remoteTimeout']) ? $data['remoteTimeout'] : null;
        $this->container['requiredMatchers'] = isset($data['requiredMatchers']) ? $data['requiredMatchers'] : null;
        $this->container['tlsConfig'] = isset($data['tlsConfig']) ? $data['tlsConfig'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Gets authorization
     * @return \Rancher\Model\AuthorizationModel
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     * @param \Rancher\Model\AuthorizationModel $authorization
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }


    /**
     * Gets basicAuth
     * @return \Rancher\Model\BasicAuthModel
     */
    public function getBasicAuth()
    {
        return $this->container['basicAuth'];
    }

    /**
     * Sets basicAuth
     * @param \Rancher\Model\BasicAuthModel $basicAuth
     * @return $this
     */
    public function setBasicAuth($basicAuth)
    {
        $this->container['basicAuth'] = $basicAuth;

        return $this;
    }


    /**
     * Gets bearerToken
     * @return string
     */
    public function getBearerToken()
    {
        return $this->container['bearerToken'];
    }

    /**
     * Sets bearerToken
     * @param string $bearerToken
     * @return $this
     */
    public function setBearerToken($bearerToken)
    {
        $this->container['bearerToken'] = $bearerToken;

        return $this;
    }


    /**
     * Gets bearerTokenFile
     * @return string
     */
    public function getBearerTokenFile()
    {
        return $this->container['bearerTokenFile'];
    }

    /**
     * Sets bearerTokenFile
     * @param string $bearerTokenFile
     * @return $this
     */
    public function setBearerTokenFile($bearerTokenFile)
    {
        $this->container['bearerTokenFile'] = $bearerTokenFile;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets oauth2
     * @return \Rancher\Model\OAuth2Model
     */
    public function getOauth2()
    {
        return $this->container['oauth2'];
    }

    /**
     * Sets oauth2
     * @param \Rancher\Model\OAuth2Model $oauth2
     * @return $this
     */
    public function setOauth2($oauth2)
    {
        $this->container['oauth2'] = $oauth2;

        return $this;
    }


    /**
     * Gets proxyUrl
     * @return string
     */
    public function getProxyUrl()
    {
        return $this->container['proxyUrl'];
    }

    /**
     * Sets proxyUrl
     * @param string $proxyUrl
     * @return $this
     */
    public function setProxyUrl($proxyUrl)
    {
        $this->container['proxyUrl'] = $proxyUrl;

        return $this;
    }


    /**
     * Gets readRecent
     * @return boolean
     */
    public function getReadRecent()
    {
        return $this->container['readRecent'];
    }

    /**
     * Sets readRecent
     * @param boolean $readRecent
     * @return $this
     */
    public function setReadRecent($readRecent)
    {
        $this->container['readRecent'] = $readRecent;

        return $this;
    }


    /**
     * Gets remoteTimeout
     * @return string
     */
    public function getRemoteTimeout()
    {
        return $this->container['remoteTimeout'];
    }

    /**
     * Sets remoteTimeout
     * @param string $remoteTimeout
     * @return $this
     */
    public function setRemoteTimeout($remoteTimeout)
    {
        $this->container['remoteTimeout'] = $remoteTimeout;

        return $this;
    }


    /**
     * Gets requiredMatchers
     * @return string[]
     */
    public function getRequiredMatchers()
    {
        return $this->container['requiredMatchers'];
    }

    /**
     * Sets requiredMatchers
     * @param string[] $requiredMatchers
     * @return $this
     */
    public function setRequiredMatchers($requiredMatchers)
    {
        $this->container['requiredMatchers'] = $requiredMatchers;

        return $this;
    }


    /**
     * Gets tlsConfig
     * @return \Rancher\Model\TlsConfigModel
     */
    public function getTlsConfig()
    {
        return $this->container['tlsConfig'];
    }

    /**
     * Sets tlsConfig
     * @param \Rancher\Model\TlsConfigModel $tlsConfig
     * @return $this
     */
    public function setTlsConfig($tlsConfig)
    {
        $this->container['tlsConfig'] = $tlsConfig;

        return $this;
    }


    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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

