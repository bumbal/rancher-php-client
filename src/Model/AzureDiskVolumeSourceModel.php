<?php

/**
 * AzureDiskVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AzureDiskVolumeSourceModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'cachingMode' => 'string',
        'diskName' => 'string',
        'diskURI' => 'string',
        'fsType' => 'string',
        'kind' => 'string',
        'readOnly' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cachingMode' => 'setCachingMode',
        'diskName' => 'setDiskName',
        'diskURI' => 'setDiskURI',
        'fsType' => 'setFsType',
        'kind' => 'setKind',
        'readOnly' => 'setReadOnly',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cachingMode' => 'getCachingMode',
        'diskName' => 'getDiskName',
        'diskURI' => 'getDiskURI',
        'fsType' => 'getFsType',
        'kind' => 'getKind',
        'readOnly' => 'getReadOnly',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cachingMode'] = isset($data['cachingMode']) ? $data['cachingMode'] : null;
        $this->container['diskName'] = isset($data['diskName']) ? $data['diskName'] : null;
        $this->container['diskURI'] = isset($data['diskURI']) ? $data['diskURI'] : null;
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
    }

    /**
     * Gets cachingMode
     * @return string
     */
    public function getCachingMode()
    {
        return $this->container['cachingMode'];
    }

    /**
     * Sets cachingMode
     * @param string $cachingMode
     * @return $this
     */
    public function setCachingMode($cachingMode)
    {
        $this->container['cachingMode'] = $cachingMode;

        return $this;
    }


    /**
     * Gets diskName
     * @return string
     */
    public function getDiskName()
    {
        return $this->container['diskName'];
    }

    /**
     * Sets diskName
     * @param string $diskName
     * @return $this
     */
    public function setDiskName($diskName)
    {
        $this->container['diskName'] = $diskName;

        return $this;
    }


    /**
     * Gets diskURI
     * @return string
     */
    public function getDiskURI()
    {
        return $this->container['diskURI'];
    }

    /**
     * Sets diskURI
     * @param string $diskURI
     * @return $this
     */
    public function setDiskURI($diskURI)
    {
        $this->container['diskURI'] = $diskURI;

        return $this;
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
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

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

