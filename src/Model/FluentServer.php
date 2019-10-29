<?php

namespace Rancher\Model;

use \ArrayAccess;

class FluentServer implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'endpoint' => 'string',
        'hostname' => 'string',
        'password' => '\Rancher\Model\Password',
        'sharedKey' => '\Rancher\Model\Password',
        'standby' => 'boolean',
        'username' => 'string',
        'weight' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'endpoint' => 'setEndpoint',
        'hostname' => 'setHostname',
        'password' => 'setPassword',
        'sharedKey' => 'setSharedKey',
        'standby' => 'setStandby',
        'username' => 'setUsername',
        'weight' => 'setWeight',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'endpoint' => 'getEndpoint',
        'hostname' => 'getHostname',
        'password' => 'getPassword',
        'sharedKey' => 'getSharedKey',
        'standby' => 'getStandby',
        'username' => 'getUsername',
        'weight' => 'getWeight',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['sharedKey'] = isset($data['sharedKey']) ? $data['sharedKey'] : null;
        $this->container['standby'] = isset($data['standby']) ? $data['standby'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
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
     * Gets password
     * @return \Rancher\Model\Password
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param \Rancher\Model\Password $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }


    /**
     * Gets sharedKey
     * @return \Rancher\Model\Password
     */
    public function getSharedKey()
    {
        return $this->container['sharedKey'];
    }

    /**
     * Sets sharedKey
     * @param \Rancher\Model\Password $sharedKey
     * @return $this
     */
    public function setSharedKey($sharedKey)
    {
        $this->container['sharedKey'] = $sharedKey;

        return $this;
    }


    /**
     * Gets standby
     * @return boolean
     */
    public function getStandby()
    {
        return $this->container['standby'];
    }

    /**
     * Sets standby
     * @param boolean $standby
     * @return $this
     */
    public function setStandby($standby)
    {
        $this->container['standby'] = $standby;

        return $this;
    }


    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }


    /**
     * Gets weight
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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

