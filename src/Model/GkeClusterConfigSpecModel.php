<?php

/**
 * GkeClusterConfigSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GkeClusterConfigSpecModel implements ArrayAccess
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
        'clusterAddons',
        'clusterIpv4Cidr',
        'clusterName',
        'description',
        'enableKubernetesAlpha',
        'googleCredentialSecret',
        'imported',
        'ipAllocationPolicy',
        'kubernetesVersion',
        'labels',
        'locations',
        'loggingService',
        'maintenanceWindow',
        'masterAuthorizedNetworks',
        'monitoringService',
        'network',
        'networkPolicyEnabled',
        'nodePools',
        'privateClusterConfig',
        'projectID',
        'region',
        'subnetwork',
        'zone',
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
        'clusterAddons',
        'clusterIpv4Cidr',
        'clusterName',
        'description',
        'enableKubernetesAlpha',
        'googleCredentialSecret',
        'ipAllocationPolicy',
        'kubernetesVersion',
        'labels',
        'locations',
        'loggingService',
        'maintenanceWindow',
        'masterAuthorizedNetworks',
        'monitoringService',
        'network',
        'networkPolicyEnabled',
        'nodePools',
        'privateClusterConfig',
        'projectID',
        'subnetwork',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterAddons' => '\Rancher\Model\GkeClusterAddonsModel',
        'clusterIpv4Cidr' => 'string',
        'clusterName' => 'string',
        'description' => 'string',
        'enableKubernetesAlpha' => 'boolean',
        'googleCredentialSecret' => 'string',
        'imported' => 'boolean',
        'ipAllocationPolicy' => '\Rancher\Model\GkeipAllocationPolicyModel',
        'kubernetesVersion' => 'string',
        'labels' => 'map[string,string]',
        'locations' => 'string[]',
        'loggingService' => 'string',
        'maintenanceWindow' => 'string',
        'masterAuthorizedNetworks' => '\Rancher\Model\GkeMasterAuthorizedNetworksConfigModel',
        'monitoringService' => 'string',
        'network' => 'string',
        'networkPolicyEnabled' => 'boolean',
        'nodePools' => '\Rancher\Model\GkeNodePoolConfigModel[]',
        'privateClusterConfig' => '\Rancher\Model\GkePrivateClusterConfigModel',
        'projectID' => 'string',
        'region' => 'string',
        'subnetwork' => 'string',
        'zone' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterAddons' => 'setClusterAddons',
        'clusterIpv4Cidr' => 'setClusterIpv4Cidr',
        'clusterName' => 'setClusterName',
        'description' => 'setDescription',
        'enableKubernetesAlpha' => 'setEnableKubernetesAlpha',
        'googleCredentialSecret' => 'setGoogleCredentialSecret',
        'imported' => 'setImported',
        'ipAllocationPolicy' => 'setIpAllocationPolicy',
        'kubernetesVersion' => 'setKubernetesVersion',
        'labels' => 'setLabels',
        'locations' => 'setLocations',
        'loggingService' => 'setLoggingService',
        'maintenanceWindow' => 'setMaintenanceWindow',
        'masterAuthorizedNetworks' => 'setMasterAuthorizedNetworks',
        'monitoringService' => 'setMonitoringService',
        'network' => 'setNetwork',
        'networkPolicyEnabled' => 'setNetworkPolicyEnabled',
        'nodePools' => 'setNodePools',
        'privateClusterConfig' => 'setPrivateClusterConfig',
        'projectID' => 'setProjectID',
        'region' => 'setRegion',
        'subnetwork' => 'setSubnetwork',
        'zone' => 'setZone',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterAddons' => 'getClusterAddons',
        'clusterIpv4Cidr' => 'getClusterIpv4Cidr',
        'clusterName' => 'getClusterName',
        'description' => 'getDescription',
        'enableKubernetesAlpha' => 'getEnableKubernetesAlpha',
        'googleCredentialSecret' => 'getGoogleCredentialSecret',
        'imported' => 'getImported',
        'ipAllocationPolicy' => 'getIpAllocationPolicy',
        'kubernetesVersion' => 'getKubernetesVersion',
        'labels' => 'getLabels',
        'locations' => 'getLocations',
        'loggingService' => 'getLoggingService',
        'maintenanceWindow' => 'getMaintenanceWindow',
        'masterAuthorizedNetworks' => 'getMasterAuthorizedNetworks',
        'monitoringService' => 'getMonitoringService',
        'network' => 'getNetwork',
        'networkPolicyEnabled' => 'getNetworkPolicyEnabled',
        'nodePools' => 'getNodePools',
        'privateClusterConfig' => 'getPrivateClusterConfig',
        'projectID' => 'getProjectID',
        'region' => 'getRegion',
        'subnetwork' => 'getSubnetwork',
        'zone' => 'getZone',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterAddons'] = isset($data['clusterAddons']) ? $data['clusterAddons'] : null;
        $this->container['clusterIpv4Cidr'] = isset($data['clusterIpv4Cidr']) ? $data['clusterIpv4Cidr'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableKubernetesAlpha'] = isset($data['enableKubernetesAlpha']) ? $data['enableKubernetesAlpha'] : null;
        $this->container['googleCredentialSecret'] = isset($data['googleCredentialSecret']) ? $data['googleCredentialSecret'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
        $this->container['ipAllocationPolicy'] = isset($data['ipAllocationPolicy']) ? $data['ipAllocationPolicy'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['loggingService'] = isset($data['loggingService']) ? $data['loggingService'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['masterAuthorizedNetworks'] = isset($data['masterAuthorizedNetworks']) ? $data['masterAuthorizedNetworks'] : null;
        $this->container['monitoringService'] = isset($data['monitoringService']) ? $data['monitoringService'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['networkPolicyEnabled'] = isset($data['networkPolicyEnabled']) ? $data['networkPolicyEnabled'] : null;
        $this->container['nodePools'] = isset($data['nodePools']) ? $data['nodePools'] : null;
        $this->container['privateClusterConfig'] = isset($data['privateClusterConfig']) ? $data['privateClusterConfig'] : null;
        $this->container['projectID'] = isset($data['projectID']) ? $data['projectID'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['subnetwork'] = isset($data['subnetwork']) ? $data['subnetwork'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
    }

    /**
     * Gets clusterAddons
     * @return \Rancher\Model\GkeClusterAddonsModel
     */
    public function getClusterAddons()
    {
        return $this->container['clusterAddons'];
    }

    /**
     * Sets clusterAddons
     * @param \Rancher\Model\GkeClusterAddonsModel $clusterAddons
     * @return $this
     */
    public function setClusterAddons($clusterAddons)
    {
        $this->container['clusterAddons'] = $clusterAddons;

        return $this;
    }


    /**
     * Gets clusterIpv4Cidr
     * @return string
     */
    public function getClusterIpv4Cidr()
    {
        return $this->container['clusterIpv4Cidr'];
    }

    /**
     * Sets clusterIpv4Cidr
     * @param string $clusterIpv4Cidr
     * @return $this
     */
    public function setClusterIpv4Cidr($clusterIpv4Cidr)
    {
        $this->container['clusterIpv4Cidr'] = $clusterIpv4Cidr;

        return $this;
    }


    /**
     * Gets clusterName
     * @return string
     */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
     * Sets clusterName
     * @param string $clusterName
     * @return $this
     */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets enableKubernetesAlpha
     * @return boolean
     */
    public function getEnableKubernetesAlpha()
    {
        return $this->container['enableKubernetesAlpha'];
    }

    /**
     * Sets enableKubernetesAlpha
     * @param boolean $enableKubernetesAlpha
     * @return $this
     */
    public function setEnableKubernetesAlpha($enableKubernetesAlpha)
    {
        $this->container['enableKubernetesAlpha'] = $enableKubernetesAlpha;

        return $this;
    }


    /**
     * Gets googleCredentialSecret
     * @return string
     */
    public function getGoogleCredentialSecret()
    {
        return $this->container['googleCredentialSecret'];
    }

    /**
     * Sets googleCredentialSecret
     * @param string $googleCredentialSecret
     * @return $this
     */
    public function setGoogleCredentialSecret($googleCredentialSecret)
    {
        $this->container['googleCredentialSecret'] = $googleCredentialSecret;

        return $this;
    }


    /**
     * Gets imported
     * @return boolean
     */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
     * Sets imported
     * @param boolean $imported
     * @return $this
     */
    public function setImported($imported)
    {
        $this->container['imported'] = $imported;

        return $this;
    }


    /**
     * Gets ipAllocationPolicy
     * @return \Rancher\Model\GkeipAllocationPolicyModel
     */
    public function getIpAllocationPolicy()
    {
        return $this->container['ipAllocationPolicy'];
    }

    /**
     * Sets ipAllocationPolicy
     * @param \Rancher\Model\GkeipAllocationPolicyModel $ipAllocationPolicy
     * @return $this
     */
    public function setIpAllocationPolicy($ipAllocationPolicy)
    {
        $this->container['ipAllocationPolicy'] = $ipAllocationPolicy;

        return $this;
    }


    /**
     * Gets kubernetesVersion
     * @return string
     */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
     * Sets kubernetesVersion
     * @param string $kubernetesVersion
     * @return $this
     */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets locations
     * @return string[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     * @param string[] $locations
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }


    /**
     * Gets loggingService
     * @return string
     */
    public function getLoggingService()
    {
        return $this->container['loggingService'];
    }

    /**
     * Sets loggingService
     * @param string $loggingService
     * @return $this
     */
    public function setLoggingService($loggingService)
    {
        $this->container['loggingService'] = $loggingService;

        return $this;
    }


    /**
     * Gets maintenanceWindow
     * @return string
     */
    public function getMaintenanceWindow()
    {
        return $this->container['maintenanceWindow'];
    }

    /**
     * Sets maintenanceWindow
     * @param string $maintenanceWindow
     * @return $this
     */
    public function setMaintenanceWindow($maintenanceWindow)
    {
        $this->container['maintenanceWindow'] = $maintenanceWindow;

        return $this;
    }


    /**
     * Gets masterAuthorizedNetworks
     * @return \Rancher\Model\GkeMasterAuthorizedNetworksConfigModel
     */
    public function getMasterAuthorizedNetworks()
    {
        return $this->container['masterAuthorizedNetworks'];
    }

    /**
     * Sets masterAuthorizedNetworks
     * @param \Rancher\Model\GkeMasterAuthorizedNetworksConfigModel $masterAuthorizedNetworks
     * @return $this
     */
    public function setMasterAuthorizedNetworks($masterAuthorizedNetworks)
    {
        $this->container['masterAuthorizedNetworks'] = $masterAuthorizedNetworks;

        return $this;
    }


    /**
     * Gets monitoringService
     * @return string
     */
    public function getMonitoringService()
    {
        return $this->container['monitoringService'];
    }

    /**
     * Sets monitoringService
     * @param string $monitoringService
     * @return $this
     */
    public function setMonitoringService($monitoringService)
    {
        $this->container['monitoringService'] = $monitoringService;

        return $this;
    }


    /**
     * Gets network
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param string $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }


    /**
     * Gets networkPolicyEnabled
     * @return boolean
     */
    public function getNetworkPolicyEnabled()
    {
        return $this->container['networkPolicyEnabled'];
    }

    /**
     * Sets networkPolicyEnabled
     * @param boolean $networkPolicyEnabled
     * @return $this
     */
    public function setNetworkPolicyEnabled($networkPolicyEnabled)
    {
        $this->container['networkPolicyEnabled'] = $networkPolicyEnabled;

        return $this;
    }


    /**
     * Gets nodePools
     * @return \Rancher\Model\GkeNodePoolConfigModel[]
     */
    public function getNodePools()
    {
        return $this->container['nodePools'];
    }

    /**
     * Sets nodePools
     * @param \Rancher\Model\GkeNodePoolConfigModel[] $nodePools
     * @return $this
     */
    public function setNodePools($nodePools)
    {
        $this->container['nodePools'] = $nodePools;

        return $this;
    }


    /**
     * Gets privateClusterConfig
     * @return \Rancher\Model\GkePrivateClusterConfigModel
     */
    public function getPrivateClusterConfig()
    {
        return $this->container['privateClusterConfig'];
    }

    /**
     * Sets privateClusterConfig
     * @param \Rancher\Model\GkePrivateClusterConfigModel $privateClusterConfig
     * @return $this
     */
    public function setPrivateClusterConfig($privateClusterConfig)
    {
        $this->container['privateClusterConfig'] = $privateClusterConfig;

        return $this;
    }


    /**
     * Gets projectID
     * @return string
     */
    public function getProjectID()
    {
        return $this->container['projectID'];
    }

    /**
     * Sets projectID
     * @param string $projectID
     * @return $this
     */
    public function setProjectID($projectID)
    {
        $this->container['projectID'] = $projectID;

        return $this;
    }


    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }


    /**
     * Gets subnetwork
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->container['subnetwork'];
    }

    /**
     * Sets subnetwork
     * @param string $subnetwork
     * @return $this
     */
    public function setSubnetwork($subnetwork)
    {
        $this->container['subnetwork'] = $subnetwork;

        return $this;
    }


    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     * @param string $zone
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

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

