<?php

/**
 * SmtpConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SmtpConfigModel implements ArrayAccess
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
        'defaultRecipient',
        'host',
        'password',
        'port',
        'sender',
        'tls',
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
        'defaultRecipient',
        'host',
        'password',
        'port',
        'sender',
        'tls',
        'username',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaultRecipient' => 'string',
        'host' => '\Rancher\Model\HostnameModel',
        'password' => 'string',
        'port' => 'int',
        'sender' => 'string',
        'tls' => 'boolean',
        'username' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaultRecipient' => 'setDefaultRecipient',
        'host' => 'setHost',
        'password' => 'setPassword',
        'port' => 'setPort',
        'sender' => 'setSender',
        'tls' => 'setTls',
        'username' => 'setUsername',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaultRecipient' => 'getDefaultRecipient',
        'host' => 'getHost',
        'password' => 'getPassword',
        'port' => 'getPort',
        'sender' => 'getSender',
        'tls' => 'getTls',
        'username' => 'getUsername',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaultRecipient'] = isset($data['defaultRecipient']) ? $data['defaultRecipient'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Gets defaultRecipient
     * @return string
     */
    public function getDefaultRecipient()
    {
        return $this->container['defaultRecipient'];
    }

    /**
     * Sets defaultRecipient
     * @param string $defaultRecipient
     * @return $this
     */
    public function setDefaultRecipient($defaultRecipient)
    {
        $this->container['defaultRecipient'] = $defaultRecipient;

        return $this;
    }


    /**
     * Gets host
     * @return \Rancher\Model\HostnameModel
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     * @param \Rancher\Model\HostnameModel $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

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
     * Gets sender
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param string $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }


    /**
     * Gets tls
     * @return boolean
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     * @param boolean $tls
     * @return $this
     */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;

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

