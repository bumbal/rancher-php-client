<?php

/**
 * NodeFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class NodeFilter extends AbstractFilter
{
    /**
     * Gets appliedNodeVersion
     * @return string
     */
    public function getAppliedNodeVersion()
    {
        return $this->container['appliedNodeVersion'];
    }

    /**
     * Sets appliedNodeVersion
     * @param string $appliedNodeVersion
     * @param string $option
     * @return $this
     */
    public function setAppliedNodeVersion($appliedNodeVersion, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['appliedNodeVersion'.$option] = $appliedNodeVersion;

        return $this;
    }


    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @param string $option
     * @return $this
     */
    public function setClusterId($clusterId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['clusterId'.$option] = $clusterId;

        return $this;
    }


    /**
     * Gets controlPlane
     * @return string
     */
    public function getControlPlane()
    {
        return $this->container['controlPlane'];
    }

    /**
     * Sets controlPlane
     * @param string $controlPlane
     * @param string $option
     * @return $this
     */
    public function setControlPlane($controlPlane, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['controlPlane'.$option] = $controlPlane;

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
     * Gets etcd
     * @return string
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param string $etcd
     * @param string $option
     * @return $this
     */
    public function setEtcd($etcd, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['etcd'.$option] = $etcd;

        return $this;
    }


    /**
     * Gets externalIpAddress
     * @return string
     */
    public function getExternalIpAddress()
    {
        return $this->container['externalIpAddress'];
    }

    /**
     * Sets externalIpAddress
     * @param string $externalIpAddress
     * @param string $option
     * @return $this
     */
    public function setExternalIpAddress($externalIpAddress, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['externalIpAddress'.$option] = $externalIpAddress;

        return $this;
    }


    /**
     * Gets hostname
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     * @param string $hostname
     * @param string $option
     * @return $this
     */
    public function setHostname($hostname, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['hostname'.$option] = $hostname;

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
     * Gets imported
     * @return string
     */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
     * Sets imported
     * @param string $imported
     * @param string $option
     * @return $this
     */
    public function setImported($imported, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['imported'.$option] = $imported;

        return $this;
    }


    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress
     * @param string $option
     * @return $this
     */
    public function setIpAddress($ipAddress, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['ipAddress'.$option] = $ipAddress;

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
     * Gets nodeName
     * @return string
     */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
     * Sets nodeName
     * @param string $nodeName
     * @param string $option
     * @return $this
     */
    public function setNodeName($nodeName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nodeName'.$option] = $nodeName;

        return $this;
    }


    /**
     * Gets nodePoolId
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->container['nodePoolId'];
    }

    /**
     * Sets nodePoolId
     * @param string $nodePoolId
     * @param string $option
     * @return $this
     */
    public function setNodePoolId($nodePoolId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nodePoolId'.$option] = $nodePoolId;

        return $this;
    }


    /**
     * Gets nodeTemplateId
     * @return string
     */
    public function getNodeTemplateId()
    {
        return $this->container['nodeTemplateId'];
    }

    /**
     * Sets nodeTemplateId
     * @param string $nodeTemplateId
     * @param string $option
     * @return $this
     */
    public function setNodeTemplateId($nodeTemplateId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nodeTemplateId'.$option] = $nodeTemplateId;

        return $this;
    }


    /**
     * Gets podCidr
     * @return string
     */
    public function getPodCidr()
    {
        return $this->container['podCidr'];
    }

    /**
     * Sets podCidr
     * @param string $podCidr
     * @param string $option
     * @return $this
     */
    public function setPodCidr($podCidr, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['podCidr'.$option] = $podCidr;

        return $this;
    }


    /**
     * Gets providerId
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     * @param string $providerId
     * @param string $option
     * @return $this
     */
    public function setProviderId($providerId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['providerId'.$option] = $providerId;

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
     * Gets requestedHostname
     * @return string
     */
    public function getRequestedHostname()
    {
        return $this->container['requestedHostname'];
    }

    /**
     * Sets requestedHostname
     * @param string $requestedHostname
     * @param string $option
     * @return $this
     */
    public function setRequestedHostname($requestedHostname, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['requestedHostname'.$option] = $requestedHostname;

        return $this;
    }


    /**
     * Gets scaledownTime
     * @return string
     */
    public function getScaledownTime()
    {
        return $this->container['scaledownTime'];
    }

    /**
     * Sets scaledownTime
     * @param string $scaledownTime
     * @param string $option
     * @return $this
     */
    public function setScaledownTime($scaledownTime, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['scaledownTime'.$option] = $scaledownTime;

        return $this;
    }


    /**
     * Gets sshUser
     * @return string
     */
    public function getSshUser()
    {
        return $this->container['sshUser'];
    }

    /**
     * Sets sshUser
     * @param string $sshUser
     * @param string $option
     * @return $this
     */
    public function setSshUser($sshUser, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['sshUser'.$option] = $sshUser;

        return $this;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @param string $option
     * @return $this
     */
    public function setState($state, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['state'.$option] = $state;

        return $this;
    }


    /**
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @param string $option
     * @return $this
     */
    public function setTransitioning($transitioning, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['transitioning'.$option] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @param string $option
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['transitioningMessage'.$option] = $transitioningMessage;

        return $this;
    }


    /**
     * Gets unschedulable
     * @return string
     */
    public function getUnschedulable()
    {
        return $this->container['unschedulable'];
    }

    /**
     * Sets unschedulable
     * @param string $unschedulable
     * @param string $option
     * @return $this
     */
    public function setUnschedulable($unschedulable, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['unschedulable'.$option] = $unschedulable;

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
     * Gets worker
     * @return string
     */
    public function getWorker()
    {
        return $this->container['worker'];
    }

    /**
     * Sets worker
     * @param string $worker
     * @param string $option
     * @return $this
     */
    public function setWorker($worker, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['worker'.$option] = $worker;

        return $this;
    }
}