<?php

/**
 * ElasticsearchConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ElasticsearchConfigModel implements ArrayAccess
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
        'authPassword',
        'authUsername',
        'certificate',
        'clientCert',
        'clientKey',
        'clientKeyPass',
        'dateFormat',
        'endpoint',
        'indexPrefix',
        'sslVerify',
        'sslVersion',
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
        'authPassword',
        'authUsername',
        'certificate',
        'clientCert',
        'clientKey',
        'clientKeyPass',
        'dateFormat',
        'endpoint',
        'indexPrefix',
        'sslVerify',
        'sslVersion',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'authPassword' => '\Rancher\Model\PasswordModel',
        'authUsername' => 'string',
        'certificate' => 'string',
        'clientCert' => 'string',
        'clientKey' => 'string',
        'clientKeyPass' => 'string',
        'dateFormat' => 'string',
        'endpoint' => 'string',
        'indexPrefix' => 'string',
        'sslVerify' => 'boolean',
        'sslVersion' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'authPassword' => 'setAuthPassword',
        'authUsername' => 'setAuthUsername',
        'certificate' => 'setCertificate',
        'clientCert' => 'setClientCert',
        'clientKey' => 'setClientKey',
        'clientKeyPass' => 'setClientKeyPass',
        'dateFormat' => 'setDateFormat',
        'endpoint' => 'setEndpoint',
        'indexPrefix' => 'setIndexPrefix',
        'sslVerify' => 'setSslVerify',
        'sslVersion' => 'setSslVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'authPassword' => 'getAuthPassword',
        'authUsername' => 'getAuthUsername',
        'certificate' => 'getCertificate',
        'clientCert' => 'getClientCert',
        'clientKey' => 'getClientKey',
        'clientKeyPass' => 'getClientKeyPass',
        'dateFormat' => 'getDateFormat',
        'endpoint' => 'getEndpoint',
        'indexPrefix' => 'getIndexPrefix',
        'sslVerify' => 'getSslVerify',
        'sslVersion' => 'getSslVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['authPassword'] = isset($data['authPassword']) ? $data['authPassword'] : null;
        $this->container['authUsername'] = isset($data['authUsername']) ? $data['authUsername'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['clientCert'] = isset($data['clientCert']) ? $data['clientCert'] : null;
        $this->container['clientKey'] = isset($data['clientKey']) ? $data['clientKey'] : null;
        $this->container['clientKeyPass'] = isset($data['clientKeyPass']) ? $data['clientKeyPass'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['indexPrefix'] = isset($data['indexPrefix']) ? $data['indexPrefix'] : null;
        $this->container['sslVerify'] = isset($data['sslVerify']) ? $data['sslVerify'] : null;
        $this->container['sslVersion'] = isset($data['sslVersion']) ? $data['sslVersion'] : null;
    }

    /**
     * Gets authPassword
     * @return \Rancher\Model\PasswordModel
     */
    public function getAuthPassword()
    {
        return $this->container['authPassword'];
    }

    /**
     * Sets authPassword
     * @param \Rancher\Model\PasswordModel $authPassword
     * @return $this
     */
    public function setAuthPassword($authPassword)
    {
        $this->container['authPassword'] = $authPassword;

        return $this;
    }


    /**
     * Gets authUsername
     * @return string
     */
    public function getAuthUsername()
    {
        return $this->container['authUsername'];
    }

    /**
     * Sets authUsername
     * @param string $authUsername
     * @return $this
     */
    public function setAuthUsername($authUsername)
    {
        $this->container['authUsername'] = $authUsername;

        return $this;
    }


    /**
     * Gets certificate
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     * @param string $certificate
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }


    /**
     * Gets clientCert
     * @return string
     */
    public function getClientCert()
    {
        return $this->container['clientCert'];
    }

    /**
     * Sets clientCert
     * @param string $clientCert
     * @return $this
     */
    public function setClientCert($clientCert)
    {
        $this->container['clientCert'] = $clientCert;

        return $this;
    }


    /**
     * Gets clientKey
     * @return string
     */
    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    /**
     * Sets clientKey
     * @param string $clientKey
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->container['clientKey'] = $clientKey;

        return $this;
    }


    /**
     * Gets clientKeyPass
     * @return string
     */
    public function getClientKeyPass()
    {
        return $this->container['clientKeyPass'];
    }

    /**
     * Sets clientKeyPass
     * @param string $clientKeyPass
     * @return $this
     */
    public function setClientKeyPass($clientKeyPass)
    {
        $this->container['clientKeyPass'] = $clientKeyPass;

        return $this;
    }


    /**
     * Gets dateFormat
     * @return string
     */
    public function getDateFormat()
    {
        return $this->container['dateFormat'];
    }

    /**
     * Sets dateFormat
     * @param string $dateFormat
     * @return $this
     */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;

        return $this;
    }


    /**
     * Gets endpoint
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }


    /**
     * Gets indexPrefix
     * @return string
     */
    public function getIndexPrefix()
    {
        return $this->container['indexPrefix'];
    }

    /**
     * Sets indexPrefix
     * @param string $indexPrefix
     * @return $this
     */
    public function setIndexPrefix($indexPrefix)
    {
        $this->container['indexPrefix'] = $indexPrefix;

        return $this;
    }


    /**
     * Gets sslVerify
     * @return boolean
     */
    public function getSslVerify()
    {
        return $this->container['sslVerify'];
    }

    /**
     * Sets sslVerify
     * @param boolean $sslVerify
     * @return $this
     */
    public function setSslVerify($sslVerify)
    {
        $this->container['sslVerify'] = $sslVerify;

        return $this;
    }


    /**
     * Gets sslVersion
     * @return string
     */
    public function getSslVersion()
    {
        return $this->container['sslVersion'];
    }

    /**
     * Sets sslVersion
     * @param string $sslVersion
     * @return $this
     */
    public function setSslVersion($sslVersion)
    {
        $this->container['sslVersion'] = $sslVersion;

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

