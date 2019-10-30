<?php

/**
 * AbstractFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher;

abstract class AbstractFilter
{
    /**
     * @var array
     */
    protected $container = [];

    /**
     * @var array
     */
    protected $allowedOptions = ["eq", "ne", "in", "notin"];

    /**
     * Convert this class to an array
     *
     * @return array
     */
    public function toArray()
    {
        return $this->container;
    }
}