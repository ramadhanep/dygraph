<?php

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


Route::get('mobileHome', 'DygraphMobile\APIController@mobileHome');
Route::get('mobileCategory', 'DygraphMobile\APIController@mobileCategory'); 
Route::get('mobileFotografer', 'DygraphMobile\APIController@mobileFotografer'); 
Route::get('likeFoto', 'DygraphMobile\APIController@likeFoto');

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('category')->group(function(){
    Route::get('/', 'Dygraph\CategoryController@index')->name('categoryIndex');
    Route::get('/add', 'Dygraph\CategoryController@add')->name('categoryAdd');
    Route::post('/save', 'Dygraph\CategoryController@save')->name('categorySave');
    Route::get('/edit/{id}', 'Dygraph\CategoryController@edit')->name('categoryEdit');;
    Route::post('/prosesEdit/{id}', 'Dygraph\CategoryController@prosesEdit')->name('categoryUpdate');
    Route::get('/delete/{id}', 'Dygraph\CategoryController@delete')->name('categoryDelete');
});
Route::prefix('fotografer')->group(function(){
    Route::get('/', 'Dygraph\FotograferController@index')->name('fotograferIndex');
    Route::get('/add', 'Dygraph\FotograferController@add')->name('fotograferAdd');
    Route::post('/save', 'Dygraph\FotograferController@save')->name('fotograferSave');
    Route::get('/edit/{id}', 'Dygraph\FotograferController@edit')->name('fotograferEdit');
    Route::post('/prosesEdit/{id}', 'Dygraph\FotograferController@prosesEdit')->name('fotograferUpdate');
    Route::get('/delete/{id}', 'Dygraph\FotograferController@delete')->name('fotograferDelete');
});
Route::prefix('foto')->group(function(){
    Route::get('/', 'Dygraph\FotoController@index')->name('fotoIndex');
    Route::get('/add', 'Dygraph\FotoController@add')->name('fotoAdd');
    Route::post('/save', 'Dygraph\FotoController@save')->name('fotoSave');
    Route::get('/edit/{id}', 'Dygraph\FotoController@edit')->name('fotoEdit');
    Route::post('/prosesEdit/{id}', 'Dygraph\FotoController@prosesEdit')->name('fotoUpdate');
    Route::get('/delete/{id}', 'Dygraph\FotoController@delete')->name('fotoDelete');
});
Route::prefix('likes')->group(function(){
    Route::get('/', 'Dygraph\LikeController@index')->name('likeIndex');
    Route::get('/add', 'Dygraph\LikeController@add')->name('likeAdd');
    Route::post('/save', 'Dygraph\LikeController@save')->name('likeSave');
    Route::get('/edit/{id}', 'Dygraph\LikeController@edit')->name('likeEdit');
    Route::post('/prosesEdit/{id}', 'Dygraph\LikeController@prosesEdit')->name('likeUpdate');
    Route::get('/delete/{id}', 'Dygraph\LikeController@delete')->name('likeDelete');
});
Route::prefix('profile')->group(function(){
    Route::get('/', 'Dygraph\ProfileController@index')->name('profileIndex');
    Route::post('/prosesEdit/{id}', 'Dygraph\ProfileController@prosesEdit')->name('profileUpdate');
});
Route::prefix('manajemenUser')->group(function(){
    Route::get('/', 'Dygraph\ManajemenUserController@index')->name('manajemenUserIndex');
    Route::get('/add', 'Dygraph\ManajemenUserController@add')->name('manajemenUserAdd');
    Route::post('/save', 'Dygraph\ManajemenUserController@save')->name('manajemenUserSave');
    Route::get('/edit/{id}', 'Dygraph\ManajemenUserController@edit')->name('manajemenUserEdit');
    Route::post('/prosesEdit/{id}', 'Dygraph\ManajemenUserController@prosesEdit')->name('manajemenUserUpdate');
    Route::get('/delete/{id}', 'Dygraph\ManajemenUserController@delete')->name('manajemenUserDelete');
});