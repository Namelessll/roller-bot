<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('index');
});

Route::get('/admin/dashboard/index', 'AdminController@index')->name('index');
Route::get('/admin/dashboard/api', 'AdminController@apiPage')->name('apiPage');
Route::get('/admin/dashboard/settings', 'AdminController@settingsPage')->name('settingsPage');
Route::get('/admin/dashboard/сompetition/list', 'AdminController@competitionListPage')->name('competitionListPage');

Route::get('/admin/dashboard/advertising/create', 'AdminController@createAdvertisingPage')->name('createAdvertisingPage');


/*FORMS REQUESTS*/
Route::post('/admin/dashboard/api/save', 'DashboardRequestsController@saveSetting')->name('saveSetting');
Route::post('/admin/dashboard/bot/settings/save', 'DashboardRequestsController@saveBotSetting')->name('saveBotSetting');

