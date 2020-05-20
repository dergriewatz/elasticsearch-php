<?php
/**
 * User: zach
 * Date: 01/12/2015
 * Time: 14:34:49 pm
 */

namespace Elasticsearch24\Endpoints\Cat;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Segments
 *
 * @category Elasticsearch
 * @package Elasticsearch24\Endpoints\Cat
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Segments extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri = "/_cat/segments";

        if (isset($index) === true) {
            $uri = "/_cat/segments/$index";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'h',
            'help',
            'v',
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
