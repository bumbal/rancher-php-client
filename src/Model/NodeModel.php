<?php

/**
 * NodeModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeModel implements ArrayAccess
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
        'amazonec2Config',
        'annotations',
        'azureConfig',
        'clusterId',
        'controlPlane',
        'customConfig',
        'description',
        'digitaloceanConfig',
        'etcd',
        'imported',
        'labels',
        'linodeConfig',
        'name',
        'namespaceId',
        'nodeTemplateId',
        'requestedHostname',
        'scaledownTime',
        'vmwarevsphereConfig',
        'worker',
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
        'annotations',
        'customConfig',
        'description',
        'imported',
        'labels',
        'name',
        'scaledownTime',
        'taints',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allocatable' => 'map[string,string]',
        'amazonec2Config' => '\Rancher\Model\Amazonec2configModel',
        'annotations' => 'map[string,string]',
        'appliedNodeVersion' => 'int',
        'azureConfig' => '\Rancher\Model\AzureconfigModel',
        'capacity' => 'map[string,string]',
        'clusterId' => 'string',
        'conditions' => '\Rancher\Model\NodeConditionModel[]',
        'controlPlane' => 'boolean',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'customConfig' => '\Rancher\Model\CustomConfigModel',
        'description' => 'string',
        'digitaloceanConfig' => '\Rancher\Model\DigitaloceanconfigModel',
        'dockerInfo' => '\Rancher\Model\DockerInfoModel',
        'etcd' => 'boolean',
        'externalIpAddress' => 'string',
        'hostname' => 'string',
        'id' => 'string',
        'imported' => 'boolean',
        'info' => '\Rancher\Model\NodeInfoModel',
        'ipAddress' => 'string',
        'labels' => 'map[string,string]',
        'limits' => 'map[string,string]',
        'linodeConfig' => '\Rancher\Model\LinodeconfigModel',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeName' => 'string',
        'nodePlan' => '\Rancher\Model\NodePlanModel',
        'nodePoolId' => 'string',
        'nodeTaints' => '\Rancher\Model\TaintModel[]',
        'nodeTemplateId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'podCidr' => 'string',
        'podCidrs' => 'string[]',
        'providerId' => 'string',
        'publicEndpoints' => '\Rancher\Model\PublicEndpointModel[]',
        'removed' => '\DateTime',
        'requested' => 'map[string,string]',
        'requestedHostname' => 'string',
        'scaledownTime' => 'string',
        'sshUser' => 'string',
        'state' => 'string',
        'taints' => '\Rancher\Model\TaintModel[]',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'unschedulable' => 'boolean',
        'uuid' => 'string',
        'vmwarevsphereConfig' => '\Rancher\Model\VmwarevsphereconfigModel',
        'volumesAttached' => 'map[string,\Rancher\Model\AttachedVolumeModel]',
        'volumesInUse' => 'string[]',
        'worker' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allocatable' => 'setAllocatable',
        'amazonec2Config' => 'setAmazonec2Config',
        'annotations' => 'setAnnotations',
        'appliedNodeVersion' => 'setAppliedNodeVersion',
        'azureConfig' => 'setAzureConfig',
        'capacity' => 'setCapacity',
        'clusterId' => 'setClusterId',
        'conditions' => 'setConditions',
        'controlPlane' => 'setControlPlane',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'customConfig' => 'setCustomConfig',
        'description' => 'setDescription',
        'digitaloceanConfig' => 'setDigitaloceanConfig',
        'dockerInfo' => 'setDockerInfo',
        'etcd' => 'setEtcd',
        'externalIpAddress' => 'setExternalIpAddress',
        'hostname' => 'setHostname',
        'id' => 'setId',
        'imported' => 'setImported',
        'info' => 'setInfo',
        'ipAddress' => 'setIpAddress',
        'labels' => 'setLabels',
        'limits' => 'setLimits',
        'linodeConfig' => 'setLinodeConfig',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeName' => 'setNodeName',
        'nodePlan' => 'setNodePlan',
        'nodePoolId' => 'setNodePoolId',
        'nodeTaints' => 'setNodeTaints',
        'nodeTemplateId' => 'setNodeTemplateId',
        'ownerReferences' => 'setOwnerReferences',
        'podCidr' => 'setPodCidr',
        'podCidrs' => 'setPodCidrs',
        'providerId' => 'setProviderId',
        'publicEndpoints' => 'setPublicEndpoints',
        'removed' => 'setRemoved',
        'requested' => 'setRequested',
        'requestedHostname' => 'setRequestedHostname',
        'scaledownTime' => 'setScaledownTime',
        'sshUser' => 'setSshUser',
        'state' => 'setState',
        'taints' => 'setTaints',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'unschedulable' => 'setUnschedulable',
        'uuid' => 'setUuid',
        'vmwarevsphereConfig' => 'setVmwarevsphereConfig',
        'volumesAttached' => 'setVolumesAttached',
        'volumesInUse' => 'setVolumesInUse',
        'worker' => 'setWorker',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allocatable' => 'getAllocatable',
        'amazonec2Config' => 'getAmazonec2Config',
        'annotations' => 'getAnnotations',
        'appliedNodeVersion' => 'getAppliedNodeVersion',
        'azureConfig' => 'getAzureConfig',
        'capacity' => 'getCapacity',
        'clusterId' => 'getClusterId',
        'conditions' => 'getConditions',
        'controlPlane' => 'getControlPlane',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'customConfig' => 'getCustomConfig',
        'description' => 'getDescription',
        'digitaloceanConfig' => 'getDigitaloceanConfig',
        'dockerInfo' => 'getDockerInfo',
        'etcd' => 'getEtcd',
        'externalIpAddress' => 'getExternalIpAddress',
        'hostname' => 'getHostname',
        'id' => 'getId',
        'imported' => 'getImported',
        'info' => 'getInfo',
        'ipAddress' => 'getIpAddress',
        'labels' => 'getLabels',
        'limits' => 'getLimits',
        'linodeConfig' => 'getLinodeConfig',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeName' => 'getNodeName',
        'nodePlan' => 'getNodePlan',
        'nodePoolId' => 'getNodePoolId',
        'nodeTaints' => 'getNodeTaints',
        'nodeTemplateId' => 'getNodeTemplateId',
        'ownerReferences' => 'getOwnerReferences',
        'podCidr' => 'getPodCidr',
        'podCidrs' => 'getPodCidrs',
        'providerId' => 'getProviderId',
        'publicEndpoints' => 'getPublicEndpoints',
        'removed' => 'getRemoved',
        'requested' => 'getRequested',
        'requestedHostname' => 'getRequestedHostname',
        'scaledownTime' => 'getScaledownTime',
        'sshUser' => 'getSshUser',
        'state' => 'getState',
        'taints' => 'getTaints',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'unschedulable' => 'getUnschedulable',
        'uuid' => 'getUuid',
        'vmwarevsphereConfig' => 'getVmwarevsphereConfig',
        'volumesAttached' => 'getVolumesAttached',
        'volumesInUse' => 'getVolumesInUse',
        'worker' => 'getWorker',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['amazonec2Config'] = isset($data['amazonec2Config']) ? $data['amazonec2Config'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['appliedNodeVersion'] = isset($data['appliedNodeVersion']) ? $data['appliedNodeVersion'] : null;
        $this->container['azureConfig'] = isset($data['azureConfig']) ? $data['azureConfig'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['controlPlane'] = isset($data['controlPlane']) ? $data['controlPlane'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['customConfig'] = isset($data['customConfig']) ? $data['customConfig'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['digitaloceanConfig'] = isset($data['digitaloceanConfig']) ? $data['digitaloceanConfig'] : null;
        $this->container['dockerInfo'] = isset($data['dockerInfo']) ? $data['dockerInfo'] : null;
        $this->container['etcd'] = isset($data['etcd']) ? $data['etcd'] : null;
        $this->container['externalIpAddress'] = isset($data['externalIpAddress']) ? $data['externalIpAddress'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['linodeConfig'] = isset($data['linodeConfig']) ? $data['linodeConfig'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodePlan'] = isset($data['nodePlan']) ? $data['nodePlan'] : null;
        $this->container['nodePoolId'] = isset($data['nodePoolId']) ? $data['nodePoolId'] : null;
        $this->container['nodeTaints'] = isset($data['nodeTaints']) ? $data['nodeTaints'] : null;
        $this->container['nodeTemplateId'] = isset($data['nodeTemplateId']) ? $data['nodeTemplateId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podCidr'] = isset($data['podCidr']) ? $data['podCidr'] : null;
        $this->container['podCidrs'] = isset($data['podCidrs']) ? $data['podCidrs'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['requested'] = isset($data['requested']) ? $data['requested'] : null;
        $this->container['requestedHostname'] = isset($data['requestedHostname']) ? $data['requestedHostname'] : null;
        $this->container['scaledownTime'] = isset($data['scaledownTime']) ? $data['scaledownTime'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['unschedulable'] = isset($data['unschedulable']) ? $data['unschedulable'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['vmwarevsphereConfig'] = isset($data['vmwarevsphereConfig']) ? $data['vmwarevsphereConfig'] : null;
        $this->container['volumesAttached'] = isset($data['volumesAttached']) ? $data['volumesAttached'] : null;
        $this->container['volumesInUse'] = isset($data['volumesInUse']) ? $data['volumesInUse'] : null;
        $this->container['worker'] = isset($data['worker']) ? $data['worker'] : null;
    }

    /**
     * Gets allocatable
     * @return string[]
     */
    public function getAllocatable()
    {
        return $this->container['allocatable'];
    }

    /**
     * Sets allocatable
     * @param string[] $allocatable
     * @return $this
     */
    public function setAllocatable($allocatable)
    {
        $this->container['allocatable'] = $allocatable;

        return $this;
    }


    /**
     * Gets amazonec2Config
     * @return \Rancher\Model\Amazonec2configModel
     */
    public function getAmazonec2Config()
    {
        return $this->container['amazonec2Config'];
    }

    /**
     * Sets amazonec2Config
     * @param \Rancher\Model\Amazonec2configModel $amazonec2Config
     * @return $this
     */
    public function setAmazonec2Config($amazonec2Config)
    {
        $this->container['amazonec2Config'] = $amazonec2Config;

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
     * Gets appliedNodeVersion
     * @return int
     */
    public function getAppliedNodeVersion()
    {
        return $this->container['appliedNodeVersion'];
    }

    /**
     * Sets appliedNodeVersion
     * @param int $appliedNodeVersion
     * @return $this
     */
    public function setAppliedNodeVersion($appliedNodeVersion)
    {
        $this->container['appliedNodeVersion'] = $appliedNodeVersion;

        return $this;
    }


    /**
     * Gets azureConfig
     * @return \Rancher\Model\AzureconfigModel
     */
    public function getAzureConfig()
    {
        return $this->container['azureConfig'];
    }

    /**
     * Sets azureConfig
     * @param \Rancher\Model\AzureconfigModel $azureConfig
     * @return $this
     */
    public function setAzureConfig($azureConfig)
    {
        $this->container['azureConfig'] = $azureConfig;

        return $this;
    }


    /**
     * Gets capacity
     * @return string[]
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param string[] $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }


    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\NodeConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\NodeConditionModel[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets controlPlane
     * @return boolean
     */
    public function getControlPlane()
    {
        return $this->container['controlPlane'];
    }

    /**
     * Sets controlPlane
     * @param boolean $controlPlane
     * @return $this
     */
    public function setControlPlane($controlPlane)
    {
        $this->container['controlPlane'] = $controlPlane;

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
     * Gets customConfig
     * @return \Rancher\Model\CustomConfigModel
     */
    public function getCustomConfig()
    {
        return $this->container['customConfig'];
    }

    /**
     * Sets customConfig
     * @param \Rancher\Model\CustomConfigModel $customConfig
     * @return $this
     */
    public function setCustomConfig($customConfig)
    {
        $this->container['customConfig'] = $customConfig;

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
     * Gets digitaloceanConfig
     * @return \Rancher\Model\DigitaloceanconfigModel
     */
    public function getDigitaloceanConfig()
    {
        return $this->container['digitaloceanConfig'];
    }

    /**
     * Sets digitaloceanConfig
     * @param \Rancher\Model\DigitaloceanconfigModel $digitaloceanConfig
     * @return $this
     */
    public function setDigitaloceanConfig($digitaloceanConfig)
    {
        $this->container['digitaloceanConfig'] = $digitaloceanConfig;

        return $this;
    }


    /**
     * Gets dockerInfo
     * @return \Rancher\Model\DockerInfoModel
     */
    public function getDockerInfo()
    {
        return $this->container['dockerInfo'];
    }

    /**
     * Sets dockerInfo
     * @param \Rancher\Model\DockerInfoModel $dockerInfo
     * @return $this
     */
    public function setDockerInfo($dockerInfo)
    {
        $this->container['dockerInfo'] = $dockerInfo;

        return $this;
    }


    /**
     * Gets etcd
     * @return boolean
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param boolean $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets externalIpAddress
     * @return string
     */
    public function getExternalIpAddress()
    {
        return $this->container['externalIpAddress'];
    }

    /**
     * Sets externalIpAddress
     * @param string $externalIpAddress
     * @return $this
     */
    public function setExternalIpAddress($externalIpAddress)
    {
        $this->container['externalIpAddress'] = $externalIpAddress;

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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets info
     * @return \Rancher\Model\NodeInfoModel
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Rancher\Model\NodeInfoModel $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }


    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

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
     * Gets limits
     * @return string[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     * @param string[] $limits
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }


    /**
     * Gets linodeConfig
     * @return \Rancher\Model\LinodeconfigModel
     */
    public function getLinodeConfig()
    {
        return $this->container['linodeConfig'];
    }

    /**
     * Sets linodeConfig
     * @param \Rancher\Model\LinodeconfigModel $linodeConfig
     * @return $this
     */
    public function setLinodeConfig($linodeConfig)
    {
        $this->container['linodeConfig'] = $linodeConfig;

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
     * Gets nodeName
     * @return string
     */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
     * Sets nodeName
     * @param string $nodeName
     * @return $this
     */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;

        return $this;
    }


    /**
     * Gets nodePlan
     * @return \Rancher\Model\NodePlanModel
     */
    public function getNodePlan()
    {
        return $this->container['nodePlan'];
    }

    /**
     * Sets nodePlan
     * @param \Rancher\Model\NodePlanModel $nodePlan
     * @return $this
     */
    public function setNodePlan($nodePlan)
    {
        $this->container['nodePlan'] = $nodePlan;

        return $this;
    }


    /**
     * Gets nodePoolId
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->container['nodePoolId'];
    }

    /**
     * Sets nodePoolId
     * @param string $nodePoolId
     * @return $this
     */
    public function setNodePoolId($nodePoolId)
    {
        $this->container['nodePoolId'] = $nodePoolId;

        return $this;
    }


    /**
     * Gets nodeTaints
     * @return \Rancher\Model\TaintModel[]
     */
    public function getNodeTaints()
    {
        return $this->container['nodeTaints'];
    }

    /**
     * Sets nodeTaints
     * @param \Rancher\Model\TaintModel[] $nodeTaints
     * @return $this
     */
    public function setNodeTaints($nodeTaints)
    {
        $this->container['nodeTaints'] = $nodeTaints;

        return $this;
    }


    /**
     * Gets nodeTemplateId
     * @return string
     */
    public function getNodeTemplateId()
    {
        return $this->container['nodeTemplateId'];
    }

    /**
     * Sets nodeTemplateId
     * @param string $nodeTemplateId
     * @return $this
     */
    public function setNodeTemplateId($nodeTemplateId)
    {
        $this->container['nodeTemplateId'] = $nodeTemplateId;

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
     * Gets podCidr
     * @return string
     */
    public function getPodCidr()
    {
        return $this->container['podCidr'];
    }

    /**
     * Sets podCidr
     * @param string $podCidr
     * @return $this
     */
    public function setPodCidr($podCidr)
    {
        $this->container['podCidr'] = $podCidr;

        return $this;
    }


    /**
     * Gets podCidrs
     * @return string[]
     */
    public function getPodCidrs()
    {
        return $this->container['podCidrs'];
    }

    /**
     * Sets podCidrs
     * @param string[] $podCidrs
     * @return $this
     */
    public function setPodCidrs($podCidrs)
    {
        $this->container['podCidrs'] = $podCidrs;

        return $this;
    }


    /**
     * Gets providerId
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     * @param string $providerId
     * @return $this
     */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;

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
     * Gets requested
     * @return string[]
     */
    public function getRequested()
    {
        return $this->container['requested'];
    }

    /**
     * Sets requested
     * @param string[] $requested
     * @return $this
     */
    public function setRequested($requested)
    {
        $this->container['requested'] = $requested;

        return $this;
    }


    /**
     * Gets requestedHostname
     * @return string
     */
    public function getRequestedHostname()
    {
        return $this->container['requestedHostname'];
    }

    /**
     * Sets requestedHostname
     * @param string $requestedHostname
     * @return $this
     */
    public function setRequestedHostname($requestedHostname)
    {
        $this->container['requestedHostname'] = $requestedHostname;

        return $this;
    }


    /**
     * Gets scaledownTime
     * @return string
     */
    public function getScaledownTime()
    {
        return $this->container['scaledownTime'];
    }

    /**
     * Sets scaledownTime
     * @param string $scaledownTime
     * @return $this
     */
    public function setScaledownTime($scaledownTime)
    {
        $this->container['scaledownTime'] = $scaledownTime;

        return $this;
    }


    /**
     * Gets sshUser
     * @return string
     */
    public function getSshUser()
    {
        return $this->container['sshUser'];
    }

    /**
     * Sets sshUser
     * @param string $sshUser
     * @return $this
     */
    public function setSshUser($sshUser)
    {
        $this->container['sshUser'] = $sshUser;

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
     * Gets taints
     * @return \Rancher\Model\TaintModel[]
     */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
     * Sets taints
     * @param \Rancher\Model\TaintModel[] $taints
     * @return $this
     */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;

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
     * Gets unschedulable
     * @return boolean
     */
    public function getUnschedulable()
    {
        return $this->container['unschedulable'];
    }

    /**
     * Sets unschedulable
     * @param boolean $unschedulable
     * @return $this
     */
    public function setUnschedulable($unschedulable)
    {
        $this->container['unschedulable'] = $unschedulable;

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
     * Gets vmwarevsphereConfig
     * @return \Rancher\Model\VmwarevsphereconfigModel
     */
    public function getVmwarevsphereConfig()
    {
        return $this->container['vmwarevsphereConfig'];
    }

    /**
     * Sets vmwarevsphereConfig
     * @param \Rancher\Model\VmwarevsphereconfigModel $vmwarevsphereConfig
     * @return $this
     */
    public function setVmwarevsphereConfig($vmwarevsphereConfig)
    {
        $this->container['vmwarevsphereConfig'] = $vmwarevsphereConfig;

        return $this;
    }


    /**
     * Gets volumesAttached
     * @return \Rancher\Model\AttachedVolumeModel[]
     */
    public function getVolumesAttached()
    {
        return $this->container['volumesAttached'];
    }

    /**
     * Sets volumesAttached
     * @param \Rancher\Model\AttachedVolumeModel[] $volumesAttached
     * @return $this
     */
    public function setVolumesAttached($volumesAttached)
    {
        $this->container['volumesAttached'] = $volumesAttached;

        return $this;
    }


    /**
     * Gets volumesInUse
     * @return string[]
     */
    public function getVolumesInUse()
    {
        return $this->container['volumesInUse'];
    }

    /**
     * Sets volumesInUse
     * @param string[] $volumesInUse
     * @return $this
     */
    public function setVolumesInUse($volumesInUse)
    {
        $this->container['volumesInUse'] = $volumesInUse;

        return $this;
    }


    /**
     * Gets worker
     * @return boolean
     */
    public function getWorker()
    {
        return $this->container['worker'];
    }

    /**
     * Sets worker
     * @param boolean $worker
     * @return $this
     */
    public function setWorker($worker)
    {
        $this->container['worker'] = $worker;

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

