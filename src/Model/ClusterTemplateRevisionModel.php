<?php

/**
 * ClusterTemplateRevisionModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterTemplateRevisionModel implements ArrayAccess
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
        'annotations',
        'clusterConfig',
        'clusterTemplateId',
        'enabled',
        'labels',
        'name',
        'questions',
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
        'clusterConfig',
        'enabled',
        'labels',
        'name',
        'questions',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aadClientCertSecret' => 'string',
        'aadClientSecret' => 'string',
        'aciAPICUserKeySecret' => 'string',
        'aciKafkaClientKeySecret' => 'string',
        'aciTokenSecret' => 'string',
        'annotations' => 'map[string,string]',
        'bastionHostSSHKeySecret' => 'string',
        'clusterConfig' => '\Rancher\Model\ClusterSpecBaseModel',
        'clusterTemplateId' => 'string',
        'conditions' => '\Rancher\Model\ClusterTemplateRevisionConditionModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'enabled' => 'boolean',
        'id' => 'string',
        'kubeletExtraEnvSecret' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'openStackSecret' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'privateRegistryECRSecret' => 'string',
        'privateRegistrySecret' => 'string',
        'questions' => '\Rancher\Model\QuestionModel[]',
        'removed' => '\DateTime',
        's3CredentialSecret' => 'string',
        'secretsEncryptionProvidersSecret' => 'string',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'virtualCenterSecret' => 'string',
        'vsphereSecret' => 'string',
        'weavePasswordSecret' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aadClientCertSecret' => 'setAadClientCertSecret',
        'aadClientSecret' => 'setAadClientSecret',
        'aciAPICUserKeySecret' => 'setAciAPICUserKeySecret',
        'aciKafkaClientKeySecret' => 'setAciKafkaClientKeySecret',
        'aciTokenSecret' => 'setAciTokenSecret',
        'annotations' => 'setAnnotations',
        'bastionHostSSHKeySecret' => 'setBastionHostSSHKeySecret',
        'clusterConfig' => 'setClusterConfig',
        'clusterTemplateId' => 'setClusterTemplateId',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'enabled' => 'setEnabled',
        'id' => 'setId',
        'kubeletExtraEnvSecret' => 'setKubeletExtraEnvSecret',
        'labels' => 'setLabels',
        'name' => 'setName',
        'openStackSecret' => 'setOpenStackSecret',
        'ownerReferences' => 'setOwnerReferences',
        'privateRegistryECRSecret' => 'setPrivateRegistryECRSecret',
        'privateRegistrySecret' => 'setPrivateRegistrySecret',
        'questions' => 'setQuestions',
        'removed' => 'setRemoved',
        's3CredentialSecret' => 'setS3CredentialSecret',
        'secretsEncryptionProvidersSecret' => 'setSecretsEncryptionProvidersSecret',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'virtualCenterSecret' => 'setVirtualCenterSecret',
        'vsphereSecret' => 'setVsphereSecret',
        'weavePasswordSecret' => 'setWeavePasswordSecret',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aadClientCertSecret' => 'getAadClientCertSecret',
        'aadClientSecret' => 'getAadClientSecret',
        'aciAPICUserKeySecret' => 'getAciAPICUserKeySecret',
        'aciKafkaClientKeySecret' => 'getAciKafkaClientKeySecret',
        'aciTokenSecret' => 'getAciTokenSecret',
        'annotations' => 'getAnnotations',
        'bastionHostSSHKeySecret' => 'getBastionHostSSHKeySecret',
        'clusterConfig' => 'getClusterConfig',
        'clusterTemplateId' => 'getClusterTemplateId',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'enabled' => 'getEnabled',
        'id' => 'getId',
        'kubeletExtraEnvSecret' => 'getKubeletExtraEnvSecret',
        'labels' => 'getLabels',
        'name' => 'getName',
        'openStackSecret' => 'getOpenStackSecret',
        'ownerReferences' => 'getOwnerReferences',
        'privateRegistryECRSecret' => 'getPrivateRegistryECRSecret',
        'privateRegistrySecret' => 'getPrivateRegistrySecret',
        'questions' => 'getQuestions',
        'removed' => 'getRemoved',
        's3CredentialSecret' => 'getS3CredentialSecret',
        'secretsEncryptionProvidersSecret' => 'getSecretsEncryptionProvidersSecret',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'virtualCenterSecret' => 'getVirtualCenterSecret',
        'vsphereSecret' => 'getVsphereSecret',
        'weavePasswordSecret' => 'getWeavePasswordSecret',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aadClientCertSecret'] = isset($data['aadClientCertSecret']) ? $data['aadClientCertSecret'] : null;
        $this->container['aadClientSecret'] = isset($data['aadClientSecret']) ? $data['aadClientSecret'] : null;
        $this->container['aciAPICUserKeySecret'] = isset($data['aciAPICUserKeySecret']) ? $data['aciAPICUserKeySecret'] : null;
        $this->container['aciKafkaClientKeySecret'] = isset($data['aciKafkaClientKeySecret']) ? $data['aciKafkaClientKeySecret'] : null;
        $this->container['aciTokenSecret'] = isset($data['aciTokenSecret']) ? $data['aciTokenSecret'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['bastionHostSSHKeySecret'] = isset($data['bastionHostSSHKeySecret']) ? $data['bastionHostSSHKeySecret'] : null;
        $this->container['clusterConfig'] = isset($data['clusterConfig']) ? $data['clusterConfig'] : null;
        $this->container['clusterTemplateId'] = isset($data['clusterTemplateId']) ? $data['clusterTemplateId'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['kubeletExtraEnvSecret'] = isset($data['kubeletExtraEnvSecret']) ? $data['kubeletExtraEnvSecret'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['openStackSecret'] = isset($data['openStackSecret']) ? $data['openStackSecret'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['privateRegistryECRSecret'] = isset($data['privateRegistryECRSecret']) ? $data['privateRegistryECRSecret'] : null;
        $this->container['privateRegistrySecret'] = isset($data['privateRegistrySecret']) ? $data['privateRegistrySecret'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['s3CredentialSecret'] = isset($data['s3CredentialSecret']) ? $data['s3CredentialSecret'] : null;
        $this->container['secretsEncryptionProvidersSecret'] = isset($data['secretsEncryptionProvidersSecret']) ? $data['secretsEncryptionProvidersSecret'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['virtualCenterSecret'] = isset($data['virtualCenterSecret']) ? $data['virtualCenterSecret'] : null;
        $this->container['vsphereSecret'] = isset($data['vsphereSecret']) ? $data['vsphereSecret'] : null;
        $this->container['weavePasswordSecret'] = isset($data['weavePasswordSecret']) ? $data['weavePasswordSecret'] : null;
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
     * @return $this
     */
    public function setAciAPICUserKeySecret($aciAPICUserKeySecret)
    {
        $this->container['aciAPICUserKeySecret'] = $aciAPICUserKeySecret;

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
     * @return $this
     */
    public function setAciKafkaClientKeySecret($aciKafkaClientKeySecret)
    {
        $this->container['aciKafkaClientKeySecret'] = $aciKafkaClientKeySecret;

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
     * @return $this
     */
    public function setAciTokenSecret($aciTokenSecret)
    {
        $this->container['aciTokenSecret'] = $aciTokenSecret;

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
     * @return $this
     */
    public function setBastionHostSSHKeySecret($bastionHostSSHKeySecret)
    {
        $this->container['bastionHostSSHKeySecret'] = $bastionHostSSHKeySecret;

        return $this;
    }


    /**
     * Gets clusterConfig
     * @return \Rancher\Model\ClusterSpecBaseModel
     */
    public function getClusterConfig()
    {
        return $this->container['clusterConfig'];
    }

    /**
     * Sets clusterConfig
     * @param \Rancher\Model\ClusterSpecBaseModel $clusterConfig
     * @return $this
     */
    public function setClusterConfig($clusterConfig)
    {
        $this->container['clusterConfig'] = $clusterConfig;

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
     * Gets conditions
     * @return \Rancher\Model\ClusterTemplateRevisionConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\ClusterTemplateRevisionConditionModel[] $conditions
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
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @return $this
     */
    public function setKubeletExtraEnvSecret($kubeletExtraEnvSecret)
    {
        $this->container['kubeletExtraEnvSecret'] = $kubeletExtraEnvSecret;

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
     * @return $this
     */
    public function setPrivateRegistryECRSecret($privateRegistryECRSecret)
    {
        $this->container['privateRegistryECRSecret'] = $privateRegistryECRSecret;

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
     * @return $this
     */
    public function setSecretsEncryptionProvidersSecret($secretsEncryptionProvidersSecret)
    {
        $this->container['secretsEncryptionProvidersSecret'] = $secretsEncryptionProvidersSecret;

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

