<?php

namespace Elasticsearch24\Endpoints\Indices\Validate;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Query
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Indices\Validate
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Query extends AbstractEndpoint
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
        return $this->getOptionalURI('_validate/query');
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'explain',
            'ignore_unavailable',
            'ignore_indices',
            'allow_no_indices',
            'expand_wildcards',
            'operation_threading',
            'source',
            'q',
            'analyzer',
            'analyze_wildcard',
            'default_operator',
            'df',
            'lenient',
            'lowercase_expanded_terms',
            'rewrite',
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
