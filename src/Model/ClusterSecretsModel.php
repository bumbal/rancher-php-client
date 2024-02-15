<?php

/**
 * ClusterSecretsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterSecretsModel implements ArrayAccess
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aadClientCertSecret' => 'string',
        'aadClientSecret' => 'string',
        'aciAPICUserKeySecret' => 'string',
        'aciKafkaClientKeySecret' => 'string',
        'aciTokenSecret' => 'string',
        'bastionHostSSHKeySecret' => 'string',
        'kubeletExtraEnvSecret' => 'string',
        'openStackSecret' => 'string',
        'privateRegistryECRSecret' => 'string',
        'privateRegistrySecret' => 'string',
        'privateRegistryURL' => 'string',
        's3CredentialSecret' => 'string',
        'secretsEncryptionProvidersSecret' => 'string',
        'virtualCenterSecret' => 'string',
        'vsphereSecret' => 'string',
        'weavePasswordSecret' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aadClientCertSecret' => 'setAadClientCertSecret',
        'aadClientSecret' => 'setAadClientSecret',
        'aciAPICUserKeySecret' => 'setAciAPICUserKeySecret',
        'aciKafkaClientKeySecret' => 'setAciKafkaClientKeySecret',
        'aciTokenSecret' => 'setAciTokenSecret',
        'bastionHostSSHKeySecret' => 'setBastionHostSSHKeySecret',
        'kubeletExtraEnvSecret' => 'setKubeletExtraEnvSecret',
        'openStackSecret' => 'setOpenStackSecret',
        'privateRegistryECRSecret' => 'setPrivateRegistryECRSecret',
        'privateRegistrySecret' => 'setPrivateRegistrySecret',
        'privateRegistryURL' => 'setPrivateRegistryURL',
        's3CredentialSecret' => 'setS3CredentialSecret',
        'secretsEncryptionProvidersSecret' => 'setSecretsEncryptionProvidersSecret',
        'virtualCenterSecret' => 'setVirtualCenterSecret',
        'vsphereSecret' => 'setVsphereSecret',
        'weavePasswordSecret' => 'setWeavePasswordSecret',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aadClientCertSecret' => 'getAadClientCertSecret',
        'aadClientSecret' => 'getAadClientSecret',
        'aciAPICUserKeySecret' => 'getAciAPICUserKeySecret',
        'aciKafkaClientKeySecret' => 'getAciKafkaClientKeySecret',
        'aciTokenSecret' => 'getAciTokenSecret',
        'bastionHostSSHKeySecret' => 'getBastionHostSSHKeySecret',
        'kubeletExtraEnvSecret' => 'getKubeletExtraEnvSecret',
        'openStackSecret' => 'getOpenStackSecret',
        'privateRegistryECRSecret' => 'getPrivateRegistryECRSecret',
        'privateRegistrySecret' => 'getPrivateRegistrySecret',
        'privateRegistryURL' => 'getPrivateRegistryURL',
        's3CredentialSecret' => 'getS3CredentialSecret',
        'secretsEncryptionProvidersSecret' => 'getSecretsEncryptionProvidersSecret',
        'virtualCenterSecret' => 'getVirtualCenterSecret',
        'vsphereSecret' => 'getVsphereSecret',
        'weavePasswordSecret' => 'getWeavePasswordSecret',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aadClientCertSecret'] = isset($data['aadClientCertSecret']) ? $data['aadClientCertSecret'] : null;
        $this->container['aadClientSecret'] = isset($data['aadClientSecret']) ? $data['aadClientSecret'] : null;
        $this->container['aciAPICUserKeySecret'] = isset($data['aciAPICUserKeySecret']) ? $data['aciAPICUserKeySecret'] : null;
        $this->container['aciKafkaClientKeySecret'] = isset($data['aciKafkaClientKeySecret']) ? $data['aciKafkaClientKeySecret'] : null;
        $this->container['aciTokenSecret'] = isset($data['aciTokenSecret']) ? $data['aciTokenSecret'] : null;
        $this->container['bastionHostSSHKeySecret'] = isset($data['bastionHostSSHKeySecret']) ? $data['bastionHostSSHKeySecret'] : null;
        $this->container['kubeletExtraEnvSecret'] = isset($data['kubeletExtraEnvSecret']) ? $data['kubeletExtraEnvSecret'] : null;
        $this->container['openStackSecret'] = isset($data['openStackSecret']) ? $data['openStackSecret'] : null;
        $this->container['privateRegistryECRSecret'] = isset($data['privateRegistryECRSecret']) ? $data['privateRegistryECRSecret'] : null;
        $this->container['privateRegistrySecret'] = isset($data['privateRegistrySecret']) ? $data['privateRegistrySecret'] : null;
        $this->container['privateRegistryURL'] = isset($data['privateRegistryURL']) ? $data['privateRegistryURL'] : null;
        $this->container['s3CredentialSecret'] = isset($data['s3CredentialSecret']) ? $data['s3CredentialSecret'] : null;
        $this->container['secretsEncryptionProvidersSecret'] = isset($data['secretsEncryptionProvidersSecret']) ? $data['secretsEncryptionProvidersSecret'] : null;
        $this->container['virtualCenterSecret'] = isset($data['virtualCenterSecret']) ? $data['virtualCenterSecret'] : null;
        $this->container['vsphereSecret'] = isset($data['vsphereSecret']) ? $data['vsphereSecret'] : null;
        $this->container['weavePasswordSecret'] = isset($data['weavePasswordSecret']) ? $data['weavePasswordSecret'] : null;
    }

    /**
     * Gets aadClientCertSecret
     * @return string
     */
    public function getAadClientCertSecret()
    {
        return $this->container['aadClientCertSecret'];
    }

    /**
     * Sets aadClientCertSecret
     * @param string $aadClientCertSecret
     * @return $this
     */
    public function setAadClientCertSecret($aadClientCertSecret)
    {
        $this->container['aadClientCertSecret'] = $aadClientCertSecret;

        return $this;
    }


    /**
     * Gets aadClientSecret
     * @return string
     */
    public function getAadClientSecret()
    {
        return $this->container['aadClientSecret'];
    }

    /**
     * Sets aadClientSecret
     * @param string $aadClientSecret
     * @return $this
     */
    public function setAadClientSecret($aadClientSecret)
    {
        $this->container['aadClientSecret'] = $aadClientSecret;

        return $this;
    }


    /**
     * Gets aciAPICUserKeySecret
     * @return string
     */
    public function getAciAPICUserKeySecret()
    {
        return $this->container['aciAPICUserKeySecret'];
    }

    /**
     * Sets aciAPICUserKeySecret
     * @param string $aciAPICUserKeySecret
     * @return $this
     */
    public function setAciAPICUserKeySecret($aciAPICUserKeySecret)
    {
        $this->container['aciAPICUserKeySecret'] = $aciAPICUserKeySecret;

        return $this;
    }


    /**
     * Gets aciKafkaClientKeySecret
     * @return string
     */
    public function getAciKafkaClientKeySecret()
    {
        return $this->container['aciKafkaClientKeySecret'];
    }

    /**
     * Sets aciKafkaClientKeySecret
     * @param string $aciKafkaClientKeySecret
     * @return $this
     */
    public function setAciKafkaClientKeySecret($aciKafkaClientKeySecret)
    {
        $this->container['aciKafkaClientKeySecret'] = $aciKafkaClientKeySecret;

        return $this;
    }


    /**
     * Gets aciTokenSecret
     * @return string
     */
    public function getAciTokenSecret()
    {
        return $this->container['aciTokenSecret'];
    }

    /**
     * Sets aciTokenSecret
     * @param string $aciTokenSecret
     * @return $this
     */
    public function setAciTokenSecret($aciTokenSecret)
    {
        $this->container['aciTokenSecret'] = $aciTokenSecret;

        return $this;
    }


    /**
     * Gets bastionHostSSHKeySecret
     * @return string
     */
    public function getBastionHostSSHKeySecret()
    {
        return $this->container['bastionHostSSHKeySecret'];
    }

    /**
     * Sets bastionHostSSHKeySecret
     * @param string $bastionHostSSHKeySecret
     * @return $this
     */
    public function setBastionHostSSHKeySecret($bastionHostSSHKeySecret)
    {
        $this->container['bastionHostSSHKeySecret'] = $bastionHostSSHKeySecret;

        return $this;
    }


    /**
     * Gets kubeletExtraEnvSecret
     * @return string
     */
    public function getKubeletExtraEnvSecret()
    {
        return $this->container['kubeletExtraEnvSecret'];
    }

    /**
     * Sets kubeletExtraEnvSecret
     * @param string $kubeletExtraEnvSecret
     * @return $this
     */
    public function setKubeletExtraEnvSecret($kubeletExtraEnvSecret)
    {
        $this->container['kubeletExtraEnvSecret'] = $kubeletExtraEnvSecret;

        return $this;
    }


    /**
     * Gets openStackSecret
     * @return string
     */
    public function getOpenStackSecret()
    {
        return $this->container['openStackSecret'];
    }

    /**
     * Sets openStackSecret
     * @param string $openStackSecret
     * @return $this
     */
    public function setOpenStackSecret($openStackSecret)
    {
        $this->container['openStackSecret'] = $openStackSecret;

        return $this;
    }


    /**
     * Gets privateRegistryECRSecret
     * @return string
     */
    public function getPrivateRegistryECRSecret()
    {
        return $this->container['privateRegistryECRSecret'];
    }

    /**
     * Sets privateRegistryECRSecret
     * @param string $privateRegistryECRSecret
     * @return $this
     */
    public function setPrivateRegistryECRSecret($privateRegistryECRSecret)
    {
        $this->container['privateRegistryECRSecret'] = $privateRegistryECRSecret;

        return $this;
    }


    /**
     * Gets privateRegistrySecret
     * @return string
     */
    public function getPrivateRegistrySecret()
    {
        return $this->container['privateRegistrySecret'];
    }

    /**
     * Sets privateRegistrySecret
     * @param string $privateRegistrySecret
     * @return $this
     */
    public function setPrivateRegistrySecret($privateRegistrySecret)
    {
        $this->container['privateRegistrySecret'] = $privateRegistrySecret;

        return $this;
    }


    /**
     * Gets privateRegistryURL
     * @return string
     */
    public function getPrivateRegistryURL()
    {
        return $this->container['privateRegistryURL'];
    }

    /**
     * Sets privateRegistryURL
     * @param string $privateRegistryURL
     * @return $this
     */
    public function setPrivateRegistryURL($privateRegistryURL)
    {
        $this->container['privateRegistryURL'] = $privateRegistryURL;

        return $this;
    }


    /**
     * Gets s3CredentialSecret
     * @return string
     */
    public function getS3CredentialSecret()
    {
        return $this->container['s3CredentialSecret'];
    }

    /**
     * Sets s3CredentialSecret
     * @param string $s3CredentialSecret
     * @return $this
     */
    public function setS3CredentialSecret($s3CredentialSecret)
    {
        $this->container['s3CredentialSecret'] = $s3CredentialSecret;

        return $this;
    }


    /**
     * Gets secretsEncryptionProvidersSecret
     * @return string
     */
    public function getSecretsEncryptionProvidersSecret()
    {
        return $this->container['secretsEncryptionProvidersSecret'];
    }

    /**
     * Sets secretsEncryptionProvidersSecret
     * @param string $secretsEncryptionProvidersSecret
     * @return $this
     */
    public function setSecretsEncryptionProvidersSecret($secretsEncryptionProvidersSecret)
    {
        $this->container['secretsEncryptionProvidersSecret'] = $secretsEncryptionProvidersSecret;

        return $this;
    }


    /**
     * Gets virtualCenterSecret
     * @return string
     */
    public function getVirtualCenterSecret()
    {
        return $this->container['virtualCenterSecret'];
    }

    /**
     * Sets virtualCenterSecret
     * @param string $virtualCenterSecret
     * @return $this
     */
    public function setVirtualCenterSecret($virtualCenterSecret)
    {
        $this->container['virtualCenterSecret'] = $virtualCenterSecret;

        return $this;
    }


    /**
     * Gets vsphereSecret
     * @return string
     */
    public function getVsphereSecret()
    {
        return $this->container['vsphereSecret'];
    }

    /**
     * Sets vsphereSecret
     * @param string $vsphereSecret
     * @return $this
     */
    public function setVsphereSecret($vsphereSecret)
    {
        $this->container['vsphereSecret'] = $vsphereSecret;

        return $this;
    }


    /**
     * Gets weavePasswordSecret
     * @return string
     */
    public function getWeavePasswordSecret()
    {
        return $this->container['weavePasswordSecret'];
    }

    /**
     * Sets weavePasswordSecret
     * @param string $weavePasswordSecret
     * @return $this
     */
    public function setWeavePasswordSecret($weavePasswordSecret)
    {
        $this->container['weavePasswordSecret'] = $weavePasswordSecret;

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

