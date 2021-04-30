<?php

/**
 * SecurityContextModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SecurityContextModel implements ArrayAccess
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
        'capAdd',
        'capDrop',
        'privileged',
        'procMount',
        'readOnly',
        'runAsGroup',
        'runAsNonRoot',
        'seccompProfile',
        'uid',
        'windowsOptions',
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
        'capAdd',
        'capDrop',
        'privileged',
        'procMount',
        'readOnly',
        'runAsGroup',
        'runAsNonRoot',
        'seccompProfile',
        'uid',
        'windowsOptions',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allowPrivilegeEscalation' => 'boolean',
        'capAdd' => 'string[]',
        'capDrop' => 'string[]',
        'privileged' => 'boolean',
        'procMount' => 'string',
        'readOnly' => 'boolean',
        'runAsGroup' => 'int',
        'runAsNonRoot' => 'boolean',
        'seccompProfile' => '\Rancher\Model\SeccompProfileModel',
        'uid' => 'int',
        'windowsOptions' => '\Rancher\Model\WindowsSecurityContextOptionsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allowPrivilegeEscalation' => 'setAllowPrivilegeEscalation',
        'capAdd' => 'setCapAdd',
        'capDrop' => 'setCapDrop',
        'privileged' => 'setPrivileged',
        'procMount' => 'setProcMount',
        'readOnly' => 'setReadOnly',
        'runAsGroup' => 'setRunAsGroup',
        'runAsNonRoot' => 'setRunAsNonRoot',
        'seccompProfile' => 'setSeccompProfile',
        'uid' => 'setUid',
        'windowsOptions' => 'setWindowsOptions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allowPrivilegeEscalation' => 'getAllowPrivilegeEscalation',
        'capAdd' => 'getCapAdd',
        'capDrop' => 'getCapDrop',
        'privileged' => 'getPrivileged',
        'procMount' => 'getProcMount',
        'readOnly' => 'getReadOnly',
        'runAsGroup' => 'getRunAsGroup',
        'runAsNonRoot' => 'getRunAsNonRoot',
        'seccompProfile' => 'getSeccompProfile',
        'uid' => 'getUid',
        'windowsOptions' => 'getWindowsOptions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allowPrivilegeEscalation'] = isset($data['allowPrivilegeEscalation']) ? $data['allowPrivilegeEscalation'] : null;
        $this->container['capAdd'] = isset($data['capAdd']) ? $data['capAdd'] : null;
        $this->container['capDrop'] = isset($data['capDrop']) ? $data['capDrop'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['procMount'] = isset($data['procMount']) ? $data['procMount'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['runAsGroup'] = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->container['runAsNonRoot'] = isset($data['runAsNonRoot']) ? $data['runAsNonRoot'] : null;
        $this->container['seccompProfile'] = isset($data['seccompProfile']) ? $data['seccompProfile'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['windowsOptions'] = isset($data['windowsOptions']) ? $data['windowsOptions'] : null;
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
     * Gets capAdd
     * @return string[]
     */
    public function getCapAdd()
    {
        return $this->container['capAdd'];
    }

    /**
     * Sets capAdd
     * @param string[] $capAdd
     * @return $this
     */
    public function setCapAdd($capAdd)
    {
        $this->container['capAdd'] = $capAdd;

        return $this;
    }


    /**
     * Gets capDrop
     * @return string[]
     */
    public function getCapDrop()
    {
        return $this->container['capDrop'];
    }

    /**
     * Sets capDrop
     * @param string[] $capDrop
     * @return $this
     */
    public function setCapDrop($capDrop)
    {
        $this->container['capDrop'] = $capDrop;

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
     * Gets procMount
     * @return string
     */
    public function getProcMount()
    {
        return $this->container['procMount'];
    }

    /**
     * Sets procMount
     * @param string $procMount
     * @return $this
     */
    public function setProcMount($procMount)
    {
        $this->container['procMount'] = $procMount;

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
     * Gets runAsGroup
     * @return int
     */
    public function getRunAsGroup()
    {
        return $this->container['runAsGroup'];
    }

    /**
     * Sets runAsGroup
     * @param int $runAsGroup
     * @return $this
     */
    public function setRunAsGroup($runAsGroup)
    {
        $this->container['runAsGroup'] = $runAsGroup;

        return $this;
    }


    /**
     * Gets runAsNonRoot
     * @return boolean
     */
    public function getRunAsNonRoot()
    {
        return $this->container['runAsNonRoot'];
    }

    /**
     * Sets runAsNonRoot
     * @param boolean $runAsNonRoot
     * @return $this
     */
    public function setRunAsNonRoot($runAsNonRoot)
    {
        $this->container['runAsNonRoot'] = $runAsNonRoot;

        return $this;
    }


    /**
     * Gets seccompProfile
     * @return \Rancher\Model\SeccompProfileModel
     */
    public function getSeccompProfile()
    {
        return $this->container['seccompProfile'];
    }

    /**
     * Sets seccompProfile
     * @param \Rancher\Model\SeccompProfileModel $seccompProfile
     * @return $this
     */
    public function setSeccompProfile($seccompProfile)
    {
        $this->container['seccompProfile'] = $seccompProfile;

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
     * Gets windowsOptions
     * @return \Rancher\Model\WindowsSecurityContextOptionsModel
     */
    public function getWindowsOptions()
    {
        return $this->container['windowsOptions'];
    }

    /**
     * Sets windowsOptions
     * @param \Rancher\Model\WindowsSecurityContextOptionsModel $windowsOptions
     * @return $this
     */
    public function setWindowsOptions($windowsOptions)
    {
        $this->container['windowsOptions'] = $windowsOptions;

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

