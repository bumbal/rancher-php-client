<?php

/**
 * AzurecredentialconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AzurecredentialconfigModel implements ArrayAccess
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
        'clientId',
        'clientSecret',
        'environment',
        'subscriptionId',
        'tenantId',
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
        'clientId',
        'clientSecret',
        'environment',
        'subscriptionId',
        'tenantId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clientId' => 'string',
        'clientSecret' => '\Rancher\Model\PasswordModel',
        'environment' => 'string',
        'subscriptionId' => 'string',
        'tenantId' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'environment' => 'setEnvironment',
        'subscriptionId' => 'setSubscriptionId',
        'tenantId' => 'setTenantId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'environment' => 'getEnvironment',
        'subscriptionId' => 'getSubscriptionId',
        'tenantId' => 'getTenantId',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
    }

    /**
     * Gets clientId
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }


    /**
     * Gets clientSecret
     * @return \Rancher\Model\PasswordModel
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param \Rancher\Model\PasswordModel $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }


    /**
     * Gets environment
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     * @param string $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }


    /**
     * Gets subscriptionId
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     * @param string $subscriptionId
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }


    /**
     * Gets tenantId
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * Sets tenantId
     * @param string $tenantId
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;

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

