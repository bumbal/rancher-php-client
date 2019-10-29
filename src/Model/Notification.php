<?php

namespace Rancher\Model;

use \ArrayAccess;

class Notification implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'message' => 'string',
        'pagerdutyConfig' => '\Rancher\Model\PagerdutyConfig',
        'slackConfig' => '\Rancher\Model\SlackConfig',
        'smtpConfig' => '\Rancher\Model\SmtpConfig',
        'webhookConfig' => '\Rancher\Model\WebhookConfig',
        'wechatConfig' => '\Rancher\Model\WechatConfig',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'message' => 'setMessage',
        'pagerdutyConfig' => 'setPagerdutyConfig',
        'slackConfig' => 'setSlackConfig',
        'smtpConfig' => 'setSmtpConfig',
        'webhookConfig' => 'setWebhookConfig',
        'wechatConfig' => 'setWechatConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'message' => 'getMessage',
        'pagerdutyConfig' => 'getPagerdutyConfig',
        'slackConfig' => 'getSlackConfig',
        'smtpConfig' => 'getSmtpConfig',
        'webhookConfig' => 'getWebhookConfig',
        'wechatConfig' => 'getWechatConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['pagerdutyConfig'] = isset($data['pagerdutyConfig']) ? $data['pagerdutyConfig'] : null;
        $this->container['slackConfig'] = isset($data['slackConfig']) ? $data['slackConfig'] : null;
        $this->container['smtpConfig'] = isset($data['smtpConfig']) ? $data['smtpConfig'] : null;
        $this->container['webhookConfig'] = isset($data['webhookConfig']) ? $data['webhookConfig'] : null;
        $this->container['wechatConfig'] = isset($data['wechatConfig']) ? $data['wechatConfig'] : null;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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

