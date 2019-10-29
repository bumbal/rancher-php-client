<?php

namespace Rancher\Model;

use \ArrayAccess;

class TemplateVersionSpec implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'appReadme' => 'string',
        'digest' => 'string',
        'externalId' => 'string',
        'files' => 'map[string]',
        'kubeVersion' => 'string',
        'questions' => '\Rancher\Model\Question[]',
        'rancherVersion' => 'string',
        'readme' => 'string',
        'requiredNamespace' => 'string',
        'upgradeVersionLinks' => 'map[string]',
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
        'appReadme' => 'setAppReadme',
        'digest' => 'setDigest',
        'externalId' => 'setExternalId',
        'files' => 'setFiles',
        'kubeVersion' => 'setKubeVersion',
        'questions' => 'setQuestions',
        'rancherVersion' => 'setRancherVersion',
        'readme' => 'setReadme',
        'requiredNamespace' => 'setRequiredNamespace',
        'upgradeVersionLinks' => 'setUpgradeVersionLinks',
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
        'appReadme' => 'getAppReadme',
        'digest' => 'getDigest',
        'externalId' => 'getExternalId',
        'files' => 'getFiles',
        'kubeVersion' => 'getKubeVersion',
        'questions' => 'getQuestions',
        'rancherVersion' => 'getRancherVersion',
        'readme' => 'getReadme',
        'requiredNamespace' => 'getRequiredNamespace',
        'upgradeVersionLinks' => 'getUpgradeVersionLinks',
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
        $this->container['appReadme'] = isset($data['appReadme']) ? $data['appReadme'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['kubeVersion'] = isset($data['kubeVersion']) ? $data['kubeVersion'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
        $this->container['rancherVersion'] = isset($data['rancherVersion']) ? $data['rancherVersion'] : null;
        $this->container['readme'] = isset($data['readme']) ? $data['readme'] : null;
        $this->container['requiredNamespace'] = isset($data['requiredNamespace']) ? $data['requiredNamespace'] : null;
        $this->container['upgradeVersionLinks'] = isset($data['upgradeVersionLinks']) ? $data['upgradeVersionLinks'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDir'] = isset($data['versionDir']) ? $data['versionDir'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['versionUrls'] = isset($data['versionUrls']) ? $data['versionUrls'] : null;
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

