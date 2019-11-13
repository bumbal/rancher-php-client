<?php

/**
 * QuobyteVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class QuobyteVolumeSourceModel implements ArrayAccess
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
        'group',
        'readOnly',
        'registry',
        'user',
        'volume',
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
        'group',
        'readOnly',
        'registry',
        'user',
        'volume',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'group' => 'string',
        'readOnly' => 'boolean',
        'registry' => 'string',
        'user' => 'string',
        'volume' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'group' => 'setGroup',
        'readOnly' => 'setReadOnly',
        'registry' => 'setRegistry',
        'user' => 'setUser',
        'volume' => 'setVolume',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'group' => 'getGroup',
        'readOnly' => 'getReadOnly',
        'registry' => 'getRegistry',
        'user' => 'getUser',
        'volume' => 'getVolume',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['registry'] = isset($data['registry']) ? $data['registry'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * Gets group
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param string $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }


    /**
     * Gets readOnly
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     * @param boolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

        return $this;
    }


    /**
     * Gets registry
     * @return string
     */
    public function getRegistry()
    {
        return $this->container['registry'];
    }

    /**
     * Sets registry
     * @param string $registry
     * @return $this
     */
    public function setRegistry($registry)
    {
        $this->container['registry'] = $registry;

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
     * Gets volume
     * @return string
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param string $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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

