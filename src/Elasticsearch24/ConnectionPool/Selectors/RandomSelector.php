<?php

namespace Elasticsearch24\ConnectionPool\Selectors;

use Elasticsearch24\Connections\ConnectionInterface;

/**
 * Class RandomSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Connections\Selectors\RandomSelector
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class RandomSelector implements SelectorInterface
{
    /**
     * Select a random connection from the provided array
     *
     * @param  ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     *
     * @return \Elasticsearch24\Connections\ConnectionInterface
     */
    public function select($connections)
    {
        return $connections[array_rand($connections)];
    }
}
