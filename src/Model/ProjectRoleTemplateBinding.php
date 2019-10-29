<?php

namespace Rancher\Model;

use \ArrayAccess;

class ProjectRoleTemplateBinding implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'groupId' => 'string',
        'groupPrincipalId' => 'string',
        'labels' => 'map[string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'projectId' => 'string',
        'removed' => '\DateTime',
        'roleTemplateId' => 'string',
        'serviceAccount' => 'string',
        'userId' => 'string',
        'userPrincipalId' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'groupId' => 'setGroupId',
        'groupPrincipalId' => 'setGroupPrincipalId',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'ownerReferences' => 'setOwnerReferences',
        'projectId' => 'setProjectId',
        'removed' => 'setRemoved',
        'roleTemplateId' => 'setRoleTemplateId',
        'serviceAccount' => 'setServiceAccount',
        'userId' => 'setUserId',
        'userPrincipalId' => 'setUserPrincipalId',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'groupId' => 'getGroupId',
        'groupPrincipalId' => 'getGroupPrincipalId',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'ownerReferences' => 'getOwnerReferences',
        'projectId' => 'getProjectId',
        'removed' => 'getRemoved',
        'roleTemplateId' => 'getRoleTemplateId',
        'serviceAccount' => 'getServiceAccount',
        'userId' => 'getUserId',
        'userPrincipalId' => 'getUserPrincipalId',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupPrincipalId'] = isset($data['groupPrincipalId']) ? $data['groupPrincipalId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['roleTemplateId'] = isset($data['roleTemplateId']) ? $data['roleTemplateId'] : null;
        $this->container['serviceAccount'] = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userPrincipalId'] = isset($data['userPrincipalId']) ? $data['userPrincipalId'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
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
     * Gets groupId
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }


    /**
     * Gets groupPrincipalId
     * @return string
     */
    public function getGroupPrincipalId()
    {
        return $this->container['groupPrincipalId'];
    }

    /**
     * Sets groupPrincipalId
     * @param string $groupPrincipalId
     * @return $this
     */
    public function setGroupPrincipalId($groupPrincipalId)
    {
        $this->container['groupPrincipalId'] = $groupPrincipalId;

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
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReference[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

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
     * Gets roleTemplateId
     * @return string
     */
    public function getRoleTemplateId()
    {
        return $this->container['roleTemplateId'];
    }

    /**
     * Sets roleTemplateId
     * @param string $roleTemplateId
     * @return $this
     */
    public function setRoleTemplateId($roleTemplateId)
    {
        $this->container['roleTemplateId'] = $roleTemplateId;

        return $this;
    }


    /**
     * Gets serviceAccount
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->container['serviceAccount'];
    }

    /**
     * Sets serviceAccount
     * @param string $serviceAccount
     * @return $this
     */
    public function setServiceAccount($serviceAccount)
    {
        $this->container['serviceAccount'] = $serviceAccount;

        return $this;
    }


    /**
     * Gets userId
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }


    /**
     * Gets userPrincipalId
     * @return string
     */
    public function getUserPrincipalId()
    {
        return $this->container['userPrincipalId'];
    }

    /**
     * Sets userPrincipalId
     * @param string $userPrincipalId
     * @return $this
     */
    public function setUserPrincipalId($userPrincipalId)
    {
        $this->container['userPrincipalId'] = $userPrincipalId;

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

