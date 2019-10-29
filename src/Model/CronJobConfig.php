<?php

namespace Rancher\Model;

use \ArrayAccess;

class CronJobConfig implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'concurrencyPolicy' => 'string',
        'failedJobsHistoryLimit' => 'int',
        'jobAnnotations' => 'map[string]',
        'jobConfig' => '\Rancher\Model\JobConfig',
        'jobLabels' => 'map[string]',
        'schedule' => 'string',
        'startingDeadlineSeconds' => 'int',
        'successfulJobsHistoryLimit' => 'int',
        'suspend' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'concurrencyPolicy' => 'setConcurrencyPolicy',
        'failedJobsHistoryLimit' => 'setFailedJobsHistoryLimit',
        'jobAnnotations' => 'setJobAnnotations',
        'jobConfig' => 'setJobConfig',
        'jobLabels' => 'setJobLabels',
        'schedule' => 'setSchedule',
        'startingDeadlineSeconds' => 'setStartingDeadlineSeconds',
        'successfulJobsHistoryLimit' => 'setSuccessfulJobsHistoryLimit',
        'suspend' => 'setSuspend',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'concurrencyPolicy' => 'getConcurrencyPolicy',
        'failedJobsHistoryLimit' => 'getFailedJobsHistoryLimit',
        'jobAnnotations' => 'getJobAnnotations',
        'jobConfig' => 'getJobConfig',
        'jobLabels' => 'getJobLabels',
        'schedule' => 'getSchedule',
        'startingDeadlineSeconds' => 'getStartingDeadlineSeconds',
        'successfulJobsHistoryLimit' => 'getSuccessfulJobsHistoryLimit',
        'suspend' => 'getSuspend',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['concurrencyPolicy'] = isset($data['concurrencyPolicy']) ? $data['concurrencyPolicy'] : null;
        $this->container['failedJobsHistoryLimit'] = isset($data['failedJobsHistoryLimit']) ? $data['failedJobsHistoryLimit'] : null;
        $this->container['jobAnnotations'] = isset($data['jobAnnotations']) ? $data['jobAnnotations'] : null;
        $this->container['jobConfig'] = isset($data['jobConfig']) ? $data['jobConfig'] : null;
        $this->container['jobLabels'] = isset($data['jobLabels']) ? $data['jobLabels'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['startingDeadlineSeconds'] = isset($data['startingDeadlineSeconds']) ? $data['startingDeadlineSeconds'] : null;
        $this->container['successfulJobsHistoryLimit'] = isset($data['successfulJobsHistoryLimit']) ? $data['successfulJobsHistoryLimit'] : null;
        $this->container['suspend'] = isset($data['suspend']) ? $data['suspend'] : null;
    }

    /**
     * Gets concurrencyPolicy
     * @return string
     */
    public function getConcurrencyPolicy()
    {
        return $this->container['concurrencyPolicy'];
    }

    /**
     * Sets concurrencyPolicy
     * @param string $concurrencyPolicy
     * @return $this
     */
    public function setConcurrencyPolicy($concurrencyPolicy)
    {
        $this->container['concurrencyPolicy'] = $concurrencyPolicy;

        return $this;
    }


    /**
     * Gets failedJobsHistoryLimit
     * @return int
     */
    public function getFailedJobsHistoryLimit()
    {
        return $this->container['failedJobsHistoryLimit'];
    }

    /**
     * Sets failedJobsHistoryLimit
     * @param int $failedJobsHistoryLimit
     * @return $this
     */
    public function setFailedJobsHistoryLimit($failedJobsHistoryLimit)
    {
        $this->container['failedJobsHistoryLimit'] = $failedJobsHistoryLimit;

        return $this;
    }


    /**
     * Gets jobAnnotations
     * @return string[]
     */
    public function getJobAnnotations()
    {
        return $this->container['jobAnnotations'];
    }

    /**
     * Sets jobAnnotations
     * @param string[] $jobAnnotations
     * @return $this
     */
    public function setJobAnnotations($jobAnnotations)
    {
        $this->container['jobAnnotations'] = $jobAnnotations;

        return $this;
    }


    /**
     * Gets jobConfig
     * @return \Rancher\Model\JobConfig
     */
    public function getJobConfig()
    {
        return $this->container['jobConfig'];
    }

    /**
     * Sets jobConfig
     * @param \Rancher\Model\JobConfig $jobConfig
     * @return $this
     */
    public function setJobConfig($jobConfig)
    {
        $this->container['jobConfig'] = $jobConfig;

        return $this;
    }


    /**
     * Gets jobLabels
     * @return string[]
     */
    public function getJobLabels()
    {
        return $this->container['jobLabels'];
    }

    /**
     * Sets jobLabels
     * @param string[] $jobLabels
     * @return $this
     */
    public function setJobLabels($jobLabels)
    {
        $this->container['jobLabels'] = $jobLabels;

        return $this;
    }


    /**
     * Gets schedule
     * @return string
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     * @param string $schedule
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }


    /**
     * Gets startingDeadlineSeconds
     * @return int
     */
    public function getStartingDeadlineSeconds()
    {
        return $this->container['startingDeadlineSeconds'];
    }

    /**
     * Sets startingDeadlineSeconds
     * @param int $startingDeadlineSeconds
     * @return $this
     */
    public function setStartingDeadlineSeconds($startingDeadlineSeconds)
    {
        $this->container['startingDeadlineSeconds'] = $startingDeadlineSeconds;

        return $this;
    }


    /**
     * Gets successfulJobsHistoryLimit
     * @return int
     */
    public function getSuccessfulJobsHistoryLimit()
    {
        return $this->container['successfulJobsHistoryLimit'];
    }

    /**
     * Sets successfulJobsHistoryLimit
     * @param int $successfulJobsHistoryLimit
     * @return $this
     */
    public function setSuccessfulJobsHistoryLimit($successfulJobsHistoryLimit)
    {
        $this->container['successfulJobsHistoryLimit'] = $successfulJobsHistoryLimit;

        return $this;
    }


    /**
     * Gets suspend
     * @return boolean
     */
    public function getSuspend()
    {
        return $this->container['suspend'];
    }

    /**
     * Sets suspend
     * @param boolean $suspend
     * @return $this
     */
    public function setSuspend($suspend)
    {
        $this->container['suspend'] = $suspend;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

