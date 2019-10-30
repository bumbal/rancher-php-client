<?php

/**
 * RoleTemplateFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class RoleTemplateFilter extends AbstractFilter
{
    /**
     * Gets administrative
     * @return string
     */
    public function getAdministrative()
    {
        return $this->container['administrative'];
    }

    /**
     * Sets administrative
     * @param string $administrative
     * @param string $option
     * @return $this
     */
    public function setAdministrative($administrative, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['administrative'.$option] = $administrative;

        return $this;
    }


    /**
     * Gets builtin
     * @return string
     */
    public function getBuiltin()
    {
        return $this->container['builtin'];
    }

    /**
     * Sets builtin
     * @param string $builtin
     * @param string $option
     * @return $this
     */
    public function setBuiltin($builtin, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['builtin'.$option] = $builtin;

        return $this;
    }


    /**
     * Gets clusterCreatorDefault
     * @return string
     */
    public function getClusterCreatorDefault()
    {
        return $this->container['clusterCreatorDefault'];
    }

    /**
     * Sets clusterCreatorDefault
     * @param string $clusterCreatorDefault
     * @param string $option
     * @return $this
     */
    public function setClusterCreatorDefault($clusterCreatorDefault, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['clusterCreatorDefault'.$option] = $clusterCreatorDefault;

        return $this;
    }


    /**
     * Gets context
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param string $context
     * @param string $option
     * @return $this
     */
    public function setContext($context, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['context'.$option] = $context;

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
     * Gets external
     * @return string
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     * @param string $external
     * @param string $option
     * @return $this
     */
    public function setExternal($external, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['external'.$option] = $external;

        return $this;
    }


    /**
     * Gets hidden
     * @return string
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     * @param string $hidden
     * @param string $option
     * @return $this
     */
    public function setHidden($hidden, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['hidden'.$option] = $hidden;

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
     * Gets locked
     * @return string
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param string $locked
     * @param string $option
     * @return $this
     */
    public function setLocked($locked, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['locked'.$option] = $locked;

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
     * Gets projectCreatorDefault
     * @return string
     */
    public function getProjectCreatorDefault()
    {
        return $this->container['projectCreatorDefault'];
    }

    /**
     * Sets projectCreatorDefault
     * @param string $projectCreatorDefault
     * @param string $option
     * @return $this
     */
    public function setProjectCreatorDefault($projectCreatorDefault, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['projectCreatorDefault'.$option] = $projectCreatorDefault;

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