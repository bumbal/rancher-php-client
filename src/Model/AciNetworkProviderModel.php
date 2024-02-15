<?php

/**
 * AciNetworkProviderModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AciNetworkProviderModel implements ArrayAccess
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
        'aciContainersControllerMemoryLimit',
        'aciContainersControllerMemoryRequest',
        'aciContainersHostMemoryLimit',
        'aciContainersHostMemoryRequest',
        'aciContainersMemoryLimit',
        'aciContainersMemoryRequest',
        'aciMultipod',
        'aciMultipodUbuntu',
        'addExternalContractToDefaultEpg',
        'addExternalSubnetsToRdconfig',
        'aep',
        'apicHosts',
        'apicRefreshTickerAdjust',
        'apicRefreshTime',
        'apicSubscriptionDelay',
        'apicUserCrt',
        'apicUserKey',
        'apicUserName',
        'capic',
        'controllerLogLevel',
        'dhcpDelay',
        'dhcpRenewMaxRetryCount',
        'disablePeriodicSnatGlobalInfoSync',
        'disableWaitForNetwork',
        'dropLogEnable',
        'durationWaitForNetwork',
        'enableEndpointSlice',
        'enableOpflexAgentReconnect',
        'encapType',
        'epRegistry',
        'externDynamic',
        'externStatic',
        'gbpPodSubnet',
        'hostAgentLogLevel',
        'hppOptimization',
        'imagePullPolicy',
        'imagePullSecret',
        'infraVlan',
        'installIstio',
        'istioProfile',
        'kafkaBrokers',
        'kafkaClientCrt',
        'kafkaClientKey',
        'kubeApiVlan',
        'l3out',
        'l3outExternalNetworks',
        'maxNodesSvcGraph',
        'mcastDaemonMemoryLimit',
        'mcastDaemonMemoryRequest',
        'mcastRangeEnd',
        'mcastRangeStart',
        'mtuHeadRoom',
        'multusDisable',
        'noPriorityClass',
        'noWaitForServiceEpReadiness',
        'nodePodIfEnable',
        'nodeSnatRedirectExclude',
        'nodeSubnet',
        'nodeSvcSubnet',
        'opflexAgentMemoryLimit',
        'opflexAgentMemoryRequest',
        'opflexAgentOpflexAsyncjsonEnabled',
        'opflexAgentOvsAsyncjsonEnabled',
        'opflexAgentPolicyRetryDelayTimer',
        'opflexAgentStatistics',
        'opflexClientSsl',
        'opflexDeviceDeleteTimeout',
        'opflexDeviceReconnectWaitTimeout',
        'opflexLogLevel',
        'opflexMode',
        'opflexOpensslCompat',
        'opflexServerPort',
        'overlayVrfName',
        'ovsMemoryLimit',
        'ovsMemoryRequest',
        'pbrTrackingNonSnat',
        'podSubnetChunkSize',
        'runGbpContainer',
        'runOpflexServerContainer',
        'serviceGraphEndpointAddDelay',
        'serviceGraphEndpointAddServices',
        'serviceMonitorInterval',
        'serviceVlan',
        'sleepTimeSnatGlobalInfoSync',
        'snatContractScope',
        'snatNamespace',
        'snatPortRangeEnd',
        'snatPortRangeStart',
        'snatPortsPerNode',
        'sriovEnable',
        'subnetDomainName',
        'systemId',
        'tenant',
        'token',
        'tolerationSeconds',
        'useAciAnywhereCrd',
        'useAciCniPriorityClass',
        'useClusterRole',
        'useHostNetnsVolume',
        'useOpflexServerVolume',
        'usePrivilegedContainer',
        'useSystemNodePriorityClass',
        'vmmController',
        'vmmDomain',
        'vrfName',
        'vrfTenant',
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
        'aciContainersControllerMemoryLimit',
        'aciContainersControllerMemoryRequest',
        'aciContainersHostMemoryLimit',
        'aciContainersHostMemoryRequest',
        'aciContainersMemoryLimit',
        'aciContainersMemoryRequest',
        'aciMultipod',
        'aciMultipodUbuntu',
        'addExternalContractToDefaultEpg',
        'addExternalSubnetsToRdconfig',
        'aep',
        'apicHosts',
        'apicRefreshTickerAdjust',
        'apicRefreshTime',
        'apicSubscriptionDelay',
        'apicUserCrt',
        'apicUserKey',
        'apicUserName',
        'capic',
        'controllerLogLevel',
        'dhcpDelay',
        'dhcpRenewMaxRetryCount',
        'disablePeriodicSnatGlobalInfoSync',
        'disableWaitForNetwork',
        'dropLogEnable',
        'durationWaitForNetwork',
        'enableEndpointSlice',
        'enableOpflexAgentReconnect',
        'encapType',
        'epRegistry',
        'externDynamic',
        'externStatic',
        'gbpPodSubnet',
        'hostAgentLogLevel',
        'hppOptimization',
        'imagePullPolicy',
        'imagePullSecret',
        'infraVlan',
        'installIstio',
        'istioProfile',
        'kafkaBrokers',
        'kafkaClientCrt',
        'kafkaClientKey',
        'kubeApiVlan',
        'l3out',
        'l3outExternalNetworks',
        'maxNodesSvcGraph',
        'mcastDaemonMemoryLimit',
        'mcastDaemonMemoryRequest',
        'mcastRangeEnd',
        'mcastRangeStart',
        'mtuHeadRoom',
        'multusDisable',
        'noPriorityClass',
        'noWaitForServiceEpReadiness',
        'nodePodIfEnable',
        'nodeSnatRedirectExclude',
        'nodeSubnet',
        'nodeSvcSubnet',
        'opflexAgentMemoryLimit',
        'opflexAgentMemoryRequest',
        'opflexAgentOpflexAsyncjsonEnabled',
        'opflexAgentOvsAsyncjsonEnabled',
        'opflexAgentPolicyRetryDelayTimer',
        'opflexAgentStatistics',
        'opflexClientSsl',
        'opflexDeviceDeleteTimeout',
        'opflexDeviceReconnectWaitTimeout',
        'opflexLogLevel',
        'opflexMode',
        'opflexOpensslCompat',
        'opflexServerPort',
        'overlayVrfName',
        'ovsMemoryLimit',
        'ovsMemoryRequest',
        'pbrTrackingNonSnat',
        'podSubnetChunkSize',
        'runGbpContainer',
        'runOpflexServerContainer',
        'serviceGraphEndpointAddDelay',
        'serviceGraphEndpointAddServices',
        'serviceMonitorInterval',
        'serviceVlan',
        'sleepTimeSnatGlobalInfoSync',
        'snatContractScope',
        'snatNamespace',
        'snatPortRangeEnd',
        'snatPortRangeStart',
        'snatPortsPerNode',
        'sriovEnable',
        'subnetDomainName',
        'systemId',
        'tenant',
        'token',
        'tolerationSeconds',
        'useAciAnywhereCrd',
        'useAciCniPriorityClass',
        'useClusterRole',
        'useHostNetnsVolume',
        'useOpflexServerVolume',
        'usePrivilegedContainer',
        'useSystemNodePriorityClass',
        'vmmController',
        'vmmDomain',
        'vrfName',
        'vrfTenant',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aciContainersControllerMemoryLimit' => 'string',
        'aciContainersControllerMemoryRequest' => 'string',
        'aciContainersHostMemoryLimit' => 'string',
        'aciContainersHostMemoryRequest' => 'string',
        'aciContainersMemoryLimit' => 'string',
        'aciContainersMemoryRequest' => 'string',
        'aciMultipod' => 'string',
        'aciMultipodUbuntu' => 'string',
        'addExternalContractToDefaultEpg' => 'string',
        'addExternalSubnetsToRdconfig' => 'string',
        'aep' => 'string',
        'apicHosts' => 'string[]',
        'apicRefreshTickerAdjust' => 'string',
        'apicRefreshTime' => 'string',
        'apicSubscriptionDelay' => 'string',
        'apicUserCrt' => 'string',
        'apicUserKey' => 'string',
        'apicUserName' => 'string',
        'capic' => 'string',
        'controllerLogLevel' => 'string',
        'dhcpDelay' => 'string',
        'dhcpRenewMaxRetryCount' => 'string',
        'disablePeriodicSnatGlobalInfoSync' => 'string',
        'disableWaitForNetwork' => 'string',
        'dropLogEnable' => 'string',
        'durationWaitForNetwork' => 'string',
        'enableEndpointSlice' => 'string',
        'enableOpflexAgentReconnect' => 'string',
        'encapType' => 'string',
        'epRegistry' => 'string',
        'externDynamic' => 'string',
        'externStatic' => 'string',
        'gbpPodSubnet' => 'string',
        'hostAgentLogLevel' => 'string',
        'hppOptimization' => 'string',
        'imagePullPolicy' => 'string',
        'imagePullSecret' => 'string',
        'infraVlan' => 'string',
        'installIstio' => 'string',
        'istioProfile' => 'string',
        'kafkaBrokers' => 'string[]',
        'kafkaClientCrt' => 'string',
        'kafkaClientKey' => 'string',
        'kubeApiVlan' => 'string',
        'l3out' => 'string',
        'l3outExternalNetworks' => 'string[]',
        'maxNodesSvcGraph' => 'string',
        'mcastDaemonMemoryLimit' => 'string',
        'mcastDaemonMemoryRequest' => 'string',
        'mcastRangeEnd' => 'string',
        'mcastRangeStart' => 'string',
        'mtuHeadRoom' => 'string',
        'multusDisable' => 'string',
        'noPriorityClass' => 'string',
        'noWaitForServiceEpReadiness' => 'string',
        'nodePodIfEnable' => 'string',
        'nodeSnatRedirectExclude' => '\Rancher\Model\Map[string]Model[]',
        'nodeSubnet' => 'string',
        'nodeSvcSubnet' => 'string',
        'opflexAgentMemoryLimit' => 'string',
        'opflexAgentMemoryRequest' => 'string',
        'opflexAgentOpflexAsyncjsonEnabled' => 'string',
        'opflexAgentOvsAsyncjsonEnabled' => 'string',
        'opflexAgentPolicyRetryDelayTimer' => 'string',
        'opflexAgentStatistics' => 'string',
        'opflexClientSsl' => 'string',
        'opflexDeviceDeleteTimeout' => 'string',
        'opflexDeviceReconnectWaitTimeout' => 'string',
        'opflexLogLevel' => 'string',
        'opflexMode' => 'string',
        'opflexOpensslCompat' => 'string',
        'opflexServerPort' => 'string',
        'overlayVrfName' => 'string',
        'ovsMemoryLimit' => 'string',
        'ovsMemoryRequest' => 'string',
        'pbrTrackingNonSnat' => 'string',
        'podSubnetChunkSize' => 'string',
        'runGbpContainer' => 'string',
        'runOpflexServerContainer' => 'string',
        'serviceGraphEndpointAddDelay' => 'string',
        'serviceGraphEndpointAddServices' => '\Rancher\Model\Map[string]Model[]',
        'serviceMonitorInterval' => 'string',
        'serviceVlan' => 'string',
        'sleepTimeSnatGlobalInfoSync' => 'string',
        'snatContractScope' => 'string',
        'snatNamespace' => 'string',
        'snatPortRangeEnd' => 'string',
        'snatPortRangeStart' => 'string',
        'snatPortsPerNode' => 'string',
        'sriovEnable' => 'string',
        'subnetDomainName' => 'string',
        'systemId' => 'string',
        'tenant' => 'string',
        'token' => 'string',
        'tolerationSeconds' => 'string',
        'useAciAnywhereCrd' => 'string',
        'useAciCniPriorityClass' => 'string',
        'useClusterRole' => 'string',
        'useHostNetnsVolume' => 'string',
        'useOpflexServerVolume' => 'string',
        'usePrivilegedContainer' => 'string',
        'useSystemNodePriorityClass' => 'string',
        'vmmController' => 'string',
        'vmmDomain' => 'string',
        'vrfName' => 'string',
        'vrfTenant' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aciContainersControllerMemoryLimit' => 'setAciContainersControllerMemoryLimit',
        'aciContainersControllerMemoryRequest' => 'setAciContainersControllerMemoryRequest',
        'aciContainersHostMemoryLimit' => 'setAciContainersHostMemoryLimit',
        'aciContainersHostMemoryRequest' => 'setAciContainersHostMemoryRequest',
        'aciContainersMemoryLimit' => 'setAciContainersMemoryLimit',
        'aciContainersMemoryRequest' => 'setAciContainersMemoryRequest',
        'aciMultipod' => 'setAciMultipod',
        'aciMultipodUbuntu' => 'setAciMultipodUbuntu',
        'addExternalContractToDefaultEpg' => 'setAddExternalContractToDefaultEpg',
        'addExternalSubnetsToRdconfig' => 'setAddExternalSubnetsToRdconfig',
        'aep' => 'setAep',
        'apicHosts' => 'setApicHosts',
        'apicRefreshTickerAdjust' => 'setApicRefreshTickerAdjust',
        'apicRefreshTime' => 'setApicRefreshTime',
        'apicSubscriptionDelay' => 'setApicSubscriptionDelay',
        'apicUserCrt' => 'setApicUserCrt',
        'apicUserKey' => 'setApicUserKey',
        'apicUserName' => 'setApicUserName',
        'capic' => 'setCapic',
        'controllerLogLevel' => 'setControllerLogLevel',
        'dhcpDelay' => 'setDhcpDelay',
        'dhcpRenewMaxRetryCount' => 'setDhcpRenewMaxRetryCount',
        'disablePeriodicSnatGlobalInfoSync' => 'setDisablePeriodicSnatGlobalInfoSync',
        'disableWaitForNetwork' => 'setDisableWaitForNetwork',
        'dropLogEnable' => 'setDropLogEnable',
        'durationWaitForNetwork' => 'setDurationWaitForNetwork',
        'enableEndpointSlice' => 'setEnableEndpointSlice',
        'enableOpflexAgentReconnect' => 'setEnableOpflexAgentReconnect',
        'encapType' => 'setEncapType',
        'epRegistry' => 'setEpRegistry',
        'externDynamic' => 'setExternDynamic',
        'externStatic' => 'setExternStatic',
        'gbpPodSubnet' => 'setGbpPodSubnet',
        'hostAgentLogLevel' => 'setHostAgentLogLevel',
        'hppOptimization' => 'setHppOptimization',
        'imagePullPolicy' => 'setImagePullPolicy',
        'imagePullSecret' => 'setImagePullSecret',
        'infraVlan' => 'setInfraVlan',
        'installIstio' => 'setInstallIstio',
        'istioProfile' => 'setIstioProfile',
        'kafkaBrokers' => 'setKafkaBrokers',
        'kafkaClientCrt' => 'setKafkaClientCrt',
        'kafkaClientKey' => 'setKafkaClientKey',
        'kubeApiVlan' => 'setKubeApiVlan',
        'l3out' => 'setL3out',
        'l3outExternalNetworks' => 'setL3outExternalNetworks',
        'maxNodesSvcGraph' => 'setMaxNodesSvcGraph',
        'mcastDaemonMemoryLimit' => 'setMcastDaemonMemoryLimit',
        'mcastDaemonMemoryRequest' => 'setMcastDaemonMemoryRequest',
        'mcastRangeEnd' => 'setMcastRangeEnd',
        'mcastRangeStart' => 'setMcastRangeStart',
        'mtuHeadRoom' => 'setMtuHeadRoom',
        'multusDisable' => 'setMultusDisable',
        'noPriorityClass' => 'setNoPriorityClass',
        'noWaitForServiceEpReadiness' => 'setNoWaitForServiceEpReadiness',
        'nodePodIfEnable' => 'setNodePodIfEnable',
        'nodeSnatRedirectExclude' => 'setNodeSnatRedirectExclude',
        'nodeSubnet' => 'setNodeSubnet',
        'nodeSvcSubnet' => 'setNodeSvcSubnet',
        'opflexAgentMemoryLimit' => 'setOpflexAgentMemoryLimit',
        'opflexAgentMemoryRequest' => 'setOpflexAgentMemoryRequest',
        'opflexAgentOpflexAsyncjsonEnabled' => 'setOpflexAgentOpflexAsyncjsonEnabled',
        'opflexAgentOvsAsyncjsonEnabled' => 'setOpflexAgentOvsAsyncjsonEnabled',
        'opflexAgentPolicyRetryDelayTimer' => 'setOpflexAgentPolicyRetryDelayTimer',
        'opflexAgentStatistics' => 'setOpflexAgentStatistics',
        'opflexClientSsl' => 'setOpflexClientSsl',
        'opflexDeviceDeleteTimeout' => 'setOpflexDeviceDeleteTimeout',
        'opflexDeviceReconnectWaitTimeout' => 'setOpflexDeviceReconnectWaitTimeout',
        'opflexLogLevel' => 'setOpflexLogLevel',
        'opflexMode' => 'setOpflexMode',
        'opflexOpensslCompat' => 'setOpflexOpensslCompat',
        'opflexServerPort' => 'setOpflexServerPort',
        'overlayVrfName' => 'setOverlayVrfName',
        'ovsMemoryLimit' => 'setOvsMemoryLimit',
        'ovsMemoryRequest' => 'setOvsMemoryRequest',
        'pbrTrackingNonSnat' => 'setPbrTrackingNonSnat',
        'podSubnetChunkSize' => 'setPodSubnetChunkSize',
        'runGbpContainer' => 'setRunGbpContainer',
        'runOpflexServerContainer' => 'setRunOpflexServerContainer',
        'serviceGraphEndpointAddDelay' => 'setServiceGraphEndpointAddDelay',
        'serviceGraphEndpointAddServices' => 'setServiceGraphEndpointAddServices',
        'serviceMonitorInterval' => 'setServiceMonitorInterval',
        'serviceVlan' => 'setServiceVlan',
        'sleepTimeSnatGlobalInfoSync' => 'setSleepTimeSnatGlobalInfoSync',
        'snatContractScope' => 'setSnatContractScope',
        'snatNamespace' => 'setSnatNamespace',
        'snatPortRangeEnd' => 'setSnatPortRangeEnd',
        'snatPortRangeStart' => 'setSnatPortRangeStart',
        'snatPortsPerNode' => 'setSnatPortsPerNode',
        'sriovEnable' => 'setSriovEnable',
        'subnetDomainName' => 'setSubnetDomainName',
        'systemId' => 'setSystemId',
        'tenant' => 'setTenant',
        'token' => 'setToken',
        'tolerationSeconds' => 'setTolerationSeconds',
        'useAciAnywhereCrd' => 'setUseAciAnywhereCrd',
        'useAciCniPriorityClass' => 'setUseAciCniPriorityClass',
        'useClusterRole' => 'setUseClusterRole',
        'useHostNetnsVolume' => 'setUseHostNetnsVolume',
        'useOpflexServerVolume' => 'setUseOpflexServerVolume',
        'usePrivilegedContainer' => 'setUsePrivilegedContainer',
        'useSystemNodePriorityClass' => 'setUseSystemNodePriorityClass',
        'vmmController' => 'setVmmController',
        'vmmDomain' => 'setVmmDomain',
        'vrfName' => 'setVrfName',
        'vrfTenant' => 'setVrfTenant',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aciContainersControllerMemoryLimit' => 'getAciContainersControllerMemoryLimit',
        'aciContainersControllerMemoryRequest' => 'getAciContainersControllerMemoryRequest',
        'aciContainersHostMemoryLimit' => 'getAciContainersHostMemoryLimit',
        'aciContainersHostMemoryRequest' => 'getAciContainersHostMemoryRequest',
        'aciContainersMemoryLimit' => 'getAciContainersMemoryLimit',
        'aciContainersMemoryRequest' => 'getAciContainersMemoryRequest',
        'aciMultipod' => 'getAciMultipod',
        'aciMultipodUbuntu' => 'getAciMultipodUbuntu',
        'addExternalContractToDefaultEpg' => 'getAddExternalContractToDefaultEpg',
        'addExternalSubnetsToRdconfig' => 'getAddExternalSubnetsToRdconfig',
        'aep' => 'getAep',
        'apicHosts' => 'getApicHosts',
        'apicRefreshTickerAdjust' => 'getApicRefreshTickerAdjust',
        'apicRefreshTime' => 'getApicRefreshTime',
        'apicSubscriptionDelay' => 'getApicSubscriptionDelay',
        'apicUserCrt' => 'getApicUserCrt',
        'apicUserKey' => 'getApicUserKey',
        'apicUserName' => 'getApicUserName',
        'capic' => 'getCapic',
        'controllerLogLevel' => 'getControllerLogLevel',
        'dhcpDelay' => 'getDhcpDelay',
        'dhcpRenewMaxRetryCount' => 'getDhcpRenewMaxRetryCount',
        'disablePeriodicSnatGlobalInfoSync' => 'getDisablePeriodicSnatGlobalInfoSync',
        'disableWaitForNetwork' => 'getDisableWaitForNetwork',
        'dropLogEnable' => 'getDropLogEnable',
        'durationWaitForNetwork' => 'getDurationWaitForNetwork',
        'enableEndpointSlice' => 'getEnableEndpointSlice',
        'enableOpflexAgentReconnect' => 'getEnableOpflexAgentReconnect',
        'encapType' => 'getEncapType',
        'epRegistry' => 'getEpRegistry',
        'externDynamic' => 'getExternDynamic',
        'externStatic' => 'getExternStatic',
        'gbpPodSubnet' => 'getGbpPodSubnet',
        'hostAgentLogLevel' => 'getHostAgentLogLevel',
        'hppOptimization' => 'getHppOptimization',
        'imagePullPolicy' => 'getImagePullPolicy',
        'imagePullSecret' => 'getImagePullSecret',
        'infraVlan' => 'getInfraVlan',
        'installIstio' => 'getInstallIstio',
        'istioProfile' => 'getIstioProfile',
        'kafkaBrokers' => 'getKafkaBrokers',
        'kafkaClientCrt' => 'getKafkaClientCrt',
        'kafkaClientKey' => 'getKafkaClientKey',
        'kubeApiVlan' => 'getKubeApiVlan',
        'l3out' => 'getL3out',
        'l3outExternalNetworks' => 'getL3outExternalNetworks',
        'maxNodesSvcGraph' => 'getMaxNodesSvcGraph',
        'mcastDaemonMemoryLimit' => 'getMcastDaemonMemoryLimit',
        'mcastDaemonMemoryRequest' => 'getMcastDaemonMemoryRequest',
        'mcastRangeEnd' => 'getMcastRangeEnd',
        'mcastRangeStart' => 'getMcastRangeStart',
        'mtuHeadRoom' => 'getMtuHeadRoom',
        'multusDisable' => 'getMultusDisable',
        'noPriorityClass' => 'getNoPriorityClass',
        'noWaitForServiceEpReadiness' => 'getNoWaitForServiceEpReadiness',
        'nodePodIfEnable' => 'getNodePodIfEnable',
        'nodeSnatRedirectExclude' => 'getNodeSnatRedirectExclude',
        'nodeSubnet' => 'getNodeSubnet',
        'nodeSvcSubnet' => 'getNodeSvcSubnet',
        'opflexAgentMemoryLimit' => 'getOpflexAgentMemoryLimit',
        'opflexAgentMemoryRequest' => 'getOpflexAgentMemoryRequest',
        'opflexAgentOpflexAsyncjsonEnabled' => 'getOpflexAgentOpflexAsyncjsonEnabled',
        'opflexAgentOvsAsyncjsonEnabled' => 'getOpflexAgentOvsAsyncjsonEnabled',
        'opflexAgentPolicyRetryDelayTimer' => 'getOpflexAgentPolicyRetryDelayTimer',
        'opflexAgentStatistics' => 'getOpflexAgentStatistics',
        'opflexClientSsl' => 'getOpflexClientSsl',
        'opflexDeviceDeleteTimeout' => 'getOpflexDeviceDeleteTimeout',
        'opflexDeviceReconnectWaitTimeout' => 'getOpflexDeviceReconnectWaitTimeout',
        'opflexLogLevel' => 'getOpflexLogLevel',
        'opflexMode' => 'getOpflexMode',
        'opflexOpensslCompat' => 'getOpflexOpensslCompat',
        'opflexServerPort' => 'getOpflexServerPort',
        'overlayVrfName' => 'getOverlayVrfName',
        'ovsMemoryLimit' => 'getOvsMemoryLimit',
        'ovsMemoryRequest' => 'getOvsMemoryRequest',
        'pbrTrackingNonSnat' => 'getPbrTrackingNonSnat',
        'podSubnetChunkSize' => 'getPodSubnetChunkSize',
        'runGbpContainer' => 'getRunGbpContainer',
        'runOpflexServerContainer' => 'getRunOpflexServerContainer',
        'serviceGraphEndpointAddDelay' => 'getServiceGraphEndpointAddDelay',
        'serviceGraphEndpointAddServices' => 'getServiceGraphEndpointAddServices',
        'serviceMonitorInterval' => 'getServiceMonitorInterval',
        'serviceVlan' => 'getServiceVlan',
        'sleepTimeSnatGlobalInfoSync' => 'getSleepTimeSnatGlobalInfoSync',
        'snatContractScope' => 'getSnatContractScope',
        'snatNamespace' => 'getSnatNamespace',
        'snatPortRangeEnd' => 'getSnatPortRangeEnd',
        'snatPortRangeStart' => 'getSnatPortRangeStart',
        'snatPortsPerNode' => 'getSnatPortsPerNode',
        'sriovEnable' => 'getSriovEnable',
        'subnetDomainName' => 'getSubnetDomainName',
        'systemId' => 'getSystemId',
        'tenant' => 'getTenant',
        'token' => 'getToken',
        'tolerationSeconds' => 'getTolerationSeconds',
        'useAciAnywhereCrd' => 'getUseAciAnywhereCrd',
        'useAciCniPriorityClass' => 'getUseAciCniPriorityClass',
        'useClusterRole' => 'getUseClusterRole',
        'useHostNetnsVolume' => 'getUseHostNetnsVolume',
        'useOpflexServerVolume' => 'getUseOpflexServerVolume',
        'usePrivilegedContainer' => 'getUsePrivilegedContainer',
        'useSystemNodePriorityClass' => 'getUseSystemNodePriorityClass',
        'vmmController' => 'getVmmController',
        'vmmDomain' => 'getVmmDomain',
        'vrfName' => 'getVrfName',
        'vrfTenant' => 'getVrfTenant',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aciContainersControllerMemoryLimit'] = isset($data['aciContainersControllerMemoryLimit']) ? $data['aciContainersControllerMemoryLimit'] : null;
        $this->container['aciContainersControllerMemoryRequest'] = isset($data['aciContainersControllerMemoryRequest']) ? $data['aciContainersControllerMemoryRequest'] : null;
        $this->container['aciContainersHostMemoryLimit'] = isset($data['aciContainersHostMemoryLimit']) ? $data['aciContainersHostMemoryLimit'] : null;
        $this->container['aciContainersHostMemoryRequest'] = isset($data['aciContainersHostMemoryRequest']) ? $data['aciContainersHostMemoryRequest'] : null;
        $this->container['aciContainersMemoryLimit'] = isset($data['aciContainersMemoryLimit']) ? $data['aciContainersMemoryLimit'] : null;
        $this->container['aciContainersMemoryRequest'] = isset($data['aciContainersMemoryRequest']) ? $data['aciContainersMemoryRequest'] : null;
        $this->container['aciMultipod'] = isset($data['aciMultipod']) ? $data['aciMultipod'] : null;
        $this->container['aciMultipodUbuntu'] = isset($data['aciMultipodUbuntu']) ? $data['aciMultipodUbuntu'] : null;
        $this->container['addExternalContractToDefaultEpg'] = isset($data['addExternalContractToDefaultEpg']) ? $data['addExternalContractToDefaultEpg'] : null;
        $this->container['addExternalSubnetsToRdconfig'] = isset($data['addExternalSubnetsToRdconfig']) ? $data['addExternalSubnetsToRdconfig'] : null;
        $this->container['aep'] = isset($data['aep']) ? $data['aep'] : null;
        $this->container['apicHosts'] = isset($data['apicHosts']) ? $data['apicHosts'] : null;
        $this->container['apicRefreshTickerAdjust'] = isset($data['apicRefreshTickerAdjust']) ? $data['apicRefreshTickerAdjust'] : null;
        $this->container['apicRefreshTime'] = isset($data['apicRefreshTime']) ? $data['apicRefreshTime'] : null;
        $this->container['apicSubscriptionDelay'] = isset($data['apicSubscriptionDelay']) ? $data['apicSubscriptionDelay'] : null;
        $this->container['apicUserCrt'] = isset($data['apicUserCrt']) ? $data['apicUserCrt'] : null;
        $this->container['apicUserKey'] = isset($data['apicUserKey']) ? $data['apicUserKey'] : null;
        $this->container['apicUserName'] = isset($data['apicUserName']) ? $data['apicUserName'] : null;
        $this->container['capic'] = isset($data['capic']) ? $data['capic'] : null;
        $this->container['controllerLogLevel'] = isset($data['controllerLogLevel']) ? $data['controllerLogLevel'] : null;
        $this->container['dhcpDelay'] = isset($data['dhcpDelay']) ? $data['dhcpDelay'] : null;
        $this->container['dhcpRenewMaxRetryCount'] = isset($data['dhcpRenewMaxRetryCount']) ? $data['dhcpRenewMaxRetryCount'] : null;
        $this->container['disablePeriodicSnatGlobalInfoSync'] = isset($data['disablePeriodicSnatGlobalInfoSync']) ? $data['disablePeriodicSnatGlobalInfoSync'] : null;
        $this->container['disableWaitForNetwork'] = isset($data['disableWaitForNetwork']) ? $data['disableWaitForNetwork'] : null;
        $this->container['dropLogEnable'] = isset($data['dropLogEnable']) ? $data['dropLogEnable'] : null;
        $this->container['durationWaitForNetwork'] = isset($data['durationWaitForNetwork']) ? $data['durationWaitForNetwork'] : null;
        $this->container['enableEndpointSlice'] = isset($data['enableEndpointSlice']) ? $data['enableEndpointSlice'] : null;
        $this->container['enableOpflexAgentReconnect'] = isset($data['enableOpflexAgentReconnect']) ? $data['enableOpflexAgentReconnect'] : null;
        $this->container['encapType'] = isset($data['encapType']) ? $data['encapType'] : null;
        $this->container['epRegistry'] = isset($data['epRegistry']) ? $data['epRegistry'] : null;
        $this->container['externDynamic'] = isset($data['externDynamic']) ? $data['externDynamic'] : null;
        $this->container['externStatic'] = isset($data['externStatic']) ? $data['externStatic'] : null;
        $this->container['gbpPodSubnet'] = isset($data['gbpPodSubnet']) ? $data['gbpPodSubnet'] : null;
        $this->container['hostAgentLogLevel'] = isset($data['hostAgentLogLevel']) ? $data['hostAgentLogLevel'] : null;
        $this->container['hppOptimization'] = isset($data['hppOptimization']) ? $data['hppOptimization'] : null;
        $this->container['imagePullPolicy'] = isset($data['imagePullPolicy']) ? $data['imagePullPolicy'] : null;
        $this->container['imagePullSecret'] = isset($data['imagePullSecret']) ? $data['imagePullSecret'] : null;
        $this->container['infraVlan'] = isset($data['infraVlan']) ? $data['infraVlan'] : null;
        $this->container['installIstio'] = isset($data['installIstio']) ? $data['installIstio'] : null;
        $this->container['istioProfile'] = isset($data['istioProfile']) ? $data['istioProfile'] : null;
        $this->container['kafkaBrokers'] = isset($data['kafkaBrokers']) ? $data['kafkaBrokers'] : null;
        $this->container['kafkaClientCrt'] = isset($data['kafkaClientCrt']) ? $data['kafkaClientCrt'] : null;
        $this->container['kafkaClientKey'] = isset($data['kafkaClientKey']) ? $data['kafkaClientKey'] : null;
        $this->container['kubeApiVlan'] = isset($data['kubeApiVlan']) ? $data['kubeApiVlan'] : null;
        $this->container['l3out'] = isset($data['l3out']) ? $data['l3out'] : null;
        $this->container['l3outExternalNetworks'] = isset($data['l3outExternalNetworks']) ? $data['l3outExternalNetworks'] : null;
        $this->container['maxNodesSvcGraph'] = isset($data['maxNodesSvcGraph']) ? $data['maxNodesSvcGraph'] : null;
        $this->container['mcastDaemonMemoryLimit'] = isset($data['mcastDaemonMemoryLimit']) ? $data['mcastDaemonMemoryLimit'] : null;
        $this->container['mcastDaemonMemoryRequest'] = isset($data['mcastDaemonMemoryRequest']) ? $data['mcastDaemonMemoryRequest'] : null;
        $this->container['mcastRangeEnd'] = isset($data['mcastRangeEnd']) ? $data['mcastRangeEnd'] : null;
        $this->container['mcastRangeStart'] = isset($data['mcastRangeStart']) ? $data['mcastRangeStart'] : null;
        $this->container['mtuHeadRoom'] = isset($data['mtuHeadRoom']) ? $data['mtuHeadRoom'] : null;
        $this->container['multusDisable'] = isset($data['multusDisable']) ? $data['multusDisable'] : null;
        $this->container['noPriorityClass'] = isset($data['noPriorityClass']) ? $data['noPriorityClass'] : null;
        $this->container['noWaitForServiceEpReadiness'] = isset($data['noWaitForServiceEpReadiness']) ? $data['noWaitForServiceEpReadiness'] : null;
        $this->container['nodePodIfEnable'] = isset($data['nodePodIfEnable']) ? $data['nodePodIfEnable'] : null;
        $this->container['nodeSnatRedirectExclude'] = isset($data['nodeSnatRedirectExclude']) ? $data['nodeSnatRedirectExclude'] : null;
        $this->container['nodeSubnet'] = isset($data['nodeSubnet']) ? $data['nodeSubnet'] : null;
        $this->container['nodeSvcSubnet'] = isset($data['nodeSvcSubnet']) ? $data['nodeSvcSubnet'] : null;
        $this->container['opflexAgentMemoryLimit'] = isset($data['opflexAgentMemoryLimit']) ? $data['opflexAgentMemoryLimit'] : null;
        $this->container['opflexAgentMemoryRequest'] = isset($data['opflexAgentMemoryRequest']) ? $data['opflexAgentMemoryRequest'] : null;
        $this->container['opflexAgentOpflexAsyncjsonEnabled'] = isset($data['opflexAgentOpflexAsyncjsonEnabled']) ? $data['opflexAgentOpflexAsyncjsonEnabled'] : null;
        $this->container['opflexAgentOvsAsyncjsonEnabled'] = isset($data['opflexAgentOvsAsyncjsonEnabled']) ? $data['opflexAgentOvsAsyncjsonEnabled'] : null;
        $this->container['opflexAgentPolicyRetryDelayTimer'] = isset($data['opflexAgentPolicyRetryDelayTimer']) ? $data['opflexAgentPolicyRetryDelayTimer'] : null;
        $this->container['opflexAgentStatistics'] = isset($data['opflexAgentStatistics']) ? $data['opflexAgentStatistics'] : null;
        $this->container['opflexClientSsl'] = isset($data['opflexClientSsl']) ? $data['opflexClientSsl'] : null;
        $this->container['opflexDeviceDeleteTimeout'] = isset($data['opflexDeviceDeleteTimeout']) ? $data['opflexDeviceDeleteTimeout'] : null;
        $this->container['opflexDeviceReconnectWaitTimeout'] = isset($data['opflexDeviceReconnectWaitTimeout']) ? $data['opflexDeviceReconnectWaitTimeout'] : null;
        $this->container['opflexLogLevel'] = isset($data['opflexLogLevel']) ? $data['opflexLogLevel'] : null;
        $this->container['opflexMode'] = isset($data['opflexMode']) ? $data['opflexMode'] : null;
        $this->container['opflexOpensslCompat'] = isset($data['opflexOpensslCompat']) ? $data['opflexOpensslCompat'] : null;
        $this->container['opflexServerPort'] = isset($data['opflexServerPort']) ? $data['opflexServerPort'] : null;
        $this->container['overlayVrfName'] = isset($data['overlayVrfName']) ? $data['overlayVrfName'] : null;
        $this->container['ovsMemoryLimit'] = isset($data['ovsMemoryLimit']) ? $data['ovsMemoryLimit'] : null;
        $this->container['ovsMemoryRequest'] = isset($data['ovsMemoryRequest']) ? $data['ovsMemoryRequest'] : null;
        $this->container['pbrTrackingNonSnat'] = isset($data['pbrTrackingNonSnat']) ? $data['pbrTrackingNonSnat'] : null;
        $this->container['podSubnetChunkSize'] = isset($data['podSubnetChunkSize']) ? $data['podSubnetChunkSize'] : null;
        $this->container['runGbpContainer'] = isset($data['runGbpContainer']) ? $data['runGbpContainer'] : null;
        $this->container['runOpflexServerContainer'] = isset($data['runOpflexServerContainer']) ? $data['runOpflexServerContainer'] : null;
        $this->container['serviceGraphEndpointAddDelay'] = isset($data['serviceGraphEndpointAddDelay']) ? $data['serviceGraphEndpointAddDelay'] : null;
        $this->container['serviceGraphEndpointAddServices'] = isset($data['serviceGraphEndpointAddServices']) ? $data['serviceGraphEndpointAddServices'] : null;
        $this->container['serviceMonitorInterval'] = isset($data['serviceMonitorInterval']) ? $data['serviceMonitorInterval'] : null;
        $this->container['serviceVlan'] = isset($data['serviceVlan']) ? $data['serviceVlan'] : null;
        $this->container['sleepTimeSnatGlobalInfoSync'] = isset($data['sleepTimeSnatGlobalInfoSync']) ? $data['sleepTimeSnatGlobalInfoSync'] : null;
        $this->container['snatContractScope'] = isset($data['snatContractScope']) ? $data['snatContractScope'] : null;
        $this->container['snatNamespace'] = isset($data['snatNamespace']) ? $data['snatNamespace'] : null;
        $this->container['snatPortRangeEnd'] = isset($data['snatPortRangeEnd']) ? $data['snatPortRangeEnd'] : null;
        $this->container['snatPortRangeStart'] = isset($data['snatPortRangeStart']) ? $data['snatPortRangeStart'] : null;
        $this->container['snatPortsPerNode'] = isset($data['snatPortsPerNode']) ? $data['snatPortsPerNode'] : null;
        $this->container['sriovEnable'] = isset($data['sriovEnable']) ? $data['sriovEnable'] : null;
        $this->container['subnetDomainName'] = isset($data['subnetDomainName']) ? $data['subnetDomainName'] : null;
        $this->container['systemId'] = isset($data['systemId']) ? $data['systemId'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['tolerationSeconds'] = isset($data['tolerationSeconds']) ? $data['tolerationSeconds'] : null;
        $this->container['useAciAnywhereCrd'] = isset($data['useAciAnywhereCrd']) ? $data['useAciAnywhereCrd'] : null;
        $this->container['useAciCniPriorityClass'] = isset($data['useAciCniPriorityClass']) ? $data['useAciCniPriorityClass'] : null;
        $this->container['useClusterRole'] = isset($data['useClusterRole']) ? $data['useClusterRole'] : null;
        $this->container['useHostNetnsVolume'] = isset($data['useHostNetnsVolume']) ? $data['useHostNetnsVolume'] : null;
        $this->container['useOpflexServerVolume'] = isset($data['useOpflexServerVolume']) ? $data['useOpflexServerVolume'] : null;
        $this->container['usePrivilegedContainer'] = isset($data['usePrivilegedContainer']) ? $data['usePrivilegedContainer'] : null;
        $this->container['useSystemNodePriorityClass'] = isset($data['useSystemNodePriorityClass']) ? $data['useSystemNodePriorityClass'] : null;
        $this->container['vmmController'] = isset($data['vmmController']) ? $data['vmmController'] : null;
        $this->container['vmmDomain'] = isset($data['vmmDomain']) ? $data['vmmDomain'] : null;
        $this->container['vrfName'] = isset($data['vrfName']) ? $data['vrfName'] : null;
        $this->container['vrfTenant'] = isset($data['vrfTenant']) ? $data['vrfTenant'] : null;
    }

    /**
     * Gets aciContainersControllerMemoryLimit
     * @return string
     */
    public function getAciContainersControllerMemoryLimit()
    {
        return $this->container['aciContainersControllerMemoryLimit'];
    }

    /**
     * Sets aciContainersControllerMemoryLimit
     * @param string $aciContainersControllerMemoryLimit
     * @return $this
     */
    public function setAciContainersControllerMemoryLimit($aciContainersControllerMemoryLimit)
    {
        $this->container['aciContainersControllerMemoryLimit'] = $aciContainersControllerMemoryLimit;

        return $this;
    }


    /**
     * Gets aciContainersControllerMemoryRequest
     * @return string
     */
    public function getAciContainersControllerMemoryRequest()
    {
        return $this->container['aciContainersControllerMemoryRequest'];
    }

    /**
     * Sets aciContainersControllerMemoryRequest
     * @param string $aciContainersControllerMemoryRequest
     * @return $this
     */
    public function setAciContainersControllerMemoryRequest($aciContainersControllerMemoryRequest)
    {
        $this->container['aciContainersControllerMemoryRequest'] = $aciContainersControllerMemoryRequest;

        return $this;
    }


    /**
     * Gets aciContainersHostMemoryLimit
     * @return string
     */
    public function getAciContainersHostMemoryLimit()
    {
        return $this->container['aciContainersHostMemoryLimit'];
    }

    /**
     * Sets aciContainersHostMemoryLimit
     * @param string $aciContainersHostMemoryLimit
     * @return $this
     */
    public function setAciContainersHostMemoryLimit($aciContainersHostMemoryLimit)
    {
        $this->container['aciContainersHostMemoryLimit'] = $aciContainersHostMemoryLimit;

        return $this;
    }


    /**
     * Gets aciContainersHostMemoryRequest
     * @return string
     */
    public function getAciContainersHostMemoryRequest()
    {
        return $this->container['aciContainersHostMemoryRequest'];
    }

    /**
     * Sets aciContainersHostMemoryRequest
     * @param string $aciContainersHostMemoryRequest
     * @return $this
     */
    public function setAciContainersHostMemoryRequest($aciContainersHostMemoryRequest)
    {
        $this->container['aciContainersHostMemoryRequest'] = $aciContainersHostMemoryRequest;

        return $this;
    }


    /**
     * Gets aciContainersMemoryLimit
     * @return string
     */
    public function getAciContainersMemoryLimit()
    {
        return $this->container['aciContainersMemoryLimit'];
    }

    /**
     * Sets aciContainersMemoryLimit
     * @param string $aciContainersMemoryLimit
     * @return $this
     */
    public function setAciContainersMemoryLimit($aciContainersMemoryLimit)
    {
        $this->container['aciContainersMemoryLimit'] = $aciContainersMemoryLimit;

        return $this;
    }


    /**
     * Gets aciContainersMemoryRequest
     * @return string
     */
    public function getAciContainersMemoryRequest()
    {
        return $this->container['aciContainersMemoryRequest'];
    }

    /**
     * Sets aciContainersMemoryRequest
     * @param string $aciContainersMemoryRequest
     * @return $this
     */
    public function setAciContainersMemoryRequest($aciContainersMemoryRequest)
    {
        $this->container['aciContainersMemoryRequest'] = $aciContainersMemoryRequest;

        return $this;
    }


    /**
     * Gets aciMultipod
     * @return string
     */
    public function getAciMultipod()
    {
        return $this->container['aciMultipod'];
    }

    /**
     * Sets aciMultipod
     * @param string $aciMultipod
     * @return $this
     */
    public function setAciMultipod($aciMultipod)
    {
        $this->container['aciMultipod'] = $aciMultipod;

        return $this;
    }


    /**
     * Gets aciMultipodUbuntu
     * @return string
     */
    public function getAciMultipodUbuntu()
    {
        return $this->container['aciMultipodUbuntu'];
    }

    /**
     * Sets aciMultipodUbuntu
     * @param string $aciMultipodUbuntu
     * @return $this
     */
    public function setAciMultipodUbuntu($aciMultipodUbuntu)
    {
        $this->container['aciMultipodUbuntu'] = $aciMultipodUbuntu;

        return $this;
    }


    /**
     * Gets addExternalContractToDefaultEpg
     * @return string
     */
    public function getAddExternalContractToDefaultEpg()
    {
        return $this->container['addExternalContractToDefaultEpg'];
    }

    /**
     * Sets addExternalContractToDefaultEpg
     * @param string $addExternalContractToDefaultEpg
     * @return $this
     */
    public function setAddExternalContractToDefaultEpg($addExternalContractToDefaultEpg)
    {
        $this->container['addExternalContractToDefaultEpg'] = $addExternalContractToDefaultEpg;

        return $this;
    }


    /**
     * Gets addExternalSubnetsToRdconfig
     * @return string
     */
    public function getAddExternalSubnetsToRdconfig()
    {
        return $this->container['addExternalSubnetsToRdconfig'];
    }

    /**
     * Sets addExternalSubnetsToRdconfig
     * @param string $addExternalSubnetsToRdconfig
     * @return $this
     */
    public function setAddExternalSubnetsToRdconfig($addExternalSubnetsToRdconfig)
    {
        $this->container['addExternalSubnetsToRdconfig'] = $addExternalSubnetsToRdconfig;

        return $this;
    }


    /**
     * Gets aep
     * @return string
     */
    public function getAep()
    {
        return $this->container['aep'];
    }

    /**
     * Sets aep
     * @param string $aep
     * @return $this
     */
    public function setAep($aep)
    {
        $this->container['aep'] = $aep;

        return $this;
    }


    /**
     * Gets apicHosts
     * @return string[]
     */
    public function getApicHosts()
    {
        return $this->container['apicHosts'];
    }

    /**
     * Sets apicHosts
     * @param string[] $apicHosts
     * @return $this
     */
    public function setApicHosts($apicHosts)
    {
        $this->container['apicHosts'] = $apicHosts;

        return $this;
    }


    /**
     * Gets apicRefreshTickerAdjust
     * @return string
     */
    public function getApicRefreshTickerAdjust()
    {
        return $this->container['apicRefreshTickerAdjust'];
    }

    /**
     * Sets apicRefreshTickerAdjust
     * @param string $apicRefreshTickerAdjust
     * @return $this
     */
    public function setApicRefreshTickerAdjust($apicRefreshTickerAdjust)
    {
        $this->container['apicRefreshTickerAdjust'] = $apicRefreshTickerAdjust;

        return $this;
    }


    /**
     * Gets apicRefreshTime
     * @return string
     */
    public function getApicRefreshTime()
    {
        return $this->container['apicRefreshTime'];
    }

    /**
     * Sets apicRefreshTime
     * @param string $apicRefreshTime
     * @return $this
     */
    public function setApicRefreshTime($apicRefreshTime)
    {
        $this->container['apicRefreshTime'] = $apicRefreshTime;

        return $this;
    }


    /**
     * Gets apicSubscriptionDelay
     * @return string
     */
    public function getApicSubscriptionDelay()
    {
        return $this->container['apicSubscriptionDelay'];
    }

    /**
     * Sets apicSubscriptionDelay
     * @param string $apicSubscriptionDelay
     * @return $this
     */
    public function setApicSubscriptionDelay($apicSubscriptionDelay)
    {
        $this->container['apicSubscriptionDelay'] = $apicSubscriptionDelay;

        return $this;
    }


    /**
     * Gets apicUserCrt
     * @return string
     */
    public function getApicUserCrt()
    {
        return $this->container['apicUserCrt'];
    }

    /**
     * Sets apicUserCrt
     * @param string $apicUserCrt
     * @return $this
     */
    public function setApicUserCrt($apicUserCrt)
    {
        $this->container['apicUserCrt'] = $apicUserCrt;

        return $this;
    }


    /**
     * Gets apicUserKey
     * @return string
     */
    public function getApicUserKey()
    {
        return $this->container['apicUserKey'];
    }

    /**
     * Sets apicUserKey
     * @param string $apicUserKey
     * @return $this
     */
    public function setApicUserKey($apicUserKey)
    {
        $this->container['apicUserKey'] = $apicUserKey;

        return $this;
    }


    /**
     * Gets apicUserName
     * @return string
     */
    public function getApicUserName()
    {
        return $this->container['apicUserName'];
    }

    /**
     * Sets apicUserName
     * @param string $apicUserName
     * @return $this
     */
    public function setApicUserName($apicUserName)
    {
        $this->container['apicUserName'] = $apicUserName;

        return $this;
    }


    /**
     * Gets capic
     * @return string
     */
    public function getCapic()
    {
        return $this->container['capic'];
    }

    /**
     * Sets capic
     * @param string $capic
     * @return $this
     */
    public function setCapic($capic)
    {
        $this->container['capic'] = $capic;

        return $this;
    }


    /**
     * Gets controllerLogLevel
     * @return string
     */
    public function getControllerLogLevel()
    {
        return $this->container['controllerLogLevel'];
    }

    /**
     * Sets controllerLogLevel
     * @param string $controllerLogLevel
     * @return $this
     */
    public function setControllerLogLevel($controllerLogLevel)
    {
        $this->container['controllerLogLevel'] = $controllerLogLevel;

        return $this;
    }


    /**
     * Gets dhcpDelay
     * @return string
     */
    public function getDhcpDelay()
    {
        return $this->container['dhcpDelay'];
    }

    /**
     * Sets dhcpDelay
     * @param string $dhcpDelay
     * @return $this
     */
    public function setDhcpDelay($dhcpDelay)
    {
        $this->container['dhcpDelay'] = $dhcpDelay;

        return $this;
    }


    /**
     * Gets dhcpRenewMaxRetryCount
     * @return string
     */
    public function getDhcpRenewMaxRetryCount()
    {
        return $this->container['dhcpRenewMaxRetryCount'];
    }

    /**
     * Sets dhcpRenewMaxRetryCount
     * @param string $dhcpRenewMaxRetryCount
     * @return $this
     */
    public function setDhcpRenewMaxRetryCount($dhcpRenewMaxRetryCount)
    {
        $this->container['dhcpRenewMaxRetryCount'] = $dhcpRenewMaxRetryCount;

        return $this;
    }


    /**
     * Gets disablePeriodicSnatGlobalInfoSync
     * @return string
     */
    public function getDisablePeriodicSnatGlobalInfoSync()
    {
        return $this->container['disablePeriodicSnatGlobalInfoSync'];
    }

    /**
     * Sets disablePeriodicSnatGlobalInfoSync
     * @param string $disablePeriodicSnatGlobalInfoSync
     * @return $this
     */
    public function setDisablePeriodicSnatGlobalInfoSync($disablePeriodicSnatGlobalInfoSync)
    {
        $this->container['disablePeriodicSnatGlobalInfoSync'] = $disablePeriodicSnatGlobalInfoSync;

        return $this;
    }


    /**
     * Gets disableWaitForNetwork
     * @return string
     */
    public function getDisableWaitForNetwork()
    {
        return $this->container['disableWaitForNetwork'];
    }

    /**
     * Sets disableWaitForNetwork
     * @param string $disableWaitForNetwork
     * @return $this
     */
    public function setDisableWaitForNetwork($disableWaitForNetwork)
    {
        $this->container['disableWaitForNetwork'] = $disableWaitForNetwork;

        return $this;
    }


    /**
     * Gets dropLogEnable
     * @return string
     */
    public function getDropLogEnable()
    {
        return $this->container['dropLogEnable'];
    }

    /**
     * Sets dropLogEnable
     * @param string $dropLogEnable
     * @return $this
     */
    public function setDropLogEnable($dropLogEnable)
    {
        $this->container['dropLogEnable'] = $dropLogEnable;

        return $this;
    }


    /**
     * Gets durationWaitForNetwork
     * @return string
     */
    public function getDurationWaitForNetwork()
    {
        return $this->container['durationWaitForNetwork'];
    }

    /**
     * Sets durationWaitForNetwork
     * @param string $durationWaitForNetwork
     * @return $this
     */
    public function setDurationWaitForNetwork($durationWaitForNetwork)
    {
        $this->container['durationWaitForNetwork'] = $durationWaitForNetwork;

        return $this;
    }


    /**
     * Gets enableEndpointSlice
     * @return string
     */
    public function getEnableEndpointSlice()
    {
        return $this->container['enableEndpointSlice'];
    }

    /**
     * Sets enableEndpointSlice
     * @param string $enableEndpointSlice
     * @return $this
     */
    public function setEnableEndpointSlice($enableEndpointSlice)
    {
        $this->container['enableEndpointSlice'] = $enableEndpointSlice;

        return $this;
    }


    /**
     * Gets enableOpflexAgentReconnect
     * @return string
     */
    public function getEnableOpflexAgentReconnect()
    {
        return $this->container['enableOpflexAgentReconnect'];
    }

    /**
     * Sets enableOpflexAgentReconnect
     * @param string $enableOpflexAgentReconnect
     * @return $this
     */
    public function setEnableOpflexAgentReconnect($enableOpflexAgentReconnect)
    {
        $this->container['enableOpflexAgentReconnect'] = $enableOpflexAgentReconnect;

        return $this;
    }


    /**
     * Gets encapType
     * @return string
     */
    public function getEncapType()
    {
        return $this->container['encapType'];
    }

    /**
     * Sets encapType
     * @param string $encapType
     * @return $this
     */
    public function setEncapType($encapType)
    {
        $this->container['encapType'] = $encapType;

        return $this;
    }


    /**
     * Gets epRegistry
     * @return string
     */
    public function getEpRegistry()
    {
        return $this->container['epRegistry'];
    }

    /**
     * Sets epRegistry
     * @param string $epRegistry
     * @return $this
     */
    public function setEpRegistry($epRegistry)
    {
        $this->container['epRegistry'] = $epRegistry;

        return $this;
    }


    /**
     * Gets externDynamic
     * @return string
     */
    public function getExternDynamic()
    {
        return $this->container['externDynamic'];
    }

    /**
     * Sets externDynamic
     * @param string $externDynamic
     * @return $this
     */
    public function setExternDynamic($externDynamic)
    {
        $this->container['externDynamic'] = $externDynamic;

        return $this;
    }


    /**
     * Gets externStatic
     * @return string
     */
    public function getExternStatic()
    {
        return $this->container['externStatic'];
    }

    /**
     * Sets externStatic
     * @param string $externStatic
     * @return $this
     */
    public function setExternStatic($externStatic)
    {
        $this->container['externStatic'] = $externStatic;

        return $this;
    }


    /**
     * Gets gbpPodSubnet
     * @return string
     */
    public function getGbpPodSubnet()
    {
        return $this->container['gbpPodSubnet'];
    }

    /**
     * Sets gbpPodSubnet
     * @param string $gbpPodSubnet
     * @return $this
     */
    public function setGbpPodSubnet($gbpPodSubnet)
    {
        $this->container['gbpPodSubnet'] = $gbpPodSubnet;

        return $this;
    }


    /**
     * Gets hostAgentLogLevel
     * @return string
     */
    public function getHostAgentLogLevel()
    {
        return $this->container['hostAgentLogLevel'];
    }

    /**
     * Sets hostAgentLogLevel
     * @param string $hostAgentLogLevel
     * @return $this
     */
    public function setHostAgentLogLevel($hostAgentLogLevel)
    {
        $this->container['hostAgentLogLevel'] = $hostAgentLogLevel;

        return $this;
    }


    /**
     * Gets hppOptimization
     * @return string
     */
    public function getHppOptimization()
    {
        return $this->container['hppOptimization'];
    }

    /**
     * Sets hppOptimization
     * @param string $hppOptimization
     * @return $this
     */
    public function setHppOptimization($hppOptimization)
    {
        $this->container['hppOptimization'] = $hppOptimization;

        return $this;
    }


    /**
     * Gets imagePullPolicy
     * @return string
     */
    public function getImagePullPolicy()
    {
        return $this->container['imagePullPolicy'];
    }

    /**
     * Sets imagePullPolicy
     * @param string $imagePullPolicy
     * @return $this
     */
    public function setImagePullPolicy($imagePullPolicy)
    {
        $this->container['imagePullPolicy'] = $imagePullPolicy;

        return $this;
    }


    /**
     * Gets imagePullSecret
     * @return string
     */
    public function getImagePullSecret()
    {
        return $this->container['imagePullSecret'];
    }

    /**
     * Sets imagePullSecret
     * @param string $imagePullSecret
     * @return $this
     */
    public function setImagePullSecret($imagePullSecret)
    {
        $this->container['imagePullSecret'] = $imagePullSecret;

        return $this;
    }


    /**
     * Gets infraVlan
     * @return string
     */
    public function getInfraVlan()
    {
        return $this->container['infraVlan'];
    }

    /**
     * Sets infraVlan
     * @param string $infraVlan
     * @return $this
     */
    public function setInfraVlan($infraVlan)
    {
        $this->container['infraVlan'] = $infraVlan;

        return $this;
    }


    /**
     * Gets installIstio
     * @return string
     */
    public function getInstallIstio()
    {
        return $this->container['installIstio'];
    }

    /**
     * Sets installIstio
     * @param string $installIstio
     * @return $this
     */
    public function setInstallIstio($installIstio)
    {
        $this->container['installIstio'] = $installIstio;

        return $this;
    }


    /**
     * Gets istioProfile
     * @return string
     */
    public function getIstioProfile()
    {
        return $this->container['istioProfile'];
    }

    /**
     * Sets istioProfile
     * @param string $istioProfile
     * @return $this
     */
    public function setIstioProfile($istioProfile)
    {
        $this->container['istioProfile'] = $istioProfile;

        return $this;
    }


    /**
     * Gets kafkaBrokers
     * @return string[]
     */
    public function getKafkaBrokers()
    {
        return $this->container['kafkaBrokers'];
    }

    /**
     * Sets kafkaBrokers
     * @param string[] $kafkaBrokers
     * @return $this
     */
    public function setKafkaBrokers($kafkaBrokers)
    {
        $this->container['kafkaBrokers'] = $kafkaBrokers;

        return $this;
    }


    /**
     * Gets kafkaClientCrt
     * @return string
     */
    public function getKafkaClientCrt()
    {
        return $this->container['kafkaClientCrt'];
    }

    /**
     * Sets kafkaClientCrt
     * @param string $kafkaClientCrt
     * @return $this
     */
    public function setKafkaClientCrt($kafkaClientCrt)
    {
        $this->container['kafkaClientCrt'] = $kafkaClientCrt;

        return $this;
    }


    /**
     * Gets kafkaClientKey
     * @return string
     */
    public function getKafkaClientKey()
    {
        return $this->container['kafkaClientKey'];
    }

    /**
     * Sets kafkaClientKey
     * @param string $kafkaClientKey
     * @return $this
     */
    public function setKafkaClientKey($kafkaClientKey)
    {
        $this->container['kafkaClientKey'] = $kafkaClientKey;

        return $this;
    }


    /**
     * Gets kubeApiVlan
     * @return string
     */
    public function getKubeApiVlan()
    {
        return $this->container['kubeApiVlan'];
    }

    /**
     * Sets kubeApiVlan
     * @param string $kubeApiVlan
     * @return $this
     */
    public function setKubeApiVlan($kubeApiVlan)
    {
        $this->container['kubeApiVlan'] = $kubeApiVlan;

        return $this;
    }


    /**
     * Gets l3out
     * @return string
     */
    public function getL3out()
    {
        return $this->container['l3out'];
    }

    /**
     * Sets l3out
     * @param string $l3out
     * @return $this
     */
    public function setL3out($l3out)
    {
        $this->container['l3out'] = $l3out;

        return $this;
    }


    /**
     * Gets l3outExternalNetworks
     * @return string[]
     */
    public function getL3outExternalNetworks()
    {
        return $this->container['l3outExternalNetworks'];
    }

    /**
     * Sets l3outExternalNetworks
     * @param string[] $l3outExternalNetworks
     * @return $this
     */
    public function setL3outExternalNetworks($l3outExternalNetworks)
    {
        $this->container['l3outExternalNetworks'] = $l3outExternalNetworks;

        return $this;
    }


    /**
     * Gets maxNodesSvcGraph
     * @return string
     */
    public function getMaxNodesSvcGraph()
    {
        return $this->container['maxNodesSvcGraph'];
    }

    /**
     * Sets maxNodesSvcGraph
     * @param string $maxNodesSvcGraph
     * @return $this
     */
    public function setMaxNodesSvcGraph($maxNodesSvcGraph)
    {
        $this->container['maxNodesSvcGraph'] = $maxNodesSvcGraph;

        return $this;
    }


    /**
     * Gets mcastDaemonMemoryLimit
     * @return string
     */
    public function getMcastDaemonMemoryLimit()
    {
        return $this->container['mcastDaemonMemoryLimit'];
    }

    /**
     * Sets mcastDaemonMemoryLimit
     * @param string $mcastDaemonMemoryLimit
     * @return $this
     */
    public function setMcastDaemonMemoryLimit($mcastDaemonMemoryLimit)
    {
        $this->container['mcastDaemonMemoryLimit'] = $mcastDaemonMemoryLimit;

        return $this;
    }


    /**
     * Gets mcastDaemonMemoryRequest
     * @return string
     */
    public function getMcastDaemonMemoryRequest()
    {
        return $this->container['mcastDaemonMemoryRequest'];
    }

    /**
     * Sets mcastDaemonMemoryRequest
     * @param string $mcastDaemonMemoryRequest
     * @return $this
     */
    public function setMcastDaemonMemoryRequest($mcastDaemonMemoryRequest)
    {
        $this->container['mcastDaemonMemoryRequest'] = $mcastDaemonMemoryRequest;

        return $this;
    }


    /**
     * Gets mcastRangeEnd
     * @return string
     */
    public function getMcastRangeEnd()
    {
        return $this->container['mcastRangeEnd'];
    }

    /**
     * Sets mcastRangeEnd
     * @param string $mcastRangeEnd
     * @return $this
     */
    public function setMcastRangeEnd($mcastRangeEnd)
    {
        $this->container['mcastRangeEnd'] = $mcastRangeEnd;

        return $this;
    }


    /**
     * Gets mcastRangeStart
     * @return string
     */
    public function getMcastRangeStart()
    {
        return $this->container['mcastRangeStart'];
    }

    /**
     * Sets mcastRangeStart
     * @param string $mcastRangeStart
     * @return $this
     */
    public function setMcastRangeStart($mcastRangeStart)
    {
        $this->container['mcastRangeStart'] = $mcastRangeStart;

        return $this;
    }


    /**
     * Gets mtuHeadRoom
     * @return string
     */
    public function getMtuHeadRoom()
    {
        return $this->container['mtuHeadRoom'];
    }

    /**
     * Sets mtuHeadRoom
     * @param string $mtuHeadRoom
     * @return $this
     */
    public function setMtuHeadRoom($mtuHeadRoom)
    {
        $this->container['mtuHeadRoom'] = $mtuHeadRoom;

        return $this;
    }


    /**
     * Gets multusDisable
     * @return string
     */
    public function getMultusDisable()
    {
        return $this->container['multusDisable'];
    }

    /**
     * Sets multusDisable
     * @param string $multusDisable
     * @return $this
     */
    public function setMultusDisable($multusDisable)
    {
        $this->container['multusDisable'] = $multusDisable;

        return $this;
    }


    /**
     * Gets noPriorityClass
     * @return string
     */
    public function getNoPriorityClass()
    {
        return $this->container['noPriorityClass'];
    }

    /**
     * Sets noPriorityClass
     * @param string $noPriorityClass
     * @return $this
     */
    public function setNoPriorityClass($noPriorityClass)
    {
        $this->container['noPriorityClass'] = $noPriorityClass;

        return $this;
    }


    /**
     * Gets noWaitForServiceEpReadiness
     * @return string
     */
    public function getNoWaitForServiceEpReadiness()
    {
        return $this->container['noWaitForServiceEpReadiness'];
    }

    /**
     * Sets noWaitForServiceEpReadiness
     * @param string $noWaitForServiceEpReadiness
     * @return $this
     */
    public function setNoWaitForServiceEpReadiness($noWaitForServiceEpReadiness)
    {
        $this->container['noWaitForServiceEpReadiness'] = $noWaitForServiceEpReadiness;

        return $this;
    }


    /**
     * Gets nodePodIfEnable
     * @return string
     */
    public function getNodePodIfEnable()
    {
        return $this->container['nodePodIfEnable'];
    }

    /**
     * Sets nodePodIfEnable
     * @param string $nodePodIfEnable
     * @return $this
     */
    public function setNodePodIfEnable($nodePodIfEnable)
    {
        $this->container['nodePodIfEnable'] = $nodePodIfEnable;

        return $this;
    }


    /**
     * Gets nodeSnatRedirectExclude
     * @return \Rancher\Model\Map[string]Model[]
     */
    public function getNodeSnatRedirectExclude()
    {
        return $this->container['nodeSnatRedirectExclude'];
    }

    /**
     * Sets nodeSnatRedirectExclude
     * @param \Rancher\Model\Map[string]Model[] $nodeSnatRedirectExclude
     * @return $this
     */
    public function setNodeSnatRedirectExclude($nodeSnatRedirectExclude)
    {
        $this->container['nodeSnatRedirectExclude'] = $nodeSnatRedirectExclude;

        return $this;
    }


    /**
     * Gets nodeSubnet
     * @return string
     */
    public function getNodeSubnet()
    {
        return $this->container['nodeSubnet'];
    }

    /**
     * Sets nodeSubnet
     * @param string $nodeSubnet
     * @return $this
     */
    public function setNodeSubnet($nodeSubnet)
    {
        $this->container['nodeSubnet'] = $nodeSubnet;

        return $this;
    }


    /**
     * Gets nodeSvcSubnet
     * @return string
     */
    public function getNodeSvcSubnet()
    {
        return $this->container['nodeSvcSubnet'];
    }

    /**
     * Sets nodeSvcSubnet
     * @param string $nodeSvcSubnet
     * @return $this
     */
    public function setNodeSvcSubnet($nodeSvcSubnet)
    {
        $this->container['nodeSvcSubnet'] = $nodeSvcSubnet;

        return $this;
    }


    /**
     * Gets opflexAgentMemoryLimit
     * @return string
     */
    public function getOpflexAgentMemoryLimit()
    {
        return $this->container['opflexAgentMemoryLimit'];
    }

    /**
     * Sets opflexAgentMemoryLimit
     * @param string $opflexAgentMemoryLimit
     * @return $this
     */
    public function setOpflexAgentMemoryLimit($opflexAgentMemoryLimit)
    {
        $this->container['opflexAgentMemoryLimit'] = $opflexAgentMemoryLimit;

        return $this;
    }


    /**
     * Gets opflexAgentMemoryRequest
     * @return string
     */
    public function getOpflexAgentMemoryRequest()
    {
        return $this->container['opflexAgentMemoryRequest'];
    }

    /**
     * Sets opflexAgentMemoryRequest
     * @param string $opflexAgentMemoryRequest
     * @return $this
     */
    public function setOpflexAgentMemoryRequest($opflexAgentMemoryRequest)
    {
        $this->container['opflexAgentMemoryRequest'] = $opflexAgentMemoryRequest;

        return $this;
    }


    /**
     * Gets opflexAgentOpflexAsyncjsonEnabled
     * @return string
     */
    public function getOpflexAgentOpflexAsyncjsonEnabled()
    {
        return $this->container['opflexAgentOpflexAsyncjsonEnabled'];
    }

    /**
     * Sets opflexAgentOpflexAsyncjsonEnabled
     * @param string $opflexAgentOpflexAsyncjsonEnabled
     * @return $this
     */
    public function setOpflexAgentOpflexAsyncjsonEnabled($opflexAgentOpflexAsyncjsonEnabled)
    {
        $this->container['opflexAgentOpflexAsyncjsonEnabled'] = $opflexAgentOpflexAsyncjsonEnabled;

        return $this;
    }


    /**
     * Gets opflexAgentOvsAsyncjsonEnabled
     * @return string
     */
    public function getOpflexAgentOvsAsyncjsonEnabled()
    {
        return $this->container['opflexAgentOvsAsyncjsonEnabled'];
    }

    /**
     * Sets opflexAgentOvsAsyncjsonEnabled
     * @param string $opflexAgentOvsAsyncjsonEnabled
     * @return $this
     */
    public function setOpflexAgentOvsAsyncjsonEnabled($opflexAgentOvsAsyncjsonEnabled)
    {
        $this->container['opflexAgentOvsAsyncjsonEnabled'] = $opflexAgentOvsAsyncjsonEnabled;

        return $this;
    }


    /**
     * Gets opflexAgentPolicyRetryDelayTimer
     * @return string
     */
    public function getOpflexAgentPolicyRetryDelayTimer()
    {
        return $this->container['opflexAgentPolicyRetryDelayTimer'];
    }

    /**
     * Sets opflexAgentPolicyRetryDelayTimer
     * @param string $opflexAgentPolicyRetryDelayTimer
     * @return $this
     */
    public function setOpflexAgentPolicyRetryDelayTimer($opflexAgentPolicyRetryDelayTimer)
    {
        $this->container['opflexAgentPolicyRetryDelayTimer'] = $opflexAgentPolicyRetryDelayTimer;

        return $this;
    }


    /**
     * Gets opflexAgentStatistics
     * @return string
     */
    public function getOpflexAgentStatistics()
    {
        return $this->container['opflexAgentStatistics'];
    }

    /**
     * Sets opflexAgentStatistics
     * @param string $opflexAgentStatistics
     * @return $this
     */
    public function setOpflexAgentStatistics($opflexAgentStatistics)
    {
        $this->container['opflexAgentStatistics'] = $opflexAgentStatistics;

        return $this;
    }


    /**
     * Gets opflexClientSsl
     * @return string
     */
    public function getOpflexClientSsl()
    {
        return $this->container['opflexClientSsl'];
    }

    /**
     * Sets opflexClientSsl
     * @param string $opflexClientSsl
     * @return $this
     */
    public function setOpflexClientSsl($opflexClientSsl)
    {
        $this->container['opflexClientSsl'] = $opflexClientSsl;

        return $this;
    }


    /**
     * Gets opflexDeviceDeleteTimeout
     * @return string
     */
    public function getOpflexDeviceDeleteTimeout()
    {
        return $this->container['opflexDeviceDeleteTimeout'];
    }

    /**
     * Sets opflexDeviceDeleteTimeout
     * @param string $opflexDeviceDeleteTimeout
     * @return $this
     */
    public function setOpflexDeviceDeleteTimeout($opflexDeviceDeleteTimeout)
    {
        $this->container['opflexDeviceDeleteTimeout'] = $opflexDeviceDeleteTimeout;

        return $this;
    }


    /**
     * Gets opflexDeviceReconnectWaitTimeout
     * @return string
     */
    public function getOpflexDeviceReconnectWaitTimeout()
    {
        return $this->container['opflexDeviceReconnectWaitTimeout'];
    }

    /**
     * Sets opflexDeviceReconnectWaitTimeout
     * @param string $opflexDeviceReconnectWaitTimeout
     * @return $this
     */
    public function setOpflexDeviceReconnectWaitTimeout($opflexDeviceReconnectWaitTimeout)
    {
        $this->container['opflexDeviceReconnectWaitTimeout'] = $opflexDeviceReconnectWaitTimeout;

        return $this;
    }


    /**
     * Gets opflexLogLevel
     * @return string
     */
    public function getOpflexLogLevel()
    {
        return $this->container['opflexLogLevel'];
    }

    /**
     * Sets opflexLogLevel
     * @param string $opflexLogLevel
     * @return $this
     */
    public function setOpflexLogLevel($opflexLogLevel)
    {
        $this->container['opflexLogLevel'] = $opflexLogLevel;

        return $this;
    }


    /**
     * Gets opflexMode
     * @return string
     */
    public function getOpflexMode()
    {
        return $this->container['opflexMode'];
    }

    /**
     * Sets opflexMode
     * @param string $opflexMode
     * @return $this
     */
    public function setOpflexMode($opflexMode)
    {
        $this->container['opflexMode'] = $opflexMode;

        return $this;
    }


    /**
     * Gets opflexOpensslCompat
     * @return string
     */
    public function getOpflexOpensslCompat()
    {
        return $this->container['opflexOpensslCompat'];
    }

    /**
     * Sets opflexOpensslCompat
     * @param string $opflexOpensslCompat
     * @return $this
     */
    public function setOpflexOpensslCompat($opflexOpensslCompat)
    {
        $this->container['opflexOpensslCompat'] = $opflexOpensslCompat;

        return $this;
    }


    /**
     * Gets opflexServerPort
     * @return string
     */
    public function getOpflexServerPort()
    {
        return $this->container['opflexServerPort'];
    }

    /**
     * Sets opflexServerPort
     * @param string $opflexServerPort
     * @return $this
     */
    public function setOpflexServerPort($opflexServerPort)
    {
        $this->container['opflexServerPort'] = $opflexServerPort;

        return $this;
    }


    /**
     * Gets overlayVrfName
     * @return string
     */
    public function getOverlayVrfName()
    {
        return $this->container['overlayVrfName'];
    }

    /**
     * Sets overlayVrfName
     * @param string $overlayVrfName
     * @return $this
     */
    public function setOverlayVrfName($overlayVrfName)
    {
        $this->container['overlayVrfName'] = $overlayVrfName;

        return $this;
    }


    /**
     * Gets ovsMemoryLimit
     * @return string
     */
    public function getOvsMemoryLimit()
    {
        return $this->container['ovsMemoryLimit'];
    }

    /**
     * Sets ovsMemoryLimit
     * @param string $ovsMemoryLimit
     * @return $this
     */
    public function setOvsMemoryLimit($ovsMemoryLimit)
    {
        $this->container['ovsMemoryLimit'] = $ovsMemoryLimit;

        return $this;
    }


    /**
     * Gets ovsMemoryRequest
     * @return string
     */
    public function getOvsMemoryRequest()
    {
        return $this->container['ovsMemoryRequest'];
    }

    /**
     * Sets ovsMemoryRequest
     * @param string $ovsMemoryRequest
     * @return $this
     */
    public function setOvsMemoryRequest($ovsMemoryRequest)
    {
        $this->container['ovsMemoryRequest'] = $ovsMemoryRequest;

        return $this;
    }


    /**
     * Gets pbrTrackingNonSnat
     * @return string
     */
    public function getPbrTrackingNonSnat()
    {
        return $this->container['pbrTrackingNonSnat'];
    }

    /**
     * Sets pbrTrackingNonSnat
     * @param string $pbrTrackingNonSnat
     * @return $this
     */
    public function setPbrTrackingNonSnat($pbrTrackingNonSnat)
    {
        $this->container['pbrTrackingNonSnat'] = $pbrTrackingNonSnat;

        return $this;
    }


    /**
     * Gets podSubnetChunkSize
     * @return string
     */
    public function getPodSubnetChunkSize()
    {
        return $this->container['podSubnetChunkSize'];
    }

    /**
     * Sets podSubnetChunkSize
     * @param string $podSubnetChunkSize
     * @return $this
     */
    public function setPodSubnetChunkSize($podSubnetChunkSize)
    {
        $this->container['podSubnetChunkSize'] = $podSubnetChunkSize;

        return $this;
    }


    /**
     * Gets runGbpContainer
     * @return string
     */
    public function getRunGbpContainer()
    {
        return $this->container['runGbpContainer'];
    }

    /**
     * Sets runGbpContainer
     * @param string $runGbpContainer
     * @return $this
     */
    public function setRunGbpContainer($runGbpContainer)
    {
        $this->container['runGbpContainer'] = $runGbpContainer;

        return $this;
    }


    /**
     * Gets runOpflexServerContainer
     * @return string
     */
    public function getRunOpflexServerContainer()
    {
        return $this->container['runOpflexServerContainer'];
    }

    /**
     * Sets runOpflexServerContainer
     * @param string $runOpflexServerContainer
     * @return $this
     */
    public function setRunOpflexServerContainer($runOpflexServerContainer)
    {
        $this->container['runOpflexServerContainer'] = $runOpflexServerContainer;

        return $this;
    }


    /**
     * Gets serviceGraphEndpointAddDelay
     * @return string
     */
    public function getServiceGraphEndpointAddDelay()
    {
        return $this->container['serviceGraphEndpointAddDelay'];
    }

    /**
     * Sets serviceGraphEndpointAddDelay
     * @param string $serviceGraphEndpointAddDelay
     * @return $this
     */
    public function setServiceGraphEndpointAddDelay($serviceGraphEndpointAddDelay)
    {
        $this->container['serviceGraphEndpointAddDelay'] = $serviceGraphEndpointAddDelay;

        return $this;
    }


    /**
     * Gets serviceGraphEndpointAddServices
     * @return \Rancher\Model\Map[string]Model[]
     */
    public function getServiceGraphEndpointAddServices()
    {
        return $this->container['serviceGraphEndpointAddServices'];
    }

    /**
     * Sets serviceGraphEndpointAddServices
     * @param \Rancher\Model\Map[string]Model[] $serviceGraphEndpointAddServices
     * @return $this
     */
    public function setServiceGraphEndpointAddServices($serviceGraphEndpointAddServices)
    {
        $this->container['serviceGraphEndpointAddServices'] = $serviceGraphEndpointAddServices;

        return $this;
    }


    /**
     * Gets serviceMonitorInterval
     * @return string
     */
    public function getServiceMonitorInterval()
    {
        return $this->container['serviceMonitorInterval'];
    }

    /**
     * Sets serviceMonitorInterval
     * @param string $serviceMonitorInterval
     * @return $this
     */
    public function setServiceMonitorInterval($serviceMonitorInterval)
    {
        $this->container['serviceMonitorInterval'] = $serviceMonitorInterval;

        return $this;
    }


    /**
     * Gets serviceVlan
     * @return string
     */
    public function getServiceVlan()
    {
        return $this->container['serviceVlan'];
    }

    /**
     * Sets serviceVlan
     * @param string $serviceVlan
     * @return $this
     */
    public function setServiceVlan($serviceVlan)
    {
        $this->container['serviceVlan'] = $serviceVlan;

        return $this;
    }


    /**
     * Gets sleepTimeSnatGlobalInfoSync
     * @return string
     */
    public function getSleepTimeSnatGlobalInfoSync()
    {
        return $this->container['sleepTimeSnatGlobalInfoSync'];
    }

    /**
     * Sets sleepTimeSnatGlobalInfoSync
     * @param string $sleepTimeSnatGlobalInfoSync
     * @return $this
     */
    public function setSleepTimeSnatGlobalInfoSync($sleepTimeSnatGlobalInfoSync)
    {
        $this->container['sleepTimeSnatGlobalInfoSync'] = $sleepTimeSnatGlobalInfoSync;

        return $this;
    }


    /**
     * Gets snatContractScope
     * @return string
     */
    public function getSnatContractScope()
    {
        return $this->container['snatContractScope'];
    }

    /**
     * Sets snatContractScope
     * @param string $snatContractScope
     * @return $this
     */
    public function setSnatContractScope($snatContractScope)
    {
        $this->container['snatContractScope'] = $snatContractScope;

        return $this;
    }


    /**
     * Gets snatNamespace
     * @return string
     */
    public function getSnatNamespace()
    {
        return $this->container['snatNamespace'];
    }

    /**
     * Sets snatNamespace
     * @param string $snatNamespace
     * @return $this
     */
    public function setSnatNamespace($snatNamespace)
    {
        $this->container['snatNamespace'] = $snatNamespace;

        return $this;
    }


    /**
     * Gets snatPortRangeEnd
     * @return string
     */
    public function getSnatPortRangeEnd()
    {
        return $this->container['snatPortRangeEnd'];
    }

    /**
     * Sets snatPortRangeEnd
     * @param string $snatPortRangeEnd
     * @return $this
     */
    public function setSnatPortRangeEnd($snatPortRangeEnd)
    {
        $this->container['snatPortRangeEnd'] = $snatPortRangeEnd;

        return $this;
    }


    /**
     * Gets snatPortRangeStart
     * @return string
     */
    public function getSnatPortRangeStart()
    {
        return $this->container['snatPortRangeStart'];
    }

    /**
     * Sets snatPortRangeStart
     * @param string $snatPortRangeStart
     * @return $this
     */
    public function setSnatPortRangeStart($snatPortRangeStart)
    {
        $this->container['snatPortRangeStart'] = $snatPortRangeStart;

        return $this;
    }


    /**
     * Gets snatPortsPerNode
     * @return string
     */
    public function getSnatPortsPerNode()
    {
        return $this->container['snatPortsPerNode'];
    }

    /**
     * Sets snatPortsPerNode
     * @param string $snatPortsPerNode
     * @return $this
     */
    public function setSnatPortsPerNode($snatPortsPerNode)
    {
        $this->container['snatPortsPerNode'] = $snatPortsPerNode;

        return $this;
    }


    /**
     * Gets sriovEnable
     * @return string
     */
    public function getSriovEnable()
    {
        return $this->container['sriovEnable'];
    }

    /**
     * Sets sriovEnable
     * @param string $sriovEnable
     * @return $this
     */
    public function setSriovEnable($sriovEnable)
    {
        $this->container['sriovEnable'] = $sriovEnable;

        return $this;
    }


    /**
     * Gets subnetDomainName
     * @return string
     */
    public function getSubnetDomainName()
    {
        return $this->container['subnetDomainName'];
    }

    /**
     * Sets subnetDomainName
     * @param string $subnetDomainName
     * @return $this
     */
    public function setSubnetDomainName($subnetDomainName)
    {
        $this->container['subnetDomainName'] = $subnetDomainName;

        return $this;
    }


    /**
     * Gets systemId
     * @return string
     */
    public function getSystemId()
    {
        return $this->container['systemId'];
    }

    /**
     * Sets systemId
     * @param string $systemId
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->container['systemId'] = $systemId;

        return $this;
    }


    /**
     * Gets tenant
     * @return string
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     * @param string $tenant
     * @return $this
     */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;

        return $this;
    }


    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }


    /**
     * Gets tolerationSeconds
     * @return string
     */
    public function getTolerationSeconds()
    {
        return $this->container['tolerationSeconds'];
    }

    /**
     * Sets tolerationSeconds
     * @param string $tolerationSeconds
     * @return $this
     */
    public function setTolerationSeconds($tolerationSeconds)
    {
        $this->container['tolerationSeconds'] = $tolerationSeconds;

        return $this;
    }


    /**
     * Gets useAciAnywhereCrd
     * @return string
     */
    public function getUseAciAnywhereCrd()
    {
        return $this->container['useAciAnywhereCrd'];
    }

    /**
     * Sets useAciAnywhereCrd
     * @param string $useAciAnywhereCrd
     * @return $this
     */
    public function setUseAciAnywhereCrd($useAciAnywhereCrd)
    {
        $this->container['useAciAnywhereCrd'] = $useAciAnywhereCrd;

        return $this;
    }


    /**
     * Gets useAciCniPriorityClass
     * @return string
     */
    public function getUseAciCniPriorityClass()
    {
        return $this->container['useAciCniPriorityClass'];
    }

    /**
     * Sets useAciCniPriorityClass
     * @param string $useAciCniPriorityClass
     * @return $this
     */
    public function setUseAciCniPriorityClass($useAciCniPriorityClass)
    {
        $this->container['useAciCniPriorityClass'] = $useAciCniPriorityClass;

        return $this;
    }


    /**
     * Gets useClusterRole
     * @return string
     */
    public function getUseClusterRole()
    {
        return $this->container['useClusterRole'];
    }

    /**
     * Sets useClusterRole
     * @param string $useClusterRole
     * @return $this
     */
    public function setUseClusterRole($useClusterRole)
    {
        $this->container['useClusterRole'] = $useClusterRole;

        return $this;
    }


    /**
     * Gets useHostNetnsVolume
     * @return string
     */
    public function getUseHostNetnsVolume()
    {
        return $this->container['useHostNetnsVolume'];
    }

    /**
     * Sets useHostNetnsVolume
     * @param string $useHostNetnsVolume
     * @return $this
     */
    public function setUseHostNetnsVolume($useHostNetnsVolume)
    {
        $this->container['useHostNetnsVolume'] = $useHostNetnsVolume;

        return $this;
    }


    /**
     * Gets useOpflexServerVolume
     * @return string
     */
    public function getUseOpflexServerVolume()
    {
        return $this->container['useOpflexServerVolume'];
    }

    /**
     * Sets useOpflexServerVolume
     * @param string $useOpflexServerVolume
     * @return $this
     */
    public function setUseOpflexServerVolume($useOpflexServerVolume)
    {
        $this->container['useOpflexServerVolume'] = $useOpflexServerVolume;

        return $this;
    }


    /**
     * Gets usePrivilegedContainer
     * @return string
     */
    public function getUsePrivilegedContainer()
    {
        return $this->container['usePrivilegedContainer'];
    }

    /**
     * Sets usePrivilegedContainer
     * @param string $usePrivilegedContainer
     * @return $this
     */
    public function setUsePrivilegedContainer($usePrivilegedContainer)
    {
        $this->container['usePrivilegedContainer'] = $usePrivilegedContainer;

        return $this;
    }


    /**
     * Gets useSystemNodePriorityClass
     * @return string
     */
    public function getUseSystemNodePriorityClass()
    {
        return $this->container['useSystemNodePriorityClass'];
    }

    /**
     * Sets useSystemNodePriorityClass
     * @param string $useSystemNodePriorityClass
     * @return $this
     */
    public function setUseSystemNodePriorityClass($useSystemNodePriorityClass)
    {
        $this->container['useSystemNodePriorityClass'] = $useSystemNodePriorityClass;

        return $this;
    }


    /**
     * Gets vmmController
     * @return string
     */
    public function getVmmController()
    {
        return $this->container['vmmController'];
    }

    /**
     * Sets vmmController
     * @param string $vmmController
     * @return $this
     */
    public function setVmmController($vmmController)
    {
        $this->container['vmmController'] = $vmmController;

        return $this;
    }


    /**
     * Gets vmmDomain
     * @return string
     */
    public function getVmmDomain()
    {
        return $this->container['vmmDomain'];
    }

    /**
     * Sets vmmDomain
     * @param string $vmmDomain
     * @return $this
     */
    public function setVmmDomain($vmmDomain)
    {
        $this->container['vmmDomain'] = $vmmDomain;

        return $this;
    }


    /**
     * Gets vrfName
     * @return string
     */
    public function getVrfName()
    {
        return $this->container['vrfName'];
    }

    /**
     * Sets vrfName
     * @param string $vrfName
     * @return $this
     */
    public function setVrfName($vrfName)
    {
        $this->container['vrfName'] = $vrfName;

        return $this;
    }


    /**
     * Gets vrfTenant
     * @return string
     */
    public function getVrfTenant()
    {
        return $this->container['vrfTenant'];
    }

    /**
     * Sets vrfTenant
     * @param string $vrfTenant
     * @return $this
     */
    public function setVrfTenant($vrfTenant)
    {
        $this->container['vrfTenant'] = $vrfTenant;

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

