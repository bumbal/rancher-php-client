<?php

/**
 * TlsSettingsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TlsSettingsModel implements ArrayAccess
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
        'caCertificates',
        'clientCertificate',
        'mode',
        'privateKey',
        'sni',
        'subjectAltNames',
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
        'caCertificates',
        'clientCertificate',
        'mode',
        'privateKey',
        'sni',
        'subjectAltNames',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'caCertificates' => 'string',
        'clientCertificate' => 'string',
        'mode' => 'string',
        'privateKey' => 'string',
        'sni' => 'string',
        'subjectAltNames' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'caCertificates' => 'setCaCertificates',
        'clientCertificate' => 'setClientCertificate',
        'mode' => 'setMode',
        'privateKey' => 'setPrivateKey',
        'sni' => 'setSni',
        'subjectAltNames' => 'setSubjectAltNames',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'caCertificates' => 'getCaCertificates',
        'clientCertificate' => 'getClientCertificate',
        'mode' => 'getMode',
        'privateKey' => 'getPrivateKey',
        'sni' => 'getSni',
        'subjectAltNames' => 'getSubjectAltNames',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['caCertificates'] = isset($data['caCertificates']) ? $data['caCertificates'] : null;
        $this->container['clientCertificate'] = isset($data['clientCertificate']) ? $data['clientCertificate'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['sni'] = isset($data['sni']) ? $data['sni'] : null;
        $this->container['subjectAltNames'] = isset($data['subjectAltNames']) ? $data['subjectAltNames'] : null;
    }

    /**
     * Gets caCertificates
     * @return string
     */
    public function getCaCertificates()
    {
        return $this->container['caCertificates'];
    }

    /**
     * Sets caCertificates
     * @param string $caCertificates
     * @return $this
     */
    public function setCaCertificates($caCertificates)
    {
        $this->container['caCertificates'] = $caCertificates;

        return $this;
    }


    /**
     * Gets clientCertificate
     * @return string
     */
    public function getClientCertificate()
    {
        return $this->container['clientCertificate'];
    }

    /**
     * Sets clientCertificate
     * @param string $clientCertificate
     * @return $this
     */
    public function setClientCertificate($clientCertificate)
    {
        $this->container['clientCertificate'] = $clientCertificate;

        return $this;
    }


    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }


    /**
     * Gets privateKey
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
     * Sets privateKey
     * @param string $privateKey
     * @return $this
     */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;

        return $this;
    }


    /**
     * Gets sni
     * @return string
     */
    public function getSni()
    {
        return $this->container['sni'];
    }

    /**
     * Sets sni
     * @param string $sni
     * @return $this
     */
    public function setSni($sni)
    {
        $this->container['sni'] = $sni;

        return $this;
    }


    /**
     * Gets subjectAltNames
     * @return string[]
     */
    public function getSubjectAltNames()
    {
        return $this->container['subjectAltNames'];
    }

    /**
     * Sets subjectAltNames
     * @param string[] $subjectAltNames
     * @return $this
     */
    public function setSubjectAltNames($subjectAltNames)
    {
        $this->container['subjectAltNames'] = $subjectAltNames;

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

