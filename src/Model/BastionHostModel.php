<?php

/**
 * BastionHostModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class BastionHostModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'address' => 'string',
        'port' => 'string',
        'sshAgentAuth' => 'boolean',
        'sshCert' => 'string',
        'sshCertPath' => 'string',
        'sshKey' => '\Rancher\Model\PasswordModel',
        'sshKeyPath' => 'string',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'address' => 'setAddress',
        'port' => 'setPort',
        'sshAgentAuth' => 'setSshAgentAuth',
        'sshCert' => 'setSshCert',
        'sshCertPath' => 'setSshCertPath',
        'sshKey' => 'setSshKey',
        'sshKeyPath' => 'setSshKeyPath',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'address' => 'getAddress',
        'port' => 'getPort',
        'sshAgentAuth' => 'getSshAgentAuth',
        'sshCert' => 'getSshCert',
        'sshCertPath' => 'getSshCertPath',
        'sshKey' => 'getSshKey',
        'sshKeyPath' => 'getSshKeyPath',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['sshAgentAuth'] = isset($data['sshAgentAuth']) ? $data['sshAgentAuth'] : null;
        $this->container['sshCert'] = isset($data['sshCert']) ? $data['sshCert'] : null;
        $this->container['sshCertPath'] = isset($data['sshCertPath']) ? $data['sshCertPath'] : null;
        $this->container['sshKey'] = isset($data['sshKey']) ? $data['sshKey'] : null;
        $this->container['sshKeyPath'] = isset($data['sshKeyPath']) ? $data['sshKeyPath'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets sshAgentAuth
     * @return boolean
     */
    public function getSshAgentAuth()
    {
        return $this->container['sshAgentAuth'];
    }

    /**
     * Sets sshAgentAuth
     * @param boolean $sshAgentAuth
     * @return $this
     */
    public function setSshAgentAuth($sshAgentAuth)
    {
        $this->container['sshAgentAuth'] = $sshAgentAuth;

        return $this;
    }


    /**
     * Gets sshCert
     * @return string
     */
    public function getSshCert()
    {
        return $this->container['sshCert'];
    }

    /**
     * Sets sshCert
     * @param string $sshCert
     * @return $this
     */
    public function setSshCert($sshCert)
    {
        $this->container['sshCert'] = $sshCert;

        return $this;
    }


    /**
     * Gets sshCertPath
     * @return string
     */
    public function getSshCertPath()
    {
        return $this->container['sshCertPath'];
    }

    /**
     * Sets sshCertPath
     * @param string $sshCertPath
     * @return $this
     */
    public function setSshCertPath($sshCertPath)
    {
        $this->container['sshCertPath'] = $sshCertPath;

        return $this;
    }


    /**
     * Gets sshKey
     * @return \Rancher\Model\PasswordModel
     */
    public function getSshKey()
    {
        return $this->container['sshKey'];
    }

    /**
     * Sets sshKey
     * @param \Rancher\Model\PasswordModel $sshKey
     * @return $this
     */
    public function setSshKey($sshKey)
    {
        $this->container['sshKey'] = $sshKey;

        return $this;
    }


    /**
     * Gets sshKeyPath
     * @return string
     */
    public function getSshKeyPath()
    {
        return $this->container['sshKeyPath'];
    }

    /**
     * Sets sshKeyPath
     * @param string $sshKeyPath
     * @return $this
     */
    public function setSshKeyPath($sshKeyPath)
    {
        $this->container['sshKeyPath'] = $sshKeyPath;

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

