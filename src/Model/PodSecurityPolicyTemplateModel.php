<?php

/**
 * PodSecurityPolicyTemplateModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodSecurityPolicyTemplateModel implements ArrayAccess
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
        'allowPrivilegeEscalation',
        'allowedCSIDrivers',
        'allowedCapabilities',
        'allowedFlexVolumes',
        'allowedHostPaths',
        'allowedProcMountTypes',
        'allowedUnsafeSysctls',
        'annotations',
        'defaultAddCapabilities',
        'defaultAllowPrivilegeEscalation',
        'description',
        'forbiddenSysctls',
        'fsGroup',
        'hostIPC',
        'hostNetwork',
        'hostPID',
        'hostPorts',
        'labels',
        'name',
        'privileged',
        'readOnlyRootFilesystem',
        'requiredDropCapabilities',
        'runAsGroup',
        'runAsUser',
        'runtimeClass',
        'seLinux',
        'supplementalGroups',
        'volumes',
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
        'allowPrivilegeEscalation',
        'allowedCSIDrivers',
        'allowedCapabilities',
        'allowedFlexVolumes',
        'allowedHostPaths',
        'allowedProcMountTypes',
        'allowedUnsafeSysctls',
        'annotations',
        'defaultAddCapabilities',
        'defaultAllowPrivilegeEscalation',
        'description',
        'forbiddenSysctls',
        'fsGroup',
        'hostIPC',
        'hostNetwork',
        'hostPID',
        'hostPorts',
        'labels',
        'privileged',
        'readOnlyRootFilesystem',
        'requiredDropCapabilities',
        'runAsGroup',
        'runAsUser',
        'runtimeClass',
        'seLinux',
        'supplementalGroups',
        'volumes',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allowPrivilegeEscalation' => 'boolean',
        'allowedCSIDrivers' => '\Rancher\Model\AllowedCSIDriverModel[]',
        'allowedCapabilities' => 'string[]',
        'allowedFlexVolumes' => '\Rancher\Model\AllowedFlexVolumeModel[]',
        'allowedHostPaths' => '\Rancher\Model\AllowedHostPathModel[]',
        'allowedProcMountTypes' => 'string[]',
        'allowedUnsafeSysctls' => 'string[]',
        'annotations' => 'map[string,string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'defaultAddCapabilities' => 'string[]',
        'defaultAllowPrivilegeEscalation' => 'boolean',
        'description' => 'string',
        'forbiddenSysctls' => 'string[]',
        'fsGroup' => '\Rancher\Model\FsGroupStrategyOptionsModel',
        'hostIPC' => 'boolean',
        'hostNetwork' => 'boolean',
        'hostPID' => 'boolean',
        'hostPorts' => '\Rancher\Model\HostPortRangeModel[]',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'privileged' => 'boolean',
        'readOnlyRootFilesystem' => 'boolean',
        'removed' => '\DateTime',
        'requiredDropCapabilities' => 'string[]',
        'runAsGroup' => '\Rancher\Model\RunAsGroupStrategyOptionsModel',
        'runAsUser' => '\Rancher\Model\RunAsUserStrategyOptionsModel',
        'runtimeClass' => '\Rancher\Model\RuntimeClassStrategyOptionsModel',
        'seLinux' => '\Rancher\Model\SeLinuxStrategyOptionsModel',
        'supplementalGroups' => '\Rancher\Model\SupplementalGroupsStrategyOptionsModel',
        'uuid' => 'string',
        'volumes' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allowPrivilegeEscalation' => 'setAllowPrivilegeEscalation',
        'allowedCSIDrivers' => 'setAllowedCSIDrivers',
        'allowedCapabilities' => 'setAllowedCapabilities',
        'allowedFlexVolumes' => 'setAllowedFlexVolumes',
        'allowedHostPaths' => 'setAllowedHostPaths',
        'allowedProcMountTypes' => 'setAllowedProcMountTypes',
        'allowedUnsafeSysctls' => 'setAllowedUnsafeSysctls',
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'defaultAddCapabilities' => 'setDefaultAddCapabilities',
        'defaultAllowPrivilegeEscalation' => 'setDefaultAllowPrivilegeEscalation',
        'description' => 'setDescription',
        'forbiddenSysctls' => 'setForbiddenSysctls',
        'fsGroup' => 'setFsGroup',
        'hostIPC' => 'setHostIPC',
        'hostNetwork' => 'setHostNetwork',
        'hostPID' => 'setHostPID',
        'hostPorts' => 'setHostPorts',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'privileged' => 'setPrivileged',
        'readOnlyRootFilesystem' => 'setReadOnlyRootFilesystem',
        'removed' => 'setRemoved',
        'requiredDropCapabilities' => 'setRequiredDropCapabilities',
        'runAsGroup' => 'setRunAsGroup',
        'runAsUser' => 'setRunAsUser',
        'runtimeClass' => 'setRuntimeClass',
        'seLinux' => 'setSeLinux',
        'supplementalGroups' => 'setSupplementalGroups',
        'uuid' => 'setUuid',
        'volumes' => 'setVolumes',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allowPrivilegeEscalation' => 'getAllowPrivilegeEscalation',
        'allowedCSIDrivers' => 'getAllowedCSIDrivers',
        'allowedCapabilities' => 'getAllowedCapabilities',
        'allowedFlexVolumes' => 'getAllowedFlexVolumes',
        'allowedHostPaths' => 'getAllowedHostPaths',
        'allowedProcMountTypes' => 'getAllowedProcMountTypes',
        'allowedUnsafeSysctls' => 'getAllowedUnsafeSysctls',
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'defaultAddCapabilities' => 'getDefaultAddCapabilities',
        'defaultAllowPrivilegeEscalation' => 'getDefaultAllowPrivilegeEscalation',
        'description' => 'getDescription',
        'forbiddenSysctls' => 'getForbiddenSysctls',
        'fsGroup' => 'getFsGroup',
        'hostIPC' => 'getHostIPC',
        'hostNetwork' => 'getHostNetwork',
        'hostPID' => 'getHostPID',
        'hostPorts' => 'getHostPorts',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'privileged' => 'getPrivileged',
        'readOnlyRootFilesystem' => 'getReadOnlyRootFilesystem',
        'removed' => 'getRemoved',
        'requiredDropCapabilities' => 'getRequiredDropCapabilities',
        'runAsGroup' => 'getRunAsGroup',
        'runAsUser' => 'getRunAsUser',
        'runtimeClass' => 'getRuntimeClass',
        'seLinux' => 'getSeLinux',
        'supplementalGroups' => 'getSupplementalGroups',
        'uuid' => 'getUuid',
        'volumes' => 'getVolumes',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allowPrivilegeEscalation'] = isset($data['allowPrivilegeEscalation']) ? $data['allowPrivilegeEscalation'] : null;
        $this->container['allowedCSIDrivers'] = isset($data['allowedCSIDrivers']) ? $data['allowedCSIDrivers'] : null;
        $this->container['allowedCapabilities'] = isset($data['allowedCapabilities']) ? $data['allowedCapabilities'] : null;
        $this->container['allowedFlexVolumes'] = isset($data['allowedFlexVolumes']) ? $data['allowedFlexVolumes'] : null;
        $this->container['allowedHostPaths'] = isset($data['allowedHostPaths']) ? $data['allowedHostPaths'] : null;
        $this->container['allowedProcMountTypes'] = isset($data['allowedProcMountTypes']) ? $data['allowedProcMountTypes'] : null;
        $this->container['allowedUnsafeSysctls'] = isset($data['allowedUnsafeSysctls']) ? $data['allowedUnsafeSysctls'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['defaultAddCapabilities'] = isset($data['defaultAddCapabilities']) ? $data['defaultAddCapabilities'] : null;
        $this->container['defaultAllowPrivilegeEscalation'] = isset($data['defaultAllowPrivilegeEscalation']) ? $data['defaultAllowPrivilegeEscalation'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['forbiddenSysctls'] = isset($data['forbiddenSysctls']) ? $data['forbiddenSysctls'] : null;
        $this->container['fsGroup'] = isset($data['fsGroup']) ? $data['fsGroup'] : null;
        $this->container['hostIPC'] = isset($data['hostIPC']) ? $data['hostIPC'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['hostPID'] = isset($data['hostPID']) ? $data['hostPID'] : null;
        $this->container['hostPorts'] = isset($data['hostPorts']) ? $data['hostPorts'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['readOnlyRootFilesystem'] = isset($data['readOnlyRootFilesystem']) ? $data['readOnlyRootFilesystem'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['requiredDropCapabilities'] = isset($data['requiredDropCapabilities']) ? $data['requiredDropCapabilities'] : null;
        $this->container['runAsGroup'] = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->container['runAsUser'] = isset($data['runAsUser']) ? $data['runAsUser'] : null;
        $this->container['runtimeClass'] = isset($data['runtimeClass']) ? $data['runtimeClass'] : null;
        $this->container['seLinux'] = isset($data['seLinux']) ? $data['seLinux'] : null;
        $this->container['supplementalGroups'] = isset($data['supplementalGroups']) ? $data['supplementalGroups'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
    }

    /**
     * Gets allowPrivilegeEscalation
     * @return boolean
     */
    public function getAllowPrivilegeEscalation()
    {
        return $this->container['allowPrivilegeEscalation'];
    }

    /**
     * Sets allowPrivilegeEscalation
     * @param boolean $allowPrivilegeEscalation
     * @return $this
     */
    public function setAllowPrivilegeEscalation($allowPrivilegeEscalation)
    {
        $this->container['allowPrivilegeEscalation'] = $allowPrivilegeEscalation;

        return $this;
    }


    /**
     * Gets allowedCSIDrivers
     * @return \Rancher\Model\AllowedCSIDriverModel[]
     */
    public function getAllowedCSIDrivers()
    {
        return $this->container['allowedCSIDrivers'];
    }

    /**
     * Sets allowedCSIDrivers
     * @param \Rancher\Model\AllowedCSIDriverModel[] $allowedCSIDrivers
     * @return $this
     */
    public function setAllowedCSIDrivers($allowedCSIDrivers)
    {
        $this->container['allowedCSIDrivers'] = $allowedCSIDrivers;

        return $this;
    }


    /**
     * Gets allowedCapabilities
     * @return string[]
     */
    public function getAllowedCapabilities()
    {
        return $this->container['allowedCapabilities'];
    }

    /**
     * Sets allowedCapabilities
     * @param string[] $allowedCapabilities
     * @return $this
     */
    public function setAllowedCapabilities($allowedCapabilities)
    {
        $this->container['allowedCapabilities'] = $allowedCapabilities;

        return $this;
    }


    /**
     * Gets allowedFlexVolumes
     * @return \Rancher\Model\AllowedFlexVolumeModel[]
     */
    public function getAllowedFlexVolumes()
    {
        return $this->container['allowedFlexVolumes'];
    }

    /**
     * Sets allowedFlexVolumes
     * @param \Rancher\Model\AllowedFlexVolumeModel[] $allowedFlexVolumes
     * @return $this
     */
    public function setAllowedFlexVolumes($allowedFlexVolumes)
    {
        $this->container['allowedFlexVolumes'] = $allowedFlexVolumes;

        return $this;
    }


    /**
     * Gets allowedHostPaths
     * @return \Rancher\Model\AllowedHostPathModel[]
     */
    public function getAllowedHostPaths()
    {
        return $this->container['allowedHostPaths'];
    }

    /**
     * Sets allowedHostPaths
     * @param \Rancher\Model\AllowedHostPathModel[] $allowedHostPaths
     * @return $this
     */
    public function setAllowedHostPaths($allowedHostPaths)
    {
        $this->container['allowedHostPaths'] = $allowedHostPaths;

        return $this;
    }


    /**
     * Gets allowedProcMountTypes
     * @return string[]
     */
    public function getAllowedProcMountTypes()
    {
        return $this->container['allowedProcMountTypes'];
    }

    /**
     * Sets allowedProcMountTypes
     * @param string[] $allowedProcMountTypes
     * @return $this
     */
    public function setAllowedProcMountTypes($allowedProcMountTypes)
    {
        $this->container['allowedProcMountTypes'] = $allowedProcMountTypes;

        return $this;
    }


    /**
     * Gets allowedUnsafeSysctls
     * @return string[]
     */
    public function getAllowedUnsafeSysctls()
    {
        return $this->container['allowedUnsafeSysctls'];
    }

    /**
     * Sets allowedUnsafeSysctls
     * @param string[] $allowedUnsafeSysctls
     * @return $this
     */
    public function setAllowedUnsafeSysctls($allowedUnsafeSysctls)
    {
        $this->container['allowedUnsafeSysctls'] = $allowedUnsafeSysctls;

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
     * Gets defaultAddCapabilities
     * @return string[]
     */
    public function getDefaultAddCapabilities()
    {
        return $this->container['defaultAddCapabilities'];
    }

    /**
     * Sets defaultAddCapabilities
     * @param string[] $defaultAddCapabilities
     * @return $this
     */
    public function setDefaultAddCapabilities($defaultAddCapabilities)
    {
        $this->container['defaultAddCapabilities'] = $defaultAddCapabilities;

        return $this;
    }


    /**
     * Gets defaultAllowPrivilegeEscalation
     * @return boolean
     */
    public function getDefaultAllowPrivilegeEscalation()
    {
        return $this->container['defaultAllowPrivilegeEscalation'];
    }

    /**
     * Sets defaultAllowPrivilegeEscalation
     * @param boolean $defaultAllowPrivilegeEscalation
     * @return $this
     */
    public function setDefaultAllowPrivilegeEscalation($defaultAllowPrivilegeEscalation)
    {
        $this->container['defaultAllowPrivilegeEscalation'] = $defaultAllowPrivilegeEscalation;

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
     * Gets forbiddenSysctls
     * @return string[]
     */
    public function getForbiddenSysctls()
    {
        return $this->container['forbiddenSysctls'];
    }

    /**
     * Sets forbiddenSysctls
     * @param string[] $forbiddenSysctls
     * @return $this
     */
    public function setForbiddenSysctls($forbiddenSysctls)
    {
        $this->container['forbiddenSysctls'] = $forbiddenSysctls;

        return $this;
    }


    /**
     * Gets fsGroup
     * @return \Rancher\Model\FsGroupStrategyOptionsModel
     */
    public function getFsGroup()
    {
        return $this->container['fsGroup'];
    }

    /**
     * Sets fsGroup
     * @param \Rancher\Model\FsGroupStrategyOptionsModel $fsGroup
     * @return $this
     */
    public function setFsGroup($fsGroup)
    {
        $this->container['fsGroup'] = $fsGroup;

        return $this;
    }


    /**
     * Gets hostIPC
     * @return boolean
     */
    public function getHostIPC()
    {
        return $this->container['hostIPC'];
    }

    /**
     * Sets hostIPC
     * @param boolean $hostIPC
     * @return $this
     */
    public function setHostIPC($hostIPC)
    {
        $this->container['hostIPC'] = $hostIPC;

        return $this;
    }


    /**
     * Gets hostNetwork
     * @return boolean
     */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
     * Sets hostNetwork
     * @param boolean $hostNetwork
     * @return $this
     */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;

        return $this;
    }


    /**
     * Gets hostPID
     * @return boolean
     */
    public function getHostPID()
    {
        return $this->container['hostPID'];
    }

    /**
     * Sets hostPID
     * @param boolean $hostPID
     * @return $this
     */
    public function setHostPID($hostPID)
    {
        $this->container['hostPID'] = $hostPID;

        return $this;
    }


    /**
     * Gets hostPorts
     * @return \Rancher\Model\HostPortRangeModel[]
     */
    public function getHostPorts()
    {
        return $this->container['hostPorts'];
    }

    /**
     * Sets hostPorts
     * @param \Rancher\Model\HostPortRangeModel[] $hostPorts
     * @return $this
     */
    public function setHostPorts($hostPorts)
    {
        $this->container['hostPorts'] = $hostPorts;

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
     * Gets privileged
     * @return boolean
     */
    public function getPrivileged()
    {
        return $this->container['privileged'];
    }

    /**
     * Sets privileged
     * @param boolean $privileged
     * @return $this
     */
    public function setPrivileged($privileged)
    {
        $this->container['privileged'] = $privileged;

        return $this;
    }


    /**
     * Gets readOnlyRootFilesystem
     * @return boolean
     */
    public function getReadOnlyRootFilesystem()
    {
        return $this->container['readOnlyRootFilesystem'];
    }

    /**
     * Sets readOnlyRootFilesystem
     * @param boolean $readOnlyRootFilesystem
     * @return $this
     */
    public function setReadOnlyRootFilesystem($readOnlyRootFilesystem)
    {
        $this->container['readOnlyRootFilesystem'] = $readOnlyRootFilesystem;

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
     * Gets requiredDropCapabilities
     * @return string[]
     */
    public function getRequiredDropCapabilities()
    {
        return $this->container['requiredDropCapabilities'];
    }

    /**
     * Sets requiredDropCapabilities
     * @param string[] $requiredDropCapabilities
     * @return $this
     */
    public function setRequiredDropCapabilities($requiredDropCapabilities)
    {
        $this->container['requiredDropCapabilities'] = $requiredDropCapabilities;

        return $this;
    }


    /**
     * Gets runAsGroup
     * @return \Rancher\Model\RunAsGroupStrategyOptionsModel
     */
    public function getRunAsGroup()
    {
        return $this->container['runAsGroup'];
    }

    /**
     * Sets runAsGroup
     * @param \Rancher\Model\RunAsGroupStrategyOptionsModel $runAsGroup
     * @return $this
     */
    public function setRunAsGroup($runAsGroup)
    {
        $this->container['runAsGroup'] = $runAsGroup;

        return $this;
    }


    /**
     * Gets runAsUser
     * @return \Rancher\Model\RunAsUserStrategyOptionsModel
     */
    public function getRunAsUser()
    {
        return $this->container['runAsUser'];
    }

    /**
     * Sets runAsUser
     * @param \Rancher\Model\RunAsUserStrategyOptionsModel $runAsUser
     * @return $this
     */
    public function setRunAsUser($runAsUser)
    {
        $this->container['runAsUser'] = $runAsUser;

        return $this;
    }


    /**
     * Gets runtimeClass
     * @return \Rancher\Model\RuntimeClassStrategyOptionsModel
     */
    public function getRuntimeClass()
    {
        return $this->container['runtimeClass'];
    }

    /**
     * Sets runtimeClass
     * @param \Rancher\Model\RuntimeClassStrategyOptionsModel $runtimeClass
     * @return $this
     */
    public function setRuntimeClass($runtimeClass)
    {
        $this->container['runtimeClass'] = $runtimeClass;

        return $this;
    }


    /**
     * Gets seLinux
     * @return \Rancher\Model\SeLinuxStrategyOptionsModel
     */
    public function getSeLinux()
    {
        return $this->container['seLinux'];
    }

    /**
     * Sets seLinux
     * @param \Rancher\Model\SeLinuxStrategyOptionsModel $seLinux
     * @return $this
     */
    public function setSeLinux($seLinux)
    {
        $this->container['seLinux'] = $seLinux;

        return $this;
    }


    /**
     * Gets supplementalGroups
     * @return \Rancher\Model\SupplementalGroupsStrategyOptionsModel
     */
    public function getSupplementalGroups()
    {
        return $this->container['supplementalGroups'];
    }

    /**
     * Sets supplementalGroups
     * @param \Rancher\Model\SupplementalGroupsStrategyOptionsModel $supplementalGroups
     * @return $this
     */
    public function setSupplementalGroups($supplementalGroups)
    {
        $this->container['supplementalGroups'] = $supplementalGroups;

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
     * Gets volumes
     * @return string[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     * @param string[] $volumes
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

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

