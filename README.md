## php8-demo

php8测试api，基于laravel8

### 修改内容

(1)url 是项目域名如：php8.humengxu.com

api测试接口访问地址： url/api/test

测试访问地址：http://php8.humengxu.com/api/test

(2)改下 RouteServiceProvider.php的写法。
比如API路由,将 $this->namespace改为 App\Http\Controllers\Api。
```$xslt

public function boot()
{
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace('App\Http\Controllers\Api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
} 
```
(3)配置文件 .env 改为   LOG_CHANNEL=daily


## 学习该blog内容，让其完善更新到php8-demo
 
https://github.com/lufficc/Xblog

https://xblog.lufficc.com/blog/how-to-install-my-blog

里边有些laravel框架的讲解内容


## PHPUint测试工作

[PHPUnit手册](https://phpunit.readthedocs.io/zh_CN/latest/)