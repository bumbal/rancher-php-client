<?php

namespace Rancher\Model;

use \ArrayAccess;

class SeLinuxStrategyOptions implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'rule' => 'string',
        'seLinuxOptions' => '\Rancher\Model\SeLinuxOptions',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'rule' => 'setRule',
        'seLinuxOptions' => 'setSeLinuxOptions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'rule' => 'getRule',
        'seLinuxOptions' => 'getSeLinuxOptions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['seLinuxOptions'] = isset($data['seLinuxOptions']) ? $data['seLinuxOptions'] : null;
    }

    /**
     * Gets rule
     * @return string
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     * @param string $rule
     * @return $this
     */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;

        return $this;
    }


    /**
     * Gets seLinuxOptions
     * @return \Rancher\Model\SeLinuxOptions
     */
    public function getSeLinuxOptions()
    {
        return $this->container['seLinuxOptions'];
    }

    /**
     * Sets seLinuxOptions
     * @param \Rancher\Model\SeLinuxOptions $seLinuxOptions
     * @return $this
     */
    public function setSeLinuxOptions($seLinuxOptions)
    {
        $this->container['seLinuxOptions'] = $seLinuxOptions;

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

