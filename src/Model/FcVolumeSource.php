<?php

namespace Rancher\Model;

use \ArrayAccess;

class FcVolumeSource implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'fsType' => 'string',
        'lun' => 'int',
        'readOnly' => 'boolean',
        'targetWWNs' => 'string[]',
        'wwids' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsType' => 'setFsType',
        'lun' => 'setLun',
        'readOnly' => 'setReadOnly',
        'targetWWNs' => 'setTargetWWNs',
        'wwids' => 'setWwids',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsType' => 'getFsType',
        'lun' => 'getLun',
        'readOnly' => 'getReadOnly',
        'targetWWNs' => 'getTargetWWNs',
        'wwids' => 'getWwids',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['lun'] = isset($data['lun']) ? $data['lun'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['targetWWNs'] = isset($data['targetWWNs']) ? $data['targetWWNs'] : null;
        $this->container['wwids'] = isset($data['wwids']) ? $data['wwids'] : null;
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
     * Gets lun
     * @return int
     */
    public function getLun()
    {
        return $this->container['lun'];
    }

    /**
     * Sets lun
     * @param int $lun
     * @return $this
     */
    public function setLun($lun)
    {
        $this->container['lun'] = $lun;

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
     * Gets targetWWNs
     * @return string[]
     */
    public function getTargetWWNs()
    {
        return $this->container['targetWWNs'];
    }

    /**
     * Sets targetWWNs
     * @param string[] $targetWWNs
     * @return $this
     */
    public function setTargetWWNs($targetWWNs)
    {
        $this->container['targetWWNs'] = $targetWWNs;

        return $this;
    }


    /**
     * Gets wwids
     * @return string[]
     */
    public function getWwids()
    {
        return $this->container['wwids'];
    }

    /**
     * Sets wwids
     * @param string[] $wwids
     * @return $this
     */
    public function setWwids($wwids)
    {
        $this->container['wwids'] = $wwids;

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

