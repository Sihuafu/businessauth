<?php

namespace AntFoot\BusinessAuth;

use Illuminate\Support\ServiceProvider;

class BusinessAuthServiceProvider extends ServiceProvider
{
    protected $defer = true; // 延迟加载服务

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('businessauth', function ($app) {
            return new BusinessAuth();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'BusinessAuth'); // 视图目录指定
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/businessauth'),  // 发布视图目录到resources 下
            __DIR__.'/config/businessauth.php' => config_path('businessauth.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['businessauth'];
    }
}
