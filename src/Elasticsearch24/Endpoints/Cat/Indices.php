<?php

namespace Elasticsearch24\Endpoints\Cat;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Indices
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Cat
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Indices extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri = "/_cat/indices";

        if (isset($index) === true) {
            $uri = "/_cat/indices/$index";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'bytes',
            'local',
            'master_timeout',
            'h',
            'help',
            'pri',
            'v',
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
