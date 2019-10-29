<?php

namespace Rancher\Model;

use \ArrayAccess;

class IngressTLS implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'certificateId' => 'string',
        'hosts' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'certificateId' => 'setCertificateId',
        'hosts' => 'setHosts',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'certificateId' => 'getCertificateId',
        'hosts' => 'getHosts',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
    }

    /**
     * Gets certificateId
     * @return string
     */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
     * Sets certificateId
     * @param string $certificateId
     * @return $this
     */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;

        return $this;
    }


    /**
     * Gets hosts
     * @return string[]
     */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
     * Sets hosts
     * @param string[] $hosts
     * @return $this
     */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;

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

