<?php

/**
 * GithubConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class GithubConfigModel implements ArrayAccess
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
        'accessMode',
        'allowedPrincipalIds',
        'annotations',
        'clientId',
        'clientSecret',
        'enabled',
        'hostname',
        'labels',
        'name',
        'tls',
        'type',
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
        'accessMode',
        'allowedPrincipalIds',
        'annotations',
        'clientId',
        'clientSecret',
        'enabled',
        'hostname',
        'labels',
        'tls',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessMode' => 'string',
        'additionalClientIds' => 'map[string,string]',
        'allowedPrincipalIds' => 'string[]',
        'annotations' => 'map[string,string]',
        'clientId' => 'string',
        'clientSecret' => '\Rancher\Model\PasswordModel',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'enabled' => 'boolean',
        'hostname' => 'string',
        'hostnameToClientId' => 'map[string,string]',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'removed' => '\DateTime',
        'status' => '\Rancher\Model\AuthConfigStatusModel',
        'tls' => 'boolean',
        'type' => 'string',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'accessMode' => 'setAccessMode',
        'additionalClientIds' => 'setAdditionalClientIds',
        'allowedPrincipalIds' => 'setAllowedPrincipalIds',
        'annotations' => 'setAnnotations',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'enabled' => 'setEnabled',
        'hostname' => 'setHostname',
        'hostnameToClientId' => 'setHostnameToClientId',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'status' => 'setStatus',
        'tls' => 'setTls',
        'type' => 'setType',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'accessMode' => 'getAccessMode',
        'additionalClientIds' => 'getAdditionalClientIds',
        'allowedPrincipalIds' => 'getAllowedPrincipalIds',
        'annotations' => 'getAnnotations',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'enabled' => 'getEnabled',
        'hostname' => 'getHostname',
        'hostnameToClientId' => 'getHostnameToClientId',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'status' => 'getStatus',
        'tls' => 'getTls',
        'type' => 'getType',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['accessMode'] = isset($data['accessMode']) ? $data['accessMode'] : null;
        $this->container['additionalClientIds'] = isset($data['additionalClientIds']) ? $data['additionalClientIds'] : null;
        $this->container['allowedPrincipalIds'] = isset($data['allowedPrincipalIds']) ? $data['allowedPrincipalIds'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['hostnameToClientId'] = isset($data['hostnameToClientId']) ? $data['hostnameToClientId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets additionalClientIds
     * @return string[]
     */
    public function getAdditionalClientIds()
    {
        return $this->container['additionalClientIds'];
    }

    /**
     * Sets additionalClientIds
     * @param string[] $additionalClientIds
     * @return $this
     */
    public function setAdditionalClientIds($additionalClientIds)
    {
        $this->container['additionalClientIds'] = $additionalClientIds;

        return $this;
    }


    /**
     * Gets allowedPrincipalIds
     * @return string[]
     */
    public function getAllowedPrincipalIds()
    {
        return $this->container['allowedPrincipalIds'];
    }

    /**
     * Sets allowedPrincipalIds
     * @param string[] $allowedPrincipalIds
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
     * Gets clientId
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }


    /**
     * Gets clientSecret
     * @return \Rancher\Model\PasswordModel
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param \Rancher\Model\PasswordModel $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

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
     * Gets hostname
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     * @param string $hostname
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }


    /**
     * Gets hostnameToClientId
     * @return string[]
     */
    public function getHostnameToClientId()
    {
        return $this->container['hostnameToClientId'];
    }

    /**
     * Sets hostnameToClientId
     * @param string[] $hostnameToClientId
     * @return $this
     */
    public function setHostnameToClientId($hostnameToClientId)
    {
        $this->container['hostnameToClientId'] = $hostnameToClientId;

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
     * Gets status
     * @return \Rancher\Model\AuthConfigStatusModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\AuthConfigStatusModel $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets tls
     * @return boolean
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     * @param boolean $tls
     * @return $this
     */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;

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

