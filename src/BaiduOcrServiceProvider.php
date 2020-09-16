<?php
/**
 * Created by PhpStorm.
 * User: 95181
 * Date: 2020/9/16
 * Time: 10:18
 */

namespace SmallerFan\BaiduOcr;

use Illuminate\Support\ServiceProvider;

class BaiduOcrServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->registerConfig();
    }

    public function register()
    {
        $this->app->bind('baiduocr', function() {
            return new Baiduocr();
        });
    }

    public function provides()
    {
        return ['baiduocr'];
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('baiduocr.php')
        ]);
    }
}