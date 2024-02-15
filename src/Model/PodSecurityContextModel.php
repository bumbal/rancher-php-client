<?php

/**
 * PodSecurityContextModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodSecurityContextModel implements ArrayAccess
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
        'fsGroupChangePolicy',
        'fsgid',
        'gids',
        'runAsGroup',
        'runAsNonRoot',
        'seccompProfile',
        'sysctls',
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
        'fsGroupChangePolicy',
        'fsgid',
        'gids',
        'runAsGroup',
        'runAsNonRoot',
        'seccompProfile',
        'sysctls',
        'uid',
        'windowsOptions',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'fsGroupChangePolicy' => 'string',
        'fsgid' => 'int',
        'gids' => 'int[]',
        'runAsGroup' => 'int',
        'runAsNonRoot' => 'boolean',
        'seccompProfile' => '\Rancher\Model\SeccompProfileModel',
        'sysctls' => '\Rancher\Model\SysctlModel[]',
        'uid' => 'int',
        'windowsOptions' => '\Rancher\Model\WindowsSecurityContextOptionsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsGroupChangePolicy' => 'setFsGroupChangePolicy',
        'fsgid' => 'setFsgid',
        'gids' => 'setGids',
        'runAsGroup' => 'setRunAsGroup',
        'runAsNonRoot' => 'setRunAsNonRoot',
        'seccompProfile' => 'setSeccompProfile',
        'sysctls' => 'setSysctls',
        'uid' => 'setUid',
        'windowsOptions' => 'setWindowsOptions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsGroupChangePolicy' => 'getFsGroupChangePolicy',
        'fsgid' => 'getFsgid',
        'gids' => 'getGids',
        'runAsGroup' => 'getRunAsGroup',
        'runAsNonRoot' => 'getRunAsNonRoot',
        'seccompProfile' => 'getSeccompProfile',
        'sysctls' => 'getSysctls',
        'uid' => 'getUid',
        'windowsOptions' => 'getWindowsOptions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsGroupChangePolicy'] = isset($data['fsGroupChangePolicy']) ? $data['fsGroupChangePolicy'] : null;
        $this->container['fsgid'] = isset($data['fsgid']) ? $data['fsgid'] : null;
        $this->container['gids'] = isset($data['gids']) ? $data['gids'] : null;
        $this->container['runAsGroup'] = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->container['runAsNonRoot'] = isset($data['runAsNonRoot']) ? $data['runAsNonRoot'] : null;
        $this->container['seccompProfile'] = isset($data['seccompProfile']) ? $data['seccompProfile'] : null;
        $this->container['sysctls'] = isset($data['sysctls']) ? $data['sysctls'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['windowsOptions'] = isset($data['windowsOptions']) ? $data['windowsOptions'] : null;
    }

    /**
     * Gets fsGroupChangePolicy
     * @return string
     */
    public function getFsGroupChangePolicy()
    {
        return $this->container['fsGroupChangePolicy'];
    }

    /**
     * Sets fsGroupChangePolicy
     * @param string $fsGroupChangePolicy
     * @return $this
     */
    public function setFsGroupChangePolicy($fsGroupChangePolicy)
    {
        $this->container['fsGroupChangePolicy'] = $fsGroupChangePolicy;

        return $this;
    }


    /**
     * Gets fsgid
     * @return int
     */
    public function getFsgid()
    {
        return $this->container['fsgid'];
    }

    /**
     * Sets fsgid
     * @param int $fsgid
     * @return $this
     */
    public function setFsgid($fsgid)
    {
        $this->container['fsgid'] = $fsgid;

        return $this;
    }


    /**
     * Gets gids
     * @return int[]
     */
    public function getGids()
    {
        return $this->container['gids'];
    }

    /**
     * Sets gids
     * @param int[] $gids
     * @return $this
     */
    public function setGids($gids)
    {
        $this->container['gids'] = $gids;

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
     * Gets sysctls
     * @return \Rancher\Model\SysctlModel[]
     */
    public function getSysctls()
    {
        return $this->container['sysctls'];
    }

    /**
     * Sets sysctls
     * @param \Rancher\Model\SysctlModel[] $sysctls
     * @return $this
     */
    public function setSysctls($sysctls)
    {
        $this->container['sysctls'] = $sysctls;

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

