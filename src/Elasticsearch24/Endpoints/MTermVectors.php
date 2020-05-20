<?php

namespace Elasticsearch24\Endpoints;

use Elasticsearch24\Common\Exceptions;

/**
 * Class MTermVectors
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class MTermVectors extends AbstractEndpoint
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
        return $this->getOptionalURI('_mtermvectors');
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'ids',
            'term_statistics',
            'field_statistics',
            'fields',
            'offsets',
            'positions',
            'payloads',
            'preference',
            'routing',
            'parent',
            'realtime',
            'version',
            'version_type',
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
