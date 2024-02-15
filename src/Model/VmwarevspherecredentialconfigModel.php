<?php

/**
 * VmwarevspherecredentialconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class VmwarevspherecredentialconfigModel implements ArrayAccess
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
        'password',
        'username',
        'vcenter',
        'vcenterPort',
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
        'password',
        'username',
        'vcenter',
        'vcenterPort',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'password' => '\Rancher\Model\PasswordModel',
        'username' => 'string',
        'vcenter' => 'string',
        'vcenterPort' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'password' => 'setPassword',
        'username' => 'setUsername',
        'vcenter' => 'setVcenter',
        'vcenterPort' => 'setVcenterPort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'password' => 'getPassword',
        'username' => 'getUsername',
        'vcenter' => 'getVcenter',
        'vcenterPort' => 'getVcenterPort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['vcenter'] = isset($data['vcenter']) ? $data['vcenter'] : null;
        $this->container['vcenterPort'] = isset($data['vcenterPort']) ? $data['vcenterPort'] : null;
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
     * Gets vcenter
     * @return string
     */
    public function getVcenter()
    {
        return $this->container['vcenter'];
    }

    /**
     * Sets vcenter
     * @param string $vcenter
     * @return $this
     */
    public function setVcenter($vcenter)
    {
        $this->container['vcenter'] = $vcenter;

        return $this;
    }


    /**
     * Gets vcenterPort
     * @return string
     */
    public function getVcenterPort()
    {
        return $this->container['vcenterPort'];
    }

    /**
     * Sets vcenterPort
     * @param string $vcenterPort
     * @return $this
     */
    public function setVcenterPort($vcenterPort)
    {
        $this->container['vcenterPort'] = $vcenterPort;

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

