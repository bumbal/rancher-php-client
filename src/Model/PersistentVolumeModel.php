<?php

/**
 * PersistentVolumeModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PersistentVolumeModel implements ArrayAccess
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
        'accessModes',
        'annotations',
        'awsElasticBlockStore',
        'azureDisk',
        'azureFile',
        'capacity',
        'cephfs',
        'cinder',
        'claimRef',
        'csi',
        'description',
        'fc',
        'flexVolume',
        'flocker',
        'gcePersistentDisk',
        'glusterfs',
        'hostPath',
        'iscsi',
        'labels',
        'local',
        'mountOptions',
        'name',
        'nfs',
        'nodeAffinity',
        'persistentVolumeReclaimPolicy',
        'photonPersistentDisk',
        'portworxVolume',
        'quobyte',
        'rbd',
        'scaleIO',
        'storageClassId',
        'storageos',
        'volumeMode',
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
        'accessModes',
        'annotations',
        'capacity',
        'claimRef',
        'description',
        'labels',
        'mountOptions',
        'nodeAffinity',
        'persistentVolumeReclaimPolicy',
        'storageClassId',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessModes' => 'string[]',
        'annotations' => 'map[string,string]',
        'awsElasticBlockStore' => '\Rancher\Model\AwsElasticBlockStoreVolumeSourceModel',
        'azureDisk' => '\Rancher\Model\AzureDiskVolumeSourceModel',
        'azureFile' => '\Rancher\Model\AzureFilePersistentVolumeSourceModel',
        'capacity' => 'map[string,string]',
        'cephfs' => '\Rancher\Model\CephFSPersistentVolumeSourceModel',
        'cinder' => '\Rancher\Model\CinderPersistentVolumeSourceModel',
        'claimRef' => '\Rancher\Model\ObjectReferenceModel',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'csi' => '\Rancher\Model\CsiPersistentVolumeSourceModel',
        'description' => 'string',
        'fc' => '\Rancher\Model\FcVolumeSourceModel',
        'flexVolume' => '\Rancher\Model\FlexPersistentVolumeSourceModel',
        'flocker' => '\Rancher\Model\FlockerVolumeSourceModel',
        'gcePersistentDisk' => '\Rancher\Model\GcePersistentDiskVolumeSourceModel',
        'glusterfs' => '\Rancher\Model\GlusterfsVolumeSourceModel',
        'hostPath' => '\Rancher\Model\HostPathVolumeSourceModel',
        'iscsi' => '\Rancher\Model\IscsiPersistentVolumeSourceModel',
        'labels' => 'map[string,string]',
        'local' => '\Rancher\Model\LocalVolumeSourceModel',
        'mountOptions' => 'string[]',
        'name' => 'string',
        'nfs' => '\Rancher\Model\NfsVolumeSourceModel',
        'nodeAffinity' => '\Rancher\Model\VolumeNodeAffinityModel',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'persistentVolumeReclaimPolicy' => 'string',
        'photonPersistentDisk' => '\Rancher\Model\PhotonPersistentDiskVolumeSourceModel',
        'portworxVolume' => '\Rancher\Model\PortworxVolumeSourceModel',
        'quobyte' => '\Rancher\Model\QuobyteVolumeSourceModel',
        'rbd' => '\Rancher\Model\RbdPersistentVolumeSourceModel',
        'removed' => '\DateTime',
        'scaleIO' => '\Rancher\Model\ScaleIOPersistentVolumeSourceModel',
        'state' => 'string',
        'status' => '\Rancher\Model\PersistentVolumeStatusModel',
        'storageClassId' => 'string',
        'storageos' => '\Rancher\Model\StorageOSPersistentVolumeSourceModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'volumeMode' => 'string',
        'vsphereVolume' => '\Rancher\Model\VsphereVirtualDiskVolumeSourceModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessModes' => 'setAccessModes',
        'annotations' => 'setAnnotations',
        'awsElasticBlockStore' => 'setAwsElasticBlockStore',
        'azureDisk' => 'setAzureDisk',
        'azureFile' => 'setAzureFile',
        'capacity' => 'setCapacity',
        'cephfs' => 'setCephfs',
        'cinder' => 'setCinder',
        'claimRef' => 'setClaimRef',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'csi' => 'setCsi',
        'description' => 'setDescription',
        'fc' => 'setFc',
        'flexVolume' => 'setFlexVolume',
        'flocker' => 'setFlocker',
        'gcePersistentDisk' => 'setGcePersistentDisk',
        'glusterfs' => 'setGlusterfs',
        'hostPath' => 'setHostPath',
        'iscsi' => 'setIscsi',
        'labels' => 'setLabels',
        'local' => 'setLocal',
        'mountOptions' => 'setMountOptions',
        'name' => 'setName',
        'nfs' => 'setNfs',
        'nodeAffinity' => 'setNodeAffinity',
        'ownerReferences' => 'setOwnerReferences',
        'persistentVolumeReclaimPolicy' => 'setPersistentVolumeReclaimPolicy',
        'photonPersistentDisk' => 'setPhotonPersistentDisk',
        'portworxVolume' => 'setPortworxVolume',
        'quobyte' => 'setQuobyte',
        'rbd' => 'setRbd',
        'removed' => 'setRemoved',
        'scaleIO' => 'setScaleIO',
        'state' => 'setState',
        'status' => 'setStatus',
        'storageClassId' => 'setStorageClassId',
        'storageos' => 'setStorageos',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'volumeMode' => 'setVolumeMode',
        'vsphereVolume' => 'setVsphereVolume',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessModes' => 'getAccessModes',
        'annotations' => 'getAnnotations',
        'awsElasticBlockStore' => 'getAwsElasticBlockStore',
        'azureDisk' => 'getAzureDisk',
        'azureFile' => 'getAzureFile',
        'capacity' => 'getCapacity',
        'cephfs' => 'getCephfs',
        'cinder' => 'getCinder',
        'claimRef' => 'getClaimRef',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'csi' => 'getCsi',
        'description' => 'getDescription',
        'fc' => 'getFc',
        'flexVolume' => 'getFlexVolume',
        'flocker' => 'getFlocker',
        'gcePersistentDisk' => 'getGcePersistentDisk',
        'glusterfs' => 'getGlusterfs',
        'hostPath' => 'getHostPath',
        'iscsi' => 'getIscsi',
        'labels' => 'getLabels',
        'local' => 'getLocal',
        'mountOptions' => 'getMountOptions',
        'name' => 'getName',
        'nfs' => 'getNfs',
        'nodeAffinity' => 'getNodeAffinity',
        'ownerReferences' => 'getOwnerReferences',
        'persistentVolumeReclaimPolicy' => 'getPersistentVolumeReclaimPolicy',
        'photonPersistentDisk' => 'getPhotonPersistentDisk',
        'portworxVolume' => 'getPortworxVolume',
        'quobyte' => 'getQuobyte',
        'rbd' => 'getRbd',
        'removed' => 'getRemoved',
        'scaleIO' => 'getScaleIO',
        'state' => 'getState',
        'status' => 'getStatus',
        'storageClassId' => 'getStorageClassId',
        'storageos' => 'getStorageos',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'volumeMode' => 'getVolumeMode',
        'vsphereVolume' => 'getVsphereVolume',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessModes'] = isset($data['accessModes']) ? $data['accessModes'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['awsElasticBlockStore'] = isset($data['awsElasticBlockStore']) ? $data['awsElasticBlockStore'] : null;
        $this->container['azureDisk'] = isset($data['azureDisk']) ? $data['azureDisk'] : null;
        $this->container['azureFile'] = isset($data['azureFile']) ? $data['azureFile'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['cephfs'] = isset($data['cephfs']) ? $data['cephfs'] : null;
        $this->container['cinder'] = isset($data['cinder']) ? $data['cinder'] : null;
        $this->container['claimRef'] = isset($data['claimRef']) ? $data['claimRef'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['csi'] = isset($data['csi']) ? $data['csi'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fc'] = isset($data['fc']) ? $data['fc'] : null;
        $this->container['flexVolume'] = isset($data['flexVolume']) ? $data['flexVolume'] : null;
        $this->container['flocker'] = isset($data['flocker']) ? $data['flocker'] : null;
        $this->container['gcePersistentDisk'] = isset($data['gcePersistentDisk']) ? $data['gcePersistentDisk'] : null;
        $this->container['glusterfs'] = isset($data['glusterfs']) ? $data['glusterfs'] : null;
        $this->container['hostPath'] = isset($data['hostPath']) ? $data['hostPath'] : null;
        $this->container['iscsi'] = isset($data['iscsi']) ? $data['iscsi'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['local'] = isset($data['local']) ? $data['local'] : null;
        $this->container['mountOptions'] = isset($data['mountOptions']) ? $data['mountOptions'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nfs'] = isset($data['nfs']) ? $data['nfs'] : null;
        $this->container['nodeAffinity'] = isset($data['nodeAffinity']) ? $data['nodeAffinity'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['persistentVolumeReclaimPolicy'] = isset($data['persistentVolumeReclaimPolicy']) ? $data['persistentVolumeReclaimPolicy'] : null;
        $this->container['photonPersistentDisk'] = isset($data['photonPersistentDisk']) ? $data['photonPersistentDisk'] : null;
        $this->container['portworxVolume'] = isset($data['portworxVolume']) ? $data['portworxVolume'] : null;
        $this->container['quobyte'] = isset($data['quobyte']) ? $data['quobyte'] : null;
        $this->container['rbd'] = isset($data['rbd']) ? $data['rbd'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['scaleIO'] = isset($data['scaleIO']) ? $data['scaleIO'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['storageClassId'] = isset($data['storageClassId']) ? $data['storageClassId'] : null;
        $this->container['storageos'] = isset($data['storageos']) ? $data['storageos'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['volumeMode'] = isset($data['volumeMode']) ? $data['volumeMode'] : null;
        $this->container['vsphereVolume'] = isset($data['vsphereVolume']) ? $data['vsphereVolume'] : null;
    }

    /**
     * Gets accessModes
     * @return string[]
     */
    public function getAccessModes()
    {
        return $this->container['accessModes'];
    }

    /**
     * Sets accessModes
     * @param string[] $accessModes
     * @return $this
     */
    public function setAccessModes($accessModes)
    {
        $this->container['accessModes'] = $accessModes;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
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
     * @return \Rancher\Model\AzureFilePersistentVolumeSourceModel
     */
    public function getAzureFile()
    {
        return $this->container['azureFile'];
    }

    /**
     * Sets azureFile
     * @param \Rancher\Model\AzureFilePersistentVolumeSourceModel $azureFile
     * @return $this
     */
    public function setAzureFile($azureFile)
    {
        $this->container['azureFile'] = $azureFile;

        return $this;
    }


    /**
     * Gets capacity
     * @return string[]
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param string[] $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }


    /**
     * Gets cephfs
     * @return \Rancher\Model\CephFSPersistentVolumeSourceModel
     */
    public function getCephfs()
    {
        return $this->container['cephfs'];
    }

    /**
     * Sets cephfs
     * @param \Rancher\Model\CephFSPersistentVolumeSourceModel $cephfs
     * @return $this
     */
    public function setCephfs($cephfs)
    {
        $this->container['cephfs'] = $cephfs;

        return $this;
    }


    /**
     * Gets cinder
     * @return \Rancher\Model\CinderPersistentVolumeSourceModel
     */
    public function getCinder()
    {
        return $this->container['cinder'];
    }

    /**
     * Sets cinder
     * @param \Rancher\Model\CinderPersistentVolumeSourceModel $cinder
     * @return $this
     */
    public function setCinder($cinder)
    {
        $this->container['cinder'] = $cinder;

        return $this;
    }


    /**
     * Gets claimRef
     * @return \Rancher\Model\ObjectReferenceModel
     */
    public function getClaimRef()
    {
        return $this->container['claimRef'];
    }

    /**
     * Sets claimRef
     * @param \Rancher\Model\ObjectReferenceModel $claimRef
     * @return $this
     */
    public function setClaimRef($claimRef)
    {
        $this->container['claimRef'] = $claimRef;

        return $this;
    }


    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }


    /**
     * Gets creatorId
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     * @param string $creatorId
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }


    /**
     * Gets csi
     * @return \Rancher\Model\CsiPersistentVolumeSourceModel
     */
    public function getCsi()
    {
        return $this->container['csi'];
    }

    /**
     * Sets csi
     * @param \Rancher\Model\CsiPersistentVolumeSourceModel $csi
     * @return $this
     */
    public function setCsi($csi)
    {
        $this->container['csi'] = $csi;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @return \Rancher\Model\FlexPersistentVolumeSourceModel
     */
    public function getFlexVolume()
    {
        return $this->container['flexVolume'];
    }

    /**
     * Sets flexVolume
     * @param \Rancher\Model\FlexPersistentVolumeSourceModel $flexVolume
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
     * @return \Rancher\Model\IscsiPersistentVolumeSourceModel
     */
    public function getIscsi()
    {
        return $this->container['iscsi'];
    }

    /**
     * Sets iscsi
     * @param \Rancher\Model\IscsiPersistentVolumeSourceModel $iscsi
     * @return $this
     */
    public function setIscsi($iscsi)
    {
        $this->container['iscsi'] = $iscsi;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets local
     * @return \Rancher\Model\LocalVolumeSourceModel
     */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
     * Sets local
     * @param \Rancher\Model\LocalVolumeSourceModel $local
     * @return $this
     */
    public function setLocal($local)
    {
        $this->container['local'] = $local;

        return $this;
    }


    /**
     * Gets mountOptions
     * @return string[]
     */
    public function getMountOptions()
    {
        return $this->container['mountOptions'];
    }

    /**
     * Sets mountOptions
     * @param string[] $mountOptions
     * @return $this
     */
    public function setMountOptions($mountOptions)
    {
        $this->container['mountOptions'] = $mountOptions;

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
     * Gets nodeAffinity
     * @return \Rancher\Model\VolumeNodeAffinityModel
     */
    public function getNodeAffinity()
    {
        return $this->container['nodeAffinity'];
    }

    /**
     * Sets nodeAffinity
     * @param \Rancher\Model\VolumeNodeAffinityModel $nodeAffinity
     * @return $this
     */
    public function setNodeAffinity($nodeAffinity)
    {
        $this->container['nodeAffinity'] = $nodeAffinity;

        return $this;
    }


    /**
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReferenceModel[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReferenceModel[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets persistentVolumeReclaimPolicy
     * @return string
     */
    public function getPersistentVolumeReclaimPolicy()
    {
        return $this->container['persistentVolumeReclaimPolicy'];
    }

    /**
     * Sets persistentVolumeReclaimPolicy
     * @param string $persistentVolumeReclaimPolicy
     * @return $this
     */
    public function setPersistentVolumeReclaimPolicy($persistentVolumeReclaimPolicy)
    {
        $this->container['persistentVolumeReclaimPolicy'] = $persistentVolumeReclaimPolicy;

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
     * @return \Rancher\Model\RbdPersistentVolumeSourceModel
     */
    public function getRbd()
    {
        return $this->container['rbd'];
    }

    /**
     * Sets rbd
     * @param \Rancher\Model\RbdPersistentVolumeSourceModel $rbd
     * @return $this
     */
    public function setRbd($rbd)
    {
        $this->container['rbd'] = $rbd;

        return $this;
    }


    /**
     * Gets removed
     * @return \DateTime
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param \DateTime $removed
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }


    /**
     * Gets scaleIO
     * @return \Rancher\Model\ScaleIOPersistentVolumeSourceModel
     */
    public function getScaleIO()
    {
        return $this->container['scaleIO'];
    }

    /**
     * Sets scaleIO
     * @param \Rancher\Model\ScaleIOPersistentVolumeSourceModel $scaleIO
     * @return $this
     */
    public function setScaleIO($scaleIO)
    {
        $this->container['scaleIO'] = $scaleIO;

        return $this;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets status
     * @return \Rancher\Model\PersistentVolumeStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\PersistentVolumeStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets storageClassId
     * @return string
     */
    public function getStorageClassId()
    {
        return $this->container['storageClassId'];
    }

    /**
     * Sets storageClassId
     * @param string $storageClassId
     * @return $this
     */
    public function setStorageClassId($storageClassId)
    {
        $this->container['storageClassId'] = $storageClassId;

        return $this;
    }


    /**
     * Gets storageos
     * @return \Rancher\Model\StorageOSPersistentVolumeSourceModel
     */
    public function getStorageos()
    {
        return $this->container['storageos'];
    }

    /**
     * Sets storageos
     * @param \Rancher\Model\StorageOSPersistentVolumeSourceModel $storageos
     * @return $this
     */
    public function setStorageos($storageos)
    {
        $this->container['storageos'] = $storageos;

        return $this;
    }


    /**
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @return $this
     */
    public function setTransitioning($transitioning)
    {
        $this->container['transitioning'] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage)
    {
        $this->container['transitioningMessage'] = $transitioningMessage;

        return $this;
    }


    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }


    /**
     * Gets volumeMode
     * @return string
     */
    public function getVolumeMode()
    {
        return $this->container['volumeMode'];
    }

    /**
     * Sets volumeMode
     * @param string $volumeMode
     * @return $this
     */
    public function setVolumeMode($volumeMode)
    {
        $this->container['volumeMode'] = $volumeMode;

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

