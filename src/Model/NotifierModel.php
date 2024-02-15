<?php

/**
 * NotifierModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NotifierModel implements ArrayAccess
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
        'description',
        'dingtalkConfig',
        'labels',
        'msteamsConfig',
        'name',
        'namespaceId',
        'pagerdutyConfig',
        'sendResolved',
        'slackConfig',
        'smtpConfig',
        'webhookConfig',
        'wechatConfig',
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
        'description',
        'dingtalkConfig',
        'labels',
        'msteamsConfig',
        'name',
        'pagerdutyConfig',
        'sendResolved',
        'slackConfig',
        'smtpConfig',
        'webhookConfig',
        'wechatConfig',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'clusterId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'dingtalkConfig' => '\Rancher\Model\DingtalkConfigModel',
        'dingtalkCredentialSecret' => 'string',
        'id' => 'string',
        'labels' => 'map[string,string]',
        'msteamsConfig' => '\Rancher\Model\MsTeamsConfigModel',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'pagerdutyConfig' => '\Rancher\Model\PagerdutyConfigModel',
        'removed' => '\DateTime',
        'sendResolved' => 'boolean',
        'slackConfig' => '\Rancher\Model\SlackConfigModel',
        'smtpConfig' => '\Rancher\Model\SmtpConfigModel',
        'smtpCredentialSecret' => 'string',
        'state' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'webhookConfig' => '\Rancher\Model\WebhookConfigModel',
        'wechatConfig' => '\Rancher\Model\WechatConfigModel',
        'wechatCredentialSecret' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'clusterId' => 'setClusterId',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'dingtalkConfig' => 'setDingtalkConfig',
        'dingtalkCredentialSecret' => 'setDingtalkCredentialSecret',
        'id' => 'setId',
        'labels' => 'setLabels',
        'msteamsConfig' => 'setMsteamsConfig',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'pagerdutyConfig' => 'setPagerdutyConfig',
        'removed' => 'setRemoved',
        'sendResolved' => 'setSendResolved',
        'slackConfig' => 'setSlackConfig',
        'smtpConfig' => 'setSmtpConfig',
        'smtpCredentialSecret' => 'setSmtpCredentialSecret',
        'state' => 'setState',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'webhookConfig' => 'setWebhookConfig',
        'wechatConfig' => 'setWechatConfig',
        'wechatCredentialSecret' => 'setWechatCredentialSecret',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'clusterId' => 'getClusterId',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'dingtalkConfig' => 'getDingtalkConfig',
        'dingtalkCredentialSecret' => 'getDingtalkCredentialSecret',
        'id' => 'getId',
        'labels' => 'getLabels',
        'msteamsConfig' => 'getMsteamsConfig',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'pagerdutyConfig' => 'getPagerdutyConfig',
        'removed' => 'getRemoved',
        'sendResolved' => 'getSendResolved',
        'slackConfig' => 'getSlackConfig',
        'smtpConfig' => 'getSmtpConfig',
        'smtpCredentialSecret' => 'getSmtpCredentialSecret',
        'state' => 'getState',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'webhookConfig' => 'getWebhookConfig',
        'wechatConfig' => 'getWechatConfig',
        'wechatCredentialSecret' => 'getWechatCredentialSecret',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dingtalkConfig'] = isset($data['dingtalkConfig']) ? $data['dingtalkConfig'] : null;
        $this->container['dingtalkCredentialSecret'] = isset($data['dingtalkCredentialSecret']) ? $data['dingtalkCredentialSecret'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['msteamsConfig'] = isset($data['msteamsConfig']) ? $data['msteamsConfig'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['pagerdutyConfig'] = isset($data['pagerdutyConfig']) ? $data['pagerdutyConfig'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['sendResolved'] = isset($data['sendResolved']) ? $data['sendResolved'] : null;
        $this->container['slackConfig'] = isset($data['slackConfig']) ? $data['slackConfig'] : null;
        $this->container['smtpConfig'] = isset($data['smtpConfig']) ? $data['smtpConfig'] : null;
        $this->container['smtpCredentialSecret'] = isset($data['smtpCredentialSecret']) ? $data['smtpCredentialSecret'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['webhookConfig'] = isset($data['webhookConfig']) ? $data['webhookConfig'] : null;
        $this->container['wechatConfig'] = isset($data['wechatConfig']) ? $data['wechatConfig'] : null;
        $this->container['wechatCredentialSecret'] = isset($data['wechatCredentialSecret']) ? $data['wechatCredentialSecret'] : null;
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
     * Gets dingtalkConfig
     * @return \Rancher\Model\DingtalkConfigModel
     */
    public function getDingtalkConfig()
    {
        return $this->container['dingtalkConfig'];
    }

    /**
     * Sets dingtalkConfig
     * @param \Rancher\Model\DingtalkConfigModel $dingtalkConfig
     * @return $this
     */
    public function setDingtalkConfig($dingtalkConfig)
    {
        $this->container['dingtalkConfig'] = $dingtalkConfig;

        return $this;
    }


    /**
     * Gets dingtalkCredentialSecret
     * @return string
     */
    public function getDingtalkCredentialSecret()
    {
        return $this->container['dingtalkCredentialSecret'];
    }

    /**
     * Sets dingtalkCredentialSecret
     * @param string $dingtalkCredentialSecret
     * @return $this
     */
    public function setDingtalkCredentialSecret($dingtalkCredentialSecret)
    {
        $this->container['dingtalkCredentialSecret'] = $dingtalkCredentialSecret;

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
     * Gets msteamsConfig
     * @return \Rancher\Model\MsTeamsConfigModel
     */
    public function getMsteamsConfig()
    {
        return $this->container['msteamsConfig'];
    }

    /**
     * Sets msteamsConfig
     * @param \Rancher\Model\MsTeamsConfigModel $msteamsConfig
     * @return $this
     */
    public function setMsteamsConfig($msteamsConfig)
    {
        $this->container['msteamsConfig'] = $msteamsConfig;

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
     * Gets pagerdutyConfig
     * @return \Rancher\Model\PagerdutyConfigModel
     */
    public function getPagerdutyConfig()
    {
        return $this->container['pagerdutyConfig'];
    }

    /**
     * Sets pagerdutyConfig
     * @param \Rancher\Model\PagerdutyConfigModel $pagerdutyConfig
     * @return $this
     */
    public function setPagerdutyConfig($pagerdutyConfig)
    {
        $this->container['pagerdutyConfig'] = $pagerdutyConfig;

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
     * Gets sendResolved
     * @return boolean
     */
    public function getSendResolved()
    {
        return $this->container['sendResolved'];
    }

    /**
     * Sets sendResolved
     * @param boolean $sendResolved
     * @return $this
     */
    public function setSendResolved($sendResolved)
    {
        $this->container['sendResolved'] = $sendResolved;

        return $this;
    }


    /**
     * Gets slackConfig
     * @return \Rancher\Model\SlackConfigModel
     */
    public function getSlackConfig()
    {
        return $this->container['slackConfig'];
    }

    /**
     * Sets slackConfig
     * @param \Rancher\Model\SlackConfigModel $slackConfig
     * @return $this
     */
    public function setSlackConfig($slackConfig)
    {
        $this->container['slackConfig'] = $slackConfig;

        return $this;
    }


    /**
     * Gets smtpConfig
     * @return \Rancher\Model\SmtpConfigModel
     */
    public function getSmtpConfig()
    {
        return $this->container['smtpConfig'];
    }

    /**
     * Sets smtpConfig
     * @param \Rancher\Model\SmtpConfigModel $smtpConfig
     * @return $this
     */
    public function setSmtpConfig($smtpConfig)
    {
        $this->container['smtpConfig'] = $smtpConfig;

        return $this;
    }


    /**
     * Gets smtpCredentialSecret
     * @return string
     */
    public function getSmtpCredentialSecret()
    {
        return $this->container['smtpCredentialSecret'];
    }

    /**
     * Sets smtpCredentialSecret
     * @param string $smtpCredentialSecret
     * @return $this
     */
    public function setSmtpCredentialSecret($smtpCredentialSecret)
    {
        $this->container['smtpCredentialSecret'] = $smtpCredentialSecret;

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
     * Gets webhookConfig
     * @return \Rancher\Model\WebhookConfigModel
     */
    public function getWebhookConfig()
    {
        return $this->container['webhookConfig'];
    }

    /**
     * Sets webhookConfig
     * @param \Rancher\Model\WebhookConfigModel $webhookConfig
     * @return $this
     */
    public function setWebhookConfig($webhookConfig)
    {
        $this->container['webhookConfig'] = $webhookConfig;

        return $this;
    }


    /**
     * Gets wechatConfig
     * @return \Rancher\Model\WechatConfigModel
     */
    public function getWechatConfig()
    {
        return $this->container['wechatConfig'];
    }

    /**
     * Sets wechatConfig
     * @param \Rancher\Model\WechatConfigModel $wechatConfig
     * @return $this
     */
    public function setWechatConfig($wechatConfig)
    {
        $this->container['wechatConfig'] = $wechatConfig;

        return $this;
    }


    /**
     * Gets wechatCredentialSecret
     * @return string
     */
    public function getWechatCredentialSecret()
    {
        return $this->container['wechatCredentialSecret'];
    }

    /**
     * Sets wechatCredentialSecret
     * @param string $wechatCredentialSecret
     * @return $this
     */
    public function setWechatCredentialSecret($wechatCredentialSecret)
    {
        $this->container['wechatCredentialSecret'] = $wechatCredentialSecret;

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

