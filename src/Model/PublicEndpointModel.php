<?php

/**
 * PublicEndpointModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PublicEndpointModel implements ArrayAccess
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'addresses' => 'string[]',
        'allNodes' => 'boolean',
        'hostname' => 'string',
        'ingressId' => 'string',
        'nodeId' => 'string',
        'path' => 'string',
        'podId' => 'string',
        'port' => 'int',
        'protocol' => 'string',
        'serviceId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'addresses' => 'setAddresses',
        'allNodes' => 'setAllNodes',
        'hostname' => 'setHostname',
        'ingressId' => 'setIngressId',
        'nodeId' => 'setNodeId',
        'path' => 'setPath',
        'podId' => 'setPodId',
        'port' => 'setPort',
        'protocol' => 'setProtocol',
        'serviceId' => 'setServiceId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'addresses' => 'getAddresses',
        'allNodes' => 'getAllNodes',
        'hostname' => 'getHostname',
        'ingressId' => 'getIngressId',
        'nodeId' => 'getNodeId',
        'path' => 'getPath',
        'podId' => 'getPodId',
        'port' => 'getPort',
        'protocol' => 'getProtocol',
        'serviceId' => 'getServiceId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['allNodes'] = isset($data['allNodes']) ? $data['allNodes'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['ingressId'] = isset($data['ingressId']) ? $data['ingressId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
    }

    /**
     * Gets addresses
     * @return string[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param string[] $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }


    /**
     * Gets allNodes
     * @return boolean
     */
    public function getAllNodes()
    {
        return $this->container['allNodes'];
    }

    /**
     * Sets allNodes
     * @param boolean $allNodes
     * @return $this
     */
    public function setAllNodes($allNodes)
    {
        $this->container['allNodes'] = $allNodes;

        return $this;
    }


    /**
     * Gets hostname
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     * @param string $hostname
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }


    /**
     * Gets ingressId
     * @return string
     */
    public function getIngressId()
    {
        return $this->container['ingressId'];
    }

    /**
     * Sets ingressId
     * @param string $ingressId
     * @return $this
     */
    public function setIngressId($ingressId)
    {
        $this->container['ingressId'] = $ingressId;

        return $this;
    }


    /**
     * Gets nodeId
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets podId
     * @return string
     */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
     * Sets podId
     * @param string $podId
     * @return $this
     */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;

        return $this;
    }


    /**
     * Gets port
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

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
     * Gets serviceId
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
     * Sets serviceId
     * @param string $serviceId
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

