<?php

/**
 * HttpMatchRequestModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HttpMatchRequestModel implements ArrayAccess
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
        'authority',
        'gateways',
        'headers',
        'method',
        'port',
        'scheme',
        'sourceLabels',
        'uri',
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
        'authority',
        'gateways',
        'headers',
        'method',
        'port',
        'scheme',
        'sourceLabels',
        'uri',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'authority' => '\Rancher\Model\StringMatchModel',
        'gateways' => 'string[]',
        'headers' => 'map[string,\Rancher\Model\StringMatchModel]',
        'method' => '\Rancher\Model\StringMatchModel',
        'port' => 'int',
        'scheme' => '\Rancher\Model\StringMatchModel',
        'sourceLabels' => 'map[string,string]',
        'uri' => '\Rancher\Model\StringMatchModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'authority' => 'setAuthority',
        'gateways' => 'setGateways',
        'headers' => 'setHeaders',
        'method' => 'setMethod',
        'port' => 'setPort',
        'scheme' => 'setScheme',
        'sourceLabels' => 'setSourceLabels',
        'uri' => 'setUri',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'authority' => 'getAuthority',
        'gateways' => 'getGateways',
        'headers' => 'getHeaders',
        'method' => 'getMethod',
        'port' => 'getPort',
        'scheme' => 'getScheme',
        'sourceLabels' => 'getSourceLabels',
        'uri' => 'getUri',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['authority'] = isset($data['authority']) ? $data['authority'] : null;
        $this->container['gateways'] = isset($data['gateways']) ? $data['gateways'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['sourceLabels'] = isset($data['sourceLabels']) ? $data['sourceLabels'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
    }

    /**
     * Gets authority
     * @return \Rancher\Model\StringMatchModel
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     * @param \Rancher\Model\StringMatchModel $authority
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }


    /**
     * Gets gateways
     * @return string[]
     */
    public function getGateways()
    {
        return $this->container['gateways'];
    }

    /**
     * Sets gateways
     * @param string[] $gateways
     * @return $this
     */
    public function setGateways($gateways)
    {
        $this->container['gateways'] = $gateways;

        return $this;
    }


    /**
     * Gets headers
     * @return \Rancher\Model\StringMatchModel[]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     * @param \Rancher\Model\StringMatchModel[] $headers
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets method
     * @return \Rancher\Model\StringMatchModel
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param \Rancher\Model\StringMatchModel $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }


    /**
     * Gets port
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }


    /**
     * Gets scheme
     * @return \Rancher\Model\StringMatchModel
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     * @param \Rancher\Model\StringMatchModel $scheme
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }


    /**
     * Gets sourceLabels
     * @return string[]
     */
    public function getSourceLabels()
    {
        return $this->container['sourceLabels'];
    }

    /**
     * Sets sourceLabels
     * @param string[] $sourceLabels
     * @return $this
     */
    public function setSourceLabels($sourceLabels)
    {
        $this->container['sourceLabels'] = $sourceLabels;

        return $this;
    }


    /**
     * Gets uri
     * @return \Rancher\Model\StringMatchModel
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     * @param \Rancher\Model\StringMatchModel $uri
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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

