<?php

/**
 * PodModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodModel implements ArrayAccess
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
        'activeDeadlineSeconds',
        'annotations',
        'automountServiceAccountToken',
        'containers',
        'description',
        'dnsConfig',
        'dnsPolicy',
        'enableServiceLinks',
        'ephemeralContainers',
        'fsGroupChangePolicy',
        'fsgid',
        'gids',
        'hostAliases',
        'hostIPC',
        'hostNetwork',
        'hostPID',
        'hostUsers',
        'hostname',
        'imagePullSecrets',
        'labels',
        'name',
        'namespaceId',
        'nodeId',
        'os',
        'overhead',
        'preemptionPolicy',
        'projectId',
        'readinessGates',
        'resourceClaims',
        'restartPolicy',
        'runAsGroup',
        'runAsNonRoot',
        'runtimeClassName',
        'scheduling',
        'schedulingGates',
        'seccompProfile',
        'serviceAccountName',
        'setHostnameAsFQDN',
        'shareProcessNamespace',
        'subdomain',
        'sysctls',
        'terminationGracePeriodSeconds',
        'topologySpreadConstraints',
        'uid',
        'volumes',
        'windowsOptions',
        'workloadId',
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
        'activeDeadlineSeconds',
        'annotations',
        'automountServiceAccountToken',
        'containers',
        'description',
        'dnsConfig',
        'dnsPolicy',
        'enableServiceLinks',
        'ephemeralContainers',
        'fsGroupChangePolicy',
        'fsgid',
        'gids',
        'hostAliases',
        'hostIPC',
        'hostNetwork',
        'hostPID',
        'hostUsers',
        'hostname',
        'imagePullSecrets',
        'labels',
        'nodeId',
        'os',
        'overhead',
        'preemptionPolicy',
        'readinessGates',
        'resourceClaims',
        'restartPolicy',
        'runAsGroup',
        'runAsNonRoot',
        'runtimeClassName',
        'scheduling',
        'schedulingGates',
        'seccompProfile',
        'serviceAccountName',
        'setHostnameAsFQDN',
        'shareProcessNamespace',
        'subdomain',
        'sysctls',
        'terminationGracePeriodSeconds',
        'topologySpreadConstraints',
        'uid',
        'volumes',
        'windowsOptions',
        'workloadId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'activeDeadlineSeconds' => 'int',
        'annotations' => 'map[string,string]',
        'automountServiceAccountToken' => 'boolean',
        'containers' => '\Rancher\Model\ContainerModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'dnsConfig' => '\Rancher\Model\PodDNSConfigModel',
        'dnsPolicy' => 'string',
        'enableServiceLinks' => 'boolean',
        'ephemeralContainers' => '\Rancher\Model\EphemeralContainerModel[]',
        'fsGroupChangePolicy' => 'string',
        'fsgid' => 'int',
        'gids' => 'int[]',
        'hostAliases' => '\Rancher\Model\HostAliasModel[]',
        'hostIPC' => 'boolean',
        'hostNetwork' => 'boolean',
        'hostPID' => 'boolean',
        'hostUsers' => 'boolean',
        'hostname' => 'string',
        'imagePullSecrets' => '\Rancher\Model\LocalObjectReferenceModel[]',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeId' => 'string',
        'os' => '\Rancher\Model\PodOSModel',
        'overhead' => 'map[string,string]',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'preemptionPolicy' => 'string',
        'projectId' => 'string',
        'publicEndpoints' => '\Rancher\Model\PublicEndpointModel[]',
        'readinessGates' => '\Rancher\Model\PodReadinessGateModel[]',
        'removed' => '\DateTime',
        'resourceClaims' => '\Rancher\Model\PodResourceClaimModel[]',
        'restartPolicy' => 'string',
        'runAsGroup' => 'int',
        'runAsNonRoot' => 'boolean',
        'runtimeClassName' => 'string',
        'scheduling' => '\Rancher\Model\SchedulingModel',
        'schedulingGates' => '\Rancher\Model\PodSchedulingGateModel[]',
        'seccompProfile' => '\Rancher\Model\SeccompProfileModel',
        'serviceAccountName' => 'string',
        'setHostnameAsFQDN' => 'boolean',
        'shareProcessNamespace' => 'boolean',
        'state' => 'string',
        'status' => '\Rancher\Model\PodStatusModel',
        'subdomain' => 'string',
        'sysctls' => '\Rancher\Model\SysctlModel[]',
        'terminationGracePeriodSeconds' => 'int',
        'topologySpreadConstraints' => '\Rancher\Model\TopologySpreadConstraintModel[]',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uid' => 'int',
        'uuid' => 'string',
        'volumes' => '\Rancher\Model\VolumeModel[]',
        'windowsOptions' => '\Rancher\Model\WindowsSecurityContextOptionsModel',
        'workloadId' => 'string',
        'workloadMetrics' => '\Rancher\Model\WorkloadMetricModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'activeDeadlineSeconds' => 'setActiveDeadlineSeconds',
        'annotations' => 'setAnnotations',
        'automountServiceAccountToken' => 'setAutomountServiceAccountToken',
        'containers' => 'setContainers',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'dnsConfig' => 'setDnsConfig',
        'dnsPolicy' => 'setDnsPolicy',
        'enableServiceLinks' => 'setEnableServiceLinks',
        'ephemeralContainers' => 'setEphemeralContainers',
        'fsGroupChangePolicy' => 'setFsGroupChangePolicy',
        'fsgid' => 'setFsgid',
        'gids' => 'setGids',
        'hostAliases' => 'setHostAliases',
        'hostIPC' => 'setHostIPC',
        'hostNetwork' => 'setHostNetwork',
        'hostPID' => 'setHostPID',
        'hostUsers' => 'setHostUsers',
        'hostname' => 'setHostname',
        'imagePullSecrets' => 'setImagePullSecrets',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeId' => 'setNodeId',
        'os' => 'setOs',
        'overhead' => 'setOverhead',
        'ownerReferences' => 'setOwnerReferences',
        'preemptionPolicy' => 'setPreemptionPolicy',
        'projectId' => 'setProjectId',
        'publicEndpoints' => 'setPublicEndpoints',
        'readinessGates' => 'setReadinessGates',
        'removed' => 'setRemoved',
        'resourceClaims' => 'setResourceClaims',
        'restartPolicy' => 'setRestartPolicy',
        'runAsGroup' => 'setRunAsGroup',
        'runAsNonRoot' => 'setRunAsNonRoot',
        'runtimeClassName' => 'setRuntimeClassName',
        'scheduling' => 'setScheduling',
        'schedulingGates' => 'setSchedulingGates',
        'seccompProfile' => 'setSeccompProfile',
        'serviceAccountName' => 'setServiceAccountName',
        'setHostnameAsFQDN' => 'setSetHostnameAsFQDN',
        'shareProcessNamespace' => 'setShareProcessNamespace',
        'state' => 'setState',
        'status' => 'setStatus',
        'subdomain' => 'setSubdomain',
        'sysctls' => 'setSysctls',
        'terminationGracePeriodSeconds' => 'setTerminationGracePeriodSeconds',
        'topologySpreadConstraints' => 'setTopologySpreadConstraints',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uid' => 'setUid',
        'uuid' => 'setUuid',
        'volumes' => 'setVolumes',
        'windowsOptions' => 'setWindowsOptions',
        'workloadId' => 'setWorkloadId',
        'workloadMetrics' => 'setWorkloadMetrics',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'activeDeadlineSeconds' => 'getActiveDeadlineSeconds',
        'annotations' => 'getAnnotations',
        'automountServiceAccountToken' => 'getAutomountServiceAccountToken',
        'containers' => 'getContainers',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'dnsConfig' => 'getDnsConfig',
        'dnsPolicy' => 'getDnsPolicy',
        'enableServiceLinks' => 'getEnableServiceLinks',
        'ephemeralContainers' => 'getEphemeralContainers',
        'fsGroupChangePolicy' => 'getFsGroupChangePolicy',
        'fsgid' => 'getFsgid',
        'gids' => 'getGids',
        'hostAliases' => 'getHostAliases',
        'hostIPC' => 'getHostIPC',
        'hostNetwork' => 'getHostNetwork',
        'hostPID' => 'getHostPID',
        'hostUsers' => 'getHostUsers',
        'hostname' => 'getHostname',
        'imagePullSecrets' => 'getImagePullSecrets',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeId' => 'getNodeId',
        'os' => 'getOs',
        'overhead' => 'getOverhead',
        'ownerReferences' => 'getOwnerReferences',
        'preemptionPolicy' => 'getPreemptionPolicy',
        'projectId' => 'getProjectId',
        'publicEndpoints' => 'getPublicEndpoints',
        'readinessGates' => 'getReadinessGates',
        'removed' => 'getRemoved',
        'resourceClaims' => 'getResourceClaims',
        'restartPolicy' => 'getRestartPolicy',
        'runAsGroup' => 'getRunAsGroup',
        'runAsNonRoot' => 'getRunAsNonRoot',
        'runtimeClassName' => 'getRuntimeClassName',
        'scheduling' => 'getScheduling',
        'schedulingGates' => 'getSchedulingGates',
        'seccompProfile' => 'getSeccompProfile',
        'serviceAccountName' => 'getServiceAccountName',
        'setHostnameAsFQDN' => 'getSetHostnameAsFQDN',
        'shareProcessNamespace' => 'getShareProcessNamespace',
        'state' => 'getState',
        'status' => 'getStatus',
        'subdomain' => 'getSubdomain',
        'sysctls' => 'getSysctls',
        'terminationGracePeriodSeconds' => 'getTerminationGracePeriodSeconds',
        'topologySpreadConstraints' => 'getTopologySpreadConstraints',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uid' => 'getUid',
        'uuid' => 'getUuid',
        'volumes' => 'getVolumes',
        'windowsOptions' => 'getWindowsOptions',
        'workloadId' => 'getWorkloadId',
        'workloadMetrics' => 'getWorkloadMetrics',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['activeDeadlineSeconds'] = isset($data['activeDeadlineSeconds']) ? $data['activeDeadlineSeconds'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['automountServiceAccountToken'] = isset($data['automountServiceAccountToken']) ? $data['automountServiceAccountToken'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dnsConfig'] = isset($data['dnsConfig']) ? $data['dnsConfig'] : null;
        $this->container['dnsPolicy'] = isset($data['dnsPolicy']) ? $data['dnsPolicy'] : null;
        $this->container['enableServiceLinks'] = isset($data['enableServiceLinks']) ? $data['enableServiceLinks'] : null;
        $this->container['ephemeralContainers'] = isset($data['ephemeralContainers']) ? $data['ephemeralContainers'] : null;
        $this->container['fsGroupChangePolicy'] = isset($data['fsGroupChangePolicy']) ? $data['fsGroupChangePolicy'] : null;
        $this->container['fsgid'] = isset($data['fsgid']) ? $data['fsgid'] : null;
        $this->container['gids'] = isset($data['gids']) ? $data['gids'] : null;
        $this->container['hostAliases'] = isset($data['hostAliases']) ? $data['hostAliases'] : null;
        $this->container['hostIPC'] = isset($data['hostIPC']) ? $data['hostIPC'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['hostPID'] = isset($data['hostPID']) ? $data['hostPID'] : null;
        $this->container['hostUsers'] = isset($data['hostUsers']) ? $data['hostUsers'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['imagePullSecrets'] = isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['overhead'] = isset($data['overhead']) ? $data['overhead'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['preemptionPolicy'] = isset($data['preemptionPolicy']) ? $data['preemptionPolicy'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['readinessGates'] = isset($data['readinessGates']) ? $data['readinessGates'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['resourceClaims'] = isset($data['resourceClaims']) ? $data['resourceClaims'] : null;
        $this->container['restartPolicy'] = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
        $this->container['runAsGroup'] = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->container['runAsNonRoot'] = isset($data['runAsNonRoot']) ? $data['runAsNonRoot'] : null;
        $this->container['runtimeClassName'] = isset($data['runtimeClassName']) ? $data['runtimeClassName'] : null;
        $this->container['scheduling'] = isset($data['scheduling']) ? $data['scheduling'] : null;
        $this->container['schedulingGates'] = isset($data['schedulingGates']) ? $data['schedulingGates'] : null;
        $this->container['seccompProfile'] = isset($data['seccompProfile']) ? $data['seccompProfile'] : null;
        $this->container['serviceAccountName'] = isset($data['serviceAccountName']) ? $data['serviceAccountName'] : null;
        $this->container['setHostnameAsFQDN'] = isset($data['setHostnameAsFQDN']) ? $data['setHostnameAsFQDN'] : null;
        $this->container['shareProcessNamespace'] = isset($data['shareProcessNamespace']) ? $data['shareProcessNamespace'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['sysctls'] = isset($data['sysctls']) ? $data['sysctls'] : null;
        $this->container['terminationGracePeriodSeconds'] = isset($data['terminationGracePeriodSeconds']) ? $data['terminationGracePeriodSeconds'] : null;
        $this->container['topologySpreadConstraints'] = isset($data['topologySpreadConstraints']) ? $data['topologySpreadConstraints'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['windowsOptions'] = isset($data['windowsOptions']) ? $data['windowsOptions'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['workloadMetrics'] = isset($data['workloadMetrics']) ? $data['workloadMetrics'] : null;
    }

    /**
     * Gets activeDeadlineSeconds
     * @return int
     */
    public function getActiveDeadlineSeconds()
    {
        return $this->container['activeDeadlineSeconds'];
    }

    /**
     * Sets activeDeadlineSeconds
     * @param int $activeDeadlineSeconds
     * @return $this
     */
    public function setActiveDeadlineSeconds($activeDeadlineSeconds)
    {
        $this->container['activeDeadlineSeconds'] = $activeDeadlineSeconds;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }


    /**
     * Gets automountServiceAccountToken
     * @return boolean
     */
    public function getAutomountServiceAccountToken()
    {
        return $this->container['automountServiceAccountToken'];
    }

    /**
     * Sets automountServiceAccountToken
     * @param boolean $automountServiceAccountToken
     * @return $this
     */
    public function setAutomountServiceAccountToken($automountServiceAccountToken)
    {
        $this->container['automountServiceAccountToken'] = $automountServiceAccountToken;

        return $this;
    }


    /**
     * Gets containers
     * @return \Rancher\Model\ContainerModel[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     * @param \Rancher\Model\ContainerModel[] $containers
     * @return $this
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }


    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }


    /**
     * Gets creatorId
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     * @param string $creatorId
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

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
     * Gets dnsConfig
     * @return \Rancher\Model\PodDNSConfigModel
     */
    public function getDnsConfig()
    {
        return $this->container['dnsConfig'];
    }

    /**
     * Sets dnsConfig
     * @param \Rancher\Model\PodDNSConfigModel $dnsConfig
     * @return $this
     */
    public function setDnsConfig($dnsConfig)
    {
        $this->container['dnsConfig'] = $dnsConfig;

        return $this;
    }


    /**
     * Gets dnsPolicy
     * @return string
     */
    public function getDnsPolicy()
    {
        return $this->container['dnsPolicy'];
    }

    /**
     * Sets dnsPolicy
     * @param string $dnsPolicy
     * @return $this
     */
    public function setDnsPolicy($dnsPolicy)
    {
        $this->container['dnsPolicy'] = $dnsPolicy;

        return $this;
    }


    /**
     * Gets enableServiceLinks
     * @return boolean
     */
    public function getEnableServiceLinks()
    {
        return $this->container['enableServiceLinks'];
    }

    /**
     * Sets enableServiceLinks
     * @param boolean $enableServiceLinks
     * @return $this
     */
    public function setEnableServiceLinks($enableServiceLinks)
    {
        $this->container['enableServiceLinks'] = $enableServiceLinks;

        return $this;
    }


    /**
     * Gets ephemeralContainers
     * @return \Rancher\Model\EphemeralContainerModel[]
     */
    public function getEphemeralContainers()
    {
        return $this->container['ephemeralContainers'];
    }

    /**
     * Sets ephemeralContainers
     * @param \Rancher\Model\EphemeralContainerModel[] $ephemeralContainers
     * @return $this
     */
    public function setEphemeralContainers($ephemeralContainers)
    {
        $this->container['ephemeralContainers'] = $ephemeralContainers;

        return $this;
    }


    /**
     * Gets fsGroupChangePolicy
     * @return string
     */
    public function getFsGroupChangePolicy()
    {
        return $this->container['fsGroupChangePolicy'];
    }

    /**
     * Sets fsGroupChangePolicy
     * @param string $fsGroupChangePolicy
     * @return $this
     */
    public function setFsGroupChangePolicy($fsGroupChangePolicy)
    {
        $this->container['fsGroupChangePolicy'] = $fsGroupChangePolicy;

        return $this;
    }


    /**
     * Gets fsgid
     * @return int
     */
    public function getFsgid()
    {
        return $this->container['fsgid'];
    }

    /**
     * Sets fsgid
     * @param int $fsgid
     * @return $this
     */
    public function setFsgid($fsgid)
    {
        $this->container['fsgid'] = $fsgid;

        return $this;
    }


    /**
     * Gets gids
     * @return int[]
     */
    public function getGids()
    {
        return $this->container['gids'];
    }

    /**
     * Sets gids
     * @param int[] $gids
     * @return $this
     */
    public function setGids($gids)
    {
        $this->container['gids'] = $gids;

        return $this;
    }


    /**
     * Gets hostAliases
     * @return \Rancher\Model\HostAliasModel[]
     */
    public function getHostAliases()
    {
        return $this->container['hostAliases'];
    }

    /**
     * Sets hostAliases
     * @param \Rancher\Model\HostAliasModel[] $hostAliases
     * @return $this
     */
    public function setHostAliases($hostAliases)
    {
        $this->container['hostAliases'] = $hostAliases;

        return $this;
    }


    /**
     * Gets hostIPC
     * @return boolean
     */
    public function getHostIPC()
    {
        return $this->container['hostIPC'];
    }

    /**
     * Sets hostIPC
     * @param boolean $hostIPC
     * @return $this
     */
    public function setHostIPC($hostIPC)
    {
        $this->container['hostIPC'] = $hostIPC;

        return $this;
    }


    /**
     * Gets hostNetwork
     * @return boolean
     */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
     * Sets hostNetwork
     * @param boolean $hostNetwork
     * @return $this
     */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;

        return $this;
    }


    /**
     * Gets hostPID
     * @return boolean
     */
    public function getHostPID()
    {
        return $this->container['hostPID'];
    }

    /**
     * Sets hostPID
     * @param boolean $hostPID
     * @return $this
     */
    public function setHostPID($hostPID)
    {
        $this->container['hostPID'] = $hostPID;

        return $this;
    }


    /**
     * Gets hostUsers
     * @return boolean
     */
    public function getHostUsers()
    {
        return $this->container['hostUsers'];
    }

    /**
     * Sets hostUsers
     * @param boolean $hostUsers
     * @return $this
     */
    public function setHostUsers($hostUsers)
    {
        $this->container['hostUsers'] = $hostUsers;

        return $this;
    }


    /**
     * Gets hostname
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     * @param string $hostname
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }


    /**
     * Gets imagePullSecrets
     * @return \Rancher\Model\LocalObjectReferenceModel[]
     */
    public function getImagePullSecrets()
    {
        return $this->container['imagePullSecrets'];
    }

    /**
     * Sets imagePullSecrets
     * @param \Rancher\Model\LocalObjectReferenceModel[] $imagePullSecrets
     * @return $this
     */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->container['imagePullSecrets'] = $imagePullSecrets;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }


    /**
     * Gets nodeId
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;

        return $this;
    }


    /**
     * Gets os
     * @return \Rancher\Model\PodOSModel
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param \Rancher\Model\PodOSModel $os
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }


    /**
     * Gets overhead
     * @return string[]
     */
    public function getOverhead()
    {
        return $this->container['overhead'];
    }

    /**
     * Sets overhead
     * @param string[] $overhead
     * @return $this
     */
    public function setOverhead($overhead)
    {
        $this->container['overhead'] = $overhead;

        return $this;
    }


    /**
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReferenceModel[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReferenceModel[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets preemptionPolicy
     * @return string
     */
    public function getPreemptionPolicy()
    {
        return $this->container['preemptionPolicy'];
    }

    /**
     * Sets preemptionPolicy
     * @param string $preemptionPolicy
     * @return $this
     */
    public function setPreemptionPolicy($preemptionPolicy)
    {
        $this->container['preemptionPolicy'] = $preemptionPolicy;

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
     * Gets publicEndpoints
     * @return \Rancher\Model\PublicEndpointModel[]
     */
    public function getPublicEndpoints()
    {
        return $this->container['publicEndpoints'];
    }

    /**
     * Sets publicEndpoints
     * @param \Rancher\Model\PublicEndpointModel[] $publicEndpoints
     * @return $this
     */
    public function setPublicEndpoints($publicEndpoints)
    {
        $this->container['publicEndpoints'] = $publicEndpoints;

        return $this;
    }


    /**
     * Gets readinessGates
     * @return \Rancher\Model\PodReadinessGateModel[]
     */
    public function getReadinessGates()
    {
        return $this->container['readinessGates'];
    }

    /**
     * Sets readinessGates
     * @param \Rancher\Model\PodReadinessGateModel[] $readinessGates
     * @return $this
     */
    public function setReadinessGates($readinessGates)
    {
        $this->container['readinessGates'] = $readinessGates;

        return $this;
    }


    /**
     * Gets removed
     * @return \DateTime
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param \DateTime $removed
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }


    /**
     * Gets resourceClaims
     * @return \Rancher\Model\PodResourceClaimModel[]
     */
    public function getResourceClaims()
    {
        return $this->container['resourceClaims'];
    }

    /**
     * Sets resourceClaims
     * @param \Rancher\Model\PodResourceClaimModel[] $resourceClaims
     * @return $this
     */
    public function setResourceClaims($resourceClaims)
    {
        $this->container['resourceClaims'] = $resourceClaims;

        return $this;
    }


    /**
     * Gets restartPolicy
     * @return string
     */
    public function getRestartPolicy()
    {
        return $this->container['restartPolicy'];
    }

    /**
     * Sets restartPolicy
     * @param string $restartPolicy
     * @return $this
     */
    public function setRestartPolicy($restartPolicy)
    {
        $this->container['restartPolicy'] = $restartPolicy;

        return $this;
    }


    /**
     * Gets runAsGroup
     * @return int
     */
    public function getRunAsGroup()
    {
        return $this->container['runAsGroup'];
    }

    /**
     * Sets runAsGroup
     * @param int $runAsGroup
     * @return $this
     */
    public function setRunAsGroup($runAsGroup)
    {
        $this->container['runAsGroup'] = $runAsGroup;

        return $this;
    }


    /**
     * Gets runAsNonRoot
     * @return boolean
     */
    public function getRunAsNonRoot()
    {
        return $this->container['runAsNonRoot'];
    }

    /**
     * Sets runAsNonRoot
     * @param boolean $runAsNonRoot
     * @return $this
     */
    public function setRunAsNonRoot($runAsNonRoot)
    {
        $this->container['runAsNonRoot'] = $runAsNonRoot;

        return $this;
    }


    /**
     * Gets runtimeClassName
     * @return string
     */
    public function getRuntimeClassName()
    {
        return $this->container['runtimeClassName'];
    }

    /**
     * Sets runtimeClassName
     * @param string $runtimeClassName
     * @return $this
     */
    public function setRuntimeClassName($runtimeClassName)
    {
        $this->container['runtimeClassName'] = $runtimeClassName;

        return $this;
    }


    /**
     * Gets scheduling
     * @return \Rancher\Model\SchedulingModel
     */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
     * Sets scheduling
     * @param \Rancher\Model\SchedulingModel $scheduling
     * @return $this
     */
    public function setScheduling($scheduling)
    {
        $this->container['scheduling'] = $scheduling;

        return $this;
    }


    /**
     * Gets schedulingGates
     * @return \Rancher\Model\PodSchedulingGateModel[]
     */
    public function getSchedulingGates()
    {
        return $this->container['schedulingGates'];
    }

    /**
     * Sets schedulingGates
     * @param \Rancher\Model\PodSchedulingGateModel[] $schedulingGates
     * @return $this
     */
    public function setSchedulingGates($schedulingGates)
    {
        $this->container['schedulingGates'] = $schedulingGates;

        return $this;
    }


    /**
     * Gets seccompProfile
     * @return \Rancher\Model\SeccompProfileModel
     */
    public function getSeccompProfile()
    {
        return $this->container['seccompProfile'];
    }

    /**
     * Sets seccompProfile
     * @param \Rancher\Model\SeccompProfileModel $seccompProfile
     * @return $this
     */
    public function setSeccompProfile($seccompProfile)
    {
        $this->container['seccompProfile'] = $seccompProfile;

        return $this;
    }


    /**
     * Gets serviceAccountName
     * @return string
     */
    public function getServiceAccountName()
    {
        return $this->container['serviceAccountName'];
    }

    /**
     * Sets serviceAccountName
     * @param string $serviceAccountName
     * @return $this
     */
    public function setServiceAccountName($serviceAccountName)
    {
        $this->container['serviceAccountName'] = $serviceAccountName;

        return $this;
    }


    /**
     * Gets setHostnameAsFQDN
     * @return boolean
     */
    public function getSetHostnameAsFQDN()
    {
        return $this->container['setHostnameAsFQDN'];
    }

    /**
     * Sets setHostnameAsFQDN
     * @param boolean $setHostnameAsFQDN
     * @return $this
     */
    public function setSetHostnameAsFQDN($setHostnameAsFQDN)
    {
        $this->container['setHostnameAsFQDN'] = $setHostnameAsFQDN;

        return $this;
    }


    /**
     * Gets shareProcessNamespace
     * @return boolean
     */
    public function getShareProcessNamespace()
    {
        return $this->container['shareProcessNamespace'];
    }

    /**
     * Sets shareProcessNamespace
     * @param boolean $shareProcessNamespace
     * @return $this
     */
    public function setShareProcessNamespace($shareProcessNamespace)
    {
        $this->container['shareProcessNamespace'] = $shareProcessNamespace;

        return $this;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets status
     * @return \Rancher\Model\PodStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\PodStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets subdomain
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     * @param string $subdomain
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }


    /**
     * Gets sysctls
     * @return \Rancher\Model\SysctlModel[]
     */
    public function getSysctls()
    {
        return $this->container['sysctls'];
    }

    /**
     * Sets sysctls
     * @param \Rancher\Model\SysctlModel[] $sysctls
     * @return $this
     */
    public function setSysctls($sysctls)
    {
        $this->container['sysctls'] = $sysctls;

        return $this;
    }


    /**
     * Gets terminationGracePeriodSeconds
     * @return int
     */
    public function getTerminationGracePeriodSeconds()
    {
        return $this->container['terminationGracePeriodSeconds'];
    }

    /**
     * Sets terminationGracePeriodSeconds
     * @param int $terminationGracePeriodSeconds
     * @return $this
     */
    public function setTerminationGracePeriodSeconds($terminationGracePeriodSeconds)
    {
        $this->container['terminationGracePeriodSeconds'] = $terminationGracePeriodSeconds;

        return $this;
    }


    /**
     * Gets topologySpreadConstraints
     * @return \Rancher\Model\TopologySpreadConstraintModel[]
     */
    public function getTopologySpreadConstraints()
    {
        return $this->container['topologySpreadConstraints'];
    }

    /**
     * Sets topologySpreadConstraints
     * @param \Rancher\Model\TopologySpreadConstraintModel[] $topologySpreadConstraints
     * @return $this
     */
    public function setTopologySpreadConstraints($topologySpreadConstraints)
    {
        $this->container['topologySpreadConstraints'] = $topologySpreadConstraints;

        return $this;
    }


    /**
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @return $this
     */
    public function setTransitioning($transitioning)
    {
        $this->container['transitioning'] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage)
    {
        $this->container['transitioningMessage'] = $transitioningMessage;

        return $this;
    }


    /**
     * Gets uid
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param int $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }


    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }


    /**
     * Gets volumes
     * @return \Rancher\Model\VolumeModel[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     * @param \Rancher\Model\VolumeModel[] $volumes
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

        return $this;
    }


    /**
     * Gets windowsOptions
     * @return \Rancher\Model\WindowsSecurityContextOptionsModel
     */
    public function getWindowsOptions()
    {
        return $this->container['windowsOptions'];
    }

    /**
     * Sets windowsOptions
     * @param \Rancher\Model\WindowsSecurityContextOptionsModel $windowsOptions
     * @return $this
     */
    public function setWindowsOptions($windowsOptions)
    {
        $this->container['windowsOptions'] = $windowsOptions;

        return $this;
    }


    /**
     * Gets workloadId
     * @return string
     */
    public function getWorkloadId()
    {
        return $this->container['workloadId'];
    }

    /**
     * Sets workloadId
     * @param string $workloadId
     * @return $this
     */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;

        return $this;
    }


    /**
     * Gets workloadMetrics
     * @return \Rancher\Model\WorkloadMetricModel[]
     */
    public function getWorkloadMetrics()
    {
        return $this->container['workloadMetrics'];
    }

    /**
     * Sets workloadMetrics
     * @param \Rancher\Model\WorkloadMetricModel[] $workloadMetrics
     * @return $this
     */
    public function setWorkloadMetrics($workloadMetrics)
    {
        $this->container['workloadMetrics'] = $workloadMetrics;

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

