<?php

namespace Rancher\Model;

use \ArrayAccess;

class GitRepoVolumeSource implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'directory' => 'string',
        'repository' => 'string',
        'revision' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'directory' => 'setDirectory',
        'repository' => 'setRepository',
        'revision' => 'setRevision',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'directory' => 'getDirectory',
        'repository' => 'getRepository',
        'revision' => 'getRevision',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
    }

    /**
     * Gets directory
     * @return string
     */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
     * Sets directory
     * @param string $directory
     * @return $this
     */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;

        return $this;
    }


    /**
     * Gets repository
     * @return string
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     * @param string $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;

        return $this;
    }


    /**
     * Gets revision
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     * @param string $revision
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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

