<?php

namespace Rancher\Model;

use \ArrayAccess;

class RoleTemplate implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'administrative' => 'boolean',
        'annotations' => 'map[string]',
        'builtin' => 'boolean',
        'clusterCreatorDefault' => 'boolean',
        'context' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'external' => 'boolean',
        'hidden' => 'boolean',
        'id' => 'string',
        'labels' => 'map[string]',
        'locked' => 'boolean',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'projectCreatorDefault' => 'boolean',
        'removed' => '\DateTime',
        'roleTemplateIds' => '\Rancher\Model\Reference[roleTemplate][]',
        'rules' => '\Rancher\Model\PolicyRule[]',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'administrative' => 'setAdministrative',
        'annotations' => 'setAnnotations',
        'builtin' => 'setBuiltin',
        'clusterCreatorDefault' => 'setClusterCreatorDefault',
        'context' => 'setContext',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'external' => 'setExternal',
        'hidden' => 'setHidden',
        'id' => 'setId',
        'labels' => 'setLabels',
        'locked' => 'setLocked',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'projectCreatorDefault' => 'setProjectCreatorDefault',
        'removed' => 'setRemoved',
        'roleTemplateIds' => 'setRoleTemplateIds',
        'rules' => 'setRules',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'administrative' => 'getAdministrative',
        'annotations' => 'getAnnotations',
        'builtin' => 'getBuiltin',
        'clusterCreatorDefault' => 'getClusterCreatorDefault',
        'context' => 'getContext',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'external' => 'getExternal',
        'hidden' => 'getHidden',
        'id' => 'getId',
        'labels' => 'getLabels',
        'locked' => 'getLocked',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'projectCreatorDefault' => 'getProjectCreatorDefault',
        'removed' => 'getRemoved',
        'roleTemplateIds' => 'getRoleTemplateIds',
        'rules' => 'getRules',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['administrative'] = isset($data['administrative']) ? $data['administrative'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['builtin'] = isset($data['builtin']) ? $data['builtin'] : null;
        $this->container['clusterCreatorDefault'] = isset($data['clusterCreatorDefault']) ? $data['clusterCreatorDefault'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['external'] = isset($data['external']) ? $data['external'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['projectCreatorDefault'] = isset($data['projectCreatorDefault']) ? $data['projectCreatorDefault'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['roleTemplateIds'] = isset($data['roleTemplateIds']) ? $data['roleTemplateIds'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
     * Gets administrative
     * @return boolean
     */
    public function getAdministrative()
    {
        return $this->container['administrative'];
    }

    /**
     * Sets administrative
     * @param boolean $administrative
     * @return $this
     */
    public function setAdministrative($administrative)
    {
        $this->container['administrative'] = $administrative;

        return $this;
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
     * Gets builtin
     * @return boolean
     */
    public function getBuiltin()
    {
        return $this->container['builtin'];
    }

    /**
     * Sets builtin
     * @param boolean $builtin
     * @return $this
     */
    public function setBuiltin($builtin)
    {
        $this->container['builtin'] = $builtin;

        return $this;
    }


    /**
     * Gets clusterCreatorDefault
     * @return boolean
     */
    public function getClusterCreatorDefault()
    {
        return $this->container['clusterCreatorDefault'];
    }

    /**
     * Sets clusterCreatorDefault
     * @param boolean $clusterCreatorDefault
     * @return $this
     */
    public function setClusterCreatorDefault($clusterCreatorDefault)
    {
        $this->container['clusterCreatorDefault'] = $clusterCreatorDefault;

        return $this;
    }


    /**
     * Gets context
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param string $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets external
     * @return boolean
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     * @param boolean $external
     * @return $this
     */
    public function setExternal($external)
    {
        $this->container['external'] = $external;

        return $this;
    }


    /**
     * Gets hidden
     * @return boolean
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     * @param boolean $hidden
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets locked
     * @return boolean
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param boolean $locked
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

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
     * Gets projectCreatorDefault
     * @return boolean
     */
    public function getProjectCreatorDefault()
    {
        return $this->container['projectCreatorDefault'];
    }

    /**
     * Sets projectCreatorDefault
     * @param boolean $projectCreatorDefault
     * @return $this
     */
    public function setProjectCreatorDefault($projectCreatorDefault)
    {
        $this->container['projectCreatorDefault'] = $projectCreatorDefault;

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
     * Gets roleTemplateIds
     * @return \Rancher\Model\Reference[roleTemplate][]
     */
    public function getRoleTemplateIds()
    {
        return $this->container['roleTemplateIds'];
    }

    /**
     * Sets roleTemplateIds
     * @param \Rancher\Model\Reference[roleTemplate][] $roleTemplateIds
     * @return $this
     */
    public function setRoleTemplateIds($roleTemplateIds)
    {
        $this->container['roleTemplateIds'] = $roleTemplateIds;

        return $this;
    }


    /**
     * Gets rules
     * @return \Rancher\Model\PolicyRule[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     * @param \Rancher\Model\PolicyRule[] $rules
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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

