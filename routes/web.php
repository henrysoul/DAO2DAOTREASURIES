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

Route::get('/', 'Website\WebsiteController@index');
Route::get('/view/{id}', 'Website\WebsiteController@country_info')->name('view');

use App\Models\User;
Route::get('/dashboard', function () {
    $user = User::count();
    return view('dashboard', compact('user'));
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('users', 'Admin\WebsiteController@users')->name('users');
    Route::post('create_user', 'Admin\WebsiteController@create_user')->name('create_user');
    Route::post('update_user', 'Admin\WebsiteController@update_user')->name('update_user');
    Route::get('delete_user/{id}', 'Admin\WebsiteController@delete_user')->name('delete_user');
    Route::get('header_components', 'Admin\WebsiteController@header_components')->name('header_components');
    Route::post('header_components', 'Admin\WebsiteController@save_header_components')->name('header_components');
    Route::get('card_components', 'Admin\WebsiteController@card_components')->name('card_components');
    Route::post('card_components', 'Admin\WebsiteController@save_card_components')->name('card_components');
    Route::get('live_components', 'Admin\WebsiteController@live_components')->name('live_components');
    Route::post('live_components', 'Admin\WebsiteController@save_live_components')->name('live_components');
    Route::get('table_components', 'Admin\WebsiteController@table_components')->name('table_components');
    Route::post('table_components', 'Admin\WebsiteController@save_table_components')->name('table_components');
    Route::get('header_info', 'Admin\WebsiteController@header_info')->name('header_info');
    Route::post('header_info', 'Admin\WebsiteController@save_header_info')->name('header_info');
});

require __DIR__ . '/auth.php';
