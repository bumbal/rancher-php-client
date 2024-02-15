<?php

/**
 * RkeConfigNodeModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RkeConfigNodeModel implements ArrayAccess
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
        'address',
        'dockerSocket',
        'hostnameOverride',
        'internalAddress',
        'labels',
        'nodeId',
        'port',
        'role',
        'sshAgentAuth',
        'sshCert',
        'sshCertPath',
        'sshKey',
        'sshKeyPath',
        'taints',
        'user',
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
        'address',
        'dockerSocket',
        'hostnameOverride',
        'internalAddress',
        'labels',
        'nodeId',
        'port',
        'role',
        'sshAgentAuth',
        'sshCert',
        'sshCertPath',
        'sshKey',
        'sshKeyPath',
        'taints',
        'user',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'address' => 'string',
        'dockerSocket' => 'string',
        'hostnameOverride' => 'string',
        'internalAddress' => 'string',
        'labels' => 'map[string,string]',
        'nodeId' => 'string',
        'port' => 'string',
        'role' => 'string[]',
        'sshAgentAuth' => 'boolean',
        'sshCert' => 'string',
        'sshCertPath' => 'string',
        'sshKey' => '\Rancher\Model\PasswordModel',
        'sshKeyPath' => 'string',
        'taints' => '\Rancher\Model\RkeTaintModel[]',
        'user' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'address' => 'setAddress',
        'dockerSocket' => 'setDockerSocket',
        'hostnameOverride' => 'setHostnameOverride',
        'internalAddress' => 'setInternalAddress',
        'labels' => 'setLabels',
        'nodeId' => 'setNodeId',
        'port' => 'setPort',
        'role' => 'setRole',
        'sshAgentAuth' => 'setSshAgentAuth',
        'sshCert' => 'setSshCert',
        'sshCertPath' => 'setSshCertPath',
        'sshKey' => 'setSshKey',
        'sshKeyPath' => 'setSshKeyPath',
        'taints' => 'setTaints',
        'user' => 'setUser',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'address' => 'getAddress',
        'dockerSocket' => 'getDockerSocket',
        'hostnameOverride' => 'getHostnameOverride',
        'internalAddress' => 'getInternalAddress',
        'labels' => 'getLabels',
        'nodeId' => 'getNodeId',
        'port' => 'getPort',
        'role' => 'getRole',
        'sshAgentAuth' => 'getSshAgentAuth',
        'sshCert' => 'getSshCert',
        'sshCertPath' => 'getSshCertPath',
        'sshKey' => 'getSshKey',
        'sshKeyPath' => 'getSshKeyPath',
        'taints' => 'getTaints',
        'user' => 'getUser',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['dockerSocket'] = isset($data['dockerSocket']) ? $data['dockerSocket'] : null;
        $this->container['hostnameOverride'] = isset($data['hostnameOverride']) ? $data['hostnameOverride'] : null;
        $this->container['internalAddress'] = isset($data['internalAddress']) ? $data['internalAddress'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['sshAgentAuth'] = isset($data['sshAgentAuth']) ? $data['sshAgentAuth'] : null;
        $this->container['sshCert'] = isset($data['sshCert']) ? $data['sshCert'] : null;
        $this->container['sshCertPath'] = isset($data['sshCertPath']) ? $data['sshCertPath'] : null;
        $this->container['sshKey'] = isset($data['sshKey']) ? $data['sshKey'] : null;
        $this->container['sshKeyPath'] = isset($data['sshKeyPath']) ? $data['sshKeyPath'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }


    /**
     * Gets dockerSocket
     * @return string
     */
    public function getDockerSocket()
    {
        return $this->container['dockerSocket'];
    }

    /**
     * Sets dockerSocket
     * @param string $dockerSocket
     * @return $this
     */
    public function setDockerSocket($dockerSocket)
    {
        $this->container['dockerSocket'] = $dockerSocket;

        return $this;
    }


    /**
     * Gets hostnameOverride
     * @return string
     */
    public function getHostnameOverride()
    {
        return $this->container['hostnameOverride'];
    }

    /**
     * Sets hostnameOverride
     * @param string $hostnameOverride
     * @return $this
     */
    public function setHostnameOverride($hostnameOverride)
    {
        $this->container['hostnameOverride'] = $hostnameOverride;

        return $this;
    }


    /**
     * Gets internalAddress
     * @return string
     */
    public function getInternalAddress()
    {
        return $this->container['internalAddress'];
    }

    /**
     * Sets internalAddress
     * @param string $internalAddress
     * @return $this
     */
    public function setInternalAddress($internalAddress)
    {
        $this->container['internalAddress'] = $internalAddress;

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
     * Gets nodeId
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;

        return $this;
    }


    /**
     * Gets port
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param string $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }


    /**
     * Gets role
     * @return string[]
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string[] $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }


    /**
     * Gets sshAgentAuth
     * @return boolean
     */
    public function getSshAgentAuth()
    {
        return $this->container['sshAgentAuth'];
    }

    /**
     * Sets sshAgentAuth
     * @param boolean $sshAgentAuth
     * @return $this
     */
    public function setSshAgentAuth($sshAgentAuth)
    {
        $this->container['sshAgentAuth'] = $sshAgentAuth;

        return $this;
    }


    /**
     * Gets sshCert
     * @return string
     */
    public function getSshCert()
    {
        return $this->container['sshCert'];
    }

    /**
     * Sets sshCert
     * @param string $sshCert
     * @return $this
     */
    public function setSshCert($sshCert)
    {
        $this->container['sshCert'] = $sshCert;

        return $this;
    }


    /**
     * Gets sshCertPath
     * @return string
     */
    public function getSshCertPath()
    {
        return $this->container['sshCertPath'];
    }

    /**
     * Sets sshCertPath
     * @param string $sshCertPath
     * @return $this
     */
    public function setSshCertPath($sshCertPath)
    {
        $this->container['sshCertPath'] = $sshCertPath;

        return $this;
    }


    /**
     * Gets sshKey
     * @return \Rancher\Model\PasswordModel
     */
    public function getSshKey()
    {
        return $this->container['sshKey'];
    }

    /**
     * Sets sshKey
     * @param \Rancher\Model\PasswordModel $sshKey
     * @return $this
     */
    public function setSshKey($sshKey)
    {
        $this->container['sshKey'] = $sshKey;

        return $this;
    }


    /**
     * Gets sshKeyPath
     * @return string
     */
    public function getSshKeyPath()
    {
        return $this->container['sshKeyPath'];
    }

    /**
     * Sets sshKeyPath
     * @param string $sshKeyPath
     * @return $this
     */
    public function setSshKeyPath($sshKeyPath)
    {
        $this->container['sshKeyPath'] = $sshKeyPath;

        return $this;
    }


    /**
     * Gets taints
     * @return \Rancher\Model\RkeTaintModel[]
     */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
     * Sets taints
     * @param \Rancher\Model\RkeTaintModel[] $taints
     * @return $this
     */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;

        return $this;
    }


    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

