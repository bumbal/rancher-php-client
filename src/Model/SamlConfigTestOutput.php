<?php

namespace Rancher\Model;

use \ArrayAccess;

class SamlConfigTestOutput implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'idpRedirectUrl' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'idpRedirectUrl' => 'setIdpRedirectUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'idpRedirectUrl' => 'getIdpRedirectUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['idpRedirectUrl'] = isset($data['idpRedirectUrl']) ? $data['idpRedirectUrl'] : null;
    }

    /**
     * Gets idpRedirectUrl
     * @return string
     */
    public function getIdpRedirectUrl()
    {
        return $this->container['idpRedirectUrl'];
    }

    /**
     * Sets idpRedirectUrl
     * @param string $idpRedirectUrl
     * @return $this
     */
    public function setIdpRedirectUrl($idpRedirectUrl)
    {
        $this->container['idpRedirectUrl'] = $idpRedirectUrl;

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

