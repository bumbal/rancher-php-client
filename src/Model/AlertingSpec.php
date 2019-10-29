<?php

namespace Rancher\Model;

use \ArrayAccess;

class AlertingSpec implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'alertmanagers' => '\Rancher\Model\AlertmanagerEndpoints[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alertmanagers' => 'setAlertmanagers',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alertmanagers' => 'getAlertmanagers',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['alertmanagers'] = isset($data['alertmanagers']) ? $data['alertmanagers'] : null;
    }

    /**
     * Gets alertmanagers
     * @return \Rancher\Model\AlertmanagerEndpoints[]
     */
    public function getAlertmanagers()
    {
        return $this->container['alertmanagers'];
    }

    /**
     * Sets alertmanagers
     * @param \Rancher\Model\AlertmanagerEndpoints[] $alertmanagers
     * @return $this
     */
    public function setAlertmanagers($alertmanagers)
    {
        $this->container['alertmanagers'] = $alertmanagers;

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

