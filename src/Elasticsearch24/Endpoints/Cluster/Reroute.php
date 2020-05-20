<?php

namespace Elasticsearch24\Endpoints\Cluster;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Reroute
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Cluster
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Reroute extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch24\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    protected function getURI()
    {
        $uri = "/_cluster/reroute";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'dry_run',
            'filter_metadata',
            'explain',
            'metric',
            'master_timeout',
            'timeout',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'POST';
    }
}
