<?php
Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('yunit.store');

// 测试路由
Route::get('test', 'TestController@index');
