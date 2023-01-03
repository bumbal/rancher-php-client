<?php

/**
 * GkeipAllocationPolicyModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeipAllocationPolicyModel implements ArrayAccess
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
        'clusterIpv4CidrBlock',
        'clusterSecondaryRangeName',
        'createSubnetwork',
        'nodeIpv4CidrBlock',
        'servicesIpv4CidrBlock',
        'servicesSecondaryRangeName',
        'subnetworkName',
        'useIpAliases',
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
        'clusterIpv4CidrBlock',
        'clusterSecondaryRangeName',
        'createSubnetwork',
        'nodeIpv4CidrBlock',
        'servicesIpv4CidrBlock',
        'servicesSecondaryRangeName',
        'subnetworkName',
        'useIpAliases',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterIpv4CidrBlock' => 'string',
        'clusterSecondaryRangeName' => 'string',
        'createSubnetwork' => 'boolean',
        'nodeIpv4CidrBlock' => 'string',
        'servicesIpv4CidrBlock' => 'string',
        'servicesSecondaryRangeName' => 'string',
        'subnetworkName' => 'string',
        'useIpAliases' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterIpv4CidrBlock' => 'setClusterIpv4CidrBlock',
        'clusterSecondaryRangeName' => 'setClusterSecondaryRangeName',
        'createSubnetwork' => 'setCreateSubnetwork',
        'nodeIpv4CidrBlock' => 'setNodeIpv4CidrBlock',
        'servicesIpv4CidrBlock' => 'setServicesIpv4CidrBlock',
        'servicesSecondaryRangeName' => 'setServicesSecondaryRangeName',
        'subnetworkName' => 'setSubnetworkName',
        'useIpAliases' => 'setUseIpAliases',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterIpv4CidrBlock' => 'getClusterIpv4CidrBlock',
        'clusterSecondaryRangeName' => 'getClusterSecondaryRangeName',
        'createSubnetwork' => 'getCreateSubnetwork',
        'nodeIpv4CidrBlock' => 'getNodeIpv4CidrBlock',
        'servicesIpv4CidrBlock' => 'getServicesIpv4CidrBlock',
        'servicesSecondaryRangeName' => 'getServicesSecondaryRangeName',
        'subnetworkName' => 'getSubnetworkName',
        'useIpAliases' => 'getUseIpAliases',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterIpv4CidrBlock'] = isset($data['clusterIpv4CidrBlock']) ? $data['clusterIpv4CidrBlock'] : null;
        $this->container['clusterSecondaryRangeName'] = isset($data['clusterSecondaryRangeName']) ? $data['clusterSecondaryRangeName'] : null;
        $this->container['createSubnetwork'] = isset($data['createSubnetwork']) ? $data['createSubnetwork'] : null;
        $this->container['nodeIpv4CidrBlock'] = isset($data['nodeIpv4CidrBlock']) ? $data['nodeIpv4CidrBlock'] : null;
        $this->container['servicesIpv4CidrBlock'] = isset($data['servicesIpv4CidrBlock']) ? $data['servicesIpv4CidrBlock'] : null;
        $this->container['servicesSecondaryRangeName'] = isset($data['servicesSecondaryRangeName']) ? $data['servicesSecondaryRangeName'] : null;
        $this->container['subnetworkName'] = isset($data['subnetworkName']) ? $data['subnetworkName'] : null;
        $this->container['useIpAliases'] = isset($data['useIpAliases']) ? $data['useIpAliases'] : null;
    }

    /**
     * Gets clusterIpv4CidrBlock
     * @return string
     */
    public function getClusterIpv4CidrBlock()
    {
        return $this->container['clusterIpv4CidrBlock'];
    }

    /**
     * Sets clusterIpv4CidrBlock
     * @param string $clusterIpv4CidrBlock
     * @return $this
     */
    public function setClusterIpv4CidrBlock($clusterIpv4CidrBlock)
    {
        $this->container['clusterIpv4CidrBlock'] = $clusterIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets clusterSecondaryRangeName
     * @return string
     */
    public function getClusterSecondaryRangeName()
    {
        return $this->container['clusterSecondaryRangeName'];
    }

    /**
     * Sets clusterSecondaryRangeName
     * @param string $clusterSecondaryRangeName
     * @return $this
     */
    public function setClusterSecondaryRangeName($clusterSecondaryRangeName)
    {
        $this->container['clusterSecondaryRangeName'] = $clusterSecondaryRangeName;

        return $this;
    }


    /**
     * Gets createSubnetwork
     * @return boolean
     */
    public function getCreateSubnetwork()
    {
        return $this->container['createSubnetwork'];
    }

    /**
     * Sets createSubnetwork
     * @param boolean $createSubnetwork
     * @return $this
     */
    public function setCreateSubnetwork($createSubnetwork)
    {
        $this->container['createSubnetwork'] = $createSubnetwork;

        return $this;
    }


    /**
     * Gets nodeIpv4CidrBlock
     * @return string
     */
    public function getNodeIpv4CidrBlock()
    {
        return $this->container['nodeIpv4CidrBlock'];
    }

    /**
     * Sets nodeIpv4CidrBlock
     * @param string $nodeIpv4CidrBlock
     * @return $this
     */
    public function setNodeIpv4CidrBlock($nodeIpv4CidrBlock)
    {
        $this->container['nodeIpv4CidrBlock'] = $nodeIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets servicesIpv4CidrBlock
     * @return string
     */
    public function getServicesIpv4CidrBlock()
    {
        return $this->container['servicesIpv4CidrBlock'];
    }

    /**
     * Sets servicesIpv4CidrBlock
     * @param string $servicesIpv4CidrBlock
     * @return $this
     */
    public function setServicesIpv4CidrBlock($servicesIpv4CidrBlock)
    {
        $this->container['servicesIpv4CidrBlock'] = $servicesIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets servicesSecondaryRangeName
     * @return string
     */
    public function getServicesSecondaryRangeName()
    {
        return $this->container['servicesSecondaryRangeName'];
    }

    /**
     * Sets servicesSecondaryRangeName
     * @param string $servicesSecondaryRangeName
     * @return $this
     */
    public function setServicesSecondaryRangeName($servicesSecondaryRangeName)
    {
        $this->container['servicesSecondaryRangeName'] = $servicesSecondaryRangeName;

        return $this;
    }


    /**
     * Gets subnetworkName
     * @return string
     */
    public function getSubnetworkName()
    {
        return $this->container['subnetworkName'];
    }

    /**
     * Sets subnetworkName
     * @param string $subnetworkName
     * @return $this
     */
    public function setSubnetworkName($subnetworkName)
    {
        $this->container['subnetworkName'] = $subnetworkName;

        return $this;
    }


    /**
     * Gets useIpAliases
     * @return boolean
     */
    public function getUseIpAliases()
    {
        return $this->container['useIpAliases'];
    }

    /**
     * Sets useIpAliases
     * @param boolean $useIpAliases
     * @return $this
     */
    public function setUseIpAliases($useIpAliases)
    {
        $this->container['useIpAliases'] = $useIpAliases;

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

