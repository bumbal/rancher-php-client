<?php

/**
 * ActiveDirectoryConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ActiveDirectoryConfigModel implements ArrayAccess
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
        'certificate',
        'connectionTimeout',
        'defaultLoginDomain',
        'enabled',
        'groupDNAttribute',
        'groupMemberMappingAttribute',
        'groupMemberUserAttribute',
        'groupNameAttribute',
        'groupObjectClass',
        'groupSearchAttribute',
        'groupSearchBase',
        'groupSearchFilter',
        'labels',
        'name',
        'nestedGroupMembershipEnabled',
        'port',
        'servers',
        'serviceAccountPassword',
        'serviceAccountUsername',
        'starttls',
        'tls',
        'type',
        'userDisabledBitMask',
        'userEnabledAttribute',
        'userLoginAttribute',
        'userNameAttribute',
        'userObjectClass',
        'userSearchAttribute',
        'userSearchBase',
        'userSearchFilter',
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
        'certificate',
        'connectionTimeout',
        'defaultLoginDomain',
        'enabled',
        'groupDNAttribute',
        'groupMemberMappingAttribute',
        'groupMemberUserAttribute',
        'groupNameAttribute',
        'groupObjectClass',
        'groupSearchAttribute',
        'groupSearchBase',
        'groupSearchFilter',
        'labels',
        'nestedGroupMembershipEnabled',
        'port',
        'servers',
        'serviceAccountPassword',
        'serviceAccountUsername',
        'starttls',
        'tls',
        'userDisabledBitMask',
        'userEnabledAttribute',
        'userLoginAttribute',
        'userNameAttribute',
        'userObjectClass',
        'userSearchAttribute',
        'userSearchBase',
        'userSearchFilter',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'accessMode' => 'string',
        'allowedPrincipalIds' => 'string[]',
        'annotations' => 'map[string,string]',
        'certificate' => 'string',
        'connectionTimeout' => 'int',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'defaultLoginDomain' => 'string',
        'enabled' => 'boolean',
        'groupDNAttribute' => 'string',
        'groupMemberMappingAttribute' => 'string',
        'groupMemberUserAttribute' => 'string',
        'groupNameAttribute' => 'string',
        'groupObjectClass' => 'string',
        'groupSearchAttribute' => 'string',
        'groupSearchBase' => 'string',
        'groupSearchFilter' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'nestedGroupMembershipEnabled' => 'boolean',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'port' => 'int',
        'removed' => '\DateTime',
        'servers' => 'string[]',
        'serviceAccountPassword' => '\Rancher\Model\PasswordModel',
        'serviceAccountUsername' => 'string',
        'starttls' => 'boolean',
        'status' => '\Rancher\Model\AuthConfigStatusModel',
        'tls' => 'boolean',
        'type' => 'string',
        'userDisabledBitMask' => 'int',
        'userEnabledAttribute' => 'string',
        'userLoginAttribute' => 'string',
        'userNameAttribute' => 'string',
        'userObjectClass' => 'string',
        'userSearchAttribute' => 'string',
        'userSearchBase' => 'string',
        'userSearchFilter' => 'string',
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
        'certificate' => 'setCertificate',
        'connectionTimeout' => 'setConnectionTimeout',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'defaultLoginDomain' => 'setDefaultLoginDomain',
        'enabled' => 'setEnabled',
        'groupDNAttribute' => 'setGroupDNAttribute',
        'groupMemberMappingAttribute' => 'setGroupMemberMappingAttribute',
        'groupMemberUserAttribute' => 'setGroupMemberUserAttribute',
        'groupNameAttribute' => 'setGroupNameAttribute',
        'groupObjectClass' => 'setGroupObjectClass',
        'groupSearchAttribute' => 'setGroupSearchAttribute',
        'groupSearchBase' => 'setGroupSearchBase',
        'groupSearchFilter' => 'setGroupSearchFilter',
        'labels' => 'setLabels',
        'name' => 'setName',
        'nestedGroupMembershipEnabled' => 'setNestedGroupMembershipEnabled',
        'ownerReferences' => 'setOwnerReferences',
        'port' => 'setPort',
        'removed' => 'setRemoved',
        'servers' => 'setServers',
        'serviceAccountPassword' => 'setServiceAccountPassword',
        'serviceAccountUsername' => 'setServiceAccountUsername',
        'starttls' => 'setStarttls',
        'status' => 'setStatus',
        'tls' => 'setTls',
        'type' => 'setType',
        'userDisabledBitMask' => 'setUserDisabledBitMask',
        'userEnabledAttribute' => 'setUserEnabledAttribute',
        'userLoginAttribute' => 'setUserLoginAttribute',
        'userNameAttribute' => 'setUserNameAttribute',
        'userObjectClass' => 'setUserObjectClass',
        'userSearchAttribute' => 'setUserSearchAttribute',
        'userSearchBase' => 'setUserSearchBase',
        'userSearchFilter' => 'setUserSearchFilter',
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
        'certificate' => 'getCertificate',
        'connectionTimeout' => 'getConnectionTimeout',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'defaultLoginDomain' => 'getDefaultLoginDomain',
        'enabled' => 'getEnabled',
        'groupDNAttribute' => 'getGroupDNAttribute',
        'groupMemberMappingAttribute' => 'getGroupMemberMappingAttribute',
        'groupMemberUserAttribute' => 'getGroupMemberUserAttribute',
        'groupNameAttribute' => 'getGroupNameAttribute',
        'groupObjectClass' => 'getGroupObjectClass',
        'groupSearchAttribute' => 'getGroupSearchAttribute',
        'groupSearchBase' => 'getGroupSearchBase',
        'groupSearchFilter' => 'getGroupSearchFilter',
        'labels' => 'getLabels',
        'name' => 'getName',
        'nestedGroupMembershipEnabled' => 'getNestedGroupMembershipEnabled',
        'ownerReferences' => 'getOwnerReferences',
        'port' => 'getPort',
        'removed' => 'getRemoved',
        'servers' => 'getServers',
        'serviceAccountPassword' => 'getServiceAccountPassword',
        'serviceAccountUsername' => 'getServiceAccountUsername',
        'starttls' => 'getStarttls',
        'status' => 'getStatus',
        'tls' => 'getTls',
        'type' => 'getType',
        'userDisabledBitMask' => 'getUserDisabledBitMask',
        'userEnabledAttribute' => 'getUserEnabledAttribute',
        'userLoginAttribute' => 'getUserLoginAttribute',
        'userNameAttribute' => 'getUserNameAttribute',
        'userObjectClass' => 'getUserObjectClass',
        'userSearchAttribute' => 'getUserSearchAttribute',
        'userSearchBase' => 'getUserSearchBase',
        'userSearchFilter' => 'getUserSearchFilter',
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
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['connectionTimeout'] = isset($data['connectionTimeout']) ? $data['connectionTimeout'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['defaultLoginDomain'] = isset($data['defaultLoginDomain']) ? $data['defaultLoginDomain'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['groupDNAttribute'] = isset($data['groupDNAttribute']) ? $data['groupDNAttribute'] : null;
        $this->container['groupMemberMappingAttribute'] = isset($data['groupMemberMappingAttribute']) ? $data['groupMemberMappingAttribute'] : null;
        $this->container['groupMemberUserAttribute'] = isset($data['groupMemberUserAttribute']) ? $data['groupMemberUserAttribute'] : null;
        $this->container['groupNameAttribute'] = isset($data['groupNameAttribute']) ? $data['groupNameAttribute'] : null;
        $this->container['groupObjectClass'] = isset($data['groupObjectClass']) ? $data['groupObjectClass'] : null;
        $this->container['groupSearchAttribute'] = isset($data['groupSearchAttribute']) ? $data['groupSearchAttribute'] : null;
        $this->container['groupSearchBase'] = isset($data['groupSearchBase']) ? $data['groupSearchBase'] : null;
        $this->container['groupSearchFilter'] = isset($data['groupSearchFilter']) ? $data['groupSearchFilter'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nestedGroupMembershipEnabled'] = isset($data['nestedGroupMembershipEnabled']) ? $data['nestedGroupMembershipEnabled'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['serviceAccountPassword'] = isset($data['serviceAccountPassword']) ? $data['serviceAccountPassword'] : null;
        $this->container['serviceAccountUsername'] = isset($data['serviceAccountUsername']) ? $data['serviceAccountUsername'] : null;
        $this->container['starttls'] = isset($data['starttls']) ? $data['starttls'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['userDisabledBitMask'] = isset($data['userDisabledBitMask']) ? $data['userDisabledBitMask'] : null;
        $this->container['userEnabledAttribute'] = isset($data['userEnabledAttribute']) ? $data['userEnabledAttribute'] : null;
        $this->container['userLoginAttribute'] = isset($data['userLoginAttribute']) ? $data['userLoginAttribute'] : null;
        $this->container['userNameAttribute'] = isset($data['userNameAttribute']) ? $data['userNameAttribute'] : null;
        $this->container['userObjectClass'] = isset($data['userObjectClass']) ? $data['userObjectClass'] : null;
        $this->container['userSearchAttribute'] = isset($data['userSearchAttribute']) ? $data['userSearchAttribute'] : null;
        $this->container['userSearchBase'] = isset($data['userSearchBase']) ? $data['userSearchBase'] : null;
        $this->container['userSearchFilter'] = isset($data['userSearchFilter']) ? $data['userSearchFilter'] : null;
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
     * Gets connectionTimeout
     * @return int
     */
    public function getConnectionTimeout()
    {
        return $this->container['connectionTimeout'];
    }

    /**
     * Sets connectionTimeout
     * @param int $connectionTimeout
     * @return $this
     */
    public function setConnectionTimeout($connectionTimeout)
    {
        $this->container['connectionTimeout'] = $connectionTimeout;

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
     * Gets defaultLoginDomain
     * @return string
     */
    public function getDefaultLoginDomain()
    {
        return $this->container['defaultLoginDomain'];
    }

    /**
     * Sets defaultLoginDomain
     * @param string $defaultLoginDomain
     * @return $this
     */
    public function setDefaultLoginDomain($defaultLoginDomain)
    {
        $this->container['defaultLoginDomain'] = $defaultLoginDomain;

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
     * Gets groupDNAttribute
     * @return string
     */
    public function getGroupDNAttribute()
    {
        return $this->container['groupDNAttribute'];
    }

    /**
     * Sets groupDNAttribute
     * @param string $groupDNAttribute
     * @return $this
     */
    public function setGroupDNAttribute($groupDNAttribute)
    {
        $this->container['groupDNAttribute'] = $groupDNAttribute;

        return $this;
    }


    /**
     * Gets groupMemberMappingAttribute
     * @return string
     */
    public function getGroupMemberMappingAttribute()
    {
        return $this->container['groupMemberMappingAttribute'];
    }

    /**
     * Sets groupMemberMappingAttribute
     * @param string $groupMemberMappingAttribute
     * @return $this
     */
    public function setGroupMemberMappingAttribute($groupMemberMappingAttribute)
    {
        $this->container['groupMemberMappingAttribute'] = $groupMemberMappingAttribute;

        return $this;
    }


    /**
     * Gets groupMemberUserAttribute
     * @return string
     */
    public function getGroupMemberUserAttribute()
    {
        return $this->container['groupMemberUserAttribute'];
    }

    /**
     * Sets groupMemberUserAttribute
     * @param string $groupMemberUserAttribute
     * @return $this
     */
    public function setGroupMemberUserAttribute($groupMemberUserAttribute)
    {
        $this->container['groupMemberUserAttribute'] = $groupMemberUserAttribute;

        return $this;
    }


    /**
     * Gets groupNameAttribute
     * @return string
     */
    public function getGroupNameAttribute()
    {
        return $this->container['groupNameAttribute'];
    }

    /**
     * Sets groupNameAttribute
     * @param string $groupNameAttribute
     * @return $this
     */
    public function setGroupNameAttribute($groupNameAttribute)
    {
        $this->container['groupNameAttribute'] = $groupNameAttribute;

        return $this;
    }


    /**
     * Gets groupObjectClass
     * @return string
     */
    public function getGroupObjectClass()
    {
        return $this->container['groupObjectClass'];
    }

    /**
     * Sets groupObjectClass
     * @param string $groupObjectClass
     * @return $this
     */
    public function setGroupObjectClass($groupObjectClass)
    {
        $this->container['groupObjectClass'] = $groupObjectClass;

        return $this;
    }


    /**
     * Gets groupSearchAttribute
     * @return string
     */
    public function getGroupSearchAttribute()
    {
        return $this->container['groupSearchAttribute'];
    }

    /**
     * Sets groupSearchAttribute
     * @param string $groupSearchAttribute
     * @return $this
     */
    public function setGroupSearchAttribute($groupSearchAttribute)
    {
        $this->container['groupSearchAttribute'] = $groupSearchAttribute;

        return $this;
    }


    /**
     * Gets groupSearchBase
     * @return string
     */
    public function getGroupSearchBase()
    {
        return $this->container['groupSearchBase'];
    }

    /**
     * Sets groupSearchBase
     * @param string $groupSearchBase
     * @return $this
     */
    public function setGroupSearchBase($groupSearchBase)
    {
        $this->container['groupSearchBase'] = $groupSearchBase;

        return $this;
    }


    /**
     * Gets groupSearchFilter
     * @return string
     */
    public function getGroupSearchFilter()
    {
        return $this->container['groupSearchFilter'];
    }

    /**
     * Sets groupSearchFilter
     * @param string $groupSearchFilter
     * @return $this
     */
    public function setGroupSearchFilter($groupSearchFilter)
    {
        $this->container['groupSearchFilter'] = $groupSearchFilter;

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
     * Gets nestedGroupMembershipEnabled
     * @return boolean
     */
    public function getNestedGroupMembershipEnabled()
    {
        return $this->container['nestedGroupMembershipEnabled'];
    }

    /**
     * Sets nestedGroupMembershipEnabled
     * @param boolean $nestedGroupMembershipEnabled
     * @return $this
     */
    public function setNestedGroupMembershipEnabled($nestedGroupMembershipEnabled)
    {
        $this->container['nestedGroupMembershipEnabled'] = $nestedGroupMembershipEnabled;

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
     * Gets port
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

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
     * Gets servers
     * @return string[]
     */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
     * Sets servers
     * @param string[] $servers
     * @return $this
     */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;

        return $this;
    }


    /**
     * Gets serviceAccountPassword
     * @return \Rancher\Model\PasswordModel
     */
    public function getServiceAccountPassword()
    {
        return $this->container['serviceAccountPassword'];
    }

    /**
     * Sets serviceAccountPassword
     * @param \Rancher\Model\PasswordModel $serviceAccountPassword
     * @return $this
     */
    public function setServiceAccountPassword($serviceAccountPassword)
    {
        $this->container['serviceAccountPassword'] = $serviceAccountPassword;

        return $this;
    }


    /**
     * Gets serviceAccountUsername
     * @return string
     */
    public function getServiceAccountUsername()
    {
        return $this->container['serviceAccountUsername'];
    }

    /**
     * Sets serviceAccountUsername
     * @param string $serviceAccountUsername
     * @return $this
     */
    public function setServiceAccountUsername($serviceAccountUsername)
    {
        $this->container['serviceAccountUsername'] = $serviceAccountUsername;

        return $this;
    }


    /**
     * Gets starttls
     * @return boolean
     */
    public function getStarttls()
    {
        return $this->container['starttls'];
    }

    /**
     * Sets starttls
     * @param boolean $starttls
     * @return $this
     */
    public function setStarttls($starttls)
    {
        $this->container['starttls'] = $starttls;

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
     * Gets userDisabledBitMask
     * @return int
     */
    public function getUserDisabledBitMask()
    {
        return $this->container['userDisabledBitMask'];
    }

    /**
     * Sets userDisabledBitMask
     * @param int $userDisabledBitMask
     * @return $this
     */
    public function setUserDisabledBitMask($userDisabledBitMask)
    {
        $this->container['userDisabledBitMask'] = $userDisabledBitMask;

        return $this;
    }


    /**
     * Gets userEnabledAttribute
     * @return string
     */
    public function getUserEnabledAttribute()
    {
        return $this->container['userEnabledAttribute'];
    }

    /**
     * Sets userEnabledAttribute
     * @param string $userEnabledAttribute
     * @return $this
     */
    public function setUserEnabledAttribute($userEnabledAttribute)
    {
        $this->container['userEnabledAttribute'] = $userEnabledAttribute;

        return $this;
    }


    /**
     * Gets userLoginAttribute
     * @return string
     */
    public function getUserLoginAttribute()
    {
        return $this->container['userLoginAttribute'];
    }

    /**
     * Sets userLoginAttribute
     * @param string $userLoginAttribute
     * @return $this
     */
    public function setUserLoginAttribute($userLoginAttribute)
    {
        $this->container['userLoginAttribute'] = $userLoginAttribute;

        return $this;
    }


    /**
     * Gets userNameAttribute
     * @return string
     */
    public function getUserNameAttribute()
    {
        return $this->container['userNameAttribute'];
    }

    /**
     * Sets userNameAttribute
     * @param string $userNameAttribute
     * @return $this
     */
    public function setUserNameAttribute($userNameAttribute)
    {
        $this->container['userNameAttribute'] = $userNameAttribute;

        return $this;
    }


    /**
     * Gets userObjectClass
     * @return string
     */
    public function getUserObjectClass()
    {
        return $this->container['userObjectClass'];
    }

    /**
     * Sets userObjectClass
     * @param string $userObjectClass
     * @return $this
     */
    public function setUserObjectClass($userObjectClass)
    {
        $this->container['userObjectClass'] = $userObjectClass;

        return $this;
    }


    /**
     * Gets userSearchAttribute
     * @return string
     */
    public function getUserSearchAttribute()
    {
        return $this->container['userSearchAttribute'];
    }

    /**
     * Sets userSearchAttribute
     * @param string $userSearchAttribute
     * @return $this
     */
    public function setUserSearchAttribute($userSearchAttribute)
    {
        $this->container['userSearchAttribute'] = $userSearchAttribute;

        return $this;
    }


    /**
     * Gets userSearchBase
     * @return string
     */
    public function getUserSearchBase()
    {
        return $this->container['userSearchBase'];
    }

    /**
     * Sets userSearchBase
     * @param string $userSearchBase
     * @return $this
     */
    public function setUserSearchBase($userSearchBase)
    {
        $this->container['userSearchBase'] = $userSearchBase;

        return $this;
    }


    /**
     * Gets userSearchFilter
     * @return string
     */
    public function getUserSearchFilter()
    {
        return $this->container['userSearchFilter'];
    }

    /**
     * Sets userSearchFilter
     * @param string $userSearchFilter
     * @return $this
     */
    public function setUserSearchFilter($userSearchFilter)
    {
        $this->container['userSearchFilter'] = $userSearchFilter;

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

