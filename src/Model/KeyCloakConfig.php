<?php

namespace Rancher\Model;

use \ArrayAccess;

class KeyCloakConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'accessMode' => 'string',
        'allowedPrincipalIds' => '\Rancher\Model\Reference[principal][]',
        'annotations' => 'map[string]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'displayNameField' => 'string',
        'enabled' => 'boolean',
        'groupsField' => 'string',
        'idpMetadataContent' => 'string',
        'labels' => 'map[string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'rancherApiHost' => 'string',
        'removed' => '\DateTime',
        'spCert' => 'string',
        'spKey' => '\Rancher\Model\Password',
        'type' => 'string',
        'uidField' => 'string',
        'userNameField' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessMode' => 'setAccessMode',
        'allowedPrincipalIds' => 'setAllowedPrincipalIds',
        'annotations' => 'setAnnotations',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'displayNameField' => 'setDisplayNameField',
        'enabled' => 'setEnabled',
        'groupsField' => 'setGroupsField',
        'idpMetadataContent' => 'setIdpMetadataContent',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'rancherApiHost' => 'setRancherApiHost',
        'removed' => 'setRemoved',
        'spCert' => 'setSpCert',
        'spKey' => 'setSpKey',
        'type' => 'setType',
        'uidField' => 'setUidField',
        'userNameField' => 'setUserNameField',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessMode' => 'getAccessMode',
        'allowedPrincipalIds' => 'getAllowedPrincipalIds',
        'annotations' => 'getAnnotations',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'displayNameField' => 'getDisplayNameField',
        'enabled' => 'getEnabled',
        'groupsField' => 'getGroupsField',
        'idpMetadataContent' => 'getIdpMetadataContent',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'rancherApiHost' => 'getRancherApiHost',
        'removed' => 'getRemoved',
        'spCert' => 'getSpCert',
        'spKey' => 'getSpKey',
        'type' => 'getType',
        'uidField' => 'getUidField',
        'userNameField' => 'getUserNameField',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessMode'] = isset($data['accessMode']) ? $data['accessMode'] : null;
        $this->container['allowedPrincipalIds'] = isset($data['allowedPrincipalIds']) ? $data['allowedPrincipalIds'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['displayNameField'] = isset($data['displayNameField']) ? $data['displayNameField'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['groupsField'] = isset($data['groupsField']) ? $data['groupsField'] : null;
        $this->container['idpMetadataContent'] = isset($data['idpMetadataContent']) ? $data['idpMetadataContent'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['rancherApiHost'] = isset($data['rancherApiHost']) ? $data['rancherApiHost'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['spCert'] = isset($data['spCert']) ? $data['spCert'] : null;
        $this->container['spKey'] = isset($data['spKey']) ? $data['spKey'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uidField'] = isset($data['uidField']) ? $data['uidField'] : null;
        $this->container['userNameField'] = isset($data['userNameField']) ? $data['userNameField'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
     * Gets accessMode
     * @return string
     */
    public function getAccessMode()
    {
        return $this->container['accessMode'];
    }

    /**
     * Sets accessMode
     * @param string $accessMode
     * @return $this
     */
    public function setAccessMode($accessMode)
    {
        $this->container['accessMode'] = $accessMode;

        return $this;
    }


    /**
     * Gets allowedPrincipalIds
     * @return \Rancher\Model\Reference[principal][]
     */
    public function getAllowedPrincipalIds()
    {
        return $this->container['allowedPrincipalIds'];
    }

    /**
     * Sets allowedPrincipalIds
     * @param \Rancher\Model\Reference[principal][] $allowedPrincipalIds
     * @return $this
     */
    public function setAllowedPrincipalIds($allowedPrincipalIds)
    {
        $this->container['allowedPrincipalIds'] = $allowedPrincipalIds;

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
     * Gets displayNameField
     * @return string
     */
    public function getDisplayNameField()
    {
        return $this->container['displayNameField'];
    }

    /**
     * Sets displayNameField
     * @param string $displayNameField
     * @return $this
     */
    public function setDisplayNameField($displayNameField)
    {
        $this->container['displayNameField'] = $displayNameField;

        return $this;
    }


    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets groupsField
     * @return string
     */
    public function getGroupsField()
    {
        return $this->container['groupsField'];
    }

    /**
     * Sets groupsField
     * @param string $groupsField
     * @return $this
     */
    public function setGroupsField($groupsField)
    {
        $this->container['groupsField'] = $groupsField;

        return $this;
    }


    /**
     * Gets idpMetadataContent
     * @return string
     */
    public function getIdpMetadataContent()
    {
        return $this->container['idpMetadataContent'];
    }

    /**
     * Sets idpMetadataContent
     * @param string $idpMetadataContent
     * @return $this
     */
    public function setIdpMetadataContent($idpMetadataContent)
    {
        $this->container['idpMetadataContent'] = $idpMetadataContent;

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
     * Gets rancherApiHost
     * @return string
     */
    public function getRancherApiHost()
    {
        return $this->container['rancherApiHost'];
    }

    /**
     * Sets rancherApiHost
     * @param string $rancherApiHost
     * @return $this
     */
    public function setRancherApiHost($rancherApiHost)
    {
        $this->container['rancherApiHost'] = $rancherApiHost;

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
     * Gets spCert
     * @return string
     */
    public function getSpCert()
    {
        return $this->container['spCert'];
    }

    /**
     * Sets spCert
     * @param string $spCert
     * @return $this
     */
    public function setSpCert($spCert)
    {
        $this->container['spCert'] = $spCert;

        return $this;
    }


    /**
     * Gets spKey
     * @return \Rancher\Model\Password
     */
    public function getSpKey()
    {
        return $this->container['spKey'];
    }

    /**
     * Sets spKey
     * @param \Rancher\Model\Password $spKey
     * @return $this
     */
    public function setSpKey($spKey)
    {
        $this->container['spKey'] = $spKey;

        return $this;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }


    /**
     * Gets uidField
     * @return string
     */
    public function getUidField()
    {
        return $this->container['uidField'];
    }

    /**
     * Sets uidField
     * @param string $uidField
     * @return $this
     */
    public function setUidField($uidField)
    {
        $this->container['uidField'] = $uidField;

        return $this;
    }


    /**
     * Gets userNameField
     * @return string
     */
    public function getUserNameField()
    {
        return $this->container['userNameField'];
    }

    /**
     * Sets userNameField
     * @param string $userNameField
     * @return $this
     */
    public function setUserNameField($userNameField)
    {
        $this->container['userNameField'] = $userNameField;

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

