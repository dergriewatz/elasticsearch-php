<?php

namespace Elasticsearch24\Common\Exceptions;

/**
 * RoutingMissingException, thrown on when a routing value is required but
 * not provided
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Common\Exceptions
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class RoutingMissingException extends ServerErrorResponseException implements ElasticsearchException
{
}
