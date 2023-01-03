<?php

/**
 * CisScanConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CisScanConfigModel implements ArrayAccess
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
        'debugMaster',
        'debugWorker',
        'overrideBenchmarkVersion',
        'overrideSkip',
        'profile',
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
        'debugMaster',
        'debugWorker',
        'overrideBenchmarkVersion',
        'overrideSkip',
        'profile',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'debugMaster' => 'boolean',
        'debugWorker' => 'boolean',
        'overrideBenchmarkVersion' => 'string',
        'overrideSkip' => 'string[]',
        'profile' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'debugMaster' => 'setDebugMaster',
        'debugWorker' => 'setDebugWorker',
        'overrideBenchmarkVersion' => 'setOverrideBenchmarkVersion',
        'overrideSkip' => 'setOverrideSkip',
        'profile' => 'setProfile',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'debugMaster' => 'getDebugMaster',
        'debugWorker' => 'getDebugWorker',
        'overrideBenchmarkVersion' => 'getOverrideBenchmarkVersion',
        'overrideSkip' => 'getOverrideSkip',
        'profile' => 'getProfile',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['debugMaster'] = isset($data['debugMaster']) ? $data['debugMaster'] : null;
        $this->container['debugWorker'] = isset($data['debugWorker']) ? $data['debugWorker'] : null;
        $this->container['overrideBenchmarkVersion'] = isset($data['overrideBenchmarkVersion']) ? $data['overrideBenchmarkVersion'] : null;
        $this->container['overrideSkip'] = isset($data['overrideSkip']) ? $data['overrideSkip'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
    }

    /**
     * Gets debugMaster
     * @return boolean
     */
    public function getDebugMaster()
    {
        return $this->container['debugMaster'];
    }

    /**
     * Sets debugMaster
     * @param boolean $debugMaster
     * @return $this
     */
    public function setDebugMaster($debugMaster)
    {
        $this->container['debugMaster'] = $debugMaster;

        return $this;
    }


    /**
     * Gets debugWorker
     * @return boolean
     */
    public function getDebugWorker()
    {
        return $this->container['debugWorker'];
    }

    /**
     * Sets debugWorker
     * @param boolean $debugWorker
     * @return $this
     */
    public function setDebugWorker($debugWorker)
    {
        $this->container['debugWorker'] = $debugWorker;

        return $this;
    }


    /**
     * Gets overrideBenchmarkVersion
     * @return string
     */
    public function getOverrideBenchmarkVersion()
    {
        return $this->container['overrideBenchmarkVersion'];
    }

    /**
     * Sets overrideBenchmarkVersion
     * @param string $overrideBenchmarkVersion
     * @return $this
     */
    public function setOverrideBenchmarkVersion($overrideBenchmarkVersion)
    {
        $this->container['overrideBenchmarkVersion'] = $overrideBenchmarkVersion;

        return $this;
    }


    /**
     * Gets overrideSkip
     * @return string[]
     */
    public function getOverrideSkip()
    {
        return $this->container['overrideSkip'];
    }

    /**
     * Sets overrideSkip
     * @param string[] $overrideSkip
     * @return $this
     */
    public function setOverrideSkip($overrideSkip)
    {
        $this->container['overrideSkip'] = $overrideSkip;

        return $this;
    }


    /**
     * Gets profile
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

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

