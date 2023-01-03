<?php

/**
 * WechatConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class WechatConfigModel implements ArrayAccess
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
        'agent',
        'apiUrl',
        'corp',
        'defaultRecipient',
        'proxyUrl',
        'recipientType',
        'secret',
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
        'agent',
        'apiUrl',
        'corp',
        'defaultRecipient',
        'proxyUrl',
        'recipientType',
        'secret',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'agent' => 'string',
        'apiUrl' => 'string',
        'corp' => 'string',
        'defaultRecipient' => 'string',
        'proxyUrl' => 'string',
        'recipientType' => 'string',
        'secret' => '\Rancher\Model\PasswordModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'agent' => 'setAgent',
        'apiUrl' => 'setApiUrl',
        'corp' => 'setCorp',
        'defaultRecipient' => 'setDefaultRecipient',
        'proxyUrl' => 'setProxyUrl',
        'recipientType' => 'setRecipientType',
        'secret' => 'setSecret',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'agent' => 'getAgent',
        'apiUrl' => 'getApiUrl',
        'corp' => 'getCorp',
        'defaultRecipient' => 'getDefaultRecipient',
        'proxyUrl' => 'getProxyUrl',
        'recipientType' => 'getRecipientType',
        'secret' => 'getSecret',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['apiUrl'] = isset($data['apiUrl']) ? $data['apiUrl'] : null;
        $this->container['corp'] = isset($data['corp']) ? $data['corp'] : null;
        $this->container['defaultRecipient'] = isset($data['defaultRecipient']) ? $data['defaultRecipient'] : null;
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['recipientType'] = isset($data['recipientType']) ? $data['recipientType'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
    }

    /**
     * Gets agent
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     * @param string $agent
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }


    /**
     * Gets apiUrl
     * @return string
     */
    public function getApiUrl()
    {
        return $this->container['apiUrl'];
    }

    /**
     * Sets apiUrl
     * @param string $apiUrl
     * @return $this
     */
    public function setApiUrl($apiUrl)
    {
        $this->container['apiUrl'] = $apiUrl;

        return $this;
    }


    /**
     * Gets corp
     * @return string
     */
    public function getCorp()
    {
        return $this->container['corp'];
    }

    /**
     * Sets corp
     * @param string $corp
     * @return $this
     */
    public function setCorp($corp)
    {
        $this->container['corp'] = $corp;

        return $this;
    }


    /**
     * Gets defaultRecipient
     * @return string
     */
    public function getDefaultRecipient()
    {
        return $this->container['defaultRecipient'];
    }

    /**
     * Sets defaultRecipient
     * @param string $defaultRecipient
     * @return $this
     */
    public function setDefaultRecipient($defaultRecipient)
    {
        $this->container['defaultRecipient'] = $defaultRecipient;

        return $this;
    }


    /**
     * Gets proxyUrl
     * @return string
     */
    public function getProxyUrl()
    {
        return $this->container['proxyUrl'];
    }

    /**
     * Sets proxyUrl
     * @param string $proxyUrl
     * @return $this
     */
    public function setProxyUrl($proxyUrl)
    {
        $this->container['proxyUrl'] = $proxyUrl;

        return $this;
    }


    /**
     * Gets recipientType
     * @return string
     */
    public function getRecipientType()
    {
        return $this->container['recipientType'];
    }

    /**
     * Sets recipientType
     * @param string $recipientType
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $this->container['recipientType'] = $recipientType;

        return $this;
    }


    /**
     * Gets secret
     * @return \Rancher\Model\PasswordModel
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     * @param \Rancher\Model\PasswordModel $secret
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

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

