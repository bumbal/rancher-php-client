<?php

namespace Rancher\Model;

use \ArrayAccess;

class PrivateRegistry implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'isDefault' => 'boolean',
        'password' => '\Rancher\Model\Password',
        'url' => 'string',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'isDefault' => 'setIsDefault',
        'password' => 'setPassword',
        'url' => 'setUrl',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'isDefault' => 'getIsDefault',
        'password' => 'getPassword',
        'url' => 'getUrl',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Gets isDefault
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     * @param boolean $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

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

