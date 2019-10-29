<?php

namespace Rancher\Model;

use \ArrayAccess;

class Notifier implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'clusterId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'id' => 'string',
        'labels' => 'map[string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'pagerdutyConfig' => '\Rancher\Model\PagerdutyConfig',
        'removed' => '\DateTime',
        'slackConfig' => '\Rancher\Model\SlackConfig',
        'smtpConfig' => '\Rancher\Model\SmtpConfig',
        'state' => 'string',
        'status' => '\Rancher\Model\NotifierStatus',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'webhookConfig' => '\Rancher\Model\WebhookConfig',
        'wechatConfig' => '\Rancher\Model\WechatConfig',
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
        'id' => 'setId',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'pagerdutyConfig' => 'setPagerdutyConfig',
        'removed' => 'setRemoved',
        'slackConfig' => 'setSlackConfig',
        'smtpConfig' => 'setSmtpConfig',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'webhookConfig' => 'setWebhookConfig',
        'wechatConfig' => 'setWechatConfig',
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
        'id' => 'getId',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'pagerdutyConfig' => 'getPagerdutyConfig',
        'removed' => 'getRemoved',
        'slackConfig' => 'getSlackConfig',
        'smtpConfig' => 'getSmtpConfig',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'webhookConfig' => 'getWebhookConfig',
        'wechatConfig' => 'getWechatConfig',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['pagerdutyConfig'] = isset($data['pagerdutyConfig']) ? $data['pagerdutyConfig'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['slackConfig'] = isset($data['slackConfig']) ? $data['slackConfig'] : null;
        $this->container['smtpConfig'] = isset($data['smtpConfig']) ? $data['smtpConfig'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['webhookConfig'] = isset($data['webhookConfig']) ? $data['webhookConfig'] : null;
        $this->container['wechatConfig'] = isset($data['wechatConfig']) ? $data['wechatConfig'] : null;
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
     * Gets pagerdutyConfig
     * @return \Rancher\Model\PagerdutyConfig
     */
    public function getPagerdutyConfig()
    {
        return $this->container['pagerdutyConfig'];
    }

    /**
     * Sets pagerdutyConfig
     * @param \Rancher\Model\PagerdutyConfig $pagerdutyConfig
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
     * Gets slackConfig
     * @return \Rancher\Model\SlackConfig
     */
    public function getSlackConfig()
    {
        return $this->container['slackConfig'];
    }

    /**
     * Sets slackConfig
     * @param \Rancher\Model\SlackConfig $slackConfig
     * @return $this
     */
    public function setSlackConfig($slackConfig)
    {
        $this->container['slackConfig'] = $slackConfig;

        return $this;
    }


    /**
     * Gets smtpConfig
     * @return \Rancher\Model\SmtpConfig
     */
    public function getSmtpConfig()
    {
        return $this->container['smtpConfig'];
    }

    /**
     * Sets smtpConfig
     * @param \Rancher\Model\SmtpConfig $smtpConfig
     * @return $this
     */
    public function setSmtpConfig($smtpConfig)
    {
        $this->container['smtpConfig'] = $smtpConfig;

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
     * @return \Rancher\Model\NotifierStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\NotifierStatus $status
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
     * @return \Rancher\Model\WebhookConfig
     */
    public function getWebhookConfig()
    {
        return $this->container['webhookConfig'];
    }

    /**
     * Sets webhookConfig
     * @param \Rancher\Model\WebhookConfig $webhookConfig
     * @return $this
     */
    public function setWebhookConfig($webhookConfig)
    {
        $this->container['webhookConfig'] = $webhookConfig;

        return $this;
    }


    /**
     * Gets wechatConfig
     * @return \Rancher\Model\WechatConfig
     */
    public function getWechatConfig()
    {
        return $this->container['wechatConfig'];
    }

    /**
     * Sets wechatConfig
     * @param \Rancher\Model\WechatConfig $wechatConfig
     * @return $this
     */
    public function setWechatConfig($wechatConfig)
    {
        $this->container['wechatConfig'] = $wechatConfig;

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

