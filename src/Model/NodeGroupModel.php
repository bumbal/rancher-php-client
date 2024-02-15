<?php

/**
 * NodeGroupModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodeGroupModel implements ArrayAccess
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
        'desiredSize',
        'diskSize',
        'ec2SshKey',
        'gpu',
        'imageId',
        'instanceType',
        'labels',
        'launchTemplate',
        'maxSize',
        'minSize',
        'nodeRole',
        'nodegroupName',
        'requestSpotInstances',
        'resourceTags',
        'spotInstanceTypes',
        'subnets',
        'tags',
        'userData',
        'version',
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
        'desiredSize',
        'diskSize',
        'ec2SshKey',
        'gpu',
        'imageId',
        'instanceType',
        'labels',
        'launchTemplate',
        'maxSize',
        'minSize',
        'nodeRole',
        'nodegroupName',
        'requestSpotInstances',
        'resourceTags',
        'spotInstanceTypes',
        'subnets',
        'tags',
        'userData',
        'version',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'desiredSize' => 'int',
        'diskSize' => 'int',
        'ec2SshKey' => 'string',
        'gpu' => 'boolean',
        'imageId' => 'string',
        'instanceType' => 'string',
        'labels' => 'map[string,string]',
        'launchTemplate' => '\Rancher\Model\LaunchTemplateModel',
        'maxSize' => 'int',
        'minSize' => 'int',
        'nodeRole' => 'string',
        'nodegroupName' => 'string',
        'requestSpotInstances' => 'boolean',
        'resourceTags' => 'map[string,string]',
        'spotInstanceTypes' => 'string[]',
        'subnets' => 'string[]',
        'tags' => 'map[string,string]',
        'userData' => 'string',
        'version' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'desiredSize' => 'setDesiredSize',
        'diskSize' => 'setDiskSize',
        'ec2SshKey' => 'setEc2SshKey',
        'gpu' => 'setGpu',
        'imageId' => 'setImageId',
        'instanceType' => 'setInstanceType',
        'labels' => 'setLabels',
        'launchTemplate' => 'setLaunchTemplate',
        'maxSize' => 'setMaxSize',
        'minSize' => 'setMinSize',
        'nodeRole' => 'setNodeRole',
        'nodegroupName' => 'setNodegroupName',
        'requestSpotInstances' => 'setRequestSpotInstances',
        'resourceTags' => 'setResourceTags',
        'spotInstanceTypes' => 'setSpotInstanceTypes',
        'subnets' => 'setSubnets',
        'tags' => 'setTags',
        'userData' => 'setUserData',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'desiredSize' => 'getDesiredSize',
        'diskSize' => 'getDiskSize',
        'ec2SshKey' => 'getEc2SshKey',
        'gpu' => 'getGpu',
        'imageId' => 'getImageId',
        'instanceType' => 'getInstanceType',
        'labels' => 'getLabels',
        'launchTemplate' => 'getLaunchTemplate',
        'maxSize' => 'getMaxSize',
        'minSize' => 'getMinSize',
        'nodeRole' => 'getNodeRole',
        'nodegroupName' => 'getNodegroupName',
        'requestSpotInstances' => 'getRequestSpotInstances',
        'resourceTags' => 'getResourceTags',
        'spotInstanceTypes' => 'getSpotInstanceTypes',
        'subnets' => 'getSubnets',
        'tags' => 'getTags',
        'userData' => 'getUserData',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['desiredSize'] = isset($data['desiredSize']) ? $data['desiredSize'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['ec2SshKey'] = isset($data['ec2SshKey']) ? $data['ec2SshKey'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['launchTemplate'] = isset($data['launchTemplate']) ? $data['launchTemplate'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['minSize'] = isset($data['minSize']) ? $data['minSize'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['nodegroupName'] = isset($data['nodegroupName']) ? $data['nodegroupName'] : null;
        $this->container['requestSpotInstances'] = isset($data['requestSpotInstances']) ? $data['requestSpotInstances'] : null;
        $this->container['resourceTags'] = isset($data['resourceTags']) ? $data['resourceTags'] : null;
        $this->container['spotInstanceTypes'] = isset($data['spotInstanceTypes']) ? $data['spotInstanceTypes'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets desiredSize
     * @return int
     */
    public function getDesiredSize()
    {
        return $this->container['desiredSize'];
    }

    /**
     * Sets desiredSize
     * @param int $desiredSize
     * @return $this
     */
    public function setDesiredSize($desiredSize)
    {
        $this->container['desiredSize'] = $desiredSize;

        return $this;
    }


    /**
     * Gets diskSize
     * @return int
     */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
     * Sets diskSize
     * @param int $diskSize
     * @return $this
     */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;

        return $this;
    }


    /**
     * Gets ec2SshKey
     * @return string
     */
    public function getEc2SshKey()
    {
        return $this->container['ec2SshKey'];
    }

    /**
     * Sets ec2SshKey
     * @param string $ec2SshKey
     * @return $this
     */
    public function setEc2SshKey($ec2SshKey)
    {
        $this->container['ec2SshKey'] = $ec2SshKey;

        return $this;
    }


    /**
     * Gets gpu
     * @return boolean
     */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
     * Sets gpu
     * @param boolean $gpu
     * @return $this
     */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;

        return $this;
    }


    /**
     * Gets imageId
     * @return string
     */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
     * Sets imageId
     * @param string $imageId
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;

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
     * Gets launchTemplate
     * @return \Rancher\Model\LaunchTemplateModel
     */
    public function getLaunchTemplate()
    {
        return $this->container['launchTemplate'];
    }

    /**
     * Sets launchTemplate
     * @param \Rancher\Model\LaunchTemplateModel $launchTemplate
     * @return $this
     */
    public function setLaunchTemplate($launchTemplate)
    {
        $this->container['launchTemplate'] = $launchTemplate;

        return $this;
    }


    /**
     * Gets maxSize
     * @return int
     */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
     * Sets maxSize
     * @param int $maxSize
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;

        return $this;
    }


    /**
     * Gets minSize
     * @return int
     */
    public function getMinSize()
    {
        return $this->container['minSize'];
    }

    /**
     * Sets minSize
     * @param int $minSize
     * @return $this
     */
    public function setMinSize($minSize)
    {
        $this->container['minSize'] = $minSize;

        return $this;
    }


    /**
     * Gets nodeRole
     * @return string
     */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
     * Sets nodeRole
     * @param string $nodeRole
     * @return $this
     */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;

        return $this;
    }


    /**
     * Gets nodegroupName
     * @return string
     */
    public function getNodegroupName()
    {
        return $this->container['nodegroupName'];
    }

    /**
     * Sets nodegroupName
     * @param string $nodegroupName
     * @return $this
     */
    public function setNodegroupName($nodegroupName)
    {
        $this->container['nodegroupName'] = $nodegroupName;

        return $this;
    }


    /**
     * Gets requestSpotInstances
     * @return boolean
     */
    public function getRequestSpotInstances()
    {
        return $this->container['requestSpotInstances'];
    }

    /**
     * Sets requestSpotInstances
     * @param boolean $requestSpotInstances
     * @return $this
     */
    public function setRequestSpotInstances($requestSpotInstances)
    {
        $this->container['requestSpotInstances'] = $requestSpotInstances;

        return $this;
    }


    /**
     * Gets resourceTags
     * @return string[]
     */
    public function getResourceTags()
    {
        return $this->container['resourceTags'];
    }

    /**
     * Sets resourceTags
     * @param string[] $resourceTags
     * @return $this
     */
    public function setResourceTags($resourceTags)
    {
        $this->container['resourceTags'] = $resourceTags;

        return $this;
    }


    /**
     * Gets spotInstanceTypes
     * @return string[]
     */
    public function getSpotInstanceTypes()
    {
        return $this->container['spotInstanceTypes'];
    }

    /**
     * Sets spotInstanceTypes
     * @param string[] $spotInstanceTypes
     * @return $this
     */
    public function setSpotInstanceTypes($spotInstanceTypes)
    {
        $this->container['spotInstanceTypes'] = $spotInstanceTypes;

        return $this;
    }


    /**
     * Gets subnets
     * @return string[]
     */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
     * Sets subnets
     * @param string[] $subnets
     * @return $this
     */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;

        return $this;
    }


    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }


    /**
     * Gets userData
     * @return string
     */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
     * Sets userData
     * @param string $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;

        return $this;
    }


    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

