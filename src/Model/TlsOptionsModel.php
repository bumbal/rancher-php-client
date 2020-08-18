<?php

/**
 * TlsOptionsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TlsOptionsModel implements ArrayAccess
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
        'credentialName',
        'httpsRedirect',
        'mode',
        'privateKey',
        'serverCertificate',
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
        'credentialName',
        'httpsRedirect',
        'mode',
        'privateKey',
        'serverCertificate',
        'subjectAltNames',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'caCertificates' => 'string',
        'credentialName' => 'string',
        'httpsRedirect' => 'boolean',
        'mode' => 'string',
        'privateKey' => 'string',
        'serverCertificate' => 'string',
        'subjectAltNames' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'caCertificates' => 'setCaCertificates',
        'credentialName' => 'setCredentialName',
        'httpsRedirect' => 'setHttpsRedirect',
        'mode' => 'setMode',
        'privateKey' => 'setPrivateKey',
        'serverCertificate' => 'setServerCertificate',
        'subjectAltNames' => 'setSubjectAltNames',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'caCertificates' => 'getCaCertificates',
        'credentialName' => 'getCredentialName',
        'httpsRedirect' => 'getHttpsRedirect',
        'mode' => 'getMode',
        'privateKey' => 'getPrivateKey',
        'serverCertificate' => 'getServerCertificate',
        'subjectAltNames' => 'getSubjectAltNames',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['caCertificates'] = isset($data['caCertificates']) ? $data['caCertificates'] : null;
        $this->container['credentialName'] = isset($data['credentialName']) ? $data['credentialName'] : null;
        $this->container['httpsRedirect'] = isset($data['httpsRedirect']) ? $data['httpsRedirect'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['serverCertificate'] = isset($data['serverCertificate']) ? $data['serverCertificate'] : null;
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
     * Gets credentialName
     * @return string
     */
    public function getCredentialName()
    {
        return $this->container['credentialName'];
    }

    /**
     * Sets credentialName
     * @param string $credentialName
     * @return $this
     */
    public function setCredentialName($credentialName)
    {
        $this->container['credentialName'] = $credentialName;

        return $this;
    }


    /**
     * Gets httpsRedirect
     * @return boolean
     */
    public function getHttpsRedirect()
    {
        return $this->container['httpsRedirect'];
    }

    /**
     * Sets httpsRedirect
     * @param boolean $httpsRedirect
     * @return $this
     */
    public function setHttpsRedirect($httpsRedirect)
    {
        $this->container['httpsRedirect'] = $httpsRedirect;

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
     * Gets serverCertificate
     * @return string
     */
    public function getServerCertificate()
    {
        return $this->container['serverCertificate'];
    }

    /**
     * Sets serverCertificate
     * @param string $serverCertificate
     * @return $this
     */
    public function setServerCertificate($serverCertificate)
    {
        $this->container['serverCertificate'] = $serverCertificate;

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

