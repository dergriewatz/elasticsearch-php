<?php

namespace Elasticsearch24\Endpoints\Cluster;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Pendingtasks
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Cluster
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class PendingTasks extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $uri = "/_cluster/pending_tasks";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'local',
            'master_timeout',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}
