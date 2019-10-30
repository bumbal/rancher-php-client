<?php

/**
 * PublishImageConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PublishImageConfigModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'buildContext' => 'string',
        'dockerfilePath' => 'string',
        'pushRemote' => 'boolean',
        'registry' => 'string',
        'tag' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'buildContext' => 'setBuildContext',
        'dockerfilePath' => 'setDockerfilePath',
        'pushRemote' => 'setPushRemote',
        'registry' => 'setRegistry',
        'tag' => 'setTag',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'buildContext' => 'getBuildContext',
        'dockerfilePath' => 'getDockerfilePath',
        'pushRemote' => 'getPushRemote',
        'registry' => 'getRegistry',
        'tag' => 'getTag',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['buildContext'] = isset($data['buildContext']) ? $data['buildContext'] : null;
        $this->container['dockerfilePath'] = isset($data['dockerfilePath']) ? $data['dockerfilePath'] : null;
        $this->container['pushRemote'] = isset($data['pushRemote']) ? $data['pushRemote'] : null;
        $this->container['registry'] = isset($data['registry']) ? $data['registry'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * Gets buildContext
     * @return string
     */
    public function getBuildContext()
    {
        return $this->container['buildContext'];
    }

    /**
     * Sets buildContext
     * @param string $buildContext
     * @return $this
     */
    public function setBuildContext($buildContext)
    {
        $this->container['buildContext'] = $buildContext;

        return $this;
    }


    /**
     * Gets dockerfilePath
     * @return string
     */
    public function getDockerfilePath()
    {
        return $this->container['dockerfilePath'];
    }

    /**
     * Sets dockerfilePath
     * @param string $dockerfilePath
     * @return $this
     */
    public function setDockerfilePath($dockerfilePath)
    {
        $this->container['dockerfilePath'] = $dockerfilePath;

        return $this;
    }


    /**
     * Gets pushRemote
     * @return boolean
     */
    public function getPushRemote()
    {
        return $this->container['pushRemote'];
    }

    /**
     * Sets pushRemote
     * @param boolean $pushRemote
     * @return $this
     */
    public function setPushRemote($pushRemote)
    {
        $this->container['pushRemote'] = $pushRemote;

        return $this;
    }


    /**
     * Gets registry
     * @return string
     */
    public function getRegistry()
    {
        return $this->container['registry'];
    }

    /**
     * Sets registry
     * @param string $registry
     * @return $this
     */
    public function setRegistry($registry)
    {
        $this->container['registry'] = $registry;

        return $this;
    }


    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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

