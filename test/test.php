<?php
require __DIR__ . '/../vendor/autoload.php';

//use Union\Sdk\OSS\OssClient;
use Union\Sdk\OSS\OssClient;
$conf = union_config('union.sdk.oss');
//var_dump($conf);die;

//$ossClient = new OssClient(self::accessKeyId, self::accessKeySecret, self::endpoint, false);
$ossClient = new OssClient($conf['OSS_ACCESS_ID'], $conf['OSS_ACCESS_KEY'], $conf['OSS_ENDPOINT'], false);
$result = $ossClient->uploadFile($conf['OSS_BUCKET'], "adsf/c.file", __FILE__);
