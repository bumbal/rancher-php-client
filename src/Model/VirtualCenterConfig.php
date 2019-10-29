<?php

namespace Rancher\Model;

use \ArrayAccess;

class VirtualCenterConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'datacenters' => 'string',
        'password' => '\Rancher\Model\Password',
        'port' => 'string',
        'soap-roundtrip-count' => 'int',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'datacenters' => 'setDatacenters',
        'password' => 'setPassword',
        'port' => 'setPort',
        'soap-roundtrip-count' => 'setSoap-roundtrip-count',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'datacenters' => 'getDatacenters',
        'password' => 'getPassword',
        'port' => 'getPort',
        'soap-roundtrip-count' => 'getSoap-roundtrip-count',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['datacenters'] = isset($data['datacenters']) ? $data['datacenters'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['soap-roundtrip-count'] = isset($data['soap-roundtrip-count']) ? $data['soap-roundtrip-count'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Gets datacenters
     * @return string
     */
    public function getDatacenters()
    {
        return $this->container['datacenters'];
    }

    /**
     * Sets datacenters
     * @param string $datacenters
     * @return $this
     */
    public function setDatacenters($datacenters)
    {
        $this->container['datacenters'] = $datacenters;

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
     * Gets port
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param string $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }


    /**
     * Gets soap-roundtrip-count
     * @return int
     */
    public function getSoap-roundtrip-count()
    {
        return $this->container['soap-roundtrip-count'];
    }

    /**
     * Sets soap-roundtrip-count
     * @param int $soap-roundtrip-count
     * @return $this
     */
    public function setSoap-roundtrip-count($soap-roundtrip-count)
    {
        $this->container['soap-roundtrip-count'] = $soap-roundtrip-count;

        return $this;
    }


    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

