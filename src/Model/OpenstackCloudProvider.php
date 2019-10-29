<?php

namespace Rancher\Model;

use \ArrayAccess;

class OpenstackCloudProvider implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'blockStorage' => '\Rancher\Model\BlockStorageOpenstackOpts',
        'global' => '\Rancher\Model\GlobalOpenstackOpts',
        'loadBalancer' => '\Rancher\Model\LoadBalancerOpenstackOpts',
        'metadata' => '\Rancher\Model\MetadataOpenstackOpts',
        'route' => '\Rancher\Model\RouteOpenstackOpts',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'blockStorage' => 'setBlockStorage',
        'global' => 'setGlobal',
        'loadBalancer' => 'setLoadBalancer',
        'metadata' => 'setMetadata',
        'route' => 'setRoute',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'blockStorage' => 'getBlockStorage',
        'global' => 'getGlobal',
        'loadBalancer' => 'getLoadBalancer',
        'metadata' => 'getMetadata',
        'route' => 'getRoute',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['blockStorage'] = isset($data['blockStorage']) ? $data['blockStorage'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
        $this->container['loadBalancer'] = isset($data['loadBalancer']) ? $data['loadBalancer'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
    }

    /**
     * Gets blockStorage
     * @return \Rancher\Model\BlockStorageOpenstackOpts
     */
    public function getBlockStorage()
    {
        return $this->container['blockStorage'];
    }

    /**
     * Sets blockStorage
     * @param \Rancher\Model\BlockStorageOpenstackOpts $blockStorage
     * @return $this
     */
    public function setBlockStorage($blockStorage)
    {
        $this->container['blockStorage'] = $blockStorage;

        return $this;
    }


    /**
     * Gets global
     * @return \Rancher\Model\GlobalOpenstackOpts
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     * @param \Rancher\Model\GlobalOpenstackOpts $global
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }


    /**
     * Gets loadBalancer
     * @return \Rancher\Model\LoadBalancerOpenstackOpts
     */
    public function getLoadBalancer()
    {
        return $this->container['loadBalancer'];
    }

    /**
     * Sets loadBalancer
     * @param \Rancher\Model\LoadBalancerOpenstackOpts $loadBalancer
     * @return $this
     */
    public function setLoadBalancer($loadBalancer)
    {
        $this->container['loadBalancer'] = $loadBalancer;

        return $this;
    }


    /**
     * Gets metadata
     * @return \Rancher\Model\MetadataOpenstackOpts
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \Rancher\Model\MetadataOpenstackOpts $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }


    /**
     * Gets route
     * @return \Rancher\Model\RouteOpenstackOpts
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param \Rancher\Model\RouteOpenstackOpts $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

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

