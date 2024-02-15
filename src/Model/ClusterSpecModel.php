<?php

/**
 * ClusterSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterSpecModel implements ArrayAccess
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
        'displayName',
        'dockerRootDir',
        'eksConfig',
        'enableClusterAlerting',
        'enableClusterMonitoring',
        'enableNetworkPolicy',
        'fleetAgentDeploymentCustomization',
        'fleetWorkspaceName',
        'genericEngineConfig',
        'gkeConfig',
        'googleKubernetesEngineConfig',
        'k3sConfig',
        'localClusterAuthEndpoint',
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
        'displayName',
        'dockerRootDir',
        'eksConfig',
        'enableClusterAlerting',
        'enableClusterMonitoring',
        'enableNetworkPolicy',
        'fleetAgentDeploymentCustomization',
        'fleetWorkspaceName',
        'genericEngineConfig',
        'gkeConfig',
        'googleKubernetesEngineConfig',
        'k3sConfig',
        'localClusterAuthEndpoint',
        'rancherKubernetesEngineConfig',
        'rke2Config',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'agentEnvVars' => '\Rancher\Model\EnvVarModel[]',
        'agentImageOverride' => 'string',
        'aksConfig' => '\Rancher\Model\AksClusterConfigSpecModel',
        'amazonElasticContainerServiceConfig' => 'map[string,\Rancher\Model\JsonModel]',
        'answers' => '\Rancher\Model\AnswerModel',
        'azureKubernetesServiceConfig' => 'map[string,\Rancher\Model\JsonModel]',
        'clusterAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'clusterSecrets' => '\Rancher\Model\ClusterSecretsModel',
        'clusterTemplateId' => 'string',
        'clusterTemplateRevisionId' => 'string',
        'defaultClusterRoleForProjectMembers' => 'string',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'string',
        'defaultPodSecurityPolicyTemplateId' => 'string',
        'description' => 'string',
        'desiredAgentImage' => 'string',
        'desiredAuthImage' => 'string',
        'displayName' => 'string',
        'dockerRootDir' => 'string',
        'eksConfig' => '\Rancher\Model\EksClusterConfigSpecModel',
        'enableClusterAlerting' => 'boolean',
        'enableClusterMonitoring' => 'boolean',
        'enableNetworkPolicy' => 'boolean',
        'fleetAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'fleetWorkspaceName' => 'string',
        'genericEngineConfig' => 'map[string,\Rancher\Model\JsonModel]',
        'gkeConfig' => '\Rancher\Model\GkeClusterConfigSpecModel',
        'googleKubernetesEngineConfig' => 'map[string,\Rancher\Model\JsonModel]',
        'importedConfig' => '\Rancher\Model\ImportedConfigModel',
        'internal' => 'boolean',
        'k3sConfig' => '\Rancher\Model\K3sConfigModel',
        'localClusterAuthEndpoint' => '\Rancher\Model\LocalClusterAuthEndpointModel',
        'questions' => '\Rancher\Model\QuestionModel[]',
        'rancherKubernetesEngineConfig' => '\Rancher\Model\RancherKubernetesEngineConfigModel',
        'rke2Config' => '\Rancher\Model\Rke2ConfigModel',
        'windowsPreferedCluster' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'agentEnvVars' => 'setAgentEnvVars',
        'agentImageOverride' => 'setAgentImageOverride',
        'aksConfig' => 'setAksConfig',
        'amazonElasticContainerServiceConfig' => 'setAmazonElasticContainerServiceConfig',
        'answers' => 'setAnswers',
        'azureKubernetesServiceConfig' => 'setAzureKubernetesServiceConfig',
        'clusterAgentDeploymentCustomization' => 'setClusterAgentDeploymentCustomization',
        'clusterSecrets' => 'setClusterSecrets',
        'clusterTemplateId' => 'setClusterTemplateId',
        'clusterTemplateRevisionId' => 'setClusterTemplateRevisionId',
        'defaultClusterRoleForProjectMembers' => 'setDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'setDefaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId' => 'setDefaultPodSecurityPolicyTemplateId',
        'description' => 'setDescription',
        'desiredAgentImage' => 'setDesiredAgentImage',
        'desiredAuthImage' => 'setDesiredAuthImage',
        'displayName' => 'setDisplayName',
        'dockerRootDir' => 'setDockerRootDir',
        'eksConfig' => 'setEksConfig',
        'enableClusterAlerting' => 'setEnableClusterAlerting',
        'enableClusterMonitoring' => 'setEnableClusterMonitoring',
        'enableNetworkPolicy' => 'setEnableNetworkPolicy',
        'fleetAgentDeploymentCustomization' => 'setFleetAgentDeploymentCustomization',
        'fleetWorkspaceName' => 'setFleetWorkspaceName',
        'genericEngineConfig' => 'setGenericEngineConfig',
        'gkeConfig' => 'setGkeConfig',
        'googleKubernetesEngineConfig' => 'setGoogleKubernetesEngineConfig',
        'importedConfig' => 'setImportedConfig',
        'internal' => 'setInternal',
        'k3sConfig' => 'setK3sConfig',
        'localClusterAuthEndpoint' => 'setLocalClusterAuthEndpoint',
        'questions' => 'setQuestions',
        'rancherKubernetesEngineConfig' => 'setRancherKubernetesEngineConfig',
        'rke2Config' => 'setRke2Config',
        'windowsPreferedCluster' => 'setWindowsPreferedCluster',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'agentEnvVars' => 'getAgentEnvVars',
        'agentImageOverride' => 'getAgentImageOverride',
        'aksConfig' => 'getAksConfig',
        'amazonElasticContainerServiceConfig' => 'getAmazonElasticContainerServiceConfig',
        'answers' => 'getAnswers',
        'azureKubernetesServiceConfig' => 'getAzureKubernetesServiceConfig',
        'clusterAgentDeploymentCustomization' => 'getClusterAgentDeploymentCustomization',
        'clusterSecrets' => 'getClusterSecrets',
        'clusterTemplateId' => 'getClusterTemplateId',
        'clusterTemplateRevisionId' => 'getClusterTemplateRevisionId',
        'defaultClusterRoleForProjectMembers' => 'getDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'getDefaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId' => 'getDefaultPodSecurityPolicyTemplateId',
        'description' => 'getDescription',
        'desiredAgentImage' => 'getDesiredAgentImage',
        'desiredAuthImage' => 'getDesiredAuthImage',
        'displayName' => 'getDisplayName',
        'dockerRootDir' => 'getDockerRootDir',
        'eksConfig' => 'getEksConfig',
        'enableClusterAlerting' => 'getEnableClusterAlerting',
        'enableClusterMonitoring' => 'getEnableClusterMonitoring',
        'enableNetworkPolicy' => 'getEnableNetworkPolicy',
        'fleetAgentDeploymentCustomization' => 'getFleetAgentDeploymentCustomization',
        'fleetWorkspaceName' => 'getFleetWorkspaceName',
        'genericEngineConfig' => 'getGenericEngineConfig',
        'gkeConfig' => 'getGkeConfig',
        'googleKubernetesEngineConfig' => 'getGoogleKubernetesEngineConfig',
        'importedConfig' => 'getImportedConfig',
        'internal' => 'getInternal',
        'k3sConfig' => 'getK3sConfig',
        'localClusterAuthEndpoint' => 'getLocalClusterAuthEndpoint',
        'questions' => 'getQuestions',
        'rancherKubernetesEngineConfig' => 'getRancherKubernetesEngineConfig',
        'rke2Config' => 'getRke2Config',
        'windowsPreferedCluster' => 'getWindowsPreferedCluster',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['agentEnvVars'] = isset($data['agentEnvVars']) ? $data['agentEnvVars'] : null;
        $this->container['agentImageOverride'] = isset($data['agentImageOverride']) ? $data['agentImageOverride'] : null;
        $this->container['aksConfig'] = isset($data['aksConfig']) ? $data['aksConfig'] : null;
        $this->container['amazonElasticContainerServiceConfig'] = isset($data['amazonElasticContainerServiceConfig']) ? $data['amazonElasticContainerServiceConfig'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['azureKubernetesServiceConfig'] = isset($data['azureKubernetesServiceConfig']) ? $data['azureKubernetesServiceConfig'] : null;
        $this->container['clusterAgentDeploymentCustomization'] = isset($data['clusterAgentDeploymentCustomization']) ? $data['clusterAgentDeploymentCustomization'] : null;
        $this->container['clusterSecrets'] = isset($data['clusterSecrets']) ? $data['clusterSecrets'] : null;
        $this->container['clusterTemplateId'] = isset($data['clusterTemplateId']) ? $data['clusterTemplateId'] : null;
        $this->container['clusterTemplateRevisionId'] = isset($data['clusterTemplateRevisionId']) ? $data['clusterTemplateRevisionId'] : null;
        $this->container['defaultClusterRoleForProjectMembers'] = isset($data['defaultClusterRoleForProjectMembers']) ? $data['defaultClusterRoleForProjectMembers'] : null;
        $this->container['defaultPodSecurityAdmissionConfigurationTemplateName'] = isset($data['defaultPodSecurityAdmissionConfigurationTemplateName']) ? $data['defaultPodSecurityAdmissionConfigurationTemplateName'] : null;
        $this->container['defaultPodSecurityPolicyTemplateId'] = isset($data['defaultPodSecurityPolicyTemplateId']) ? $data['defaultPodSecurityPolicyTemplateId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['desiredAgentImage'] = isset($data['desiredAgentImage']) ? $data['desiredAgentImage'] : null;
        $this->container['desiredAuthImage'] = isset($data['desiredAuthImage']) ? $data['desiredAuthImage'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['dockerRootDir'] = isset($data['dockerRootDir']) ? $data['dockerRootDir'] : null;
        $this->container['eksConfig'] = isset($data['eksConfig']) ? $data['eksConfig'] : null;
        $this->container['enableClusterAlerting'] = isset($data['enableClusterAlerting']) ? $data['enableClusterAlerting'] : null;
        $this->container['enableClusterMonitoring'] = isset($data['enableClusterMonitoring']) ? $data['enableClusterMonitoring'] : null;
        $this->container['enableNetworkPolicy'] = isset($data['enableNetworkPolicy']) ? $data['enableNetworkPolicy'] : null;
        $this->container['fleetAgentDeploymentCustomization'] = isset($data['fleetAgentDeploymentCustomization']) ? $data['fleetAgentDeploymentCustomization'] : null;
        $this->container['fleetWorkspaceName'] = isset($data['fleetWorkspaceName']) ? $data['fleetWorkspaceName'] : null;
        $this->container['genericEngineConfig'] = isset($data['genericEngineConfig']) ? $data['genericEngineConfig'] : null;
        $this->container['gkeConfig'] = isset($data['gkeConfig']) ? $data['gkeConfig'] : null;
        $this->container['googleKubernetesEngineConfig'] = isset($data['googleKubernetesEngineConfig']) ? $data['googleKubernetesEngineConfig'] : null;
        $this->container['importedConfig'] = isset($data['importedConfig']) ? $data['importedConfig'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['k3sConfig'] = isset($data['k3sConfig']) ? $data['k3sConfig'] : null;
        $this->container['localClusterAuthEndpoint'] = isset($data['localClusterAuthEndpoint']) ? $data['localClusterAuthEndpoint'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
        $this->container['rancherKubernetesEngineConfig'] = isset($data['rancherKubernetesEngineConfig']) ? $data['rancherKubernetesEngineConfig'] : null;
        $this->container['rke2Config'] = isset($data['rke2Config']) ? $data['rke2Config'] : null;
        $this->container['windowsPreferedCluster'] = isset($data['windowsPreferedCluster']) ? $data['windowsPreferedCluster'] : null;
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
     * Gets amazonElasticContainerServiceConfig
     * @return \Rancher\Model\JsonModel[]
     */
    public function getAmazonElasticContainerServiceConfig()
    {
        return $this->container['amazonElasticContainerServiceConfig'];
    }

    /**
     * Sets amazonElasticContainerServiceConfig
     * @param \Rancher\Model\JsonModel[] $amazonElasticContainerServiceConfig
     * @return $this
     */
    public function setAmazonElasticContainerServiceConfig($amazonElasticContainerServiceConfig)
    {
        $this->container['amazonElasticContainerServiceConfig'] = $amazonElasticContainerServiceConfig;

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
     * Gets azureKubernetesServiceConfig
     * @return \Rancher\Model\JsonModel[]
     */
    public function getAzureKubernetesServiceConfig()
    {
        return $this->container['azureKubernetesServiceConfig'];
    }

    /**
     * Sets azureKubernetesServiceConfig
     * @param \Rancher\Model\JsonModel[] $azureKubernetesServiceConfig
     * @return $this
     */
    public function setAzureKubernetesServiceConfig($azureKubernetesServiceConfig)
    {
        $this->container['azureKubernetesServiceConfig'] = $azureKubernetesServiceConfig;

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
     * Gets genericEngineConfig
     * @return \Rancher\Model\JsonModel[]
     */
    public function getGenericEngineConfig()
    {
        return $this->container['genericEngineConfig'];
    }

    /**
     * Sets genericEngineConfig
     * @param \Rancher\Model\JsonModel[] $genericEngineConfig
     * @return $this
     */
    public function setGenericEngineConfig($genericEngineConfig)
    {
        $this->container['genericEngineConfig'] = $genericEngineConfig;

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
     * Gets googleKubernetesEngineConfig
     * @return \Rancher\Model\JsonModel[]
     */
    public function getGoogleKubernetesEngineConfig()
    {
        return $this->container['googleKubernetesEngineConfig'];
    }

    /**
     * Sets googleKubernetesEngineConfig
     * @param \Rancher\Model\JsonModel[] $googleKubernetesEngineConfig
     * @return $this
     */
    public function setGoogleKubernetesEngineConfig($googleKubernetesEngineConfig)
    {
        $this->container['googleKubernetesEngineConfig'] = $googleKubernetesEngineConfig;

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

