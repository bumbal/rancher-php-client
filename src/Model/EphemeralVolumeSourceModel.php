<?php

/**
 * EphemeralVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EphemeralVolumeSourceModel implements ArrayAccess
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
        'volumeClaimTemplate',
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
        'readOnly',
        'volumeClaimTemplate',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'readOnly' => 'boolean',
        'volumeClaimTemplate' => '\Rancher\Model\PersistentVolumeClaimTemplateModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'readOnly' => 'setReadOnly',
        'volumeClaimTemplate' => 'setVolumeClaimTemplate',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'readOnly' => 'getReadOnly',
        'volumeClaimTemplate' => 'getVolumeClaimTemplate',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['volumeClaimTemplate'] = isset($data['volumeClaimTemplate']) ? $data['volumeClaimTemplate'] : null;
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
     * Gets volumeClaimTemplate
     * @return \Rancher\Model\PersistentVolumeClaimTemplateModel
     */
    public function getVolumeClaimTemplate()
    {
        return $this->container['volumeClaimTemplate'];
    }

    /**
     * Sets volumeClaimTemplate
     * @param \Rancher\Model\PersistentVolumeClaimTemplateModel $volumeClaimTemplate
     * @return $this
     */
    public function setVolumeClaimTemplate($volumeClaimTemplate)
    {
        $this->container['volumeClaimTemplate'] = $volumeClaimTemplate;

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

