<?php

namespace Rancher\Model;

use \ArrayAccess;

class Job implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'activeDeadlineSeconds' => 'int',
        'annotations' => 'map[string]',
        'automountServiceAccountToken' => 'boolean',
        'containers' => '\Rancher\Model\Container[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'dnsConfig' => '\Rancher\Model\PodDNSConfig',
        'dnsPolicy' => 'string',
        'fsgid' => 'int',
        'gids' => 'int[]',
        'hostAliases' => '\Rancher\Model\HostAlias[]',
        'hostIPC' => 'boolean',
        'hostNetwork' => 'boolean',
        'hostPID' => 'boolean',
        'hostname' => 'string',
        'imagePullSecrets' => '\Rancher\Model\LocalObjectReference[]',
        'jobConfig' => '\Rancher\Model\JobConfig',
        'jobStatus' => '\Rancher\Model\JobStatus',
        'labels' => 'map[string]',
        'name' => '\Rancher\Model\DnsLabelRestricted',
        'namespaceId' => 'string',
        'nodeId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'priority' => 'int',
        'priorityClassName' => 'string',
        'projectId' => 'string',
        'publicEndpoints' => '\Rancher\Model\PublicEndpoint[]',
        'readinessGates' => '\Rancher\Model\PodReadinessGate[]',
        'removed' => '\DateTime',
        'restartPolicy' => 'string',
        'runAsGroup' => 'int',
        'runAsNonRoot' => 'boolean',
        'runtimeClassName' => 'string',
        'schedulerName' => 'string',
        'scheduling' => '\Rancher\Model\Scheduling',
        'selector' => '\Rancher\Model\LabelSelector',
        'serviceAccountName' => 'string',
        'shareProcessNamespace' => 'boolean',
        'state' => 'string',
        'subdomain' => 'string',
        'sysctls' => '\Rancher\Model\Sysctl[]',
        'terminationGracePeriodSeconds' => 'int',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'ttlSecondsAfterFinished' => 'int',
        'uid' => 'int',
        'uuid' => 'string',
        'volumes' => '\Rancher\Model\Volume[]',
        'workloadAnnotations' => 'map[string]',
        'workloadLabels' => 'map[string]',
        'workloadMetrics' => '\Rancher\Model\WorkloadMetric[]',
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
        'dnsConfig' => 'setDnsConfig',
        'dnsPolicy' => 'setDnsPolicy',
        'fsgid' => 'setFsgid',
        'gids' => 'setGids',
        'hostAliases' => 'setHostAliases',
        'hostIPC' => 'setHostIPC',
        'hostNetwork' => 'setHostNetwork',
        'hostPID' => 'setHostPID',
        'hostname' => 'setHostname',
        'imagePullSecrets' => 'setImagePullSecrets',
        'jobConfig' => 'setJobConfig',
        'jobStatus' => 'setJobStatus',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeId' => 'setNodeId',
        'ownerReferences' => 'setOwnerReferences',
        'priority' => 'setPriority',
        'priorityClassName' => 'setPriorityClassName',
        'projectId' => 'setProjectId',
        'publicEndpoints' => 'setPublicEndpoints',
        'readinessGates' => 'setReadinessGates',
        'removed' => 'setRemoved',
        'restartPolicy' => 'setRestartPolicy',
        'runAsGroup' => 'setRunAsGroup',
        'runAsNonRoot' => 'setRunAsNonRoot',
        'runtimeClassName' => 'setRuntimeClassName',
        'schedulerName' => 'setSchedulerName',
        'scheduling' => 'setScheduling',
        'selector' => 'setSelector',
        'serviceAccountName' => 'setServiceAccountName',
        'shareProcessNamespace' => 'setShareProcessNamespace',
        'state' => 'setState',
        'subdomain' => 'setSubdomain',
        'sysctls' => 'setSysctls',
        'terminationGracePeriodSeconds' => 'setTerminationGracePeriodSeconds',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'ttlSecondsAfterFinished' => 'setTtlSecondsAfterFinished',
        'uid' => 'setUid',
        'uuid' => 'setUuid',
        'volumes' => 'setVolumes',
        'workloadAnnotations' => 'setWorkloadAnnotations',
        'workloadLabels' => 'setWorkloadLabels',
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
        'dnsConfig' => 'getDnsConfig',
        'dnsPolicy' => 'getDnsPolicy',
        'fsgid' => 'getFsgid',
        'gids' => 'getGids',
        'hostAliases' => 'getHostAliases',
        'hostIPC' => 'getHostIPC',
        'hostNetwork' => 'getHostNetwork',
        'hostPID' => 'getHostPID',
        'hostname' => 'getHostname',
        'imagePullSecrets' => 'getImagePullSecrets',
        'jobConfig' => 'getJobConfig',
        'jobStatus' => 'getJobStatus',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeId' => 'getNodeId',
        'ownerReferences' => 'getOwnerReferences',
        'priority' => 'getPriority',
        'priorityClassName' => 'getPriorityClassName',
        'projectId' => 'getProjectId',
        'publicEndpoints' => 'getPublicEndpoints',
        'readinessGates' => 'getReadinessGates',
        'removed' => 'getRemoved',
        'restartPolicy' => 'getRestartPolicy',
        'runAsGroup' => 'getRunAsGroup',
        'runAsNonRoot' => 'getRunAsNonRoot',
        'runtimeClassName' => 'getRuntimeClassName',
        'schedulerName' => 'getSchedulerName',
        'scheduling' => 'getScheduling',
        'selector' => 'getSelector',
        'serviceAccountName' => 'getServiceAccountName',
        'shareProcessNamespace' => 'getShareProcessNamespace',
        'state' => 'getState',
        'subdomain' => 'getSubdomain',
        'sysctls' => 'getSysctls',
        'terminationGracePeriodSeconds' => 'getTerminationGracePeriodSeconds',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'ttlSecondsAfterFinished' => 'getTtlSecondsAfterFinished',
        'uid' => 'getUid',
        'uuid' => 'getUuid',
        'volumes' => 'getVolumes',
        'workloadAnnotations' => 'getWorkloadAnnotations',
        'workloadLabels' => 'getWorkloadLabels',
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
        $this->container['dnsConfig'] = isset($data['dnsConfig']) ? $data['dnsConfig'] : null;
        $this->container['dnsPolicy'] = isset($data['dnsPolicy']) ? $data['dnsPolicy'] : null;
        $this->container['fsgid'] = isset($data['fsgid']) ? $data['fsgid'] : null;
        $this->container['gids'] = isset($data['gids']) ? $data['gids'] : null;
        $this->container['hostAliases'] = isset($data['hostAliases']) ? $data['hostAliases'] : null;
        $this->container['hostIPC'] = isset($data['hostIPC']) ? $data['hostIPC'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['hostPID'] = isset($data['hostPID']) ? $data['hostPID'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['imagePullSecrets'] = isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : null;
        $this->container['jobConfig'] = isset($data['jobConfig']) ? $data['jobConfig'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['priorityClassName'] = isset($data['priorityClassName']) ? $data['priorityClassName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['readinessGates'] = isset($data['readinessGates']) ? $data['readinessGates'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['restartPolicy'] = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
        $this->container['runAsGroup'] = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->container['runAsNonRoot'] = isset($data['runAsNonRoot']) ? $data['runAsNonRoot'] : null;
        $this->container['runtimeClassName'] = isset($data['runtimeClassName']) ? $data['runtimeClassName'] : null;
        $this->container['schedulerName'] = isset($data['schedulerName']) ? $data['schedulerName'] : null;
        $this->container['scheduling'] = isset($data['scheduling']) ? $data['scheduling'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['serviceAccountName'] = isset($data['serviceAccountName']) ? $data['serviceAccountName'] : null;
        $this->container['shareProcessNamespace'] = isset($data['shareProcessNamespace']) ? $data['shareProcessNamespace'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['sysctls'] = isset($data['sysctls']) ? $data['sysctls'] : null;
        $this->container['terminationGracePeriodSeconds'] = isset($data['terminationGracePeriodSeconds']) ? $data['terminationGracePeriodSeconds'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['ttlSecondsAfterFinished'] = isset($data['ttlSecondsAfterFinished']) ? $data['ttlSecondsAfterFinished'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['workloadAnnotations'] = isset($data['workloadAnnotations']) ? $data['workloadAnnotations'] : null;
        $this->container['workloadLabels'] = isset($data['workloadLabels']) ? $data['workloadLabels'] : null;
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
     * @return \Rancher\Model\Container[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     * @param \Rancher\Model\Container[] $containers
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
     * Gets dnsConfig
     * @return \Rancher\Model\PodDNSConfig
     */
    public function getDnsConfig()
    {
        return $this->container['dnsConfig'];
    }

    /**
     * Sets dnsConfig
     * @param \Rancher\Model\PodDNSConfig $dnsConfig
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
     * @return \Rancher\Model\HostAlias[]
     */
    public function getHostAliases()
    {
        return $this->container['hostAliases'];
    }

    /**
     * Sets hostAliases
     * @param \Rancher\Model\HostAlias[] $hostAliases
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
     * @return \Rancher\Model\LocalObjectReference[]
     */
    public function getImagePullSecrets()
    {
        return $this->container['imagePullSecrets'];
    }

    /**
     * Sets imagePullSecrets
     * @param \Rancher\Model\LocalObjectReference[] $imagePullSecrets
     * @return $this
     */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->container['imagePullSecrets'] = $imagePullSecrets;

        return $this;
    }


    /**
     * Gets jobConfig
     * @return \Rancher\Model\JobConfig
     */
    public function getJobConfig()
    {
        return $this->container['jobConfig'];
    }

    /**
     * Sets jobConfig
     * @param \Rancher\Model\JobConfig $jobConfig
     * @return $this
     */
    public function setJobConfig($jobConfig)
    {
        $this->container['jobConfig'] = $jobConfig;

        return $this;
    }


    /**
     * Gets jobStatus
     * @return \Rancher\Model\JobStatus
     */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
     * Sets jobStatus
     * @param \Rancher\Model\JobStatus $jobStatus
     * @return $this
     */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;

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
     * @return \Rancher\Model\DnsLabelRestricted
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Rancher\Model\DnsLabelRestricted $name
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
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReference[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }


    /**
     * Gets priorityClassName
     * @return string
     */
    public function getPriorityClassName()
    {
        return $this->container['priorityClassName'];
    }

    /**
     * Sets priorityClassName
     * @param string $priorityClassName
     * @return $this
     */
    public function setPriorityClassName($priorityClassName)
    {
        $this->container['priorityClassName'] = $priorityClassName;

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
     * @return \Rancher\Model\PublicEndpoint[]
     */
    public function getPublicEndpoints()
    {
        return $this->container['publicEndpoints'];
    }

    /**
     * Sets publicEndpoints
     * @param \Rancher\Model\PublicEndpoint[] $publicEndpoints
     * @return $this
     */
    public function setPublicEndpoints($publicEndpoints)
    {
        $this->container['publicEndpoints'] = $publicEndpoints;

        return $this;
    }


    /**
     * Gets readinessGates
     * @return \Rancher\Model\PodReadinessGate[]
     */
    public function getReadinessGates()
    {
        return $this->container['readinessGates'];
    }

    /**
     * Sets readinessGates
     * @param \Rancher\Model\PodReadinessGate[] $readinessGates
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
     * Gets schedulerName
     * @return string
     */
    public function getSchedulerName()
    {
        return $this->container['schedulerName'];
    }

    /**
     * Sets schedulerName
     * @param string $schedulerName
     * @return $this
     */
    public function setSchedulerName($schedulerName)
    {
        $this->container['schedulerName'] = $schedulerName;

        return $this;
    }


    /**
     * Gets scheduling
     * @return \Rancher\Model\Scheduling
     */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
     * Sets scheduling
     * @param \Rancher\Model\Scheduling $scheduling
     * @return $this
     */
    public function setScheduling($scheduling)
    {
        $this->container['scheduling'] = $scheduling;

        return $this;
    }


    /**
     * Gets selector
     * @return \Rancher\Model\LabelSelector
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     * @param \Rancher\Model\LabelSelector $selector
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

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
     * @return \Rancher\Model\Sysctl[]
     */
    public function getSysctls()
    {
        return $this->container['sysctls'];
    }

    /**
     * Sets sysctls
     * @param \Rancher\Model\Sysctl[] $sysctls
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
     * Gets ttlSecondsAfterFinished
     * @return int
     */
    public function getTtlSecondsAfterFinished()
    {
        return $this->container['ttlSecondsAfterFinished'];
    }

    /**
     * Sets ttlSecondsAfterFinished
     * @param int $ttlSecondsAfterFinished
     * @return $this
     */
    public function setTtlSecondsAfterFinished($ttlSecondsAfterFinished)
    {
        $this->container['ttlSecondsAfterFinished'] = $ttlSecondsAfterFinished;

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
     * @return \Rancher\Model\Volume[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     * @param \Rancher\Model\Volume[] $volumes
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

        return $this;
    }


    /**
     * Gets workloadAnnotations
     * @return string[]
     */
    public function getWorkloadAnnotations()
    {
        return $this->container['workloadAnnotations'];
    }

    /**
     * Sets workloadAnnotations
     * @param string[] $workloadAnnotations
     * @return $this
     */
    public function setWorkloadAnnotations($workloadAnnotations)
    {
        $this->container['workloadAnnotations'] = $workloadAnnotations;

        return $this;
    }


    /**
     * Gets workloadLabels
     * @return string[]
     */
    public function getWorkloadLabels()
    {
        return $this->container['workloadLabels'];
    }

    /**
     * Sets workloadLabels
     * @param string[] $workloadLabels
     * @return $this
     */
    public function setWorkloadLabels($workloadLabels)
    {
        $this->container['workloadLabels'] = $workloadLabels;

        return $this;
    }


    /**
     * Gets workloadMetrics
     * @return \Rancher\Model\WorkloadMetric[]
     */
    public function getWorkloadMetrics()
    {
        return $this->container['workloadMetrics'];
    }

    /**
     * Sets workloadMetrics
     * @param \Rancher\Model\WorkloadMetric[] $workloadMetrics
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

