<?php

/**
 * Amazonec2configModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class Amazonec2configModel implements ArrayAccess
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
        'blockDurationMinutes',
        'deviceName',
        'encryptEbsVolume',
        'endpoint',
        'httpEndpoint',
        'httpTokens',
        'iamInstanceProfile',
        'insecureTransport',
        'instanceType',
        'keypairName',
        'kmsKey',
        'monitoring',
        'openPort',
        'privateAddressOnly',
        'region',
        'requestSpotInstance',
        'retries',
        'rootSize',
        'secretKey',
        'securityGroup',
        'securityGroupReadonly',
        'sessionToken',
        'spotPrice',
        'sshKeyContents',
        'sshUser',
        'subnetId',
        'tags',
        'useEbsOptimizedInstance',
        'usePrivateAddress',
        'userdata',
        'volumeType',
        'vpcId',
        'zone',
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
        'blockDurationMinutes',
        'deviceName',
        'encryptEbsVolume',
        'endpoint',
        'httpEndpoint',
        'httpTokens',
        'iamInstanceProfile',
        'insecureTransport',
        'instanceType',
        'keypairName',
        'kmsKey',
        'monitoring',
        'openPort',
        'privateAddressOnly',
        'region',
        'requestSpotInstance',
        'retries',
        'rootSize',
        'secretKey',
        'securityGroup',
        'securityGroupReadonly',
        'sessionToken',
        'spotPrice',
        'sshKeyContents',
        'sshUser',
        'subnetId',
        'tags',
        'useEbsOptimizedInstance',
        'usePrivateAddress',
        'userdata',
        'volumeType',
        'vpcId',
        'zone',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessKey' => 'string',
        'ami' => 'string',
        'blockDurationMinutes' => 'string',
        'deviceName' => 'string',
        'encryptEbsVolume' => 'boolean',
        'endpoint' => 'string',
        'httpEndpoint' => 'string',
        'httpTokens' => 'string',
        'iamInstanceProfile' => 'string',
        'insecureTransport' => 'boolean',
        'instanceType' => 'string',
        'keypairName' => 'string',
        'kmsKey' => 'string',
        'monitoring' => 'boolean',
        'openPort' => 'string[]',
        'privateAddressOnly' => 'boolean',
        'region' => 'string',
        'requestSpotInstance' => 'boolean',
        'retries' => 'string',
        'rootSize' => 'string',
        'secretKey' => '\Rancher\Model\PasswordModel',
        'securityGroup' => 'string[]',
        'securityGroupReadonly' => 'boolean',
        'sessionToken' => 'string',
        'spotPrice' => 'string',
        'sshKeyContents' => '\Rancher\Model\PasswordModel',
        'sshUser' => 'string',
        'subnetId' => 'string',
        'tags' => 'string',
        'useEbsOptimizedInstance' => 'boolean',
        'usePrivateAddress' => 'boolean',
        'userdata' => 'string',
        'volumeType' => 'string',
        'vpcId' => 'string',
        'zone' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessKey' => 'setAccessKey',
        'ami' => 'setAmi',
        'blockDurationMinutes' => 'setBlockDurationMinutes',
        'deviceName' => 'setDeviceName',
        'encryptEbsVolume' => 'setEncryptEbsVolume',
        'endpoint' => 'setEndpoint',
        'httpEndpoint' => 'setHttpEndpoint',
        'httpTokens' => 'setHttpTokens',
        'iamInstanceProfile' => 'setIamInstanceProfile',
        'insecureTransport' => 'setInsecureTransport',
        'instanceType' => 'setInstanceType',
        'keypairName' => 'setKeypairName',
        'kmsKey' => 'setKmsKey',
        'monitoring' => 'setMonitoring',
        'openPort' => 'setOpenPort',
        'privateAddressOnly' => 'setPrivateAddressOnly',
        'region' => 'setRegion',
        'requestSpotInstance' => 'setRequestSpotInstance',
        'retries' => 'setRetries',
        'rootSize' => 'setRootSize',
        'secretKey' => 'setSecretKey',
        'securityGroup' => 'setSecurityGroup',
        'securityGroupReadonly' => 'setSecurityGroupReadonly',
        'sessionToken' => 'setSessionToken',
        'spotPrice' => 'setSpotPrice',
        'sshKeyContents' => 'setSshKeyContents',
        'sshUser' => 'setSshUser',
        'subnetId' => 'setSubnetId',
        'tags' => 'setTags',
        'useEbsOptimizedInstance' => 'setUseEbsOptimizedInstance',
        'usePrivateAddress' => 'setUsePrivateAddress',
        'userdata' => 'setUserdata',
        'volumeType' => 'setVolumeType',
        'vpcId' => 'setVpcId',
        'zone' => 'setZone',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessKey' => 'getAccessKey',
        'ami' => 'getAmi',
        'blockDurationMinutes' => 'getBlockDurationMinutes',
        'deviceName' => 'getDeviceName',
        'encryptEbsVolume' => 'getEncryptEbsVolume',
        'endpoint' => 'getEndpoint',
        'httpEndpoint' => 'getHttpEndpoint',
        'httpTokens' => 'getHttpTokens',
        'iamInstanceProfile' => 'getIamInstanceProfile',
        'insecureTransport' => 'getInsecureTransport',
        'instanceType' => 'getInstanceType',
        'keypairName' => 'getKeypairName',
        'kmsKey' => 'getKmsKey',
        'monitoring' => 'getMonitoring',
        'openPort' => 'getOpenPort',
        'privateAddressOnly' => 'getPrivateAddressOnly',
        'region' => 'getRegion',
        'requestSpotInstance' => 'getRequestSpotInstance',
        'retries' => 'getRetries',
        'rootSize' => 'getRootSize',
        'secretKey' => 'getSecretKey',
        'securityGroup' => 'getSecurityGroup',
        'securityGroupReadonly' => 'getSecurityGroupReadonly',
        'sessionToken' => 'getSessionToken',
        'spotPrice' => 'getSpotPrice',
        'sshKeyContents' => 'getSshKeyContents',
        'sshUser' => 'getSshUser',
        'subnetId' => 'getSubnetId',
        'tags' => 'getTags',
        'useEbsOptimizedInstance' => 'getUseEbsOptimizedInstance',
        'usePrivateAddress' => 'getUsePrivateAddress',
        'userdata' => 'getUserdata',
        'volumeType' => 'getVolumeType',
        'vpcId' => 'getVpcId',
        'zone' => 'getZone',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['ami'] = isset($data['ami']) ? $data['ami'] : null;
        $this->container['blockDurationMinutes'] = isset($data['blockDurationMinutes']) ? $data['blockDurationMinutes'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['encryptEbsVolume'] = isset($data['encryptEbsVolume']) ? $data['encryptEbsVolume'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['httpEndpoint'] = isset($data['httpEndpoint']) ? $data['httpEndpoint'] : null;
        $this->container['httpTokens'] = isset($data['httpTokens']) ? $data['httpTokens'] : null;
        $this->container['iamInstanceProfile'] = isset($data['iamInstanceProfile']) ? $data['iamInstanceProfile'] : null;
        $this->container['insecureTransport'] = isset($data['insecureTransport']) ? $data['insecureTransport'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['kmsKey'] = isset($data['kmsKey']) ? $data['kmsKey'] : null;
        $this->container['monitoring'] = isset($data['monitoring']) ? $data['monitoring'] : null;
        $this->container['openPort'] = isset($data['openPort']) ? $data['openPort'] : null;
        $this->container['privateAddressOnly'] = isset($data['privateAddressOnly']) ? $data['privateAddressOnly'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['requestSpotInstance'] = isset($data['requestSpotInstance']) ? $data['requestSpotInstance'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['rootSize'] = isset($data['rootSize']) ? $data['rootSize'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
        $this->container['securityGroupReadonly'] = isset($data['securityGroupReadonly']) ? $data['securityGroupReadonly'] : null;
        $this->container['sessionToken'] = isset($data['sessionToken']) ? $data['sessionToken'] : null;
        $this->container['spotPrice'] = isset($data['spotPrice']) ? $data['spotPrice'] : null;
        $this->container['sshKeyContents'] = isset($data['sshKeyContents']) ? $data['sshKeyContents'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['useEbsOptimizedInstance'] = isset($data['useEbsOptimizedInstance']) ? $data['useEbsOptimizedInstance'] : null;
        $this->container['usePrivateAddress'] = isset($data['usePrivateAddress']) ? $data['usePrivateAddress'] : null;
        $this->container['userdata'] = isset($data['userdata']) ? $data['userdata'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
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
     * Gets blockDurationMinutes
     * @return string
     */
    public function getBlockDurationMinutes()
    {
        return $this->container['blockDurationMinutes'];
    }

    /**
     * Sets blockDurationMinutes
     * @param string $blockDurationMinutes
     * @return $this
     */
    public function setBlockDurationMinutes($blockDurationMinutes)
    {
        $this->container['blockDurationMinutes'] = $blockDurationMinutes;

        return $this;
    }


    /**
     * Gets deviceName
     * @return string
     */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
     * Sets deviceName
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;

        return $this;
    }


    /**
     * Gets encryptEbsVolume
     * @return boolean
     */
    public function getEncryptEbsVolume()
    {
        return $this->container['encryptEbsVolume'];
    }

    /**
     * Sets encryptEbsVolume
     * @param boolean $encryptEbsVolume
     * @return $this
     */
    public function setEncryptEbsVolume($encryptEbsVolume)
    {
        $this->container['encryptEbsVolume'] = $encryptEbsVolume;

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
     * Gets httpEndpoint
     * @return string
     */
    public function getHttpEndpoint()
    {
        return $this->container['httpEndpoint'];
    }

    /**
     * Sets httpEndpoint
     * @param string $httpEndpoint
     * @return $this
     */
    public function setHttpEndpoint($httpEndpoint)
    {
        $this->container['httpEndpoint'] = $httpEndpoint;

        return $this;
    }


    /**
     * Gets httpTokens
     * @return string
     */
    public function getHttpTokens()
    {
        return $this->container['httpTokens'];
    }

    /**
     * Sets httpTokens
     * @param string $httpTokens
     * @return $this
     */
    public function setHttpTokens($httpTokens)
    {
        $this->container['httpTokens'] = $httpTokens;

        return $this;
    }


    /**
     * Gets iamInstanceProfile
     * @return string
     */
    public function getIamInstanceProfile()
    {
        return $this->container['iamInstanceProfile'];
    }

    /**
     * Sets iamInstanceProfile
     * @param string $iamInstanceProfile
     * @return $this
     */
    public function setIamInstanceProfile($iamInstanceProfile)
    {
        $this->container['iamInstanceProfile'] = $iamInstanceProfile;

        return $this;
    }


    /**
     * Gets insecureTransport
     * @return boolean
     */
    public function getInsecureTransport()
    {
        return $this->container['insecureTransport'];
    }

    /**
     * Sets insecureTransport
     * @param boolean $insecureTransport
     * @return $this
     */
    public function setInsecureTransport($insecureTransport)
    {
        $this->container['insecureTransport'] = $insecureTransport;

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
     * Gets keypairName
     * @return string
     */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
     * Sets keypairName
     * @param string $keypairName
     * @return $this
     */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;

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
     * Gets monitoring
     * @return boolean
     */
    public function getMonitoring()
    {
        return $this->container['monitoring'];
    }

    /**
     * Sets monitoring
     * @param boolean $monitoring
     * @return $this
     */
    public function setMonitoring($monitoring)
    {
        $this->container['monitoring'] = $monitoring;

        return $this;
    }


    /**
     * Gets openPort
     * @return string[]
     */
    public function getOpenPort()
    {
        return $this->container['openPort'];
    }

    /**
     * Sets openPort
     * @param string[] $openPort
     * @return $this
     */
    public function setOpenPort($openPort)
    {
        $this->container['openPort'] = $openPort;

        return $this;
    }


    /**
     * Gets privateAddressOnly
     * @return boolean
     */
    public function getPrivateAddressOnly()
    {
        return $this->container['privateAddressOnly'];
    }

    /**
     * Sets privateAddressOnly
     * @param boolean $privateAddressOnly
     * @return $this
     */
    public function setPrivateAddressOnly($privateAddressOnly)
    {
        $this->container['privateAddressOnly'] = $privateAddressOnly;

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
     * Gets requestSpotInstance
     * @return boolean
     */
    public function getRequestSpotInstance()
    {
        return $this->container['requestSpotInstance'];
    }

    /**
     * Sets requestSpotInstance
     * @param boolean $requestSpotInstance
     * @return $this
     */
    public function setRequestSpotInstance($requestSpotInstance)
    {
        $this->container['requestSpotInstance'] = $requestSpotInstance;

        return $this;
    }


    /**
     * Gets retries
     * @return string
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     * @param string $retries
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }


    /**
     * Gets rootSize
     * @return string
     */
    public function getRootSize()
    {
        return $this->container['rootSize'];
    }

    /**
     * Sets rootSize
     * @param string $rootSize
     * @return $this
     */
    public function setRootSize($rootSize)
    {
        $this->container['rootSize'] = $rootSize;

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
     * Gets securityGroup
     * @return string[]
     */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
     * Sets securityGroup
     * @param string[] $securityGroup
     * @return $this
     */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;

        return $this;
    }


    /**
     * Gets securityGroupReadonly
     * @return boolean
     */
    public function getSecurityGroupReadonly()
    {
        return $this->container['securityGroupReadonly'];
    }

    /**
     * Sets securityGroupReadonly
     * @param boolean $securityGroupReadonly
     * @return $this
     */
    public function setSecurityGroupReadonly($securityGroupReadonly)
    {
        $this->container['securityGroupReadonly'] = $securityGroupReadonly;

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
     * Gets spotPrice
     * @return string
     */
    public function getSpotPrice()
    {
        return $this->container['spotPrice'];
    }

    /**
     * Sets spotPrice
     * @param string $spotPrice
     * @return $this
     */
    public function setSpotPrice($spotPrice)
    {
        $this->container['spotPrice'] = $spotPrice;

        return $this;
    }


    /**
     * Gets sshKeyContents
     * @return \Rancher\Model\PasswordModel
     */
    public function getSshKeyContents()
    {
        return $this->container['sshKeyContents'];
    }

    /**
     * Sets sshKeyContents
     * @param \Rancher\Model\PasswordModel $sshKeyContents
     * @return $this
     */
    public function setSshKeyContents($sshKeyContents)
    {
        $this->container['sshKeyContents'] = $sshKeyContents;

        return $this;
    }


    /**
     * Gets sshUser
     * @return string
     */
    public function getSshUser()
    {
        return $this->container['sshUser'];
    }

    /**
     * Sets sshUser
     * @param string $sshUser
     * @return $this
     */
    public function setSshUser($sshUser)
    {
        $this->container['sshUser'] = $sshUser;

        return $this;
    }


    /**
     * Gets subnetId
     * @return string
     */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
     * Sets subnetId
     * @param string $subnetId
     * @return $this
     */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;

        return $this;
    }


    /**
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }


    /**
     * Gets useEbsOptimizedInstance
     * @return boolean
     */
    public function getUseEbsOptimizedInstance()
    {
        return $this->container['useEbsOptimizedInstance'];
    }

    /**
     * Sets useEbsOptimizedInstance
     * @param boolean $useEbsOptimizedInstance
     * @return $this
     */
    public function setUseEbsOptimizedInstance($useEbsOptimizedInstance)
    {
        $this->container['useEbsOptimizedInstance'] = $useEbsOptimizedInstance;

        return $this;
    }


    /**
     * Gets usePrivateAddress
     * @return boolean
     */
    public function getUsePrivateAddress()
    {
        return $this->container['usePrivateAddress'];
    }

    /**
     * Sets usePrivateAddress
     * @param boolean $usePrivateAddress
     * @return $this
     */
    public function setUsePrivateAddress($usePrivateAddress)
    {
        $this->container['usePrivateAddress'] = $usePrivateAddress;

        return $this;
    }


    /**
     * Gets userdata
     * @return string
     */
    public function getUserdata()
    {
        return $this->container['userdata'];
    }

    /**
     * Sets userdata
     * @param string $userdata
     * @return $this
     */
    public function setUserdata($userdata)
    {
        $this->container['userdata'] = $userdata;

        return $this;
    }


    /**
     * Gets volumeType
     * @return string
     */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
     * Sets volumeType
     * @param string $volumeType
     * @return $this
     */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;

        return $this;
    }


    /**
     * Gets vpcId
     * @return string
     */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
     * Sets vpcId
     * @param string $vpcId
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;

        return $this;
    }


    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     * @param string $zone
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

