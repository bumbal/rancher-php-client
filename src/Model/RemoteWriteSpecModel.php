<?php

/**
 * RemoteWriteSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RemoteWriteSpecModel implements ArrayAccess
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
        'headers',
        'metadataConfig',
        'name',
        'oauth2',
        'proxyUrl',
        'queueConfig',
        'remoteTimeout',
        'sendExemplars',
        'sigv4',
        'tlsConfig',
        'url',
        'writeRelabelConfigs',
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
        'headers',
        'metadataConfig',
        'name',
        'oauth2',
        'proxyUrl',
        'queueConfig',
        'remoteTimeout',
        'sendExemplars',
        'sigv4',
        'tlsConfig',
        'url',
        'writeRelabelConfigs',
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
        'headers' => 'map[string,string]',
        'metadataConfig' => '\Rancher\Model\MetadataConfigModel',
        'name' => 'string',
        'oauth2' => '\Rancher\Model\OAuth2Model',
        'proxyUrl' => 'string',
        'queueConfig' => '\Rancher\Model\QueueConfigModel',
        'remoteTimeout' => 'string',
        'sendExemplars' => 'boolean',
        'sigv4' => '\Rancher\Model\Sigv4Model',
        'tlsConfig' => '\Rancher\Model\TlsConfigModel',
        'url' => 'string',
        'writeRelabelConfigs' => '\Rancher\Model\RelabelConfigModel[]',
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
        'headers' => 'setHeaders',
        'metadataConfig' => 'setMetadataConfig',
        'name' => 'setName',
        'oauth2' => 'setOauth2',
        'proxyUrl' => 'setProxyUrl',
        'queueConfig' => 'setQueueConfig',
        'remoteTimeout' => 'setRemoteTimeout',
        'sendExemplars' => 'setSendExemplars',
        'sigv4' => 'setSigv4',
        'tlsConfig' => 'setTlsConfig',
        'url' => 'setUrl',
        'writeRelabelConfigs' => 'setWriteRelabelConfigs',
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
        'headers' => 'getHeaders',
        'metadataConfig' => 'getMetadataConfig',
        'name' => 'getName',
        'oauth2' => 'getOauth2',
        'proxyUrl' => 'getProxyUrl',
        'queueConfig' => 'getQueueConfig',
        'remoteTimeout' => 'getRemoteTimeout',
        'sendExemplars' => 'getSendExemplars',
        'sigv4' => 'getSigv4',
        'tlsConfig' => 'getTlsConfig',
        'url' => 'getUrl',
        'writeRelabelConfigs' => 'getWriteRelabelConfigs',
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
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['metadataConfig'] = isset($data['metadataConfig']) ? $data['metadataConfig'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['oauth2'] = isset($data['oauth2']) ? $data['oauth2'] : null;
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['queueConfig'] = isset($data['queueConfig']) ? $data['queueConfig'] : null;
        $this->container['remoteTimeout'] = isset($data['remoteTimeout']) ? $data['remoteTimeout'] : null;
        $this->container['sendExemplars'] = isset($data['sendExemplars']) ? $data['sendExemplars'] : null;
        $this->container['sigv4'] = isset($data['sigv4']) ? $data['sigv4'] : null;
        $this->container['tlsConfig'] = isset($data['tlsConfig']) ? $data['tlsConfig'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['writeRelabelConfigs'] = isset($data['writeRelabelConfigs']) ? $data['writeRelabelConfigs'] : null;
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
     * Gets headers
     * @return string[]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     * @param string[] $headers
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets metadataConfig
     * @return \Rancher\Model\MetadataConfigModel
     */
    public function getMetadataConfig()
    {
        return $this->container['metadataConfig'];
    }

    /**
     * Sets metadataConfig
     * @param \Rancher\Model\MetadataConfigModel $metadataConfig
     * @return $this
     */
    public function setMetadataConfig($metadataConfig)
    {
        $this->container['metadataConfig'] = $metadataConfig;

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
     * Gets queueConfig
     * @return \Rancher\Model\QueueConfigModel
     */
    public function getQueueConfig()
    {
        return $this->container['queueConfig'];
    }

    /**
     * Sets queueConfig
     * @param \Rancher\Model\QueueConfigModel $queueConfig
     * @return $this
     */
    public function setQueueConfig($queueConfig)
    {
        $this->container['queueConfig'] = $queueConfig;

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
     * Gets sendExemplars
     * @return boolean
     */
    public function getSendExemplars()
    {
        return $this->container['sendExemplars'];
    }

    /**
     * Sets sendExemplars
     * @param boolean $sendExemplars
     * @return $this
     */
    public function setSendExemplars($sendExemplars)
    {
        $this->container['sendExemplars'] = $sendExemplars;

        return $this;
    }


    /**
     * Gets sigv4
     * @return \Rancher\Model\Sigv4Model
     */
    public function getSigv4()
    {
        return $this->container['sigv4'];
    }

    /**
     * Sets sigv4
     * @param \Rancher\Model\Sigv4Model $sigv4
     * @return $this
     */
    public function setSigv4($sigv4)
    {
        $this->container['sigv4'] = $sigv4;

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
     * Gets writeRelabelConfigs
     * @return \Rancher\Model\RelabelConfigModel[]
     */
    public function getWriteRelabelConfigs()
    {
        return $this->container['writeRelabelConfigs'];
    }

    /**
     * Sets writeRelabelConfigs
     * @param \Rancher\Model\RelabelConfigModel[] $writeRelabelConfigs
     * @return $this
     */
    public function setWriteRelabelConfigs($writeRelabelConfigs)
    {
        $this->container['writeRelabelConfigs'] = $writeRelabelConfigs;

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

