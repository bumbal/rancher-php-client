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

    protected static $typeMap = [
        'amazonElasticContainerServiceConfig' => 'map[\Rancher\Model\JsonModel]',
        'azureKubernetesServiceConfig' => 'map[\Rancher\Model\JsonModel]',
        'defaultClusterRoleForProjectMembers' => 'string',
        'defaultPodSecurityPolicyTemplateId' => 'string',
        'description' => 'string',
        'desiredAgentImage' => 'string',
        'desiredAuthImage' => 'string',
        'displayName' => 'string',
        'dockerRootDir' => 'string',
        'enableClusterAlerting' => 'boolean',
        'enableClusterMonitoring' => 'boolean',
        'enableNetworkPolicy' => 'boolean',
        'genericEngineConfig' => 'map[\Rancher\Model\JsonModel]',
        'googleKubernetesEngineConfig' => 'map[\Rancher\Model\JsonModel]',
        'importedConfig' => '\Rancher\Model\ImportedConfigModel',
        'internal' => 'boolean',
        'localClusterAuthEndpoint' => '\Rancher\Model\LocalClusterAuthEndpointModel',
        'rancherKubernetesEngineConfig' => '\Rancher\Model\RancherKubernetesEngineConfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'amazonElasticContainerServiceConfig' => 'setAmazonElasticContainerServiceConfig',
        'azureKubernetesServiceConfig' => 'setAzureKubernetesServiceConfig',
        'defaultClusterRoleForProjectMembers' => 'setDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityPolicyTemplateId' => 'setDefaultPodSecurityPolicyTemplateId',
        'description' => 'setDescription',
        'desiredAgentImage' => 'setDesiredAgentImage',
        'desiredAuthImage' => 'setDesiredAuthImage',
        'displayName' => 'setDisplayName',
        'dockerRootDir' => 'setDockerRootDir',
        'enableClusterAlerting' => 'setEnableClusterAlerting',
        'enableClusterMonitoring' => 'setEnableClusterMonitoring',
        'enableNetworkPolicy' => 'setEnableNetworkPolicy',
        'genericEngineConfig' => 'setGenericEngineConfig',
        'googleKubernetesEngineConfig' => 'setGoogleKubernetesEngineConfig',
        'importedConfig' => 'setImportedConfig',
        'internal' => 'setInternal',
        'localClusterAuthEndpoint' => 'setLocalClusterAuthEndpoint',
        'rancherKubernetesEngineConfig' => 'setRancherKubernetesEngineConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'amazonElasticContainerServiceConfig' => 'getAmazonElasticContainerServiceConfig',
        'azureKubernetesServiceConfig' => 'getAzureKubernetesServiceConfig',
        'defaultClusterRoleForProjectMembers' => 'getDefaultClusterRoleForProjectMembers',
        'defaultPodSecurityPolicyTemplateId' => 'getDefaultPodSecurityPolicyTemplateId',
        'description' => 'getDescription',
        'desiredAgentImage' => 'getDesiredAgentImage',
        'desiredAuthImage' => 'getDesiredAuthImage',
        'displayName' => 'getDisplayName',
        'dockerRootDir' => 'getDockerRootDir',
        'enableClusterAlerting' => 'getEnableClusterAlerting',
        'enableClusterMonitoring' => 'getEnableClusterMonitoring',
        'enableNetworkPolicy' => 'getEnableNetworkPolicy',
        'genericEngineConfig' => 'getGenericEngineConfig',
        'googleKubernetesEngineConfig' => 'getGoogleKubernetesEngineConfig',
        'importedConfig' => 'getImportedConfig',
        'internal' => 'getInternal',
        'localClusterAuthEndpoint' => 'getLocalClusterAuthEndpoint',
        'rancherKubernetesEngineConfig' => 'getRancherKubernetesEngineConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['amazonElasticContainerServiceConfig'] = isset($data['amazonElasticContainerServiceConfig']) ? $data['amazonElasticContainerServiceConfig'] : null;
        $this->container['azureKubernetesServiceConfig'] = isset($data['azureKubernetesServiceConfig']) ? $data['azureKubernetesServiceConfig'] : null;
        $this->container['defaultClusterRoleForProjectMembers'] = isset($data['defaultClusterRoleForProjectMembers']) ? $data['defaultClusterRoleForProjectMembers'] : null;
        $this->container['defaultPodSecurityPolicyTemplateId'] = isset($data['defaultPodSecurityPolicyTemplateId']) ? $data['defaultPodSecurityPolicyTemplateId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['desiredAgentImage'] = isset($data['desiredAgentImage']) ? $data['desiredAgentImage'] : null;
        $this->container['desiredAuthImage'] = isset($data['desiredAuthImage']) ? $data['desiredAuthImage'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['dockerRootDir'] = isset($data['dockerRootDir']) ? $data['dockerRootDir'] : null;
        $this->container['enableClusterAlerting'] = isset($data['enableClusterAlerting']) ? $data['enableClusterAlerting'] : null;
        $this->container['enableClusterMonitoring'] = isset($data['enableClusterMonitoring']) ? $data['enableClusterMonitoring'] : null;
        $this->container['enableNetworkPolicy'] = isset($data['enableNetworkPolicy']) ? $data['enableNetworkPolicy'] : null;
        $this->container['genericEngineConfig'] = isset($data['genericEngineConfig']) ? $data['genericEngineConfig'] : null;
        $this->container['googleKubernetesEngineConfig'] = isset($data['googleKubernetesEngineConfig']) ? $data['googleKubernetesEngineConfig'] : null;
        $this->container['importedConfig'] = isset($data['importedConfig']) ? $data['importedConfig'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['localClusterAuthEndpoint'] = isset($data['localClusterAuthEndpoint']) ? $data['localClusterAuthEndpoint'] : null;
        $this->container['rancherKubernetesEngineConfig'] = isset($data['rancherKubernetesEngineConfig']) ? $data['rancherKubernetesEngineConfig'] : null;
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

