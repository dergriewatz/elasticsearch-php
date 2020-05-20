<?php

namespace Elasticsearch24\Common\Exceptions\Curl;

use Elasticsearch24\Common\Exceptions\ElasticsearchException;
use Elasticsearch24\Common\Exceptions\TransportException;

/**
 * Class CouldNotConnectToHost
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Common\Exceptions\Curl
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class CouldNotConnectToHost extends TransportException implements ElasticsearchException
{
}
