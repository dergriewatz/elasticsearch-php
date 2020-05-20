<?php

namespace Elasticsearch24\Endpoints\Cluster;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Stats
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Cluster
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Stats extends AbstractEndpoint
{
    // A comma-separated list of node IDs or names to limit the returned information; use `_local` to return information
    // from the node you&#039;re connecting to, leave empty to get information from all nodes
    private $nodeID;

    /**
     * @param $node_id
     *
     * @return $this
     */
    public function setNodeID($node_id)
    {
        if (isset($node_id) !== true) {
            return $this;
        }

        $this->nodeID = $node_id;

        return $this;
    }

    /**
     * @return string
     */
    protected function getURI()
    {
        $node_id = $this->nodeID;
        $uri = "/_cluster/stats";

        if (isset($node_id) === true) {
            $uri = "/_cluster/stats/nodes/$node_id";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'flat_settings',
            'human',
            'timeout',
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
