<?php

/**
 * SchedulerServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SchedulerServiceModel implements ArrayAccess
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
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
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
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'extraArgs' => 'map[string]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'image' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'extraArgs' => 'setExtraArgs',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'image' => 'setImage',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'extraArgs' => 'getExtraArgs',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'image' => 'getImage',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /**
     * Gets extraArgs
     * @return string[]
     */
    public function getExtraArgs()
    {
        return $this->container['extraArgs'];
    }

    /**
     * Sets extraArgs
     * @param string[] $extraArgs
     * @return $this
     */
    public function setExtraArgs($extraArgs)
    {
        $this->container['extraArgs'] = $extraArgs;

        return $this;
    }


    /**
     * Gets extraBinds
     * @return string[]
     */
    public function getExtraBinds()
    {
        return $this->container['extraBinds'];
    }

    /**
     * Sets extraBinds
     * @param string[] $extraBinds
     * @return $this
     */
    public function setExtraBinds($extraBinds)
    {
        $this->container['extraBinds'] = $extraBinds;

        return $this;
    }


    /**
     * Gets extraEnv
     * @return string[]
     */
    public function getExtraEnv()
    {
        return $this->container['extraEnv'];
    }

    /**
     * Sets extraEnv
     * @param string[] $extraEnv
     * @return $this
     */
    public function setExtraEnv($extraEnv)
    {
        $this->container['extraEnv'] = $extraEnv;

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

