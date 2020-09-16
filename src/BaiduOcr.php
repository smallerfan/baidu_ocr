<?php
/**
 * Created by PhpStorm.
 * User: 95181
 * Date: 2020/9/16
 * Time: 10:20
 */

namespace SmallerFan\BaiduOcr;


class BaiduOcr extends \AipOcr
{
    public function __construct()
    {
        $appId = config('baiduocr.APP_ID');
        $apiKey = config('baiduocr.API_KEY');
        $secretKey = config('baiduocr.SECRET_KEY');

        parent::__construct($appId, $apiKey, $secretKey);
    }
}