<?php

/**
 * K3sConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class K3sConfigModel implements ArrayAccess
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
        'k3supgradeStrategy',
        'kubernetesVersion',
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
        'k3supgradeStrategy',
        'kubernetesVersion',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'k3supgradeStrategy' => '\Rancher\Model\ClusterUpgradeStrategyModel',
        'kubernetesVersion' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'k3supgradeStrategy' => 'setK3supgradeStrategy',
        'kubernetesVersion' => 'setKubernetesVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'k3supgradeStrategy' => 'getK3supgradeStrategy',
        'kubernetesVersion' => 'getKubernetesVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['k3supgradeStrategy'] = isset($data['k3supgradeStrategy']) ? $data['k3supgradeStrategy'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
    }

    /**
     * Gets k3supgradeStrategy
     * @return \Rancher\Model\ClusterUpgradeStrategyModel
     */
    public function getK3supgradeStrategy()
    {
        return $this->container['k3supgradeStrategy'];
    }

    /**
     * Sets k3supgradeStrategy
     * @param \Rancher\Model\ClusterUpgradeStrategyModel $k3supgradeStrategy
     * @return $this
     */
    public function setK3supgradeStrategy($k3supgradeStrategy)
    {
        $this->container['k3supgradeStrategy'] = $k3supgradeStrategy;

        return $this;
    }


    /**
     * Gets kubernetesVersion
     * @return string
     */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
     * Sets kubernetesVersion
     * @param string $kubernetesVersion
     * @return $this
     */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;

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

