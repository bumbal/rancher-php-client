<?php

/**
 * OidcConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class OidcConfigModel implements ArrayAccess
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
        'authEndpoint',
        'certificate',
        'clientId',
        'clientSecret',
        'enabled',
        'groupSearchEnabled',
        'issuer',
        'labels',
        'name',
        'privateKey',
        'rancherUrl',
        'scope',
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
        'authEndpoint',
        'certificate',
        'clientId',
        'clientSecret',
        'enabled',
        'groupSearchEnabled',
        'issuer',
        'labels',
        'privateKey',
        'rancherUrl',
        'scope',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessMode' => 'string',
        'allowedPrincipalIds' => 'string[]',
        'annotations' => 'map[string,string]',
        'authEndpoint' => 'string',
        'certificate' => 'string',
        'clientId' => 'string',
        'clientSecret' => '\Rancher\Model\PasswordModel',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'enabled' => 'boolean',
        'groupSearchEnabled' => 'boolean',
        'issuer' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'privateKey' => '\Rancher\Model\PasswordModel',
        'rancherUrl' => 'string',
        'removed' => '\DateTime',
        'scope' => 'string',
        'status' => '\Rancher\Model\AuthConfigStatusModel',
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
        'authEndpoint' => 'setAuthEndpoint',
        'certificate' => 'setCertificate',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'enabled' => 'setEnabled',
        'groupSearchEnabled' => 'setGroupSearchEnabled',
        'issuer' => 'setIssuer',
        'labels' => 'setLabels',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'privateKey' => 'setPrivateKey',
        'rancherUrl' => 'setRancherUrl',
        'removed' => 'setRemoved',
        'scope' => 'setScope',
        'status' => 'setStatus',
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
        'authEndpoint' => 'getAuthEndpoint',
        'certificate' => 'getCertificate',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'enabled' => 'getEnabled',
        'groupSearchEnabled' => 'getGroupSearchEnabled',
        'issuer' => 'getIssuer',
        'labels' => 'getLabels',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'privateKey' => 'getPrivateKey',
        'rancherUrl' => 'getRancherUrl',
        'removed' => 'getRemoved',
        'scope' => 'getScope',
        'status' => 'getStatus',
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
        $this->container['authEndpoint'] = isset($data['authEndpoint']) ? $data['authEndpoint'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['groupSearchEnabled'] = isset($data['groupSearchEnabled']) ? $data['groupSearchEnabled'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['rancherUrl'] = isset($data['rancherUrl']) ? $data['rancherUrl'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets certificate
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     * @param string $certificate
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

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
     * Gets groupSearchEnabled
     * @return boolean
     */
    public function getGroupSearchEnabled()
    {
        return $this->container['groupSearchEnabled'];
    }

    /**
     * Sets groupSearchEnabled
     * @param boolean $groupSearchEnabled
     * @return $this
     */
    public function setGroupSearchEnabled($groupSearchEnabled)
    {
        $this->container['groupSearchEnabled'] = $groupSearchEnabled;

        return $this;
    }


    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param string $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

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
     * Gets privateKey
     * @return \Rancher\Model\PasswordModel
     */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
     * Sets privateKey
     * @param \Rancher\Model\PasswordModel $privateKey
     * @return $this
     */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;

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
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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

