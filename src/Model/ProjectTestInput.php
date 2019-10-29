<?php

namespace Rancher\Model;

use \ArrayAccess;

class ProjectTestInput implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'customTargetConfig' => '\Rancher\Model\CustomTargetConfig',
        'elasticsearchConfig' => '\Rancher\Model\ElasticsearchConfig',
        'fluentForwarderConfig' => '\Rancher\Model\FluentForwarderConfig',
        'kafkaConfig' => '\Rancher\Model\KafkaConfig',
        'outputTags' => 'map[string]',
        'projectId' => 'string',
        'splunkConfig' => '\Rancher\Model\SplunkConfig',
        'syslogConfig' => '\Rancher\Model\SyslogConfig',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'customTargetConfig' => 'setCustomTargetConfig',
        'elasticsearchConfig' => 'setElasticsearchConfig',
        'fluentForwarderConfig' => 'setFluentForwarderConfig',
        'kafkaConfig' => 'setKafkaConfig',
        'outputTags' => 'setOutputTags',
        'projectId' => 'setProjectId',
        'splunkConfig' => 'setSplunkConfig',
        'syslogConfig' => 'setSyslogConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'customTargetConfig' => 'getCustomTargetConfig',
        'elasticsearchConfig' => 'getElasticsearchConfig',
        'fluentForwarderConfig' => 'getFluentForwarderConfig',
        'kafkaConfig' => 'getKafkaConfig',
        'outputTags' => 'getOutputTags',
        'projectId' => 'getProjectId',
        'splunkConfig' => 'getSplunkConfig',
        'syslogConfig' => 'getSyslogConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['customTargetConfig'] = isset($data['customTargetConfig']) ? $data['customTargetConfig'] : null;
        $this->container['elasticsearchConfig'] = isset($data['elasticsearchConfig']) ? $data['elasticsearchConfig'] : null;
        $this->container['fluentForwarderConfig'] = isset($data['fluentForwarderConfig']) ? $data['fluentForwarderConfig'] : null;
        $this->container['kafkaConfig'] = isset($data['kafkaConfig']) ? $data['kafkaConfig'] : null;
        $this->container['outputTags'] = isset($data['outputTags']) ? $data['outputTags'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['splunkConfig'] = isset($data['splunkConfig']) ? $data['splunkConfig'] : null;
        $this->container['syslogConfig'] = isset($data['syslogConfig']) ? $data['syslogConfig'] : null;
    }

    /**
     * Gets customTargetConfig
     * @return \Rancher\Model\CustomTargetConfig
     */
    public function getCustomTargetConfig()
    {
        return $this->container['customTargetConfig'];
    }

    /**
     * Sets customTargetConfig
     * @param \Rancher\Model\CustomTargetConfig $customTargetConfig
     * @return $this
     */
    public function setCustomTargetConfig($customTargetConfig)
    {
        $this->container['customTargetConfig'] = $customTargetConfig;

        return $this;
    }


    /**
     * Gets elasticsearchConfig
     * @return \Rancher\Model\ElasticsearchConfig
     */
    public function getElasticsearchConfig()
    {
        return $this->container['elasticsearchConfig'];
    }

    /**
     * Sets elasticsearchConfig
     * @param \Rancher\Model\ElasticsearchConfig $elasticsearchConfig
     * @return $this
     */
    public function setElasticsearchConfig($elasticsearchConfig)
    {
        $this->container['elasticsearchConfig'] = $elasticsearchConfig;

        return $this;
    }


    /**
     * Gets fluentForwarderConfig
     * @return \Rancher\Model\FluentForwarderConfig
     */
    public function getFluentForwarderConfig()
    {
        return $this->container['fluentForwarderConfig'];
    }

    /**
     * Sets fluentForwarderConfig
     * @param \Rancher\Model\FluentForwarderConfig $fluentForwarderConfig
     * @return $this
     */
    public function setFluentForwarderConfig($fluentForwarderConfig)
    {
        $this->container['fluentForwarderConfig'] = $fluentForwarderConfig;

        return $this;
    }


    /**
     * Gets kafkaConfig
     * @return \Rancher\Model\KafkaConfig
     */
    public function getKafkaConfig()
    {
        return $this->container['kafkaConfig'];
    }

    /**
     * Sets kafkaConfig
     * @param \Rancher\Model\KafkaConfig $kafkaConfig
     * @return $this
     */
    public function setKafkaConfig($kafkaConfig)
    {
        $this->container['kafkaConfig'] = $kafkaConfig;

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
     * Gets splunkConfig
     * @return \Rancher\Model\SplunkConfig
     */
    public function getSplunkConfig()
    {
        return $this->container['splunkConfig'];
    }

    /**
     * Sets splunkConfig
     * @param \Rancher\Model\SplunkConfig $splunkConfig
     * @return $this
     */
    public function setSplunkConfig($splunkConfig)
    {
        $this->container['splunkConfig'] = $splunkConfig;

        return $this;
    }


    /**
     * Gets syslogConfig
     * @return \Rancher\Model\SyslogConfig
     */
    public function getSyslogConfig()
    {
        return $this->container['syslogConfig'];
    }

    /**
     * Sets syslogConfig
     * @param \Rancher\Model\SyslogConfig $syslogConfig
     * @return $this
     */
    public function setSyslogConfig($syslogConfig)
    {
        $this->container['syslogConfig'] = $syslogConfig;

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

