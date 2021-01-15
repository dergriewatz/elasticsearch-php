<?php

namespace Elasticsearch24\Endpoints\Template;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Template
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Put extends AbstractEndpoint
{
    /**
     * @param array $body
     *
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
     * @throws \Elasticsearch24\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for Put'
            );
        }

        $templateId = $this->id;
        $uri = "/_search/template/$templateId";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'op_type',
            'version',
            'version_type',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'PUT';
    }
}