<?php

/**
 * WebTLSConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class WebTLSConfigModel implements ArrayAccess
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
        'cert',
        'cipherSuites',
        'clientAuthType',
        'client_ca',
        'curvePreferences',
        'keySecret',
        'maxVersion',
        'minVersion',
        'preferServerCipherSuites',
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
        'cert',
        'cipherSuites',
        'clientAuthType',
        'client_ca',
        'curvePreferences',
        'keySecret',
        'maxVersion',
        'minVersion',
        'preferServerCipherSuites',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'cert' => '\Rancher\Model\SecretOrConfigMapModel',
        'cipherSuites' => 'string[]',
        'clientAuthType' => 'string',
        'client_ca' => '\Rancher\Model\SecretOrConfigMapModel',
        'curvePreferences' => 'string[]',
        'keySecret' => '\Rancher\Model\SecretKeySelectorModel',
        'maxVersion' => 'string',
        'minVersion' => 'string',
        'preferServerCipherSuites' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cert' => 'setCert',
        'cipherSuites' => 'setCipherSuites',
        'clientAuthType' => 'setClientAuthType',
        'client_ca' => 'setClient_ca',
        'curvePreferences' => 'setCurvePreferences',
        'keySecret' => 'setKeySecret',
        'maxVersion' => 'setMaxVersion',
        'minVersion' => 'setMinVersion',
        'preferServerCipherSuites' => 'setPreferServerCipherSuites',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cert' => 'getCert',
        'cipherSuites' => 'getCipherSuites',
        'clientAuthType' => 'getClientAuthType',
        'client_ca' => 'getClient_ca',
        'curvePreferences' => 'getCurvePreferences',
        'keySecret' => 'getKeySecret',
        'maxVersion' => 'getMaxVersion',
        'minVersion' => 'getMinVersion',
        'preferServerCipherSuites' => 'getPreferServerCipherSuites',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['cipherSuites'] = isset($data['cipherSuites']) ? $data['cipherSuites'] : null;
        $this->container['clientAuthType'] = isset($data['clientAuthType']) ? $data['clientAuthType'] : null;
        $this->container['client_ca'] = isset($data['client_ca']) ? $data['client_ca'] : null;
        $this->container['curvePreferences'] = isset($data['curvePreferences']) ? $data['curvePreferences'] : null;
        $this->container['keySecret'] = isset($data['keySecret']) ? $data['keySecret'] : null;
        $this->container['maxVersion'] = isset($data['maxVersion']) ? $data['maxVersion'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
        $this->container['preferServerCipherSuites'] = isset($data['preferServerCipherSuites']) ? $data['preferServerCipherSuites'] : null;
    }

    /**
     * Gets cert
     * @return \Rancher\Model\SecretOrConfigMapModel
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     * @param \Rancher\Model\SecretOrConfigMapModel $cert
     * @return $this
     */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;

        return $this;
    }


    /**
     * Gets cipherSuites
     * @return string[]
     */
    public function getCipherSuites()
    {
        return $this->container['cipherSuites'];
    }

    /**
     * Sets cipherSuites
     * @param string[] $cipherSuites
     * @return $this
     */
    public function setCipherSuites($cipherSuites)
    {
        $this->container['cipherSuites'] = $cipherSuites;

        return $this;
    }


    /**
     * Gets clientAuthType
     * @return string
     */
    public function getClientAuthType()
    {
        return $this->container['clientAuthType'];
    }

    /**
     * Sets clientAuthType
     * @param string $clientAuthType
     * @return $this
     */
    public function setClientAuthType($clientAuthType)
    {
        $this->container['clientAuthType'] = $clientAuthType;

        return $this;
    }


    /**
     * Gets client_ca
     * @return \Rancher\Model\SecretOrConfigMapModel
     */
    public function getClient_ca()
    {
        return $this->container['client_ca'];
    }

    /**
     * Sets client_ca
     * @param \Rancher\Model\SecretOrConfigMapModel $client_ca
     * @return $this
     */
    public function setClient_ca($client_ca)
    {
        $this->container['client_ca'] = $client_ca;

        return $this;
    }


    /**
     * Gets curvePreferences
     * @return string[]
     */
    public function getCurvePreferences()
    {
        return $this->container['curvePreferences'];
    }

    /**
     * Sets curvePreferences
     * @param string[] $curvePreferences
     * @return $this
     */
    public function setCurvePreferences($curvePreferences)
    {
        $this->container['curvePreferences'] = $curvePreferences;

        return $this;
    }


    /**
     * Gets keySecret
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getKeySecret()
    {
        return $this->container['keySecret'];
    }

    /**
     * Sets keySecret
     * @param \Rancher\Model\SecretKeySelectorModel $keySecret
     * @return $this
     */
    public function setKeySecret($keySecret)
    {
        $this->container['keySecret'] = $keySecret;

        return $this;
    }


    /**
     * Gets maxVersion
     * @return string
     */
    public function getMaxVersion()
    {
        return $this->container['maxVersion'];
    }

    /**
     * Sets maxVersion
     * @param string $maxVersion
     * @return $this
     */
    public function setMaxVersion($maxVersion)
    {
        $this->container['maxVersion'] = $maxVersion;

        return $this;
    }


    /**
     * Gets minVersion
     * @return string
     */
    public function getMinVersion()
    {
        return $this->container['minVersion'];
    }

    /**
     * Sets minVersion
     * @param string $minVersion
     * @return $this
     */
    public function setMinVersion($minVersion)
    {
        $this->container['minVersion'] = $minVersion;

        return $this;
    }


    /**
     * Gets preferServerCipherSuites
     * @return boolean
     */
    public function getPreferServerCipherSuites()
    {
        return $this->container['preferServerCipherSuites'];
    }

    /**
     * Sets preferServerCipherSuites
     * @param boolean $preferServerCipherSuites
     * @return $this
     */
    public function setPreferServerCipherSuites($preferServerCipherSuites)
    {
        $this->container['preferServerCipherSuites'] = $preferServerCipherSuites;

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

