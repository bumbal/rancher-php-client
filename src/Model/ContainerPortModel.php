<?php

/**
 * ContainerPortModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ContainerPortModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    /**
     * Properties that can be created
     *
     * @var array
     */
    protected static $canBeCreated = [
        'containerPort',
        'dnsName',
        'hostIp',
        'kind',
        'name',
        'protocol',
        'sourcePort',
    ];

    public static function canBeCreated()
    {
        return self::$canBeCreated;
    }

    /**
     * Properties that can be updated
     *
     * @var array
     */
    protected static $canBeUpdated = [
        'containerPort',
        'dnsName',
        'hostIp',
        'kind',
        'name',
        'protocol',
        'sourcePort',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'containerPort' => 'int',
        'dnsName' => 'string',
        'hostIp' => 'string',
        'kind' => 'string',
        'name' => 'string',
        'protocol' => 'string',
        'sourcePort' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'containerPort' => 'setContainerPort',
        'dnsName' => 'setDnsName',
        'hostIp' => 'setHostIp',
        'kind' => 'setKind',
        'name' => 'setName',
        'protocol' => 'setProtocol',
        'sourcePort' => 'setSourcePort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'containerPort' => 'getContainerPort',
        'dnsName' => 'getDnsName',
        'hostIp' => 'getHostIp',
        'kind' => 'getKind',
        'name' => 'getName',
        'protocol' => 'getProtocol',
        'sourcePort' => 'getSourcePort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['containerPort'] = isset($data['containerPort']) ? $data['containerPort'] : null;
        $this->container['dnsName'] = isset($data['dnsName']) ? $data['dnsName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
    }

    /**
     * Gets containerPort
     * @return int
     */
    public function getContainerPort()
    {
        return $this->container['containerPort'];
    }

    /**
     * Sets containerPort
     * @param int $containerPort
     * @return $this
     */
    public function setContainerPort($containerPort)
    {
        $this->container['containerPort'] = $containerPort;

        return $this;
    }


    /**
     * Gets dnsName
     * @return string
     */
    public function getDnsName()
    {
        return $this->container['dnsName'];
    }

    /**
     * Sets dnsName
     * @param string $dnsName
     * @return $this
     */
    public function setDnsName($dnsName)
    {
        $this->container['dnsName'] = $dnsName;

        return $this;
    }


    /**
     * Gets hostIp
     * @return string
     */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
     * Sets hostIp
     * @param string $hostIp
     * @return $this
     */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;

        return $this;
    }


    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets protocol
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     * @param string $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }


    /**
     * Gets sourcePort
     * @return int
     */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
     * Sets sourcePort
     * @param int $sourcePort
     * @return $this
     */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;

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

