<?php

namespace Elasticsearch24\Endpoints\Snapshot;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class VerifyRepository
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Snapshot *
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class VerifyRepository extends AbstractEndpoint
{
    // A repository name
    private $repository;


    /**
     * @param $repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        if (isset($repository) !== true) {
            return $this;
        }

        $this->repository = $repository;

        return $this;
    }


    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->repository) !== true) {
            throw new Exceptions\RuntimeException(
                'repository is required for VerifyRepository'
            );
        }
        $repository = $this->repository;
        $uri = "/_snapshot/$repository/_verify";

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'master_timeout',
            'timeout',
            'local',
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
