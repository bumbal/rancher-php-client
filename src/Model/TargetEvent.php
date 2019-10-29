<?php

namespace Rancher\Model;

use \ArrayAccess;

class TargetEvent implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'eventType' => 'string',
        'resourceKind' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'eventType' => 'setEventType',
        'resourceKind' => 'setResourceKind',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'eventType' => 'getEventType',
        'resourceKind' => 'getResourceKind',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['resourceKind'] = isset($data['resourceKind']) ? $data['resourceKind'] : null;
    }

    /**
     * Gets eventType
     * @return string
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     * @param string $eventType
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }


    /**
     * Gets resourceKind
     * @return string
     */
    public function getResourceKind()
    {
        return $this->container['resourceKind'];
    }

    /**
     * Sets resourceKind
     * @param string $resourceKind
     * @return $this
     */
    public function setResourceKind($resourceKind)
    {
        $this->container['resourceKind'] = $resourceKind;

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

