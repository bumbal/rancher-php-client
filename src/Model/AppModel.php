<?php

/**
 * AppModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AppModel implements ArrayAccess
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
        'answers',
        'answersSetString',
        'appRevisionId',
        'description',
        'externalId',
        'files',
        'labels',
        'maxRevisionCount',
        'multiClusterAppId',
        'name',
        'namespaceId',
        'projectId',
        'prune',
        'targetNamespace',
        'timeout',
        'valuesYaml',
        'wait',
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
        'answers',
        'answersSetString',
        'appRevisionId',
        'description',
        'externalId',
        'files',
        'labels',
        'maxRevisionCount',
        'multiClusterAppId',
        'projectId',
        'prune',
        'targetNamespace',
        'timeout',
        'valuesYaml',
        'wait',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'answers' => 'map[string,string]',
        'answersSetString' => 'map[string,string]',
        'appRevisionId' => 'string',
        'appliedFiles' => 'map[string,string]',
        'conditions' => '\Rancher\Model\AppConditionModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'externalId' => 'string',
        'files' => 'map[string,string]',
        'helmVersion' => 'string',
        'labels' => 'map[string,string]',
        'lastAppliedTemplate' => 'string',
        'maxRevisionCount' => 'int',
        'multiClusterAppId' => 'string',
        'name' => 'string',
        'namespaceId' => 'string',
        'notes' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'projectId' => 'string',
        'prune' => 'boolean',
        'removed' => '\DateTime',
        'state' => 'string',
        'targetNamespace' => 'string',
        'timeout' => 'int',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'valuesYaml' => 'string',
        'wait' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'answers' => 'setAnswers',
        'answersSetString' => 'setAnswersSetString',
        'appRevisionId' => 'setAppRevisionId',
        'appliedFiles' => 'setAppliedFiles',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'externalId' => 'setExternalId',
        'files' => 'setFiles',
        'helmVersion' => 'setHelmVersion',
        'labels' => 'setLabels',
        'lastAppliedTemplate' => 'setLastAppliedTemplate',
        'maxRevisionCount' => 'setMaxRevisionCount',
        'multiClusterAppId' => 'setMultiClusterAppId',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'notes' => 'setNotes',
        'ownerReferences' => 'setOwnerReferences',
        'projectId' => 'setProjectId',
        'prune' => 'setPrune',
        'removed' => 'setRemoved',
        'state' => 'setState',
        'targetNamespace' => 'setTargetNamespace',
        'timeout' => 'setTimeout',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'valuesYaml' => 'setValuesYaml',
        'wait' => 'setWait',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'answers' => 'getAnswers',
        'answersSetString' => 'getAnswersSetString',
        'appRevisionId' => 'getAppRevisionId',
        'appliedFiles' => 'getAppliedFiles',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'externalId' => 'getExternalId',
        'files' => 'getFiles',
        'helmVersion' => 'getHelmVersion',
        'labels' => 'getLabels',
        'lastAppliedTemplate' => 'getLastAppliedTemplate',
        'maxRevisionCount' => 'getMaxRevisionCount',
        'multiClusterAppId' => 'getMultiClusterAppId',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'notes' => 'getNotes',
        'ownerReferences' => 'getOwnerReferences',
        'projectId' => 'getProjectId',
        'prune' => 'getPrune',
        'removed' => 'getRemoved',
        'state' => 'getState',
        'targetNamespace' => 'getTargetNamespace',
        'timeout' => 'getTimeout',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'valuesYaml' => 'getValuesYaml',
        'wait' => 'getWait',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['answersSetString'] = isset($data['answersSetString']) ? $data['answersSetString'] : null;
        $this->container['appRevisionId'] = isset($data['appRevisionId']) ? $data['appRevisionId'] : null;
        $this->container['appliedFiles'] = isset($data['appliedFiles']) ? $data['appliedFiles'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['helmVersion'] = isset($data['helmVersion']) ? $data['helmVersion'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['lastAppliedTemplate'] = isset($data['lastAppliedTemplate']) ? $data['lastAppliedTemplate'] : null;
        $this->container['maxRevisionCount'] = isset($data['maxRevisionCount']) ? $data['maxRevisionCount'] : null;
        $this->container['multiClusterAppId'] = isset($data['multiClusterAppId']) ? $data['multiClusterAppId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['prune'] = isset($data['prune']) ? $data['prune'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['targetNamespace'] = isset($data['targetNamespace']) ? $data['targetNamespace'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['valuesYaml'] = isset($data['valuesYaml']) ? $data['valuesYaml'] : null;
        $this->container['wait'] = isset($data['wait']) ? $data['wait'] : null;
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
     * @return string[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param string[] $answers
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }


    /**
     * Gets answersSetString
     * @return string[]
     */
    public function getAnswersSetString()
    {
        return $this->container['answersSetString'];
    }

    /**
     * Sets answersSetString
     * @param string[] $answersSetString
     * @return $this
     */
    public function setAnswersSetString($answersSetString)
    {
        $this->container['answersSetString'] = $answersSetString;

        return $this;
    }


    /**
     * Gets appRevisionId
     * @return string
     */
    public function getAppRevisionId()
    {
        return $this->container['appRevisionId'];
    }

    /**
     * Sets appRevisionId
     * @param string $appRevisionId
     * @return $this
     */
    public function setAppRevisionId($appRevisionId)
    {
        $this->container['appRevisionId'] = $appRevisionId;

        return $this;
    }


    /**
     * Gets appliedFiles
     * @return string[]
     */
    public function getAppliedFiles()
    {
        return $this->container['appliedFiles'];
    }

    /**
     * Sets appliedFiles
     * @param string[] $appliedFiles
     * @return $this
     */
    public function setAppliedFiles($appliedFiles)
    {
        $this->container['appliedFiles'] = $appliedFiles;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\AppConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\AppConditionModel[] $conditions
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
     * Gets helmVersion
     * @return string
     */
    public function getHelmVersion()
    {
        return $this->container['helmVersion'];
    }

    /**
     * Sets helmVersion
     * @param string $helmVersion
     * @return $this
     */
    public function setHelmVersion($helmVersion)
    {
        $this->container['helmVersion'] = $helmVersion;

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
     * Gets lastAppliedTemplate
     * @return string
     */
    public function getLastAppliedTemplate()
    {
        return $this->container['lastAppliedTemplate'];
    }

    /**
     * Sets lastAppliedTemplate
     * @param string $lastAppliedTemplate
     * @return $this
     */
    public function setLastAppliedTemplate($lastAppliedTemplate)
    {
        $this->container['lastAppliedTemplate'] = $lastAppliedTemplate;

        return $this;
    }


    /**
     * Gets maxRevisionCount
     * @return int
     */
    public function getMaxRevisionCount()
    {
        return $this->container['maxRevisionCount'];
    }

    /**
     * Sets maxRevisionCount
     * @param int $maxRevisionCount
     * @return $this
     */
    public function setMaxRevisionCount($maxRevisionCount)
    {
        $this->container['maxRevisionCount'] = $maxRevisionCount;

        return $this;
    }


    /**
     * Gets multiClusterAppId
     * @return string
     */
    public function getMultiClusterAppId()
    {
        return $this->container['multiClusterAppId'];
    }

    /**
     * Sets multiClusterAppId
     * @param string $multiClusterAppId
     * @return $this
     */
    public function setMultiClusterAppId($multiClusterAppId)
    {
        $this->container['multiClusterAppId'] = $multiClusterAppId;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }


    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }


    /**
     * Gets prune
     * @return boolean
     */
    public function getPrune()
    {
        return $this->container['prune'];
    }

    /**
     * Sets prune
     * @param boolean $prune
     * @return $this
     */
    public function setPrune($prune)
    {
        $this->container['prune'] = $prune;

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
     * Gets targetNamespace
     * @return string
     */
    public function getTargetNamespace()
    {
        return $this->container['targetNamespace'];
    }

    /**
     * Sets targetNamespace
     * @param string $targetNamespace
     * @return $this
     */
    public function setTargetNamespace($targetNamespace)
    {
        $this->container['targetNamespace'] = $targetNamespace;

        return $this;
    }


    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

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
     * Gets valuesYaml
     * @return string
     */
    public function getValuesYaml()
    {
        return $this->container['valuesYaml'];
    }

    /**
     * Sets valuesYaml
     * @param string $valuesYaml
     * @return $this
     */
    public function setValuesYaml($valuesYaml)
    {
        $this->container['valuesYaml'] = $valuesYaml;

        return $this;
    }


    /**
     * Gets wait
     * @return boolean
     */
    public function getWait()
    {
        return $this->container['wait'];
    }

    /**
     * Sets wait
     * @param boolean $wait
     * @return $this
     */
    public function setWait($wait)
    {
        $this->container['wait'] = $wait;

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

