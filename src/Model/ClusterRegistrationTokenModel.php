<?php

/**
 * ClusterRegistrationTokenModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClusterRegistrationTokenModel implements ArrayAccess
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
        'annotations',
        'clusterId',
        'labels',
        'name',
        'namespaceId',
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
        'annotations',
        'clusterId',
        'labels',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'annotations' => 'map[string,string]',
        'clusterId' => 'string',
        'command' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'insecureCommand' => 'string',
        'insecureNodeCommand' => 'string',
        'insecureWindowsNodeCommand' => 'string',
        'labels' => 'map[string,string]',
        'manifestUrl' => 'string',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeCommand' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'state' => 'string',
        'token' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'windowsNodeCommand' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'clusterId' => 'setClusterId',
        'command' => 'setCommand',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'insecureCommand' => 'setInsecureCommand',
        'insecureNodeCommand' => 'setInsecureNodeCommand',
        'insecureWindowsNodeCommand' => 'setInsecureWindowsNodeCommand',
        'labels' => 'setLabels',
        'manifestUrl' => 'setManifestUrl',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeCommand' => 'setNodeCommand',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'state' => 'setState',
        'token' => 'setToken',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'windowsNodeCommand' => 'setWindowsNodeCommand',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'clusterId' => 'getClusterId',
        'command' => 'getCommand',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'insecureCommand' => 'getInsecureCommand',
        'insecureNodeCommand' => 'getInsecureNodeCommand',
        'insecureWindowsNodeCommand' => 'getInsecureWindowsNodeCommand',
        'labels' => 'getLabels',
        'manifestUrl' => 'getManifestUrl',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeCommand' => 'getNodeCommand',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'state' => 'getState',
        'token' => 'getToken',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'windowsNodeCommand' => 'getWindowsNodeCommand',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['insecureCommand'] = isset($data['insecureCommand']) ? $data['insecureCommand'] : null;
        $this->container['insecureNodeCommand'] = isset($data['insecureNodeCommand']) ? $data['insecureNodeCommand'] : null;
        $this->container['insecureWindowsNodeCommand'] = isset($data['insecureWindowsNodeCommand']) ? $data['insecureWindowsNodeCommand'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['manifestUrl'] = isset($data['manifestUrl']) ? $data['manifestUrl'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeCommand'] = isset($data['nodeCommand']) ? $data['nodeCommand'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['windowsNodeCommand'] = isset($data['windowsNodeCommand']) ? $data['windowsNodeCommand'] : null;
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
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

        return $this;
    }


    /**
     * Gets command
     * @return string
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     * @param string $command
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

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
     * Gets insecureCommand
     * @return string
     */
    public function getInsecureCommand()
    {
        return $this->container['insecureCommand'];
    }

    /**
     * Sets insecureCommand
     * @param string $insecureCommand
     * @return $this
     */
    public function setInsecureCommand($insecureCommand)
    {
        $this->container['insecureCommand'] = $insecureCommand;

        return $this;
    }


    /**
     * Gets insecureNodeCommand
     * @return string
     */
    public function getInsecureNodeCommand()
    {
        return $this->container['insecureNodeCommand'];
    }

    /**
     * Sets insecureNodeCommand
     * @param string $insecureNodeCommand
     * @return $this
     */
    public function setInsecureNodeCommand($insecureNodeCommand)
    {
        $this->container['insecureNodeCommand'] = $insecureNodeCommand;

        return $this;
    }


    /**
     * Gets insecureWindowsNodeCommand
     * @return string
     */
    public function getInsecureWindowsNodeCommand()
    {
        return $this->container['insecureWindowsNodeCommand'];
    }

    /**
     * Sets insecureWindowsNodeCommand
     * @param string $insecureWindowsNodeCommand
     * @return $this
     */
    public function setInsecureWindowsNodeCommand($insecureWindowsNodeCommand)
    {
        $this->container['insecureWindowsNodeCommand'] = $insecureWindowsNodeCommand;

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
     * Gets manifestUrl
     * @return string
     */
    public function getManifestUrl()
    {
        return $this->container['manifestUrl'];
    }

    /**
     * Sets manifestUrl
     * @param string $manifestUrl
     * @return $this
     */
    public function setManifestUrl($manifestUrl)
    {
        $this->container['manifestUrl'] = $manifestUrl;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }


    /**
     * Gets nodeCommand
     * @return string
     */
    public function getNodeCommand()
    {
        return $this->container['nodeCommand'];
    }

    /**
     * Sets nodeCommand
     * @param string $nodeCommand
     * @return $this
     */
    public function setNodeCommand($nodeCommand)
    {
        $this->container['nodeCommand'] = $nodeCommand;

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
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * Gets windowsNodeCommand
     * @return string
     */
    public function getWindowsNodeCommand()
    {
        return $this->container['windowsNodeCommand'];
    }

    /**
     * Sets windowsNodeCommand
     * @param string $windowsNodeCommand
     * @return $this
     */
    public function setWindowsNodeCommand($windowsNodeCommand)
    {
        $this->container['windowsNodeCommand'] = $windowsNodeCommand;

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

