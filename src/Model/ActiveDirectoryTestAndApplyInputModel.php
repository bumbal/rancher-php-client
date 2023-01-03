<?php

/**
 * ActiveDirectoryTestAndApplyInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ActiveDirectoryTestAndApplyInputModel implements ArrayAccess
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
        'activeDirectoryConfig',
        'enabled',
        'password',
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
        'activeDirectoryConfig',
        'enabled',
        'password',
        'username',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'activeDirectoryConfig' => '\Rancher\Model\ActiveDirectoryConfigModel',
        'enabled' => 'boolean',
        'password' => 'string',
        'username' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'activeDirectoryConfig' => 'setActiveDirectoryConfig',
        'enabled' => 'setEnabled',
        'password' => 'setPassword',
        'username' => 'setUsername',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'activeDirectoryConfig' => 'getActiveDirectoryConfig',
        'enabled' => 'getEnabled',
        'password' => 'getPassword',
        'username' => 'getUsername',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['activeDirectoryConfig'] = isset($data['activeDirectoryConfig']) ? $data['activeDirectoryConfig'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Gets activeDirectoryConfig
     * @return \Rancher\Model\ActiveDirectoryConfigModel
     */
    public function getActiveDirectoryConfig()
    {
        return $this->container['activeDirectoryConfig'];
    }

    /**
     * Sets activeDirectoryConfig
     * @param \Rancher\Model\ActiveDirectoryConfigModel $activeDirectoryConfig
     * @return $this
     */
    public function setActiveDirectoryConfig($activeDirectoryConfig)
    {
        $this->container['activeDirectoryConfig'] = $activeDirectoryConfig;

        return $this;
    }


    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
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

