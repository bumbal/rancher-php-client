<?php

/**
 * IscsiVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class IscsiVolumeSourceModel implements ArrayAccess
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
        'chapAuthDiscovery',
        'chapAuthSession',
        'fsType',
        'initiatorName',
        'iqn',
        'iscsiInterface',
        'lun',
        'portals',
        'readOnly',
        'secretRef',
        'targetPortal',
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
        'chapAuthDiscovery',
        'chapAuthSession',
        'fsType',
        'initiatorName',
        'iqn',
        'iscsiInterface',
        'lun',
        'portals',
        'readOnly',
        'secretRef',
        'targetPortal',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'chapAuthDiscovery' => 'boolean',
        'chapAuthSession' => 'boolean',
        'fsType' => 'string',
        'initiatorName' => 'string',
        'iqn' => 'string',
        'iscsiInterface' => 'string',
        'lun' => 'int',
        'portals' => 'string[]',
        'readOnly' => 'boolean',
        'secretRef' => '\Rancher\Model\LocalObjectReferenceModel',
        'targetPortal' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'chapAuthDiscovery' => 'setChapAuthDiscovery',
        'chapAuthSession' => 'setChapAuthSession',
        'fsType' => 'setFsType',
        'initiatorName' => 'setInitiatorName',
        'iqn' => 'setIqn',
        'iscsiInterface' => 'setIscsiInterface',
        'lun' => 'setLun',
        'portals' => 'setPortals',
        'readOnly' => 'setReadOnly',
        'secretRef' => 'setSecretRef',
        'targetPortal' => 'setTargetPortal',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'chapAuthDiscovery' => 'getChapAuthDiscovery',
        'chapAuthSession' => 'getChapAuthSession',
        'fsType' => 'getFsType',
        'initiatorName' => 'getInitiatorName',
        'iqn' => 'getIqn',
        'iscsiInterface' => 'getIscsiInterface',
        'lun' => 'getLun',
        'portals' => 'getPortals',
        'readOnly' => 'getReadOnly',
        'secretRef' => 'getSecretRef',
        'targetPortal' => 'getTargetPortal',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['chapAuthDiscovery'] = isset($data['chapAuthDiscovery']) ? $data['chapAuthDiscovery'] : null;
        $this->container['chapAuthSession'] = isset($data['chapAuthSession']) ? $data['chapAuthSession'] : null;
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['initiatorName'] = isset($data['initiatorName']) ? $data['initiatorName'] : null;
        $this->container['iqn'] = isset($data['iqn']) ? $data['iqn'] : null;
        $this->container['iscsiInterface'] = isset($data['iscsiInterface']) ? $data['iscsiInterface'] : null;
        $this->container['lun'] = isset($data['lun']) ? $data['lun'] : null;
        $this->container['portals'] = isset($data['portals']) ? $data['portals'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['targetPortal'] = isset($data['targetPortal']) ? $data['targetPortal'] : null;
    }

    /**
     * Gets chapAuthDiscovery
     * @return boolean
     */
    public function getChapAuthDiscovery()
    {
        return $this->container['chapAuthDiscovery'];
    }

    /**
     * Sets chapAuthDiscovery
     * @param boolean $chapAuthDiscovery
     * @return $this
     */
    public function setChapAuthDiscovery($chapAuthDiscovery)
    {
        $this->container['chapAuthDiscovery'] = $chapAuthDiscovery;

        return $this;
    }


    /**
     * Gets chapAuthSession
     * @return boolean
     */
    public function getChapAuthSession()
    {
        return $this->container['chapAuthSession'];
    }

    /**
     * Sets chapAuthSession
     * @param boolean $chapAuthSession
     * @return $this
     */
    public function setChapAuthSession($chapAuthSession)
    {
        $this->container['chapAuthSession'] = $chapAuthSession;

        return $this;
    }


    /**
     * Gets fsType
     * @return string
     */
    public function getFsType()
    {
        return $this->container['fsType'];
    }

    /**
     * Sets fsType
     * @param string $fsType
     * @return $this
     */
    public function setFsType($fsType)
    {
        $this->container['fsType'] = $fsType;

        return $this;
    }


    /**
     * Gets initiatorName
     * @return string
     */
    public function getInitiatorName()
    {
        return $this->container['initiatorName'];
    }

    /**
     * Sets initiatorName
     * @param string $initiatorName
     * @return $this
     */
    public function setInitiatorName($initiatorName)
    {
        $this->container['initiatorName'] = $initiatorName;

        return $this;
    }


    /**
     * Gets iqn
     * @return string
     */
    public function getIqn()
    {
        return $this->container['iqn'];
    }

    /**
     * Sets iqn
     * @param string $iqn
     * @return $this
     */
    public function setIqn($iqn)
    {
        $this->container['iqn'] = $iqn;

        return $this;
    }


    /**
     * Gets iscsiInterface
     * @return string
     */
    public function getIscsiInterface()
    {
        return $this->container['iscsiInterface'];
    }

    /**
     * Sets iscsiInterface
     * @param string $iscsiInterface
     * @return $this
     */
    public function setIscsiInterface($iscsiInterface)
    {
        $this->container['iscsiInterface'] = $iscsiInterface;

        return $this;
    }


    /**
     * Gets lun
     * @return int
     */
    public function getLun()
    {
        return $this->container['lun'];
    }

    /**
     * Sets lun
     * @param int $lun
     * @return $this
     */
    public function setLun($lun)
    {
        $this->container['lun'] = $lun;

        return $this;
    }


    /**
     * Gets portals
     * @return string[]
     */
    public function getPortals()
    {
        return $this->container['portals'];
    }

    /**
     * Sets portals
     * @param string[] $portals
     * @return $this
     */
    public function setPortals($portals)
    {
        $this->container['portals'] = $portals;

        return $this;
    }


    /**
     * Gets readOnly
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     * @param boolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

        return $this;
    }


    /**
     * Gets secretRef
     * @return \Rancher\Model\LocalObjectReferenceModel
     */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
     * Sets secretRef
     * @param \Rancher\Model\LocalObjectReferenceModel $secretRef
     * @return $this
     */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;

        return $this;
    }


    /**
     * Gets targetPortal
     * @return string
     */
    public function getTargetPortal()
    {
        return $this->container['targetPortal'];
    }

    /**
     * Sets targetPortal
     * @param string $targetPortal
     * @return $this
     */
    public function setTargetPortal($targetPortal)
    {
        $this->container['targetPortal'] = $targetPortal;

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

