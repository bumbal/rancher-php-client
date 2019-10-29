<?php

namespace Rancher\Model;

use \ArrayAccess;

class FreeIpaTestAndApplyInput implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'ldapConfig' => '\Rancher\Model\LdapConfig',
        'password' => '\Rancher\Model\Password',
        'username' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ldapConfig' => 'setLdapConfig',
        'password' => 'setPassword',
        'username' => 'setUsername',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'ldapConfig' => 'getLdapConfig',
        'password' => 'getPassword',
        'username' => 'getUsername',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['ldapConfig'] = isset($data['ldapConfig']) ? $data['ldapConfig'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Gets ldapConfig
     * @return \Rancher\Model\LdapConfig
     */
    public function getLdapConfig()
    {
        return $this->container['ldapConfig'];
    }

    /**
     * Sets ldapConfig
     * @param \Rancher\Model\LdapConfig $ldapConfig
     * @return $this
     */
    public function setLdapConfig($ldapConfig)
    {
        $this->container['ldapConfig'] = $ldapConfig;

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

