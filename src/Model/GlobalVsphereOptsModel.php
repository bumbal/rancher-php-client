<?php

/**
 * GlobalVsphereOptsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GlobalVsphereOptsModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'datacenter' => 'string',
        'datacenters' => 'string',
        'datastore' => 'string',
        'insecure-flag' => 'boolean',
        'password' => '\Rancher\Model\PasswordModel',
        'port' => 'string',
        'server' => 'string',
        'soap-roundtrip-count' => 'int',
        'user' => 'string',
        'vm-name' => 'string',
        'vm-uuid' => 'string',
        'working-dir' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'datacenter' => 'setDatacenter',
        'datacenters' => 'setDatacenters',
        'datastore' => 'setDatastore',
        'insecure-flag' => 'setInsecure-flag',
        'password' => 'setPassword',
        'port' => 'setPort',
        'server' => 'setServer',
        'soap-roundtrip-count' => 'setSoap-roundtrip-count',
        'user' => 'setUser',
        'vm-name' => 'setVm-name',
        'vm-uuid' => 'setVm-uuid',
        'working-dir' => 'setWorking-dir',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'datacenter' => 'getDatacenter',
        'datacenters' => 'getDatacenters',
        'datastore' => 'getDatastore',
        'insecure-flag' => 'getInsecure-flag',
        'password' => 'getPassword',
        'port' => 'getPort',
        'server' => 'getServer',
        'soap-roundtrip-count' => 'getSoap-roundtrip-count',
        'user' => 'getUser',
        'vm-name' => 'getVm-name',
        'vm-uuid' => 'getVm-uuid',
        'working-dir' => 'getWorking-dir',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['datacenter'] = isset($data['datacenter']) ? $data['datacenter'] : null;
        $this->container['datacenters'] = isset($data['datacenters']) ? $data['datacenters'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['insecure-flag'] = isset($data['insecure-flag']) ? $data['insecure-flag'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['soap-roundtrip-count'] = isset($data['soap-roundtrip-count']) ? $data['soap-roundtrip-count'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['vm-name'] = isset($data['vm-name']) ? $data['vm-name'] : null;
        $this->container['vm-uuid'] = isset($data['vm-uuid']) ? $data['vm-uuid'] : null;
        $this->container['working-dir'] = isset($data['working-dir']) ? $data['working-dir'] : null;
    }

    /**
     * Gets datacenter
     * @return string
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     * @param string $datacenter
     * @return $this
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
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
     * Gets datastore
     * @return string
     */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
     * Sets datastore
     * @param string $datastore
     * @return $this
     */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;

        return $this;
    }


    /**
     * Gets insecure-flag
     * @return boolean
     */
    public function getInsecure-flag()
    {
        return $this->container['insecure-flag'];
    }

    /**
     * Sets insecure-flag
     * @param boolean $insecure-flag
     * @return $this
     */
    public function setInsecure-flag($insecure-flag)
    {
        $this->container['insecure-flag'] = $insecure-flag;

        return $this;
    }


    /**
     * Gets password
     * @return \Rancher\Model\PasswordModel
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param \Rancher\Model\PasswordModel $password
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
     * Gets server
     * @return string
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     * @param string $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

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
     * Gets vm-name
     * @return string
     */
    public function getVm-name()
    {
        return $this->container['vm-name'];
    }

    /**
     * Sets vm-name
     * @param string $vm-name
     * @return $this
     */
    public function setVm-name($vm-name)
    {
        $this->container['vm-name'] = $vm-name;

        return $this;
    }


    /**
     * Gets vm-uuid
     * @return string
     */
    public function getVm-uuid()
    {
        return $this->container['vm-uuid'];
    }

    /**
     * Sets vm-uuid
     * @param string $vm-uuid
     * @return $this
     */
    public function setVm-uuid($vm-uuid)
    {
        $this->container['vm-uuid'] = $vm-uuid;

        return $this;
    }


    /**
     * Gets working-dir
     * @return string
     */
    public function getWorking-dir()
    {
        return $this->container['working-dir'];
    }

    /**
     * Sets working-dir
     * @param string $working-dir
     * @return $this
     */
    public function setWorking-dir($working-dir)
    {
        $this->container['working-dir'] = $working-dir;

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

