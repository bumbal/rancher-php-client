<?php

/**
 * ServicePortModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ServicePortModel implements ArrayAccess
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
        'appProtocol',
        'name',
        'nodePort',
        'port',
        'protocol',
        'targetPort',
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
        'appProtocol',
        'name',
        'nodePort',
        'port',
        'protocol',
        'targetPort',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'appProtocol' => 'string',
        'name' => 'string',
        'nodePort' => 'int',
        'port' => 'int',
        'protocol' => 'string',
        'targetPort' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'appProtocol' => 'setAppProtocol',
        'name' => 'setName',
        'nodePort' => 'setNodePort',
        'port' => 'setPort',
        'protocol' => 'setProtocol',
        'targetPort' => 'setTargetPort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'appProtocol' => 'getAppProtocol',
        'name' => 'getName',
        'nodePort' => 'getNodePort',
        'port' => 'getPort',
        'protocol' => 'getProtocol',
        'targetPort' => 'getTargetPort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['appProtocol'] = isset($data['appProtocol']) ? $data['appProtocol'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodePort'] = isset($data['nodePort']) ? $data['nodePort'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['targetPort'] = isset($data['targetPort']) ? $data['targetPort'] : null;
    }

    /**
     * Gets appProtocol
     * @return string
     */
    public function getAppProtocol()
    {
        return $this->container['appProtocol'];
    }

    /**
     * Sets appProtocol
     * @param string $appProtocol
     * @return $this
     */
    public function setAppProtocol($appProtocol)
    {
        $this->container['appProtocol'] = $appProtocol;

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
     * Gets nodePort
     * @return int
     */
    public function getNodePort()
    {
        return $this->container['nodePort'];
    }

    /**
     * Sets nodePort
     * @param int $nodePort
     * @return $this
     */
    public function setNodePort($nodePort)
    {
        $this->container['nodePort'] = $nodePort;

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
     * Gets targetPort
     * @return string
     */
    public function getTargetPort()
    {
        return $this->container['targetPort'];
    }

    /**
     * Sets targetPort
     * @param string $targetPort
     * @return $this
     */
    public function setTargetPort($targetPort)
    {
        $this->container['targetPort'] = $targetPort;

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

