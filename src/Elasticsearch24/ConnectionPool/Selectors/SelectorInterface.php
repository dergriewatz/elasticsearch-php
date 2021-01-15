<?php

namespace Elasticsearch24\ConnectionPool\Selectors;

/**
 * Class RandomSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Connections\Selectors
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
interface SelectorInterface
{
    /**
     * Perform logic to select a single ConnectionInterface instance from the array provided
     *
     * @param  ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     *
     * @return \Elasticsearch24\Connections\ConnectionInterface
     */
    public function select($connections);
}