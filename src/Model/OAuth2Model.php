<?php

/**
 * OAuth2Model
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class OAuth2Model implements ArrayAccess
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
        'endpointParams',
        'scopes',
        'tokenUrl',
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
        'endpointParams',
        'scopes',
        'tokenUrl',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clientId' => '\Rancher\Model\SecretOrConfigMapModel',
        'clientSecret' => '\Rancher\Model\SecretKeySelectorModel',
        'endpointParams' => 'map[string,string]',
        'scopes' => 'string[]',
        'tokenUrl' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'endpointParams' => 'setEndpointParams',
        'scopes' => 'setScopes',
        'tokenUrl' => 'setTokenUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'endpointParams' => 'getEndpointParams',
        'scopes' => 'getScopes',
        'tokenUrl' => 'getTokenUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['endpointParams'] = isset($data['endpointParams']) ? $data['endpointParams'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['tokenUrl'] = isset($data['tokenUrl']) ? $data['tokenUrl'] : null;
    }

    /**
     * Gets clientId
     * @return \Rancher\Model\SecretOrConfigMapModel
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param \Rancher\Model\SecretOrConfigMapModel $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }


    /**
     * Gets clientSecret
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param \Rancher\Model\SecretKeySelectorModel $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }


    /**
     * Gets endpointParams
     * @return string[]
     */
    public function getEndpointParams()
    {
        return $this->container['endpointParams'];
    }

    /**
     * Sets endpointParams
     * @param string[] $endpointParams
     * @return $this
     */
    public function setEndpointParams($endpointParams)
    {
        $this->container['endpointParams'] = $endpointParams;

        return $this;
    }


    /**
     * Gets scopes
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     * @param string[] $scopes
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }


    /**
     * Gets tokenUrl
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->container['tokenUrl'];
    }

    /**
     * Sets tokenUrl
     * @param string $tokenUrl
     * @return $this
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->container['tokenUrl'] = $tokenUrl;

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

