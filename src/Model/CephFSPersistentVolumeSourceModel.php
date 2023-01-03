<?php

/**
 * CephFSPersistentVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CephFSPersistentVolumeSourceModel implements ArrayAccess
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
        'monitors',
        'path',
        'readOnly',
        'secretFile',
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'monitors' => 'string[]',
        'path' => 'string',
        'readOnly' => 'boolean',
        'secretFile' => 'string',
        'secretRef' => '\Rancher\Model\SecretReferenceModel',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'monitors' => 'setMonitors',
        'path' => 'setPath',
        'readOnly' => 'setReadOnly',
        'secretFile' => 'setSecretFile',
        'secretRef' => 'setSecretRef',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'monitors' => 'getMonitors',
        'path' => 'getPath',
        'readOnly' => 'getReadOnly',
        'secretFile' => 'getSecretFile',
        'secretRef' => 'getSecretRef',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['monitors'] = isset($data['monitors']) ? $data['monitors'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['secretFile'] = isset($data['secretFile']) ? $data['secretFile'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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
     * Gets secretFile
     * @return string
     */
    public function getSecretFile()
    {
        return $this->container['secretFile'];
    }

    /**
     * Sets secretFile
     * @param string $secretFile
     * @return $this
     */
    public function setSecretFile($secretFile)
    {
        $this->container['secretFile'] = $secretFile;

        return $this;
    }


    /**
     * Gets secretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
     * Sets secretRef
     * @param \Rancher\Model\SecretReferenceModel $secretRef
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

