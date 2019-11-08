<?php

/**
 * RancherClient
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;

class RancherClient
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var ObjectSerializer
     */
    private $serializer;

    /**
     * Make the request
     *
     * @param string $url
     * @param string $access
     * @param string $secret
     *
     * @return void
     */
    public function __construct($url, $access, $secret)
    {
        $this->client = new HttpClient([
            'base_uri'  =>  $url,
            'auth'      =>  [$access, $secret],
            "http_errors" => true,
            'verify' => false
        ]);

        $this->serializer = new ObjectSerializer();
    }

    /**
     * Get the serializer
     *
     * @return ObjectSerializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }

    /**
     * Make the request
     *
     * @param string $type
     * @param string $endpoint
     * @param array $params
     *
     * @return array
     * @throws RancherException
     */
    public function request($type = 'GET', $endpoint = "", array $params = [])
    {
        $response = null;

        try {
            switch ($type) {
                case 'GET':
                {
                    $response = $this->client->get($endpoint, ['query' => $params]);
                }
                break;

                case 'POST':
                {
                    foreach($params as $key=>$p){
                        if($p == NULL){
                            unset($params[$key]);
                        }
                    }

                    $payload = ["json"=>$params];
                    $response = $this->client->post($endpoint, $payload);
                }
                break;

                case 'PUT':
                {
                    $payload = ["json"=>$params];

                    $response = $this->client->put($endpoint, $payload);
                }
                break;

                case 'DELETE':
                {
                    $payload = ["json"=>$params];

                    $response = $this->client->delete($endpoint, $payload);
                }
                break;
            }

            return json_decode($response->getBody()->getContents());
        }
        catch(ClientException $e)
        {
            throw new RancherException($e->getMessage(), $e->getCode(), $e->getResponse());
        }
    }
}