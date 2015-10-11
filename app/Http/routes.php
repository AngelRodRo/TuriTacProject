<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/results', function(){
	return View('pages.results');
});

Route::group(array('namespace'=>'Admin'), function()
{
	Route::get('/admin', array('as' => 'admin', 'uses' => 'LoginController@index'));
	Route::get('/admin/register', array('as' => 'register', 'uses' => 'LoginController@register'));
	Route::get('/admin/register', array('as' => 'register', 'uses' => 'LoginController@register'));

});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::resource('places', 'PlaceController');

Route::get('places/{id}/delete', [
    'as' => 'places.delete',
    'uses' => 'PlaceController@destroy',
]);


Route::resource('places', 'PlaceController');

Route::get('places/{id}/delete', [
    'as' => 'places.delete',
    'uses' => 'PlaceController@destroy',
]);
