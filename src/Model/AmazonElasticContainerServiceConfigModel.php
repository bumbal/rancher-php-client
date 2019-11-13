<?php

/**
 * AmazonElasticContainerServiceConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AmazonElasticContainerServiceConfigModel implements ArrayAccess
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
        'accessKey',
        'ami',
        'associateWorkerNodePublicIp',
        'displayName',
        'driverName',
        'instanceType',
        'keyPairName',
        'kubernetesVersion',
        'maximumNodes',
        'minimumNodes',
        'nodeVolumeSize',
        'region',
        'secretKey',
        'securityGroups',
        'serviceRole',
        'sessionToken',
        'subnets',
        'userData',
        'virtualNetwork',
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
        'accessKey',
        'ami',
        'associateWorkerNodePublicIp',
        'displayName',
        'driverName',
        'instanceType',
        'keyPairName',
        'kubernetesVersion',
        'maximumNodes',
        'minimumNodes',
        'nodeVolumeSize',
        'region',
        'secretKey',
        'securityGroups',
        'serviceRole',
        'sessionToken',
        'subnets',
        'userData',
        'virtualNetwork',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessKey' => 'string',
        'ami' => 'string',
        'associateWorkerNodePublicIp' => 'boolean',
        'displayName' => 'string',
        'driverName' => 'string',
        'instanceType' => 'string',
        'keyPairName' => 'string',
        'kubernetesVersion' => 'string',
        'maximumNodes' => 'int',
        'minimumNodes' => 'int',
        'nodeVolumeSize' => 'int',
        'region' => 'string',
        'secretKey' => '\Rancher\Model\PasswordModel',
        'securityGroups' => 'string[]',
        'serviceRole' => 'string',
        'sessionToken' => 'string',
        'subnets' => 'string[]',
        'userData' => 'string',
        'virtualNetwork' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'ami' => 'setAmi',
        'associateWorkerNodePublicIp' => 'setAssociateWorkerNodePublicIp',
        'displayName' => 'setDisplayName',
        'driverName' => 'setDriverName',
        'instanceType' => 'setInstanceType',
        'keyPairName' => 'setKeyPairName',
        'kubernetesVersion' => 'setKubernetesVersion',
        'maximumNodes' => 'setMaximumNodes',
        'minimumNodes' => 'setMinimumNodes',
        'nodeVolumeSize' => 'setNodeVolumeSize',
        'region' => 'setRegion',
        'secretKey' => 'setSecretKey',
        'securityGroups' => 'setSecurityGroups',
        'serviceRole' => 'setServiceRole',
        'sessionToken' => 'setSessionToken',
        'subnets' => 'setSubnets',
        'userData' => 'setUserData',
        'virtualNetwork' => 'setVirtualNetwork',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'ami' => 'getAmi',
        'associateWorkerNodePublicIp' => 'getAssociateWorkerNodePublicIp',
        'displayName' => 'getDisplayName',
        'driverName' => 'getDriverName',
        'instanceType' => 'getInstanceType',
        'keyPairName' => 'getKeyPairName',
        'kubernetesVersion' => 'getKubernetesVersion',
        'maximumNodes' => 'getMaximumNodes',
        'minimumNodes' => 'getMinimumNodes',
        'nodeVolumeSize' => 'getNodeVolumeSize',
        'region' => 'getRegion',
        'secretKey' => 'getSecretKey',
        'securityGroups' => 'getSecurityGroups',
        'serviceRole' => 'getServiceRole',
        'sessionToken' => 'getSessionToken',
        'subnets' => 'getSubnets',
        'userData' => 'getUserData',
        'virtualNetwork' => 'getVirtualNetwork',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['ami'] = isset($data['ami']) ? $data['ami'] : null;
        $this->container['associateWorkerNodePublicIp'] = isset($data['associateWorkerNodePublicIp']) ? $data['associateWorkerNodePublicIp'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['driverName'] = isset($data['driverName']) ? $data['driverName'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['keyPairName'] = isset($data['keyPairName']) ? $data['keyPairName'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['maximumNodes'] = isset($data['maximumNodes']) ? $data['maximumNodes'] : null;
        $this->container['minimumNodes'] = isset($data['minimumNodes']) ? $data['minimumNodes'] : null;
        $this->container['nodeVolumeSize'] = isset($data['nodeVolumeSize']) ? $data['nodeVolumeSize'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['serviceRole'] = isset($data['serviceRole']) ? $data['serviceRole'] : null;
        $this->container['sessionToken'] = isset($data['sessionToken']) ? $data['sessionToken'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['virtualNetwork'] = isset($data['virtualNetwork']) ? $data['virtualNetwork'] : null;
    }

    /**
     * Gets accessKey
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
     * Sets accessKey
     * @param string $accessKey
     * @return $this
     */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;

        return $this;
    }


    /**
     * Gets ami
     * @return string
     */
    public function getAmi()
    {
        return $this->container['ami'];
    }

    /**
     * Sets ami
     * @param string $ami
     * @return $this
     */
    public function setAmi($ami)
    {
        $this->container['ami'] = $ami;

        return $this;
    }


    /**
     * Gets associateWorkerNodePublicIp
     * @return boolean
     */
    public function getAssociateWorkerNodePublicIp()
    {
        return $this->container['associateWorkerNodePublicIp'];
    }

    /**
     * Sets associateWorkerNodePublicIp
     * @param boolean $associateWorkerNodePublicIp
     * @return $this
     */
    public function setAssociateWorkerNodePublicIp($associateWorkerNodePublicIp)
    {
        $this->container['associateWorkerNodePublicIp'] = $associateWorkerNodePublicIp;

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
     * Gets driverName
     * @return string
     */
    public function getDriverName()
    {
        return $this->container['driverName'];
    }

    /**
     * Sets driverName
     * @param string $driverName
     * @return $this
     */
    public function setDriverName($driverName)
    {
        $this->container['driverName'] = $driverName;

        return $this;
    }


    /**
     * Gets instanceType
     * @return string
     */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
     * Sets instanceType
     * @param string $instanceType
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;

        return $this;
    }


    /**
     * Gets keyPairName
     * @return string
     */
    public function getKeyPairName()
    {
        return $this->container['keyPairName'];
    }

    /**
     * Sets keyPairName
     * @param string $keyPairName
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->container['keyPairName'] = $keyPairName;

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
     * Gets maximumNodes
     * @return int
     */
    public function getMaximumNodes()
    {
        return $this->container['maximumNodes'];
    }

    /**
     * Sets maximumNodes
     * @param int $maximumNodes
     * @return $this
     */
    public function setMaximumNodes($maximumNodes)
    {
        $this->container['maximumNodes'] = $maximumNodes;

        return $this;
    }


    /**
     * Gets minimumNodes
     * @return int
     */
    public function getMinimumNodes()
    {
        return $this->container['minimumNodes'];
    }

    /**
     * Sets minimumNodes
     * @param int $minimumNodes
     * @return $this
     */
    public function setMinimumNodes($minimumNodes)
    {
        $this->container['minimumNodes'] = $minimumNodes;

        return $this;
    }


    /**
     * Gets nodeVolumeSize
     * @return int
     */
    public function getNodeVolumeSize()
    {
        return $this->container['nodeVolumeSize'];
    }

    /**
     * Sets nodeVolumeSize
     * @param int $nodeVolumeSize
     * @return $this
     */
    public function setNodeVolumeSize($nodeVolumeSize)
    {
        $this->container['nodeVolumeSize'] = $nodeVolumeSize;

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
     * Gets secretKey
     * @return \Rancher\Model\PasswordModel
     */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
     * Sets secretKey
     * @param \Rancher\Model\PasswordModel $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;

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
     * Gets sessionToken
     * @return string
     */
    public function getSessionToken()
    {
        return $this->container['sessionToken'];
    }

    /**
     * Sets sessionToken
     * @param string $sessionToken
     * @return $this
     */
    public function setSessionToken($sessionToken)
    {
        $this->container['sessionToken'] = $sessionToken;

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
     * Gets userData
     * @return string
     */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
     * Sets userData
     * @param string $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;

        return $this;
    }


    /**
     * Gets virtualNetwork
     * @return string
     */
    public function getVirtualNetwork()
    {
        return $this->container['virtualNetwork'];
    }

    /**
     * Sets virtualNetwork
     * @param string $virtualNetwork
     * @return $this
     */
    public function setVirtualNetwork($virtualNetwork)
    {
        $this->container['virtualNetwork'] = $virtualNetwork;

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

