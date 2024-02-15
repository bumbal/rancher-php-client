<?php

/**
 * PrivateRegistryModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PrivateRegistryModel implements ArrayAccess
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
        'ecrCredentialPlugin',
        'isDefault',
        'password',
        'url',
        'user',
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
        'ecrCredentialPlugin',
        'isDefault',
        'password',
        'url',
        'user',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'ecrCredentialPlugin' => '\Rancher\Model\EcrCredentialPluginModel',
        'isDefault' => 'boolean',
        'password' => '\Rancher\Model\PasswordModel',
        'url' => 'string',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'ecrCredentialPlugin' => 'setEcrCredentialPlugin',
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
        'ecrCredentialPlugin' => 'getEcrCredentialPlugin',
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
        $this->container['ecrCredentialPlugin'] = isset($data['ecrCredentialPlugin']) ? $data['ecrCredentialPlugin'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Gets ecrCredentialPlugin
     * @return \Rancher\Model\EcrCredentialPluginModel
     */
    public function getEcrCredentialPlugin()
    {
        return $this->container['ecrCredentialPlugin'];
    }

    /**
     * Sets ecrCredentialPlugin
     * @param \Rancher\Model\EcrCredentialPluginModel $ecrCredentialPlugin
     * @return $this
     */
    public function setEcrCredentialPlugin($ecrCredentialPlugin)
    {
        $this->container['ecrCredentialPlugin'] = $ecrCredentialPlugin;

        return $this;
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

