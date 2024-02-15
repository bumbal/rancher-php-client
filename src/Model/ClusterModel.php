<?php

/**
 * ClusterModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterModel implements ArrayAccess
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
        'agentEnvVars',
        'agentImageOverride',
        'aksConfig',
        'amazonElasticContainerServiceConfig',
        'annotations',
        'answers',
        'azureKubernetesServiceConfig',
        'clusterAgentDeploymentCustomization',
        'clusterTemplateRevisionId',
        'defaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId',
        'description',
        'desiredAgentImage',
        'desiredAuthImage',
        'dockerRootDir',
        'eksConfig',
        'enableClusterAlerting',
        'enableClusterMonitoring',
        'enableNetworkPolicy',
        'fleetAgentDeploymentCustomization',
        'fleetWorkspaceName',
        'gkeConfig',
        'googleKubernetesEngineConfig',
        'k3sConfig',
        'labels',
        'localClusterAuthEndpoint',
        'name',
        'rancherKubernetesEngineConfig',
        'rke2Config',
        'windowsPreferedCluster',
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
        'agentEnvVars',
        'agentImageOverride',
        'aksConfig',
        'amazonElasticContainerServiceConfig',
        'annotations',
        'answers',
        'azureKubernetesServiceConfig',
        'clusterAgentDeploymentCustomization',
        'clusterTemplateRevisionId',
        'defaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId',
        'description',
        'desiredAgentImage',
        'desiredAuthImage',
        'dockerRootDir',
        'eksConfig',
        'enableClusterAlerting',
        'enableClusterMonitoring',
        'enableNetworkPolicy',
        'fleetAgentDeploymentCustomization',
        'fleetWorkspaceName',
        'gkeConfig',
        'googleKubernetesEngineConfig',
        'k3sConfig',
        'labels',
        'localClusterAuthEndpoint',
        'name',
        'rancherKubernetesEngineConfig',
        'rke2Config',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aadClientCertSecret' => 'string',
        'aadClientSecret' => 'string',
        'agentEnvVars' => '\Rancher\Model\EnvVarModel[]',
        'agentFeatures' => 'map[string,boolean]',
        'agentImage' => 'string',
        'agentImageOverride' => 'string',
        'aksConfig' => '\Rancher\Model\AksClusterConfigSpecModel',
        'aksStatus' => '\Rancher\Model\AksStatusModel',
        'allocatable' => 'map[string,string]',
        'amazonElasticContainerServiceConfig' => '\Rancher\Model\AmazonElasticContainerServiceConfigModel',
        'annotations' => 'map[string,string]',
        'answers' => '\Rancher\Model\AnswerModel',
        'apiEndpoint' => 'string',
        'appliedAgentEnvVars' => '\Rancher\Model\EnvVarModel[]',
        'appliedClusterAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'appliedEnableNetworkPolicy' => 'boolean',
        'appliedPodSecurityPolicyTemplateId' => 'string',
        'appliedSpec' => '\Rancher\Model\ClusterSpecModel',
        'authImage' => 'string',
        'azureKubernetesServiceConfig' => '\Rancher\Model\AzureKubernetesServiceConfigModel',
        'caCert' => 'string',
        'capabilities' => '\Rancher\Model\CapabilitiesModel',
        'capacity' => 'map[string,string]',
        'certificatesExpiration' => 'map[string,\Rancher\Model\CertExpirationModel]',
        'clusterAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'clusterSecrets' => '\Rancher\Model\ClusterSecretsModel',
        'clusterTemplateId' => 'string',
        'clusterTemplateRevisionId' => 'string',
        'componentStatuses' => '\Rancher\Model\ClusterComponentStatusModel[]',
        'conditions' => '\Rancher\Model\ClusterConditionModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'currentCisRunName' => 'string',
        'defaultClusterRoleForProjectMembers' => 'string',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'string',
        'defaultPodSecurityPolicyTemplateId' => 'string',
        'description' => 'string',
        'desiredAgentImage' => 'string',
        'desiredAuthImage' => 'string',
        'dockerRootDir' => 'string',
        'driver' => 'string',
        'eksConfig' => '\Rancher\Model\EksClusterConfigSpecModel',
        'eksStatus' => '\Rancher\Model\EksStatusModel',
        'enableClusterAlerting' => 'boolean',
        'enableClusterMonitoring' => 'boolean',
        'enableNetworkPolicy' => 'boolean',
        'failedSpec' => '\Rancher\Model\ClusterSpecModel',
        'fleetAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'fleetWorkspaceName' => 'string',
        'gkeConfig' => '\Rancher\Model\GkeClusterConfigSpecModel',
        'gkeStatus' => '\Rancher\Model\GkeStatusModel',
        'googleKubernetesEngineConfig' => '\Rancher\Model\GoogleKubernetesEngineConfigModel',
        'id' => 'string',
        'importedConfig' => '\Rancher\Model\ImportedConfigModel',
        'internal' => 'boolean',
        'istioEnabled' => 'boolean',
        'k3sConfig' => '\Rancher\Model\K3sConfigModel',
        'labels' => 'map[string,string]',
        'limits' => 'map[string,string]',
        'linuxWorkerCount' => 'int',
        'localClusterAuthEndpoint' => '\Rancher\Model\LocalClusterAuthEndpointModel',
        'monitoringStatus' => '\Rancher\Model\MonitoringStatusModel',
        'name' => 'string',
        'nodeCount' => 'int',
        'nodeVersion' => 'int',
        'openStackSecret' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'privateRegistrySecret' => 'string',
        'provider' => 'string',
        'questions' => '\Rancher\Model\QuestionModel[]',
        'rancherKubernetesEngineConfig' => '\Rancher\Model\RancherKubernetesEngineConfigModel',
        'removed' => '\DateTime',
        'requested' => 'map[string,string]',
        'rke2Config' => '\Rancher\Model\Rke2ConfigModel',
        's3CredentialSecret' => 'string',
        'serviceAccountTokenSecret' => 'string',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'version' => '\Rancher\Model\InfoModel',
        'virtualCenterSecret' => 'string',
        'vsphereSecret' => 'string',
        'weavePasswordSecret' => 'string',
        'windowsPreferedCluster' => 'boolean',
        'windowsWorkerCount' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aadClientCertSecret' => 'setAadClientCertSecret',
        'aadClientSecret' => 'setAadClientSecret',
        'agentEnvVars' => 'setAgentEnvVars',
        'agentFeatures' => 'setAgentFeatures',
        'agentImage' => 'setAgentImage',
        'agentImageOverride' => 'setAgentImageOverride',
        'aksConfig' => 'setAksConfig',
        'aksStatus' => 'setAksStatus',
        'allocatable' => 'setAllocatable',
        'amazonElasticContainerServiceConfig' => 'setAmazonElasticContainerServiceConfig',
        'annotations' => 'setAnnotations',
        'answers' => 'setAnswers',
        'apiEndpoint' => 'setApiEndpoint',
        'appliedAgentEnvVars' => 'setAppliedAgentEnvVars',
        'appliedClusterAgentDeploymentCustomization' => 'setAppliedClusterAgentDeploymentCustomization',
        'appliedEnableNetworkPolicy' => 'setAppliedEnableNetworkPolicy',
        'appliedPodSecurityPolicyTemplateId' => 'setAppliedPodSecurityPolicyTemplateId',
        'appliedSpec' => 'setAppliedSpec',
        'authImage' => 'setAuthImage',
        'azureKubernetesServiceConfig' => 'setAzureKubernetesServiceConfig',
        'caCert' => 'setCaCert',
        'capabilities' => 'setCapabilities',
        'capacity' => 'setCapacity',
        'certificatesExpiration' => 'setCertificatesExpiration',
        'clusterAgentDeploymentCustomization' => 'setClusterAgentDeploymentCustomization',
        'clusterSecrets' => 'setClusterSecrets',
        'clusterTemplateId' => 'setClusterTemplateId',
        'clusterTemplateRevisionId' => 'setClusterTemplateRevisionId',
        'componentStatuses' => 'setComponentStatuses',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'currentCisRunName' => 'setCurrentCisRunName',
        'defaultClusterRoleForProjectMembers' => 'setDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'setDefaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId' => 'setDefaultPodSecurityPolicyTemplateId',
        'description' => 'setDescription',
        'desiredAgentImage' => 'setDesiredAgentImage',
        'desiredAuthImage' => 'setDesiredAuthImage',
        'dockerRootDir' => 'setDockerRootDir',
        'driver' => 'setDriver',
        'eksConfig' => 'setEksConfig',
        'eksStatus' => 'setEksStatus',
        'enableClusterAlerting' => 'setEnableClusterAlerting',
        'enableClusterMonitoring' => 'setEnableClusterMonitoring',
        'enableNetworkPolicy' => 'setEnableNetworkPolicy',
        'failedSpec' => 'setFailedSpec',
        'fleetAgentDeploymentCustomization' => 'setFleetAgentDeploymentCustomization',
        'fleetWorkspaceName' => 'setFleetWorkspaceName',
        'gkeConfig' => 'setGkeConfig',
        'gkeStatus' => 'setGkeStatus',
        'googleKubernetesEngineConfig' => 'setGoogleKubernetesEngineConfig',
        'id' => 'setId',
        'importedConfig' => 'setImportedConfig',
        'internal' => 'setInternal',
        'istioEnabled' => 'setIstioEnabled',
        'k3sConfig' => 'setK3sConfig',
        'labels' => 'setLabels',
        'limits' => 'setLimits',
        'linuxWorkerCount' => 'setLinuxWorkerCount',
        'localClusterAuthEndpoint' => 'setLocalClusterAuthEndpoint',
        'monitoringStatus' => 'setMonitoringStatus',
        'name' => 'setName',
        'nodeCount' => 'setNodeCount',
        'nodeVersion' => 'setNodeVersion',
        'openStackSecret' => 'setOpenStackSecret',
        'ownerReferences' => 'setOwnerReferences',
        'privateRegistrySecret' => 'setPrivateRegistrySecret',
        'provider' => 'setProvider',
        'questions' => 'setQuestions',
        'rancherKubernetesEngineConfig' => 'setRancherKubernetesEngineConfig',
        'removed' => 'setRemoved',
        'requested' => 'setRequested',
        'rke2Config' => 'setRke2Config',
        's3CredentialSecret' => 'setS3CredentialSecret',
        'serviceAccountTokenSecret' => 'setServiceAccountTokenSecret',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
        'virtualCenterSecret' => 'setVirtualCenterSecret',
        'vsphereSecret' => 'setVsphereSecret',
        'weavePasswordSecret' => 'setWeavePasswordSecret',
        'windowsPreferedCluster' => 'setWindowsPreferedCluster',
        'windowsWorkerCount' => 'setWindowsWorkerCount',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aadClientCertSecret' => 'getAadClientCertSecret',
        'aadClientSecret' => 'getAadClientSecret',
        'agentEnvVars' => 'getAgentEnvVars',
        'agentFeatures' => 'getAgentFeatures',
        'agentImage' => 'getAgentImage',
        'agentImageOverride' => 'getAgentImageOverride',
        'aksConfig' => 'getAksConfig',
        'aksStatus' => 'getAksStatus',
        'allocatable' => 'getAllocatable',
        'amazonElasticContainerServiceConfig' => 'getAmazonElasticContainerServiceConfig',
        'annotations' => 'getAnnotations',
        'answers' => 'getAnswers',
        'apiEndpoint' => 'getApiEndpoint',
        'appliedAgentEnvVars' => 'getAppliedAgentEnvVars',
        'appliedClusterAgentDeploymentCustomization' => 'getAppliedClusterAgentDeploymentCustomization',
        'appliedEnableNetworkPolicy' => 'getAppliedEnableNetworkPolicy',
        'appliedPodSecurityPolicyTemplateId' => 'getAppliedPodSecurityPolicyTemplateId',
        'appliedSpec' => 'getAppliedSpec',
        'authImage' => 'getAuthImage',
        'azureKubernetesServiceConfig' => 'getAzureKubernetesServiceConfig',
        'caCert' => 'getCaCert',
        'capabilities' => 'getCapabilities',
        'capacity' => 'getCapacity',
        'certificatesExpiration' => 'getCertificatesExpiration',
        'clusterAgentDeploymentCustomization' => 'getClusterAgentDeploymentCustomization',
        'clusterSecrets' => 'getClusterSecrets',
        'clusterTemplateId' => 'getClusterTemplateId',
        'clusterTemplateRevisionId' => 'getClusterTemplateRevisionId',
        'componentStatuses' => 'getComponentStatuses',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'currentCisRunName' => 'getCurrentCisRunName',
        'defaultClusterRoleForProjectMembers' => 'getDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'getDefaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId' => 'getDefaultPodSecurityPolicyTemplateId',
        'description' => 'getDescription',
        'desiredAgentImage' => 'getDesiredAgentImage',
        'desiredAuthImage' => 'getDesiredAuthImage',
        'dockerRootDir' => 'getDockerRootDir',
        'driver' => 'getDriver',
        'eksConfig' => 'getEksConfig',
        'eksStatus' => 'getEksStatus',
        'enableClusterAlerting' => 'getEnableClusterAlerting',
        'enableClusterMonitoring' => 'getEnableClusterMonitoring',
        'enableNetworkPolicy' => 'getEnableNetworkPolicy',
        'failedSpec' => 'getFailedSpec',
        'fleetAgentDeploymentCustomization' => 'getFleetAgentDeploymentCustomization',
        'fleetWorkspaceName' => 'getFleetWorkspaceName',
        'gkeConfig' => 'getGkeConfig',
        'gkeStatus' => 'getGkeStatus',
        'googleKubernetesEngineConfig' => 'getGoogleKubernetesEngineConfig',
        'id' => 'getId',
        'importedConfig' => 'getImportedConfig',
        'internal' => 'getInternal',
        'istioEnabled' => 'getIstioEnabled',
        'k3sConfig' => 'getK3sConfig',
        'labels' => 'getLabels',
        'limits' => 'getLimits',
        'linuxWorkerCount' => 'getLinuxWorkerCount',
        'localClusterAuthEndpoint' => 'getLocalClusterAuthEndpoint',
        'monitoringStatus' => 'getMonitoringStatus',
        'name' => 'getName',
        'nodeCount' => 'getNodeCount',
        'nodeVersion' => 'getNodeVersion',
        'openStackSecret' => 'getOpenStackSecret',
        'ownerReferences' => 'getOwnerReferences',
        'privateRegistrySecret' => 'getPrivateRegistrySecret',
        'provider' => 'getProvider',
        'questions' => 'getQuestions',
        'rancherKubernetesEngineConfig' => 'getRancherKubernetesEngineConfig',
        'removed' => 'getRemoved',
        'requested' => 'getRequested',
        'rke2Config' => 'getRke2Config',
        's3CredentialSecret' => 'getS3CredentialSecret',
        'serviceAccountTokenSecret' => 'getServiceAccountTokenSecret',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
        'virtualCenterSecret' => 'getVirtualCenterSecret',
        'vsphereSecret' => 'getVsphereSecret',
        'weavePasswordSecret' => 'getWeavePasswordSecret',
        'windowsPreferedCluster' => 'getWindowsPreferedCluster',
        'windowsWorkerCount' => 'getWindowsWorkerCount',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aadClientCertSecret'] = isset($data['aadClientCertSecret']) ? $data['aadClientCertSecret'] : null;
        $this->container['aadClientSecret'] = isset($data['aadClientSecret']) ? $data['aadClientSecret'] : null;
        $this->container['agentEnvVars'] = isset($data['agentEnvVars']) ? $data['agentEnvVars'] : null;
        $this->container['agentFeatures'] = isset($data['agentFeatures']) ? $data['agentFeatures'] : null;
        $this->container['agentImage'] = isset($data['agentImage']) ? $data['agentImage'] : null;
        $this->container['agentImageOverride'] = isset($data['agentImageOverride']) ? $data['agentImageOverride'] : null;
        $this->container['aksConfig'] = isset($data['aksConfig']) ? $data['aksConfig'] : null;
        $this->container['aksStatus'] = isset($data['aksStatus']) ? $data['aksStatus'] : null;
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['amazonElasticContainerServiceConfig'] = isset($data['amazonElasticContainerServiceConfig']) ? $data['amazonElasticContainerServiceConfig'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['apiEndpoint'] = isset($data['apiEndpoint']) ? $data['apiEndpoint'] : null;
        $this->container['appliedAgentEnvVars'] = isset($data['appliedAgentEnvVars']) ? $data['appliedAgentEnvVars'] : null;
        $this->container['appliedClusterAgentDeploymentCustomization'] = isset($data['appliedClusterAgentDeploymentCustomization']) ? $data['appliedClusterAgentDeploymentCustomization'] : null;
        $this->container['appliedEnableNetworkPolicy'] = isset($data['appliedEnableNetworkPolicy']) ? $data['appliedEnableNetworkPolicy'] : null;
        $this->container['appliedPodSecurityPolicyTemplateId'] = isset($data['appliedPodSecurityPolicyTemplateId']) ? $data['appliedPodSecurityPolicyTemplateId'] : null;
        $this->container['appliedSpec'] = isset($data['appliedSpec']) ? $data['appliedSpec'] : null;
        $this->container['authImage'] = isset($data['authImage']) ? $data['authImage'] : null;
        $this->container['azureKubernetesServiceConfig'] = isset($data['azureKubernetesServiceConfig']) ? $data['azureKubernetesServiceConfig'] : null;
        $this->container['caCert'] = isset($data['caCert']) ? $data['caCert'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['certificatesExpiration'] = isset($data['certificatesExpiration']) ? $data['certificatesExpiration'] : null;
        $this->container['clusterAgentDeploymentCustomization'] = isset($data['clusterAgentDeploymentCustomization']) ? $data['clusterAgentDeploymentCustomization'] : null;
        $this->container['clusterSecrets'] = isset($data['clusterSecrets']) ? $data['clusterSecrets'] : null;
        $this->container['clusterTemplateId'] = isset($data['clusterTemplateId']) ? $data['clusterTemplateId'] : null;
        $this->container['clusterTemplateRevisionId'] = isset($data['clusterTemplateRevisionId']) ? $data['clusterTemplateRevisionId'] : null;
        $this->container['componentStatuses'] = isset($data['componentStatuses']) ? $data['componentStatuses'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['currentCisRunName'] = isset($data['currentCisRunName']) ? $data['currentCisRunName'] : null;
        $this->container['defaultClusterRoleForProjectMembers'] = isset($data['defaultClusterRoleForProjectMembers']) ? $data['defaultClusterRoleForProjectMembers'] : null;
        $this->container['defaultPodSecurityAdmissionConfigurationTemplateName'] = isset($data['defaultPodSecurityAdmissionConfigurationTemplateName']) ? $data['defaultPodSecurityAdmissionConfigurationTemplateName'] : null;
        $this->container['defaultPodSecurityPolicyTemplateId'] = isset($data['defaultPodSecurityPolicyTemplateId']) ? $data['defaultPodSecurityPolicyTemplateId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['desiredAgentImage'] = isset($data['desiredAgentImage']) ? $data['desiredAgentImage'] : null;
        $this->container['desiredAuthImage'] = isset($data['desiredAuthImage']) ? $data['desiredAuthImage'] : null;
        $this->container['dockerRootDir'] = isset($data['dockerRootDir']) ? $data['dockerRootDir'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['eksConfig'] = isset($data['eksConfig']) ? $data['eksConfig'] : null;
        $this->container['eksStatus'] = isset($data['eksStatus']) ? $data['eksStatus'] : null;
        $this->container['enableClusterAlerting'] = isset($data['enableClusterAlerting']) ? $data['enableClusterAlerting'] : null;
        $this->container['enableClusterMonitoring'] = isset($data['enableClusterMonitoring']) ? $data['enableClusterMonitoring'] : null;
        $this->container['enableNetworkPolicy'] = isset($data['enableNetworkPolicy']) ? $data['enableNetworkPolicy'] : null;
        $this->container['failedSpec'] = isset($data['failedSpec']) ? $data['failedSpec'] : null;
        $this->container['fleetAgentDeploymentCustomization'] = isset($data['fleetAgentDeploymentCustomization']) ? $data['fleetAgentDeploymentCustomization'] : null;
        $this->container['fleetWorkspaceName'] = isset($data['fleetWorkspaceName']) ? $data['fleetWorkspaceName'] : null;
        $this->container['gkeConfig'] = isset($data['gkeConfig']) ? $data['gkeConfig'] : null;
        $this->container['gkeStatus'] = isset($data['gkeStatus']) ? $data['gkeStatus'] : null;
        $this->container['googleKubernetesEngineConfig'] = isset($data['googleKubernetesEngineConfig']) ? $data['googleKubernetesEngineConfig'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['importedConfig'] = isset($data['importedConfig']) ? $data['importedConfig'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['istioEnabled'] = isset($data['istioEnabled']) ? $data['istioEnabled'] : null;
        $this->container['k3sConfig'] = isset($data['k3sConfig']) ? $data['k3sConfig'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['linuxWorkerCount'] = isset($data['linuxWorkerCount']) ? $data['linuxWorkerCount'] : null;
        $this->container['localClusterAuthEndpoint'] = isset($data['localClusterAuthEndpoint']) ? $data['localClusterAuthEndpoint'] : null;
        $this->container['monitoringStatus'] = isset($data['monitoringStatus']) ? $data['monitoringStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['nodeVersion'] = isset($data['nodeVersion']) ? $data['nodeVersion'] : null;
        $this->container['openStackSecret'] = isset($data['openStackSecret']) ? $data['openStackSecret'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['privateRegistrySecret'] = isset($data['privateRegistrySecret']) ? $data['privateRegistrySecret'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
        $this->container['rancherKubernetesEngineConfig'] = isset($data['rancherKubernetesEngineConfig']) ? $data['rancherKubernetesEngineConfig'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['requested'] = isset($data['requested']) ? $data['requested'] : null;
        $this->container['rke2Config'] = isset($data['rke2Config']) ? $data['rke2Config'] : null;
        $this->container['s3CredentialSecret'] = isset($data['s3CredentialSecret']) ? $data['s3CredentialSecret'] : null;
        $this->container['serviceAccountTokenSecret'] = isset($data['serviceAccountTokenSecret']) ? $data['serviceAccountTokenSecret'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['virtualCenterSecret'] = isset($data['virtualCenterSecret']) ? $data['virtualCenterSecret'] : null;
        $this->container['vsphereSecret'] = isset($data['vsphereSecret']) ? $data['vsphereSecret'] : null;
        $this->container['weavePasswordSecret'] = isset($data['weavePasswordSecret']) ? $data['weavePasswordSecret'] : null;
        $this->container['windowsPreferedCluster'] = isset($data['windowsPreferedCluster']) ? $data['windowsPreferedCluster'] : null;
        $this->container['windowsWorkerCount'] = isset($data['windowsWorkerCount']) ? $data['windowsWorkerCount'] : null;
    }

    /**
     * Gets aadClientCertSecret
     * @return string
     */
    public function getAadClientCertSecret()
    {
        return $this->container['aadClientCertSecret'];
    }

    /**
     * Sets aadClientCertSecret
     * @param string $aadClientCertSecret
     * @return $this
     */
    public function setAadClientCertSecret($aadClientCertSecret)
    {
        $this->container['aadClientCertSecret'] = $aadClientCertSecret;

        return $this;
    }


    /**
     * Gets aadClientSecret
     * @return string
     */
    public function getAadClientSecret()
    {
        return $this->container['aadClientSecret'];
    }

    /**
     * Sets aadClientSecret
     * @param string $aadClientSecret
     * @return $this
     */
    public function setAadClientSecret($aadClientSecret)
    {
        $this->container['aadClientSecret'] = $aadClientSecret;

        return $this;
    }


    /**
     * Gets agentEnvVars
     * @return \Rancher\Model\EnvVarModel[]
     */
    public function getAgentEnvVars()
    {
        return $this->container['agentEnvVars'];
    }

    /**
     * Sets agentEnvVars
     * @param \Rancher\Model\EnvVarModel[] $agentEnvVars
     * @return $this
     */
    public function setAgentEnvVars($agentEnvVars)
    {
        $this->container['agentEnvVars'] = $agentEnvVars;

        return $this;
    }


    /**
     * Gets agentFeatures
     * @return boolean[]
     */
    public function getAgentFeatures()
    {
        return $this->container['agentFeatures'];
    }

    /**
     * Sets agentFeatures
     * @param boolean[] $agentFeatures
     * @return $this
     */
    public function setAgentFeatures($agentFeatures)
    {
        $this->container['agentFeatures'] = $agentFeatures;

        return $this;
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
     * Gets agentImageOverride
     * @return string
     */
    public function getAgentImageOverride()
    {
        return $this->container['agentImageOverride'];
    }

    /**
     * Sets agentImageOverride
     * @param string $agentImageOverride
     * @return $this
     */
    public function setAgentImageOverride($agentImageOverride)
    {
        $this->container['agentImageOverride'] = $agentImageOverride;

        return $this;
    }


    /**
     * Gets aksConfig
     * @return \Rancher\Model\AksClusterConfigSpecModel
     */
    public function getAksConfig()
    {
        return $this->container['aksConfig'];
    }

    /**
     * Sets aksConfig
     * @param \Rancher\Model\AksClusterConfigSpecModel $aksConfig
     * @return $this
     */
    public function setAksConfig($aksConfig)
    {
        $this->container['aksConfig'] = $aksConfig;

        return $this;
    }


    /**
     * Gets aksStatus
     * @return \Rancher\Model\AksStatusModel
     */
    public function getAksStatus()
    {
        return $this->container['aksStatus'];
    }

    /**
     * Sets aksStatus
     * @param \Rancher\Model\AksStatusModel $aksStatus
     * @return $this
     */
    public function setAksStatus($aksStatus)
    {
        $this->container['aksStatus'] = $aksStatus;

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
     * @return \Rancher\Model\AmazonElasticContainerServiceConfigModel
     */
    public function getAmazonElasticContainerServiceConfig()
    {
        return $this->container['amazonElasticContainerServiceConfig'];
    }

    /**
     * Sets amazonElasticContainerServiceConfig
     * @param \Rancher\Model\AmazonElasticContainerServiceConfigModel $amazonElasticContainerServiceConfig
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
     * Gets answers
     * @return \Rancher\Model\AnswerModel
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param \Rancher\Model\AnswerModel $answers
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

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
     * Gets appliedAgentEnvVars
     * @return \Rancher\Model\EnvVarModel[]
     */
    public function getAppliedAgentEnvVars()
    {
        return $this->container['appliedAgentEnvVars'];
    }

    /**
     * Sets appliedAgentEnvVars
     * @param \Rancher\Model\EnvVarModel[] $appliedAgentEnvVars
     * @return $this
     */
    public function setAppliedAgentEnvVars($appliedAgentEnvVars)
    {
        $this->container['appliedAgentEnvVars'] = $appliedAgentEnvVars;

        return $this;
    }


    /**
     * Gets appliedClusterAgentDeploymentCustomization
     * @return \Rancher\Model\AgentDeploymentCustomizationModel
     */
    public function getAppliedClusterAgentDeploymentCustomization()
    {
        return $this->container['appliedClusterAgentDeploymentCustomization'];
    }

    /**
     * Sets appliedClusterAgentDeploymentCustomization
     * @param \Rancher\Model\AgentDeploymentCustomizationModel $appliedClusterAgentDeploymentCustomization
     * @return $this
     */
    public function setAppliedClusterAgentDeploymentCustomization($appliedClusterAgentDeploymentCustomization)
    {
        $this->container['appliedClusterAgentDeploymentCustomization'] = $appliedClusterAgentDeploymentCustomization;

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
     * @return \Rancher\Model\ClusterSpecModel
     */
    public function getAppliedSpec()
    {
        return $this->container['appliedSpec'];
    }

    /**
     * Sets appliedSpec
     * @param \Rancher\Model\ClusterSpecModel $appliedSpec
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
     * @return \Rancher\Model\AzureKubernetesServiceConfigModel
     */
    public function getAzureKubernetesServiceConfig()
    {
        return $this->container['azureKubernetesServiceConfig'];
    }

    /**
     * Sets azureKubernetesServiceConfig
     * @param \Rancher\Model\AzureKubernetesServiceConfigModel $azureKubernetesServiceConfig
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
     * @return \Rancher\Model\CapabilitiesModel
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     * @param \Rancher\Model\CapabilitiesModel $capabilities
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
     * @return \Rancher\Model\CertExpirationModel[]
     */
    public function getCertificatesExpiration()
    {
        return $this->container['certificatesExpiration'];
    }

    /**
     * Sets certificatesExpiration
     * @param \Rancher\Model\CertExpirationModel[] $certificatesExpiration
     * @return $this
     */
    public function setCertificatesExpiration($certificatesExpiration)
    {
        $this->container['certificatesExpiration'] = $certificatesExpiration;

        return $this;
    }


    /**
     * Gets clusterAgentDeploymentCustomization
     * @return \Rancher\Model\AgentDeploymentCustomizationModel
     */
    public function getClusterAgentDeploymentCustomization()
    {
        return $this->container['clusterAgentDeploymentCustomization'];
    }

    /**
     * Sets clusterAgentDeploymentCustomization
     * @param \Rancher\Model\AgentDeploymentCustomizationModel $clusterAgentDeploymentCustomization
     * @return $this
     */
    public function setClusterAgentDeploymentCustomization($clusterAgentDeploymentCustomization)
    {
        $this->container['clusterAgentDeploymentCustomization'] = $clusterAgentDeploymentCustomization;

        return $this;
    }


    /**
     * Gets clusterSecrets
     * @return \Rancher\Model\ClusterSecretsModel
     */
    public function getClusterSecrets()
    {
        return $this->container['clusterSecrets'];
    }

    /**
     * Sets clusterSecrets
     * @param \Rancher\Model\ClusterSecretsModel $clusterSecrets
     * @return $this
     */
    public function setClusterSecrets($clusterSecrets)
    {
        $this->container['clusterSecrets'] = $clusterSecrets;

        return $this;
    }


    /**
     * Gets clusterTemplateId
     * @return string
     */
    public function getClusterTemplateId()
    {
        return $this->container['clusterTemplateId'];
    }

    /**
     * Sets clusterTemplateId
     * @param string $clusterTemplateId
     * @return $this
     */
    public function setClusterTemplateId($clusterTemplateId)
    {
        $this->container['clusterTemplateId'] = $clusterTemplateId;

        return $this;
    }


    /**
     * Gets clusterTemplateRevisionId
     * @return string
     */
    public function getClusterTemplateRevisionId()
    {
        return $this->container['clusterTemplateRevisionId'];
    }

    /**
     * Sets clusterTemplateRevisionId
     * @param string $clusterTemplateRevisionId
     * @return $this
     */
    public function setClusterTemplateRevisionId($clusterTemplateRevisionId)
    {
        $this->container['clusterTemplateRevisionId'] = $clusterTemplateRevisionId;

        return $this;
    }


    /**
     * Gets componentStatuses
     * @return \Rancher\Model\ClusterComponentStatusModel[]
     */
    public function getComponentStatuses()
    {
        return $this->container['componentStatuses'];
    }

    /**
     * Sets componentStatuses
     * @param \Rancher\Model\ClusterComponentStatusModel[] $componentStatuses
     * @return $this
     */
    public function setComponentStatuses($componentStatuses)
    {
        $this->container['componentStatuses'] = $componentStatuses;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\ClusterConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\ClusterConditionModel[] $conditions
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
     * Gets currentCisRunName
     * @return string
     */
    public function getCurrentCisRunName()
    {
        return $this->container['currentCisRunName'];
    }

    /**
     * Sets currentCisRunName
     * @param string $currentCisRunName
     * @return $this
     */
    public function setCurrentCisRunName($currentCisRunName)
    {
        $this->container['currentCisRunName'] = $currentCisRunName;

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
     * Gets defaultPodSecurityAdmissionConfigurationTemplateName
     * @return string
     */
    public function getDefaultPodSecurityAdmissionConfigurationTemplateName()
    {
        return $this->container['defaultPodSecurityAdmissionConfigurationTemplateName'];
    }

    /**
     * Sets defaultPodSecurityAdmissionConfigurationTemplateName
     * @param string $defaultPodSecurityAdmissionConfigurationTemplateName
     * @return $this
     */
    public function setDefaultPodSecurityAdmissionConfigurationTemplateName($defaultPodSecurityAdmissionConfigurationTemplateName)
    {
        $this->container['defaultPodSecurityAdmissionConfigurationTemplateName'] = $defaultPodSecurityAdmissionConfigurationTemplateName;

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
     * Gets eksConfig
     * @return \Rancher\Model\EksClusterConfigSpecModel
     */
    public function getEksConfig()
    {
        return $this->container['eksConfig'];
    }

    /**
     * Sets eksConfig
     * @param \Rancher\Model\EksClusterConfigSpecModel $eksConfig
     * @return $this
     */
    public function setEksConfig($eksConfig)
    {
        $this->container['eksConfig'] = $eksConfig;

        return $this;
    }


    /**
     * Gets eksStatus
     * @return \Rancher\Model\EksStatusModel
     */
    public function getEksStatus()
    {
        return $this->container['eksStatus'];
    }

    /**
     * Sets eksStatus
     * @param \Rancher\Model\EksStatusModel $eksStatus
     * @return $this
     */
    public function setEksStatus($eksStatus)
    {
        $this->container['eksStatus'] = $eksStatus;

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
     * @return \Rancher\Model\ClusterSpecModel
     */
    public function getFailedSpec()
    {
        return $this->container['failedSpec'];
    }

    /**
     * Sets failedSpec
     * @param \Rancher\Model\ClusterSpecModel $failedSpec
     * @return $this
     */
    public function setFailedSpec($failedSpec)
    {
        $this->container['failedSpec'] = $failedSpec;

        return $this;
    }


    /**
     * Gets fleetAgentDeploymentCustomization
     * @return \Rancher\Model\AgentDeploymentCustomizationModel
     */
    public function getFleetAgentDeploymentCustomization()
    {
        return $this->container['fleetAgentDeploymentCustomization'];
    }

    /**
     * Sets fleetAgentDeploymentCustomization
     * @param \Rancher\Model\AgentDeploymentCustomizationModel $fleetAgentDeploymentCustomization
     * @return $this
     */
    public function setFleetAgentDeploymentCustomization($fleetAgentDeploymentCustomization)
    {
        $this->container['fleetAgentDeploymentCustomization'] = $fleetAgentDeploymentCustomization;

        return $this;
    }


    /**
     * Gets fleetWorkspaceName
     * @return string
     */
    public function getFleetWorkspaceName()
    {
        return $this->container['fleetWorkspaceName'];
    }

    /**
     * Sets fleetWorkspaceName
     * @param string $fleetWorkspaceName
     * @return $this
     */
    public function setFleetWorkspaceName($fleetWorkspaceName)
    {
        $this->container['fleetWorkspaceName'] = $fleetWorkspaceName;

        return $this;
    }


    /**
     * Gets gkeConfig
     * @return \Rancher\Model\GkeClusterConfigSpecModel
     */
    public function getGkeConfig()
    {
        return $this->container['gkeConfig'];
    }

    /**
     * Sets gkeConfig
     * @param \Rancher\Model\GkeClusterConfigSpecModel $gkeConfig
     * @return $this
     */
    public function setGkeConfig($gkeConfig)
    {
        $this->container['gkeConfig'] = $gkeConfig;

        return $this;
    }


    /**
     * Gets gkeStatus
     * @return \Rancher\Model\GkeStatusModel
     */
    public function getGkeStatus()
    {
        return $this->container['gkeStatus'];
    }

    /**
     * Sets gkeStatus
     * @param \Rancher\Model\GkeStatusModel $gkeStatus
     * @return $this
     */
    public function setGkeStatus($gkeStatus)
    {
        $this->container['gkeStatus'] = $gkeStatus;

        return $this;
    }


    /**
     * Gets googleKubernetesEngineConfig
     * @return \Rancher\Model\GoogleKubernetesEngineConfigModel
     */
    public function getGoogleKubernetesEngineConfig()
    {
        return $this->container['googleKubernetesEngineConfig'];
    }

    /**
     * Sets googleKubernetesEngineConfig
     * @param \Rancher\Model\GoogleKubernetesEngineConfigModel $googleKubernetesEngineConfig
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
     * @return \Rancher\Model\ImportedConfigModel
     */
    public function getImportedConfig()
    {
        return $this->container['importedConfig'];
    }

    /**
     * Sets importedConfig
     * @param \Rancher\Model\ImportedConfigModel $importedConfig
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
     * Gets istioEnabled
     * @return boolean
     */
    public function getIstioEnabled()
    {
        return $this->container['istioEnabled'];
    }

    /**
     * Sets istioEnabled
     * @param boolean $istioEnabled
     * @return $this
     */
    public function setIstioEnabled($istioEnabled)
    {
        $this->container['istioEnabled'] = $istioEnabled;

        return $this;
    }


    /**
     * Gets k3sConfig
     * @return \Rancher\Model\K3sConfigModel
     */
    public function getK3sConfig()
    {
        return $this->container['k3sConfig'];
    }

    /**
     * Sets k3sConfig
     * @param \Rancher\Model\K3sConfigModel $k3sConfig
     * @return $this
     */
    public function setK3sConfig($k3sConfig)
    {
        $this->container['k3sConfig'] = $k3sConfig;

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
     * Gets linuxWorkerCount
     * @return int
     */
    public function getLinuxWorkerCount()
    {
        return $this->container['linuxWorkerCount'];
    }

    /**
     * Sets linuxWorkerCount
     * @param int $linuxWorkerCount
     * @return $this
     */
    public function setLinuxWorkerCount($linuxWorkerCount)
    {
        $this->container['linuxWorkerCount'] = $linuxWorkerCount;

        return $this;
    }


    /**
     * Gets localClusterAuthEndpoint
     * @return \Rancher\Model\LocalClusterAuthEndpointModel
     */
    public function getLocalClusterAuthEndpoint()
    {
        return $this->container['localClusterAuthEndpoint'];
    }

    /**
     * Sets localClusterAuthEndpoint
     * @param \Rancher\Model\LocalClusterAuthEndpointModel $localClusterAuthEndpoint
     * @return $this
     */
    public function setLocalClusterAuthEndpoint($localClusterAuthEndpoint)
    {
        $this->container['localClusterAuthEndpoint'] = $localClusterAuthEndpoint;

        return $this;
    }


    /**
     * Gets monitoringStatus
     * @return \Rancher\Model\MonitoringStatusModel
     */
    public function getMonitoringStatus()
    {
        return $this->container['monitoringStatus'];
    }

    /**
     * Sets monitoringStatus
     * @param \Rancher\Model\MonitoringStatusModel $monitoringStatus
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
     * Gets nodeVersion
     * @return int
     */
    public function getNodeVersion()
    {
        return $this->container['nodeVersion'];
    }

    /**
     * Sets nodeVersion
     * @param int $nodeVersion
     * @return $this
     */
    public function setNodeVersion($nodeVersion)
    {
        $this->container['nodeVersion'] = $nodeVersion;

        return $this;
    }


    /**
     * Gets openStackSecret
     * @return string
     */
    public function getOpenStackSecret()
    {
        return $this->container['openStackSecret'];
    }

    /**
     * Sets openStackSecret
     * @param string $openStackSecret
     * @return $this
     */
    public function setOpenStackSecret($openStackSecret)
    {
        $this->container['openStackSecret'] = $openStackSecret;

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
     * Gets privateRegistrySecret
     * @return string
     */
    public function getPrivateRegistrySecret()
    {
        return $this->container['privateRegistrySecret'];
    }

    /**
     * Sets privateRegistrySecret
     * @param string $privateRegistrySecret
     * @return $this
     */
    public function setPrivateRegistrySecret($privateRegistrySecret)
    {
        $this->container['privateRegistrySecret'] = $privateRegistrySecret;

        return $this;
    }


    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }


    /**
     * Gets questions
     * @return \Rancher\Model\QuestionModel[]
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     * @param \Rancher\Model\QuestionModel[] $questions
     * @return $this
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

        return $this;
    }


    /**
     * Gets rancherKubernetesEngineConfig
     * @return \Rancher\Model\RancherKubernetesEngineConfigModel
     */
    public function getRancherKubernetesEngineConfig()
    {
        return $this->container['rancherKubernetesEngineConfig'];
    }

    /**
     * Sets rancherKubernetesEngineConfig
     * @param \Rancher\Model\RancherKubernetesEngineConfigModel $rancherKubernetesEngineConfig
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
     * Gets rke2Config
     * @return \Rancher\Model\Rke2ConfigModel
     */
    public function getRke2Config()
    {
        return $this->container['rke2Config'];
    }

    /**
     * Sets rke2Config
     * @param \Rancher\Model\Rke2ConfigModel $rke2Config
     * @return $this
     */
    public function setRke2Config($rke2Config)
    {
        $this->container['rke2Config'] = $rke2Config;

        return $this;
    }


    /**
     * Gets s3CredentialSecret
     * @return string
     */
    public function getS3CredentialSecret()
    {
        return $this->container['s3CredentialSecret'];
    }

    /**
     * Sets s3CredentialSecret
     * @param string $s3CredentialSecret
     * @return $this
     */
    public function setS3CredentialSecret($s3CredentialSecret)
    {
        $this->container['s3CredentialSecret'] = $s3CredentialSecret;

        return $this;
    }


    /**
     * Gets serviceAccountTokenSecret
     * @return string
     */
    public function getServiceAccountTokenSecret()
    {
        return $this->container['serviceAccountTokenSecret'];
    }

    /**
     * Sets serviceAccountTokenSecret
     * @param string $serviceAccountTokenSecret
     * @return $this
     */
    public function setServiceAccountTokenSecret($serviceAccountTokenSecret)
    {
        $this->container['serviceAccountTokenSecret'] = $serviceAccountTokenSecret;

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
     * @return \Rancher\Model\InfoModel
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param \Rancher\Model\InfoModel $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }


    /**
     * Gets virtualCenterSecret
     * @return string
     */
    public function getVirtualCenterSecret()
    {
        return $this->container['virtualCenterSecret'];
    }

    /**
     * Sets virtualCenterSecret
     * @param string $virtualCenterSecret
     * @return $this
     */
    public function setVirtualCenterSecret($virtualCenterSecret)
    {
        $this->container['virtualCenterSecret'] = $virtualCenterSecret;

        return $this;
    }


    /**
     * Gets vsphereSecret
     * @return string
     */
    public function getVsphereSecret()
    {
        return $this->container['vsphereSecret'];
    }

    /**
     * Sets vsphereSecret
     * @param string $vsphereSecret
     * @return $this
     */
    public function setVsphereSecret($vsphereSecret)
    {
        $this->container['vsphereSecret'] = $vsphereSecret;

        return $this;
    }


    /**
     * Gets weavePasswordSecret
     * @return string
     */
    public function getWeavePasswordSecret()
    {
        return $this->container['weavePasswordSecret'];
    }

    /**
     * Sets weavePasswordSecret
     * @param string $weavePasswordSecret
     * @return $this
     */
    public function setWeavePasswordSecret($weavePasswordSecret)
    {
        $this->container['weavePasswordSecret'] = $weavePasswordSecret;

        return $this;
    }


    /**
     * Gets windowsPreferedCluster
     * @return boolean
     */
    public function getWindowsPreferedCluster()
    {
        return $this->container['windowsPreferedCluster'];
    }

    /**
     * Sets windowsPreferedCluster
     * @param boolean $windowsPreferedCluster
     * @return $this
     */
    public function setWindowsPreferedCluster($windowsPreferedCluster)
    {
        $this->container['windowsPreferedCluster'] = $windowsPreferedCluster;

        return $this;
    }


    /**
     * Gets windowsWorkerCount
     * @return int
     */
    public function getWindowsWorkerCount()
    {
        return $this->container['windowsWorkerCount'];
    }

    /**
     * Sets windowsWorkerCount
     * @param int $windowsWorkerCount
     * @return $this
     */
    public function setWindowsWorkerCount($windowsWorkerCount)
    {
        $this->container['windowsWorkerCount'] = $windowsWorkerCount;

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

