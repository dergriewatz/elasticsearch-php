<?php

namespace Elasticsearch24\Endpoints\Script;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Script
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Get extends AbstractEndpoint
{
    /** @var  String */
    private $lang;

    /**
     * @param $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        if (isset($lang) !== true) {
            return $this;
        }

        $this->lang = $lang;

        return $this;
    }

    /**
     * @throws \Elasticsearch24\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->lang) !== true) {
            throw new Exceptions\RuntimeException(
                'lang is required for Put'
            );
        }
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for put'
            );
        }
        $id = $this->id;
        $lang = $this->lang;
        $uri = "/_scripts/$lang/$id";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'version_type',
            'version',
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
