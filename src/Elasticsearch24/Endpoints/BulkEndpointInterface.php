<?php

namespace Elasticsearch24\Endpoints;

use Elasticsearch24\Serializers\SerializerInterface;
use Elasticsearch24\Transport;

/**
 * Interface BulkEndpointInterface
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
interface BulkEndpointInterface
{
    /**
     * Constructor
     *
     * @param Transport $transport Transport instance
     * @param SerializerInterface $serializer A serializer
     */
    public function __construct(Transport $transport, SerializerInterface $serializer);
}
