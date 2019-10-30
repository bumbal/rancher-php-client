<?php

/**
 * PipelineFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class PipelineFilter extends AbstractFilter
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
     * Gets lastExecutionId
     * @return string
     */
    public function getLastExecutionId()
    {
        return $this->container['lastExecutionId'];
    }

    /**
     * Sets lastExecutionId
     * @param string $lastExecutionId
     * @param string $option
     * @return $this
     */
    public function setLastExecutionId($lastExecutionId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['lastExecutionId'.$option] = $lastExecutionId;

        return $this;
    }


    /**
     * Gets lastRunState
     * @return string
     */
    public function getLastRunState()
    {
        return $this->container['lastRunState'];
    }

    /**
     * Sets lastRunState
     * @param string $lastRunState
     * @param string $option
     * @return $this
     */
    public function setLastRunState($lastRunState, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['lastRunState'.$option] = $lastRunState;

        return $this;
    }


    /**
     * Gets lastStarted
     * @return string
     */
    public function getLastStarted()
    {
        return $this->container['lastStarted'];
    }

    /**
     * Sets lastStarted
     * @param string $lastStarted
     * @param string $option
     * @return $this
     */
    public function setLastStarted($lastStarted, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['lastStarted'.$option] = $lastStarted;

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
     * Gets nextRun
     * @return string
     */
    public function getNextRun()
    {
        return $this->container['nextRun'];
    }

    /**
     * Sets nextRun
     * @param string $nextRun
     * @param string $option
     * @return $this
     */
    public function setNextRun($nextRun, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nextRun'.$option] = $nextRun;

        return $this;
    }


    /**
     * Gets nextStart
     * @return string
     */
    public function getNextStart()
    {
        return $this->container['nextStart'];
    }

    /**
     * Sets nextStart
     * @param string $nextStart
     * @param string $option
     * @return $this
     */
    public function setNextStart($nextStart, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['nextStart'.$option] = $nextStart;

        return $this;
    }


    /**
     * Gets pipelineState
     * @return string
     */
    public function getPipelineState()
    {
        return $this->container['pipelineState'];
    }

    /**
     * Sets pipelineState
     * @param string $pipelineState
     * @param string $option
     * @return $this
     */
    public function setPipelineState($pipelineState, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['pipelineState'.$option] = $pipelineState;

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
     * Gets repositoryUrl
     * @return string
     */
    public function getRepositoryUrl()
    {
        return $this->container['repositoryUrl'];
    }

    /**
     * Sets repositoryUrl
     * @param string $repositoryUrl
     * @param string $option
     * @return $this
     */
    public function setRepositoryUrl($repositoryUrl, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['repositoryUrl'.$option] = $repositoryUrl;

        return $this;
    }


    /**
     * Gets sourceCodeCredentialId
     * @return string
     */
    public function getSourceCodeCredentialId()
    {
        return $this->container['sourceCodeCredentialId'];
    }

    /**
     * Sets sourceCodeCredentialId
     * @param string $sourceCodeCredentialId
     * @param string $option
     * @return $this
     */
    public function setSourceCodeCredentialId($sourceCodeCredentialId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['sourceCodeCredentialId'.$option] = $sourceCodeCredentialId;

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
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @param string $option
     * @return $this
     */
    public function setToken($token, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['token'.$option] = $token;

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
     * Gets triggerWebhookPr
     * @return string
     */
    public function getTriggerWebhookPr()
    {
        return $this->container['triggerWebhookPr'];
    }

    /**
     * Sets triggerWebhookPr
     * @param string $triggerWebhookPr
     * @param string $option
     * @return $this
     */
    public function setTriggerWebhookPr($triggerWebhookPr, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['triggerWebhookPr'.$option] = $triggerWebhookPr;

        return $this;
    }


    /**
     * Gets triggerWebhookPush
     * @return string
     */
    public function getTriggerWebhookPush()
    {
        return $this->container['triggerWebhookPush'];
    }

    /**
     * Sets triggerWebhookPush
     * @param string $triggerWebhookPush
     * @param string $option
     * @return $this
     */
    public function setTriggerWebhookPush($triggerWebhookPush, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['triggerWebhookPush'.$option] = $triggerWebhookPush;

        return $this;
    }


    /**
     * Gets triggerWebhookTag
     * @return string
     */
    public function getTriggerWebhookTag()
    {
        return $this->container['triggerWebhookTag'];
    }

    /**
     * Sets triggerWebhookTag
     * @param string $triggerWebhookTag
     * @param string $option
     * @return $this
     */
    public function setTriggerWebhookTag($triggerWebhookTag, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['triggerWebhookTag'.$option] = $triggerWebhookTag;

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
     * Gets webhookId
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhookId'];
    }

    /**
     * Sets webhookId
     * @param string $webhookId
     * @param string $option
     * @return $this
     */
    public function setWebhookId($webhookId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['webhookId'.$option] = $webhookId;

        return $this;
    }
}