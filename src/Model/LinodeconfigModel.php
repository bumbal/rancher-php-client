<?php

/**
 * LinodeconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LinodeconfigModel implements ArrayAccess
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
        'authorizedUsers',
        'createPrivateIp',
        'dockerPort',
        'image',
        'instanceType',
        'label',
        'region',
        'rootPass',
        'sshPort',
        'sshUser',
        'stackscript',
        'stackscriptData',
        'swapSize',
        'tags',
        'token',
        'uaPrefix',
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
        'authorizedUsers',
        'createPrivateIp',
        'dockerPort',
        'image',
        'instanceType',
        'label',
        'region',
        'rootPass',
        'sshPort',
        'sshUser',
        'stackscript',
        'stackscriptData',
        'swapSize',
        'tags',
        'token',
        'uaPrefix',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'authorizedUsers' => 'string',
        'createPrivateIp' => 'boolean',
        'dockerPort' => 'string',
        'image' => 'string',
        'instanceType' => 'string',
        'label' => 'string',
        'region' => 'string',
        'rootPass' => '\Rancher\Model\PasswordModel',
        'sshPort' => 'string',
        'sshUser' => 'string',
        'stackscript' => 'string',
        'stackscriptData' => 'string',
        'swapSize' => 'string',
        'tags' => 'string',
        'token' => '\Rancher\Model\PasswordModel',
        'uaPrefix' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'authorizedUsers' => 'setAuthorizedUsers',
        'createPrivateIp' => 'setCreatePrivateIp',
        'dockerPort' => 'setDockerPort',
        'image' => 'setImage',
        'instanceType' => 'setInstanceType',
        'label' => 'setLabel',
        'region' => 'setRegion',
        'rootPass' => 'setRootPass',
        'sshPort' => 'setSshPort',
        'sshUser' => 'setSshUser',
        'stackscript' => 'setStackscript',
        'stackscriptData' => 'setStackscriptData',
        'swapSize' => 'setSwapSize',
        'tags' => 'setTags',
        'token' => 'setToken',
        'uaPrefix' => 'setUaPrefix',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'authorizedUsers' => 'getAuthorizedUsers',
        'createPrivateIp' => 'getCreatePrivateIp',
        'dockerPort' => 'getDockerPort',
        'image' => 'getImage',
        'instanceType' => 'getInstanceType',
        'label' => 'getLabel',
        'region' => 'getRegion',
        'rootPass' => 'getRootPass',
        'sshPort' => 'getSshPort',
        'sshUser' => 'getSshUser',
        'stackscript' => 'getStackscript',
        'stackscriptData' => 'getStackscriptData',
        'swapSize' => 'getSwapSize',
        'tags' => 'getTags',
        'token' => 'getToken',
        'uaPrefix' => 'getUaPrefix',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['authorizedUsers'] = isset($data['authorizedUsers']) ? $data['authorizedUsers'] : null;
        $this->container['createPrivateIp'] = isset($data['createPrivateIp']) ? $data['createPrivateIp'] : null;
        $this->container['dockerPort'] = isset($data['dockerPort']) ? $data['dockerPort'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['rootPass'] = isset($data['rootPass']) ? $data['rootPass'] : null;
        $this->container['sshPort'] = isset($data['sshPort']) ? $data['sshPort'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['stackscript'] = isset($data['stackscript']) ? $data['stackscript'] : null;
        $this->container['stackscriptData'] = isset($data['stackscriptData']) ? $data['stackscriptData'] : null;
        $this->container['swapSize'] = isset($data['swapSize']) ? $data['swapSize'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['uaPrefix'] = isset($data['uaPrefix']) ? $data['uaPrefix'] : null;
    }

    /**
     * Gets authorizedUsers
     * @return string
     */
    public function getAuthorizedUsers()
    {
        return $this->container['authorizedUsers'];
    }

    /**
     * Sets authorizedUsers
     * @param string $authorizedUsers
     * @return $this
     */
    public function setAuthorizedUsers($authorizedUsers)
    {
        $this->container['authorizedUsers'] = $authorizedUsers;

        return $this;
    }


    /**
     * Gets createPrivateIp
     * @return boolean
     */
    public function getCreatePrivateIp()
    {
        return $this->container['createPrivateIp'];
    }

    /**
     * Sets createPrivateIp
     * @param boolean $createPrivateIp
     * @return $this
     */
    public function setCreatePrivateIp($createPrivateIp)
    {
        $this->container['createPrivateIp'] = $createPrivateIp;

        return $this;
    }


    /**
     * Gets dockerPort
     * @return string
     */
    public function getDockerPort()
    {
        return $this->container['dockerPort'];
    }

    /**
     * Sets dockerPort
     * @param string $dockerPort
     * @return $this
     */
    public function setDockerPort($dockerPort)
    {
        $this->container['dockerPort'] = $dockerPort;

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
     * Gets instanceType
     * @return string
     */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
     * Sets instanceType
     * @param string $instanceType
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;

        return $this;
    }


    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * Gets rootPass
     * @return \Rancher\Model\PasswordModel
     */
    public function getRootPass()
    {
        return $this->container['rootPass'];
    }

    /**
     * Sets rootPass
     * @param \Rancher\Model\PasswordModel $rootPass
     * @return $this
     */
    public function setRootPass($rootPass)
    {
        $this->container['rootPass'] = $rootPass;

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
     * Gets stackscript
     * @return string
     */
    public function getStackscript()
    {
        return $this->container['stackscript'];
    }

    /**
     * Sets stackscript
     * @param string $stackscript
     * @return $this
     */
    public function setStackscript($stackscript)
    {
        $this->container['stackscript'] = $stackscript;

        return $this;
    }


    /**
     * Gets stackscriptData
     * @return string
     */
    public function getStackscriptData()
    {
        return $this->container['stackscriptData'];
    }

    /**
     * Sets stackscriptData
     * @param string $stackscriptData
     * @return $this
     */
    public function setStackscriptData($stackscriptData)
    {
        $this->container['stackscriptData'] = $stackscriptData;

        return $this;
    }


    /**
     * Gets swapSize
     * @return string
     */
    public function getSwapSize()
    {
        return $this->container['swapSize'];
    }

    /**
     * Sets swapSize
     * @param string $swapSize
     * @return $this
     */
    public function setSwapSize($swapSize)
    {
        $this->container['swapSize'] = $swapSize;

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
     * Gets token
     * @return \Rancher\Model\PasswordModel
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param \Rancher\Model\PasswordModel $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }


    /**
     * Gets uaPrefix
     * @return string
     */
    public function getUaPrefix()
    {
        return $this->container['uaPrefix'];
    }

    /**
     * Sets uaPrefix
     * @param string $uaPrefix
     * @return $this
     */
    public function setUaPrefix($uaPrefix)
    {
        $this->container['uaPrefix'] = $uaPrefix;

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

