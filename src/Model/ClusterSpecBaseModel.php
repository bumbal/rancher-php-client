<?php

/**
 * ClusterSpecBaseModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterSpecBaseModel implements ArrayAccess
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
        'clusterAgentDeploymentCustomization',
        'defaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId',
        'desiredAgentImage',
        'desiredAuthImage',
        'dockerRootDir',
        'enableClusterAlerting',
        'enableClusterMonitoring',
        'enableNetworkPolicy',
        'fleetAgentDeploymentCustomization',
        'localClusterAuthEndpoint',
        'rancherKubernetesEngineConfig',
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
        'clusterAgentDeploymentCustomization',
        'defaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId',
        'desiredAgentImage',
        'desiredAuthImage',
        'dockerRootDir',
        'enableClusterAlerting',
        'enableClusterMonitoring',
        'enableNetworkPolicy',
        'fleetAgentDeploymentCustomization',
        'localClusterAuthEndpoint',
        'rancherKubernetesEngineConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'agentEnvVars' => '\Rancher\Model\EnvVarModel[]',
        'agentImageOverride' => 'string',
        'clusterAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'clusterSecrets' => '\Rancher\Model\ClusterSecretsModel',
        'defaultClusterRoleForProjectMembers' => 'string',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'string',
        'defaultPodSecurityPolicyTemplateId' => 'string',
        'desiredAgentImage' => 'string',
        'desiredAuthImage' => 'string',
        'dockerRootDir' => 'string',
        'enableClusterAlerting' => 'boolean',
        'enableClusterMonitoring' => 'boolean',
        'enableNetworkPolicy' => 'boolean',
        'fleetAgentDeploymentCustomization' => '\Rancher\Model\AgentDeploymentCustomizationModel',
        'localClusterAuthEndpoint' => '\Rancher\Model\LocalClusterAuthEndpointModel',
        'rancherKubernetesEngineConfig' => '\Rancher\Model\RancherKubernetesEngineConfigModel',
        'windowsPreferedCluster' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'agentEnvVars' => 'setAgentEnvVars',
        'agentImageOverride' => 'setAgentImageOverride',
        'clusterAgentDeploymentCustomization' => 'setClusterAgentDeploymentCustomization',
        'clusterSecrets' => 'setClusterSecrets',
        'defaultClusterRoleForProjectMembers' => 'setDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'setDefaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId' => 'setDefaultPodSecurityPolicyTemplateId',
        'desiredAgentImage' => 'setDesiredAgentImage',
        'desiredAuthImage' => 'setDesiredAuthImage',
        'dockerRootDir' => 'setDockerRootDir',
        'enableClusterAlerting' => 'setEnableClusterAlerting',
        'enableClusterMonitoring' => 'setEnableClusterMonitoring',
        'enableNetworkPolicy' => 'setEnableNetworkPolicy',
        'fleetAgentDeploymentCustomization' => 'setFleetAgentDeploymentCustomization',
        'localClusterAuthEndpoint' => 'setLocalClusterAuthEndpoint',
        'rancherKubernetesEngineConfig' => 'setRancherKubernetesEngineConfig',
        'windowsPreferedCluster' => 'setWindowsPreferedCluster',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'agentEnvVars' => 'getAgentEnvVars',
        'agentImageOverride' => 'getAgentImageOverride',
        'clusterAgentDeploymentCustomization' => 'getClusterAgentDeploymentCustomization',
        'clusterSecrets' => 'getClusterSecrets',
        'defaultClusterRoleForProjectMembers' => 'getDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityAdmissionConfigurationTemplateName' => 'getDefaultPodSecurityAdmissionConfigurationTemplateName',
        'defaultPodSecurityPolicyTemplateId' => 'getDefaultPodSecurityPolicyTemplateId',
        'desiredAgentImage' => 'getDesiredAgentImage',
        'desiredAuthImage' => 'getDesiredAuthImage',
        'dockerRootDir' => 'getDockerRootDir',
        'enableClusterAlerting' => 'getEnableClusterAlerting',
        'enableClusterMonitoring' => 'getEnableClusterMonitoring',
        'enableNetworkPolicy' => 'getEnableNetworkPolicy',
        'fleetAgentDeploymentCustomization' => 'getFleetAgentDeploymentCustomization',
        'localClusterAuthEndpoint' => 'getLocalClusterAuthEndpoint',
        'rancherKubernetesEngineConfig' => 'getRancherKubernetesEngineConfig',
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
        $this->container['clusterAgentDeploymentCustomization'] = isset($data['clusterAgentDeploymentCustomization']) ? $data['clusterAgentDeploymentCustomization'] : null;
        $this->container['clusterSecrets'] = isset($data['clusterSecrets']) ? $data['clusterSecrets'] : null;
        $this->container['defaultClusterRoleForProjectMembers'] = isset($data['defaultClusterRoleForProjectMembers']) ? $data['defaultClusterRoleForProjectMembers'] : null;
        $this->container['defaultPodSecurityAdmissionConfigurationTemplateName'] = isset($data['defaultPodSecurityAdmissionConfigurationTemplateName']) ? $data['defaultPodSecurityAdmissionConfigurationTemplateName'] : null;
        $this->container['defaultPodSecurityPolicyTemplateId'] = isset($data['defaultPodSecurityPolicyTemplateId']) ? $data['defaultPodSecurityPolicyTemplateId'] : null;
        $this->container['desiredAgentImage'] = isset($data['desiredAgentImage']) ? $data['desiredAgentImage'] : null;
        $this->container['desiredAuthImage'] = isset($data['desiredAuthImage']) ? $data['desiredAuthImage'] : null;
        $this->container['dockerRootDir'] = isset($data['dockerRootDir']) ? $data['dockerRootDir'] : null;
        $this->container['enableClusterAlerting'] = isset($data['enableClusterAlerting']) ? $data['enableClusterAlerting'] : null;
        $this->container['enableClusterMonitoring'] = isset($data['enableClusterMonitoring']) ? $data['enableClusterMonitoring'] : null;
        $this->container['enableNetworkPolicy'] = isset($data['enableNetworkPolicy']) ? $data['enableNetworkPolicy'] : null;
        $this->container['fleetAgentDeploymentCustomization'] = isset($data['fleetAgentDeploymentCustomization']) ? $data['fleetAgentDeploymentCustomization'] : null;
        $this->container['localClusterAuthEndpoint'] = isset($data['localClusterAuthEndpoint']) ? $data['localClusterAuthEndpoint'] : null;
        $this->container['rancherKubernetesEngineConfig'] = isset($data['rancherKubernetesEngineConfig']) ? $data['rancherKubernetesEngineConfig'] : null;
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

