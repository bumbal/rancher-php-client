<?php

/**
 * GkeNodeConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeNodeConfigModel implements ArrayAccess
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
        'diskSizeGb',
        'diskType',
        'imageType',
        'labels',
        'localSsdCount',
        'machineType',
        'oauthScopes',
        'preemptible',
        'tags',
        'taints',
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
        'diskSizeGb',
        'diskType',
        'imageType',
        'labels',
        'localSsdCount',
        'machineType',
        'oauthScopes',
        'preemptible',
        'tags',
        'taints',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'diskSizeGb' => 'int',
        'diskType' => 'string',
        'imageType' => 'string',
        'labels' => 'map[string,string]',
        'localSsdCount' => 'int',
        'machineType' => 'string',
        'oauthScopes' => 'string[]',
        'preemptible' => 'boolean',
        'tags' => 'string[]',
        'taints' => '\Rancher\Model\GkeNodeTaintConfigModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'diskSizeGb' => 'setDiskSizeGb',
        'diskType' => 'setDiskType',
        'imageType' => 'setImageType',
        'labels' => 'setLabels',
        'localSsdCount' => 'setLocalSsdCount',
        'machineType' => 'setMachineType',
        'oauthScopes' => 'setOauthScopes',
        'preemptible' => 'setPreemptible',
        'tags' => 'setTags',
        'taints' => 'setTaints',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'diskSizeGb' => 'getDiskSizeGb',
        'diskType' => 'getDiskType',
        'imageType' => 'getImageType',
        'labels' => 'getLabels',
        'localSsdCount' => 'getLocalSsdCount',
        'machineType' => 'getMachineType',
        'oauthScopes' => 'getOauthScopes',
        'preemptible' => 'getPreemptible',
        'tags' => 'getTags',
        'taints' => 'getTaints',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['diskSizeGb'] = isset($data['diskSizeGb']) ? $data['diskSizeGb'] : null;
        $this->container['diskType'] = isset($data['diskType']) ? $data['diskType'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['localSsdCount'] = isset($data['localSsdCount']) ? $data['localSsdCount'] : null;
        $this->container['machineType'] = isset($data['machineType']) ? $data['machineType'] : null;
        $this->container['oauthScopes'] = isset($data['oauthScopes']) ? $data['oauthScopes'] : null;
        $this->container['preemptible'] = isset($data['preemptible']) ? $data['preemptible'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
    }

    /**
     * Gets diskSizeGb
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->container['diskSizeGb'];
    }

    /**
     * Sets diskSizeGb
     * @param int $diskSizeGb
     * @return $this
     */
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->container['diskSizeGb'] = $diskSizeGb;

        return $this;
    }


    /**
     * Gets diskType
     * @return string
     */
    public function getDiskType()
    {
        return $this->container['diskType'];
    }

    /**
     * Sets diskType
     * @param string $diskType
     * @return $this
     */
    public function setDiskType($diskType)
    {
        $this->container['diskType'] = $diskType;

        return $this;
    }


    /**
     * Gets imageType
     * @return string
     */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
     * Sets imageType
     * @param string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets localSsdCount
     * @return int
     */
    public function getLocalSsdCount()
    {
        return $this->container['localSsdCount'];
    }

    /**
     * Sets localSsdCount
     * @param int $localSsdCount
     * @return $this
     */
    public function setLocalSsdCount($localSsdCount)
    {
        $this->container['localSsdCount'] = $localSsdCount;

        return $this;
    }


    /**
     * Gets machineType
     * @return string
     */
    public function getMachineType()
    {
        return $this->container['machineType'];
    }

    /**
     * Sets machineType
     * @param string $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->container['machineType'] = $machineType;

        return $this;
    }


    /**
     * Gets oauthScopes
     * @return string[]
     */
    public function getOauthScopes()
    {
        return $this->container['oauthScopes'];
    }

    /**
     * Sets oauthScopes
     * @param string[] $oauthScopes
     * @return $this
     */
    public function setOauthScopes($oauthScopes)
    {
        $this->container['oauthScopes'] = $oauthScopes;

        return $this;
    }


    /**
     * Gets preemptible
     * @return boolean
     */
    public function getPreemptible()
    {
        return $this->container['preemptible'];
    }

    /**
     * Sets preemptible
     * @param boolean $preemptible
     * @return $this
     */
    public function setPreemptible($preemptible)
    {
        $this->container['preemptible'] = $preemptible;

        return $this;
    }


    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }


    /**
     * Gets taints
     * @return \Rancher\Model\GkeNodeTaintConfigModel[]
     */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
     * Sets taints
     * @param \Rancher\Model\GkeNodeTaintConfigModel[] $taints
     * @return $this
     */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;

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

