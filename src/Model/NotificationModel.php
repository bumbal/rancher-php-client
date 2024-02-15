<?php

/**
 * NotificationModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NotificationModel implements ArrayAccess
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
        'dingtalkConfig',
        'message',
        'msteamsConfig',
        'pagerdutyConfig',
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
        'dingtalkConfig',
        'message',
        'msteamsConfig',
        'pagerdutyConfig',
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
        'dingtalkConfig' => '\Rancher\Model\DingtalkConfigModel',
        'message' => 'string',
        'msteamsConfig' => '\Rancher\Model\MsTeamsConfigModel',
        'pagerdutyConfig' => '\Rancher\Model\PagerdutyConfigModel',
        'slackConfig' => '\Rancher\Model\SlackConfigModel',
        'smtpConfig' => '\Rancher\Model\SmtpConfigModel',
        'webhookConfig' => '\Rancher\Model\WebhookConfigModel',
        'wechatConfig' => '\Rancher\Model\WechatConfigModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'dingtalkConfig' => 'setDingtalkConfig',
        'message' => 'setMessage',
        'msteamsConfig' => 'setMsteamsConfig',
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
        'dingtalkConfig' => 'getDingtalkConfig',
        'message' => 'getMessage',
        'msteamsConfig' => 'getMsteamsConfig',
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
        $this->container['dingtalkConfig'] = isset($data['dingtalkConfig']) ? $data['dingtalkConfig'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['msteamsConfig'] = isset($data['msteamsConfig']) ? $data['msteamsConfig'] : null;
        $this->container['pagerdutyConfig'] = isset($data['pagerdutyConfig']) ? $data['pagerdutyConfig'] : null;
        $this->container['slackConfig'] = isset($data['slackConfig']) ? $data['slackConfig'] : null;
        $this->container['smtpConfig'] = isset($data['smtpConfig']) ? $data['smtpConfig'] : null;
        $this->container['webhookConfig'] = isset($data['webhookConfig']) ? $data['webhookConfig'] : null;
        $this->container['wechatConfig'] = isset($data['wechatConfig']) ? $data['wechatConfig'] : null;
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

