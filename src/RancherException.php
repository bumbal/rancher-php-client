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
use Psr\Http\Message\ResponseInterface;

class RancherException extends Exception
{
    /**
     * @var string
     */
    private $statusCode = "";

    /**
     * @var string
     */
    private $type = "";

    /**
     * __construct
     *
     * @param string $message
     * @param int $code
     * @param ResponseInterface $response
     */
    public function __construct($message = "", $code = 0, $response = null)
    {
        parent::__construct($message, $code);

        if($response instanceof ResponseInterface)
        {
            $rancherError = json_decode($response->getBody(), true);

            $this->type = $rancherError['type'];
            $this->statusCode = $rancherError['code'];
            $this->code = $rancherError['status'];
            $this->message = $rancherError['message'];
        }
    }

    /**
     * Get the status code
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Get the type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
