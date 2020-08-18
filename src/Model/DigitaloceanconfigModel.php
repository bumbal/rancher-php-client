<?php

/**
 * DigitaloceanconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class DigitaloceanconfigModel implements ArrayAccess
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
        'accessToken',
        'backups',
        'image',
        'ipv6',
        'monitoring',
        'privateNetworking',
        'region',
        'size',
        'sshKeyContents',
        'sshKeyFingerprint',
        'sshPort',
        'sshUser',
        'tags',
        'userdata',
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
        'accessToken',
        'backups',
        'image',
        'ipv6',
        'monitoring',
        'privateNetworking',
        'region',
        'size',
        'sshKeyContents',
        'sshKeyFingerprint',
        'sshPort',
        'sshUser',
        'tags',
        'userdata',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessToken' => '\Rancher\Model\PasswordModel',
        'backups' => 'boolean',
        'image' => 'string',
        'ipv6' => 'boolean',
        'monitoring' => 'boolean',
        'privateNetworking' => 'boolean',
        'region' => 'string',
        'size' => 'string',
        'sshKeyContents' => '\Rancher\Model\PasswordModel',
        'sshKeyFingerprint' => 'string',
        'sshPort' => 'string',
        'sshUser' => 'string',
        'tags' => 'string',
        'userdata' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'backups' => 'setBackups',
        'image' => 'setImage',
        'ipv6' => 'setIpv6',
        'monitoring' => 'setMonitoring',
        'privateNetworking' => 'setPrivateNetworking',
        'region' => 'setRegion',
        'size' => 'setSize',
        'sshKeyContents' => 'setSshKeyContents',
        'sshKeyFingerprint' => 'setSshKeyFingerprint',
        'sshPort' => 'setSshPort',
        'sshUser' => 'setSshUser',
        'tags' => 'setTags',
        'userdata' => 'setUserdata',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'backups' => 'getBackups',
        'image' => 'getImage',
        'ipv6' => 'getIpv6',
        'monitoring' => 'getMonitoring',
        'privateNetworking' => 'getPrivateNetworking',
        'region' => 'getRegion',
        'size' => 'getSize',
        'sshKeyContents' => 'getSshKeyContents',
        'sshKeyFingerprint' => 'getSshKeyFingerprint',
        'sshPort' => 'getSshPort',
        'sshUser' => 'getSshUser',
        'tags' => 'getTags',
        'userdata' => 'getUserdata',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['ipv6'] = isset($data['ipv6']) ? $data['ipv6'] : null;
        $this->container['monitoring'] = isset($data['monitoring']) ? $data['monitoring'] : null;
        $this->container['privateNetworking'] = isset($data['privateNetworking']) ? $data['privateNetworking'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sshKeyContents'] = isset($data['sshKeyContents']) ? $data['sshKeyContents'] : null;
        $this->container['sshKeyFingerprint'] = isset($data['sshKeyFingerprint']) ? $data['sshKeyFingerprint'] : null;
        $this->container['sshPort'] = isset($data['sshPort']) ? $data['sshPort'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['userdata'] = isset($data['userdata']) ? $data['userdata'] : null;
    }

    /**
     * Gets accessToken
     * @return \Rancher\Model\PasswordModel
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     * @param \Rancher\Model\PasswordModel $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }


    /**
     * Gets backups
     * @return boolean
     */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
     * Sets backups
     * @param boolean $backups
     * @return $this
     */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;

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
     * Gets ipv6
     * @return boolean
     */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
     * Sets ipv6
     * @param boolean $ipv6
     * @return $this
     */
    public function setIpv6($ipv6)
    {
        $this->container['ipv6'] = $ipv6;

        return $this;
    }


    /**
     * Gets monitoring
     * @return boolean
     */
    public function getMonitoring()
    {
        return $this->container['monitoring'];
    }

    /**
     * Sets monitoring
     * @param boolean $monitoring
     * @return $this
     */
    public function setMonitoring($monitoring)
    {
        $this->container['monitoring'] = $monitoring;

        return $this;
    }


    /**
     * Gets privateNetworking
     * @return boolean
     */
    public function getPrivateNetworking()
    {
        return $this->container['privateNetworking'];
    }

    /**
     * Sets privateNetworking
     * @param boolean $privateNetworking
     * @return $this
     */
    public function setPrivateNetworking($privateNetworking)
    {
        $this->container['privateNetworking'] = $privateNetworking;

        return $this;
    }


    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }


    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }


    /**
     * Gets sshKeyContents
     * @return \Rancher\Model\PasswordModel
     */
    public function getSshKeyContents()
    {
        return $this->container['sshKeyContents'];
    }

    /**
     * Sets sshKeyContents
     * @param \Rancher\Model\PasswordModel $sshKeyContents
     * @return $this
     */
    public function setSshKeyContents($sshKeyContents)
    {
        $this->container['sshKeyContents'] = $sshKeyContents;

        return $this;
    }


    /**
     * Gets sshKeyFingerprint
     * @return string
     */
    public function getSshKeyFingerprint()
    {
        return $this->container['sshKeyFingerprint'];
    }

    /**
     * Sets sshKeyFingerprint
     * @param string $sshKeyFingerprint
     * @return $this
     */
    public function setSshKeyFingerprint($sshKeyFingerprint)
    {
        $this->container['sshKeyFingerprint'] = $sshKeyFingerprint;

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
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }


    /**
     * Gets userdata
     * @return string
     */
    public function getUserdata()
    {
        return $this->container['userdata'];
    }

    /**
     * Sets userdata
     * @param string $userdata
     * @return $this
     */
    public function setUserdata($userdata)
    {
        $this->container['userdata'] = $userdata;

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

