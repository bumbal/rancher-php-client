<?php

/**
 * StorageClassFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class StorageClassFilter extends AbstractFilter
{
    /**
     * Gets allowVolumeExpansion
     * @return string
     */
    public function getAllowVolumeExpansion()
    {
        return $this->container['allowVolumeExpansion'];
    }

    /**
     * Sets allowVolumeExpansion
     * @param string $allowVolumeExpansion
     * @param string $option
     * @return $this
     */
    public function setAllowVolumeExpansion($allowVolumeExpansion, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['allowVolumeExpansion'.$option] = $allowVolumeExpansion;

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
     * @param string $option
     * @return $this
     */
    public function setDescription($description, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['description'.$option] = $description;

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
     * Gets provisioner
     * @return string
     */
    public function getProvisioner()
    {
        return $this->container['provisioner'];
    }

    /**
     * Sets provisioner
     * @param string $provisioner
     * @param string $option
     * @return $this
     */
    public function setProvisioner($provisioner, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['provisioner'.$option] = $provisioner;

        return $this;
    }


    /**
     * Gets reclaimPolicy
     * @return string
     */
    public function getReclaimPolicy()
    {
        return $this->container['reclaimPolicy'];
    }

    /**
     * Sets reclaimPolicy
     * @param string $reclaimPolicy
     * @param string $option
     * @return $this
     */
    public function setReclaimPolicy($reclaimPolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['reclaimPolicy'.$option] = $reclaimPolicy;

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


    /**
     * Gets volumeBindingMode
     * @return string
     */
    public function getVolumeBindingMode()
    {
        return $this->container['volumeBindingMode'];
    }

    /**
     * Sets volumeBindingMode
     * @param string $volumeBindingMode
     * @param string $option
     * @return $this
     */
    public function setVolumeBindingMode($volumeBindingMode, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['volumeBindingMode'.$option] = $volumeBindingMode;

        return $this;
    }
}