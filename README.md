# yfl/yunit-laravel

这里是对于框架的介绍

# 对于框架的 要求

Laravel >= 5.1 & PHP > 7.1.3 

# 安装的方式

```yml
composer require yfl/yunit-laravel
```

# 配置方式
5.5手动配置laravel对于``Yfl\YunitLaravel\Providers\SJunitServiceProvider::class``服务放到config/app.php中

解释路由
```php
<?php
Route::get('/', 'YunitController@index');
Route::post('/', 'YunitController@store')->name('junit.store');
?>
```

# git -> 注册一个GitHub账号
## License
