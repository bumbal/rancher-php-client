<?php

/**
 * HarvesterconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HarvesterconfigModel implements ArrayAccess
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
        'cloudConfig',
        'clusterId',
        'clusterType',
        'cpuCount',
        'diskBus',
        'diskInfo',
        'diskSize',
        'imageName',
        'keyPairName',
        'kubeconfigContent',
        'memorySize',
        'networkData',
        'networkInfo',
        'networkModel',
        'networkName',
        'networkType',
        'sshPassword',
        'sshPort',
        'sshPrivateKeyPath',
        'sshUser',
        'userData',
        'vmAffinity',
        'vmNamespace',
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
        'cloudConfig',
        'clusterId',
        'clusterType',
        'cpuCount',
        'diskBus',
        'diskInfo',
        'diskSize',
        'imageName',
        'keyPairName',
        'kubeconfigContent',
        'memorySize',
        'networkData',
        'networkInfo',
        'networkModel',
        'networkName',
        'networkType',
        'sshPassword',
        'sshPort',
        'sshPrivateKeyPath',
        'sshUser',
        'userData',
        'vmAffinity',
        'vmNamespace',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'cloudConfig' => 'string',
        'clusterId' => 'string',
        'clusterType' => 'string',
        'cpuCount' => 'string',
        'diskBus' => 'string',
        'diskInfo' => 'string',
        'diskSize' => 'string',
        'imageName' => 'string',
        'keyPairName' => 'string',
        'kubeconfigContent' => '\Rancher\Model\PasswordModel',
        'memorySize' => 'string',
        'networkData' => 'string',
        'networkInfo' => 'string',
        'networkModel' => 'string',
        'networkName' => 'string',
        'networkType' => 'string',
        'sshPassword' => 'string',
        'sshPort' => 'string',
        'sshPrivateKeyPath' => 'string',
        'sshUser' => 'string',
        'userData' => 'string',
        'vmAffinity' => 'string',
        'vmNamespace' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'cloudConfig' => 'setCloudConfig',
        'clusterId' => 'setClusterId',
        'clusterType' => 'setClusterType',
        'cpuCount' => 'setCpuCount',
        'diskBus' => 'setDiskBus',
        'diskInfo' => 'setDiskInfo',
        'diskSize' => 'setDiskSize',
        'imageName' => 'setImageName',
        'keyPairName' => 'setKeyPairName',
        'kubeconfigContent' => 'setKubeconfigContent',
        'memorySize' => 'setMemorySize',
        'networkData' => 'setNetworkData',
        'networkInfo' => 'setNetworkInfo',
        'networkModel' => 'setNetworkModel',
        'networkName' => 'setNetworkName',
        'networkType' => 'setNetworkType',
        'sshPassword' => 'setSshPassword',
        'sshPort' => 'setSshPort',
        'sshPrivateKeyPath' => 'setSshPrivateKeyPath',
        'sshUser' => 'setSshUser',
        'userData' => 'setUserData',
        'vmAffinity' => 'setVmAffinity',
        'vmNamespace' => 'setVmNamespace',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'cloudConfig' => 'getCloudConfig',
        'clusterId' => 'getClusterId',
        'clusterType' => 'getClusterType',
        'cpuCount' => 'getCpuCount',
        'diskBus' => 'getDiskBus',
        'diskInfo' => 'getDiskInfo',
        'diskSize' => 'getDiskSize',
        'imageName' => 'getImageName',
        'keyPairName' => 'getKeyPairName',
        'kubeconfigContent' => 'getKubeconfigContent',
        'memorySize' => 'getMemorySize',
        'networkData' => 'getNetworkData',
        'networkInfo' => 'getNetworkInfo',
        'networkModel' => 'getNetworkModel',
        'networkName' => 'getNetworkName',
        'networkType' => 'getNetworkType',
        'sshPassword' => 'getSshPassword',
        'sshPort' => 'getSshPort',
        'sshPrivateKeyPath' => 'getSshPrivateKeyPath',
        'sshUser' => 'getSshUser',
        'userData' => 'getUserData',
        'vmAffinity' => 'getVmAffinity',
        'vmNamespace' => 'getVmNamespace',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['cloudConfig'] = isset($data['cloudConfig']) ? $data['cloudConfig'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['cpuCount'] = isset($data['cpuCount']) ? $data['cpuCount'] : null;
        $this->container['diskBus'] = isset($data['diskBus']) ? $data['diskBus'] : null;
        $this->container['diskInfo'] = isset($data['diskInfo']) ? $data['diskInfo'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['keyPairName'] = isset($data['keyPairName']) ? $data['keyPairName'] : null;
        $this->container['kubeconfigContent'] = isset($data['kubeconfigContent']) ? $data['kubeconfigContent'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['networkData'] = isset($data['networkData']) ? $data['networkData'] : null;
        $this->container['networkInfo'] = isset($data['networkInfo']) ? $data['networkInfo'] : null;
        $this->container['networkModel'] = isset($data['networkModel']) ? $data['networkModel'] : null;
        $this->container['networkName'] = isset($data['networkName']) ? $data['networkName'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['sshPassword'] = isset($data['sshPassword']) ? $data['sshPassword'] : null;
        $this->container['sshPort'] = isset($data['sshPort']) ? $data['sshPort'] : null;
        $this->container['sshPrivateKeyPath'] = isset($data['sshPrivateKeyPath']) ? $data['sshPrivateKeyPath'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['vmAffinity'] = isset($data['vmAffinity']) ? $data['vmAffinity'] : null;
        $this->container['vmNamespace'] = isset($data['vmNamespace']) ? $data['vmNamespace'] : null;
    }

    /**
     * Gets cloudConfig
     * @return string
     */
    public function getCloudConfig()
    {
        return $this->container['cloudConfig'];
    }

    /**
     * Sets cloudConfig
     * @param string $cloudConfig
     * @return $this
     */
    public function setCloudConfig($cloudConfig)
    {
        $this->container['cloudConfig'] = $cloudConfig;

        return $this;
    }


    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

        return $this;
    }


    /**
     * Gets clusterType
     * @return string
     */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
     * Sets clusterType
     * @param string $clusterType
     * @return $this
     */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;

        return $this;
    }


    /**
     * Gets cpuCount
     * @return string
     */
    public function getCpuCount()
    {
        return $this->container['cpuCount'];
    }

    /**
     * Sets cpuCount
     * @param string $cpuCount
     * @return $this
     */
    public function setCpuCount($cpuCount)
    {
        $this->container['cpuCount'] = $cpuCount;

        return $this;
    }


    /**
     * Gets diskBus
     * @return string
     */
    public function getDiskBus()
    {
        return $this->container['diskBus'];
    }

    /**
     * Sets diskBus
     * @param string $diskBus
     * @return $this
     */
    public function setDiskBus($diskBus)
    {
        $this->container['diskBus'] = $diskBus;

        return $this;
    }


    /**
     * Gets diskInfo
     * @return string
     */
    public function getDiskInfo()
    {
        return $this->container['diskInfo'];
    }

    /**
     * Sets diskInfo
     * @param string $diskInfo
     * @return $this
     */
    public function setDiskInfo($diskInfo)
    {
        $this->container['diskInfo'] = $diskInfo;

        return $this;
    }


    /**
     * Gets diskSize
     * @return string
     */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
     * Sets diskSize
     * @param string $diskSize
     * @return $this
     */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;

        return $this;
    }


    /**
     * Gets imageName
     * @return string
     */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
     * Sets imageName
     * @param string $imageName
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;

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
     * Gets kubeconfigContent
     * @return \Rancher\Model\PasswordModel
     */
    public function getKubeconfigContent()
    {
        return $this->container['kubeconfigContent'];
    }

    /**
     * Sets kubeconfigContent
     * @param \Rancher\Model\PasswordModel $kubeconfigContent
     * @return $this
     */
    public function setKubeconfigContent($kubeconfigContent)
    {
        $this->container['kubeconfigContent'] = $kubeconfigContent;

        return $this;
    }


    /**
     * Gets memorySize
     * @return string
     */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
     * Sets memorySize
     * @param string $memorySize
     * @return $this
     */
    public function setMemorySize($memorySize)
    {
        $this->container['memorySize'] = $memorySize;

        return $this;
    }


    /**
     * Gets networkData
     * @return string
     */
    public function getNetworkData()
    {
        return $this->container['networkData'];
    }

    /**
     * Sets networkData
     * @param string $networkData
     * @return $this
     */
    public function setNetworkData($networkData)
    {
        $this->container['networkData'] = $networkData;

        return $this;
    }


    /**
     * Gets networkInfo
     * @return string
     */
    public function getNetworkInfo()
    {
        return $this->container['networkInfo'];
    }

    /**
     * Sets networkInfo
     * @param string $networkInfo
     * @return $this
     */
    public function setNetworkInfo($networkInfo)
    {
        $this->container['networkInfo'] = $networkInfo;

        return $this;
    }


    /**
     * Gets networkModel
     * @return string
     */
    public function getNetworkModel()
    {
        return $this->container['networkModel'];
    }

    /**
     * Sets networkModel
     * @param string $networkModel
     * @return $this
     */
    public function setNetworkModel($networkModel)
    {
        $this->container['networkModel'] = $networkModel;

        return $this;
    }


    /**
     * Gets networkName
     * @return string
     */
    public function getNetworkName()
    {
        return $this->container['networkName'];
    }

    /**
     * Sets networkName
     * @param string $networkName
     * @return $this
     */
    public function setNetworkName($networkName)
    {
        $this->container['networkName'] = $networkName;

        return $this;
    }


    /**
     * Gets networkType
     * @return string
     */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
     * Sets networkType
     * @param string $networkType
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;

        return $this;
    }


    /**
     * Gets sshPassword
     * @return string
     */
    public function getSshPassword()
    {
        return $this->container['sshPassword'];
    }

    /**
     * Sets sshPassword
     * @param string $sshPassword
     * @return $this
     */
    public function setSshPassword($sshPassword)
    {
        $this->container['sshPassword'] = $sshPassword;

        return $this;
    }


    /**
     * Gets sshPort
     * @return string
     */
    public function getSshPort()
    {
        return $this->container['sshPort'];
    }

    /**
     * Sets sshPort
     * @param string $sshPort
     * @return $this
     */
    public function setSshPort($sshPort)
    {
        $this->container['sshPort'] = $sshPort;

        return $this;
    }


    /**
     * Gets sshPrivateKeyPath
     * @return string
     */
    public function getSshPrivateKeyPath()
    {
        return $this->container['sshPrivateKeyPath'];
    }

    /**
     * Sets sshPrivateKeyPath
     * @param string $sshPrivateKeyPath
     * @return $this
     */
    public function setSshPrivateKeyPath($sshPrivateKeyPath)
    {
        $this->container['sshPrivateKeyPath'] = $sshPrivateKeyPath;

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
     * Gets vmAffinity
     * @return string
     */
    public function getVmAffinity()
    {
        return $this->container['vmAffinity'];
    }

    /**
     * Sets vmAffinity
     * @param string $vmAffinity
     * @return $this
     */
    public function setVmAffinity($vmAffinity)
    {
        $this->container['vmAffinity'] = $vmAffinity;

        return $this;
    }


    /**
     * Gets vmNamespace
     * @return string
     */
    public function getVmNamespace()
    {
        return $this->container['vmNamespace'];
    }

    /**
     * Sets vmNamespace
     * @param string $vmNamespace
     * @return $this
     */
    public function setVmNamespace($vmNamespace)
    {
        $this->container['vmNamespace'] = $vmNamespace;

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

