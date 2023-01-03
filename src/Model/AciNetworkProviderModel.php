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
        'aep',
        'apicHosts',
        'apicRefreshTime',
        'apicUserCrt',
        'apicUserKey',
        'apicUserName',
        'capic',
        'controllerLogLevel',
        'dropLogEnable',
        'enableEndpointSlice',
        'encapType',
        'epRegistry',
        'externDynamic',
        'externStatic',
        'gbpPodSubnet',
        'hostAgentLogLevel',
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
        'mcastRangeEnd',
        'mcastRangeStart',
        'noPriorityClass',
        'nodeSubnet',
        'nodeSvcSubnet',
        'opflexClientSsl',
        'opflexLogLevel',
        'opflexMode',
        'opflexServerPort',
        'overlayVrfName',
        'ovsMemoryLimit',
        'pbrTrackingNonSnat',
        'podSubnetChunkSize',
        'runGbpContainer',
        'runOpflexServerContainer',
        'serviceMonitorInterval',
        'serviceVlan',
        'snatContractScope',
        'snatNamespace',
        'snatPortRangeEnd',
        'snatPortRangeStart',
        'snatPortsPerNode',
        'subnetDomainName',
        'systemId',
        'tenant',
        'token',
        'useAciAnywhereCrd',
        'useAciCniPriorityClass',
        'useHostNetnsVolume',
        'useOpflexServerVolume',
        'usePrivilegedContainer',
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
        'aep',
        'apicHosts',
        'apicRefreshTime',
        'apicUserCrt',
        'apicUserKey',
        'apicUserName',
        'capic',
        'controllerLogLevel',
        'dropLogEnable',
        'enableEndpointSlice',
        'encapType',
        'epRegistry',
        'externDynamic',
        'externStatic',
        'gbpPodSubnet',
        'hostAgentLogLevel',
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
        'mcastRangeEnd',
        'mcastRangeStart',
        'noPriorityClass',
        'nodeSubnet',
        'nodeSvcSubnet',
        'opflexClientSsl',
        'opflexLogLevel',
        'opflexMode',
        'opflexServerPort',
        'overlayVrfName',
        'ovsMemoryLimit',
        'pbrTrackingNonSnat',
        'podSubnetChunkSize',
        'runGbpContainer',
        'runOpflexServerContainer',
        'serviceMonitorInterval',
        'serviceVlan',
        'snatContractScope',
        'snatNamespace',
        'snatPortRangeEnd',
        'snatPortRangeStart',
        'snatPortsPerNode',
        'subnetDomainName',
        'systemId',
        'tenant',
        'token',
        'useAciAnywhereCrd',
        'useAciCniPriorityClass',
        'useHostNetnsVolume',
        'useOpflexServerVolume',
        'usePrivilegedContainer',
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
        'aep' => 'string',
        'apicHosts' => 'string[]',
        'apicRefreshTime' => 'string',
        'apicUserCrt' => 'string',
        'apicUserKey' => 'string',
        'apicUserName' => 'string',
        'capic' => 'string',
        'controllerLogLevel' => 'string',
        'dropLogEnable' => 'string',
        'enableEndpointSlice' => 'string',
        'encapType' => 'string',
        'epRegistry' => 'string',
        'externDynamic' => 'string',
        'externStatic' => 'string',
        'gbpPodSubnet' => 'string',
        'hostAgentLogLevel' => 'string',
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
        'mcastRangeEnd' => 'string',
        'mcastRangeStart' => 'string',
        'noPriorityClass' => 'string',
        'nodeSubnet' => 'string',
        'nodeSvcSubnet' => 'string',
        'opflexClientSsl' => 'string',
        'opflexLogLevel' => 'string',
        'opflexMode' => 'string',
        'opflexServerPort' => 'string',
        'overlayVrfName' => 'string',
        'ovsMemoryLimit' => 'string',
        'pbrTrackingNonSnat' => 'string',
        'podSubnetChunkSize' => 'string',
        'runGbpContainer' => 'string',
        'runOpflexServerContainer' => 'string',
        'serviceMonitorInterval' => 'string',
        'serviceVlan' => 'string',
        'snatContractScope' => 'string',
        'snatNamespace' => 'string',
        'snatPortRangeEnd' => 'string',
        'snatPortRangeStart' => 'string',
        'snatPortsPerNode' => 'string',
        'subnetDomainName' => 'string',
        'systemId' => 'string',
        'tenant' => 'string',
        'token' => 'string',
        'useAciAnywhereCrd' => 'string',
        'useAciCniPriorityClass' => 'string',
        'useHostNetnsVolume' => 'string',
        'useOpflexServerVolume' => 'string',
        'usePrivilegedContainer' => 'string',
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
        'aep' => 'setAep',
        'apicHosts' => 'setApicHosts',
        'apicRefreshTime' => 'setApicRefreshTime',
        'apicUserCrt' => 'setApicUserCrt',
        'apicUserKey' => 'setApicUserKey',
        'apicUserName' => 'setApicUserName',
        'capic' => 'setCapic',
        'controllerLogLevel' => 'setControllerLogLevel',
        'dropLogEnable' => 'setDropLogEnable',
        'enableEndpointSlice' => 'setEnableEndpointSlice',
        'encapType' => 'setEncapType',
        'epRegistry' => 'setEpRegistry',
        'externDynamic' => 'setExternDynamic',
        'externStatic' => 'setExternStatic',
        'gbpPodSubnet' => 'setGbpPodSubnet',
        'hostAgentLogLevel' => 'setHostAgentLogLevel',
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
        'mcastRangeEnd' => 'setMcastRangeEnd',
        'mcastRangeStart' => 'setMcastRangeStart',
        'noPriorityClass' => 'setNoPriorityClass',
        'nodeSubnet' => 'setNodeSubnet',
        'nodeSvcSubnet' => 'setNodeSvcSubnet',
        'opflexClientSsl' => 'setOpflexClientSsl',
        'opflexLogLevel' => 'setOpflexLogLevel',
        'opflexMode' => 'setOpflexMode',
        'opflexServerPort' => 'setOpflexServerPort',
        'overlayVrfName' => 'setOverlayVrfName',
        'ovsMemoryLimit' => 'setOvsMemoryLimit',
        'pbrTrackingNonSnat' => 'setPbrTrackingNonSnat',
        'podSubnetChunkSize' => 'setPodSubnetChunkSize',
        'runGbpContainer' => 'setRunGbpContainer',
        'runOpflexServerContainer' => 'setRunOpflexServerContainer',
        'serviceMonitorInterval' => 'setServiceMonitorInterval',
        'serviceVlan' => 'setServiceVlan',
        'snatContractScope' => 'setSnatContractScope',
        'snatNamespace' => 'setSnatNamespace',
        'snatPortRangeEnd' => 'setSnatPortRangeEnd',
        'snatPortRangeStart' => 'setSnatPortRangeStart',
        'snatPortsPerNode' => 'setSnatPortsPerNode',
        'subnetDomainName' => 'setSubnetDomainName',
        'systemId' => 'setSystemId',
        'tenant' => 'setTenant',
        'token' => 'setToken',
        'useAciAnywhereCrd' => 'setUseAciAnywhereCrd',
        'useAciCniPriorityClass' => 'setUseAciCniPriorityClass',
        'useHostNetnsVolume' => 'setUseHostNetnsVolume',
        'useOpflexServerVolume' => 'setUseOpflexServerVolume',
        'usePrivilegedContainer' => 'setUsePrivilegedContainer',
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
        'aep' => 'getAep',
        'apicHosts' => 'getApicHosts',
        'apicRefreshTime' => 'getApicRefreshTime',
        'apicUserCrt' => 'getApicUserCrt',
        'apicUserKey' => 'getApicUserKey',
        'apicUserName' => 'getApicUserName',
        'capic' => 'getCapic',
        'controllerLogLevel' => 'getControllerLogLevel',
        'dropLogEnable' => 'getDropLogEnable',
        'enableEndpointSlice' => 'getEnableEndpointSlice',
        'encapType' => 'getEncapType',
        'epRegistry' => 'getEpRegistry',
        'externDynamic' => 'getExternDynamic',
        'externStatic' => 'getExternStatic',
        'gbpPodSubnet' => 'getGbpPodSubnet',
        'hostAgentLogLevel' => 'getHostAgentLogLevel',
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
        'mcastRangeEnd' => 'getMcastRangeEnd',
        'mcastRangeStart' => 'getMcastRangeStart',
        'noPriorityClass' => 'getNoPriorityClass',
        'nodeSubnet' => 'getNodeSubnet',
        'nodeSvcSubnet' => 'getNodeSvcSubnet',
        'opflexClientSsl' => 'getOpflexClientSsl',
        'opflexLogLevel' => 'getOpflexLogLevel',
        'opflexMode' => 'getOpflexMode',
        'opflexServerPort' => 'getOpflexServerPort',
        'overlayVrfName' => 'getOverlayVrfName',
        'ovsMemoryLimit' => 'getOvsMemoryLimit',
        'pbrTrackingNonSnat' => 'getPbrTrackingNonSnat',
        'podSubnetChunkSize' => 'getPodSubnetChunkSize',
        'runGbpContainer' => 'getRunGbpContainer',
        'runOpflexServerContainer' => 'getRunOpflexServerContainer',
        'serviceMonitorInterval' => 'getServiceMonitorInterval',
        'serviceVlan' => 'getServiceVlan',
        'snatContractScope' => 'getSnatContractScope',
        'snatNamespace' => 'getSnatNamespace',
        'snatPortRangeEnd' => 'getSnatPortRangeEnd',
        'snatPortRangeStart' => 'getSnatPortRangeStart',
        'snatPortsPerNode' => 'getSnatPortsPerNode',
        'subnetDomainName' => 'getSubnetDomainName',
        'systemId' => 'getSystemId',
        'tenant' => 'getTenant',
        'token' => 'getToken',
        'useAciAnywhereCrd' => 'getUseAciAnywhereCrd',
        'useAciCniPriorityClass' => 'getUseAciCniPriorityClass',
        'useHostNetnsVolume' => 'getUseHostNetnsVolume',
        'useOpflexServerVolume' => 'getUseOpflexServerVolume',
        'usePrivilegedContainer' => 'getUsePrivilegedContainer',
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
        $this->container['aep'] = isset($data['aep']) ? $data['aep'] : null;
        $this->container['apicHosts'] = isset($data['apicHosts']) ? $data['apicHosts'] : null;
        $this->container['apicRefreshTime'] = isset($data['apicRefreshTime']) ? $data['apicRefreshTime'] : null;
        $this->container['apicUserCrt'] = isset($data['apicUserCrt']) ? $data['apicUserCrt'] : null;
        $this->container['apicUserKey'] = isset($data['apicUserKey']) ? $data['apicUserKey'] : null;
        $this->container['apicUserName'] = isset($data['apicUserName']) ? $data['apicUserName'] : null;
        $this->container['capic'] = isset($data['capic']) ? $data['capic'] : null;
        $this->container['controllerLogLevel'] = isset($data['controllerLogLevel']) ? $data['controllerLogLevel'] : null;
        $this->container['dropLogEnable'] = isset($data['dropLogEnable']) ? $data['dropLogEnable'] : null;
        $this->container['enableEndpointSlice'] = isset($data['enableEndpointSlice']) ? $data['enableEndpointSlice'] : null;
        $this->container['encapType'] = isset($data['encapType']) ? $data['encapType'] : null;
        $this->container['epRegistry'] = isset($data['epRegistry']) ? $data['epRegistry'] : null;
        $this->container['externDynamic'] = isset($data['externDynamic']) ? $data['externDynamic'] : null;
        $this->container['externStatic'] = isset($data['externStatic']) ? $data['externStatic'] : null;
        $this->container['gbpPodSubnet'] = isset($data['gbpPodSubnet']) ? $data['gbpPodSubnet'] : null;
        $this->container['hostAgentLogLevel'] = isset($data['hostAgentLogLevel']) ? $data['hostAgentLogLevel'] : null;
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
        $this->container['mcastRangeEnd'] = isset($data['mcastRangeEnd']) ? $data['mcastRangeEnd'] : null;
        $this->container['mcastRangeStart'] = isset($data['mcastRangeStart']) ? $data['mcastRangeStart'] : null;
        $this->container['noPriorityClass'] = isset($data['noPriorityClass']) ? $data['noPriorityClass'] : null;
        $this->container['nodeSubnet'] = isset($data['nodeSubnet']) ? $data['nodeSubnet'] : null;
        $this->container['nodeSvcSubnet'] = isset($data['nodeSvcSubnet']) ? $data['nodeSvcSubnet'] : null;
        $this->container['opflexClientSsl'] = isset($data['opflexClientSsl']) ? $data['opflexClientSsl'] : null;
        $this->container['opflexLogLevel'] = isset($data['opflexLogLevel']) ? $data['opflexLogLevel'] : null;
        $this->container['opflexMode'] = isset($data['opflexMode']) ? $data['opflexMode'] : null;
        $this->container['opflexServerPort'] = isset($data['opflexServerPort']) ? $data['opflexServerPort'] : null;
        $this->container['overlayVrfName'] = isset($data['overlayVrfName']) ? $data['overlayVrfName'] : null;
        $this->container['ovsMemoryLimit'] = isset($data['ovsMemoryLimit']) ? $data['ovsMemoryLimit'] : null;
        $this->container['pbrTrackingNonSnat'] = isset($data['pbrTrackingNonSnat']) ? $data['pbrTrackingNonSnat'] : null;
        $this->container['podSubnetChunkSize'] = isset($data['podSubnetChunkSize']) ? $data['podSubnetChunkSize'] : null;
        $this->container['runGbpContainer'] = isset($data['runGbpContainer']) ? $data['runGbpContainer'] : null;
        $this->container['runOpflexServerContainer'] = isset($data['runOpflexServerContainer']) ? $data['runOpflexServerContainer'] : null;
        $this->container['serviceMonitorInterval'] = isset($data['serviceMonitorInterval']) ? $data['serviceMonitorInterval'] : null;
        $this->container['serviceVlan'] = isset($data['serviceVlan']) ? $data['serviceVlan'] : null;
        $this->container['snatContractScope'] = isset($data['snatContractScope']) ? $data['snatContractScope'] : null;
        $this->container['snatNamespace'] = isset($data['snatNamespace']) ? $data['snatNamespace'] : null;
        $this->container['snatPortRangeEnd'] = isset($data['snatPortRangeEnd']) ? $data['snatPortRangeEnd'] : null;
        $this->container['snatPortRangeStart'] = isset($data['snatPortRangeStart']) ? $data['snatPortRangeStart'] : null;
        $this->container['snatPortsPerNode'] = isset($data['snatPortsPerNode']) ? $data['snatPortsPerNode'] : null;
        $this->container['subnetDomainName'] = isset($data['subnetDomainName']) ? $data['subnetDomainName'] : null;
        $this->container['systemId'] = isset($data['systemId']) ? $data['systemId'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['useAciAnywhereCrd'] = isset($data['useAciAnywhereCrd']) ? $data['useAciAnywhereCrd'] : null;
        $this->container['useAciCniPriorityClass'] = isset($data['useAciCniPriorityClass']) ? $data['useAciCniPriorityClass'] : null;
        $this->container['useHostNetnsVolume'] = isset($data['useHostNetnsVolume']) ? $data['useHostNetnsVolume'] : null;
        $this->container['useOpflexServerVolume'] = isset($data['useOpflexServerVolume']) ? $data['useOpflexServerVolume'] : null;
        $this->container['usePrivilegedContainer'] = isset($data['usePrivilegedContainer']) ? $data['usePrivilegedContainer'] : null;
        $this->container['vmmController'] = isset($data['vmmController']) ? $data['vmmController'] : null;
        $this->container['vmmDomain'] = isset($data['vmmDomain']) ? $data['vmmDomain'] : null;
        $this->container['vrfName'] = isset($data['vrfName']) ? $data['vrfName'] : null;
        $this->container['vrfTenant'] = isset($data['vrfTenant']) ? $data['vrfTenant'] : null;
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

