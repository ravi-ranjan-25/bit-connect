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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
Route::resource('channels','ChannelController');

Route::get('forums/create', [
    'uses' => 'forumcontroller@create',
    'as' => 'discuss.create'

]);

Route::post('forums/store', [
    'uses' => 'forumcontroller@store',
    'as' => 'discuss.store'

]);

Route::get('discussion/{slug}', [
    'uses' => 'forumcontroller@show',
    'as' => 'discussion'

]);

Route::post('reply/store/{id}', [
    'uses' => 'forumcontroller@reply',
    'as' => 'replies.store'

]);
Route::get('/profile/{username}', [
    'uses' => 'usercontroller@profile',
    'as' => 'userprofile'

]);

Route::get('/like/{id}', [
    'uses' => 'usercontroller@like',
    'as' => 'like'

]);


Route::get('/unlike/{id}', [
    'uses' => 'usercontroller@unlike',
    'as' => 'unlike'

]);


Route::get('/best/{id}', [
    'uses' => 'usercontroller@bestanswer',
    'as' => 'best.answer'

]);

Route::post('/search' ,[
    'uses' => 'usercontroller@search',
    'as' => 'user.search'
]);

Route::get('/settings' ,[
    'uses' => 'usercontroller@settings',
    'as' => 'settings'
]);

Route::get('/ebooks' ,[
    'uses' => 'usercontroller@ebooks',
    'as' => 'ebooks'
]);
Route::post('/registerebook' ,[
    'uses' => 'usercontroller@registerebook',
    'as' => 'register.ebook'
]);
Route::post('/picture' ,[
    'uses' => 'usercontroller@picture',
    'as' => 'picture'
]);
Route::post('message/store/{id}', [
    'uses' => 'forumcontroller@message',
    'as' => 'message.store'

]);


});




Auth::routes();

Route::get('/forum', [
    
    'uses' => 'forumcontroller@index',
    'as'  => 'forum'
    ]);
