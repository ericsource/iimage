<?php

namespace Nomandia\IImage;

use Illuminate\Support\ServiceProvider;

class IImageProvider extends ServiceProvider
{
    public function boot()
    {
        // 复制自定义的文件到config目录
        if (!file_exists(config_path('iimage.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/config/iimage.php' => config_path('iimage.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/iimage.php', 'iimage'
        );
    }
}