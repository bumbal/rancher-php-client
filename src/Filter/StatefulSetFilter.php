<?php

/**
 * StatefulSetFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class StatefulSetFilter extends AbstractFilter
{
    /**
     * Gets activeDeadlineSeconds
     * @return string
     */
    public function getActiveDeadlineSeconds()
    {
        return $this->container['activeDeadlineSeconds'];
    }

    /**
     * Sets activeDeadlineSeconds
     * @param string $activeDeadlineSeconds
     * @param string $option
     * @return $this
     */
    public function setActiveDeadlineSeconds($activeDeadlineSeconds, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['activeDeadlineSeconds'.$option] = $activeDeadlineSeconds;

        return $this;
    }


    /**
     * Gets automountServiceAccountToken
     * @return string
     */
    public function getAutomountServiceAccountToken()
    {
        return $this->container['automountServiceAccountToken'];
    }

    /**
     * Sets automountServiceAccountToken
     * @param string $automountServiceAccountToken
     * @param string $option
     * @return $this
     */
    public function setAutomountServiceAccountToken($automountServiceAccountToken, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['automountServiceAccountToken'.$option] = $automountServiceAccountToken;

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
     * Gets dnsPolicy
     * @return string
     */
    public function getDnsPolicy()
    {
        return $this->container['dnsPolicy'];
    }

    /**
     * Sets dnsPolicy
     * @param string $dnsPolicy
     * @param string $option
     * @return $this
     */
    public function setDnsPolicy($dnsPolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['dnsPolicy'.$option] = $dnsPolicy;

        return $this;
    }


    /**
     * Gets enableServiceLinks
     * @return string
     */
    public function getEnableServiceLinks()
    {
        return $this->container['enableServiceLinks'];
    }

    /**
     * Sets enableServiceLinks
     * @param string $enableServiceLinks
     * @param string $option
     * @return $this
     */
    public function setEnableServiceLinks($enableServiceLinks, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enableServiceLinks'.$option] = $enableServiceLinks;

        return $this;
    }


    /**
     * Gets fsGroupChangePolicy
     * @return string
     */
    public function getFsGroupChangePolicy()
    {
        return $this->container['fsGroupChangePolicy'];
    }

    /**
     * Sets fsGroupChangePolicy
     * @param string $fsGroupChangePolicy
     * @param string $option
     * @return $this
     */
    public function setFsGroupChangePolicy($fsGroupChangePolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['fsGroupChangePolicy'.$option] = $fsGroupChangePolicy;

        return $this;
    }


    /**
     * Gets fsgid
     * @return string
     */
    public function getFsgid()
    {
        return $this->container['fsgid'];
    }

    /**
     * Sets fsgid
     * @param string $fsgid
     * @param string $option
     * @return $this
     */
    public function setFsgid($fsgid, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['fsgid'.$option] = $fsgid;

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
     * Gets hostUsers
     * @return string
     */
    public function getHostUsers()
    {
        return $this->container['hostUsers'];
    }

    /**
     * Sets hostUsers
     * @param string $hostUsers
     * @param string $option
     * @return $this
     */
    public function setHostUsers($hostUsers, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['hostUsers'.$option] = $hostUsers;

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
     * Gets minReadySeconds
     * @return string
     */
    public function getMinReadySeconds()
    {
        return $this->container['minReadySeconds'];
    }

    /**
     * Sets minReadySeconds
     * @param string $minReadySeconds
     * @param string $option
     * @return $this
     */
    public function setMinReadySeconds($minReadySeconds, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['minReadySeconds'.$option] = $minReadySeconds;

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
     * Gets nodeId
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     * @param string $nodeId
     * @param string $option
     * @return $this
     */
    public function setNodeId($nodeId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nodeId'.$option] = $nodeId;

        return $this;
    }


    /**
     * Gets preemptionPolicy
     * @return string
     */
    public function getPreemptionPolicy()
    {
        return $this->container['preemptionPolicy'];
    }

    /**
     * Sets preemptionPolicy
     * @param string $preemptionPolicy
     * @param string $option
     * @return $this
     */
    public function setPreemptionPolicy($preemptionPolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['preemptionPolicy'.$option] = $preemptionPolicy;

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
     * Gets restartPolicy
     * @return string
     */
    public function getRestartPolicy()
    {
        return $this->container['restartPolicy'];
    }

    /**
     * Sets restartPolicy
     * @param string $restartPolicy
     * @param string $option
     * @return $this
     */
    public function setRestartPolicy($restartPolicy, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['restartPolicy'.$option] = $restartPolicy;

        return $this;
    }


    /**
     * Gets runAsGroup
     * @return string
     */
    public function getRunAsGroup()
    {
        return $this->container['runAsGroup'];
    }

    /**
     * Sets runAsGroup
     * @param string $runAsGroup
     * @param string $option
     * @return $this
     */
    public function setRunAsGroup($runAsGroup, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['runAsGroup'.$option] = $runAsGroup;

        return $this;
    }


    /**
     * Gets runAsNonRoot
     * @return string
     */
    public function getRunAsNonRoot()
    {
        return $this->container['runAsNonRoot'];
    }

    /**
     * Sets runAsNonRoot
     * @param string $runAsNonRoot
     * @param string $option
     * @return $this
     */
    public function setRunAsNonRoot($runAsNonRoot, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['runAsNonRoot'.$option] = $runAsNonRoot;

        return $this;
    }


    /**
     * Gets runtimeClassName
     * @return string
     */
    public function getRuntimeClassName()
    {
        return $this->container['runtimeClassName'];
    }

    /**
     * Sets runtimeClassName
     * @param string $runtimeClassName
     * @param string $option
     * @return $this
     */
    public function setRuntimeClassName($runtimeClassName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['runtimeClassName'.$option] = $runtimeClassName;

        return $this;
    }


    /**
     * Gets scale
     * @return string
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     * @param string $scale
     * @param string $option
     * @return $this
     */
    public function setScale($scale, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['scale'.$option] = $scale;

        return $this;
    }


    /**
     * Gets serviceAccountName
     * @return string
     */
    public function getServiceAccountName()
    {
        return $this->container['serviceAccountName'];
    }

    /**
     * Sets serviceAccountName
     * @param string $serviceAccountName
     * @param string $option
     * @return $this
     */
    public function setServiceAccountName($serviceAccountName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['serviceAccountName'.$option] = $serviceAccountName;

        return $this;
    }


    /**
     * Gets setHostnameAsFQDN
     * @return string
     */
    public function getSetHostnameAsFQDN()
    {
        return $this->container['setHostnameAsFQDN'];
    }

    /**
     * Sets setHostnameAsFQDN
     * @param string $setHostnameAsFQDN
     * @param string $option
     * @return $this
     */
    public function setSetHostnameAsFQDN($setHostnameAsFQDN, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['setHostnameAsFQDN'.$option] = $setHostnameAsFQDN;

        return $this;
    }


    /**
     * Gets shareProcessNamespace
     * @return string
     */
    public function getShareProcessNamespace()
    {
        return $this->container['shareProcessNamespace'];
    }

    /**
     * Sets shareProcessNamespace
     * @param string $shareProcessNamespace
     * @param string $option
     * @return $this
     */
    public function setShareProcessNamespace($shareProcessNamespace, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['shareProcessNamespace'.$option] = $shareProcessNamespace;

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
     * Gets subdomain
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     * @param string $subdomain
     * @param string $option
     * @return $this
     */
    public function setSubdomain($subdomain, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['subdomain'.$option] = $subdomain;

        return $this;
    }


    /**
     * Gets terminationGracePeriodSeconds
     * @return string
     */
    public function getTerminationGracePeriodSeconds()
    {
        return $this->container['terminationGracePeriodSeconds'];
    }

    /**
     * Sets terminationGracePeriodSeconds
     * @param string $terminationGracePeriodSeconds
     * @param string $option
     * @return $this
     */
    public function setTerminationGracePeriodSeconds($terminationGracePeriodSeconds, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['terminationGracePeriodSeconds'.$option] = $terminationGracePeriodSeconds;

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
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param string $uid
     * @param string $option
     * @return $this
     */
    public function setUid($uid, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['uid'.$option] = $uid;

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