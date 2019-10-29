<?php

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class PodSecurityPolicyTemplate extends AbstractFilter
{
    /**
     * Gets allowPrivilegeEscalation
     * @return string
     */
    public function getAllowPrivilegeEscalation()
    {
        return $this->container['allowPrivilegeEscalation'];
    }

    /**
     * Sets allowPrivilegeEscalation
     * @param string $allowPrivilegeEscalation
     * @param string $option
     * @return $this
     */
    public function setAllowPrivilegeEscalation($allowPrivilegeEscalation, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['allowPrivilegeEscalation'.$option] = $allowPrivilegeEscalation;

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
     * Gets defaultAllowPrivilegeEscalation
     * @return string
     */
    public function getDefaultAllowPrivilegeEscalation()
    {
        return $this->container['defaultAllowPrivilegeEscalation'];
    }

    /**
     * Sets defaultAllowPrivilegeEscalation
     * @param string $defaultAllowPrivilegeEscalation
     * @param string $option
     * @return $this
     */
    public function setDefaultAllowPrivilegeEscalation($defaultAllowPrivilegeEscalation, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['defaultAllowPrivilegeEscalation'.$option] = $defaultAllowPrivilegeEscalation;

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
     * Gets hostIPC
     * @return string
     */
    public function getHostIPC()
    {
        return $this->container['hostIPC'];
    }

    /**
     * Sets hostIPC
     * @param string $hostIPC
     * @param string $option
     * @return $this
     */
    public function setHostIPC($hostIPC, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['hostIPC'.$option] = $hostIPC;

        return $this;
    }


    /**
     * Gets hostNetwork
     * @return string
     */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
     * Sets hostNetwork
     * @param string $hostNetwork
     * @param string $option
     * @return $this
     */
    public function setHostNetwork($hostNetwork, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['hostNetwork'.$option] = $hostNetwork;

        return $this;
    }


    /**
     * Gets hostPID
     * @return string
     */
    public function getHostPID()
    {
        return $this->container['hostPID'];
    }

    /**
     * Sets hostPID
     * @param string $hostPID
     * @param string $option
     * @return $this
     */
    public function setHostPID($hostPID, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['hostPID'.$option] = $hostPID;

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
     * Gets privileged
     * @return string
     */
    public function getPrivileged()
    {
        return $this->container['privileged'];
    }

    /**
     * Sets privileged
     * @param string $privileged
     * @param string $option
     * @return $this
     */
    public function setPrivileged($privileged, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['privileged'.$option] = $privileged;

        return $this;
    }


    /**
     * Gets readOnlyRootFilesystem
     * @return string
     */
    public function getReadOnlyRootFilesystem()
    {
        return $this->container['readOnlyRootFilesystem'];
    }

    /**
     * Sets readOnlyRootFilesystem
     * @param string $readOnlyRootFilesystem
     * @param string $option
     * @return $this
     */
    public function setReadOnlyRootFilesystem($readOnlyRootFilesystem, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['readOnlyRootFilesystem'.$option] = $readOnlyRootFilesystem;

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