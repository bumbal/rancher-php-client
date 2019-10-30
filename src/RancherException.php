<?php

/**
 * RancherException
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher;

use \Exception;

class RancherException extends Exception
{

    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message, $code);


    }
}
