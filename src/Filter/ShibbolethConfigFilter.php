<?php

/**
 * ShibbolethConfigFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class ShibbolethConfigFilter extends AbstractFilter
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
     * @param string $option
     * @return $this
     */
    public function setDisplayNameField($displayNameField, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['displayNameField'.$option] = $displayNameField;

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
     * Gets entityID
     * @return string
     */
    public function getEntityID()
    {
        return $this->container['entityID'];
    }

    /**
     * Sets entityID
     * @param string $entityID
     * @param string $option
     * @return $this
     */
    public function setEntityID($entityID, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['entityID'.$option] = $entityID;

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
     * @param string $option
     * @return $this
     */
    public function setGroupsField($groupsField, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['groupsField'.$option] = $groupsField;

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
     * @param string $option
     * @return $this
     */
    public function setIdpMetadataContent($idpMetadataContent, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['idpMetadataContent'.$option] = $idpMetadataContent;

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
     * @param string $option
     * @return $this
     */
    public function setRancherApiHost($rancherApiHost, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['rancherApiHost'.$option] = $rancherApiHost;

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
     * @param string $option
     * @return $this
     */
    public function setSpCert($spCert, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['spCert'.$option] = $spCert;

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
     * @param string $option
     * @return $this
     */
    public function setUidField($uidField, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['uidField'.$option] = $uidField;

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
     * @param string $option
     * @return $this
     */
    public function setUserNameField($userNameField, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['userNameField'.$option] = $userNameField;

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