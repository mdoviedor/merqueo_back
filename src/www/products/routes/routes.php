<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 06:25 PM
 */


Route::get('/products/list', [
    'as' => 'products-list',
    'uses' => \www\products\controllers\ListController::class
]);

Route::get('/products/create', [
    'as' => 'products-create',
    'uses' => \www\products\controllers\CreateController::class . '@createAction'
]);

Route::post('/products/create', [
    'as' => 'products-create-execute',
    'uses' => \www\products\controllers\CreateController::class . '@executeAction'
]);

Route::get('/products/csv_load', [
    'as' => 'products-csv-load',
    'uses' => \www\products\controllers\CsvLoadController::class . '@csvLoadAction'
]);

Route::post('/products/csv_load', [
    'as' => 'products-csv-load-execute',
    'uses' => \www\products\controllers\CsvLoadController::class . '@executeAction'
]);

