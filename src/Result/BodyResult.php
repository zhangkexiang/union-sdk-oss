<?php

namespace Union\Sdk\OSS\Result;


/**
 * Class BodyResult
 * @package OSS\Result
 */
class BodyResult extends Result
{
    /**
     * @return string
     */
    protected function parseDataFromResponse()
    {
        return empty($this->rawResponse->body) ? "" : $this->rawResponse->body;
    }
}