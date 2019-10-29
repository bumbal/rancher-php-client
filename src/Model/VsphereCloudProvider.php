<?php

namespace Rancher\Model;

use \ArrayAccess;

class VsphereCloudProvider implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'disk' => '\Rancher\Model\DiskVsphereOpts',
        'global' => '\Rancher\Model\GlobalVsphereOpts',
        'network' => '\Rancher\Model\NetworkVshpereOpts',
        'virtualCenter' => 'map[\Rancher\Model\VirtualCenterConfig]',
        'workspace' => '\Rancher\Model\WorkspaceVsphereOpts',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'disk' => 'setDisk',
        'global' => 'setGlobal',
        'network' => 'setNetwork',
        'virtualCenter' => 'setVirtualCenter',
        'workspace' => 'setWorkspace',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'disk' => 'getDisk',
        'global' => 'getGlobal',
        'network' => 'getNetwork',
        'virtualCenter' => 'getVirtualCenter',
        'workspace' => 'getWorkspace',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['virtualCenter'] = isset($data['virtualCenter']) ? $data['virtualCenter'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
     * Gets disk
     * @return \Rancher\Model\DiskVsphereOpts
     */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
     * Sets disk
     * @param \Rancher\Model\DiskVsphereOpts $disk
     * @return $this
     */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;

        return $this;
    }


    /**
     * Gets global
     * @return \Rancher\Model\GlobalVsphereOpts
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     * @param \Rancher\Model\GlobalVsphereOpts $global
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }


    /**
     * Gets network
     * @return \Rancher\Model\NetworkVshpereOpts
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param \Rancher\Model\NetworkVshpereOpts $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }


    /**
     * Gets virtualCenter
     * @return \Rancher\Model\VirtualCenterConfig[]
     */
    public function getVirtualCenter()
    {
        return $this->container['virtualCenter'];
    }

    /**
     * Sets virtualCenter
     * @param \Rancher\Model\VirtualCenterConfig[] $virtualCenter
     * @return $this
     */
    public function setVirtualCenter($virtualCenter)
    {
        $this->container['virtualCenter'] = $virtualCenter;

        return $this;
    }


    /**
     * Gets workspace
     * @return \Rancher\Model\WorkspaceVsphereOpts
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     * @param \Rancher\Model\WorkspaceVsphereOpts $workspace
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

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

