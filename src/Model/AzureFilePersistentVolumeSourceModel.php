<?php

/**
 * AzureFilePersistentVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AzureFilePersistentVolumeSourceModel implements ArrayAccess
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
        'readOnly',
        'secretName',
        'secretNamespace',
        'shareName',
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
        'readOnly' => 'boolean',
        'secretName' => 'string',
        'secretNamespace' => 'string',
        'shareName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'readOnly' => 'setReadOnly',
        'secretName' => 'setSecretName',
        'secretNamespace' => 'setSecretNamespace',
        'shareName' => 'setShareName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'readOnly' => 'getReadOnly',
        'secretName' => 'getSecretName',
        'secretNamespace' => 'getSecretNamespace',
        'shareName' => 'getShareName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['secretNamespace'] = isset($data['secretNamespace']) ? $data['secretNamespace'] : null;
        $this->container['shareName'] = isset($data['shareName']) ? $data['shareName'] : null;
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
     * Gets secretName
     * @return string
     */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
     * Sets secretName
     * @param string $secretName
     * @return $this
     */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;

        return $this;
    }


    /**
     * Gets secretNamespace
     * @return string
     */
    public function getSecretNamespace()
    {
        return $this->container['secretNamespace'];
    }

    /**
     * Sets secretNamespace
     * @param string $secretNamespace
     * @return $this
     */
    public function setSecretNamespace($secretNamespace)
    {
        $this->container['secretNamespace'] = $secretNamespace;

        return $this;
    }


    /**
     * Gets shareName
     * @return string
     */
    public function getShareName()
    {
        return $this->container['shareName'];
    }

    /**
     * Sets shareName
     * @param string $shareName
     * @return $this
     */
    public function setShareName($shareName)
    {
        $this->container['shareName'] = $shareName;

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

