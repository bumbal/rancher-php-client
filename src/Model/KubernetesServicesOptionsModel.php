<?php

/**
 * KubernetesServicesOptionsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubernetesServicesOptionsModel implements ArrayAccess
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
        'etcd',
        'kubeController',
        'kubeapi',
        'kubelet',
        'kubeproxy',
        'scheduler',
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
        'etcd',
        'kubeController',
        'kubeapi',
        'kubelet',
        'kubeproxy',
        'scheduler',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'etcd' => 'map[string,string]',
        'kubeController' => 'map[string,string]',
        'kubeapi' => 'map[string,string]',
        'kubelet' => 'map[string,string]',
        'kubeproxy' => 'map[string,string]',
        'scheduler' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'etcd' => 'setEtcd',
        'kubeController' => 'setKubeController',
        'kubeapi' => 'setKubeapi',
        'kubelet' => 'setKubelet',
        'kubeproxy' => 'setKubeproxy',
        'scheduler' => 'setScheduler',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'etcd' => 'getEtcd',
        'kubeController' => 'getKubeController',
        'kubeapi' => 'getKubeapi',
        'kubelet' => 'getKubelet',
        'kubeproxy' => 'getKubeproxy',
        'scheduler' => 'getScheduler',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['etcd'] = isset($data['etcd']) ? $data['etcd'] : null;
        $this->container['kubeController'] = isset($data['kubeController']) ? $data['kubeController'] : null;
        $this->container['kubeapi'] = isset($data['kubeapi']) ? $data['kubeapi'] : null;
        $this->container['kubelet'] = isset($data['kubelet']) ? $data['kubelet'] : null;
        $this->container['kubeproxy'] = isset($data['kubeproxy']) ? $data['kubeproxy'] : null;
        $this->container['scheduler'] = isset($data['scheduler']) ? $data['scheduler'] : null;
    }

    /**
     * Gets etcd
     * @return string[]
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param string[] $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets kubeController
     * @return string[]
     */
    public function getKubeController()
    {
        return $this->container['kubeController'];
    }

    /**
     * Sets kubeController
     * @param string[] $kubeController
     * @return $this
     */
    public function setKubeController($kubeController)
    {
        $this->container['kubeController'] = $kubeController;

        return $this;
    }


    /**
     * Gets kubeapi
     * @return string[]
     */
    public function getKubeapi()
    {
        return $this->container['kubeapi'];
    }

    /**
     * Sets kubeapi
     * @param string[] $kubeapi
     * @return $this
     */
    public function setKubeapi($kubeapi)
    {
        $this->container['kubeapi'] = $kubeapi;

        return $this;
    }


    /**
     * Gets kubelet
     * @return string[]
     */
    public function getKubelet()
    {
        return $this->container['kubelet'];
    }

    /**
     * Sets kubelet
     * @param string[] $kubelet
     * @return $this
     */
    public function setKubelet($kubelet)
    {
        $this->container['kubelet'] = $kubelet;

        return $this;
    }


    /**
     * Gets kubeproxy
     * @return string[]
     */
    public function getKubeproxy()
    {
        return $this->container['kubeproxy'];
    }

    /**
     * Sets kubeproxy
     * @param string[] $kubeproxy
     * @return $this
     */
    public function setKubeproxy($kubeproxy)
    {
        $this->container['kubeproxy'] = $kubeproxy;

        return $this;
    }


    /**
     * Gets scheduler
     * @return string[]
     */
    public function getScheduler()
    {
        return $this->container['scheduler'];
    }

    /**
     * Sets scheduler
     * @param string[] $scheduler
     * @return $this
     */
    public function setScheduler($scheduler)
    {
        $this->container['scheduler'] = $scheduler;

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

