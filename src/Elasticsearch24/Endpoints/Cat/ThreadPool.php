<?php

namespace Elasticsearch24\Endpoints\Cat;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class ThreadPool
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Cat
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class ThreadPool extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $uri = "/_cat/thread_pool";

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
            'h',
            'help',
            'v',
            'full_id',
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
