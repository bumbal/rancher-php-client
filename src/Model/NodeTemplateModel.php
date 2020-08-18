<?php

/**
 * NodeTemplateModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeTemplateModel implements ArrayAccess
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
        'authCertificateAuthority',
        'authKey',
        'azureConfig',
        'cloudCredentialId',
        'description',
        'digitaloceanConfig',
        'dockerVersion',
        'engineEnv',
        'engineInsecureRegistry',
        'engineInstallURL',
        'engineLabel',
        'engineOpt',
        'engineRegistryMirror',
        'engineStorageDriver',
        'labels',
        'name',
        'nodeTaints',
        'useInternalIpAddress',
        'vmwarevsphereConfig',
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
        'amazonec2Config',
        'annotations',
        'authCertificateAuthority',
        'authKey',
        'azureConfig',
        'cloudCredentialId',
        'description',
        'digitaloceanConfig',
        'dockerVersion',
        'engineEnv',
        'engineInsecureRegistry',
        'engineInstallURL',
        'engineLabel',
        'engineOpt',
        'engineRegistryMirror',
        'engineStorageDriver',
        'labels',
        'name',
        'nodeTaints',
        'vmwarevsphereConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'amazonec2Config' => '\Rancher\Model\Amazonec2configModel',
        'annotations' => 'map[string,string]',
        'authCertificateAuthority' => 'string',
        'authKey' => 'string',
        'azureConfig' => '\Rancher\Model\AzureconfigModel',
        'cloudCredentialId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'digitaloceanConfig' => '\Rancher\Model\DigitaloceanconfigModel',
        'dockerVersion' => 'string',
        'driver' => 'string',
        'engineEnv' => 'map[string,string]',
        'engineInsecureRegistry' => 'string[]',
        'engineInstallURL' => 'string',
        'engineLabel' => 'map[string,string]',
        'engineOpt' => 'map[string,string]',
        'engineRegistryMirror' => 'string[]',
        'engineStorageDriver' => 'string',
        'id' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'nodeTaints' => '\Rancher\Model\TaintModel[]',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'state' => 'string',
        'status' => '\Rancher\Model\NodeTemplateStatusModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'useInternalIpAddress' => 'boolean',
        'uuid' => 'string',
        'vmwarevsphereConfig' => '\Rancher\Model\VmwarevsphereconfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'amazonec2Config' => 'setAmazonec2Config',
        'annotations' => 'setAnnotations',
        'authCertificateAuthority' => 'setAuthCertificateAuthority',
        'authKey' => 'setAuthKey',
        'azureConfig' => 'setAzureConfig',
        'cloudCredentialId' => 'setCloudCredentialId',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'digitaloceanConfig' => 'setDigitaloceanConfig',
        'dockerVersion' => 'setDockerVersion',
        'driver' => 'setDriver',
        'engineEnv' => 'setEngineEnv',
        'engineInsecureRegistry' => 'setEngineInsecureRegistry',
        'engineInstallURL' => 'setEngineInstallURL',
        'engineLabel' => 'setEngineLabel',
        'engineOpt' => 'setEngineOpt',
        'engineRegistryMirror' => 'setEngineRegistryMirror',
        'engineStorageDriver' => 'setEngineStorageDriver',
        'id' => 'setId',
        'labels' => 'setLabels',
        'name' => 'setName',
        'nodeTaints' => 'setNodeTaints',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'useInternalIpAddress' => 'setUseInternalIpAddress',
        'uuid' => 'setUuid',
        'vmwarevsphereConfig' => 'setVmwarevsphereConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'amazonec2Config' => 'getAmazonec2Config',
        'annotations' => 'getAnnotations',
        'authCertificateAuthority' => 'getAuthCertificateAuthority',
        'authKey' => 'getAuthKey',
        'azureConfig' => 'getAzureConfig',
        'cloudCredentialId' => 'getCloudCredentialId',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'digitaloceanConfig' => 'getDigitaloceanConfig',
        'dockerVersion' => 'getDockerVersion',
        'driver' => 'getDriver',
        'engineEnv' => 'getEngineEnv',
        'engineInsecureRegistry' => 'getEngineInsecureRegistry',
        'engineInstallURL' => 'getEngineInstallURL',
        'engineLabel' => 'getEngineLabel',
        'engineOpt' => 'getEngineOpt',
        'engineRegistryMirror' => 'getEngineRegistryMirror',
        'engineStorageDriver' => 'getEngineStorageDriver',
        'id' => 'getId',
        'labels' => 'getLabels',
        'name' => 'getName',
        'nodeTaints' => 'getNodeTaints',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'useInternalIpAddress' => 'getUseInternalIpAddress',
        'uuid' => 'getUuid',
        'vmwarevsphereConfig' => 'getVmwarevsphereConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['amazonec2Config'] = isset($data['amazonec2Config']) ? $data['amazonec2Config'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['authCertificateAuthority'] = isset($data['authCertificateAuthority']) ? $data['authCertificateAuthority'] : null;
        $this->container['authKey'] = isset($data['authKey']) ? $data['authKey'] : null;
        $this->container['azureConfig'] = isset($data['azureConfig']) ? $data['azureConfig'] : null;
        $this->container['cloudCredentialId'] = isset($data['cloudCredentialId']) ? $data['cloudCredentialId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['digitaloceanConfig'] = isset($data['digitaloceanConfig']) ? $data['digitaloceanConfig'] : null;
        $this->container['dockerVersion'] = isset($data['dockerVersion']) ? $data['dockerVersion'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['engineEnv'] = isset($data['engineEnv']) ? $data['engineEnv'] : null;
        $this->container['engineInsecureRegistry'] = isset($data['engineInsecureRegistry']) ? $data['engineInsecureRegistry'] : null;
        $this->container['engineInstallURL'] = isset($data['engineInstallURL']) ? $data['engineInstallURL'] : null;
        $this->container['engineLabel'] = isset($data['engineLabel']) ? $data['engineLabel'] : null;
        $this->container['engineOpt'] = isset($data['engineOpt']) ? $data['engineOpt'] : null;
        $this->container['engineRegistryMirror'] = isset($data['engineRegistryMirror']) ? $data['engineRegistryMirror'] : null;
        $this->container['engineStorageDriver'] = isset($data['engineStorageDriver']) ? $data['engineStorageDriver'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeTaints'] = isset($data['nodeTaints']) ? $data['nodeTaints'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['useInternalIpAddress'] = isset($data['useInternalIpAddress']) ? $data['useInternalIpAddress'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['vmwarevsphereConfig'] = isset($data['vmwarevsphereConfig']) ? $data['vmwarevsphereConfig'] : null;
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
     * Gets authCertificateAuthority
     * @return string
     */
    public function getAuthCertificateAuthority()
    {
        return $this->container['authCertificateAuthority'];
    }

    /**
     * Sets authCertificateAuthority
     * @param string $authCertificateAuthority
     * @return $this
     */
    public function setAuthCertificateAuthority($authCertificateAuthority)
    {
        $this->container['authCertificateAuthority'] = $authCertificateAuthority;

        return $this;
    }


    /**
     * Gets authKey
     * @return string
     */
    public function getAuthKey()
    {
        return $this->container['authKey'];
    }

    /**
     * Sets authKey
     * @param string $authKey
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        $this->container['authKey'] = $authKey;

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
     * Gets cloudCredentialId
     * @return string
     */
    public function getCloudCredentialId()
    {
        return $this->container['cloudCredentialId'];
    }

    /**
     * Sets cloudCredentialId
     * @param string $cloudCredentialId
     * @return $this
     */
    public function setCloudCredentialId($cloudCredentialId)
    {
        $this->container['cloudCredentialId'] = $cloudCredentialId;

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
     * Gets dockerVersion
     * @return string
     */
    public function getDockerVersion()
    {
        return $this->container['dockerVersion'];
    }

    /**
     * Sets dockerVersion
     * @param string $dockerVersion
     * @return $this
     */
    public function setDockerVersion($dockerVersion)
    {
        $this->container['dockerVersion'] = $dockerVersion;

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
     * Gets engineEnv
     * @return string[]
     */
    public function getEngineEnv()
    {
        return $this->container['engineEnv'];
    }

    /**
     * Sets engineEnv
     * @param string[] $engineEnv
     * @return $this
     */
    public function setEngineEnv($engineEnv)
    {
        $this->container['engineEnv'] = $engineEnv;

        return $this;
    }


    /**
     * Gets engineInsecureRegistry
     * @return string[]
     */
    public function getEngineInsecureRegistry()
    {
        return $this->container['engineInsecureRegistry'];
    }

    /**
     * Sets engineInsecureRegistry
     * @param string[] $engineInsecureRegistry
     * @return $this
     */
    public function setEngineInsecureRegistry($engineInsecureRegistry)
    {
        $this->container['engineInsecureRegistry'] = $engineInsecureRegistry;

        return $this;
    }


    /**
     * Gets engineInstallURL
     * @return string
     */
    public function getEngineInstallURL()
    {
        return $this->container['engineInstallURL'];
    }

    /**
     * Sets engineInstallURL
     * @param string $engineInstallURL
     * @return $this
     */
    public function setEngineInstallURL($engineInstallURL)
    {
        $this->container['engineInstallURL'] = $engineInstallURL;

        return $this;
    }


    /**
     * Gets engineLabel
     * @return string[]
     */
    public function getEngineLabel()
    {
        return $this->container['engineLabel'];
    }

    /**
     * Sets engineLabel
     * @param string[] $engineLabel
     * @return $this
     */
    public function setEngineLabel($engineLabel)
    {
        $this->container['engineLabel'] = $engineLabel;

        return $this;
    }


    /**
     * Gets engineOpt
     * @return string[]
     */
    public function getEngineOpt()
    {
        return $this->container['engineOpt'];
    }

    /**
     * Sets engineOpt
     * @param string[] $engineOpt
     * @return $this
     */
    public function setEngineOpt($engineOpt)
    {
        $this->container['engineOpt'] = $engineOpt;

        return $this;
    }


    /**
     * Gets engineRegistryMirror
     * @return string[]
     */
    public function getEngineRegistryMirror()
    {
        return $this->container['engineRegistryMirror'];
    }

    /**
     * Sets engineRegistryMirror
     * @param string[] $engineRegistryMirror
     * @return $this
     */
    public function setEngineRegistryMirror($engineRegistryMirror)
    {
        $this->container['engineRegistryMirror'] = $engineRegistryMirror;

        return $this;
    }


    /**
     * Gets engineStorageDriver
     * @return string
     */
    public function getEngineStorageDriver()
    {
        return $this->container['engineStorageDriver'];
    }

    /**
     * Sets engineStorageDriver
     * @param string $engineStorageDriver
     * @return $this
     */
    public function setEngineStorageDriver($engineStorageDriver)
    {
        $this->container['engineStorageDriver'] = $engineStorageDriver;

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
     * Gets status
     * @return \Rancher\Model\NodeTemplateStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\NodeTemplateStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets useInternalIpAddress
     * @return boolean
     */
    public function getUseInternalIpAddress()
    {
        return $this->container['useInternalIpAddress'];
    }

    /**
     * Sets useInternalIpAddress
     * @param boolean $useInternalIpAddress
     * @return $this
     */
    public function setUseInternalIpAddress($useInternalIpAddress)
    {
        $this->container['useInternalIpAddress'] = $useInternalIpAddress;

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

