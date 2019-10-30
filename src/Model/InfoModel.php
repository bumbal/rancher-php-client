<?php

/**
 * InfoModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class InfoModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'buildDate' => 'string',
        'compiler' => 'string',
        'gitCommit' => 'string',
        'gitTreeState' => 'string',
        'gitVersion' => 'string',
        'goVersion' => 'string',
        'major' => 'string',
        'minor' => 'string',
        'platform' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'buildDate' => 'setBuildDate',
        'compiler' => 'setCompiler',
        'gitCommit' => 'setGitCommit',
        'gitTreeState' => 'setGitTreeState',
        'gitVersion' => 'setGitVersion',
        'goVersion' => 'setGoVersion',
        'major' => 'setMajor',
        'minor' => 'setMinor',
        'platform' => 'setPlatform',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'buildDate' => 'getBuildDate',
        'compiler' => 'getCompiler',
        'gitCommit' => 'getGitCommit',
        'gitTreeState' => 'getGitTreeState',
        'gitVersion' => 'getGitVersion',
        'goVersion' => 'getGoVersion',
        'major' => 'getMajor',
        'minor' => 'getMinor',
        'platform' => 'getPlatform',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['buildDate'] = isset($data['buildDate']) ? $data['buildDate'] : null;
        $this->container['compiler'] = isset($data['compiler']) ? $data['compiler'] : null;
        $this->container['gitCommit'] = isset($data['gitCommit']) ? $data['gitCommit'] : null;
        $this->container['gitTreeState'] = isset($data['gitTreeState']) ? $data['gitTreeState'] : null;
        $this->container['gitVersion'] = isset($data['gitVersion']) ? $data['gitVersion'] : null;
        $this->container['goVersion'] = isset($data['goVersion']) ? $data['goVersion'] : null;
        $this->container['major'] = isset($data['major']) ? $data['major'] : null;
        $this->container['minor'] = isset($data['minor']) ? $data['minor'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
    }

    /**
     * Gets buildDate
     * @return string
     */
    public function getBuildDate()
    {
        return $this->container['buildDate'];
    }

    /**
     * Sets buildDate
     * @param string $buildDate
     * @return $this
     */
    public function setBuildDate($buildDate)
    {
        $this->container['buildDate'] = $buildDate;

        return $this;
    }


    /**
     * Gets compiler
     * @return string
     */
    public function getCompiler()
    {
        return $this->container['compiler'];
    }

    /**
     * Sets compiler
     * @param string $compiler
     * @return $this
     */
    public function setCompiler($compiler)
    {
        $this->container['compiler'] = $compiler;

        return $this;
    }


    /**
     * Gets gitCommit
     * @return string
     */
    public function getGitCommit()
    {
        return $this->container['gitCommit'];
    }

    /**
     * Sets gitCommit
     * @param string $gitCommit
     * @return $this
     */
    public function setGitCommit($gitCommit)
    {
        $this->container['gitCommit'] = $gitCommit;

        return $this;
    }


    /**
     * Gets gitTreeState
     * @return string
     */
    public function getGitTreeState()
    {
        return $this->container['gitTreeState'];
    }

    /**
     * Sets gitTreeState
     * @param string $gitTreeState
     * @return $this
     */
    public function setGitTreeState($gitTreeState)
    {
        $this->container['gitTreeState'] = $gitTreeState;

        return $this;
    }


    /**
     * Gets gitVersion
     * @return string
     */
    public function getGitVersion()
    {
        return $this->container['gitVersion'];
    }

    /**
     * Sets gitVersion
     * @param string $gitVersion
     * @return $this
     */
    public function setGitVersion($gitVersion)
    {
        $this->container['gitVersion'] = $gitVersion;

        return $this;
    }


    /**
     * Gets goVersion
     * @return string
     */
    public function getGoVersion()
    {
        return $this->container['goVersion'];
    }

    /**
     * Sets goVersion
     * @param string $goVersion
     * @return $this
     */
    public function setGoVersion($goVersion)
    {
        $this->container['goVersion'] = $goVersion;

        return $this;
    }


    /**
     * Gets major
     * @return string
     */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
     * Sets major
     * @param string $major
     * @return $this
     */
    public function setMajor($major)
    {
        $this->container['major'] = $major;

        return $this;
    }


    /**
     * Gets minor
     * @return string
     */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
     * Sets minor
     * @param string $minor
     * @return $this
     */
    public function setMinor($minor)
    {
        $this->container['minor'] = $minor;

        return $this;
    }


    /**
     * Gets platform
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

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

