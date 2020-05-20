<?php

namespace Elasticsearch24\Connections;

use Elasticsearch24\Serializers\SerializerInterface;
use Psr\Log\LoggerInterface;

/**
 * Class AbstractConnection
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Connections
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
interface ConnectionFactoryInterface
{
    /**
     * @param $handler
     * @param array $connectionParams
     * @param SerializerInterface $serializer
     * @param LoggerInterface $logger
     * @param LoggerInterface $tracer
     */
    public function __construct(callable $handler, array $connectionParams,
                                SerializerInterface $serializer, LoggerInterface $logger, LoggerInterface $tracer);

    /**
     * @param $hostDetails
     *
     * @return ConnectionInterface
     */
    public function create($hostDetails);
}
