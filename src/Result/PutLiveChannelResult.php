<?php

namespace Union\Sdk\OSS\Result;

use Union\Sdk\OSS\Model\LiveChannelInfo;

class PutLiveChannelResult extends Result
{
    protected function parseDataFromResponse()
    {
        $content = $this->rawResponse->body;
        $channel = new LiveChannelInfo();
        $channel->parseFromXml($content);
        return $channel;
    }
}
