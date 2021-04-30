<?php

/**
 * EksClusterConfigSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EksClusterConfigSpecModel implements ArrayAccess
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
        'amazonCredentialSecret',
        'displayName',
        'imported',
        'kmsKey',
        'kubernetesVersion',
        'loggingTypes',
        'nodeGroups',
        'privateAccess',
        'publicAccess',
        'publicAccessSources',
        'region',
        'secretsEncryption',
        'securityGroups',
        'serviceRole',
        'subnets',
        'tags',
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
        'amazonCredentialSecret',
        'kubernetesVersion',
        'loggingTypes',
        'nodeGroups',
        'privateAccess',
        'publicAccess',
        'publicAccessSources',
        'tags',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'amazonCredentialSecret' => 'string',
        'displayName' => 'string',
        'imported' => 'boolean',
        'kmsKey' => 'string',
        'kubernetesVersion' => 'string',
        'loggingTypes' => 'string[]',
        'nodeGroups' => '\Rancher\Model\NodeGroupModel[]',
        'privateAccess' => 'boolean',
        'publicAccess' => 'boolean',
        'publicAccessSources' => 'string[]',
        'region' => 'string',
        'secretsEncryption' => 'boolean',
        'securityGroups' => 'string[]',
        'serviceRole' => 'string',
        'subnets' => 'string[]',
        'tags' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'amazonCredentialSecret' => 'setAmazonCredentialSecret',
        'displayName' => 'setDisplayName',
        'imported' => 'setImported',
        'kmsKey' => 'setKmsKey',
        'kubernetesVersion' => 'setKubernetesVersion',
        'loggingTypes' => 'setLoggingTypes',
        'nodeGroups' => 'setNodeGroups',
        'privateAccess' => 'setPrivateAccess',
        'publicAccess' => 'setPublicAccess',
        'publicAccessSources' => 'setPublicAccessSources',
        'region' => 'setRegion',
        'secretsEncryption' => 'setSecretsEncryption',
        'securityGroups' => 'setSecurityGroups',
        'serviceRole' => 'setServiceRole',
        'subnets' => 'setSubnets',
        'tags' => 'setTags',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'amazonCredentialSecret' => 'getAmazonCredentialSecret',
        'displayName' => 'getDisplayName',
        'imported' => 'getImported',
        'kmsKey' => 'getKmsKey',
        'kubernetesVersion' => 'getKubernetesVersion',
        'loggingTypes' => 'getLoggingTypes',
        'nodeGroups' => 'getNodeGroups',
        'privateAccess' => 'getPrivateAccess',
        'publicAccess' => 'getPublicAccess',
        'publicAccessSources' => 'getPublicAccessSources',
        'region' => 'getRegion',
        'secretsEncryption' => 'getSecretsEncryption',
        'securityGroups' => 'getSecurityGroups',
        'serviceRole' => 'getServiceRole',
        'subnets' => 'getSubnets',
        'tags' => 'getTags',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['amazonCredentialSecret'] = isset($data['amazonCredentialSecret']) ? $data['amazonCredentialSecret'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
        $this->container['kmsKey'] = isset($data['kmsKey']) ? $data['kmsKey'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['loggingTypes'] = isset($data['loggingTypes']) ? $data['loggingTypes'] : null;
        $this->container['nodeGroups'] = isset($data['nodeGroups']) ? $data['nodeGroups'] : null;
        $this->container['privateAccess'] = isset($data['privateAccess']) ? $data['privateAccess'] : null;
        $this->container['publicAccess'] = isset($data['publicAccess']) ? $data['publicAccess'] : null;
        $this->container['publicAccessSources'] = isset($data['publicAccessSources']) ? $data['publicAccessSources'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['secretsEncryption'] = isset($data['secretsEncryption']) ? $data['secretsEncryption'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['serviceRole'] = isset($data['serviceRole']) ? $data['serviceRole'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Gets amazonCredentialSecret
     * @return string
     */
    public function getAmazonCredentialSecret()
    {
        return $this->container['amazonCredentialSecret'];
    }

    /**
     * Sets amazonCredentialSecret
     * @param string $amazonCredentialSecret
     * @return $this
     */
    public function setAmazonCredentialSecret($amazonCredentialSecret)
    {
        $this->container['amazonCredentialSecret'] = $amazonCredentialSecret;

        return $this;
    }


    /**
     * Gets displayName
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }


    /**
     * Gets imported
     * @return boolean
     */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
     * Sets imported
     * @param boolean $imported
     * @return $this
     */
    public function setImported($imported)
    {
        $this->container['imported'] = $imported;

        return $this;
    }


    /**
     * Gets kmsKey
     * @return string
     */
    public function getKmsKey()
    {
        return $this->container['kmsKey'];
    }

    /**
     * Sets kmsKey
     * @param string $kmsKey
     * @return $this
     */
    public function setKmsKey($kmsKey)
    {
        $this->container['kmsKey'] = $kmsKey;

        return $this;
    }


    /**
     * Gets kubernetesVersion
     * @return string
     */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
     * Sets kubernetesVersion
     * @param string $kubernetesVersion
     * @return $this
     */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;

        return $this;
    }


    /**
     * Gets loggingTypes
     * @return string[]
     */
    public function getLoggingTypes()
    {
        return $this->container['loggingTypes'];
    }

    /**
     * Sets loggingTypes
     * @param string[] $loggingTypes
     * @return $this
     */
    public function setLoggingTypes($loggingTypes)
    {
        $this->container['loggingTypes'] = $loggingTypes;

        return $this;
    }


    /**
     * Gets nodeGroups
     * @return \Rancher\Model\NodeGroupModel[]
     */
    public function getNodeGroups()
    {
        return $this->container['nodeGroups'];
    }

    /**
     * Sets nodeGroups
     * @param \Rancher\Model\NodeGroupModel[] $nodeGroups
     * @return $this
     */
    public function setNodeGroups($nodeGroups)
    {
        $this->container['nodeGroups'] = $nodeGroups;

        return $this;
    }


    /**
     * Gets privateAccess
     * @return boolean
     */
    public function getPrivateAccess()
    {
        return $this->container['privateAccess'];
    }

    /**
     * Sets privateAccess
     * @param boolean $privateAccess
     * @return $this
     */
    public function setPrivateAccess($privateAccess)
    {
        $this->container['privateAccess'] = $privateAccess;

        return $this;
    }


    /**
     * Gets publicAccess
     * @return boolean
     */
    public function getPublicAccess()
    {
        return $this->container['publicAccess'];
    }

    /**
     * Sets publicAccess
     * @param boolean $publicAccess
     * @return $this
     */
    public function setPublicAccess($publicAccess)
    {
        $this->container['publicAccess'] = $publicAccess;

        return $this;
    }


    /**
     * Gets publicAccessSources
     * @return string[]
     */
    public function getPublicAccessSources()
    {
        return $this->container['publicAccessSources'];
    }

    /**
     * Sets publicAccessSources
     * @param string[] $publicAccessSources
     * @return $this
     */
    public function setPublicAccessSources($publicAccessSources)
    {
        $this->container['publicAccessSources'] = $publicAccessSources;

        return $this;
    }


    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }


    /**
     * Gets secretsEncryption
     * @return boolean
     */
    public function getSecretsEncryption()
    {
        return $this->container['secretsEncryption'];
    }

    /**
     * Sets secretsEncryption
     * @param boolean $secretsEncryption
     * @return $this
     */
    public function setSecretsEncryption($secretsEncryption)
    {
        $this->container['secretsEncryption'] = $secretsEncryption;

        return $this;
    }


    /**
     * Gets securityGroups
     * @return string[]
     */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
     * Sets securityGroups
     * @param string[] $securityGroups
     * @return $this
     */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;

        return $this;
    }


    /**
     * Gets serviceRole
     * @return string
     */
    public function getServiceRole()
    {
        return $this->container['serviceRole'];
    }

    /**
     * Sets serviceRole
     * @param string $serviceRole
     * @return $this
     */
    public function setServiceRole($serviceRole)
    {
        $this->container['serviceRole'] = $serviceRole;

        return $this;
    }


    /**
     * Gets subnets
     * @return string[]
     */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
     * Sets subnets
     * @param string[] $subnets
     * @return $this
     */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;

        return $this;
    }


    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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

