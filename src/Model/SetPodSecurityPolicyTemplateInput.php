<?php

namespace Rancher\Model;

use \ArrayAccess;

class SetPodSecurityPolicyTemplateInput implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'podSecurityPolicyTemplateId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'podSecurityPolicyTemplateId' => 'setPodSecurityPolicyTemplateId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'podSecurityPolicyTemplateId' => 'getPodSecurityPolicyTemplateId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['podSecurityPolicyTemplateId'] = isset($data['podSecurityPolicyTemplateId']) ? $data['podSecurityPolicyTemplateId'] : null;
    }

    /**
     * Gets podSecurityPolicyTemplateId
     * @return string
     */
    public function getPodSecurityPolicyTemplateId()
    {
        return $this->container['podSecurityPolicyTemplateId'];
    }

    /**
     * Sets podSecurityPolicyTemplateId
     * @param string $podSecurityPolicyTemplateId
     * @return $this
     */
    public function setPodSecurityPolicyTemplateId($podSecurityPolicyTemplateId)
    {
        $this->container['podSecurityPolicyTemplateId'] = $podSecurityPolicyTemplateId;

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

