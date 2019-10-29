<?php

namespace Rancher\Model;

use \ArrayAccess;

class RemoteWriteSpec implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'basicAuth' => '\Rancher\Model\BasicAuth',
        'bearerToken' => 'string',
        'bearerTokenFile' => 'string',
        'proxyUrl' => 'string',
        'queueConfig' => '\Rancher\Model\QueueConfig',
        'remoteTimeout' => 'string',
        'tlsConfig' => '\Rancher\Model\TlsConfig',
        'url' => 'string',
        'writeRelabelConfigs' => '\Rancher\Model\RelabelConfig[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'basicAuth' => 'setBasicAuth',
        'bearerToken' => 'setBearerToken',
        'bearerTokenFile' => 'setBearerTokenFile',
        'proxyUrl' => 'setProxyUrl',
        'queueConfig' => 'setQueueConfig',
        'remoteTimeout' => 'setRemoteTimeout',
        'tlsConfig' => 'setTlsConfig',
        'url' => 'setUrl',
        'writeRelabelConfigs' => 'setWriteRelabelConfigs',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'basicAuth' => 'getBasicAuth',
        'bearerToken' => 'getBearerToken',
        'bearerTokenFile' => 'getBearerTokenFile',
        'proxyUrl' => 'getProxyUrl',
        'queueConfig' => 'getQueueConfig',
        'remoteTimeout' => 'getRemoteTimeout',
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
        $this->container['basicAuth'] = isset($data['basicAuth']) ? $data['basicAuth'] : null;
        $this->container['bearerToken'] = isset($data['bearerToken']) ? $data['bearerToken'] : null;
        $this->container['bearerTokenFile'] = isset($data['bearerTokenFile']) ? $data['bearerTokenFile'] : null;
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['queueConfig'] = isset($data['queueConfig']) ? $data['queueConfig'] : null;
        $this->container['remoteTimeout'] = isset($data['remoteTimeout']) ? $data['remoteTimeout'] : null;
        $this->container['tlsConfig'] = isset($data['tlsConfig']) ? $data['tlsConfig'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['writeRelabelConfigs'] = isset($data['writeRelabelConfigs']) ? $data['writeRelabelConfigs'] : null;
    }

    /**
     * Gets basicAuth
     * @return \Rancher\Model\BasicAuth
     */
    public function getBasicAuth()
    {
        return $this->container['basicAuth'];
    }

    /**
     * Sets basicAuth
     * @param \Rancher\Model\BasicAuth $basicAuth
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
     * @return \Rancher\Model\QueueConfig
     */
    public function getQueueConfig()
    {
        return $this->container['queueConfig'];
    }

    /**
     * Sets queueConfig
     * @param \Rancher\Model\QueueConfig $queueConfig
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
     * Gets tlsConfig
     * @return \Rancher\Model\TlsConfig
     */
    public function getTlsConfig()
    {
        return $this->container['tlsConfig'];
    }

    /**
     * Sets tlsConfig
     * @param \Rancher\Model\TlsConfig $tlsConfig
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
     * @return \Rancher\Model\RelabelConfig[]
     */
    public function getWriteRelabelConfigs()
    {
        return $this->container['writeRelabelConfigs'];
    }

    /**
     * Sets writeRelabelConfigs
     * @param \Rancher\Model\RelabelConfig[] $writeRelabelConfigs
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

