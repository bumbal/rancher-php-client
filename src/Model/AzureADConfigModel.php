<?php

/**
 * AzureADConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AzureADConfigModel implements ArrayAccess
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
        'applicationId',
        'applicationSecret',
        'authEndpoint',
        'enabled',
        'endpoint',
        'graphEndpoint',
        'labels',
        'name',
        'rancherUrl',
        'tenantId',
        'tokenEndpoint',
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
        'applicationId',
        'applicationSecret',
        'authEndpoint',
        'enabled',
        'endpoint',
        'graphEndpoint',
        'labels',
        'rancherUrl',
        'tenantId',
        'tokenEndpoint',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessMode' => 'string',
        'allowedPrincipalIds' => 'string[]',
        'annotations' => 'map[string,string]',
        'applicationId' => 'string',
        'applicationSecret' => '\Rancher\Model\PasswordModel',
        'authEndpoint' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'enabled' => 'boolean',
        'endpoint' => 'string',
        'graphEndpoint' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'rancherUrl' => 'string',
        'removed' => '\DateTime',
        'tenantId' => 'string',
        'tokenEndpoint' => 'string',
        'type' => 'string',
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
        'applicationId' => 'setApplicationId',
        'applicationSecret' => 'setApplicationSecret',
        'authEndpoint' => 'setAuthEndpoint',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'enabled' => 'setEnabled',
        'endpoint' => 'setEndpoint',
        'graphEndpoint' => 'setGraphEndpoint',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'rancherUrl' => 'setRancherUrl',
        'removed' => 'setRemoved',
        'tenantId' => 'setTenantId',
        'tokenEndpoint' => 'setTokenEndpoint',
        'type' => 'setType',
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
        'applicationId' => 'getApplicationId',
        'applicationSecret' => 'getApplicationSecret',
        'authEndpoint' => 'getAuthEndpoint',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'enabled' => 'getEnabled',
        'endpoint' => 'getEndpoint',
        'graphEndpoint' => 'getGraphEndpoint',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'rancherUrl' => 'getRancherUrl',
        'removed' => 'getRemoved',
        'tenantId' => 'getTenantId',
        'tokenEndpoint' => 'getTokenEndpoint',
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
        $this->container['allowedPrincipalIds'] = isset($data['allowedPrincipalIds']) ? $data['allowedPrincipalIds'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['applicationSecret'] = isset($data['applicationSecret']) ? $data['applicationSecret'] : null;
        $this->container['authEndpoint'] = isset($data['authEndpoint']) ? $data['authEndpoint'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['graphEndpoint'] = isset($data['graphEndpoint']) ? $data['graphEndpoint'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['rancherUrl'] = isset($data['rancherUrl']) ? $data['rancherUrl'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['tokenEndpoint'] = isset($data['tokenEndpoint']) ? $data['tokenEndpoint'] : null;
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
     * Gets applicationId
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
     * Sets applicationId
     * @param string $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

        return $this;
    }


    /**
     * Gets applicationSecret
     * @return \Rancher\Model\PasswordModel
     */
    public function getApplicationSecret()
    {
        return $this->container['applicationSecret'];
    }

    /**
     * Sets applicationSecret
     * @param \Rancher\Model\PasswordModel $applicationSecret
     * @return $this
     */
    public function setApplicationSecret($applicationSecret)
    {
        $this->container['applicationSecret'] = $applicationSecret;

        return $this;
    }


    /**
     * Gets authEndpoint
     * @return string
     */
    public function getAuthEndpoint()
    {
        return $this->container['authEndpoint'];
    }

    /**
     * Sets authEndpoint
     * @param string $authEndpoint
     * @return $this
     */
    public function setAuthEndpoint($authEndpoint)
    {
        $this->container['authEndpoint'] = $authEndpoint;

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
     * Gets endpoint
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }


    /**
     * Gets graphEndpoint
     * @return string
     */
    public function getGraphEndpoint()
    {
        return $this->container['graphEndpoint'];
    }

    /**
     * Sets graphEndpoint
     * @param string $graphEndpoint
     * @return $this
     */
    public function setGraphEndpoint($graphEndpoint)
    {
        $this->container['graphEndpoint'] = $graphEndpoint;

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
     * Gets rancherUrl
     * @return string
     */
    public function getRancherUrl()
    {
        return $this->container['rancherUrl'];
    }

    /**
     * Sets rancherUrl
     * @param string $rancherUrl
     * @return $this
     */
    public function setRancherUrl($rancherUrl)
    {
        $this->container['rancherUrl'] = $rancherUrl;

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
     * Gets tenantId
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * Sets tenantId
     * @param string $tenantId
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;

        return $this;
    }


    /**
     * Gets tokenEndpoint
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->container['tokenEndpoint'];
    }

    /**
     * Sets tokenEndpoint
     * @param string $tokenEndpoint
     * @return $this
     */
    public function setTokenEndpoint($tokenEndpoint)
    {
        $this->container['tokenEndpoint'] = $tokenEndpoint;

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

