<?php
Route::get('/', 'YunitController@index');
Route::post('/', 'YunitController@store')->name('yunit.store');

// 测试路由
Route::get('test', 'TestController@index');
