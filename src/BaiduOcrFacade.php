<?php
/**
 * Created by PhpStorm.
 * User: 95181
 * Date: 2020/9/16
 * Time: 10:21
 */

namespace SmallerFan\BaiduOcr;
use Illuminate\Support\Facades\Facade;

class BaiduOcrFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'baiduocr';
    }
}