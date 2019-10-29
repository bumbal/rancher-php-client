<?php

namespace Rancher\Model;

use \ArrayAccess;

class RkeConfigServices implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'etcd' => '\Rancher\Model\EtcdService',
        'kubeApi' => '\Rancher\Model\KubeAPIService',
        'kubeController' => '\Rancher\Model\KubeControllerService',
        'kubelet' => '\Rancher\Model\KubeletService',
        'kubeproxy' => '\Rancher\Model\KubeproxyService',
        'scheduler' => '\Rancher\Model\SchedulerService',
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
     * @return \Rancher\Model\EtcdService
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param \Rancher\Model\EtcdService $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets kubeApi
     * @return \Rancher\Model\KubeAPIService
     */
    public function getKubeApi()
    {
        return $this->container['kubeApi'];
    }

    /**
     * Sets kubeApi
     * @param \Rancher\Model\KubeAPIService $kubeApi
     * @return $this
     */
    public function setKubeApi($kubeApi)
    {
        $this->container['kubeApi'] = $kubeApi;

        return $this;
    }


    /**
     * Gets kubeController
     * @return \Rancher\Model\KubeControllerService
     */
    public function getKubeController()
    {
        return $this->container['kubeController'];
    }

    /**
     * Sets kubeController
     * @param \Rancher\Model\KubeControllerService $kubeController
     * @return $this
     */
    public function setKubeController($kubeController)
    {
        $this->container['kubeController'] = $kubeController;

        return $this;
    }


    /**
     * Gets kubelet
     * @return \Rancher\Model\KubeletService
     */
    public function getKubelet()
    {
        return $this->container['kubelet'];
    }

    /**
     * Sets kubelet
     * @param \Rancher\Model\KubeletService $kubelet
     * @return $this
     */
    public function setKubelet($kubelet)
    {
        $this->container['kubelet'] = $kubelet;

        return $this;
    }


    /**
     * Gets kubeproxy
     * @return \Rancher\Model\KubeproxyService
     */
    public function getKubeproxy()
    {
        return $this->container['kubeproxy'];
    }

    /**
     * Sets kubeproxy
     * @param \Rancher\Model\KubeproxyService $kubeproxy
     * @return $this
     */
    public function setKubeproxy($kubeproxy)
    {
        $this->container['kubeproxy'] = $kubeproxy;

        return $this;
    }


    /**
     * Gets scheduler
     * @return \Rancher\Model\SchedulerService
     */
    public function getScheduler()
    {
        return $this->container['scheduler'];
    }

    /**
     * Sets scheduler
     * @param \Rancher\Model\SchedulerService $scheduler
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

