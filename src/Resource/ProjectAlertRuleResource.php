<?php

/**
 * ProjectAlertRuleResource
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */


namespace Rancher\Resource;

use Rancher\RancherClient;
use Rancher\RancherException;
use Rancher\RancherCollection;

class ProjectAlertRuleResource
{
    /**
     * @var RancherClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $path = '/v3/';

    /**
     * @var string
     */
    protected $resourceName = 'projectAlertRule/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'projectAlertRules/';

    /**
     * @var string
     */
    protected $ownerId;

    public function __construct($client, $ownerId = null)
    {
        $this->client = $client;
        $this->ownerId = $ownerId;
    }

    private function constructPath($plural = false)
    {
        $constructedPath = $this->path;

        if(!empty($this->ownerId))
        {
            $constructedPath .= $this->ownerId . '/';
        }

        if($plural)
        {
            $constructedPath .= $this->resourcePluralName . '/';
        }
        else
        {
            $constructedPath .= $this->resourceName . '/';
        }

        return $constructedPath;
    }

    /**
     * getAll
     *
     * @param \Rancher\AbstractFilter $filter
     * @param string $sortDirection
     * @param int $limit
     * @param string $marker
     *
     * @throws RancherException
     * @return \Rancher\RancherCollection
     */
    public function collection($filter = null, $sortOrder = 'asc', $limit = 1000, $marker = "")
    {
        if(!in_array($sortOrder, ['asc', 'desc']))
        {
            throw new RancherException('sortDirection can only be asc or desc');
        }

        $collection = new RancherCollection();

        if($filter == null)
        {
            $filterArray = [];
        }
        else
        {
            $filterArray = $filter->toArray();
        }

        $queryString = http_build_query([
            'order' => $sortOrder,
            'limit' => $limit,
            'marker' => $marker,
        ]);

        $response = $this->client->request('POST', $this->constructPath(true) . '?'.$queryString, $filterArray);

        $collection->filters = $response->filters;
        $collection->pagination = $response->pagination;
        $collection->sort = $response->sort;

        foreach($response->data as $element)
        {
            $object = $this->client->getSerializer()->deserialize($element, '\Rancher\Model\\'.ucfirst($response->resourceType).'Model');
            array_push($collection->data, $object);
        }

        return $collection;
    }

    /**
     * get
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\ProjectAlertRuleModel
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath() . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ProjectAlertRuleModel');
    }

    /**
     * set
     *
     * @param \Rancher\Model\ProjectAlertRule $data
     *
     * @throws RancherException
     * @return \Rancher\Model\ProjectAlertRuleModel
     */
    public function set($data)
    {
        $postData = json_encode(\Rancher\ObjectSerializer::sanitizeForSerialization($data));

        $response = $this->client->request('PUT', $this->constructPath(), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ProjectAlertRuleModel');
    }

    /**
     * remove
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\ProjectAlertRuleModel
     */
    public function remove($id)
    {
        $response = $this->client->request('DELETE', $this->constructPath() . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ProjectAlertRuleModel');
    }

    /**
     * activate
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function activate($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=activate', []);

        return;
    }

    /**
     * deactivate
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function deactivate($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=deactivate', []);

        return;
    }

    /**
     * mute
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function mute($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=mute', []);

        return;
    }

    /**
     * unmute
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function unmute($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=unmute', []);

        return;
    }
}