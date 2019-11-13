<?php

/**
 * AzureCloudProviderModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AzureCloudProviderModel implements ArrayAccess
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
        'aadClientCertPassword',
        'aadClientCertPath',
        'aadClientId',
        'aadClientSecret',
        'cloud',
        'cloudProviderBackoff',
        'cloudProviderBackoffDuration',
        'cloudProviderBackoffExponent',
        'cloudProviderBackoffJitter',
        'cloudProviderBackoffRetries',
        'cloudProviderRateLimit',
        'cloudProviderRateLimitBucket',
        'cloudProviderRateLimitQPS',
        'location',
        'maximumLoadBalancerRuleCount',
        'primaryAvailabilitySetName',
        'primaryScaleSetName',
        'resourceGroup',
        'routeTableName',
        'securityGroupName',
        'subnetName',
        'subscriptionId',
        'tenantId',
        'useInstanceMetadata',
        'useManagedIdentityExtension',
        'vmType',
        'vnetName',
        'vnetResourceGroup',
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
        'aadClientCertPassword',
        'aadClientCertPath',
        'aadClientId',
        'aadClientSecret',
        'cloud',
        'cloudProviderBackoff',
        'cloudProviderBackoffDuration',
        'cloudProviderBackoffExponent',
        'cloudProviderBackoffJitter',
        'cloudProviderBackoffRetries',
        'cloudProviderRateLimit',
        'cloudProviderRateLimitBucket',
        'cloudProviderRateLimitQPS',
        'location',
        'maximumLoadBalancerRuleCount',
        'primaryAvailabilitySetName',
        'primaryScaleSetName',
        'resourceGroup',
        'routeTableName',
        'securityGroupName',
        'subnetName',
        'subscriptionId',
        'tenantId',
        'useInstanceMetadata',
        'useManagedIdentityExtension',
        'vmType',
        'vnetName',
        'vnetResourceGroup',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aadClientCertPassword' => '\Rancher\Model\PasswordModel',
        'aadClientCertPath' => 'string',
        'aadClientId' => 'string',
        'aadClientSecret' => '\Rancher\Model\PasswordModel',
        'cloud' => 'string',
        'cloudProviderBackoff' => 'boolean',
        'cloudProviderBackoffDuration' => 'int',
        'cloudProviderBackoffExponent' => 'int',
        'cloudProviderBackoffJitter' => 'int',
        'cloudProviderBackoffRetries' => 'int',
        'cloudProviderRateLimit' => 'boolean',
        'cloudProviderRateLimitBucket' => 'int',
        'cloudProviderRateLimitQPS' => 'int',
        'location' => 'string',
        'maximumLoadBalancerRuleCount' => 'int',
        'primaryAvailabilitySetName' => 'string',
        'primaryScaleSetName' => 'string',
        'resourceGroup' => 'string',
        'routeTableName' => 'string',
        'securityGroupName' => 'string',
        'subnetName' => 'string',
        'subscriptionId' => 'string',
        'tenantId' => 'string',
        'useInstanceMetadata' => 'boolean',
        'useManagedIdentityExtension' => 'boolean',
        'vmType' => 'string',
        'vnetName' => 'string',
        'vnetResourceGroup' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aadClientCertPassword' => 'setAadClientCertPassword',
        'aadClientCertPath' => 'setAadClientCertPath',
        'aadClientId' => 'setAadClientId',
        'aadClientSecret' => 'setAadClientSecret',
        'cloud' => 'setCloud',
        'cloudProviderBackoff' => 'setCloudProviderBackoff',
        'cloudProviderBackoffDuration' => 'setCloudProviderBackoffDuration',
        'cloudProviderBackoffExponent' => 'setCloudProviderBackoffExponent',
        'cloudProviderBackoffJitter' => 'setCloudProviderBackoffJitter',
        'cloudProviderBackoffRetries' => 'setCloudProviderBackoffRetries',
        'cloudProviderRateLimit' => 'setCloudProviderRateLimit',
        'cloudProviderRateLimitBucket' => 'setCloudProviderRateLimitBucket',
        'cloudProviderRateLimitQPS' => 'setCloudProviderRateLimitQPS',
        'location' => 'setLocation',
        'maximumLoadBalancerRuleCount' => 'setMaximumLoadBalancerRuleCount',
        'primaryAvailabilitySetName' => 'setPrimaryAvailabilitySetName',
        'primaryScaleSetName' => 'setPrimaryScaleSetName',
        'resourceGroup' => 'setResourceGroup',
        'routeTableName' => 'setRouteTableName',
        'securityGroupName' => 'setSecurityGroupName',
        'subnetName' => 'setSubnetName',
        'subscriptionId' => 'setSubscriptionId',
        'tenantId' => 'setTenantId',
        'useInstanceMetadata' => 'setUseInstanceMetadata',
        'useManagedIdentityExtension' => 'setUseManagedIdentityExtension',
        'vmType' => 'setVmType',
        'vnetName' => 'setVnetName',
        'vnetResourceGroup' => 'setVnetResourceGroup',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aadClientCertPassword' => 'getAadClientCertPassword',
        'aadClientCertPath' => 'getAadClientCertPath',
        'aadClientId' => 'getAadClientId',
        'aadClientSecret' => 'getAadClientSecret',
        'cloud' => 'getCloud',
        'cloudProviderBackoff' => 'getCloudProviderBackoff',
        'cloudProviderBackoffDuration' => 'getCloudProviderBackoffDuration',
        'cloudProviderBackoffExponent' => 'getCloudProviderBackoffExponent',
        'cloudProviderBackoffJitter' => 'getCloudProviderBackoffJitter',
        'cloudProviderBackoffRetries' => 'getCloudProviderBackoffRetries',
        'cloudProviderRateLimit' => 'getCloudProviderRateLimit',
        'cloudProviderRateLimitBucket' => 'getCloudProviderRateLimitBucket',
        'cloudProviderRateLimitQPS' => 'getCloudProviderRateLimitQPS',
        'location' => 'getLocation',
        'maximumLoadBalancerRuleCount' => 'getMaximumLoadBalancerRuleCount',
        'primaryAvailabilitySetName' => 'getPrimaryAvailabilitySetName',
        'primaryScaleSetName' => 'getPrimaryScaleSetName',
        'resourceGroup' => 'getResourceGroup',
        'routeTableName' => 'getRouteTableName',
        'securityGroupName' => 'getSecurityGroupName',
        'subnetName' => 'getSubnetName',
        'subscriptionId' => 'getSubscriptionId',
        'tenantId' => 'getTenantId',
        'useInstanceMetadata' => 'getUseInstanceMetadata',
        'useManagedIdentityExtension' => 'getUseManagedIdentityExtension',
        'vmType' => 'getVmType',
        'vnetName' => 'getVnetName',
        'vnetResourceGroup' => 'getVnetResourceGroup',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aadClientCertPassword'] = isset($data['aadClientCertPassword']) ? $data['aadClientCertPassword'] : null;
        $this->container['aadClientCertPath'] = isset($data['aadClientCertPath']) ? $data['aadClientCertPath'] : null;
        $this->container['aadClientId'] = isset($data['aadClientId']) ? $data['aadClientId'] : null;
        $this->container['aadClientSecret'] = isset($data['aadClientSecret']) ? $data['aadClientSecret'] : null;
        $this->container['cloud'] = isset($data['cloud']) ? $data['cloud'] : null;
        $this->container['cloudProviderBackoff'] = isset($data['cloudProviderBackoff']) ? $data['cloudProviderBackoff'] : null;
        $this->container['cloudProviderBackoffDuration'] = isset($data['cloudProviderBackoffDuration']) ? $data['cloudProviderBackoffDuration'] : null;
        $this->container['cloudProviderBackoffExponent'] = isset($data['cloudProviderBackoffExponent']) ? $data['cloudProviderBackoffExponent'] : null;
        $this->container['cloudProviderBackoffJitter'] = isset($data['cloudProviderBackoffJitter']) ? $data['cloudProviderBackoffJitter'] : null;
        $this->container['cloudProviderBackoffRetries'] = isset($data['cloudProviderBackoffRetries']) ? $data['cloudProviderBackoffRetries'] : null;
        $this->container['cloudProviderRateLimit'] = isset($data['cloudProviderRateLimit']) ? $data['cloudProviderRateLimit'] : null;
        $this->container['cloudProviderRateLimitBucket'] = isset($data['cloudProviderRateLimitBucket']) ? $data['cloudProviderRateLimitBucket'] : null;
        $this->container['cloudProviderRateLimitQPS'] = isset($data['cloudProviderRateLimitQPS']) ? $data['cloudProviderRateLimitQPS'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['maximumLoadBalancerRuleCount'] = isset($data['maximumLoadBalancerRuleCount']) ? $data['maximumLoadBalancerRuleCount'] : null;
        $this->container['primaryAvailabilitySetName'] = isset($data['primaryAvailabilitySetName']) ? $data['primaryAvailabilitySetName'] : null;
        $this->container['primaryScaleSetName'] = isset($data['primaryScaleSetName']) ? $data['primaryScaleSetName'] : null;
        $this->container['resourceGroup'] = isset($data['resourceGroup']) ? $data['resourceGroup'] : null;
        $this->container['routeTableName'] = isset($data['routeTableName']) ? $data['routeTableName'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['useInstanceMetadata'] = isset($data['useInstanceMetadata']) ? $data['useInstanceMetadata'] : null;
        $this->container['useManagedIdentityExtension'] = isset($data['useManagedIdentityExtension']) ? $data['useManagedIdentityExtension'] : null;
        $this->container['vmType'] = isset($data['vmType']) ? $data['vmType'] : null;
        $this->container['vnetName'] = isset($data['vnetName']) ? $data['vnetName'] : null;
        $this->container['vnetResourceGroup'] = isset($data['vnetResourceGroup']) ? $data['vnetResourceGroup'] : null;
    }

    /**
     * Gets aadClientCertPassword
     * @return \Rancher\Model\PasswordModel
     */
    public function getAadClientCertPassword()
    {
        return $this->container['aadClientCertPassword'];
    }

    /**
     * Sets aadClientCertPassword
     * @param \Rancher\Model\PasswordModel $aadClientCertPassword
     * @return $this
     */
    public function setAadClientCertPassword($aadClientCertPassword)
    {
        $this->container['aadClientCertPassword'] = $aadClientCertPassword;

        return $this;
    }


    /**
     * Gets aadClientCertPath
     * @return string
     */
    public function getAadClientCertPath()
    {
        return $this->container['aadClientCertPath'];
    }

    /**
     * Sets aadClientCertPath
     * @param string $aadClientCertPath
     * @return $this
     */
    public function setAadClientCertPath($aadClientCertPath)
    {
        $this->container['aadClientCertPath'] = $aadClientCertPath;

        return $this;
    }


    /**
     * Gets aadClientId
     * @return string
     */
    public function getAadClientId()
    {
        return $this->container['aadClientId'];
    }

    /**
     * Sets aadClientId
     * @param string $aadClientId
     * @return $this
     */
    public function setAadClientId($aadClientId)
    {
        $this->container['aadClientId'] = $aadClientId;

        return $this;
    }


    /**
     * Gets aadClientSecret
     * @return \Rancher\Model\PasswordModel
     */
    public function getAadClientSecret()
    {
        return $this->container['aadClientSecret'];
    }

    /**
     * Sets aadClientSecret
     * @param \Rancher\Model\PasswordModel $aadClientSecret
     * @return $this
     */
    public function setAadClientSecret($aadClientSecret)
    {
        $this->container['aadClientSecret'] = $aadClientSecret;

        return $this;
    }


    /**
     * Gets cloud
     * @return string
     */
    public function getCloud()
    {
        return $this->container['cloud'];
    }

    /**
     * Sets cloud
     * @param string $cloud
     * @return $this
     */
    public function setCloud($cloud)
    {
        $this->container['cloud'] = $cloud;

        return $this;
    }


    /**
     * Gets cloudProviderBackoff
     * @return boolean
     */
    public function getCloudProviderBackoff()
    {
        return $this->container['cloudProviderBackoff'];
    }

    /**
     * Sets cloudProviderBackoff
     * @param boolean $cloudProviderBackoff
     * @return $this
     */
    public function setCloudProviderBackoff($cloudProviderBackoff)
    {
        $this->container['cloudProviderBackoff'] = $cloudProviderBackoff;

        return $this;
    }


    /**
     * Gets cloudProviderBackoffDuration
     * @return int
     */
    public function getCloudProviderBackoffDuration()
    {
        return $this->container['cloudProviderBackoffDuration'];
    }

    /**
     * Sets cloudProviderBackoffDuration
     * @param int $cloudProviderBackoffDuration
     * @return $this
     */
    public function setCloudProviderBackoffDuration($cloudProviderBackoffDuration)
    {
        $this->container['cloudProviderBackoffDuration'] = $cloudProviderBackoffDuration;

        return $this;
    }


    /**
     * Gets cloudProviderBackoffExponent
     * @return int
     */
    public function getCloudProviderBackoffExponent()
    {
        return $this->container['cloudProviderBackoffExponent'];
    }

    /**
     * Sets cloudProviderBackoffExponent
     * @param int $cloudProviderBackoffExponent
     * @return $this
     */
    public function setCloudProviderBackoffExponent($cloudProviderBackoffExponent)
    {
        $this->container['cloudProviderBackoffExponent'] = $cloudProviderBackoffExponent;

        return $this;
    }


    /**
     * Gets cloudProviderBackoffJitter
     * @return int
     */
    public function getCloudProviderBackoffJitter()
    {
        return $this->container['cloudProviderBackoffJitter'];
    }

    /**
     * Sets cloudProviderBackoffJitter
     * @param int $cloudProviderBackoffJitter
     * @return $this
     */
    public function setCloudProviderBackoffJitter($cloudProviderBackoffJitter)
    {
        $this->container['cloudProviderBackoffJitter'] = $cloudProviderBackoffJitter;

        return $this;
    }


    /**
     * Gets cloudProviderBackoffRetries
     * @return int
     */
    public function getCloudProviderBackoffRetries()
    {
        return $this->container['cloudProviderBackoffRetries'];
    }

    /**
     * Sets cloudProviderBackoffRetries
     * @param int $cloudProviderBackoffRetries
     * @return $this
     */
    public function setCloudProviderBackoffRetries($cloudProviderBackoffRetries)
    {
        $this->container['cloudProviderBackoffRetries'] = $cloudProviderBackoffRetries;

        return $this;
    }


    /**
     * Gets cloudProviderRateLimit
     * @return boolean
     */
    public function getCloudProviderRateLimit()
    {
        return $this->container['cloudProviderRateLimit'];
    }

    /**
     * Sets cloudProviderRateLimit
     * @param boolean $cloudProviderRateLimit
     * @return $this
     */
    public function setCloudProviderRateLimit($cloudProviderRateLimit)
    {
        $this->container['cloudProviderRateLimit'] = $cloudProviderRateLimit;

        return $this;
    }


    /**
     * Gets cloudProviderRateLimitBucket
     * @return int
     */
    public function getCloudProviderRateLimitBucket()
    {
        return $this->container['cloudProviderRateLimitBucket'];
    }

    /**
     * Sets cloudProviderRateLimitBucket
     * @param int $cloudProviderRateLimitBucket
     * @return $this
     */
    public function setCloudProviderRateLimitBucket($cloudProviderRateLimitBucket)
    {
        $this->container['cloudProviderRateLimitBucket'] = $cloudProviderRateLimitBucket;

        return $this;
    }


    /**
     * Gets cloudProviderRateLimitQPS
     * @return int
     */
    public function getCloudProviderRateLimitQPS()
    {
        return $this->container['cloudProviderRateLimitQPS'];
    }

    /**
     * Sets cloudProviderRateLimitQPS
     * @param int $cloudProviderRateLimitQPS
     * @return $this
     */
    public function setCloudProviderRateLimitQPS($cloudProviderRateLimitQPS)
    {
        $this->container['cloudProviderRateLimitQPS'] = $cloudProviderRateLimitQPS;

        return $this;
    }


    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }


    /**
     * Gets maximumLoadBalancerRuleCount
     * @return int
     */
    public function getMaximumLoadBalancerRuleCount()
    {
        return $this->container['maximumLoadBalancerRuleCount'];
    }

    /**
     * Sets maximumLoadBalancerRuleCount
     * @param int $maximumLoadBalancerRuleCount
     * @return $this
     */
    public function setMaximumLoadBalancerRuleCount($maximumLoadBalancerRuleCount)
    {
        $this->container['maximumLoadBalancerRuleCount'] = $maximumLoadBalancerRuleCount;

        return $this;
    }


    /**
     * Gets primaryAvailabilitySetName
     * @return string
     */
    public function getPrimaryAvailabilitySetName()
    {
        return $this->container['primaryAvailabilitySetName'];
    }

    /**
     * Sets primaryAvailabilitySetName
     * @param string $primaryAvailabilitySetName
     * @return $this
     */
    public function setPrimaryAvailabilitySetName($primaryAvailabilitySetName)
    {
        $this->container['primaryAvailabilitySetName'] = $primaryAvailabilitySetName;

        return $this;
    }


    /**
     * Gets primaryScaleSetName
     * @return string
     */
    public function getPrimaryScaleSetName()
    {
        return $this->container['primaryScaleSetName'];
    }

    /**
     * Sets primaryScaleSetName
     * @param string $primaryScaleSetName
     * @return $this
     */
    public function setPrimaryScaleSetName($primaryScaleSetName)
    {
        $this->container['primaryScaleSetName'] = $primaryScaleSetName;

        return $this;
    }


    /**
     * Gets resourceGroup
     * @return string
     */
    public function getResourceGroup()
    {
        return $this->container['resourceGroup'];
    }

    /**
     * Sets resourceGroup
     * @param string $resourceGroup
     * @return $this
     */
    public function setResourceGroup($resourceGroup)
    {
        $this->container['resourceGroup'] = $resourceGroup;

        return $this;
    }


    /**
     * Gets routeTableName
     * @return string
     */
    public function getRouteTableName()
    {
        return $this->container['routeTableName'];
    }

    /**
     * Sets routeTableName
     * @param string $routeTableName
     * @return $this
     */
    public function setRouteTableName($routeTableName)
    {
        $this->container['routeTableName'] = $routeTableName;

        return $this;
    }


    /**
     * Gets securityGroupName
     * @return string
     */
    public function getSecurityGroupName()
    {
        return $this->container['securityGroupName'];
    }

    /**
     * Sets securityGroupName
     * @param string $securityGroupName
     * @return $this
     */
    public function setSecurityGroupName($securityGroupName)
    {
        $this->container['securityGroupName'] = $securityGroupName;

        return $this;
    }


    /**
     * Gets subnetName
     * @return string
     */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
     * Sets subnetName
     * @param string $subnetName
     * @return $this
     */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;

        return $this;
    }


    /**
     * Gets subscriptionId
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     * @param string $subscriptionId
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }


    /**
     * Gets tenantId
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * Sets tenantId
     * @param string $tenantId
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;

        return $this;
    }


    /**
     * Gets useInstanceMetadata
     * @return boolean
     */
    public function getUseInstanceMetadata()
    {
        return $this->container['useInstanceMetadata'];
    }

    /**
     * Sets useInstanceMetadata
     * @param boolean $useInstanceMetadata
     * @return $this
     */
    public function setUseInstanceMetadata($useInstanceMetadata)
    {
        $this->container['useInstanceMetadata'] = $useInstanceMetadata;

        return $this;
    }


    /**
     * Gets useManagedIdentityExtension
     * @return boolean
     */
    public function getUseManagedIdentityExtension()
    {
        return $this->container['useManagedIdentityExtension'];
    }

    /**
     * Sets useManagedIdentityExtension
     * @param boolean $useManagedIdentityExtension
     * @return $this
     */
    public function setUseManagedIdentityExtension($useManagedIdentityExtension)
    {
        $this->container['useManagedIdentityExtension'] = $useManagedIdentityExtension;

        return $this;
    }


    /**
     * Gets vmType
     * @return string
     */
    public function getVmType()
    {
        return $this->container['vmType'];
    }

    /**
     * Sets vmType
     * @param string $vmType
     * @return $this
     */
    public function setVmType($vmType)
    {
        $this->container['vmType'] = $vmType;

        return $this;
    }


    /**
     * Gets vnetName
     * @return string
     */
    public function getVnetName()
    {
        return $this->container['vnetName'];
    }

    /**
     * Sets vnetName
     * @param string $vnetName
     * @return $this
     */
    public function setVnetName($vnetName)
    {
        $this->container['vnetName'] = $vnetName;

        return $this;
    }


    /**
     * Gets vnetResourceGroup
     * @return string
     */
    public function getVnetResourceGroup()
    {
        return $this->container['vnetResourceGroup'];
    }

    /**
     * Sets vnetResourceGroup
     * @param string $vnetResourceGroup
     * @return $this
     */
    public function setVnetResourceGroup($vnetResourceGroup)
    {
        $this->container['vnetResourceGroup'] = $vnetResourceGroup;

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

