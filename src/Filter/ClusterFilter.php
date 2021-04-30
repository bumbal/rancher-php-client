<?php

/**
 * ClusterFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class ClusterFilter extends AbstractFilter
{
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
     * @param string $option
     * @return $this
     */
    public function setAgentImage($agentImage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['agentImage'.$option] = $agentImage;

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
     * @param string $option
     * @return $this
     */
    public function setAgentImageOverride($agentImageOverride, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['agentImageOverride'.$option] = $agentImageOverride;

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
     * @param string $option
     * @return $this
     */
    public function setApiEndpoint($apiEndpoint, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['apiEndpoint'.$option] = $apiEndpoint;

        return $this;
    }


    /**
     * Gets appliedEnableNetworkPolicy
     * @return string
     */
    public function getAppliedEnableNetworkPolicy()
    {
        return $this->container['appliedEnableNetworkPolicy'];
    }

    /**
     * Sets appliedEnableNetworkPolicy
     * @param string $appliedEnableNetworkPolicy
     * @param string $option
     * @return $this
     */
    public function setAppliedEnableNetworkPolicy($appliedEnableNetworkPolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['appliedEnableNetworkPolicy'.$option] = $appliedEnableNetworkPolicy;

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
     * @param string $option
     * @return $this
     */
    public function setAppliedPodSecurityPolicyTemplateId($appliedPodSecurityPolicyTemplateId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['appliedPodSecurityPolicyTemplateId'.$option] = $appliedPodSecurityPolicyTemplateId;

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
     * @param string $option
     * @return $this
     */
    public function setAuthImage($authImage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['authImage'.$option] = $authImage;

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
     * @param string $option
     * @return $this
     */
    public function setCaCert($caCert, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['caCert'.$option] = $caCert;

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
     * @param string $option
     * @return $this
     */
    public function setClusterTemplateId($clusterTemplateId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['clusterTemplateId'.$option] = $clusterTemplateId;

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
     * @param string $option
     * @return $this
     */
    public function setClusterTemplateRevisionId($clusterTemplateRevisionId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['clusterTemplateRevisionId'.$option] = $clusterTemplateRevisionId;

        return $this;
    }


    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created
     * @param string $option
     * @return $this
     */
    public function setCreated($created, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['created'.$option] = $created;

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
     * @param string $option
     * @return $this
     */
    public function setCreatorId($creatorId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['creatorId'.$option] = $creatorId;

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
     * @param string $option
     * @return $this
     */
    public function setCurrentCisRunName($currentCisRunName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['currentCisRunName'.$option] = $currentCisRunName;

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
     * @param string $option
     * @return $this
     */
    public function setDefaultClusterRoleForProjectMembers($defaultClusterRoleForProjectMembers, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['defaultClusterRoleForProjectMembers'.$option] = $defaultClusterRoleForProjectMembers;

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
     * @param string $option
     * @return $this
     */
    public function setDefaultPodSecurityPolicyTemplateId($defaultPodSecurityPolicyTemplateId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['defaultPodSecurityPolicyTemplateId'.$option] = $defaultPodSecurityPolicyTemplateId;

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
     * @param string $option
     * @return $this
     */
    public function setDescription($description, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['description'.$option] = $description;

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
     * @param string $option
     * @return $this
     */
    public function setDesiredAgentImage($desiredAgentImage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['desiredAgentImage'.$option] = $desiredAgentImage;

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
     * @param string $option
     * @return $this
     */
    public function setDesiredAuthImage($desiredAuthImage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['desiredAuthImage'.$option] = $desiredAuthImage;

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
     * @param string $option
     * @return $this
     */
    public function setDockerRootDir($dockerRootDir, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['dockerRootDir'.$option] = $dockerRootDir;

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
     * @param string $option
     * @return $this
     */
    public function setDriver($driver, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['driver'.$option] = $driver;

        return $this;
    }


    /**
     * Gets enableClusterAlerting
     * @return string
     */
    public function getEnableClusterAlerting()
    {
        return $this->container['enableClusterAlerting'];
    }

    /**
     * Sets enableClusterAlerting
     * @param string $enableClusterAlerting
     * @param string $option
     * @return $this
     */
    public function setEnableClusterAlerting($enableClusterAlerting, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enableClusterAlerting'.$option] = $enableClusterAlerting;

        return $this;
    }


    /**
     * Gets enableClusterMonitoring
     * @return string
     */
    public function getEnableClusterMonitoring()
    {
        return $this->container['enableClusterMonitoring'];
    }

    /**
     * Sets enableClusterMonitoring
     * @param string $enableClusterMonitoring
     * @param string $option
     * @return $this
     */
    public function setEnableClusterMonitoring($enableClusterMonitoring, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enableClusterMonitoring'.$option] = $enableClusterMonitoring;

        return $this;
    }


    /**
     * Gets enableNetworkPolicy
     * @return string
     */
    public function getEnableNetworkPolicy()
    {
        return $this->container['enableNetworkPolicy'];
    }

    /**
     * Sets enableNetworkPolicy
     * @param string $enableNetworkPolicy
     * @param string $option
     * @return $this
     */
    public function setEnableNetworkPolicy($enableNetworkPolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enableNetworkPolicy'.$option] = $enableNetworkPolicy;

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
     * @param string $option
     * @return $this
     */
    public function setFleetWorkspaceName($fleetWorkspaceName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['fleetWorkspaceName'.$option] = $fleetWorkspaceName;

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
     * @param string $option
     * @return $this
     */
    public function setId($id, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['id'.$option] = $id;

        return $this;
    }


    /**
     * Gets internal
     * @return string
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     * @param string $internal
     * @param string $option
     * @return $this
     */
    public function setInternal($internal, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['internal'.$option] = $internal;

        return $this;
    }


    /**
     * Gets istioEnabled
     * @return string
     */
    public function getIstioEnabled()
    {
        return $this->container['istioEnabled'];
    }

    /**
     * Sets istioEnabled
     * @param string $istioEnabled
     * @param string $option
     * @return $this
     */
    public function setIstioEnabled($istioEnabled, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['istioEnabled'.$option] = $istioEnabled;

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
     * @param string $option
     * @return $this
     */
    public function setName($name, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['name'.$option] = $name;

        return $this;
    }


    /**
     * Gets nodeCount
     * @return string
     */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
     * Sets nodeCount
     * @param string $nodeCount
     * @param string $option
     * @return $this
     */
    public function setNodeCount($nodeCount, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nodeCount'.$option] = $nodeCount;

        return $this;
    }


    /**
     * Gets nodeVersion
     * @return string
     */
    public function getNodeVersion()
    {
        return $this->container['nodeVersion'];
    }

    /**
     * Sets nodeVersion
     * @param string $nodeVersion
     * @param string $option
     * @return $this
     */
    public function setNodeVersion($nodeVersion, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nodeVersion'.$option] = $nodeVersion;

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
     * @param string $option
     * @return $this
     */
    public function setProvider($provider, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['provider'.$option] = $provider;

        return $this;
    }


    /**
     * Gets removed
     * @return string
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param string $removed
     * @param string $option
     * @return $this
     */
    public function setRemoved($removed, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['removed'.$option] = $removed;

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
     * @param string $option
     * @return $this
     */
    public function setState($state, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['state'.$option] = $state;

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
     * @param string $option
     * @return $this
     */
    public function setTransitioning($transitioning, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['transitioning'.$option] = $transitioning;

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
     * @param string $option
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['transitioningMessage'.$option] = $transitioningMessage;

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
     * @param string $option
     * @return $this
     */
    public function setUuid($uuid, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['uuid'.$option] = $uuid;

        return $this;
    }


    /**
     * Gets windowsPreferedCluster
     * @return string
     */
    public function getWindowsPreferedCluster()
    {
        return $this->container['windowsPreferedCluster'];
    }

    /**
     * Sets windowsPreferedCluster
     * @param string $windowsPreferedCluster
     * @param string $option
     * @return $this
     */
    public function setWindowsPreferedCluster($windowsPreferedCluster, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['windowsPreferedCluster'.$option] = $windowsPreferedCluster;

        return $this;
    }
}