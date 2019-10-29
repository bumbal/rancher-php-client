<?php

namespace Rancher\Model;

use \ArrayAccess;

class Cluster implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'agentImage' => 'string',
        'allocatable' => 'map[string]',
        'amazonElasticContainerServiceConfig' => '\Rancher\Model\AmazonElasticContainerServiceConfig',
        'annotations' => 'map[string]',
        'apiEndpoint' => 'string',
        'appliedEnableNetworkPolicy' => 'boolean',
        'appliedPodSecurityPolicyTemplateId' => 'string',
        'appliedSpec' => '\Rancher\Model\ClusterSpec',
        'authImage' => 'string',
        'azureKubernetesServiceConfig' => '\Rancher\Model\AzureKubernetesServiceConfig',
        'caCert' => 'string',
        'capabilities' => '\Rancher\Model\Capabilities',
        'capacity' => 'map[string]',
        'certificatesExpiration' => 'map[\Rancher\Model\CertExpiration]',
        'componentStatuses' => '\Rancher\Model\ClusterComponentStatus[]',
        'conditions' => '\Rancher\Model\ClusterCondition[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'defaultClusterRoleForProjectMembers' => 'string',
        'defaultPodSecurityPolicyTemplateId' => 'string',
        'description' => 'string',
        'desiredAgentImage' => 'string',
        'desiredAuthImage' => 'string',
        'dockerRootDir' => 'string',
        'driver' => 'string',
        'enableClusterAlerting' => 'boolean',
        'enableClusterMonitoring' => 'boolean',
        'enableNetworkPolicy' => 'boolean',
        'failedSpec' => '\Rancher\Model\ClusterSpec',
        'googleKubernetesEngineConfig' => '\Rancher\Model\GoogleKubernetesEngineConfig',
        'id' => 'string',
        'importedConfig' => '\Rancher\Model\ImportedConfig',
        'internal' => 'boolean',
        'labels' => 'map[string]',
        'limits' => 'map[string]',
        'localClusterAuthEndpoint' => '\Rancher\Model\LocalClusterAuthEndpoint',
        'monitoringStatus' => '\Rancher\Model\MonitoringStatus',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'rancherKubernetesEngineConfig' => '\Rancher\Model\RancherKubernetesEngineConfig',
        'removed' => '\DateTime',
        'requested' => 'map[string]',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'version' => '\Rancher\Model\Info',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'agentImage' => 'setAgentImage',
        'allocatable' => 'setAllocatable',
        'amazonElasticContainerServiceConfig' => 'setAmazonElasticContainerServiceConfig',
        'annotations' => 'setAnnotations',
        'apiEndpoint' => 'setApiEndpoint',
        'appliedEnableNetworkPolicy' => 'setAppliedEnableNetworkPolicy',
        'appliedPodSecurityPolicyTemplateId' => 'setAppliedPodSecurityPolicyTemplateId',
        'appliedSpec' => 'setAppliedSpec',
        'authImage' => 'setAuthImage',
        'azureKubernetesServiceConfig' => 'setAzureKubernetesServiceConfig',
        'caCert' => 'setCaCert',
        'capabilities' => 'setCapabilities',
        'capacity' => 'setCapacity',
        'certificatesExpiration' => 'setCertificatesExpiration',
        'componentStatuses' => 'setComponentStatuses',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'defaultClusterRoleForProjectMembers' => 'setDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityPolicyTemplateId' => 'setDefaultPodSecurityPolicyTemplateId',
        'description' => 'setDescription',
        'desiredAgentImage' => 'setDesiredAgentImage',
        'desiredAuthImage' => 'setDesiredAuthImage',
        'dockerRootDir' => 'setDockerRootDir',
        'driver' => 'setDriver',
        'enableClusterAlerting' => 'setEnableClusterAlerting',
        'enableClusterMonitoring' => 'setEnableClusterMonitoring',
        'enableNetworkPolicy' => 'setEnableNetworkPolicy',
        'failedSpec' => 'setFailedSpec',
        'googleKubernetesEngineConfig' => 'setGoogleKubernetesEngineConfig',
        'id' => 'setId',
        'importedConfig' => 'setImportedConfig',
        'internal' => 'setInternal',
        'labels' => 'setLabels',
        'limits' => 'setLimits',
        'localClusterAuthEndpoint' => 'setLocalClusterAuthEndpoint',
        'monitoringStatus' => 'setMonitoringStatus',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'rancherKubernetesEngineConfig' => 'setRancherKubernetesEngineConfig',
        'removed' => 'setRemoved',
        'requested' => 'setRequested',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'agentImage' => 'getAgentImage',
        'allocatable' => 'getAllocatable',
        'amazonElasticContainerServiceConfig' => 'getAmazonElasticContainerServiceConfig',
        'annotations' => 'getAnnotations',
        'apiEndpoint' => 'getApiEndpoint',
        'appliedEnableNetworkPolicy' => 'getAppliedEnableNetworkPolicy',
        'appliedPodSecurityPolicyTemplateId' => 'getAppliedPodSecurityPolicyTemplateId',
        'appliedSpec' => 'getAppliedSpec',
        'authImage' => 'getAuthImage',
        'azureKubernetesServiceConfig' => 'getAzureKubernetesServiceConfig',
        'caCert' => 'getCaCert',
        'capabilities' => 'getCapabilities',
        'capacity' => 'getCapacity',
        'certificatesExpiration' => 'getCertificatesExpiration',
        'componentStatuses' => 'getComponentStatuses',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'defaultClusterRoleForProjectMembers' => 'getDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityPolicyTemplateId' => 'getDefaultPodSecurityPolicyTemplateId',
        'description' => 'getDescription',
        'desiredAgentImage' => 'getDesiredAgentImage',
        'desiredAuthImage' => 'getDesiredAuthImage',
        'dockerRootDir' => 'getDockerRootDir',
        'driver' => 'getDriver',
        'enableClusterAlerting' => 'getEnableClusterAlerting',
        'enableClusterMonitoring' => 'getEnableClusterMonitoring',
        'enableNetworkPolicy' => 'getEnableNetworkPolicy',
        'failedSpec' => 'getFailedSpec',
        'googleKubernetesEngineConfig' => 'getGoogleKubernetesEngineConfig',
        'id' => 'getId',
        'importedConfig' => 'getImportedConfig',
        'internal' => 'getInternal',
        'labels' => 'getLabels',
        'limits' => 'getLimits',
        'localClusterAuthEndpoint' => 'getLocalClusterAuthEndpoint',
        'monitoringStatus' => 'getMonitoringStatus',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'rancherKubernetesEngineConfig' => 'getRancherKubernetesEngineConfig',
        'removed' => 'getRemoved',
        'requested' => 'getRequested',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['agentImage'] = isset($data['agentImage']) ? $data['agentImage'] : null;
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['amazonElasticContainerServiceConfig'] = isset($data['amazonElasticContainerServiceConfig']) ? $data['amazonElasticContainerServiceConfig'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['apiEndpoint'] = isset($data['apiEndpoint']) ? $data['apiEndpoint'] : null;
        $this->container['appliedEnableNetworkPolicy'] = isset($data['appliedEnableNetworkPolicy']) ? $data['appliedEnableNetworkPolicy'] : null;
        $this->container['appliedPodSecurityPolicyTemplateId'] = isset($data['appliedPodSecurityPolicyTemplateId']) ? $data['appliedPodSecurityPolicyTemplateId'] : null;
        $this->container['appliedSpec'] = isset($data['appliedSpec']) ? $data['appliedSpec'] : null;
        $this->container['authImage'] = isset($data['authImage']) ? $data['authImage'] : null;
        $this->container['azureKubernetesServiceConfig'] = isset($data['azureKubernetesServiceConfig']) ? $data['azureKubernetesServiceConfig'] : null;
        $this->container['caCert'] = isset($data['caCert']) ? $data['caCert'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['certificatesExpiration'] = isset($data['certificatesExpiration']) ? $data['certificatesExpiration'] : null;
        $this->container['componentStatuses'] = isset($data['componentStatuses']) ? $data['componentStatuses'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['defaultClusterRoleForProjectMembers'] = isset($data['defaultClusterRoleForProjectMembers']) ? $data['defaultClusterRoleForProjectMembers'] : null;
        $this->container['defaultPodSecurityPolicyTemplateId'] = isset($data['defaultPodSecurityPolicyTemplateId']) ? $data['defaultPodSecurityPolicyTemplateId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['desiredAgentImage'] = isset($data['desiredAgentImage']) ? $data['desiredAgentImage'] : null;
        $this->container['desiredAuthImage'] = isset($data['desiredAuthImage']) ? $data['desiredAuthImage'] : null;
        $this->container['dockerRootDir'] = isset($data['dockerRootDir']) ? $data['dockerRootDir'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['enableClusterAlerting'] = isset($data['enableClusterAlerting']) ? $data['enableClusterAlerting'] : null;
        $this->container['enableClusterMonitoring'] = isset($data['enableClusterMonitoring']) ? $data['enableClusterMonitoring'] : null;
        $this->container['enableNetworkPolicy'] = isset($data['enableNetworkPolicy']) ? $data['enableNetworkPolicy'] : null;
        $this->container['failedSpec'] = isset($data['failedSpec']) ? $data['failedSpec'] : null;
        $this->container['googleKubernetesEngineConfig'] = isset($data['googleKubernetesEngineConfig']) ? $data['googleKubernetesEngineConfig'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['importedConfig'] = isset($data['importedConfig']) ? $data['importedConfig'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['localClusterAuthEndpoint'] = isset($data['localClusterAuthEndpoint']) ? $data['localClusterAuthEndpoint'] : null;
        $this->container['monitoringStatus'] = isset($data['monitoringStatus']) ? $data['monitoringStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['rancherKubernetesEngineConfig'] = isset($data['rancherKubernetesEngineConfig']) ? $data['rancherKubernetesEngineConfig'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['requested'] = isset($data['requested']) ? $data['requested'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets agentImage
     * @return string
     */
    public function getAgentImage()
    {
        return $this->container['agentImage'];
    }

    /**
     * Sets agentImage
     * @param string $agentImage
     * @return $this
     */
    public function setAgentImage($agentImage)
    {
        $this->container['agentImage'] = $agentImage;

        return $this;
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
     * Gets amazonElasticContainerServiceConfig
     * @return \Rancher\Model\AmazonElasticContainerServiceConfig
     */
    public function getAmazonElasticContainerServiceConfig()
    {
        return $this->container['amazonElasticContainerServiceConfig'];
    }

    /**
     * Sets amazonElasticContainerServiceConfig
     * @param \Rancher\Model\AmazonElasticContainerServiceConfig $amazonElasticContainerServiceConfig
     * @return $this
     */
    public function setAmazonElasticContainerServiceConfig($amazonElasticContainerServiceConfig)
    {
        $this->container['amazonElasticContainerServiceConfig'] = $amazonElasticContainerServiceConfig;

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
     * Gets apiEndpoint
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->container['apiEndpoint'];
    }

    /**
     * Sets apiEndpoint
     * @param string $apiEndpoint
     * @return $this
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->container['apiEndpoint'] = $apiEndpoint;

        return $this;
    }


    /**
     * Gets appliedEnableNetworkPolicy
     * @return boolean
     */
    public function getAppliedEnableNetworkPolicy()
    {
        return $this->container['appliedEnableNetworkPolicy'];
    }

    /**
     * Sets appliedEnableNetworkPolicy
     * @param boolean $appliedEnableNetworkPolicy
     * @return $this
     */
    public function setAppliedEnableNetworkPolicy($appliedEnableNetworkPolicy)
    {
        $this->container['appliedEnableNetworkPolicy'] = $appliedEnableNetworkPolicy;

        return $this;
    }


    /**
     * Gets appliedPodSecurityPolicyTemplateId
     * @return string
     */
    public function getAppliedPodSecurityPolicyTemplateId()
    {
        return $this->container['appliedPodSecurityPolicyTemplateId'];
    }

    /**
     * Sets appliedPodSecurityPolicyTemplateId
     * @param string $appliedPodSecurityPolicyTemplateId
     * @return $this
     */
    public function setAppliedPodSecurityPolicyTemplateId($appliedPodSecurityPolicyTemplateId)
    {
        $this->container['appliedPodSecurityPolicyTemplateId'] = $appliedPodSecurityPolicyTemplateId;

        return $this;
    }


    /**
     * Gets appliedSpec
     * @return \Rancher\Model\ClusterSpec
     */
    public function getAppliedSpec()
    {
        return $this->container['appliedSpec'];
    }

    /**
     * Sets appliedSpec
     * @param \Rancher\Model\ClusterSpec $appliedSpec
     * @return $this
     */
    public function setAppliedSpec($appliedSpec)
    {
        $this->container['appliedSpec'] = $appliedSpec;

        return $this;
    }


    /**
     * Gets authImage
     * @return string
     */
    public function getAuthImage()
    {
        return $this->container['authImage'];
    }

    /**
     * Sets authImage
     * @param string $authImage
     * @return $this
     */
    public function setAuthImage($authImage)
    {
        $this->container['authImage'] = $authImage;

        return $this;
    }


    /**
     * Gets azureKubernetesServiceConfig
     * @return \Rancher\Model\AzureKubernetesServiceConfig
     */
    public function getAzureKubernetesServiceConfig()
    {
        return $this->container['azureKubernetesServiceConfig'];
    }

    /**
     * Sets azureKubernetesServiceConfig
     * @param \Rancher\Model\AzureKubernetesServiceConfig $azureKubernetesServiceConfig
     * @return $this
     */
    public function setAzureKubernetesServiceConfig($azureKubernetesServiceConfig)
    {
        $this->container['azureKubernetesServiceConfig'] = $azureKubernetesServiceConfig;

        return $this;
    }


    /**
     * Gets caCert
     * @return string
     */
    public function getCaCert()
    {
        return $this->container['caCert'];
    }

    /**
     * Sets caCert
     * @param string $caCert
     * @return $this
     */
    public function setCaCert($caCert)
    {
        $this->container['caCert'] = $caCert;

        return $this;
    }


    /**
     * Gets capabilities
     * @return \Rancher\Model\Capabilities
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     * @param \Rancher\Model\Capabilities $capabilities
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

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
     * Gets certificatesExpiration
     * @return \Rancher\Model\CertExpiration[]
     */
    public function getCertificatesExpiration()
    {
        return $this->container['certificatesExpiration'];
    }

    /**
     * Sets certificatesExpiration
     * @param \Rancher\Model\CertExpiration[] $certificatesExpiration
     * @return $this
     */
    public function setCertificatesExpiration($certificatesExpiration)
    {
        $this->container['certificatesExpiration'] = $certificatesExpiration;

        return $this;
    }


    /**
     * Gets componentStatuses
     * @return \Rancher\Model\ClusterComponentStatus[]
     */
    public function getComponentStatuses()
    {
        return $this->container['componentStatuses'];
    }

    /**
     * Sets componentStatuses
     * @param \Rancher\Model\ClusterComponentStatus[] $componentStatuses
     * @return $this
     */
    public function setComponentStatuses($componentStatuses)
    {
        $this->container['componentStatuses'] = $componentStatuses;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\ClusterCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\ClusterCondition[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
     * Gets defaultClusterRoleForProjectMembers
     * @return string
     */
    public function getDefaultClusterRoleForProjectMembers()
    {
        return $this->container['defaultClusterRoleForProjectMembers'];
    }

    /**
     * Sets defaultClusterRoleForProjectMembers
     * @param string $defaultClusterRoleForProjectMembers
     * @return $this
     */
    public function setDefaultClusterRoleForProjectMembers($defaultClusterRoleForProjectMembers)
    {
        $this->container['defaultClusterRoleForProjectMembers'] = $defaultClusterRoleForProjectMembers;

        return $this;
    }


    /**
     * Gets defaultPodSecurityPolicyTemplateId
     * @return string
     */
    public function getDefaultPodSecurityPolicyTemplateId()
    {
        return $this->container['defaultPodSecurityPolicyTemplateId'];
    }

    /**
     * Sets defaultPodSecurityPolicyTemplateId
     * @param string $defaultPodSecurityPolicyTemplateId
     * @return $this
     */
    public function setDefaultPodSecurityPolicyTemplateId($defaultPodSecurityPolicyTemplateId)
    {
        $this->container['defaultPodSecurityPolicyTemplateId'] = $defaultPodSecurityPolicyTemplateId;

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
     * Gets desiredAgentImage
     * @return string
     */
    public function getDesiredAgentImage()
    {
        return $this->container['desiredAgentImage'];
    }

    /**
     * Sets desiredAgentImage
     * @param string $desiredAgentImage
     * @return $this
     */
    public function setDesiredAgentImage($desiredAgentImage)
    {
        $this->container['desiredAgentImage'] = $desiredAgentImage;

        return $this;
    }


    /**
     * Gets desiredAuthImage
     * @return string
     */
    public function getDesiredAuthImage()
    {
        return $this->container['desiredAuthImage'];
    }

    /**
     * Sets desiredAuthImage
     * @param string $desiredAuthImage
     * @return $this
     */
    public function setDesiredAuthImage($desiredAuthImage)
    {
        $this->container['desiredAuthImage'] = $desiredAuthImage;

        return $this;
    }


    /**
     * Gets dockerRootDir
     * @return string
     */
    public function getDockerRootDir()
    {
        return $this->container['dockerRootDir'];
    }

    /**
     * Sets dockerRootDir
     * @param string $dockerRootDir
     * @return $this
     */
    public function setDockerRootDir($dockerRootDir)
    {
        $this->container['dockerRootDir'] = $dockerRootDir;

        return $this;
    }


    /**
     * Gets driver
     * @return string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     * @param string $driver
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

        return $this;
    }


    /**
     * Gets enableClusterAlerting
     * @return boolean
     */
    public function getEnableClusterAlerting()
    {
        return $this->container['enableClusterAlerting'];
    }

    /**
     * Sets enableClusterAlerting
     * @param boolean $enableClusterAlerting
     * @return $this
     */
    public function setEnableClusterAlerting($enableClusterAlerting)
    {
        $this->container['enableClusterAlerting'] = $enableClusterAlerting;

        return $this;
    }


    /**
     * Gets enableClusterMonitoring
     * @return boolean
     */
    public function getEnableClusterMonitoring()
    {
        return $this->container['enableClusterMonitoring'];
    }

    /**
     * Sets enableClusterMonitoring
     * @param boolean $enableClusterMonitoring
     * @return $this
     */
    public function setEnableClusterMonitoring($enableClusterMonitoring)
    {
        $this->container['enableClusterMonitoring'] = $enableClusterMonitoring;

        return $this;
    }


    /**
     * Gets enableNetworkPolicy
     * @return boolean
     */
    public function getEnableNetworkPolicy()
    {
        return $this->container['enableNetworkPolicy'];
    }

    /**
     * Sets enableNetworkPolicy
     * @param boolean $enableNetworkPolicy
     * @return $this
     */
    public function setEnableNetworkPolicy($enableNetworkPolicy)
    {
        $this->container['enableNetworkPolicy'] = $enableNetworkPolicy;

        return $this;
    }


    /**
     * Gets failedSpec
     * @return \Rancher\Model\ClusterSpec
     */
    public function getFailedSpec()
    {
        return $this->container['failedSpec'];
    }

    /**
     * Sets failedSpec
     * @param \Rancher\Model\ClusterSpec $failedSpec
     * @return $this
     */
    public function setFailedSpec($failedSpec)
    {
        $this->container['failedSpec'] = $failedSpec;

        return $this;
    }


    /**
     * Gets googleKubernetesEngineConfig
     * @return \Rancher\Model\GoogleKubernetesEngineConfig
     */
    public function getGoogleKubernetesEngineConfig()
    {
        return $this->container['googleKubernetesEngineConfig'];
    }

    /**
     * Sets googleKubernetesEngineConfig
     * @param \Rancher\Model\GoogleKubernetesEngineConfig $googleKubernetesEngineConfig
     * @return $this
     */
    public function setGoogleKubernetesEngineConfig($googleKubernetesEngineConfig)
    {
        $this->container['googleKubernetesEngineConfig'] = $googleKubernetesEngineConfig;

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
     * Gets importedConfig
     * @return \Rancher\Model\ImportedConfig
     */
    public function getImportedConfig()
    {
        return $this->container['importedConfig'];
    }

    /**
     * Sets importedConfig
     * @param \Rancher\Model\ImportedConfig $importedConfig
     * @return $this
     */
    public function setImportedConfig($importedConfig)
    {
        $this->container['importedConfig'] = $importedConfig;

        return $this;
    }


    /**
     * Gets internal
     * @return boolean
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     * @param boolean $internal
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

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
     * Gets localClusterAuthEndpoint
     * @return \Rancher\Model\LocalClusterAuthEndpoint
     */
    public function getLocalClusterAuthEndpoint()
    {
        return $this->container['localClusterAuthEndpoint'];
    }

    /**
     * Sets localClusterAuthEndpoint
     * @param \Rancher\Model\LocalClusterAuthEndpoint $localClusterAuthEndpoint
     * @return $this
     */
    public function setLocalClusterAuthEndpoint($localClusterAuthEndpoint)
    {
        $this->container['localClusterAuthEndpoint'] = $localClusterAuthEndpoint;

        return $this;
    }


    /**
     * Gets monitoringStatus
     * @return \Rancher\Model\MonitoringStatus
     */
    public function getMonitoringStatus()
    {
        return $this->container['monitoringStatus'];
    }

    /**
     * Sets monitoringStatus
     * @param \Rancher\Model\MonitoringStatus $monitoringStatus
     * @return $this
     */
    public function setMonitoringStatus($monitoringStatus)
    {
        $this->container['monitoringStatus'] = $monitoringStatus;

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
     * Gets rancherKubernetesEngineConfig
     * @return \Rancher\Model\RancherKubernetesEngineConfig
     */
    public function getRancherKubernetesEngineConfig()
    {
        return $this->container['rancherKubernetesEngineConfig'];
    }

    /**
     * Sets rancherKubernetesEngineConfig
     * @param \Rancher\Model\RancherKubernetesEngineConfig $rancherKubernetesEngineConfig
     * @return $this
     */
    public function setRancherKubernetesEngineConfig($rancherKubernetesEngineConfig)
    {
        $this->container['rancherKubernetesEngineConfig'] = $rancherKubernetesEngineConfig;

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
     * Gets version
     * @return \Rancher\Model\Info
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param \Rancher\Model\Info $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

