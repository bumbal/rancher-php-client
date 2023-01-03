<?php

/**
 * HttpRouteModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HttpRouteModel implements ArrayAccess
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
        'appendHeaders',
        'corsPolicy',
        'fault',
        'headers',
        'match',
        'mirror',
        'redirect',
        'removeResponseHeaders',
        'retries',
        'rewrite',
        'route',
        'timeout',
        'websocketUpgrade',
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
        'appendHeaders',
        'corsPolicy',
        'fault',
        'headers',
        'match',
        'mirror',
        'redirect',
        'removeResponseHeaders',
        'retries',
        'rewrite',
        'route',
        'timeout',
        'websocketUpgrade',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'appendHeaders' => 'map[string,string]',
        'corsPolicy' => '\Rancher\Model\CorsPolicyModel',
        'fault' => '\Rancher\Model\HttpFaultInjectionModel',
        'headers' => '\Rancher\Model\HeadersModel',
        'match' => '\Rancher\Model\HttpMatchRequestModel[]',
        'mirror' => '\Rancher\Model\DestinationModel',
        'redirect' => '\Rancher\Model\HttpRedirectModel',
        'removeResponseHeaders' => 'map[string,string]',
        'retries' => '\Rancher\Model\HttpRetryModel',
        'rewrite' => '\Rancher\Model\HttpRewriteModel',
        'route' => '\Rancher\Model\HttpRouteDestinationModel[]',
        'timeout' => 'string',
        'websocketUpgrade' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'appendHeaders' => 'setAppendHeaders',
        'corsPolicy' => 'setCorsPolicy',
        'fault' => 'setFault',
        'headers' => 'setHeaders',
        'match' => 'setMatch',
        'mirror' => 'setMirror',
        'redirect' => 'setRedirect',
        'removeResponseHeaders' => 'setRemoveResponseHeaders',
        'retries' => 'setRetries',
        'rewrite' => 'setRewrite',
        'route' => 'setRoute',
        'timeout' => 'setTimeout',
        'websocketUpgrade' => 'setWebsocketUpgrade',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'appendHeaders' => 'getAppendHeaders',
        'corsPolicy' => 'getCorsPolicy',
        'fault' => 'getFault',
        'headers' => 'getHeaders',
        'match' => 'getMatch',
        'mirror' => 'getMirror',
        'redirect' => 'getRedirect',
        'removeResponseHeaders' => 'getRemoveResponseHeaders',
        'retries' => 'getRetries',
        'rewrite' => 'getRewrite',
        'route' => 'getRoute',
        'timeout' => 'getTimeout',
        'websocketUpgrade' => 'getWebsocketUpgrade',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['appendHeaders'] = isset($data['appendHeaders']) ? $data['appendHeaders'] : null;
        $this->container['corsPolicy'] = isset($data['corsPolicy']) ? $data['corsPolicy'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['mirror'] = isset($data['mirror']) ? $data['mirror'] : null;
        $this->container['redirect'] = isset($data['redirect']) ? $data['redirect'] : null;
        $this->container['removeResponseHeaders'] = isset($data['removeResponseHeaders']) ? $data['removeResponseHeaders'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['rewrite'] = isset($data['rewrite']) ? $data['rewrite'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['websocketUpgrade'] = isset($data['websocketUpgrade']) ? $data['websocketUpgrade'] : null;
    }

    /**
     * Gets appendHeaders
     * @return string[]
     */
    public function getAppendHeaders()
    {
        return $this->container['appendHeaders'];
    }

    /**
     * Sets appendHeaders
     * @param string[] $appendHeaders
     * @return $this
     */
    public function setAppendHeaders($appendHeaders)
    {
        $this->container['appendHeaders'] = $appendHeaders;

        return $this;
    }


    /**
     * Gets corsPolicy
     * @return \Rancher\Model\CorsPolicyModel
     */
    public function getCorsPolicy()
    {
        return $this->container['corsPolicy'];
    }

    /**
     * Sets corsPolicy
     * @param \Rancher\Model\CorsPolicyModel $corsPolicy
     * @return $this
     */
    public function setCorsPolicy($corsPolicy)
    {
        $this->container['corsPolicy'] = $corsPolicy;

        return $this;
    }


    /**
     * Gets fault
     * @return \Rancher\Model\HttpFaultInjectionModel
     */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
     * Sets fault
     * @param \Rancher\Model\HttpFaultInjectionModel $fault
     * @return $this
     */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;

        return $this;
    }


    /**
     * Gets headers
     * @return \Rancher\Model\HeadersModel
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     * @param \Rancher\Model\HeadersModel $headers
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets match
     * @return \Rancher\Model\HttpMatchRequestModel[]
     */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
     * Sets match
     * @param \Rancher\Model\HttpMatchRequestModel[] $match
     * @return $this
     */
    public function setMatch($match)
    {
        $this->container['match'] = $match;

        return $this;
    }


    /**
     * Gets mirror
     * @return \Rancher\Model\DestinationModel
     */
    public function getMirror()
    {
        return $this->container['mirror'];
    }

    /**
     * Sets mirror
     * @param \Rancher\Model\DestinationModel $mirror
     * @return $this
     */
    public function setMirror($mirror)
    {
        $this->container['mirror'] = $mirror;

        return $this;
    }


    /**
     * Gets redirect
     * @return \Rancher\Model\HttpRedirectModel
     */
    public function getRedirect()
    {
        return $this->container['redirect'];
    }

    /**
     * Sets redirect
     * @param \Rancher\Model\HttpRedirectModel $redirect
     * @return $this
     */
    public function setRedirect($redirect)
    {
        $this->container['redirect'] = $redirect;

        return $this;
    }


    /**
     * Gets removeResponseHeaders
     * @return string[]
     */
    public function getRemoveResponseHeaders()
    {
        return $this->container['removeResponseHeaders'];
    }

    /**
     * Sets removeResponseHeaders
     * @param string[] $removeResponseHeaders
     * @return $this
     */
    public function setRemoveResponseHeaders($removeResponseHeaders)
    {
        $this->container['removeResponseHeaders'] = $removeResponseHeaders;

        return $this;
    }


    /**
     * Gets retries
     * @return \Rancher\Model\HttpRetryModel
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     * @param \Rancher\Model\HttpRetryModel $retries
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }


    /**
     * Gets rewrite
     * @return \Rancher\Model\HttpRewriteModel
     */
    public function getRewrite()
    {
        return $this->container['rewrite'];
    }

    /**
     * Sets rewrite
     * @param \Rancher\Model\HttpRewriteModel $rewrite
     * @return $this
     */
    public function setRewrite($rewrite)
    {
        $this->container['rewrite'] = $rewrite;

        return $this;
    }


    /**
     * Gets route
     * @return \Rancher\Model\HttpRouteDestinationModel[]
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param \Rancher\Model\HttpRouteDestinationModel[] $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }


    /**
     * Gets timeout
     * @return string
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param string $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }


    /**
     * Gets websocketUpgrade
     * @return boolean
     */
    public function getWebsocketUpgrade()
    {
        return $this->container['websocketUpgrade'];
    }

    /**
     * Sets websocketUpgrade
     * @param boolean $websocketUpgrade
     * @return $this
     */
    public function setWebsocketUpgrade($websocketUpgrade)
    {
        $this->container['websocketUpgrade'] = $websocketUpgrade;

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

