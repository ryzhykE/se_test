<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'IndexController@index')->name('index');
Route::get('algorithm', 'IndexController@algorithm')->name('algorithm');

Route::get('bids', 'BidsController@index')->name('bids');

Route::get('orders-no', 'EventsController@index')->name('orders-no-exist');
Route::get('order-more', 'EventsController@moreOrder')->name('order-more');
Route::get('order-most', 'EventsController@mostOrder')->name('order-most');
