<?php

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class AzureADConfig extends AbstractFilter
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
     * @param string $option
     * @return $this
     */
    public function setApplicationId($applicationId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['applicationId'.$option] = $applicationId;

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
     * @param string $option
     * @return $this
     */
    public function setAuthEndpoint($authEndpoint, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['authEndpoint'.$option] = $authEndpoint;

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
     * @param string $option
     * @return $this
     */
    public function setEndpoint($endpoint, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['endpoint'.$option] = $endpoint;

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
     * @param string $option
     * @return $this
     */
    public function setGraphEndpoint($graphEndpoint, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['graphEndpoint'.$option] = $graphEndpoint;

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
     * @param string $option
     * @return $this
     */
    public function setRancherUrl($rancherUrl, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['rancherUrl'.$option] = $rancherUrl;

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
     * @param string $option
     * @return $this
     */
    public function setTenantId($tenantId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['tenantId'.$option] = $tenantId;

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
     * @param string $option
     * @return $this
     */
    public function setTokenEndpoint($tokenEndpoint, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['tokenEndpoint'.$option] = $tokenEndpoint;

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