<?php

/**
 * ClusterLoggingSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterLoggingSpecModel implements ArrayAccess
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
        'clusterId',
        'customTargetConfig',
        'displayName',
        'elasticsearchConfig',
        'fluentForwarderConfig',
        'includeSystemComponent',
        'kafkaConfig',
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
        'clusterId',
        'customTargetConfig',
        'displayName',
        'elasticsearchConfig',
        'fluentForwarderConfig',
        'includeSystemComponent',
        'kafkaConfig',
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
        'clusterId' => 'string',
        'customTargetConfig' => '\Rancher\Model\CustomTargetConfigModel',
        'displayName' => 'string',
        'elasticsearchConfig' => '\Rancher\Model\ElasticsearchConfigModel',
        'fluentForwarderConfig' => '\Rancher\Model\FluentForwarderConfigModel',
        'includeSystemComponent' => 'boolean',
        'kafkaConfig' => '\Rancher\Model\KafkaConfigModel',
        'outputFlushInterval' => 'int',
        'outputTags' => 'map[string]',
        'splunkConfig' => '\Rancher\Model\SplunkConfigModel',
        'syslogConfig' => '\Rancher\Model\SyslogConfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterId' => 'setClusterId',
        'customTargetConfig' => 'setCustomTargetConfig',
        'displayName' => 'setDisplayName',
        'elasticsearchConfig' => 'setElasticsearchConfig',
        'fluentForwarderConfig' => 'setFluentForwarderConfig',
        'includeSystemComponent' => 'setIncludeSystemComponent',
        'kafkaConfig' => 'setKafkaConfig',
        'outputFlushInterval' => 'setOutputFlushInterval',
        'outputTags' => 'setOutputTags',
        'splunkConfig' => 'setSplunkConfig',
        'syslogConfig' => 'setSyslogConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterId' => 'getClusterId',
        'customTargetConfig' => 'getCustomTargetConfig',
        'displayName' => 'getDisplayName',
        'elasticsearchConfig' => 'getElasticsearchConfig',
        'fluentForwarderConfig' => 'getFluentForwarderConfig',
        'includeSystemComponent' => 'getIncludeSystemComponent',
        'kafkaConfig' => 'getKafkaConfig',
        'outputFlushInterval' => 'getOutputFlushInterval',
        'outputTags' => 'getOutputTags',
        'splunkConfig' => 'getSplunkConfig',
        'syslogConfig' => 'getSyslogConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['customTargetConfig'] = isset($data['customTargetConfig']) ? $data['customTargetConfig'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['elasticsearchConfig'] = isset($data['elasticsearchConfig']) ? $data['elasticsearchConfig'] : null;
        $this->container['fluentForwarderConfig'] = isset($data['fluentForwarderConfig']) ? $data['fluentForwarderConfig'] : null;
        $this->container['includeSystemComponent'] = isset($data['includeSystemComponent']) ? $data['includeSystemComponent'] : null;
        $this->container['kafkaConfig'] = isset($data['kafkaConfig']) ? $data['kafkaConfig'] : null;
        $this->container['outputFlushInterval'] = isset($data['outputFlushInterval']) ? $data['outputFlushInterval'] : null;
        $this->container['outputTags'] = isset($data['outputTags']) ? $data['outputTags'] : null;
        $this->container['splunkConfig'] = isset($data['splunkConfig']) ? $data['splunkConfig'] : null;
        $this->container['syslogConfig'] = isset($data['syslogConfig']) ? $data['syslogConfig'] : null;
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

