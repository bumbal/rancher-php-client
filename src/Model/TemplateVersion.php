<?php

namespace Rancher\Model;

use \ArrayAccess;

class TemplateVersion implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'appReadme' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'digest' => 'string',
        'externalId' => 'string',
        'files' => 'map[string]',
        'kubeVersion' => 'string',
        'labels' => 'map[string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'questions' => '\Rancher\Model\Question[]',
        'rancherVersion' => 'string',
        'readme' => 'string',
        'removed' => '\DateTime',
        'requiredNamespace' => 'string',
        'state' => 'string',
        'status' => '\Rancher\Model\TemplateVersionStatus',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'upgradeVersionLinks' => 'map[string]',
        'uuid' => 'string',
        'version' => 'string',
        'versionDir' => 'string',
        'versionName' => 'string',
        'versionUrls' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'appReadme' => 'setAppReadme',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'digest' => 'setDigest',
        'externalId' => 'setExternalId',
        'files' => 'setFiles',
        'kubeVersion' => 'setKubeVersion',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'questions' => 'setQuestions',
        'rancherVersion' => 'setRancherVersion',
        'readme' => 'setReadme',
        'removed' => 'setRemoved',
        'requiredNamespace' => 'setRequiredNamespace',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'upgradeVersionLinks' => 'setUpgradeVersionLinks',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
        'versionDir' => 'setVersionDir',
        'versionName' => 'setVersionName',
        'versionUrls' => 'setVersionUrls',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'appReadme' => 'getAppReadme',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'digest' => 'getDigest',
        'externalId' => 'getExternalId',
        'files' => 'getFiles',
        'kubeVersion' => 'getKubeVersion',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'questions' => 'getQuestions',
        'rancherVersion' => 'getRancherVersion',
        'readme' => 'getReadme',
        'removed' => 'getRemoved',
        'requiredNamespace' => 'getRequiredNamespace',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'upgradeVersionLinks' => 'getUpgradeVersionLinks',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
        'versionDir' => 'getVersionDir',
        'versionName' => 'getVersionName',
        'versionUrls' => 'getVersionUrls',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['appReadme'] = isset($data['appReadme']) ? $data['appReadme'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['kubeVersion'] = isset($data['kubeVersion']) ? $data['kubeVersion'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
        $this->container['rancherVersion'] = isset($data['rancherVersion']) ? $data['rancherVersion'] : null;
        $this->container['readme'] = isset($data['readme']) ? $data['readme'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['requiredNamespace'] = isset($data['requiredNamespace']) ? $data['requiredNamespace'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['upgradeVersionLinks'] = isset($data['upgradeVersionLinks']) ? $data['upgradeVersionLinks'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDir'] = isset($data['versionDir']) ? $data['versionDir'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['versionUrls'] = isset($data['versionUrls']) ? $data['versionUrls'] : null;
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
     * Gets appReadme
     * @return string
     */
    public function getAppReadme()
    {
        return $this->container['appReadme'];
    }

    /**
     * Sets appReadme
     * @param string $appReadme
     * @return $this
     */
    public function setAppReadme($appReadme)
    {
        $this->container['appReadme'] = $appReadme;

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
     * Gets digest
     * @return string
     */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
     * Sets digest
     * @param string $digest
     * @return $this
     */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;

        return $this;
    }


    /**
     * Gets externalId
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     * @param string $externalId
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }


    /**
     * Gets files
     * @return string[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param string[] $files
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }


    /**
     * Gets kubeVersion
     * @return string
     */
    public function getKubeVersion()
    {
        return $this->container['kubeVersion'];
    }

    /**
     * Sets kubeVersion
     * @param string $kubeVersion
     * @return $this
     */
    public function setKubeVersion($kubeVersion)
    {
        $this->container['kubeVersion'] = $kubeVersion;

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
     * Gets questions
     * @return \Rancher\Model\Question[]
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     * @param \Rancher\Model\Question[] $questions
     * @return $this
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

        return $this;
    }


    /**
     * Gets rancherVersion
     * @return string
     */
    public function getRancherVersion()
    {
        return $this->container['rancherVersion'];
    }

    /**
     * Sets rancherVersion
     * @param string $rancherVersion
     * @return $this
     */
    public function setRancherVersion($rancherVersion)
    {
        $this->container['rancherVersion'] = $rancherVersion;

        return $this;
    }


    /**
     * Gets readme
     * @return string
     */
    public function getReadme()
    {
        return $this->container['readme'];
    }

    /**
     * Sets readme
     * @param string $readme
     * @return $this
     */
    public function setReadme($readme)
    {
        $this->container['readme'] = $readme;

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
     * Gets requiredNamespace
     * @return string
     */
    public function getRequiredNamespace()
    {
        return $this->container['requiredNamespace'];
    }

    /**
     * Sets requiredNamespace
     * @param string $requiredNamespace
     * @return $this
     */
    public function setRequiredNamespace($requiredNamespace)
    {
        $this->container['requiredNamespace'] = $requiredNamespace;

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
     * @return \Rancher\Model\TemplateVersionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\TemplateVersionStatus $status
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
     * Gets upgradeVersionLinks
     * @return string[]
     */
    public function getUpgradeVersionLinks()
    {
        return $this->container['upgradeVersionLinks'];
    }

    /**
     * Sets upgradeVersionLinks
     * @param string[] $upgradeVersionLinks
     * @return $this
     */
    public function setUpgradeVersionLinks($upgradeVersionLinks)
    {
        $this->container['upgradeVersionLinks'] = $upgradeVersionLinks;

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
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }


    /**
     * Gets versionDir
     * @return string
     */
    public function getVersionDir()
    {
        return $this->container['versionDir'];
    }

    /**
     * Sets versionDir
     * @param string $versionDir
     * @return $this
     */
    public function setVersionDir($versionDir)
    {
        $this->container['versionDir'] = $versionDir;

        return $this;
    }


    /**
     * Gets versionName
     * @return string
     */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
     * Sets versionName
     * @param string $versionName
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;

        return $this;
    }


    /**
     * Gets versionUrls
     * @return string[]
     */
    public function getVersionUrls()
    {
        return $this->container['versionUrls'];
    }

    /**
     * Sets versionUrls
     * @param string[] $versionUrls
     * @return $this
     */
    public function setVersionUrls($versionUrls)
    {
        $this->container['versionUrls'] = $versionUrls;

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

