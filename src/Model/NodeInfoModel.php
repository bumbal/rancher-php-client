<?php

/**
 * NodeInfoModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeInfoModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'cpu' => '\Rancher\Model\CpuInfoModel',
        'kubernetes' => '\Rancher\Model\KubernetesInfoModel',
        'memory' => '\Rancher\Model\MemoryInfoModel',
        'os' => '\Rancher\Model\OsInfoModel',
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
     * @return \Rancher\Model\CpuInfoModel
     */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
     * Sets cpu
     * @param \Rancher\Model\CpuInfoModel $cpu
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;

        return $this;
    }


    /**
     * Gets kubernetes
     * @return \Rancher\Model\KubernetesInfoModel
     */
    public function getKubernetes()
    {
        return $this->container['kubernetes'];
    }

    /**
     * Sets kubernetes
     * @param \Rancher\Model\KubernetesInfoModel $kubernetes
     * @return $this
     */
    public function setKubernetes($kubernetes)
    {
        $this->container['kubernetes'] = $kubernetes;

        return $this;
    }


    /**
     * Gets memory
     * @return \Rancher\Model\MemoryInfoModel
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     * @param \Rancher\Model\MemoryInfoModel $memory
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }


    /**
     * Gets os
     * @return \Rancher\Model\OsInfoModel
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param \Rancher\Model\OsInfoModel $os
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

