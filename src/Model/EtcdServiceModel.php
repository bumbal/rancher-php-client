<?php

/**
 * EtcdServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EtcdServiceModel implements ArrayAccess
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
        'backupConfig',
        'caCert',
        'cert',
        'creation',
        'externalUrls',
        'extraArgs',
        'extraArgsArray',
        'extraBinds',
        'extraEnv',
        'gid',
        'image',
        'key',
        'path',
        'retention',
        'snapshot',
        'uid',
        'winExtraArgs',
        'winExtraArgsArray',
        'winExtraBinds',
        'winExtraEnv',
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
        'backupConfig',
        'caCert',
        'cert',
        'creation',
        'externalUrls',
        'extraArgs',
        'extraArgsArray',
        'extraBinds',
        'extraEnv',
        'gid',
        'image',
        'key',
        'path',
        'retention',
        'snapshot',
        'uid',
        'winExtraArgs',
        'winExtraArgsArray',
        'winExtraBinds',
        'winExtraEnv',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'backupConfig' => '\Rancher\Model\BackupConfigModel',
        'caCert' => 'string',
        'cert' => 'string',
        'creation' => 'string',
        'externalUrls' => 'string[]',
        'extraArgs' => 'map[string,string]',
        'extraArgsArray' => 'map[string,\Rancher\Model\Array[string]Model]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'gid' => 'int',
        'image' => 'string',
        'key' => 'string',
        'path' => 'string',
        'retention' => 'string',
        'snapshot' => 'boolean',
        'uid' => 'int',
        'winExtraArgs' => 'map[string,string]',
        'winExtraArgsArray' => 'map[string,\Rancher\Model\Array[string]Model]',
        'winExtraBinds' => 'string[]',
        'winExtraEnv' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'backupConfig' => 'setBackupConfig',
        'caCert' => 'setCaCert',
        'cert' => 'setCert',
        'creation' => 'setCreation',
        'externalUrls' => 'setExternalUrls',
        'extraArgs' => 'setExtraArgs',
        'extraArgsArray' => 'setExtraArgsArray',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'gid' => 'setGid',
        'image' => 'setImage',
        'key' => 'setKey',
        'path' => 'setPath',
        'retention' => 'setRetention',
        'snapshot' => 'setSnapshot',
        'uid' => 'setUid',
        'winExtraArgs' => 'setWinExtraArgs',
        'winExtraArgsArray' => 'setWinExtraArgsArray',
        'winExtraBinds' => 'setWinExtraBinds',
        'winExtraEnv' => 'setWinExtraEnv',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'backupConfig' => 'getBackupConfig',
        'caCert' => 'getCaCert',
        'cert' => 'getCert',
        'creation' => 'getCreation',
        'externalUrls' => 'getExternalUrls',
        'extraArgs' => 'getExtraArgs',
        'extraArgsArray' => 'getExtraArgsArray',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'gid' => 'getGid',
        'image' => 'getImage',
        'key' => 'getKey',
        'path' => 'getPath',
        'retention' => 'getRetention',
        'snapshot' => 'getSnapshot',
        'uid' => 'getUid',
        'winExtraArgs' => 'getWinExtraArgs',
        'winExtraArgsArray' => 'getWinExtraArgsArray',
        'winExtraBinds' => 'getWinExtraBinds',
        'winExtraEnv' => 'getWinExtraEnv',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['backupConfig'] = isset($data['backupConfig']) ? $data['backupConfig'] : null;
        $this->container['caCert'] = isset($data['caCert']) ? $data['caCert'] : null;
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['creation'] = isset($data['creation']) ? $data['creation'] : null;
        $this->container['externalUrls'] = isset($data['externalUrls']) ? $data['externalUrls'] : null;
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraArgsArray'] = isset($data['extraArgsArray']) ? $data['extraArgsArray'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['retention'] = isset($data['retention']) ? $data['retention'] : null;
        $this->container['snapshot'] = isset($data['snapshot']) ? $data['snapshot'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['winExtraArgs'] = isset($data['winExtraArgs']) ? $data['winExtraArgs'] : null;
        $this->container['winExtraArgsArray'] = isset($data['winExtraArgsArray']) ? $data['winExtraArgsArray'] : null;
        $this->container['winExtraBinds'] = isset($data['winExtraBinds']) ? $data['winExtraBinds'] : null;
        $this->container['winExtraEnv'] = isset($data['winExtraEnv']) ? $data['winExtraEnv'] : null;
    }

    /**
     * Gets backupConfig
     * @return \Rancher\Model\BackupConfigModel
     */
    public function getBackupConfig()
    {
        return $this->container['backupConfig'];
    }

    /**
     * Sets backupConfig
     * @param \Rancher\Model\BackupConfigModel $backupConfig
     * @return $this
     */
    public function setBackupConfig($backupConfig)
    {
        $this->container['backupConfig'] = $backupConfig;

        return $this;
    }


    /**
     * Gets caCert
     * @return string
     */
    public function getCaCert()
    {
        return $this->container['caCert'];
    }

    /**
     * Sets caCert
     * @param string $caCert
     * @return $this
     */
    public function setCaCert($caCert)
    {
        $this->container['caCert'] = $caCert;

        return $this;
    }


    /**
     * Gets cert
     * @return string
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     * @param string $cert
     * @return $this
     */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;

        return $this;
    }


    /**
     * Gets creation
     * @return string
     */
    public function getCreation()
    {
        return $this->container['creation'];
    }

    /**
     * Sets creation
     * @param string $creation
     * @return $this
     */
    public function setCreation($creation)
    {
        $this->container['creation'] = $creation;

        return $this;
    }


    /**
     * Gets externalUrls
     * @return string[]
     */
    public function getExternalUrls()
    {
        return $this->container['externalUrls'];
    }

    /**
     * Sets externalUrls
     * @param string[] $externalUrls
     * @return $this
     */
    public function setExternalUrls($externalUrls)
    {
        $this->container['externalUrls'] = $externalUrls;

        return $this;
    }


    /**
     * Gets extraArgs
     * @return string[]
     */
    public function getExtraArgs()
    {
        return $this->container['extraArgs'];
    }

    /**
     * Sets extraArgs
     * @param string[] $extraArgs
     * @return $this
     */
    public function setExtraArgs($extraArgs)
    {
        $this->container['extraArgs'] = $extraArgs;

        return $this;
    }


    /**
     * Gets extraArgsArray
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getExtraArgsArray()
    {
        return $this->container['extraArgsArray'];
    }

    /**
     * Sets extraArgsArray
     * @param \Rancher\Model\Array[string]Model[] $extraArgsArray
     * @return $this
     */
    public function setExtraArgsArray($extraArgsArray)
    {
        $this->container['extraArgsArray'] = $extraArgsArray;

        return $this;
    }


    /**
     * Gets extraBinds
     * @return string[]
     */
    public function getExtraBinds()
    {
        return $this->container['extraBinds'];
    }

    /**
     * Sets extraBinds
     * @param string[] $extraBinds
     * @return $this
     */
    public function setExtraBinds($extraBinds)
    {
        $this->container['extraBinds'] = $extraBinds;

        return $this;
    }


    /**
     * Gets extraEnv
     * @return string[]
     */
    public function getExtraEnv()
    {
        return $this->container['extraEnv'];
    }

    /**
     * Sets extraEnv
     * @param string[] $extraEnv
     * @return $this
     */
    public function setExtraEnv($extraEnv)
    {
        $this->container['extraEnv'] = $extraEnv;

        return $this;
    }


    /**
     * Gets gid
     * @return int
     */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
     * Sets gid
     * @param int $gid
     * @return $this
     */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;

        return $this;
    }


    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }


    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets retention
     * @return string
     */
    public function getRetention()
    {
        return $this->container['retention'];
    }

    /**
     * Sets retention
     * @param string $retention
     * @return $this
     */
    public function setRetention($retention)
    {
        $this->container['retention'] = $retention;

        return $this;
    }


    /**
     * Gets snapshot
     * @return boolean
     */
    public function getSnapshot()
    {
        return $this->container['snapshot'];
    }

    /**
     * Sets snapshot
     * @param boolean $snapshot
     * @return $this
     */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;

        return $this;
    }


    /**
     * Gets uid
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param int $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }


    /**
     * Gets winExtraArgs
     * @return string[]
     */
    public function getWinExtraArgs()
    {
        return $this->container['winExtraArgs'];
    }

    /**
     * Sets winExtraArgs
     * @param string[] $winExtraArgs
     * @return $this
     */
    public function setWinExtraArgs($winExtraArgs)
    {
        $this->container['winExtraArgs'] = $winExtraArgs;

        return $this;
    }


    /**
     * Gets winExtraArgsArray
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getWinExtraArgsArray()
    {
        return $this->container['winExtraArgsArray'];
    }

    /**
     * Sets winExtraArgsArray
     * @param \Rancher\Model\Array[string]Model[] $winExtraArgsArray
     * @return $this
     */
    public function setWinExtraArgsArray($winExtraArgsArray)
    {
        $this->container['winExtraArgsArray'] = $winExtraArgsArray;

        return $this;
    }


    /**
     * Gets winExtraBinds
     * @return string[]
     */
    public function getWinExtraBinds()
    {
        return $this->container['winExtraBinds'];
    }

    /**
     * Sets winExtraBinds
     * @param string[] $winExtraBinds
     * @return $this
     */
    public function setWinExtraBinds($winExtraBinds)
    {
        $this->container['winExtraBinds'] = $winExtraBinds;

        return $this;
    }


    /**
     * Gets winExtraEnv
     * @return string[]
     */
    public function getWinExtraEnv()
    {
        return $this->container['winExtraEnv'];
    }

    /**
     * Sets winExtraEnv
     * @param string[] $winExtraEnv
     * @return $this
     */
    public function setWinExtraEnv($winExtraEnv)
    {
        $this->container['winExtraEnv'] = $winExtraEnv;

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

