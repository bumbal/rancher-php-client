<?php

/**
 * LdapFieldsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LdapFieldsModel implements ArrayAccess
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
        'certificate',
        'connectionTimeout',
        'groupDNAttribute',
        'groupMemberMappingAttribute',
        'groupMemberUserAttribute',
        'groupNameAttribute',
        'groupObjectClass',
        'groupSearchAttribute',
        'groupSearchBase',
        'groupSearchFilter',
        'nestedGroupMembershipEnabled',
        'port',
        'servers',
        'serviceAccountDistinguishedName',
        'serviceAccountPassword',
        'starttls',
        'tls',
        'userDisabledBitMask',
        'userEnabledAttribute',
        'userLoginAttribute',
        'userMemberAttribute',
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
        'certificate',
        'connectionTimeout',
        'groupDNAttribute',
        'groupMemberMappingAttribute',
        'groupMemberUserAttribute',
        'groupNameAttribute',
        'groupObjectClass',
        'groupSearchAttribute',
        'groupSearchBase',
        'groupSearchFilter',
        'nestedGroupMembershipEnabled',
        'port',
        'servers',
        'serviceAccountDistinguishedName',
        'serviceAccountPassword',
        'starttls',
        'tls',
        'userDisabledBitMask',
        'userEnabledAttribute',
        'userLoginAttribute',
        'userMemberAttribute',
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
        'certificate' => 'string',
        'connectionTimeout' => 'int',
        'groupDNAttribute' => 'string',
        'groupMemberMappingAttribute' => 'string',
        'groupMemberUserAttribute' => 'string',
        'groupNameAttribute' => 'string',
        'groupObjectClass' => 'string',
        'groupSearchAttribute' => 'string',
        'groupSearchBase' => 'string',
        'groupSearchFilter' => 'string',
        'nestedGroupMembershipEnabled' => 'boolean',
        'port' => 'int',
        'servers' => 'string[]',
        'serviceAccountDistinguishedName' => 'string',
        'serviceAccountPassword' => '\Rancher\Model\PasswordModel',
        'starttls' => 'boolean',
        'tls' => 'boolean',
        'userDisabledBitMask' => 'int',
        'userEnabledAttribute' => 'string',
        'userLoginAttribute' => 'string',
        'userMemberAttribute' => 'string',
        'userNameAttribute' => 'string',
        'userObjectClass' => 'string',
        'userSearchAttribute' => 'string',
        'userSearchBase' => 'string',
        'userSearchFilter' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'certificate' => 'setCertificate',
        'connectionTimeout' => 'setConnectionTimeout',
        'groupDNAttribute' => 'setGroupDNAttribute',
        'groupMemberMappingAttribute' => 'setGroupMemberMappingAttribute',
        'groupMemberUserAttribute' => 'setGroupMemberUserAttribute',
        'groupNameAttribute' => 'setGroupNameAttribute',
        'groupObjectClass' => 'setGroupObjectClass',
        'groupSearchAttribute' => 'setGroupSearchAttribute',
        'groupSearchBase' => 'setGroupSearchBase',
        'groupSearchFilter' => 'setGroupSearchFilter',
        'nestedGroupMembershipEnabled' => 'setNestedGroupMembershipEnabled',
        'port' => 'setPort',
        'servers' => 'setServers',
        'serviceAccountDistinguishedName' => 'setServiceAccountDistinguishedName',
        'serviceAccountPassword' => 'setServiceAccountPassword',
        'starttls' => 'setStarttls',
        'tls' => 'setTls',
        'userDisabledBitMask' => 'setUserDisabledBitMask',
        'userEnabledAttribute' => 'setUserEnabledAttribute',
        'userLoginAttribute' => 'setUserLoginAttribute',
        'userMemberAttribute' => 'setUserMemberAttribute',
        'userNameAttribute' => 'setUserNameAttribute',
        'userObjectClass' => 'setUserObjectClass',
        'userSearchAttribute' => 'setUserSearchAttribute',
        'userSearchBase' => 'setUserSearchBase',
        'userSearchFilter' => 'setUserSearchFilter',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'certificate' => 'getCertificate',
        'connectionTimeout' => 'getConnectionTimeout',
        'groupDNAttribute' => 'getGroupDNAttribute',
        'groupMemberMappingAttribute' => 'getGroupMemberMappingAttribute',
        'groupMemberUserAttribute' => 'getGroupMemberUserAttribute',
        'groupNameAttribute' => 'getGroupNameAttribute',
        'groupObjectClass' => 'getGroupObjectClass',
        'groupSearchAttribute' => 'getGroupSearchAttribute',
        'groupSearchBase' => 'getGroupSearchBase',
        'groupSearchFilter' => 'getGroupSearchFilter',
        'nestedGroupMembershipEnabled' => 'getNestedGroupMembershipEnabled',
        'port' => 'getPort',
        'servers' => 'getServers',
        'serviceAccountDistinguishedName' => 'getServiceAccountDistinguishedName',
        'serviceAccountPassword' => 'getServiceAccountPassword',
        'starttls' => 'getStarttls',
        'tls' => 'getTls',
        'userDisabledBitMask' => 'getUserDisabledBitMask',
        'userEnabledAttribute' => 'getUserEnabledAttribute',
        'userLoginAttribute' => 'getUserLoginAttribute',
        'userMemberAttribute' => 'getUserMemberAttribute',
        'userNameAttribute' => 'getUserNameAttribute',
        'userObjectClass' => 'getUserObjectClass',
        'userSearchAttribute' => 'getUserSearchAttribute',
        'userSearchBase' => 'getUserSearchBase',
        'userSearchFilter' => 'getUserSearchFilter',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['connectionTimeout'] = isset($data['connectionTimeout']) ? $data['connectionTimeout'] : null;
        $this->container['groupDNAttribute'] = isset($data['groupDNAttribute']) ? $data['groupDNAttribute'] : null;
        $this->container['groupMemberMappingAttribute'] = isset($data['groupMemberMappingAttribute']) ? $data['groupMemberMappingAttribute'] : null;
        $this->container['groupMemberUserAttribute'] = isset($data['groupMemberUserAttribute']) ? $data['groupMemberUserAttribute'] : null;
        $this->container['groupNameAttribute'] = isset($data['groupNameAttribute']) ? $data['groupNameAttribute'] : null;
        $this->container['groupObjectClass'] = isset($data['groupObjectClass']) ? $data['groupObjectClass'] : null;
        $this->container['groupSearchAttribute'] = isset($data['groupSearchAttribute']) ? $data['groupSearchAttribute'] : null;
        $this->container['groupSearchBase'] = isset($data['groupSearchBase']) ? $data['groupSearchBase'] : null;
        $this->container['groupSearchFilter'] = isset($data['groupSearchFilter']) ? $data['groupSearchFilter'] : null;
        $this->container['nestedGroupMembershipEnabled'] = isset($data['nestedGroupMembershipEnabled']) ? $data['nestedGroupMembershipEnabled'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['serviceAccountDistinguishedName'] = isset($data['serviceAccountDistinguishedName']) ? $data['serviceAccountDistinguishedName'] : null;
        $this->container['serviceAccountPassword'] = isset($data['serviceAccountPassword']) ? $data['serviceAccountPassword'] : null;
        $this->container['starttls'] = isset($data['starttls']) ? $data['starttls'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['userDisabledBitMask'] = isset($data['userDisabledBitMask']) ? $data['userDisabledBitMask'] : null;
        $this->container['userEnabledAttribute'] = isset($data['userEnabledAttribute']) ? $data['userEnabledAttribute'] : null;
        $this->container['userLoginAttribute'] = isset($data['userLoginAttribute']) ? $data['userLoginAttribute'] : null;
        $this->container['userMemberAttribute'] = isset($data['userMemberAttribute']) ? $data['userMemberAttribute'] : null;
        $this->container['userNameAttribute'] = isset($data['userNameAttribute']) ? $data['userNameAttribute'] : null;
        $this->container['userObjectClass'] = isset($data['userObjectClass']) ? $data['userObjectClass'] : null;
        $this->container['userSearchAttribute'] = isset($data['userSearchAttribute']) ? $data['userSearchAttribute'] : null;
        $this->container['userSearchBase'] = isset($data['userSearchBase']) ? $data['userSearchBase'] : null;
        $this->container['userSearchFilter'] = isset($data['userSearchFilter']) ? $data['userSearchFilter'] : null;
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
     * Gets serviceAccountDistinguishedName
     * @return string
     */
    public function getServiceAccountDistinguishedName()
    {
        return $this->container['serviceAccountDistinguishedName'];
    }

    /**
     * Sets serviceAccountDistinguishedName
     * @param string $serviceAccountDistinguishedName
     * @return $this
     */
    public function setServiceAccountDistinguishedName($serviceAccountDistinguishedName)
    {
        $this->container['serviceAccountDistinguishedName'] = $serviceAccountDistinguishedName;

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
     * Gets userMemberAttribute
     * @return string
     */
    public function getUserMemberAttribute()
    {
        return $this->container['userMemberAttribute'];
    }

    /**
     * Sets userMemberAttribute
     * @param string $userMemberAttribute
     * @return $this
     */
    public function setUserMemberAttribute($userMemberAttribute)
    {
        $this->container['userMemberAttribute'] = $userMemberAttribute;

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

