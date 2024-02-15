<?php

/**
 * ProviderConfigurationModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProviderConfigurationModel implements ArrayAccess
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
        'aescbc',
        'aesgcm',
        'identity',
        'kms',
        'secretbox',
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
        'aescbc',
        'aesgcm',
        'identity',
        'kms',
        'secretbox',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aescbc' => '\Rancher\Model\AesConfigurationModel',
        'aesgcm' => '\Rancher\Model\AesConfigurationModel',
        'identity' => '\Rancher\Model\IdentityConfigurationModel',
        'kms' => '\Rancher\Model\KmsConfigurationModel',
        'secretbox' => '\Rancher\Model\SecretboxConfigurationModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aescbc' => 'setAescbc',
        'aesgcm' => 'setAesgcm',
        'identity' => 'setIdentity',
        'kms' => 'setKms',
        'secretbox' => 'setSecretbox',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aescbc' => 'getAescbc',
        'aesgcm' => 'getAesgcm',
        'identity' => 'getIdentity',
        'kms' => 'getKms',
        'secretbox' => 'getSecretbox',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aescbc'] = isset($data['aescbc']) ? $data['aescbc'] : null;
        $this->container['aesgcm'] = isset($data['aesgcm']) ? $data['aesgcm'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['kms'] = isset($data['kms']) ? $data['kms'] : null;
        $this->container['secretbox'] = isset($data['secretbox']) ? $data['secretbox'] : null;
    }

    /**
     * Gets aescbc
     * @return \Rancher\Model\AesConfigurationModel
     */
    public function getAescbc()
    {
        return $this->container['aescbc'];
    }

    /**
     * Sets aescbc
     * @param \Rancher\Model\AesConfigurationModel $aescbc
     * @return $this
     */
    public function setAescbc($aescbc)
    {
        $this->container['aescbc'] = $aescbc;

        return $this;
    }


    /**
     * Gets aesgcm
     * @return \Rancher\Model\AesConfigurationModel
     */
    public function getAesgcm()
    {
        return $this->container['aesgcm'];
    }

    /**
     * Sets aesgcm
     * @param \Rancher\Model\AesConfigurationModel $aesgcm
     * @return $this
     */
    public function setAesgcm($aesgcm)
    {
        $this->container['aesgcm'] = $aesgcm;

        return $this;
    }


    /**
     * Gets identity
     * @return \Rancher\Model\IdentityConfigurationModel
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     * @param \Rancher\Model\IdentityConfigurationModel $identity
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }


    /**
     * Gets kms
     * @return \Rancher\Model\KmsConfigurationModel
     */
    public function getKms()
    {
        return $this->container['kms'];
    }

    /**
     * Sets kms
     * @param \Rancher\Model\KmsConfigurationModel $kms
     * @return $this
     */
    public function setKms($kms)
    {
        $this->container['kms'] = $kms;

        return $this;
    }


    /**
     * Gets secretbox
     * @return \Rancher\Model\SecretboxConfigurationModel
     */
    public function getSecretbox()
    {
        return $this->container['secretbox'];
    }

    /**
     * Sets secretbox
     * @param \Rancher\Model\SecretboxConfigurationModel $secretbox
     * @return $this
     */
    public function setSecretbox($secretbox)
    {
        $this->container['secretbox'] = $secretbox;

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

