<?php

/**
 * KubeproxyServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubeproxyServiceModel implements ArrayAccess
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
        'extraArgsArray',
        'extraBinds',
        'extraEnv',
        'image',
        'winExtraArgs',
        'winExtraArgsArray',
        'winExtraBinds',
        'winExtraEnv',
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
        'extraArgsArray',
        'extraBinds',
        'extraEnv',
        'image',
        'winExtraArgs',
        'winExtraArgsArray',
        'winExtraBinds',
        'winExtraEnv',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'extraArgs' => 'map[string,string]',
        'extraArgsArray' => 'map[string,\Rancher\Model\Array[string]Model]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'image' => 'string',
        'winExtraArgs' => 'map[string,string]',
        'winExtraArgsArray' => 'map[string,\Rancher\Model\Array[string]Model]',
        'winExtraBinds' => 'string[]',
        'winExtraEnv' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'extraArgs' => 'setExtraArgs',
        'extraArgsArray' => 'setExtraArgsArray',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'image' => 'setImage',
        'winExtraArgs' => 'setWinExtraArgs',
        'winExtraArgsArray' => 'setWinExtraArgsArray',
        'winExtraBinds' => 'setWinExtraBinds',
        'winExtraEnv' => 'setWinExtraEnv',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'extraArgs' => 'getExtraArgs',
        'extraArgsArray' => 'getExtraArgsArray',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'image' => 'getImage',
        'winExtraArgs' => 'getWinExtraArgs',
        'winExtraArgsArray' => 'getWinExtraArgsArray',
        'winExtraBinds' => 'getWinExtraBinds',
        'winExtraEnv' => 'getWinExtraEnv',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraArgsArray'] = isset($data['extraArgsArray']) ? $data['extraArgsArray'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['winExtraArgs'] = isset($data['winExtraArgs']) ? $data['winExtraArgs'] : null;
        $this->container['winExtraArgsArray'] = isset($data['winExtraArgsArray']) ? $data['winExtraArgsArray'] : null;
        $this->container['winExtraBinds'] = isset($data['winExtraBinds']) ? $data['winExtraBinds'] : null;
        $this->container['winExtraEnv'] = isset($data['winExtraEnv']) ? $data['winExtraEnv'] : null;
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
     * Gets extraArgsArray
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getExtraArgsArray()
    {
        return $this->container['extraArgsArray'];
    }

    /**
     * Sets extraArgsArray
     * @param \Rancher\Model\Array[string]Model[] $extraArgsArray
     * @return $this
     */
    public function setExtraArgsArray($extraArgsArray)
    {
        $this->container['extraArgsArray'] = $extraArgsArray;

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
     * Gets winExtraArgs
     * @return string[]
     */
    public function getWinExtraArgs()
    {
        return $this->container['winExtraArgs'];
    }

    /**
     * Sets winExtraArgs
     * @param string[] $winExtraArgs
     * @return $this
     */
    public function setWinExtraArgs($winExtraArgs)
    {
        $this->container['winExtraArgs'] = $winExtraArgs;

        return $this;
    }


    /**
     * Gets winExtraArgsArray
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getWinExtraArgsArray()
    {
        return $this->container['winExtraArgsArray'];
    }

    /**
     * Sets winExtraArgsArray
     * @param \Rancher\Model\Array[string]Model[] $winExtraArgsArray
     * @return $this
     */
    public function setWinExtraArgsArray($winExtraArgsArray)
    {
        $this->container['winExtraArgsArray'] = $winExtraArgsArray;

        return $this;
    }


    /**
     * Gets winExtraBinds
     * @return string[]
     */
    public function getWinExtraBinds()
    {
        return $this->container['winExtraBinds'];
    }

    /**
     * Sets winExtraBinds
     * @param string[] $winExtraBinds
     * @return $this
     */
    public function setWinExtraBinds($winExtraBinds)
    {
        $this->container['winExtraBinds'] = $winExtraBinds;

        return $this;
    }


    /**
     * Gets winExtraEnv
     * @return string[]
     */
    public function getWinExtraEnv()
    {
        return $this->container['winExtraEnv'];
    }

    /**
     * Sets winExtraEnv
     * @param string[] $winExtraEnv
     * @return $this
     */
    public function setWinExtraEnv($winExtraEnv)
    {
        $this->container['winExtraEnv'] = $winExtraEnv;

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

