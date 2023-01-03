<?php

/**
 * EndpointModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EndpointModel implements ArrayAccess
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
        'bearerTokenSecret',
        'honorTimestamps',
        'interval',
        'params',
        'path',
        'relabelings',
        'scheme',
        'scrapeTimeout',
        'targetPort',
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
        'bearerTokenSecret',
        'honorTimestamps',
        'interval',
        'params',
        'path',
        'relabelings',
        'scheme',
        'scrapeTimeout',
        'targetPort',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'bearerTokenSecret' => '\Rancher\Model\SecretKeySelectorModel',
        'honorTimestamps' => 'boolean',
        'interval' => 'string',
        'params' => 'map[string,\Rancher\Model\Array[string]Model]',
        'path' => 'string',
        'relabelings' => '\Rancher\Model\RelabelConfigModel[]',
        'scheme' => 'string',
        'scrapeTimeout' => 'string',
        'targetPort' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'bearerTokenSecret' => 'setBearerTokenSecret',
        'honorTimestamps' => 'setHonorTimestamps',
        'interval' => 'setInterval',
        'params' => 'setParams',
        'path' => 'setPath',
        'relabelings' => 'setRelabelings',
        'scheme' => 'setScheme',
        'scrapeTimeout' => 'setScrapeTimeout',
        'targetPort' => 'setTargetPort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'bearerTokenSecret' => 'getBearerTokenSecret',
        'honorTimestamps' => 'getHonorTimestamps',
        'interval' => 'getInterval',
        'params' => 'getParams',
        'path' => 'getPath',
        'relabelings' => 'getRelabelings',
        'scheme' => 'getScheme',
        'scrapeTimeout' => 'getScrapeTimeout',
        'targetPort' => 'getTargetPort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['bearerTokenSecret'] = isset($data['bearerTokenSecret']) ? $data['bearerTokenSecret'] : null;
        $this->container['honorTimestamps'] = isset($data['honorTimestamps']) ? $data['honorTimestamps'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['relabelings'] = isset($data['relabelings']) ? $data['relabelings'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['scrapeTimeout'] = isset($data['scrapeTimeout']) ? $data['scrapeTimeout'] : null;
        $this->container['targetPort'] = isset($data['targetPort']) ? $data['targetPort'] : null;
    }

    /**
     * Gets bearerTokenSecret
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getBearerTokenSecret()
    {
        return $this->container['bearerTokenSecret'];
    }

    /**
     * Sets bearerTokenSecret
     * @param \Rancher\Model\SecretKeySelectorModel $bearerTokenSecret
     * @return $this
     */
    public function setBearerTokenSecret($bearerTokenSecret)
    {
        $this->container['bearerTokenSecret'] = $bearerTokenSecret;

        return $this;
    }


    /**
     * Gets honorTimestamps
     * @return boolean
     */
    public function getHonorTimestamps()
    {
        return $this->container['honorTimestamps'];
    }

    /**
     * Sets honorTimestamps
     * @param boolean $honorTimestamps
     * @return $this
     */
    public function setHonorTimestamps($honorTimestamps)
    {
        $this->container['honorTimestamps'] = $honorTimestamps;

        return $this;
    }


    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }


    /**
     * Gets params
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     * @param \Rancher\Model\Array[string]Model[] $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets relabelings
     * @return \Rancher\Model\RelabelConfigModel[]
     */
    public function getRelabelings()
    {
        return $this->container['relabelings'];
    }

    /**
     * Sets relabelings
     * @param \Rancher\Model\RelabelConfigModel[] $relabelings
     * @return $this
     */
    public function setRelabelings($relabelings)
    {
        $this->container['relabelings'] = $relabelings;

        return $this;
    }


    /**
     * Gets scheme
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     * @param string $scheme
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }


    /**
     * Gets scrapeTimeout
     * @return string
     */
    public function getScrapeTimeout()
    {
        return $this->container['scrapeTimeout'];
    }

    /**
     * Sets scrapeTimeout
     * @param string $scrapeTimeout
     * @return $this
     */
    public function setScrapeTimeout($scrapeTimeout)
    {
        $this->container['scrapeTimeout'] = $scrapeTimeout;

        return $this;
    }


    /**
     * Gets targetPort
     * @return string
     */
    public function getTargetPort()
    {
        return $this->container['targetPort'];
    }

    /**
     * Sets targetPort
     * @param string $targetPort
     * @return $this
     */
    public function setTargetPort($targetPort)
    {
        $this->container['targetPort'] = $targetPort;

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

