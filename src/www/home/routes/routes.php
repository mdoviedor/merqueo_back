<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 06:25 PM
 */

//Route::get('/', function () {
//    return view('home::welcome');
//});

Route::get('/', [
    'as' => 'home',
    'uses' => \www\home\controllers\HomeController::class . '@index'
]);