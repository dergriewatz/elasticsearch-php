<?php

namespace Elasticsearch24\Common\Exceptions;

/**
 * UnexpectedValueException
 *
 * Denote a value that is outside the normally accepted values
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Common\Exceptions
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class UnexpectedValueException extends \UnexpectedValueException implements ElasticsearchException
{
}