<?php

namespace Rancher\Model;

use \ArrayAccess;

class Service implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'clusterIp' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'externalIPs' => 'string[]',
        'externalTrafficPolicy' => 'string',
        'healthCheckNodePort' => 'int',
        'hostname' => 'string',
        'ipAddresses' => 'string[]',
        'kind' => 'string',
        'labels' => 'map[string]',
        'loadBalancerIP' => 'string',
        'loadBalancerSourceRanges' => 'string[]',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'ports' => '\Rancher\Model\ServicePort[]',
        'projectId' => 'string',
        'publicEndpoints' => '\Rancher\Model\PublicEndpoint[]',
        'publishNotReadyAddresses' => 'boolean',
        'removed' => '\DateTime',
        'selector' => 'map[string]',
        'sessionAffinity' => 'string',
        'sessionAffinityConfig' => '\Rancher\Model\SessionAffinityConfig',
        'state' => 'string',
        'targetDnsRecordIds' => '\Rancher\Model\Reference[dnsRecord][]',
        'targetWorkloadIds' => '\Rancher\Model\Reference[workload][]',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'workloadId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'clusterIp' => 'setClusterIp',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'externalIPs' => 'setExternalIPs',
        'externalTrafficPolicy' => 'setExternalTrafficPolicy',
        'healthCheckNodePort' => 'setHealthCheckNodePort',
        'hostname' => 'setHostname',
        'ipAddresses' => 'setIpAddresses',
        'kind' => 'setKind',
        'labels' => 'setLabels',
        'loadBalancerIP' => 'setLoadBalancerIP',
        'loadBalancerSourceRanges' => 'setLoadBalancerSourceRanges',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'ports' => 'setPorts',
        'projectId' => 'setProjectId',
        'publicEndpoints' => 'setPublicEndpoints',
        'publishNotReadyAddresses' => 'setPublishNotReadyAddresses',
        'removed' => 'setRemoved',
        'selector' => 'setSelector',
        'sessionAffinity' => 'setSessionAffinity',
        'sessionAffinityConfig' => 'setSessionAffinityConfig',
        'state' => 'setState',
        'targetDnsRecordIds' => 'setTargetDnsRecordIds',
        'targetWorkloadIds' => 'setTargetWorkloadIds',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'workloadId' => 'setWorkloadId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'clusterIp' => 'getClusterIp',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'externalIPs' => 'getExternalIPs',
        'externalTrafficPolicy' => 'getExternalTrafficPolicy',
        'healthCheckNodePort' => 'getHealthCheckNodePort',
        'hostname' => 'getHostname',
        'ipAddresses' => 'getIpAddresses',
        'kind' => 'getKind',
        'labels' => 'getLabels',
        'loadBalancerIP' => 'getLoadBalancerIP',
        'loadBalancerSourceRanges' => 'getLoadBalancerSourceRanges',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'ports' => 'getPorts',
        'projectId' => 'getProjectId',
        'publicEndpoints' => 'getPublicEndpoints',
        'publishNotReadyAddresses' => 'getPublishNotReadyAddresses',
        'removed' => 'getRemoved',
        'selector' => 'getSelector',
        'sessionAffinity' => 'getSessionAffinity',
        'sessionAffinityConfig' => 'getSessionAffinityConfig',
        'state' => 'getState',
        'targetDnsRecordIds' => 'getTargetDnsRecordIds',
        'targetWorkloadIds' => 'getTargetWorkloadIds',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'workloadId' => 'getWorkloadId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clusterIp'] = isset($data['clusterIp']) ? $data['clusterIp'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['externalIPs'] = isset($data['externalIPs']) ? $data['externalIPs'] : null;
        $this->container['externalTrafficPolicy'] = isset($data['externalTrafficPolicy']) ? $data['externalTrafficPolicy'] : null;
        $this->container['healthCheckNodePort'] = isset($data['healthCheckNodePort']) ? $data['healthCheckNodePort'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['ipAddresses'] = isset($data['ipAddresses']) ? $data['ipAddresses'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['loadBalancerIP'] = isset($data['loadBalancerIP']) ? $data['loadBalancerIP'] : null;
        $this->container['loadBalancerSourceRanges'] = isset($data['loadBalancerSourceRanges']) ? $data['loadBalancerSourceRanges'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['publishNotReadyAddresses'] = isset($data['publishNotReadyAddresses']) ? $data['publishNotReadyAddresses'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['sessionAffinity'] = isset($data['sessionAffinity']) ? $data['sessionAffinity'] : null;
        $this->container['sessionAffinityConfig'] = isset($data['sessionAffinityConfig']) ? $data['sessionAffinityConfig'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['targetDnsRecordIds'] = isset($data['targetDnsRecordIds']) ? $data['targetDnsRecordIds'] : null;
        $this->container['targetWorkloadIds'] = isset($data['targetWorkloadIds']) ? $data['targetWorkloadIds'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
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
     * Gets clusterIp
     * @return string
     */
    public function getClusterIp()
    {
        return $this->container['clusterIp'];
    }

    /**
     * Sets clusterIp
     * @param string $clusterIp
     * @return $this
     */
    public function setClusterIp($clusterIp)
    {
        $this->container['clusterIp'] = $clusterIp;

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
     * Gets externalIPs
     * @return string[]
     */
    public function getExternalIPs()
    {
        return $this->container['externalIPs'];
    }

    /**
     * Sets externalIPs
     * @param string[] $externalIPs
     * @return $this
     */
    public function setExternalIPs($externalIPs)
    {
        $this->container['externalIPs'] = $externalIPs;

        return $this;
    }


    /**
     * Gets externalTrafficPolicy
     * @return string
     */
    public function getExternalTrafficPolicy()
    {
        return $this->container['externalTrafficPolicy'];
    }

    /**
     * Sets externalTrafficPolicy
     * @param string $externalTrafficPolicy
     * @return $this
     */
    public function setExternalTrafficPolicy($externalTrafficPolicy)
    {
        $this->container['externalTrafficPolicy'] = $externalTrafficPolicy;

        return $this;
    }


    /**
     * Gets healthCheckNodePort
     * @return int
     */
    public function getHealthCheckNodePort()
    {
        return $this->container['healthCheckNodePort'];
    }

    /**
     * Sets healthCheckNodePort
     * @param int $healthCheckNodePort
     * @return $this
     */
    public function setHealthCheckNodePort($healthCheckNodePort)
    {
        $this->container['healthCheckNodePort'] = $healthCheckNodePort;

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
     * Gets ipAddresses
     * @return string[]
     */
    public function getIpAddresses()
    {
        return $this->container['ipAddresses'];
    }

    /**
     * Sets ipAddresses
     * @param string[] $ipAddresses
     * @return $this
     */
    public function setIpAddresses($ipAddresses)
    {
        $this->container['ipAddresses'] = $ipAddresses;

        return $this;
    }


    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

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
     * Gets loadBalancerIP
     * @return string
     */
    public function getLoadBalancerIP()
    {
        return $this->container['loadBalancerIP'];
    }

    /**
     * Sets loadBalancerIP
     * @param string $loadBalancerIP
     * @return $this
     */
    public function setLoadBalancerIP($loadBalancerIP)
    {
        $this->container['loadBalancerIP'] = $loadBalancerIP;

        return $this;
    }


    /**
     * Gets loadBalancerSourceRanges
     * @return string[]
     */
    public function getLoadBalancerSourceRanges()
    {
        return $this->container['loadBalancerSourceRanges'];
    }

    /**
     * Sets loadBalancerSourceRanges
     * @param string[] $loadBalancerSourceRanges
     * @return $this
     */
    public function setLoadBalancerSourceRanges($loadBalancerSourceRanges)
    {
        $this->container['loadBalancerSourceRanges'] = $loadBalancerSourceRanges;

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
     * Gets ports
     * @return \Rancher\Model\ServicePort[]
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     * @param \Rancher\Model\ServicePort[] $ports
     * @return $this
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

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
     * Gets publishNotReadyAddresses
     * @return boolean
     */
    public function getPublishNotReadyAddresses()
    {
        return $this->container['publishNotReadyAddresses'];
    }

    /**
     * Sets publishNotReadyAddresses
     * @param boolean $publishNotReadyAddresses
     * @return $this
     */
    public function setPublishNotReadyAddresses($publishNotReadyAddresses)
    {
        $this->container['publishNotReadyAddresses'] = $publishNotReadyAddresses;

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
     * Gets selector
     * @return string[]
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     * @param string[] $selector
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

        return $this;
    }


    /**
     * Gets sessionAffinity
     * @return string
     */
    public function getSessionAffinity()
    {
        return $this->container['sessionAffinity'];
    }

    /**
     * Sets sessionAffinity
     * @param string $sessionAffinity
     * @return $this
     */
    public function setSessionAffinity($sessionAffinity)
    {
        $this->container['sessionAffinity'] = $sessionAffinity;

        return $this;
    }


    /**
     * Gets sessionAffinityConfig
     * @return \Rancher\Model\SessionAffinityConfig
     */
    public function getSessionAffinityConfig()
    {
        return $this->container['sessionAffinityConfig'];
    }

    /**
     * Sets sessionAffinityConfig
     * @param \Rancher\Model\SessionAffinityConfig $sessionAffinityConfig
     * @return $this
     */
    public function setSessionAffinityConfig($sessionAffinityConfig)
    {
        $this->container['sessionAffinityConfig'] = $sessionAffinityConfig;

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
     * Gets targetDnsRecordIds
     * @return \Rancher\Model\Reference[dnsRecord][]
     */
    public function getTargetDnsRecordIds()
    {
        return $this->container['targetDnsRecordIds'];
    }

    /**
     * Sets targetDnsRecordIds
     * @param \Rancher\Model\Reference[dnsRecord][] $targetDnsRecordIds
     * @return $this
     */
    public function setTargetDnsRecordIds($targetDnsRecordIds)
    {
        $this->container['targetDnsRecordIds'] = $targetDnsRecordIds;

        return $this;
    }


    /**
     * Gets targetWorkloadIds
     * @return \Rancher\Model\Reference[workload][]
     */
    public function getTargetWorkloadIds()
    {
        return $this->container['targetWorkloadIds'];
    }

    /**
     * Sets targetWorkloadIds
     * @param \Rancher\Model\Reference[workload][] $targetWorkloadIds
     * @return $this
     */
    public function setTargetWorkloadIds($targetWorkloadIds)
    {
        $this->container['targetWorkloadIds'] = $targetWorkloadIds;

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

