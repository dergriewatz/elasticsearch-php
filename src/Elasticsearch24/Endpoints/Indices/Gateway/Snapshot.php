<?php

namespace Elasticsearch24\Endpoints\Indices\Gateway;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Snapshot
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Indices\Gateway
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Snapshot extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri = "/_gateway/snapshot";

        if (isset($index) === true) {
            $uri = "/$index/_gateway/snapshot";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
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
