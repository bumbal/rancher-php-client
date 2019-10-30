<?php

/**
 * RancherCollection
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher;

class RancherCollection
{
    /**
     * @var array
     */
    public $filters = [];

    /**
     * @var array
     */
    public $pagination = [];

    /**
     * @var array
     */
    public $sort = [];

    /**
     * @var array
     */
    public $data = [];
}