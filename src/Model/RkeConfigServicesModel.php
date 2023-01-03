<?php

/**
 * RkeConfigServicesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RkeConfigServicesModel implements ArrayAccess
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
        'kubeApi',
        'kubeController',
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
        'kubeApi',
        'kubeController',
        'kubelet',
        'kubeproxy',
        'scheduler',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'etcd' => '\Rancher\Model\EtcdServiceModel',
        'kubeApi' => '\Rancher\Model\KubeAPIServiceModel',
        'kubeController' => '\Rancher\Model\KubeControllerServiceModel',
        'kubelet' => '\Rancher\Model\KubeletServiceModel',
        'kubeproxy' => '\Rancher\Model\KubeproxyServiceModel',
        'scheduler' => '\Rancher\Model\SchedulerServiceModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'etcd' => 'setEtcd',
        'kubeApi' => 'setKubeApi',
        'kubeController' => 'setKubeController',
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
        'kubeApi' => 'getKubeApi',
        'kubeController' => 'getKubeController',
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
        $this->container['kubeApi'] = isset($data['kubeApi']) ? $data['kubeApi'] : null;
        $this->container['kubeController'] = isset($data['kubeController']) ? $data['kubeController'] : null;
        $this->container['kubelet'] = isset($data['kubelet']) ? $data['kubelet'] : null;
        $this->container['kubeproxy'] = isset($data['kubeproxy']) ? $data['kubeproxy'] : null;
        $this->container['scheduler'] = isset($data['scheduler']) ? $data['scheduler'] : null;
    }

    /**
     * Gets etcd
     * @return \Rancher\Model\EtcdServiceModel
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param \Rancher\Model\EtcdServiceModel $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets kubeApi
     * @return \Rancher\Model\KubeAPIServiceModel
     */
    public function getKubeApi()
    {
        return $this->container['kubeApi'];
    }

    /**
     * Sets kubeApi
     * @param \Rancher\Model\KubeAPIServiceModel $kubeApi
     * @return $this
     */
    public function setKubeApi($kubeApi)
    {
        $this->container['kubeApi'] = $kubeApi;

        return $this;
    }


    /**
     * Gets kubeController
     * @return \Rancher\Model\KubeControllerServiceModel
     */
    public function getKubeController()
    {
        return $this->container['kubeController'];
    }

    /**
     * Sets kubeController
     * @param \Rancher\Model\KubeControllerServiceModel $kubeController
     * @return $this
     */
    public function setKubeController($kubeController)
    {
        $this->container['kubeController'] = $kubeController;

        return $this;
    }


    /**
     * Gets kubelet
     * @return \Rancher\Model\KubeletServiceModel
     */
    public function getKubelet()
    {
        return $this->container['kubelet'];
    }

    /**
     * Sets kubelet
     * @param \Rancher\Model\KubeletServiceModel $kubelet
     * @return $this
     */
    public function setKubelet($kubelet)
    {
        $this->container['kubelet'] = $kubelet;

        return $this;
    }


    /**
     * Gets kubeproxy
     * @return \Rancher\Model\KubeproxyServiceModel
     */
    public function getKubeproxy()
    {
        return $this->container['kubeproxy'];
    }

    /**
     * Sets kubeproxy
     * @param \Rancher\Model\KubeproxyServiceModel $kubeproxy
     * @return $this
     */
    public function setKubeproxy($kubeproxy)
    {
        $this->container['kubeproxy'] = $kubeproxy;

        return $this;
    }


    /**
     * Gets scheduler
     * @return \Rancher\Model\SchedulerServiceModel
     */
    public function getScheduler()
    {
        return $this->container['scheduler'];
    }

    /**
     * Sets scheduler
     * @param \Rancher\Model\SchedulerServiceModel $scheduler
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

