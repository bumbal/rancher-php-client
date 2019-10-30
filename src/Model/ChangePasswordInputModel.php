<?php

/**
 * ChangePasswordInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ChangePasswordInputModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'currentPassword' => 'string',
        'newPassword' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'currentPassword' => 'setCurrentPassword',
        'newPassword' => 'setNewPassword',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'currentPassword' => 'getCurrentPassword',
        'newPassword' => 'getNewPassword',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['currentPassword'] = isset($data['currentPassword']) ? $data['currentPassword'] : null;
        $this->container['newPassword'] = isset($data['newPassword']) ? $data['newPassword'] : null;
    }

    /**
     * Gets currentPassword
     * @return string
     */
    public function getCurrentPassword()
    {
        return $this->container['currentPassword'];
    }

    /**
     * Sets currentPassword
     * @param string $currentPassword
     * @return $this
     */
    public function setCurrentPassword($currentPassword)
    {
        $this->container['currentPassword'] = $currentPassword;

        return $this;
    }


    /**
     * Gets newPassword
     * @return string
     */
    public function getNewPassword()
    {
        return $this->container['newPassword'];
    }

    /**
     * Sets newPassword
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->container['newPassword'] = $newPassword;

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

