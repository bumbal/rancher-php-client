<?php

/**
 * ClusterLoggingModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterLoggingModel implements ArrayAccess
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
        'clusterId',
        'customTargetConfig',
        'elasticsearchConfig',
        'enableJSONParsing',
        'fluentForwarderConfig',
        'includeSystemComponent',
        'kafkaConfig',
        'labels',
        'name',
        'namespaceId',
        'outputFlushInterval',
        'outputTags',
        'splunkConfig',
        'syslogConfig',
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
        'clusterId',
        'customTargetConfig',
        'elasticsearchConfig',
        'enableJSONParsing',
        'fluentForwarderConfig',
        'includeSystemComponent',
        'kafkaConfig',
        'labels',
        'name',
        'outputFlushInterval',
        'outputTags',
        'splunkConfig',
        'syslogConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'appliedSpec' => '\Rancher\Model\ClusterLoggingSpecModel',
        'clusterId' => 'string',
        'conditions' => '\Rancher\Model\LoggingConditionModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'customTargetConfig' => '\Rancher\Model\CustomTargetConfigModel',
        'elasticsearchConfig' => '\Rancher\Model\ElasticsearchConfigModel',
        'enableJSONParsing' => 'boolean',
        'failedSpec' => '\Rancher\Model\ClusterLoggingSpecModel',
        'fluentForwarderConfig' => '\Rancher\Model\FluentForwarderConfigModel',
        'id' => 'string',
        'includeSystemComponent' => 'boolean',
        'kafkaConfig' => '\Rancher\Model\KafkaConfigModel',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'outputFlushInterval' => 'int',
        'outputTags' => 'map[string,string]',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'splunkConfig' => '\Rancher\Model\SplunkConfigModel',
        'state' => 'string',
        'syslogConfig' => '\Rancher\Model\SyslogConfigModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'appliedSpec' => 'setAppliedSpec',
        'clusterId' => 'setClusterId',
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'customTargetConfig' => 'setCustomTargetConfig',
        'elasticsearchConfig' => 'setElasticsearchConfig',
        'enableJSONParsing' => 'setEnableJSONParsing',
        'failedSpec' => 'setFailedSpec',
        'fluentForwarderConfig' => 'setFluentForwarderConfig',
        'id' => 'setId',
        'includeSystemComponent' => 'setIncludeSystemComponent',
        'kafkaConfig' => 'setKafkaConfig',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'outputFlushInterval' => 'setOutputFlushInterval',
        'outputTags' => 'setOutputTags',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'splunkConfig' => 'setSplunkConfig',
        'state' => 'setState',
        'syslogConfig' => 'setSyslogConfig',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'appliedSpec' => 'getAppliedSpec',
        'clusterId' => 'getClusterId',
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'customTargetConfig' => 'getCustomTargetConfig',
        'elasticsearchConfig' => 'getElasticsearchConfig',
        'enableJSONParsing' => 'getEnableJSONParsing',
        'failedSpec' => 'getFailedSpec',
        'fluentForwarderConfig' => 'getFluentForwarderConfig',
        'id' => 'getId',
        'includeSystemComponent' => 'getIncludeSystemComponent',
        'kafkaConfig' => 'getKafkaConfig',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'outputFlushInterval' => 'getOutputFlushInterval',
        'outputTags' => 'getOutputTags',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'splunkConfig' => 'getSplunkConfig',
        'state' => 'getState',
        'syslogConfig' => 'getSyslogConfig',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['appliedSpec'] = isset($data['appliedSpec']) ? $data['appliedSpec'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['customTargetConfig'] = isset($data['customTargetConfig']) ? $data['customTargetConfig'] : null;
        $this->container['elasticsearchConfig'] = isset($data['elasticsearchConfig']) ? $data['elasticsearchConfig'] : null;
        $this->container['enableJSONParsing'] = isset($data['enableJSONParsing']) ? $data['enableJSONParsing'] : null;
        $this->container['failedSpec'] = isset($data['failedSpec']) ? $data['failedSpec'] : null;
        $this->container['fluentForwarderConfig'] = isset($data['fluentForwarderConfig']) ? $data['fluentForwarderConfig'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['includeSystemComponent'] = isset($data['includeSystemComponent']) ? $data['includeSystemComponent'] : null;
        $this->container['kafkaConfig'] = isset($data['kafkaConfig']) ? $data['kafkaConfig'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['outputFlushInterval'] = isset($data['outputFlushInterval']) ? $data['outputFlushInterval'] : null;
        $this->container['outputTags'] = isset($data['outputTags']) ? $data['outputTags'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['splunkConfig'] = isset($data['splunkConfig']) ? $data['splunkConfig'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['syslogConfig'] = isset($data['syslogConfig']) ? $data['syslogConfig'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
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
     * Gets appliedSpec
     * @return \Rancher\Model\ClusterLoggingSpecModel
     */
    public function getAppliedSpec()
    {
        return $this->container['appliedSpec'];
    }

    /**
     * Sets appliedSpec
     * @param \Rancher\Model\ClusterLoggingSpecModel $appliedSpec
     * @return $this
     */
    public function setAppliedSpec($appliedSpec)
    {
        $this->container['appliedSpec'] = $appliedSpec;

        return $this;
    }


    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\LoggingConditionModel[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\LoggingConditionModel[] $conditions
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
     * Gets customTargetConfig
     * @return \Rancher\Model\CustomTargetConfigModel
     */
    public function getCustomTargetConfig()
    {
        return $this->container['customTargetConfig'];
    }

    /**
     * Sets customTargetConfig
     * @param \Rancher\Model\CustomTargetConfigModel $customTargetConfig
     * @return $this
     */
    public function setCustomTargetConfig($customTargetConfig)
    {
        $this->container['customTargetConfig'] = $customTargetConfig;

        return $this;
    }


    /**
     * Gets elasticsearchConfig
     * @return \Rancher\Model\ElasticsearchConfigModel
     */
    public function getElasticsearchConfig()
    {
        return $this->container['elasticsearchConfig'];
    }

    /**
     * Sets elasticsearchConfig
     * @param \Rancher\Model\ElasticsearchConfigModel $elasticsearchConfig
     * @return $this
     */
    public function setElasticsearchConfig($elasticsearchConfig)
    {
        $this->container['elasticsearchConfig'] = $elasticsearchConfig;

        return $this;
    }


    /**
     * Gets enableJSONParsing
     * @return boolean
     */
    public function getEnableJSONParsing()
    {
        return $this->container['enableJSONParsing'];
    }

    /**
     * Sets enableJSONParsing
     * @param boolean $enableJSONParsing
     * @return $this
     */
    public function setEnableJSONParsing($enableJSONParsing)
    {
        $this->container['enableJSONParsing'] = $enableJSONParsing;

        return $this;
    }


    /**
     * Gets failedSpec
     * @return \Rancher\Model\ClusterLoggingSpecModel
     */
    public function getFailedSpec()
    {
        return $this->container['failedSpec'];
    }

    /**
     * Sets failedSpec
     * @param \Rancher\Model\ClusterLoggingSpecModel $failedSpec
     * @return $this
     */
    public function setFailedSpec($failedSpec)
    {
        $this->container['failedSpec'] = $failedSpec;

        return $this;
    }


    /**
     * Gets fluentForwarderConfig
     * @return \Rancher\Model\FluentForwarderConfigModel
     */
    public function getFluentForwarderConfig()
    {
        return $this->container['fluentForwarderConfig'];
    }

    /**
     * Sets fluentForwarderConfig
     * @param \Rancher\Model\FluentForwarderConfigModel $fluentForwarderConfig
     * @return $this
     */
    public function setFluentForwarderConfig($fluentForwarderConfig)
    {
        $this->container['fluentForwarderConfig'] = $fluentForwarderConfig;

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
     * Gets includeSystemComponent
     * @return boolean
     */
    public function getIncludeSystemComponent()
    {
        return $this->container['includeSystemComponent'];
    }

    /**
     * Sets includeSystemComponent
     * @param boolean $includeSystemComponent
     * @return $this
     */
    public function setIncludeSystemComponent($includeSystemComponent)
    {
        $this->container['includeSystemComponent'] = $includeSystemComponent;

        return $this;
    }


    /**
     * Gets kafkaConfig
     * @return \Rancher\Model\KafkaConfigModel
     */
    public function getKafkaConfig()
    {
        return $this->container['kafkaConfig'];
    }

    /**
     * Sets kafkaConfig
     * @param \Rancher\Model\KafkaConfigModel $kafkaConfig
     * @return $this
     */
    public function setKafkaConfig($kafkaConfig)
    {
        $this->container['kafkaConfig'] = $kafkaConfig;

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
     * Gets outputFlushInterval
     * @return int
     */
    public function getOutputFlushInterval()
    {
        return $this->container['outputFlushInterval'];
    }

    /**
     * Sets outputFlushInterval
     * @param int $outputFlushInterval
     * @return $this
     */
    public function setOutputFlushInterval($outputFlushInterval)
    {
        $this->container['outputFlushInterval'] = $outputFlushInterval;

        return $this;
    }


    /**
     * Gets outputTags
     * @return string[]
     */
    public function getOutputTags()
    {
        return $this->container['outputTags'];
    }

    /**
     * Sets outputTags
     * @param string[] $outputTags
     * @return $this
     */
    public function setOutputTags($outputTags)
    {
        $this->container['outputTags'] = $outputTags;

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
     * Gets splunkConfig
     * @return \Rancher\Model\SplunkConfigModel
     */
    public function getSplunkConfig()
    {
        return $this->container['splunkConfig'];
    }

    /**
     * Sets splunkConfig
     * @param \Rancher\Model\SplunkConfigModel $splunkConfig
     * @return $this
     */
    public function setSplunkConfig($splunkConfig)
    {
        $this->container['splunkConfig'] = $splunkConfig;

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
     * Gets syslogConfig
     * @return \Rancher\Model\SyslogConfigModel
     */
    public function getSyslogConfig()
    {
        return $this->container['syslogConfig'];
    }

    /**
     * Sets syslogConfig
     * @param \Rancher\Model\SyslogConfigModel $syslogConfig
     * @return $this
     */
    public function setSyslogConfig($syslogConfig)
    {
        $this->container['syslogConfig'] = $syslogConfig;

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

