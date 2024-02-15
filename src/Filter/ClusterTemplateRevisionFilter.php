<?php

/**
 * ClusterTemplateRevisionFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class ClusterTemplateRevisionFilter extends AbstractFilter
{
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
     * @param string $option
     * @return $this
     */
    public function setAadClientCertSecret($aadClientCertSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['aadClientCertSecret'.$option] = $aadClientCertSecret;

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
     * @param string $option
     * @return $this
     */
    public function setAadClientSecret($aadClientSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['aadClientSecret'.$option] = $aadClientSecret;

        return $this;
    }


    /**
     * Gets aciAPICUserKeySecret
     * @return string
     */
    public function getAciAPICUserKeySecret()
    {
        return $this->container['aciAPICUserKeySecret'];
    }

    /**
     * Sets aciAPICUserKeySecret
     * @param string $aciAPICUserKeySecret
     * @param string $option
     * @return $this
     */
    public function setAciAPICUserKeySecret($aciAPICUserKeySecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['aciAPICUserKeySecret'.$option] = $aciAPICUserKeySecret;

        return $this;
    }


    /**
     * Gets aciKafkaClientKeySecret
     * @return string
     */
    public function getAciKafkaClientKeySecret()
    {
        return $this->container['aciKafkaClientKeySecret'];
    }

    /**
     * Sets aciKafkaClientKeySecret
     * @param string $aciKafkaClientKeySecret
     * @param string $option
     * @return $this
     */
    public function setAciKafkaClientKeySecret($aciKafkaClientKeySecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['aciKafkaClientKeySecret'.$option] = $aciKafkaClientKeySecret;

        return $this;
    }


    /**
     * Gets aciTokenSecret
     * @return string
     */
    public function getAciTokenSecret()
    {
        return $this->container['aciTokenSecret'];
    }

    /**
     * Sets aciTokenSecret
     * @param string $aciTokenSecret
     * @param string $option
     * @return $this
     */
    public function setAciTokenSecret($aciTokenSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['aciTokenSecret'.$option] = $aciTokenSecret;

        return $this;
    }


    /**
     * Gets bastionHostSSHKeySecret
     * @return string
     */
    public function getBastionHostSSHKeySecret()
    {
        return $this->container['bastionHostSSHKeySecret'];
    }

    /**
     * Sets bastionHostSSHKeySecret
     * @param string $bastionHostSSHKeySecret
     * @param string $option
     * @return $this
     */
    public function setBastionHostSSHKeySecret($bastionHostSSHKeySecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['bastionHostSSHKeySecret'.$option] = $bastionHostSSHKeySecret;

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
     * Gets enabled
     * @return string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param string $enabled
     * @param string $option
     * @return $this
     */
    public function setEnabled($enabled, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enabled'.$option] = $enabled;

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
     * Gets kubeletExtraEnvSecret
     * @return string
     */
    public function getKubeletExtraEnvSecret()
    {
        return $this->container['kubeletExtraEnvSecret'];
    }

    /**
     * Sets kubeletExtraEnvSecret
     * @param string $kubeletExtraEnvSecret
     * @param string $option
     * @return $this
     */
    public function setKubeletExtraEnvSecret($kubeletExtraEnvSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['kubeletExtraEnvSecret'.$option] = $kubeletExtraEnvSecret;

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
     * @param string $option
     * @return $this
     */
    public function setOpenStackSecret($openStackSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['openStackSecret'.$option] = $openStackSecret;

        return $this;
    }


    /**
     * Gets privateRegistryECRSecret
     * @return string
     */
    public function getPrivateRegistryECRSecret()
    {
        return $this->container['privateRegistryECRSecret'];
    }

    /**
     * Sets privateRegistryECRSecret
     * @param string $privateRegistryECRSecret
     * @param string $option
     * @return $this
     */
    public function setPrivateRegistryECRSecret($privateRegistryECRSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['privateRegistryECRSecret'.$option] = $privateRegistryECRSecret;

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
     * @param string $option
     * @return $this
     */
    public function setPrivateRegistrySecret($privateRegistrySecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['privateRegistrySecret'.$option] = $privateRegistrySecret;

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
     * @param string $option
     * @return $this
     */
    public function setS3CredentialSecret($s3CredentialSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['s3CredentialSecret'.$option] = $s3CredentialSecret;

        return $this;
    }


    /**
     * Gets secretsEncryptionProvidersSecret
     * @return string
     */
    public function getSecretsEncryptionProvidersSecret()
    {
        return $this->container['secretsEncryptionProvidersSecret'];
    }

    /**
     * Sets secretsEncryptionProvidersSecret
     * @param string $secretsEncryptionProvidersSecret
     * @param string $option
     * @return $this
     */
    public function setSecretsEncryptionProvidersSecret($secretsEncryptionProvidersSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['secretsEncryptionProvidersSecret'.$option] = $secretsEncryptionProvidersSecret;

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
     * @param string $option
     * @return $this
     */
    public function setVirtualCenterSecret($virtualCenterSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['virtualCenterSecret'.$option] = $virtualCenterSecret;

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
     * @param string $option
     * @return $this
     */
    public function setVsphereSecret($vsphereSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['vsphereSecret'.$option] = $vsphereSecret;

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
     * @param string $option
     * @return $this
     */
    public function setWeavePasswordSecret($weavePasswordSecret, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['weavePasswordSecret'.$option] = $weavePasswordSecret;

        return $this;
    }
}