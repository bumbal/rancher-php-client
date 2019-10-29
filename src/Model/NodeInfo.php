<?php

namespace Rancher\Model;

use \ArrayAccess;

class NodeInfo implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'cpu' => '\Rancher\Model\CpuInfo',
        'kubernetes' => '\Rancher\Model\KubernetesInfo',
        'memory' => '\Rancher\Model\MemoryInfo',
        'os' => '\Rancher\Model\OsInfo',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cpu' => 'setCpu',
        'kubernetes' => 'setKubernetes',
        'memory' => 'setMemory',
        'os' => 'setOs',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cpu' => 'getCpu',
        'kubernetes' => 'getKubernetes',
        'memory' => 'getMemory',
        'os' => 'getOs',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['kubernetes'] = isset($data['kubernetes']) ? $data['kubernetes'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
    }

    /**
     * Gets cpu
     * @return \Rancher\Model\CpuInfo
     */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
     * Sets cpu
     * @param \Rancher\Model\CpuInfo $cpu
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;

        return $this;
    }


    /**
     * Gets kubernetes
     * @return \Rancher\Model\KubernetesInfo
     */
    public function getKubernetes()
    {
        return $this->container['kubernetes'];
    }

    /**
     * Sets kubernetes
     * @param \Rancher\Model\KubernetesInfo $kubernetes
     * @return $this
     */
    public function setKubernetes($kubernetes)
    {
        $this->container['kubernetes'] = $kubernetes;

        return $this;
    }


    /**
     * Gets memory
     * @return \Rancher\Model\MemoryInfo
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     * @param \Rancher\Model\MemoryInfo $memory
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }


    /**
     * Gets os
     * @return \Rancher\Model\OsInfo
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param \Rancher\Model\OsInfo $os
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

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

