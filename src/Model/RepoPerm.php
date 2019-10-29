<?php

namespace Rancher\Model;

use \ArrayAccess;

class RepoPerm implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'admin' => 'boolean',
        'pull' => 'boolean',
        'push' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'admin' => 'setAdmin',
        'pull' => 'setPull',
        'push' => 'setPush',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'admin' => 'getAdmin',
        'pull' => 'getPull',
        'push' => 'getPush',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['pull'] = isset($data['pull']) ? $data['pull'] : null;
        $this->container['push'] = isset($data['push']) ? $data['push'] : null;
    }

    /**
     * Gets admin
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     * @param boolean $admin
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }


    /**
     * Gets pull
     * @return boolean
     */
    public function getPull()
    {
        return $this->container['pull'];
    }

    /**
     * Sets pull
     * @param boolean $pull
     * @return $this
     */
    public function setPull($pull)
    {
        $this->container['pull'] = $pull;

        return $this;
    }


    /**
     * Gets push
     * @return boolean
     */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
     * Sets push
     * @param boolean $push
     * @return $this
     */
    public function setPush($push)
    {
        $this->container['push'] = $push;

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

