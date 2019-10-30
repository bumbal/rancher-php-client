<?php

/**
 * NodePoolModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NodePoolModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'clusterId' => 'string',
        'controlPlane' => 'boolean',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'displayName' => 'string',
        'etcd' => 'boolean',
        'hostnamePrefix' => 'string',
        'labels' => 'map[string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeAnnotations' => 'map[string]',
        'nodeLabels' => 'map[string]',
        'nodeTemplateId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'quantity' => 'int',
        'removed' => '\DateTime',
        'state' => 'string',
        'status' => '\Rancher\Model\NodePoolStatusModel',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'worker' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'clusterId' => 'setClusterId',
        'controlPlane' => 'setControlPlane',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'displayName' => 'setDisplayName',
        'etcd' => 'setEtcd',
        'hostnamePrefix' => 'setHostnamePrefix',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeAnnotations' => 'setNodeAnnotations',
        'nodeLabels' => 'setNodeLabels',
        'nodeTemplateId' => 'setNodeTemplateId',
        'ownerReferences' => 'setOwnerReferences',
        'quantity' => 'setQuantity',
        'removed' => 'setRemoved',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'worker' => 'setWorker',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'clusterId' => 'getClusterId',
        'controlPlane' => 'getControlPlane',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'displayName' => 'getDisplayName',
        'etcd' => 'getEtcd',
        'hostnamePrefix' => 'getHostnamePrefix',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeAnnotations' => 'getNodeAnnotations',
        'nodeLabels' => 'getNodeLabels',
        'nodeTemplateId' => 'getNodeTemplateId',
        'ownerReferences' => 'getOwnerReferences',
        'quantity' => 'getQuantity',
        'removed' => 'getRemoved',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'worker' => 'getWorker',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['controlPlane'] = isset($data['controlPlane']) ? $data['controlPlane'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['etcd'] = isset($data['etcd']) ? $data['etcd'] : null;
        $this->container['hostnamePrefix'] = isset($data['hostnamePrefix']) ? $data['hostnamePrefix'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeAnnotations'] = isset($data['nodeAnnotations']) ? $data['nodeAnnotations'] : null;
        $this->container['nodeLabels'] = isset($data['nodeLabels']) ? $data['nodeLabels'] : null;
        $this->container['nodeTemplateId'] = isset($data['nodeTemplateId']) ? $data['nodeTemplateId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['worker'] = isset($data['worker']) ? $data['worker'] : null;
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
     * Gets controlPlane
     * @return boolean
     */
    public function getControlPlane()
    {
        return $this->container['controlPlane'];
    }

    /**
     * Sets controlPlane
     * @param boolean $controlPlane
     * @return $this
     */
    public function setControlPlane($controlPlane)
    {
        $this->container['controlPlane'] = $controlPlane;

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
     * Gets displayName
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }


    /**
     * Gets etcd
     * @return boolean
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param boolean $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets hostnamePrefix
     * @return string
     */
    public function getHostnamePrefix()
    {
        return $this->container['hostnamePrefix'];
    }

    /**
     * Sets hostnamePrefix
     * @param string $hostnamePrefix
     * @return $this
     */
    public function setHostnamePrefix($hostnamePrefix)
    {
        $this->container['hostnamePrefix'] = $hostnamePrefix;

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
     * Gets nodeAnnotations
     * @return string[]
     */
    public function getNodeAnnotations()
    {
        return $this->container['nodeAnnotations'];
    }

    /**
     * Sets nodeAnnotations
     * @param string[] $nodeAnnotations
     * @return $this
     */
    public function setNodeAnnotations($nodeAnnotations)
    {
        $this->container['nodeAnnotations'] = $nodeAnnotations;

        return $this;
    }


    /**
     * Gets nodeLabels
     * @return string[]
     */
    public function getNodeLabels()
    {
        return $this->container['nodeLabels'];
    }

    /**
     * Sets nodeLabels
     * @param string[] $nodeLabels
     * @return $this
     */
    public function setNodeLabels($nodeLabels)
    {
        $this->container['nodeLabels'] = $nodeLabels;

        return $this;
    }


    /**
     * Gets nodeTemplateId
     * @return string
     */
    public function getNodeTemplateId()
    {
        return $this->container['nodeTemplateId'];
    }

    /**
     * Sets nodeTemplateId
     * @param string $nodeTemplateId
     * @return $this
     */
    public function setNodeTemplateId($nodeTemplateId)
    {
        $this->container['nodeTemplateId'] = $nodeTemplateId;

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
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets status
     * @return \Rancher\Model\NodePoolStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\NodePoolStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets worker
     * @return boolean
     */
    public function getWorker()
    {
        return $this->container['worker'];
    }

    /**
     * Sets worker
     * @param boolean $worker
     * @return $this
     */
    public function setWorker($worker)
    {
        $this->container['worker'] = $worker;

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

