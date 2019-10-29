<?php

namespace Rancher\Model;

use \ArrayAccess;

class GoogleKubernetesEngineConfig implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'clusterIpv4Cidr' => 'string',
        'credential' => '\Rancher\Model\Password',
        'description' => 'string',
        'diskSizeGb' => 'int',
        'diskType' => 'string',
        'displayName' => 'string',
        'driverName' => 'string',
        'enableAlphaFeature' => 'boolean',
        'enableAutoRepair' => 'boolean',
        'enableAutoUpgrade' => 'boolean',
        'enableHorizontalPodAutoscaling' => 'boolean',
        'enableHttpLoadBalancing' => 'boolean',
        'enableKubernetesDashboard' => 'boolean',
        'enableLegacyAbac' => 'boolean',
        'enableMasterAuthorizedNetwork' => 'boolean',
        'enableNetworkPolicyConfig' => 'boolean',
        'enableNodepoolAutoscaling' => 'boolean',
        'enablePrivateEndpoint' => 'boolean',
        'enablePrivateNodes' => 'boolean',
        'enableStackdriverLogging' => 'boolean',
        'enableStackdriverMonitoring' => 'boolean',
        'imageType' => 'string',
        'ipPolicyClusterIpv4CidrBlock' => 'string',
        'ipPolicyClusterSecondaryRangeName' => 'string',
        'ipPolicyCreateSubnetwork' => 'boolean',
        'ipPolicyNodeIpv4CidrBlock' => 'string',
        'ipPolicyServicesIpv4CidrBlock' => 'string',
        'ipPolicyServicesSecondaryRangeName' => 'string',
        'ipPolicySubnetworkName' => 'string',
        'issueClientCertificate' => 'boolean',
        'kubernetesDashboard' => 'boolean',
        'labels' => 'string[]',
        'localSsdCount' => 'int',
        'locations' => 'string[]',
        'machineType' => 'string',
        'maintenanceWindow' => 'string',
        'masterAuthorizedNetworkCidrBlocks' => 'string[]',
        'masterIpv4CidrBlock' => 'string',
        'masterVersion' => 'string',
        'maxNodeCount' => 'int',
        'minNodeCount' => 'int',
        'name' => 'string',
        'network' => 'string',
        'nodeCount' => 'int',
        'nodePool' => 'string',
        'nodeVersion' => 'string',
        'oauthScopes' => 'string[]',
        'preemptible' => 'boolean',
        'projectId' => 'string',
        'resourceLabels' => 'string[]',
        'serviceAccount' => 'string',
        'subNetwork' => 'string',
        'taints' => 'string[]',
        'useIpAliases' => 'boolean',
        'zone' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterIpv4Cidr' => 'setClusterIpv4Cidr',
        'credential' => 'setCredential',
        'description' => 'setDescription',
        'diskSizeGb' => 'setDiskSizeGb',
        'diskType' => 'setDiskType',
        'displayName' => 'setDisplayName',
        'driverName' => 'setDriverName',
        'enableAlphaFeature' => 'setEnableAlphaFeature',
        'enableAutoRepair' => 'setEnableAutoRepair',
        'enableAutoUpgrade' => 'setEnableAutoUpgrade',
        'enableHorizontalPodAutoscaling' => 'setEnableHorizontalPodAutoscaling',
        'enableHttpLoadBalancing' => 'setEnableHttpLoadBalancing',
        'enableKubernetesDashboard' => 'setEnableKubernetesDashboard',
        'enableLegacyAbac' => 'setEnableLegacyAbac',
        'enableMasterAuthorizedNetwork' => 'setEnableMasterAuthorizedNetwork',
        'enableNetworkPolicyConfig' => 'setEnableNetworkPolicyConfig',
        'enableNodepoolAutoscaling' => 'setEnableNodepoolAutoscaling',
        'enablePrivateEndpoint' => 'setEnablePrivateEndpoint',
        'enablePrivateNodes' => 'setEnablePrivateNodes',
        'enableStackdriverLogging' => 'setEnableStackdriverLogging',
        'enableStackdriverMonitoring' => 'setEnableStackdriverMonitoring',
        'imageType' => 'setImageType',
        'ipPolicyClusterIpv4CidrBlock' => 'setIpPolicyClusterIpv4CidrBlock',
        'ipPolicyClusterSecondaryRangeName' => 'setIpPolicyClusterSecondaryRangeName',
        'ipPolicyCreateSubnetwork' => 'setIpPolicyCreateSubnetwork',
        'ipPolicyNodeIpv4CidrBlock' => 'setIpPolicyNodeIpv4CidrBlock',
        'ipPolicyServicesIpv4CidrBlock' => 'setIpPolicyServicesIpv4CidrBlock',
        'ipPolicyServicesSecondaryRangeName' => 'setIpPolicyServicesSecondaryRangeName',
        'ipPolicySubnetworkName' => 'setIpPolicySubnetworkName',
        'issueClientCertificate' => 'setIssueClientCertificate',
        'kubernetesDashboard' => 'setKubernetesDashboard',
        'labels' => 'setLabels',
        'localSsdCount' => 'setLocalSsdCount',
        'locations' => 'setLocations',
        'machineType' => 'setMachineType',
        'maintenanceWindow' => 'setMaintenanceWindow',
        'masterAuthorizedNetworkCidrBlocks' => 'setMasterAuthorizedNetworkCidrBlocks',
        'masterIpv4CidrBlock' => 'setMasterIpv4CidrBlock',
        'masterVersion' => 'setMasterVersion',
        'maxNodeCount' => 'setMaxNodeCount',
        'minNodeCount' => 'setMinNodeCount',
        'name' => 'setName',
        'network' => 'setNetwork',
        'nodeCount' => 'setNodeCount',
        'nodePool' => 'setNodePool',
        'nodeVersion' => 'setNodeVersion',
        'oauthScopes' => 'setOauthScopes',
        'preemptible' => 'setPreemptible',
        'projectId' => 'setProjectId',
        'resourceLabels' => 'setResourceLabels',
        'serviceAccount' => 'setServiceAccount',
        'subNetwork' => 'setSubNetwork',
        'taints' => 'setTaints',
        'useIpAliases' => 'setUseIpAliases',
        'zone' => 'setZone',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterIpv4Cidr' => 'getClusterIpv4Cidr',
        'credential' => 'getCredential',
        'description' => 'getDescription',
        'diskSizeGb' => 'getDiskSizeGb',
        'diskType' => 'getDiskType',
        'displayName' => 'getDisplayName',
        'driverName' => 'getDriverName',
        'enableAlphaFeature' => 'getEnableAlphaFeature',
        'enableAutoRepair' => 'getEnableAutoRepair',
        'enableAutoUpgrade' => 'getEnableAutoUpgrade',
        'enableHorizontalPodAutoscaling' => 'getEnableHorizontalPodAutoscaling',
        'enableHttpLoadBalancing' => 'getEnableHttpLoadBalancing',
        'enableKubernetesDashboard' => 'getEnableKubernetesDashboard',
        'enableLegacyAbac' => 'getEnableLegacyAbac',
        'enableMasterAuthorizedNetwork' => 'getEnableMasterAuthorizedNetwork',
        'enableNetworkPolicyConfig' => 'getEnableNetworkPolicyConfig',
        'enableNodepoolAutoscaling' => 'getEnableNodepoolAutoscaling',
        'enablePrivateEndpoint' => 'getEnablePrivateEndpoint',
        'enablePrivateNodes' => 'getEnablePrivateNodes',
        'enableStackdriverLogging' => 'getEnableStackdriverLogging',
        'enableStackdriverMonitoring' => 'getEnableStackdriverMonitoring',
        'imageType' => 'getImageType',
        'ipPolicyClusterIpv4CidrBlock' => 'getIpPolicyClusterIpv4CidrBlock',
        'ipPolicyClusterSecondaryRangeName' => 'getIpPolicyClusterSecondaryRangeName',
        'ipPolicyCreateSubnetwork' => 'getIpPolicyCreateSubnetwork',
        'ipPolicyNodeIpv4CidrBlock' => 'getIpPolicyNodeIpv4CidrBlock',
        'ipPolicyServicesIpv4CidrBlock' => 'getIpPolicyServicesIpv4CidrBlock',
        'ipPolicyServicesSecondaryRangeName' => 'getIpPolicyServicesSecondaryRangeName',
        'ipPolicySubnetworkName' => 'getIpPolicySubnetworkName',
        'issueClientCertificate' => 'getIssueClientCertificate',
        'kubernetesDashboard' => 'getKubernetesDashboard',
        'labels' => 'getLabels',
        'localSsdCount' => 'getLocalSsdCount',
        'locations' => 'getLocations',
        'machineType' => 'getMachineType',
        'maintenanceWindow' => 'getMaintenanceWindow',
        'masterAuthorizedNetworkCidrBlocks' => 'getMasterAuthorizedNetworkCidrBlocks',
        'masterIpv4CidrBlock' => 'getMasterIpv4CidrBlock',
        'masterVersion' => 'getMasterVersion',
        'maxNodeCount' => 'getMaxNodeCount',
        'minNodeCount' => 'getMinNodeCount',
        'name' => 'getName',
        'network' => 'getNetwork',
        'nodeCount' => 'getNodeCount',
        'nodePool' => 'getNodePool',
        'nodeVersion' => 'getNodeVersion',
        'oauthScopes' => 'getOauthScopes',
        'preemptible' => 'getPreemptible',
        'projectId' => 'getProjectId',
        'resourceLabels' => 'getResourceLabels',
        'serviceAccount' => 'getServiceAccount',
        'subNetwork' => 'getSubNetwork',
        'taints' => 'getTaints',
        'useIpAliases' => 'getUseIpAliases',
        'zone' => 'getZone',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterIpv4Cidr'] = isset($data['clusterIpv4Cidr']) ? $data['clusterIpv4Cidr'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['diskSizeGb'] = isset($data['diskSizeGb']) ? $data['diskSizeGb'] : null;
        $this->container['diskType'] = isset($data['diskType']) ? $data['diskType'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['driverName'] = isset($data['driverName']) ? $data['driverName'] : null;
        $this->container['enableAlphaFeature'] = isset($data['enableAlphaFeature']) ? $data['enableAlphaFeature'] : null;
        $this->container['enableAutoRepair'] = isset($data['enableAutoRepair']) ? $data['enableAutoRepair'] : null;
        $this->container['enableAutoUpgrade'] = isset($data['enableAutoUpgrade']) ? $data['enableAutoUpgrade'] : null;
        $this->container['enableHorizontalPodAutoscaling'] = isset($data['enableHorizontalPodAutoscaling']) ? $data['enableHorizontalPodAutoscaling'] : null;
        $this->container['enableHttpLoadBalancing'] = isset($data['enableHttpLoadBalancing']) ? $data['enableHttpLoadBalancing'] : null;
        $this->container['enableKubernetesDashboard'] = isset($data['enableKubernetesDashboard']) ? $data['enableKubernetesDashboard'] : null;
        $this->container['enableLegacyAbac'] = isset($data['enableLegacyAbac']) ? $data['enableLegacyAbac'] : null;
        $this->container['enableMasterAuthorizedNetwork'] = isset($data['enableMasterAuthorizedNetwork']) ? $data['enableMasterAuthorizedNetwork'] : null;
        $this->container['enableNetworkPolicyConfig'] = isset($data['enableNetworkPolicyConfig']) ? $data['enableNetworkPolicyConfig'] : null;
        $this->container['enableNodepoolAutoscaling'] = isset($data['enableNodepoolAutoscaling']) ? $data['enableNodepoolAutoscaling'] : null;
        $this->container['enablePrivateEndpoint'] = isset($data['enablePrivateEndpoint']) ? $data['enablePrivateEndpoint'] : null;
        $this->container['enablePrivateNodes'] = isset($data['enablePrivateNodes']) ? $data['enablePrivateNodes'] : null;
        $this->container['enableStackdriverLogging'] = isset($data['enableStackdriverLogging']) ? $data['enableStackdriverLogging'] : null;
        $this->container['enableStackdriverMonitoring'] = isset($data['enableStackdriverMonitoring']) ? $data['enableStackdriverMonitoring'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['ipPolicyClusterIpv4CidrBlock'] = isset($data['ipPolicyClusterIpv4CidrBlock']) ? $data['ipPolicyClusterIpv4CidrBlock'] : null;
        $this->container['ipPolicyClusterSecondaryRangeName'] = isset($data['ipPolicyClusterSecondaryRangeName']) ? $data['ipPolicyClusterSecondaryRangeName'] : null;
        $this->container['ipPolicyCreateSubnetwork'] = isset($data['ipPolicyCreateSubnetwork']) ? $data['ipPolicyCreateSubnetwork'] : null;
        $this->container['ipPolicyNodeIpv4CidrBlock'] = isset($data['ipPolicyNodeIpv4CidrBlock']) ? $data['ipPolicyNodeIpv4CidrBlock'] : null;
        $this->container['ipPolicyServicesIpv4CidrBlock'] = isset($data['ipPolicyServicesIpv4CidrBlock']) ? $data['ipPolicyServicesIpv4CidrBlock'] : null;
        $this->container['ipPolicyServicesSecondaryRangeName'] = isset($data['ipPolicyServicesSecondaryRangeName']) ? $data['ipPolicyServicesSecondaryRangeName'] : null;
        $this->container['ipPolicySubnetworkName'] = isset($data['ipPolicySubnetworkName']) ? $data['ipPolicySubnetworkName'] : null;
        $this->container['issueClientCertificate'] = isset($data['issueClientCertificate']) ? $data['issueClientCertificate'] : null;
        $this->container['kubernetesDashboard'] = isset($data['kubernetesDashboard']) ? $data['kubernetesDashboard'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['localSsdCount'] = isset($data['localSsdCount']) ? $data['localSsdCount'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['machineType'] = isset($data['machineType']) ? $data['machineType'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['masterAuthorizedNetworkCidrBlocks'] = isset($data['masterAuthorizedNetworkCidrBlocks']) ? $data['masterAuthorizedNetworkCidrBlocks'] : null;
        $this->container['masterIpv4CidrBlock'] = isset($data['masterIpv4CidrBlock']) ? $data['masterIpv4CidrBlock'] : null;
        $this->container['masterVersion'] = isset($data['masterVersion']) ? $data['masterVersion'] : null;
        $this->container['maxNodeCount'] = isset($data['maxNodeCount']) ? $data['maxNodeCount'] : null;
        $this->container['minNodeCount'] = isset($data['minNodeCount']) ? $data['minNodeCount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['nodePool'] = isset($data['nodePool']) ? $data['nodePool'] : null;
        $this->container['nodeVersion'] = isset($data['nodeVersion']) ? $data['nodeVersion'] : null;
        $this->container['oauthScopes'] = isset($data['oauthScopes']) ? $data['oauthScopes'] : null;
        $this->container['preemptible'] = isset($data['preemptible']) ? $data['preemptible'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resourceLabels'] = isset($data['resourceLabels']) ? $data['resourceLabels'] : null;
        $this->container['serviceAccount'] = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->container['subNetwork'] = isset($data['subNetwork']) ? $data['subNetwork'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['useIpAliases'] = isset($data['useIpAliases']) ? $data['useIpAliases'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
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
     * Gets credential
     * @return \Rancher\Model\Password
     */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
     * Sets credential
     * @param \Rancher\Model\Password $credential
     * @return $this
     */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;

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
     * Gets diskSizeGb
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->container['diskSizeGb'];
    }

    /**
     * Sets diskSizeGb
     * @param int $diskSizeGb
     * @return $this
     */
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->container['diskSizeGb'] = $diskSizeGb;

        return $this;
    }


    /**
     * Gets diskType
     * @return string
     */
    public function getDiskType()
    {
        return $this->container['diskType'];
    }

    /**
     * Sets diskType
     * @param string $diskType
     * @return $this
     */
    public function setDiskType($diskType)
    {
        $this->container['diskType'] = $diskType;

        return $this;
    }


    /**
     * Gets displayName
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }


    /**
     * Gets driverName
     * @return string
     */
    public function getDriverName()
    {
        return $this->container['driverName'];
    }

    /**
     * Sets driverName
     * @param string $driverName
     * @return $this
     */
    public function setDriverName($driverName)
    {
        $this->container['driverName'] = $driverName;

        return $this;
    }


    /**
     * Gets enableAlphaFeature
     * @return boolean
     */
    public function getEnableAlphaFeature()
    {
        return $this->container['enableAlphaFeature'];
    }

    /**
     * Sets enableAlphaFeature
     * @param boolean $enableAlphaFeature
     * @return $this
     */
    public function setEnableAlphaFeature($enableAlphaFeature)
    {
        $this->container['enableAlphaFeature'] = $enableAlphaFeature;

        return $this;
    }


    /**
     * Gets enableAutoRepair
     * @return boolean
     */
    public function getEnableAutoRepair()
    {
        return $this->container['enableAutoRepair'];
    }

    /**
     * Sets enableAutoRepair
     * @param boolean $enableAutoRepair
     * @return $this
     */
    public function setEnableAutoRepair($enableAutoRepair)
    {
        $this->container['enableAutoRepair'] = $enableAutoRepair;

        return $this;
    }


    /**
     * Gets enableAutoUpgrade
     * @return boolean
     */
    public function getEnableAutoUpgrade()
    {
        return $this->container['enableAutoUpgrade'];
    }

    /**
     * Sets enableAutoUpgrade
     * @param boolean $enableAutoUpgrade
     * @return $this
     */
    public function setEnableAutoUpgrade($enableAutoUpgrade)
    {
        $this->container['enableAutoUpgrade'] = $enableAutoUpgrade;

        return $this;
    }


    /**
     * Gets enableHorizontalPodAutoscaling
     * @return boolean
     */
    public function getEnableHorizontalPodAutoscaling()
    {
        return $this->container['enableHorizontalPodAutoscaling'];
    }

    /**
     * Sets enableHorizontalPodAutoscaling
     * @param boolean $enableHorizontalPodAutoscaling
     * @return $this
     */
    public function setEnableHorizontalPodAutoscaling($enableHorizontalPodAutoscaling)
    {
        $this->container['enableHorizontalPodAutoscaling'] = $enableHorizontalPodAutoscaling;

        return $this;
    }


    /**
     * Gets enableHttpLoadBalancing
     * @return boolean
     */
    public function getEnableHttpLoadBalancing()
    {
        return $this->container['enableHttpLoadBalancing'];
    }

    /**
     * Sets enableHttpLoadBalancing
     * @param boolean $enableHttpLoadBalancing
     * @return $this
     */
    public function setEnableHttpLoadBalancing($enableHttpLoadBalancing)
    {
        $this->container['enableHttpLoadBalancing'] = $enableHttpLoadBalancing;

        return $this;
    }


    /**
     * Gets enableKubernetesDashboard
     * @return boolean
     */
    public function getEnableKubernetesDashboard()
    {
        return $this->container['enableKubernetesDashboard'];
    }

    /**
     * Sets enableKubernetesDashboard
     * @param boolean $enableKubernetesDashboard
     * @return $this
     */
    public function setEnableKubernetesDashboard($enableKubernetesDashboard)
    {
        $this->container['enableKubernetesDashboard'] = $enableKubernetesDashboard;

        return $this;
    }


    /**
     * Gets enableLegacyAbac
     * @return boolean
     */
    public function getEnableLegacyAbac()
    {
        return $this->container['enableLegacyAbac'];
    }

    /**
     * Sets enableLegacyAbac
     * @param boolean $enableLegacyAbac
     * @return $this
     */
    public function setEnableLegacyAbac($enableLegacyAbac)
    {
        $this->container['enableLegacyAbac'] = $enableLegacyAbac;

        return $this;
    }


    /**
     * Gets enableMasterAuthorizedNetwork
     * @return boolean
     */
    public function getEnableMasterAuthorizedNetwork()
    {
        return $this->container['enableMasterAuthorizedNetwork'];
    }

    /**
     * Sets enableMasterAuthorizedNetwork
     * @param boolean $enableMasterAuthorizedNetwork
     * @return $this
     */
    public function setEnableMasterAuthorizedNetwork($enableMasterAuthorizedNetwork)
    {
        $this->container['enableMasterAuthorizedNetwork'] = $enableMasterAuthorizedNetwork;

        return $this;
    }


    /**
     * Gets enableNetworkPolicyConfig
     * @return boolean
     */
    public function getEnableNetworkPolicyConfig()
    {
        return $this->container['enableNetworkPolicyConfig'];
    }

    /**
     * Sets enableNetworkPolicyConfig
     * @param boolean $enableNetworkPolicyConfig
     * @return $this
     */
    public function setEnableNetworkPolicyConfig($enableNetworkPolicyConfig)
    {
        $this->container['enableNetworkPolicyConfig'] = $enableNetworkPolicyConfig;

        return $this;
    }


    /**
     * Gets enableNodepoolAutoscaling
     * @return boolean
     */
    public function getEnableNodepoolAutoscaling()
    {
        return $this->container['enableNodepoolAutoscaling'];
    }

    /**
     * Sets enableNodepoolAutoscaling
     * @param boolean $enableNodepoolAutoscaling
     * @return $this
     */
    public function setEnableNodepoolAutoscaling($enableNodepoolAutoscaling)
    {
        $this->container['enableNodepoolAutoscaling'] = $enableNodepoolAutoscaling;

        return $this;
    }


    /**
     * Gets enablePrivateEndpoint
     * @return boolean
     */
    public function getEnablePrivateEndpoint()
    {
        return $this->container['enablePrivateEndpoint'];
    }

    /**
     * Sets enablePrivateEndpoint
     * @param boolean $enablePrivateEndpoint
     * @return $this
     */
    public function setEnablePrivateEndpoint($enablePrivateEndpoint)
    {
        $this->container['enablePrivateEndpoint'] = $enablePrivateEndpoint;

        return $this;
    }


    /**
     * Gets enablePrivateNodes
     * @return boolean
     */
    public function getEnablePrivateNodes()
    {
        return $this->container['enablePrivateNodes'];
    }

    /**
     * Sets enablePrivateNodes
     * @param boolean $enablePrivateNodes
     * @return $this
     */
    public function setEnablePrivateNodes($enablePrivateNodes)
    {
        $this->container['enablePrivateNodes'] = $enablePrivateNodes;

        return $this;
    }


    /**
     * Gets enableStackdriverLogging
     * @return boolean
     */
    public function getEnableStackdriverLogging()
    {
        return $this->container['enableStackdriverLogging'];
    }

    /**
     * Sets enableStackdriverLogging
     * @param boolean $enableStackdriverLogging
     * @return $this
     */
    public function setEnableStackdriverLogging($enableStackdriverLogging)
    {
        $this->container['enableStackdriverLogging'] = $enableStackdriverLogging;

        return $this;
    }


    /**
     * Gets enableStackdriverMonitoring
     * @return boolean
     */
    public function getEnableStackdriverMonitoring()
    {
        return $this->container['enableStackdriverMonitoring'];
    }

    /**
     * Sets enableStackdriverMonitoring
     * @param boolean $enableStackdriverMonitoring
     * @return $this
     */
    public function setEnableStackdriverMonitoring($enableStackdriverMonitoring)
    {
        $this->container['enableStackdriverMonitoring'] = $enableStackdriverMonitoring;

        return $this;
    }


    /**
     * Gets imageType
     * @return string
     */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
     * Sets imageType
     * @param string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;

        return $this;
    }


    /**
     * Gets ipPolicyClusterIpv4CidrBlock
     * @return string
     */
    public function getIpPolicyClusterIpv4CidrBlock()
    {
        return $this->container['ipPolicyClusterIpv4CidrBlock'];
    }

    /**
     * Sets ipPolicyClusterIpv4CidrBlock
     * @param string $ipPolicyClusterIpv4CidrBlock
     * @return $this
     */
    public function setIpPolicyClusterIpv4CidrBlock($ipPolicyClusterIpv4CidrBlock)
    {
        $this->container['ipPolicyClusterIpv4CidrBlock'] = $ipPolicyClusterIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets ipPolicyClusterSecondaryRangeName
     * @return string
     */
    public function getIpPolicyClusterSecondaryRangeName()
    {
        return $this->container['ipPolicyClusterSecondaryRangeName'];
    }

    /**
     * Sets ipPolicyClusterSecondaryRangeName
     * @param string $ipPolicyClusterSecondaryRangeName
     * @return $this
     */
    public function setIpPolicyClusterSecondaryRangeName($ipPolicyClusterSecondaryRangeName)
    {
        $this->container['ipPolicyClusterSecondaryRangeName'] = $ipPolicyClusterSecondaryRangeName;

        return $this;
    }


    /**
     * Gets ipPolicyCreateSubnetwork
     * @return boolean
     */
    public function getIpPolicyCreateSubnetwork()
    {
        return $this->container['ipPolicyCreateSubnetwork'];
    }

    /**
     * Sets ipPolicyCreateSubnetwork
     * @param boolean $ipPolicyCreateSubnetwork
     * @return $this
     */
    public function setIpPolicyCreateSubnetwork($ipPolicyCreateSubnetwork)
    {
        $this->container['ipPolicyCreateSubnetwork'] = $ipPolicyCreateSubnetwork;

        return $this;
    }


    /**
     * Gets ipPolicyNodeIpv4CidrBlock
     * @return string
     */
    public function getIpPolicyNodeIpv4CidrBlock()
    {
        return $this->container['ipPolicyNodeIpv4CidrBlock'];
    }

    /**
     * Sets ipPolicyNodeIpv4CidrBlock
     * @param string $ipPolicyNodeIpv4CidrBlock
     * @return $this
     */
    public function setIpPolicyNodeIpv4CidrBlock($ipPolicyNodeIpv4CidrBlock)
    {
        $this->container['ipPolicyNodeIpv4CidrBlock'] = $ipPolicyNodeIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets ipPolicyServicesIpv4CidrBlock
     * @return string
     */
    public function getIpPolicyServicesIpv4CidrBlock()
    {
        return $this->container['ipPolicyServicesIpv4CidrBlock'];
    }

    /**
     * Sets ipPolicyServicesIpv4CidrBlock
     * @param string $ipPolicyServicesIpv4CidrBlock
     * @return $this
     */
    public function setIpPolicyServicesIpv4CidrBlock($ipPolicyServicesIpv4CidrBlock)
    {
        $this->container['ipPolicyServicesIpv4CidrBlock'] = $ipPolicyServicesIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets ipPolicyServicesSecondaryRangeName
     * @return string
     */
    public function getIpPolicyServicesSecondaryRangeName()
    {
        return $this->container['ipPolicyServicesSecondaryRangeName'];
    }

    /**
     * Sets ipPolicyServicesSecondaryRangeName
     * @param string $ipPolicyServicesSecondaryRangeName
     * @return $this
     */
    public function setIpPolicyServicesSecondaryRangeName($ipPolicyServicesSecondaryRangeName)
    {
        $this->container['ipPolicyServicesSecondaryRangeName'] = $ipPolicyServicesSecondaryRangeName;

        return $this;
    }


    /**
     * Gets ipPolicySubnetworkName
     * @return string
     */
    public function getIpPolicySubnetworkName()
    {
        return $this->container['ipPolicySubnetworkName'];
    }

    /**
     * Sets ipPolicySubnetworkName
     * @param string $ipPolicySubnetworkName
     * @return $this
     */
    public function setIpPolicySubnetworkName($ipPolicySubnetworkName)
    {
        $this->container['ipPolicySubnetworkName'] = $ipPolicySubnetworkName;

        return $this;
    }


    /**
     * Gets issueClientCertificate
     * @return boolean
     */
    public function getIssueClientCertificate()
    {
        return $this->container['issueClientCertificate'];
    }

    /**
     * Sets issueClientCertificate
     * @param boolean $issueClientCertificate
     * @return $this
     */
    public function setIssueClientCertificate($issueClientCertificate)
    {
        $this->container['issueClientCertificate'] = $issueClientCertificate;

        return $this;
    }


    /**
     * Gets kubernetesDashboard
     * @return boolean
     */
    public function getKubernetesDashboard()
    {
        return $this->container['kubernetesDashboard'];
    }

    /**
     * Sets kubernetesDashboard
     * @param boolean $kubernetesDashboard
     * @return $this
     */
    public function setKubernetesDashboard($kubernetesDashboard)
    {
        $this->container['kubernetesDashboard'] = $kubernetesDashboard;

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
     * Gets localSsdCount
     * @return int
     */
    public function getLocalSsdCount()
    {
        return $this->container['localSsdCount'];
    }

    /**
     * Sets localSsdCount
     * @param int $localSsdCount
     * @return $this
     */
    public function setLocalSsdCount($localSsdCount)
    {
        $this->container['localSsdCount'] = $localSsdCount;

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
     * Gets machineType
     * @return string
     */
    public function getMachineType()
    {
        return $this->container['machineType'];
    }

    /**
     * Sets machineType
     * @param string $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->container['machineType'] = $machineType;

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
     * Gets masterAuthorizedNetworkCidrBlocks
     * @return string[]
     */
    public function getMasterAuthorizedNetworkCidrBlocks()
    {
        return $this->container['masterAuthorizedNetworkCidrBlocks'];
    }

    /**
     * Sets masterAuthorizedNetworkCidrBlocks
     * @param string[] $masterAuthorizedNetworkCidrBlocks
     * @return $this
     */
    public function setMasterAuthorizedNetworkCidrBlocks($masterAuthorizedNetworkCidrBlocks)
    {
        $this->container['masterAuthorizedNetworkCidrBlocks'] = $masterAuthorizedNetworkCidrBlocks;

        return $this;
    }


    /**
     * Gets masterIpv4CidrBlock
     * @return string
     */
    public function getMasterIpv4CidrBlock()
    {
        return $this->container['masterIpv4CidrBlock'];
    }

    /**
     * Sets masterIpv4CidrBlock
     * @param string $masterIpv4CidrBlock
     * @return $this
     */
    public function setMasterIpv4CidrBlock($masterIpv4CidrBlock)
    {
        $this->container['masterIpv4CidrBlock'] = $masterIpv4CidrBlock;

        return $this;
    }


    /**
     * Gets masterVersion
     * @return string
     */
    public function getMasterVersion()
    {
        return $this->container['masterVersion'];
    }

    /**
     * Sets masterVersion
     * @param string $masterVersion
     * @return $this
     */
    public function setMasterVersion($masterVersion)
    {
        $this->container['masterVersion'] = $masterVersion;

        return $this;
    }


    /**
     * Gets maxNodeCount
     * @return int
     */
    public function getMaxNodeCount()
    {
        return $this->container['maxNodeCount'];
    }

    /**
     * Sets maxNodeCount
     * @param int $maxNodeCount
     * @return $this
     */
    public function setMaxNodeCount($maxNodeCount)
    {
        $this->container['maxNodeCount'] = $maxNodeCount;

        return $this;
    }


    /**
     * Gets minNodeCount
     * @return int
     */
    public function getMinNodeCount()
    {
        return $this->container['minNodeCount'];
    }

    /**
     * Sets minNodeCount
     * @param int $minNodeCount
     * @return $this
     */
    public function setMinNodeCount($minNodeCount)
    {
        $this->container['minNodeCount'] = $minNodeCount;

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
     * Gets nodeCount
     * @return int
     */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
     * Sets nodeCount
     * @param int $nodeCount
     * @return $this
     */
    public function setNodeCount($nodeCount)
    {
        $this->container['nodeCount'] = $nodeCount;

        return $this;
    }


    /**
     * Gets nodePool
     * @return string
     */
    public function getNodePool()
    {
        return $this->container['nodePool'];
    }

    /**
     * Sets nodePool
     * @param string $nodePool
     * @return $this
     */
    public function setNodePool($nodePool)
    {
        $this->container['nodePool'] = $nodePool;

        return $this;
    }


    /**
     * Gets nodeVersion
     * @return string
     */
    public function getNodeVersion()
    {
        return $this->container['nodeVersion'];
    }

    /**
     * Sets nodeVersion
     * @param string $nodeVersion
     * @return $this
     */
    public function setNodeVersion($nodeVersion)
    {
        $this->container['nodeVersion'] = $nodeVersion;

        return $this;
    }


    /**
     * Gets oauthScopes
     * @return string[]
     */
    public function getOauthScopes()
    {
        return $this->container['oauthScopes'];
    }

    /**
     * Sets oauthScopes
     * @param string[] $oauthScopes
     * @return $this
     */
    public function setOauthScopes($oauthScopes)
    {
        $this->container['oauthScopes'] = $oauthScopes;

        return $this;
    }


    /**
     * Gets preemptible
     * @return boolean
     */
    public function getPreemptible()
    {
        return $this->container['preemptible'];
    }

    /**
     * Sets preemptible
     * @param boolean $preemptible
     * @return $this
     */
    public function setPreemptible($preemptible)
    {
        $this->container['preemptible'] = $preemptible;

        return $this;
    }


    /**
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }


    /**
     * Gets resourceLabels
     * @return string[]
     */
    public function getResourceLabels()
    {
        return $this->container['resourceLabels'];
    }

    /**
     * Sets resourceLabels
     * @param string[] $resourceLabels
     * @return $this
     */
    public function setResourceLabels($resourceLabels)
    {
        $this->container['resourceLabels'] = $resourceLabels;

        return $this;
    }


    /**
     * Gets serviceAccount
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->container['serviceAccount'];
    }

    /**
     * Sets serviceAccount
     * @param string $serviceAccount
     * @return $this
     */
    public function setServiceAccount($serviceAccount)
    {
        $this->container['serviceAccount'] = $serviceAccount;

        return $this;
    }


    /**
     * Gets subNetwork
     * @return string
     */
    public function getSubNetwork()
    {
        return $this->container['subNetwork'];
    }

    /**
     * Sets subNetwork
     * @param string $subNetwork
     * @return $this
     */
    public function setSubNetwork($subNetwork)
    {
        $this->container['subNetwork'] = $subNetwork;

        return $this;
    }


    /**
     * Gets taints
     * @return string[]
     */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
     * Sets taints
     * @param string[] $taints
     * @return $this
     */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;

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

