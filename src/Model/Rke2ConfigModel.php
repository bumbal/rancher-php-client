<?php

/**
 * Rke2ConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class Rke2ConfigModel implements ArrayAccess
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
        'kubernetesVersion',
        'rke2upgradeStrategy',
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
        'kubernetesVersion',
        'rke2upgradeStrategy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'kubernetesVersion' => 'string',
        'rke2upgradeStrategy' => '\Rancher\Model\ClusterUpgradeStrategyModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'kubernetesVersion' => 'setKubernetesVersion',
        'rke2upgradeStrategy' => 'setRke2upgradeStrategy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'kubernetesVersion' => 'getKubernetesVersion',
        'rke2upgradeStrategy' => 'getRke2upgradeStrategy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['rke2upgradeStrategy'] = isset($data['rke2upgradeStrategy']) ? $data['rke2upgradeStrategy'] : null;
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
     * Gets rke2upgradeStrategy
     * @return \Rancher\Model\ClusterUpgradeStrategyModel
     */
    public function getRke2upgradeStrategy()
    {
        return $this->container['rke2upgradeStrategy'];
    }

    /**
     * Sets rke2upgradeStrategy
     * @param \Rancher\Model\ClusterUpgradeStrategyModel $rke2upgradeStrategy
     * @return $this
     */
    public function setRke2upgradeStrategy($rke2upgradeStrategy)
    {
        $this->container['rke2upgradeStrategy'] = $rke2upgradeStrategy;

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

