<?php

/**
 * KubernetesInfoModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubernetesInfoModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'kubeProxyVersion' => 'string',
        'kubeletVersion' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'kubeProxyVersion' => 'setKubeProxyVersion',
        'kubeletVersion' => 'setKubeletVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'kubeProxyVersion' => 'getKubeProxyVersion',
        'kubeletVersion' => 'getKubeletVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['kubeProxyVersion'] = isset($data['kubeProxyVersion']) ? $data['kubeProxyVersion'] : null;
        $this->container['kubeletVersion'] = isset($data['kubeletVersion']) ? $data['kubeletVersion'] : null;
    }

    /**
     * Gets kubeProxyVersion
     * @return string
     */
    public function getKubeProxyVersion()
    {
        return $this->container['kubeProxyVersion'];
    }

    /**
     * Sets kubeProxyVersion
     * @param string $kubeProxyVersion
     * @return $this
     */
    public function setKubeProxyVersion($kubeProxyVersion)
    {
        $this->container['kubeProxyVersion'] = $kubeProxyVersion;

        return $this;
    }


    /**
     * Gets kubeletVersion
     * @return string
     */
    public function getKubeletVersion()
    {
        return $this->container['kubeletVersion'];
    }

    /**
     * Sets kubeletVersion
     * @param string $kubeletVersion
     * @return $this
     */
    public function setKubeletVersion($kubeletVersion)
    {
        $this->container['kubeletVersion'] = $kubeletVersion;

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

