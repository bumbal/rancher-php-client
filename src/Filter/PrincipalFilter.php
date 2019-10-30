<?php

/**
 * PrincipalFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class PrincipalFilter extends AbstractFilter
{
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
     * @param string $option
     * @return $this
     */
    public function setId($id, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['id'.$option] = $id;

        return $this;
    }


    /**
     * Gets loginName
     * @return string
     */
    public function getLoginName()
    {
        return $this->container['loginName'];
    }

    /**
     * Sets loginName
     * @param string $loginName
     * @param string $option
     * @return $this
     */
    public function setLoginName($loginName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['loginName'.$option] = $loginName;

        return $this;
    }


    /**
     * Gets me
     * @return string
     */
    public function getMe()
    {
        return $this->container['me'];
    }

    /**
     * Sets me
     * @param string $me
     * @param string $option
     * @return $this
     */
    public function setMe($me, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['me'.$option] = $me;

        return $this;
    }


    /**
     * Gets memberOf
     * @return string
     */
    public function getMemberOf()
    {
        return $this->container['memberOf'];
    }

    /**
     * Sets memberOf
     * @param string $memberOf
     * @param string $option
     * @return $this
     */
    public function setMemberOf($memberOf, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['memberOf'.$option] = $memberOf;

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
     * Gets principalType
     * @return string
     */
    public function getPrincipalType()
    {
        return $this->container['principalType'];
    }

    /**
     * Sets principalType
     * @param string $principalType
     * @param string $option
     * @return $this
     */
    public function setPrincipalType($principalType, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['principalType'.$option] = $principalType;

        return $this;
    }


    /**
     * Gets profilePicture
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->container['profilePicture'];
    }

    /**
     * Sets profilePicture
     * @param string $profilePicture
     * @param string $option
     * @return $this
     */
    public function setProfilePicture($profilePicture, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['profilePicture'.$option] = $profilePicture;

        return $this;
    }


    /**
     * Gets profileURL
     * @return string
     */
    public function getProfileURL()
    {
        return $this->container['profileURL'];
    }

    /**
     * Sets profileURL
     * @param string $profileURL
     * @param string $option
     * @return $this
     */
    public function setProfileURL($profileURL, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['profileURL'.$option] = $profileURL;

        return $this;
    }


    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @param string $option
     * @return $this
     */
    public function setProvider($provider, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['provider'.$option] = $provider;

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