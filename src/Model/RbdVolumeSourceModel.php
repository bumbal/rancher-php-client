<?php

/**
 * RbdVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RbdVolumeSourceModel implements ArrayAccess
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
        'fsType',
        'image',
        'keyring',
        'monitors',
        'pool',
        'readOnly',
        'secretRef',
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
        'fsType',
        'image',
        'keyring',
        'monitors',
        'pool',
        'readOnly',
        'secretRef',
        'user',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'fsType' => 'string',
        'image' => 'string',
        'keyring' => 'string',
        'monitors' => 'string[]',
        'pool' => 'string',
        'readOnly' => 'boolean',
        'secretRef' => '\Rancher\Model\LocalObjectReferenceModel',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsType' => 'setFsType',
        'image' => 'setImage',
        'keyring' => 'setKeyring',
        'monitors' => 'setMonitors',
        'pool' => 'setPool',
        'readOnly' => 'setReadOnly',
        'secretRef' => 'setSecretRef',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsType' => 'getFsType',
        'image' => 'getImage',
        'keyring' => 'getKeyring',
        'monitors' => 'getMonitors',
        'pool' => 'getPool',
        'readOnly' => 'getReadOnly',
        'secretRef' => 'getSecretRef',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['keyring'] = isset($data['keyring']) ? $data['keyring'] : null;
        $this->container['monitors'] = isset($data['monitors']) ? $data['monitors'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Gets fsType
     * @return string
     */
    public function getFsType()
    {
        return $this->container['fsType'];
    }

    /**
     * Sets fsType
     * @param string $fsType
     * @return $this
     */
    public function setFsType($fsType)
    {
        $this->container['fsType'] = $fsType;

        return $this;
    }


    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }


    /**
     * Gets keyring
     * @return string
     */
    public function getKeyring()
    {
        return $this->container['keyring'];
    }

    /**
     * Sets keyring
     * @param string $keyring
     * @return $this
     */
    public function setKeyring($keyring)
    {
        $this->container['keyring'] = $keyring;

        return $this;
    }


    /**
     * Gets monitors
     * @return string[]
     */
    public function getMonitors()
    {
        return $this->container['monitors'];
    }

    /**
     * Sets monitors
     * @param string[] $monitors
     * @return $this
     */
    public function setMonitors($monitors)
    {
        $this->container['monitors'] = $monitors;

        return $this;
    }


    /**
     * Gets pool
     * @return string
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     * @param string $pool
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

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
     * Gets secretRef
     * @return \Rancher\Model\LocalObjectReferenceModel
     */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
     * Sets secretRef
     * @param \Rancher\Model\LocalObjectReferenceModel $secretRef
     * @return $this
     */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;

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

