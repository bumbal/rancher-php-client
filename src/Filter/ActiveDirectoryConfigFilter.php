<?php

/**
 * ActiveDirectoryConfigFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class ActiveDirectoryConfigFilter extends AbstractFilter
{
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
     * @param string $option
     * @return $this
     */
    public function setAccessMode($accessMode, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['accessMode'.$option] = $accessMode;

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
     * @param string $option
     * @return $this
     */
    public function setCertificate($certificate, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['certificate'.$option] = $certificate;

        return $this;
    }


    /**
     * Gets connectionTimeout
     * @return string
     */
    public function getConnectionTimeout()
    {
        return $this->container['connectionTimeout'];
    }

    /**
     * Sets connectionTimeout
     * @param string $connectionTimeout
     * @param string $option
     * @return $this
     */
    public function setConnectionTimeout($connectionTimeout, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['connectionTimeout'.$option] = $connectionTimeout;

        return $this;
    }


    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created
     * @param string $option
     * @return $this
     */
    public function setCreated($created, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['created'.$option] = $created;

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
     * @param string $option
     * @return $this
     */
    public function setCreatorId($creatorId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['creatorId'.$option] = $creatorId;

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
     * @param string $option
     * @return $this
     */
    public function setDefaultLoginDomain($defaultLoginDomain, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['defaultLoginDomain'.$option] = $defaultLoginDomain;

        return $this;
    }


    /**
     * Gets enabled
     * @return string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param string $enabled
     * @param string $option
     * @return $this
     */
    public function setEnabled($enabled, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enabled'.$option] = $enabled;

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
     * @param string $option
     * @return $this
     */
    public function setGroupDNAttribute($groupDNAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupDNAttribute'.$option] = $groupDNAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setGroupMemberMappingAttribute($groupMemberMappingAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupMemberMappingAttribute'.$option] = $groupMemberMappingAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setGroupMemberUserAttribute($groupMemberUserAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupMemberUserAttribute'.$option] = $groupMemberUserAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setGroupNameAttribute($groupNameAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupNameAttribute'.$option] = $groupNameAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setGroupObjectClass($groupObjectClass, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupObjectClass'.$option] = $groupObjectClass;

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
     * @param string $option
     * @return $this
     */
    public function setGroupSearchAttribute($groupSearchAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupSearchAttribute'.$option] = $groupSearchAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setGroupSearchBase($groupSearchBase, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupSearchBase'.$option] = $groupSearchBase;

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
     * @param string $option
     * @return $this
     */
    public function setGroupSearchFilter($groupSearchFilter, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupSearchFilter'.$option] = $groupSearchFilter;

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
     * @param string $option
     * @return $this
     */
    public function setName($name, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['name'.$option] = $name;

        return $this;
    }


    /**
     * Gets nestedGroupMembershipEnabled
     * @return string
     */
    public function getNestedGroupMembershipEnabled()
    {
        return $this->container['nestedGroupMembershipEnabled'];
    }

    /**
     * Sets nestedGroupMembershipEnabled
     * @param string $nestedGroupMembershipEnabled
     * @param string $option
     * @return $this
     */
    public function setNestedGroupMembershipEnabled($nestedGroupMembershipEnabled, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nestedGroupMembershipEnabled'.$option] = $nestedGroupMembershipEnabled;

        return $this;
    }


    /**
     * Gets port
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param string $port
     * @param string $option
     * @return $this
     */
    public function setPort($port, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['port'.$option] = $port;

        return $this;
    }


    /**
     * Gets removed
     * @return string
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param string $removed
     * @param string $option
     * @return $this
     */
    public function setRemoved($removed, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['removed'.$option] = $removed;

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
     * @param string $option
     * @return $this
     */
    public function setServiceAccountUsername($serviceAccountUsername, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['serviceAccountUsername'.$option] = $serviceAccountUsername;

        return $this;
    }


    /**
     * Gets starttls
     * @return string
     */
    public function getStarttls()
    {
        return $this->container['starttls'];
    }

    /**
     * Sets starttls
     * @param string $starttls
     * @param string $option
     * @return $this
     */
    public function setStarttls($starttls, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['starttls'.$option] = $starttls;

        return $this;
    }


    /**
     * Gets tls
     * @return string
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     * @param string $tls
     * @param string $option
     * @return $this
     */
    public function setTls($tls, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['tls'.$option] = $tls;

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
     * @param string $option
     * @return $this
     */
    public function setType($type, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['type'.$option] = $type;

        return $this;
    }


    /**
     * Gets userDisabledBitMask
     * @return string
     */
    public function getUserDisabledBitMask()
    {
        return $this->container['userDisabledBitMask'];
    }

    /**
     * Sets userDisabledBitMask
     * @param string $userDisabledBitMask
     * @param string $option
     * @return $this
     */
    public function setUserDisabledBitMask($userDisabledBitMask, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userDisabledBitMask'.$option] = $userDisabledBitMask;

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
     * @param string $option
     * @return $this
     */
    public function setUserEnabledAttribute($userEnabledAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userEnabledAttribute'.$option] = $userEnabledAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setUserLoginAttribute($userLoginAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userLoginAttribute'.$option] = $userLoginAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setUserNameAttribute($userNameAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userNameAttribute'.$option] = $userNameAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setUserObjectClass($userObjectClass, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userObjectClass'.$option] = $userObjectClass;

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
     * @param string $option
     * @return $this
     */
    public function setUserSearchAttribute($userSearchAttribute, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userSearchAttribute'.$option] = $userSearchAttribute;

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
     * @param string $option
     * @return $this
     */
    public function setUserSearchBase($userSearchBase, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userSearchBase'.$option] = $userSearchBase;

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
     * @param string $option
     * @return $this
     */
    public function setUserSearchFilter($userSearchFilter, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userSearchFilter'.$option] = $userSearchFilter;

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
     * @param string $option
     * @return $this
     */
    public function setUuid($uuid, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['uuid'.$option] = $uuid;

        return $this;
    }
}