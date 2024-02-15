<?php

/**
 * AksNodePoolModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AksNodePoolModel implements ArrayAccess
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
        'availabilityZones',
        'count',
        'enableAutoScaling',
        'maxCount',
        'maxPods',
        'maxSurge',
        'minCount',
        'mode',
        'name',
        'nodeLabels',
        'nodeTaints',
        'orchestratorVersion',
        'osDiskSizeGB',
        'osDiskType',
        'osType',
        'vmSize',
        'vnetSubnetID',
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
        'availabilityZones',
        'count',
        'enableAutoScaling',
        'maxCount',
        'maxPods',
        'maxSurge',
        'minCount',
        'mode',
        'name',
        'nodeLabels',
        'nodeTaints',
        'orchestratorVersion',
        'osDiskSizeGB',
        'osDiskType',
        'osType',
        'vmSize',
        'vnetSubnetID',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'availabilityZones' => 'string[]',
        'count' => 'int',
        'enableAutoScaling' => 'boolean',
        'maxCount' => 'int',
        'maxPods' => 'int',
        'maxSurge' => 'string',
        'minCount' => 'int',
        'mode' => 'string',
        'name' => 'string',
        'nodeLabels' => 'map[string,string]',
        'nodeTaints' => 'string[]',
        'orchestratorVersion' => 'string',
        'osDiskSizeGB' => 'int',
        'osDiskType' => 'string',
        'osType' => 'string',
        'vmSize' => 'string',
        'vnetSubnetID' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'availabilityZones' => 'setAvailabilityZones',
        'count' => 'setCount',
        'enableAutoScaling' => 'setEnableAutoScaling',
        'maxCount' => 'setMaxCount',
        'maxPods' => 'setMaxPods',
        'maxSurge' => 'setMaxSurge',
        'minCount' => 'setMinCount',
        'mode' => 'setMode',
        'name' => 'setName',
        'nodeLabels' => 'setNodeLabels',
        'nodeTaints' => 'setNodeTaints',
        'orchestratorVersion' => 'setOrchestratorVersion',
        'osDiskSizeGB' => 'setOsDiskSizeGB',
        'osDiskType' => 'setOsDiskType',
        'osType' => 'setOsType',
        'vmSize' => 'setVmSize',
        'vnetSubnetID' => 'setVnetSubnetID',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'availabilityZones' => 'getAvailabilityZones',
        'count' => 'getCount',
        'enableAutoScaling' => 'getEnableAutoScaling',
        'maxCount' => 'getMaxCount',
        'maxPods' => 'getMaxPods',
        'maxSurge' => 'getMaxSurge',
        'minCount' => 'getMinCount',
        'mode' => 'getMode',
        'name' => 'getName',
        'nodeLabels' => 'getNodeLabels',
        'nodeTaints' => 'getNodeTaints',
        'orchestratorVersion' => 'getOrchestratorVersion',
        'osDiskSizeGB' => 'getOsDiskSizeGB',
        'osDiskType' => 'getOsDiskType',
        'osType' => 'getOsType',
        'vmSize' => 'getVmSize',
        'vnetSubnetID' => 'getVnetSubnetID',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['enableAutoScaling'] = isset($data['enableAutoScaling']) ? $data['enableAutoScaling'] : null;
        $this->container['maxCount'] = isset($data['maxCount']) ? $data['maxCount'] : null;
        $this->container['maxPods'] = isset($data['maxPods']) ? $data['maxPods'] : null;
        $this->container['maxSurge'] = isset($data['maxSurge']) ? $data['maxSurge'] : null;
        $this->container['minCount'] = isset($data['minCount']) ? $data['minCount'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeLabels'] = isset($data['nodeLabels']) ? $data['nodeLabels'] : null;
        $this->container['nodeTaints'] = isset($data['nodeTaints']) ? $data['nodeTaints'] : null;
        $this->container['orchestratorVersion'] = isset($data['orchestratorVersion']) ? $data['orchestratorVersion'] : null;
        $this->container['osDiskSizeGB'] = isset($data['osDiskSizeGB']) ? $data['osDiskSizeGB'] : null;
        $this->container['osDiskType'] = isset($data['osDiskType']) ? $data['osDiskType'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['vmSize'] = isset($data['vmSize']) ? $data['vmSize'] : null;
        $this->container['vnetSubnetID'] = isset($data['vnetSubnetID']) ? $data['vnetSubnetID'] : null;
    }

    /**
     * Gets availabilityZones
     * @return string[]
     */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
     * Sets availabilityZones
     * @param string[] $availabilityZones
     * @return $this
     */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;

        return $this;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }


    /**
     * Gets enableAutoScaling
     * @return boolean
     */
    public function getEnableAutoScaling()
    {
        return $this->container['enableAutoScaling'];
    }

    /**
     * Sets enableAutoScaling
     * @param boolean $enableAutoScaling
     * @return $this
     */
    public function setEnableAutoScaling($enableAutoScaling)
    {
        $this->container['enableAutoScaling'] = $enableAutoScaling;

        return $this;
    }


    /**
     * Gets maxCount
     * @return int
     */
    public function getMaxCount()
    {
        return $this->container['maxCount'];
    }

    /**
     * Sets maxCount
     * @param int $maxCount
     * @return $this
     */
    public function setMaxCount($maxCount)
    {
        $this->container['maxCount'] = $maxCount;

        return $this;
    }


    /**
     * Gets maxPods
     * @return int
     */
    public function getMaxPods()
    {
        return $this->container['maxPods'];
    }

    /**
     * Sets maxPods
     * @param int $maxPods
     * @return $this
     */
    public function setMaxPods($maxPods)
    {
        $this->container['maxPods'] = $maxPods;

        return $this;
    }


    /**
     * Gets maxSurge
     * @return string
     */
    public function getMaxSurge()
    {
        return $this->container['maxSurge'];
    }

    /**
     * Sets maxSurge
     * @param string $maxSurge
     * @return $this
     */
    public function setMaxSurge($maxSurge)
    {
        $this->container['maxSurge'] = $maxSurge;

        return $this;
    }


    /**
     * Gets minCount
     * @return int
     */
    public function getMinCount()
    {
        return $this->container['minCount'];
    }

    /**
     * Sets minCount
     * @param int $minCount
     * @return $this
     */
    public function setMinCount($minCount)
    {
        $this->container['minCount'] = $minCount;

        return $this;
    }


    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets nodeLabels
     * @return string[]
     */
    public function getNodeLabels()
    {
        return $this->container['nodeLabels'];
    }

    /**
     * Sets nodeLabels
     * @param string[] $nodeLabels
     * @return $this
     */
    public function setNodeLabels($nodeLabels)
    {
        $this->container['nodeLabels'] = $nodeLabels;

        return $this;
    }


    /**
     * Gets nodeTaints
     * @return string[]
     */
    public function getNodeTaints()
    {
        return $this->container['nodeTaints'];
    }

    /**
     * Sets nodeTaints
     * @param string[] $nodeTaints
     * @return $this
     */
    public function setNodeTaints($nodeTaints)
    {
        $this->container['nodeTaints'] = $nodeTaints;

        return $this;
    }


    /**
     * Gets orchestratorVersion
     * @return string
     */
    public function getOrchestratorVersion()
    {
        return $this->container['orchestratorVersion'];
    }

    /**
     * Sets orchestratorVersion
     * @param string $orchestratorVersion
     * @return $this
     */
    public function setOrchestratorVersion($orchestratorVersion)
    {
        $this->container['orchestratorVersion'] = $orchestratorVersion;

        return $this;
    }


    /**
     * Gets osDiskSizeGB
     * @return int
     */
    public function getOsDiskSizeGB()
    {
        return $this->container['osDiskSizeGB'];
    }

    /**
     * Sets osDiskSizeGB
     * @param int $osDiskSizeGB
     * @return $this
     */
    public function setOsDiskSizeGB($osDiskSizeGB)
    {
        $this->container['osDiskSizeGB'] = $osDiskSizeGB;

        return $this;
    }


    /**
     * Gets osDiskType
     * @return string
     */
    public function getOsDiskType()
    {
        return $this->container['osDiskType'];
    }

    /**
     * Sets osDiskType
     * @param string $osDiskType
     * @return $this
     */
    public function setOsDiskType($osDiskType)
    {
        $this->container['osDiskType'] = $osDiskType;

        return $this;
    }


    /**
     * Gets osType
     * @return string
     */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
     * Sets osType
     * @param string $osType
     * @return $this
     */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;

        return $this;
    }


    /**
     * Gets vmSize
     * @return string
     */
    public function getVmSize()
    {
        return $this->container['vmSize'];
    }

    /**
     * Sets vmSize
     * @param string $vmSize
     * @return $this
     */
    public function setVmSize($vmSize)
    {
        $this->container['vmSize'] = $vmSize;

        return $this;
    }


    /**
     * Gets vnetSubnetID
     * @return string
     */
    public function getVnetSubnetID()
    {
        return $this->container['vnetSubnetID'];
    }

    /**
     * Sets vnetSubnetID
     * @param string $vnetSubnetID
     * @return $this
     */
    public function setVnetSubnetID($vnetSubnetID)
    {
        $this->container['vnetSubnetID'] = $vnetSubnetID;

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

