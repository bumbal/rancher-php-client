<?php

/**
 * CustomConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CustomConfigModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'address' => 'string',
        'dockerSocket' => 'string',
        'internalAddress' => 'string',
        'label' => 'map[string]',
        'sshCert' => 'string',
        'sshKey' => '\Rancher\Model\PasswordModel',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'address' => 'setAddress',
        'dockerSocket' => 'setDockerSocket',
        'internalAddress' => 'setInternalAddress',
        'label' => 'setLabel',
        'sshCert' => 'setSshCert',
        'sshKey' => 'setSshKey',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'address' => 'getAddress',
        'dockerSocket' => 'getDockerSocket',
        'internalAddress' => 'getInternalAddress',
        'label' => 'getLabel',
        'sshCert' => 'getSshCert',
        'sshKey' => 'getSshKey',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['dockerSocket'] = isset($data['dockerSocket']) ? $data['dockerSocket'] : null;
        $this->container['internalAddress'] = isset($data['internalAddress']) ? $data['internalAddress'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['sshCert'] = isset($data['sshCert']) ? $data['sshCert'] : null;
        $this->container['sshKey'] = isset($data['sshKey']) ? $data['sshKey'] : null;
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
     * Gets dockerSocket
     * @return string
     */
    public function getDockerSocket()
    {
        return $this->container['dockerSocket'];
    }

    /**
     * Sets dockerSocket
     * @param string $dockerSocket
     * @return $this
     */
    public function setDockerSocket($dockerSocket)
    {
        $this->container['dockerSocket'] = $dockerSocket;

        return $this;
    }


    /**
     * Gets internalAddress
     * @return string
     */
    public function getInternalAddress()
    {
        return $this->container['internalAddress'];
    }

    /**
     * Sets internalAddress
     * @param string $internalAddress
     * @return $this
     */
    public function setInternalAddress($internalAddress)
    {
        $this->container['internalAddress'] = $internalAddress;

        return $this;
    }


    /**
     * Gets label
     * @return string[]
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string[] $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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

