<?php

/**
 * VolumeModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class VolumeModel implements ArrayAccess
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
        'awsElasticBlockStore',
        'azureDisk',
        'azureFile',
        'cephfs',
        'cinder',
        'configMap',
        'csi',
        'downwardAPI',
        'emptyDir',
        'ephemeral',
        'fc',
        'flexVolume',
        'flocker',
        'gcePersistentDisk',
        'gitRepo',
        'glusterfs',
        'hostPath',
        'iscsi',
        'name',
        'nfs',
        'persistentVolumeClaim',
        'photonPersistentDisk',
        'portworxVolume',
        'projected',
        'quobyte',
        'rbd',
        'scaleIO',
        'secret',
        'storageos',
        'vsphereVolume',
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
        'awsElasticBlockStore',
        'azureDisk',
        'azureFile',
        'cephfs',
        'cinder',
        'configMap',
        'csi',
        'downwardAPI',
        'emptyDir',
        'ephemeral',
        'fc',
        'flexVolume',
        'flocker',
        'gcePersistentDisk',
        'gitRepo',
        'glusterfs',
        'hostPath',
        'iscsi',
        'name',
        'nfs',
        'persistentVolumeClaim',
        'photonPersistentDisk',
        'portworxVolume',
        'projected',
        'quobyte',
        'rbd',
        'scaleIO',
        'secret',
        'storageos',
        'vsphereVolume',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'awsElasticBlockStore' => '\Rancher\Model\AwsElasticBlockStoreVolumeSourceModel',
        'azureDisk' => '\Rancher\Model\AzureDiskVolumeSourceModel',
        'azureFile' => '\Rancher\Model\AzureFileVolumeSourceModel',
        'cephfs' => '\Rancher\Model\CephFSVolumeSourceModel',
        'cinder' => '\Rancher\Model\CinderVolumeSourceModel',
        'configMap' => '\Rancher\Model\ConfigMapVolumeSourceModel',
        'csi' => '\Rancher\Model\CsiVolumeSourceModel',
        'downwardAPI' => '\Rancher\Model\DownwardAPIVolumeSourceModel',
        'emptyDir' => '\Rancher\Model\EmptyDirVolumeSourceModel',
        'ephemeral' => '\Rancher\Model\EphemeralVolumeSourceModel',
        'fc' => '\Rancher\Model\FcVolumeSourceModel',
        'flexVolume' => '\Rancher\Model\FlexVolumeSourceModel',
        'flocker' => '\Rancher\Model\FlockerVolumeSourceModel',
        'gcePersistentDisk' => '\Rancher\Model\GcePersistentDiskVolumeSourceModel',
        'gitRepo' => '\Rancher\Model\GitRepoVolumeSourceModel',
        'glusterfs' => '\Rancher\Model\GlusterfsVolumeSourceModel',
        'hostPath' => '\Rancher\Model\HostPathVolumeSourceModel',
        'iscsi' => '\Rancher\Model\IscsiVolumeSourceModel',
        'name' => 'string',
        'nfs' => '\Rancher\Model\NfsVolumeSourceModel',
        'persistentVolumeClaim' => '\Rancher\Model\PersistentVolumeClaimVolumeSourceModel',
        'photonPersistentDisk' => '\Rancher\Model\PhotonPersistentDiskVolumeSourceModel',
        'portworxVolume' => '\Rancher\Model\PortworxVolumeSourceModel',
        'projected' => '\Rancher\Model\ProjectedVolumeSourceModel',
        'quobyte' => '\Rancher\Model\QuobyteVolumeSourceModel',
        'rbd' => '\Rancher\Model\RbdVolumeSourceModel',
        'scaleIO' => '\Rancher\Model\ScaleIOVolumeSourceModel',
        'secret' => '\Rancher\Model\SecretVolumeSourceModel',
        'storageos' => '\Rancher\Model\StorageOSVolumeSourceModel',
        'vsphereVolume' => '\Rancher\Model\VsphereVirtualDiskVolumeSourceModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'awsElasticBlockStore' => 'setAwsElasticBlockStore',
        'azureDisk' => 'setAzureDisk',
        'azureFile' => 'setAzureFile',
        'cephfs' => 'setCephfs',
        'cinder' => 'setCinder',
        'configMap' => 'setConfigMap',
        'csi' => 'setCsi',
        'downwardAPI' => 'setDownwardAPI',
        'emptyDir' => 'setEmptyDir',
        'ephemeral' => 'setEphemeral',
        'fc' => 'setFc',
        'flexVolume' => 'setFlexVolume',
        'flocker' => 'setFlocker',
        'gcePersistentDisk' => 'setGcePersistentDisk',
        'gitRepo' => 'setGitRepo',
        'glusterfs' => 'setGlusterfs',
        'hostPath' => 'setHostPath',
        'iscsi' => 'setIscsi',
        'name' => 'setName',
        'nfs' => 'setNfs',
        'persistentVolumeClaim' => 'setPersistentVolumeClaim',
        'photonPersistentDisk' => 'setPhotonPersistentDisk',
        'portworxVolume' => 'setPortworxVolume',
        'projected' => 'setProjected',
        'quobyte' => 'setQuobyte',
        'rbd' => 'setRbd',
        'scaleIO' => 'setScaleIO',
        'secret' => 'setSecret',
        'storageos' => 'setStorageos',
        'vsphereVolume' => 'setVsphereVolume',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'awsElasticBlockStore' => 'getAwsElasticBlockStore',
        'azureDisk' => 'getAzureDisk',
        'azureFile' => 'getAzureFile',
        'cephfs' => 'getCephfs',
        'cinder' => 'getCinder',
        'configMap' => 'getConfigMap',
        'csi' => 'getCsi',
        'downwardAPI' => 'getDownwardAPI',
        'emptyDir' => 'getEmptyDir',
        'ephemeral' => 'getEphemeral',
        'fc' => 'getFc',
        'flexVolume' => 'getFlexVolume',
        'flocker' => 'getFlocker',
        'gcePersistentDisk' => 'getGcePersistentDisk',
        'gitRepo' => 'getGitRepo',
        'glusterfs' => 'getGlusterfs',
        'hostPath' => 'getHostPath',
        'iscsi' => 'getIscsi',
        'name' => 'getName',
        'nfs' => 'getNfs',
        'persistentVolumeClaim' => 'getPersistentVolumeClaim',
        'photonPersistentDisk' => 'getPhotonPersistentDisk',
        'portworxVolume' => 'getPortworxVolume',
        'projected' => 'getProjected',
        'quobyte' => 'getQuobyte',
        'rbd' => 'getRbd',
        'scaleIO' => 'getScaleIO',
        'secret' => 'getSecret',
        'storageos' => 'getStorageos',
        'vsphereVolume' => 'getVsphereVolume',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['awsElasticBlockStore'] = isset($data['awsElasticBlockStore']) ? $data['awsElasticBlockStore'] : null;
        $this->container['azureDisk'] = isset($data['azureDisk']) ? $data['azureDisk'] : null;
        $this->container['azureFile'] = isset($data['azureFile']) ? $data['azureFile'] : null;
        $this->container['cephfs'] = isset($data['cephfs']) ? $data['cephfs'] : null;
        $this->container['cinder'] = isset($data['cinder']) ? $data['cinder'] : null;
        $this->container['configMap'] = isset($data['configMap']) ? $data['configMap'] : null;
        $this->container['csi'] = isset($data['csi']) ? $data['csi'] : null;
        $this->container['downwardAPI'] = isset($data['downwardAPI']) ? $data['downwardAPI'] : null;
        $this->container['emptyDir'] = isset($data['emptyDir']) ? $data['emptyDir'] : null;
        $this->container['ephemeral'] = isset($data['ephemeral']) ? $data['ephemeral'] : null;
        $this->container['fc'] = isset($data['fc']) ? $data['fc'] : null;
        $this->container['flexVolume'] = isset($data['flexVolume']) ? $data['flexVolume'] : null;
        $this->container['flocker'] = isset($data['flocker']) ? $data['flocker'] : null;
        $this->container['gcePersistentDisk'] = isset($data['gcePersistentDisk']) ? $data['gcePersistentDisk'] : null;
        $this->container['gitRepo'] = isset($data['gitRepo']) ? $data['gitRepo'] : null;
        $this->container['glusterfs'] = isset($data['glusterfs']) ? $data['glusterfs'] : null;
        $this->container['hostPath'] = isset($data['hostPath']) ? $data['hostPath'] : null;
        $this->container['iscsi'] = isset($data['iscsi']) ? $data['iscsi'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nfs'] = isset($data['nfs']) ? $data['nfs'] : null;
        $this->container['persistentVolumeClaim'] = isset($data['persistentVolumeClaim']) ? $data['persistentVolumeClaim'] : null;
        $this->container['photonPersistentDisk'] = isset($data['photonPersistentDisk']) ? $data['photonPersistentDisk'] : null;
        $this->container['portworxVolume'] = isset($data['portworxVolume']) ? $data['portworxVolume'] : null;
        $this->container['projected'] = isset($data['projected']) ? $data['projected'] : null;
        $this->container['quobyte'] = isset($data['quobyte']) ? $data['quobyte'] : null;
        $this->container['rbd'] = isset($data['rbd']) ? $data['rbd'] : null;
        $this->container['scaleIO'] = isset($data['scaleIO']) ? $data['scaleIO'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['storageos'] = isset($data['storageos']) ? $data['storageos'] : null;
        $this->container['vsphereVolume'] = isset($data['vsphereVolume']) ? $data['vsphereVolume'] : null;
    }

    /**
     * Gets awsElasticBlockStore
     * @return \Rancher\Model\AwsElasticBlockStoreVolumeSourceModel
     */
    public function getAwsElasticBlockStore()
    {
        return $this->container['awsElasticBlockStore'];
    }

    /**
     * Sets awsElasticBlockStore
     * @param \Rancher\Model\AwsElasticBlockStoreVolumeSourceModel $awsElasticBlockStore
     * @return $this
     */
    public function setAwsElasticBlockStore($awsElasticBlockStore)
    {
        $this->container['awsElasticBlockStore'] = $awsElasticBlockStore;

        return $this;
    }


    /**
     * Gets azureDisk
     * @return \Rancher\Model\AzureDiskVolumeSourceModel
     */
    public function getAzureDisk()
    {
        return $this->container['azureDisk'];
    }

    /**
     * Sets azureDisk
     * @param \Rancher\Model\AzureDiskVolumeSourceModel $azureDisk
     * @return $this
     */
    public function setAzureDisk($azureDisk)
    {
        $this->container['azureDisk'] = $azureDisk;

        return $this;
    }


    /**
     * Gets azureFile
     * @return \Rancher\Model\AzureFileVolumeSourceModel
     */
    public function getAzureFile()
    {
        return $this->container['azureFile'];
    }

    /**
     * Sets azureFile
     * @param \Rancher\Model\AzureFileVolumeSourceModel $azureFile
     * @return $this
     */
    public function setAzureFile($azureFile)
    {
        $this->container['azureFile'] = $azureFile;

        return $this;
    }


    /**
     * Gets cephfs
     * @return \Rancher\Model\CephFSVolumeSourceModel
     */
    public function getCephfs()
    {
        return $this->container['cephfs'];
    }

    /**
     * Sets cephfs
     * @param \Rancher\Model\CephFSVolumeSourceModel $cephfs
     * @return $this
     */
    public function setCephfs($cephfs)
    {
        $this->container['cephfs'] = $cephfs;

        return $this;
    }


    /**
     * Gets cinder
     * @return \Rancher\Model\CinderVolumeSourceModel
     */
    public function getCinder()
    {
        return $this->container['cinder'];
    }

    /**
     * Sets cinder
     * @param \Rancher\Model\CinderVolumeSourceModel $cinder
     * @return $this
     */
    public function setCinder($cinder)
    {
        $this->container['cinder'] = $cinder;

        return $this;
    }


    /**
     * Gets configMap
     * @return \Rancher\Model\ConfigMapVolumeSourceModel
     */
    public function getConfigMap()
    {
        return $this->container['configMap'];
    }

    /**
     * Sets configMap
     * @param \Rancher\Model\ConfigMapVolumeSourceModel $configMap
     * @return $this
     */
    public function setConfigMap($configMap)
    {
        $this->container['configMap'] = $configMap;

        return $this;
    }


    /**
     * Gets csi
     * @return \Rancher\Model\CsiVolumeSourceModel
     */
    public function getCsi()
    {
        return $this->container['csi'];
    }

    /**
     * Sets csi
     * @param \Rancher\Model\CsiVolumeSourceModel $csi
     * @return $this
     */
    public function setCsi($csi)
    {
        $this->container['csi'] = $csi;

        return $this;
    }


    /**
     * Gets downwardAPI
     * @return \Rancher\Model\DownwardAPIVolumeSourceModel
     */
    public function getDownwardAPI()
    {
        return $this->container['downwardAPI'];
    }

    /**
     * Sets downwardAPI
     * @param \Rancher\Model\DownwardAPIVolumeSourceModel $downwardAPI
     * @return $this
     */
    public function setDownwardAPI($downwardAPI)
    {
        $this->container['downwardAPI'] = $downwardAPI;

        return $this;
    }


    /**
     * Gets emptyDir
     * @return \Rancher\Model\EmptyDirVolumeSourceModel
     */
    public function getEmptyDir()
    {
        return $this->container['emptyDir'];
    }

    /**
     * Sets emptyDir
     * @param \Rancher\Model\EmptyDirVolumeSourceModel $emptyDir
     * @return $this
     */
    public function setEmptyDir($emptyDir)
    {
        $this->container['emptyDir'] = $emptyDir;

        return $this;
    }


    /**
     * Gets ephemeral
     * @return \Rancher\Model\EphemeralVolumeSourceModel
     */
    public function getEphemeral()
    {
        return $this->container['ephemeral'];
    }

    /**
     * Sets ephemeral
     * @param \Rancher\Model\EphemeralVolumeSourceModel $ephemeral
     * @return $this
     */
    public function setEphemeral($ephemeral)
    {
        $this->container['ephemeral'] = $ephemeral;

        return $this;
    }


    /**
     * Gets fc
     * @return \Rancher\Model\FcVolumeSourceModel
     */
    public function getFc()
    {
        return $this->container['fc'];
    }

    /**
     * Sets fc
     * @param \Rancher\Model\FcVolumeSourceModel $fc
     * @return $this
     */
    public function setFc($fc)
    {
        $this->container['fc'] = $fc;

        return $this;
    }


    /**
     * Gets flexVolume
     * @return \Rancher\Model\FlexVolumeSourceModel
     */
    public function getFlexVolume()
    {
        return $this->container['flexVolume'];
    }

    /**
     * Sets flexVolume
     * @param \Rancher\Model\FlexVolumeSourceModel $flexVolume
     * @return $this
     */
    public function setFlexVolume($flexVolume)
    {
        $this->container['flexVolume'] = $flexVolume;

        return $this;
    }


    /**
     * Gets flocker
     * @return \Rancher\Model\FlockerVolumeSourceModel
     */
    public function getFlocker()
    {
        return $this->container['flocker'];
    }

    /**
     * Sets flocker
     * @param \Rancher\Model\FlockerVolumeSourceModel $flocker
     * @return $this
     */
    public function setFlocker($flocker)
    {
        $this->container['flocker'] = $flocker;

        return $this;
    }


    /**
     * Gets gcePersistentDisk
     * @return \Rancher\Model\GcePersistentDiskVolumeSourceModel
     */
    public function getGcePersistentDisk()
    {
        return $this->container['gcePersistentDisk'];
    }

    /**
     * Sets gcePersistentDisk
     * @param \Rancher\Model\GcePersistentDiskVolumeSourceModel $gcePersistentDisk
     * @return $this
     */
    public function setGcePersistentDisk($gcePersistentDisk)
    {
        $this->container['gcePersistentDisk'] = $gcePersistentDisk;

        return $this;
    }


    /**
     * Gets gitRepo
     * @return \Rancher\Model\GitRepoVolumeSourceModel
     */
    public function getGitRepo()
    {
        return $this->container['gitRepo'];
    }

    /**
     * Sets gitRepo
     * @param \Rancher\Model\GitRepoVolumeSourceModel $gitRepo
     * @return $this
     */
    public function setGitRepo($gitRepo)
    {
        $this->container['gitRepo'] = $gitRepo;

        return $this;
    }


    /**
     * Gets glusterfs
     * @return \Rancher\Model\GlusterfsVolumeSourceModel
     */
    public function getGlusterfs()
    {
        return $this->container['glusterfs'];
    }

    /**
     * Sets glusterfs
     * @param \Rancher\Model\GlusterfsVolumeSourceModel $glusterfs
     * @return $this
     */
    public function setGlusterfs($glusterfs)
    {
        $this->container['glusterfs'] = $glusterfs;

        return $this;
    }


    /**
     * Gets hostPath
     * @return \Rancher\Model\HostPathVolumeSourceModel
     */
    public function getHostPath()
    {
        return $this->container['hostPath'];
    }

    /**
     * Sets hostPath
     * @param \Rancher\Model\HostPathVolumeSourceModel $hostPath
     * @return $this
     */
    public function setHostPath($hostPath)
    {
        $this->container['hostPath'] = $hostPath;

        return $this;
    }


    /**
     * Gets iscsi
     * @return \Rancher\Model\IscsiVolumeSourceModel
     */
    public function getIscsi()
    {
        return $this->container['iscsi'];
    }

    /**
     * Sets iscsi
     * @param \Rancher\Model\IscsiVolumeSourceModel $iscsi
     * @return $this
     */
    public function setIscsi($iscsi)
    {
        $this->container['iscsi'] = $iscsi;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets nfs
     * @return \Rancher\Model\NfsVolumeSourceModel
     */
    public function getNfs()
    {
        return $this->container['nfs'];
    }

    /**
     * Sets nfs
     * @param \Rancher\Model\NfsVolumeSourceModel $nfs
     * @return $this
     */
    public function setNfs($nfs)
    {
        $this->container['nfs'] = $nfs;

        return $this;
    }


    /**
     * Gets persistentVolumeClaim
     * @return \Rancher\Model\PersistentVolumeClaimVolumeSourceModel
     */
    public function getPersistentVolumeClaim()
    {
        return $this->container['persistentVolumeClaim'];
    }

    /**
     * Sets persistentVolumeClaim
     * @param \Rancher\Model\PersistentVolumeClaimVolumeSourceModel $persistentVolumeClaim
     * @return $this
     */
    public function setPersistentVolumeClaim($persistentVolumeClaim)
    {
        $this->container['persistentVolumeClaim'] = $persistentVolumeClaim;

        return $this;
    }


    /**
     * Gets photonPersistentDisk
     * @return \Rancher\Model\PhotonPersistentDiskVolumeSourceModel
     */
    public function getPhotonPersistentDisk()
    {
        return $this->container['photonPersistentDisk'];
    }

    /**
     * Sets photonPersistentDisk
     * @param \Rancher\Model\PhotonPersistentDiskVolumeSourceModel $photonPersistentDisk
     * @return $this
     */
    public function setPhotonPersistentDisk($photonPersistentDisk)
    {
        $this->container['photonPersistentDisk'] = $photonPersistentDisk;

        return $this;
    }


    /**
     * Gets portworxVolume
     * @return \Rancher\Model\PortworxVolumeSourceModel
     */
    public function getPortworxVolume()
    {
        return $this->container['portworxVolume'];
    }

    /**
     * Sets portworxVolume
     * @param \Rancher\Model\PortworxVolumeSourceModel $portworxVolume
     * @return $this
     */
    public function setPortworxVolume($portworxVolume)
    {
        $this->container['portworxVolume'] = $portworxVolume;

        return $this;
    }


    /**
     * Gets projected
     * @return \Rancher\Model\ProjectedVolumeSourceModel
     */
    public function getProjected()
    {
        return $this->container['projected'];
    }

    /**
     * Sets projected
     * @param \Rancher\Model\ProjectedVolumeSourceModel $projected
     * @return $this
     */
    public function setProjected($projected)
    {
        $this->container['projected'] = $projected;

        return $this;
    }


    /**
     * Gets quobyte
     * @return \Rancher\Model\QuobyteVolumeSourceModel
     */
    public function getQuobyte()
    {
        return $this->container['quobyte'];
    }

    /**
     * Sets quobyte
     * @param \Rancher\Model\QuobyteVolumeSourceModel $quobyte
     * @return $this
     */
    public function setQuobyte($quobyte)
    {
        $this->container['quobyte'] = $quobyte;

        return $this;
    }


    /**
     * Gets rbd
     * @return \Rancher\Model\RbdVolumeSourceModel
     */
    public function getRbd()
    {
        return $this->container['rbd'];
    }

    /**
     * Sets rbd
     * @param \Rancher\Model\RbdVolumeSourceModel $rbd
     * @return $this
     */
    public function setRbd($rbd)
    {
        $this->container['rbd'] = $rbd;

        return $this;
    }


    /**
     * Gets scaleIO
     * @return \Rancher\Model\ScaleIOVolumeSourceModel
     */
    public function getScaleIO()
    {
        return $this->container['scaleIO'];
    }

    /**
     * Sets scaleIO
     * @param \Rancher\Model\ScaleIOVolumeSourceModel $scaleIO
     * @return $this
     */
    public function setScaleIO($scaleIO)
    {
        $this->container['scaleIO'] = $scaleIO;

        return $this;
    }


    /**
     * Gets secret
     * @return \Rancher\Model\SecretVolumeSourceModel
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     * @param \Rancher\Model\SecretVolumeSourceModel $secret
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }


    /**
     * Gets storageos
     * @return \Rancher\Model\StorageOSVolumeSourceModel
     */
    public function getStorageos()
    {
        return $this->container['storageos'];
    }

    /**
     * Sets storageos
     * @param \Rancher\Model\StorageOSVolumeSourceModel $storageos
     * @return $this
     */
    public function setStorageos($storageos)
    {
        $this->container['storageos'] = $storageos;

        return $this;
    }


    /**
     * Gets vsphereVolume
     * @return \Rancher\Model\VsphereVirtualDiskVolumeSourceModel
     */
    public function getVsphereVolume()
    {
        return $this->container['vsphereVolume'];
    }

    /**
     * Sets vsphereVolume
     * @param \Rancher\Model\VsphereVirtualDiskVolumeSourceModel $vsphereVolume
     * @return $this
     */
    public function setVsphereVolume($vsphereVolume)
    {
        $this->container['vsphereVolume'] = $vsphereVolume;

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

