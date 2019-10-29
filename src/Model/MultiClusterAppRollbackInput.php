<?php

namespace Rancher\Model;

use \ArrayAccess;

class MultiClusterAppRollbackInput implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'revisionId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'revisionId' => 'setRevisionId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'revisionId' => 'getRevisionId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['revisionId'] = isset($data['revisionId']) ? $data['revisionId'] : null;
    }

    /**
     * Gets revisionId
     * @return string
     */
    public function getRevisionId()
    {
        return $this->container['revisionId'];
    }

    /**
     * Sets revisionId
     * @param string $revisionId
     * @return $this
     */
    public function setRevisionId($revisionId)
    {
        $this->container['revisionId'] = $revisionId;

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

