<?php

/**
 * ServiceMonitorFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class ServiceMonitorFilter extends AbstractFilter
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
     * Gets jobLabel
     * @return string
     */
    public function getJobLabel()
    {
        return $this->container['jobLabel'];
    }

    /**
     * Sets jobLabel
     * @param string $jobLabel
     * @param string $option
     * @return $this
     */
    public function setJobLabel($jobLabel, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['jobLabel'.$option] = $jobLabel;

        return $this;
    }


    /**
     * Gets labelLimit
     * @return string
     */
    public function getLabelLimit()
    {
        return $this->container['labelLimit'];
    }

    /**
     * Sets labelLimit
     * @param string $labelLimit
     * @param string $option
     * @return $this
     */
    public function setLabelLimit($labelLimit, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['labelLimit'.$option] = $labelLimit;

        return $this;
    }


    /**
     * Gets labelNameLengthLimit
     * @return string
     */
    public function getLabelNameLengthLimit()
    {
        return $this->container['labelNameLengthLimit'];
    }

    /**
     * Sets labelNameLengthLimit
     * @param string $labelNameLengthLimit
     * @param string $option
     * @return $this
     */
    public function setLabelNameLengthLimit($labelNameLengthLimit, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['labelNameLengthLimit'.$option] = $labelNameLengthLimit;

        return $this;
    }


    /**
     * Gets labelValueLengthLimit
     * @return string
     */
    public function getLabelValueLengthLimit()
    {
        return $this->container['labelValueLengthLimit'];
    }

    /**
     * Sets labelValueLengthLimit
     * @param string $labelValueLengthLimit
     * @param string $option
     * @return $this
     */
    public function setLabelValueLengthLimit($labelValueLengthLimit, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['labelValueLengthLimit'.$option] = $labelValueLengthLimit;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @param string $option
     * @return $this
     */
    public function setNamespaceId($namespaceId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['namespaceId'.$option] = $namespaceId;

        return $this;
    }


    /**
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @param string $option
     * @return $this
     */
    public function setProjectId($projectId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['projectId'.$option] = $projectId;

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
     * Gets sampleLimit
     * @return string
     */
    public function getSampleLimit()
    {
        return $this->container['sampleLimit'];
    }

    /**
     * Sets sampleLimit
     * @param string $sampleLimit
     * @param string $option
     * @return $this
     */
    public function setSampleLimit($sampleLimit, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['sampleLimit'.$option] = $sampleLimit;

        return $this;
    }


    /**
     * Gets targetLimit
     * @return string
     */
    public function getTargetLimit()
    {
        return $this->container['targetLimit'];
    }

    /**
     * Sets targetLimit
     * @param string $targetLimit
     * @param string $option
     * @return $this
     */
    public function setTargetLimit($targetLimit, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['targetLimit'.$option] = $targetLimit;

        return $this;
    }


    /**
     * Gets targetService
     * @return string
     */
    public function getTargetService()
    {
        return $this->container['targetService'];
    }

    /**
     * Sets targetService
     * @param string $targetService
     * @param string $option
     * @return $this
     */
    public function setTargetService($targetService, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['targetService'.$option] = $targetService;

        return $this;
    }


    /**
     * Gets targetWorkload
     * @return string
     */
    public function getTargetWorkload()
    {
        return $this->container['targetWorkload'];
    }

    /**
     * Sets targetWorkload
     * @param string $targetWorkload
     * @param string $option
     * @return $this
     */
    public function setTargetWorkload($targetWorkload, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['targetWorkload'.$option] = $targetWorkload;

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