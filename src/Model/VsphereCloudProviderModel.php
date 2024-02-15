<?php

/**
 * VsphereCloudProviderModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class VsphereCloudProviderModel implements ArrayAccess
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
        'disk',
        'global',
        'network',
        'virtualCenter',
        'workspace',
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
        'disk',
        'global',
        'network',
        'virtualCenter',
        'workspace',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'disk' => '\Rancher\Model\DiskVsphereOptsModel',
        'global' => '\Rancher\Model\GlobalVsphereOptsModel',
        'network' => '\Rancher\Model\NetworkVshpereOptsModel',
        'virtualCenter' => 'map[string,\Rancher\Model\VirtualCenterConfigModel]',
        'workspace' => '\Rancher\Model\WorkspaceVsphereOptsModel',
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
     * @return \Rancher\Model\DiskVsphereOptsModel
     */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
     * Sets disk
     * @param \Rancher\Model\DiskVsphereOptsModel $disk
     * @return $this
     */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;

        return $this;
    }


    /**
     * Gets global
     * @return \Rancher\Model\GlobalVsphereOptsModel
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     * @param \Rancher\Model\GlobalVsphereOptsModel $global
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }


    /**
     * Gets network
     * @return \Rancher\Model\NetworkVshpereOptsModel
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param \Rancher\Model\NetworkVshpereOptsModel $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }


    /**
     * Gets virtualCenter
     * @return \Rancher\Model\VirtualCenterConfigModel[]
     */
    public function getVirtualCenter()
    {
        return $this->container['virtualCenter'];
    }

    /**
     * Sets virtualCenter
     * @param \Rancher\Model\VirtualCenterConfigModel[] $virtualCenter
     * @return $this
     */
    public function setVirtualCenter($virtualCenter)
    {
        $this->container['virtualCenter'] = $virtualCenter;

        return $this;
    }


    /**
     * Gets workspace
     * @return \Rancher\Model\WorkspaceVsphereOptsModel
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     * @param \Rancher\Model\WorkspaceVsphereOptsModel $workspace
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

