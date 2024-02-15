<?php

/**
 * VmwarevsphereconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class VmwarevsphereconfigModel implements ArrayAccess
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
        'boot2dockerUrl',
        'cfgparam',
        'cloneFrom',
        'cloudConfig',
        'cloudinit',
        'contentLibrary',
        'cpuCount',
        'creationType',
        'customAttribute',
        'datacenter',
        'datastore',
        'datastoreCluster',
        'diskSize',
        'folder',
        'gracefulShutdownTimeout',
        'hostsystem',
        'memorySize',
        'network',
        'os',
        'password',
        'pool',
        'sshPassword',
        'sshPort',
        'sshUser',
        'sshUserGroup',
        'tag',
        'username',
        'vappIpallocationpolicy',
        'vappIpprotocol',
        'vappProperty',
        'vappTransport',
        'vcenter',
        'vcenterPort',
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
        'boot2dockerUrl',
        'cfgparam',
        'cloneFrom',
        'cloudConfig',
        'cloudinit',
        'contentLibrary',
        'cpuCount',
        'creationType',
        'customAttribute',
        'datacenter',
        'datastore',
        'datastoreCluster',
        'diskSize',
        'folder',
        'gracefulShutdownTimeout',
        'hostsystem',
        'memorySize',
        'network',
        'os',
        'password',
        'pool',
        'sshPassword',
        'sshPort',
        'sshUser',
        'sshUserGroup',
        'tag',
        'username',
        'vappIpallocationpolicy',
        'vappIpprotocol',
        'vappProperty',
        'vappTransport',
        'vcenter',
        'vcenterPort',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'boot2dockerUrl' => 'string',
        'cfgparam' => 'string[]',
        'cloneFrom' => 'string',
        'cloudConfig' => 'string',
        'cloudinit' => 'string',
        'contentLibrary' => 'string',
        'cpuCount' => 'string',
        'creationType' => 'string',
        'customAttribute' => 'string[]',
        'datacenter' => 'string',
        'datastore' => 'string',
        'datastoreCluster' => 'string',
        'diskSize' => 'string',
        'folder' => 'string',
        'gracefulShutdownTimeout' => 'string',
        'hostsystem' => 'string',
        'memorySize' => 'string',
        'network' => 'string[]',
        'os' => 'string',
        'password' => '\Rancher\Model\PasswordModel',
        'pool' => 'string',
        'sshPassword' => 'string',
        'sshPort' => 'string',
        'sshUser' => 'string',
        'sshUserGroup' => 'string',
        'tag' => 'string[]',
        'username' => 'string',
        'vappIpallocationpolicy' => 'string',
        'vappIpprotocol' => 'string',
        'vappProperty' => 'string[]',
        'vappTransport' => 'string',
        'vcenter' => 'string',
        'vcenterPort' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'boot2dockerUrl' => 'setBoot2dockerUrl',
        'cfgparam' => 'setCfgparam',
        'cloneFrom' => 'setCloneFrom',
        'cloudConfig' => 'setCloudConfig',
        'cloudinit' => 'setCloudinit',
        'contentLibrary' => 'setContentLibrary',
        'cpuCount' => 'setCpuCount',
        'creationType' => 'setCreationType',
        'customAttribute' => 'setCustomAttribute',
        'datacenter' => 'setDatacenter',
        'datastore' => 'setDatastore',
        'datastoreCluster' => 'setDatastoreCluster',
        'diskSize' => 'setDiskSize',
        'folder' => 'setFolder',
        'gracefulShutdownTimeout' => 'setGracefulShutdownTimeout',
        'hostsystem' => 'setHostsystem',
        'memorySize' => 'setMemorySize',
        'network' => 'setNetwork',
        'os' => 'setOs',
        'password' => 'setPassword',
        'pool' => 'setPool',
        'sshPassword' => 'setSshPassword',
        'sshPort' => 'setSshPort',
        'sshUser' => 'setSshUser',
        'sshUserGroup' => 'setSshUserGroup',
        'tag' => 'setTag',
        'username' => 'setUsername',
        'vappIpallocationpolicy' => 'setVappIpallocationpolicy',
        'vappIpprotocol' => 'setVappIpprotocol',
        'vappProperty' => 'setVappProperty',
        'vappTransport' => 'setVappTransport',
        'vcenter' => 'setVcenter',
        'vcenterPort' => 'setVcenterPort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'boot2dockerUrl' => 'getBoot2dockerUrl',
        'cfgparam' => 'getCfgparam',
        'cloneFrom' => 'getCloneFrom',
        'cloudConfig' => 'getCloudConfig',
        'cloudinit' => 'getCloudinit',
        'contentLibrary' => 'getContentLibrary',
        'cpuCount' => 'getCpuCount',
        'creationType' => 'getCreationType',
        'customAttribute' => 'getCustomAttribute',
        'datacenter' => 'getDatacenter',
        'datastore' => 'getDatastore',
        'datastoreCluster' => 'getDatastoreCluster',
        'diskSize' => 'getDiskSize',
        'folder' => 'getFolder',
        'gracefulShutdownTimeout' => 'getGracefulShutdownTimeout',
        'hostsystem' => 'getHostsystem',
        'memorySize' => 'getMemorySize',
        'network' => 'getNetwork',
        'os' => 'getOs',
        'password' => 'getPassword',
        'pool' => 'getPool',
        'sshPassword' => 'getSshPassword',
        'sshPort' => 'getSshPort',
        'sshUser' => 'getSshUser',
        'sshUserGroup' => 'getSshUserGroup',
        'tag' => 'getTag',
        'username' => 'getUsername',
        'vappIpallocationpolicy' => 'getVappIpallocationpolicy',
        'vappIpprotocol' => 'getVappIpprotocol',
        'vappProperty' => 'getVappProperty',
        'vappTransport' => 'getVappTransport',
        'vcenter' => 'getVcenter',
        'vcenterPort' => 'getVcenterPort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['boot2dockerUrl'] = isset($data['boot2dockerUrl']) ? $data['boot2dockerUrl'] : null;
        $this->container['cfgparam'] = isset($data['cfgparam']) ? $data['cfgparam'] : null;
        $this->container['cloneFrom'] = isset($data['cloneFrom']) ? $data['cloneFrom'] : null;
        $this->container['cloudConfig'] = isset($data['cloudConfig']) ? $data['cloudConfig'] : null;
        $this->container['cloudinit'] = isset($data['cloudinit']) ? $data['cloudinit'] : null;
        $this->container['contentLibrary'] = isset($data['contentLibrary']) ? $data['contentLibrary'] : null;
        $this->container['cpuCount'] = isset($data['cpuCount']) ? $data['cpuCount'] : null;
        $this->container['creationType'] = isset($data['creationType']) ? $data['creationType'] : null;
        $this->container['customAttribute'] = isset($data['customAttribute']) ? $data['customAttribute'] : null;
        $this->container['datacenter'] = isset($data['datacenter']) ? $data['datacenter'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['datastoreCluster'] = isset($data['datastoreCluster']) ? $data['datastoreCluster'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['gracefulShutdownTimeout'] = isset($data['gracefulShutdownTimeout']) ? $data['gracefulShutdownTimeout'] : null;
        $this->container['hostsystem'] = isset($data['hostsystem']) ? $data['hostsystem'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['sshPassword'] = isset($data['sshPassword']) ? $data['sshPassword'] : null;
        $this->container['sshPort'] = isset($data['sshPort']) ? $data['sshPort'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['sshUserGroup'] = isset($data['sshUserGroup']) ? $data['sshUserGroup'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['vappIpallocationpolicy'] = isset($data['vappIpallocationpolicy']) ? $data['vappIpallocationpolicy'] : null;
        $this->container['vappIpprotocol'] = isset($data['vappIpprotocol']) ? $data['vappIpprotocol'] : null;
        $this->container['vappProperty'] = isset($data['vappProperty']) ? $data['vappProperty'] : null;
        $this->container['vappTransport'] = isset($data['vappTransport']) ? $data['vappTransport'] : null;
        $this->container['vcenter'] = isset($data['vcenter']) ? $data['vcenter'] : null;
        $this->container['vcenterPort'] = isset($data['vcenterPort']) ? $data['vcenterPort'] : null;
    }

    /**
     * Gets boot2dockerUrl
     * @return string
     */
    public function getBoot2dockerUrl()
    {
        return $this->container['boot2dockerUrl'];
    }

    /**
     * Sets boot2dockerUrl
     * @param string $boot2dockerUrl
     * @return $this
     */
    public function setBoot2dockerUrl($boot2dockerUrl)
    {
        $this->container['boot2dockerUrl'] = $boot2dockerUrl;

        return $this;
    }


    /**
     * Gets cfgparam
     * @return string[]
     */
    public function getCfgparam()
    {
        return $this->container['cfgparam'];
    }

    /**
     * Sets cfgparam
     * @param string[] $cfgparam
     * @return $this
     */
    public function setCfgparam($cfgparam)
    {
        $this->container['cfgparam'] = $cfgparam;

        return $this;
    }


    /**
     * Gets cloneFrom
     * @return string
     */
    public function getCloneFrom()
    {
        return $this->container['cloneFrom'];
    }

    /**
     * Sets cloneFrom
     * @param string $cloneFrom
     * @return $this
     */
    public function setCloneFrom($cloneFrom)
    {
        $this->container['cloneFrom'] = $cloneFrom;

        return $this;
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
     * Gets cloudinit
     * @return string
     */
    public function getCloudinit()
    {
        return $this->container['cloudinit'];
    }

    /**
     * Sets cloudinit
     * @param string $cloudinit
     * @return $this
     */
    public function setCloudinit($cloudinit)
    {
        $this->container['cloudinit'] = $cloudinit;

        return $this;
    }


    /**
     * Gets contentLibrary
     * @return string
     */
    public function getContentLibrary()
    {
        return $this->container['contentLibrary'];
    }

    /**
     * Sets contentLibrary
     * @param string $contentLibrary
     * @return $this
     */
    public function setContentLibrary($contentLibrary)
    {
        $this->container['contentLibrary'] = $contentLibrary;

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
     * Gets creationType
     * @return string
     */
    public function getCreationType()
    {
        return $this->container['creationType'];
    }

    /**
     * Sets creationType
     * @param string $creationType
     * @return $this
     */
    public function setCreationType($creationType)
    {
        $this->container['creationType'] = $creationType;

        return $this;
    }


    /**
     * Gets customAttribute
     * @return string[]
     */
    public function getCustomAttribute()
    {
        return $this->container['customAttribute'];
    }

    /**
     * Sets customAttribute
     * @param string[] $customAttribute
     * @return $this
     */
    public function setCustomAttribute($customAttribute)
    {
        $this->container['customAttribute'] = $customAttribute;

        return $this;
    }


    /**
     * Gets datacenter
     * @return string
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     * @param string $datacenter
     * @return $this
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
    }


    /**
     * Gets datastore
     * @return string
     */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
     * Sets datastore
     * @param string $datastore
     * @return $this
     */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;

        return $this;
    }


    /**
     * Gets datastoreCluster
     * @return string
     */
    public function getDatastoreCluster()
    {
        return $this->container['datastoreCluster'];
    }

    /**
     * Sets datastoreCluster
     * @param string $datastoreCluster
     * @return $this
     */
    public function setDatastoreCluster($datastoreCluster)
    {
        $this->container['datastoreCluster'] = $datastoreCluster;

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
     * Gets folder
     * @return string
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param string $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }


    /**
     * Gets gracefulShutdownTimeout
     * @return string
     */
    public function getGracefulShutdownTimeout()
    {
        return $this->container['gracefulShutdownTimeout'];
    }

    /**
     * Sets gracefulShutdownTimeout
     * @param string $gracefulShutdownTimeout
     * @return $this
     */
    public function setGracefulShutdownTimeout($gracefulShutdownTimeout)
    {
        $this->container['gracefulShutdownTimeout'] = $gracefulShutdownTimeout;

        return $this;
    }


    /**
     * Gets hostsystem
     * @return string
     */
    public function getHostsystem()
    {
        return $this->container['hostsystem'];
    }

    /**
     * Sets hostsystem
     * @param string $hostsystem
     * @return $this
     */
    public function setHostsystem($hostsystem)
    {
        $this->container['hostsystem'] = $hostsystem;

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
     * Gets network
     * @return string[]
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param string[] $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }


    /**
     * Gets os
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param string $os
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }


    /**
     * Gets password
     * @return \Rancher\Model\PasswordModel
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param \Rancher\Model\PasswordModel $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }


    /**
     * Gets pool
     * @return string
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     * @param string $pool
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

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
     * Gets sshUserGroup
     * @return string
     */
    public function getSshUserGroup()
    {
        return $this->container['sshUserGroup'];
    }

    /**
     * Sets sshUserGroup
     * @param string $sshUserGroup
     * @return $this
     */
    public function setSshUserGroup($sshUserGroup)
    {
        $this->container['sshUserGroup'] = $sshUserGroup;

        return $this;
    }


    /**
     * Gets tag
     * @return string[]
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string[] $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }


    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }


    /**
     * Gets vappIpallocationpolicy
     * @return string
     */
    public function getVappIpallocationpolicy()
    {
        return $this->container['vappIpallocationpolicy'];
    }

    /**
     * Sets vappIpallocationpolicy
     * @param string $vappIpallocationpolicy
     * @return $this
     */
    public function setVappIpallocationpolicy($vappIpallocationpolicy)
    {
        $this->container['vappIpallocationpolicy'] = $vappIpallocationpolicy;

        return $this;
    }


    /**
     * Gets vappIpprotocol
     * @return string
     */
    public function getVappIpprotocol()
    {
        return $this->container['vappIpprotocol'];
    }

    /**
     * Sets vappIpprotocol
     * @param string $vappIpprotocol
     * @return $this
     */
    public function setVappIpprotocol($vappIpprotocol)
    {
        $this->container['vappIpprotocol'] = $vappIpprotocol;

        return $this;
    }


    /**
     * Gets vappProperty
     * @return string[]
     */
    public function getVappProperty()
    {
        return $this->container['vappProperty'];
    }

    /**
     * Sets vappProperty
     * @param string[] $vappProperty
     * @return $this
     */
    public function setVappProperty($vappProperty)
    {
        $this->container['vappProperty'] = $vappProperty;

        return $this;
    }


    /**
     * Gets vappTransport
     * @return string
     */
    public function getVappTransport()
    {
        return $this->container['vappTransport'];
    }

    /**
     * Sets vappTransport
     * @param string $vappTransport
     * @return $this
     */
    public function setVappTransport($vappTransport)
    {
        $this->container['vappTransport'] = $vappTransport;

        return $this;
    }


    /**
     * Gets vcenter
     * @return string
     */
    public function getVcenter()
    {
        return $this->container['vcenter'];
    }

    /**
     * Sets vcenter
     * @param string $vcenter
     * @return $this
     */
    public function setVcenter($vcenter)
    {
        $this->container['vcenter'] = $vcenter;

        return $this;
    }


    /**
     * Gets vcenterPort
     * @return string
     */
    public function getVcenterPort()
    {
        return $this->container['vcenterPort'];
    }

    /**
     * Sets vcenterPort
     * @param string $vcenterPort
     * @return $this
     */
    public function setVcenterPort($vcenterPort)
    {
        $this->container['vcenterPort'] = $vcenterPort;

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

