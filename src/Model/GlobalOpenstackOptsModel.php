<?php

/**
 * GlobalOpenstackOptsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GlobalOpenstackOptsModel implements ArrayAccess
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
        'auth-url',
        'ca-file',
        'domain-id',
        'domain-name',
        'password',
        'region',
        'tenant-id',
        'tenant-name',
        'trust-id',
        'user-id',
        'username',
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
        'auth-url',
        'ca-file',
        'domain-id',
        'domain-name',
        'password',
        'region',
        'tenant-id',
        'tenant-name',
        'trust-id',
        'user-id',
        'username',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'auth-url' => 'string',
        'ca-file' => 'string',
        'domain-id' => 'string',
        'domain-name' => 'string',
        'password' => '\Rancher\Model\PasswordModel',
        'region' => 'string',
        'tenant-id' => 'string',
        'tenant-name' => 'string',
        'trust-id' => 'string',
        'user-id' => 'string',
        'username' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'auth-url' => 'setAuth-url',
        'ca-file' => 'setCa-file',
        'domain-id' => 'setDomain-id',
        'domain-name' => 'setDomain-name',
        'password' => 'setPassword',
        'region' => 'setRegion',
        'tenant-id' => 'setTenant-id',
        'tenant-name' => 'setTenant-name',
        'trust-id' => 'setTrust-id',
        'user-id' => 'setUser-id',
        'username' => 'setUsername',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'auth-url' => 'getAuth-url',
        'ca-file' => 'getCa-file',
        'domain-id' => 'getDomain-id',
        'domain-name' => 'getDomain-name',
        'password' => 'getPassword',
        'region' => 'getRegion',
        'tenant-id' => 'getTenant-id',
        'tenant-name' => 'getTenant-name',
        'trust-id' => 'getTrust-id',
        'user-id' => 'getUser-id',
        'username' => 'getUsername',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['auth-url'] = isset($data['auth-url']) ? $data['auth-url'] : null;
        $this->container['ca-file'] = isset($data['ca-file']) ? $data['ca-file'] : null;
        $this->container['domain-id'] = isset($data['domain-id']) ? $data['domain-id'] : null;
        $this->container['domain-name'] = isset($data['domain-name']) ? $data['domain-name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['tenant-id'] = isset($data['tenant-id']) ? $data['tenant-id'] : null;
        $this->container['tenant-name'] = isset($data['tenant-name']) ? $data['tenant-name'] : null;
        $this->container['trust-id'] = isset($data['trust-id']) ? $data['trust-id'] : null;
        $this->container['user-id'] = isset($data['user-id']) ? $data['user-id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Gets auth-url
     * @return string
     */
    public function getAuth-url()
    {
        return $this->container['auth-url'];
    }

    /**
     * Sets auth-url
     * @param string $auth-url
     * @return $this
     */
    public function setAuth-url($auth-url)
    {
        $this->container['auth-url'] = $auth-url;

        return $this;
    }


    /**
     * Gets ca-file
     * @return string
     */
    public function getCa-file()
    {
        return $this->container['ca-file'];
    }

    /**
     * Sets ca-file
     * @param string $ca-file
     * @return $this
     */
    public function setCa-file($ca-file)
    {
        $this->container['ca-file'] = $ca-file;

        return $this;
    }


    /**
     * Gets domain-id
     * @return string
     */
    public function getDomain-id()
    {
        return $this->container['domain-id'];
    }

    /**
     * Sets domain-id
     * @param string $domain-id
     * @return $this
     */
    public function setDomain-id($domain-id)
    {
        $this->container['domain-id'] = $domain-id;

        return $this;
    }


    /**
     * Gets domain-name
     * @return string
     */
    public function getDomain-name()
    {
        return $this->container['domain-name'];
    }

    /**
     * Sets domain-name
     * @param string $domain-name
     * @return $this
     */
    public function setDomain-name($domain-name)
    {
        $this->container['domain-name'] = $domain-name;

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
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }


    /**
     * Gets tenant-id
     * @return string
     */
    public function getTenant-id()
    {
        return $this->container['tenant-id'];
    }

    /**
     * Sets tenant-id
     * @param string $tenant-id
     * @return $this
     */
    public function setTenant-id($tenant-id)
    {
        $this->container['tenant-id'] = $tenant-id;

        return $this;
    }


    /**
     * Gets tenant-name
     * @return string
     */
    public function getTenant-name()
    {
        return $this->container['tenant-name'];
    }

    /**
     * Sets tenant-name
     * @param string $tenant-name
     * @return $this
     */
    public function setTenant-name($tenant-name)
    {
        $this->container['tenant-name'] = $tenant-name;

        return $this;
    }


    /**
     * Gets trust-id
     * @return string
     */
    public function getTrust-id()
    {
        return $this->container['trust-id'];
    }

    /**
     * Sets trust-id
     * @param string $trust-id
     * @return $this
     */
    public function setTrust-id($trust-id)
    {
        $this->container['trust-id'] = $trust-id;

        return $this;
    }


    /**
     * Gets user-id
     * @return string
     */
    public function getUser-id()
    {
        return $this->container['user-id'];
    }

    /**
     * Sets user-id
     * @param string $user-id
     * @return $this
     */
    public function setUser-id($user-id)
    {
        $this->container['user-id'] = $user-id;

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

