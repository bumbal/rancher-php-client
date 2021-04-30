<?php

/**
 * EksStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EksStatusModel implements ArrayAccess
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
        'managedLaunchTemplateID',
        'managedLaunchTemplateVersions',
        'privateRequiresTunnel',
        'securityGroups',
        'subnets',
        'upstreamSpec',
        'virtualNetwork',
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
        'managedLaunchTemplateID',
        'managedLaunchTemplateVersions',
        'privateRequiresTunnel',
        'securityGroups',
        'subnets',
        'upstreamSpec',
        'virtualNetwork',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'managedLaunchTemplateID' => 'string',
        'managedLaunchTemplateVersions' => 'map[string,string]',
        'privateRequiresTunnel' => 'boolean',
        'securityGroups' => 'string[]',
        'subnets' => 'string[]',
        'upstreamSpec' => '\Rancher\Model\EksClusterConfigSpecModel',
        'virtualNetwork' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'managedLaunchTemplateID' => 'setManagedLaunchTemplateID',
        'managedLaunchTemplateVersions' => 'setManagedLaunchTemplateVersions',
        'privateRequiresTunnel' => 'setPrivateRequiresTunnel',
        'securityGroups' => 'setSecurityGroups',
        'subnets' => 'setSubnets',
        'upstreamSpec' => 'setUpstreamSpec',
        'virtualNetwork' => 'setVirtualNetwork',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'managedLaunchTemplateID' => 'getManagedLaunchTemplateID',
        'managedLaunchTemplateVersions' => 'getManagedLaunchTemplateVersions',
        'privateRequiresTunnel' => 'getPrivateRequiresTunnel',
        'securityGroups' => 'getSecurityGroups',
        'subnets' => 'getSubnets',
        'upstreamSpec' => 'getUpstreamSpec',
        'virtualNetwork' => 'getVirtualNetwork',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['managedLaunchTemplateID'] = isset($data['managedLaunchTemplateID']) ? $data['managedLaunchTemplateID'] : null;
        $this->container['managedLaunchTemplateVersions'] = isset($data['managedLaunchTemplateVersions']) ? $data['managedLaunchTemplateVersions'] : null;
        $this->container['privateRequiresTunnel'] = isset($data['privateRequiresTunnel']) ? $data['privateRequiresTunnel'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['upstreamSpec'] = isset($data['upstreamSpec']) ? $data['upstreamSpec'] : null;
        $this->container['virtualNetwork'] = isset($data['virtualNetwork']) ? $data['virtualNetwork'] : null;
    }

    /**
     * Gets managedLaunchTemplateID
     * @return string
     */
    public function getManagedLaunchTemplateID()
    {
        return $this->container['managedLaunchTemplateID'];
    }

    /**
     * Sets managedLaunchTemplateID
     * @param string $managedLaunchTemplateID
     * @return $this
     */
    public function setManagedLaunchTemplateID($managedLaunchTemplateID)
    {
        $this->container['managedLaunchTemplateID'] = $managedLaunchTemplateID;

        return $this;
    }


    /**
     * Gets managedLaunchTemplateVersions
     * @return string[]
     */
    public function getManagedLaunchTemplateVersions()
    {
        return $this->container['managedLaunchTemplateVersions'];
    }

    /**
     * Sets managedLaunchTemplateVersions
     * @param string[] $managedLaunchTemplateVersions
     * @return $this
     */
    public function setManagedLaunchTemplateVersions($managedLaunchTemplateVersions)
    {
        $this->container['managedLaunchTemplateVersions'] = $managedLaunchTemplateVersions;

        return $this;
    }


    /**
     * Gets privateRequiresTunnel
     * @return boolean
     */
    public function getPrivateRequiresTunnel()
    {
        return $this->container['privateRequiresTunnel'];
    }

    /**
     * Sets privateRequiresTunnel
     * @param boolean $privateRequiresTunnel
     * @return $this
     */
    public function setPrivateRequiresTunnel($privateRequiresTunnel)
    {
        $this->container['privateRequiresTunnel'] = $privateRequiresTunnel;

        return $this;
    }


    /**
     * Gets securityGroups
     * @return string[]
     */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
     * Sets securityGroups
     * @param string[] $securityGroups
     * @return $this
     */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;

        return $this;
    }


    /**
     * Gets subnets
     * @return string[]
     */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
     * Sets subnets
     * @param string[] $subnets
     * @return $this
     */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;

        return $this;
    }


    /**
     * Gets upstreamSpec
     * @return \Rancher\Model\EksClusterConfigSpecModel
     */
    public function getUpstreamSpec()
    {
        return $this->container['upstreamSpec'];
    }

    /**
     * Sets upstreamSpec
     * @param \Rancher\Model\EksClusterConfigSpecModel $upstreamSpec
     * @return $this
     */
    public function setUpstreamSpec($upstreamSpec)
    {
        $this->container['upstreamSpec'] = $upstreamSpec;

        return $this;
    }


    /**
     * Gets virtualNetwork
     * @return string
     */
    public function getVirtualNetwork()
    {
        return $this->container['virtualNetwork'];
    }

    /**
     * Sets virtualNetwork
     * @param string $virtualNetwork
     * @return $this
     */
    public function setVirtualNetwork($virtualNetwork)
    {
        $this->container['virtualNetwork'] = $virtualNetwork;

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

