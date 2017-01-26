 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/daftar', function(){
// 	return view('daftar');
// });

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'beranda',

]);

// Route::get('/alert', function(){
// 	return redirect()->route('login')->with('info', 'You have signed up!');
// });

/**
 * authentication
 */

Route::get('/login', [
	'uses' => 'AuthController@getLogin',
	'as' => 'login',
	'middleware' => ['guest']
]);

Route::post('/login', [
	'uses' => 'AuthController@postLogin',
	'middleware' => ['guest']
]);

Route::get('/daftar', [
	'uses' => 'AuthController@getDaftar',
	'as' => 'daftar',
	'middleware' => ['guest']
]);
Route::post('/daftar', [
	'uses' => 'AuthController@postDaftar',
	'middleware' => ['guest']
]);

Route::get('/logout', [
	'uses' => 'AuthController@getLogout',
	'as' => 'logout',
]);




// member
// Route::get('/profil', 'HomeController@profil');
// Route::get('/profil', [
// 	'uses' => 'HomeController@profil',
// 	'as' => 'profil',
// ]);


// Route::get('/daftar', 'UsersController@daftar');

// Route::get('/beranda', 'UsersController@beranda');
// Route::post('/beranda', 'UsersController@beranda');



// upload file
Route::get('/upload', 'FileUploadController@index');
Route::post('/upload', 'FileUploadController@upload');

// Route::post('/upload', 'FileUploadController@upload');


/**
 * Search
 */

Route::get('/search', [
	'uses' => 'SearchController@getResults',
	'as' => 'search.results',
]);


/**
 * Profil
 */

Route::get('/user/{username}', [
	'uses' => 'ProfilController@getProfil',
	'as' => 'profil.index',
]);

Route::get('/profil/edit', [
	'uses' => 'ProfilController@getProfilEdit',
	'as' => 'profil.edit',
	'middleware' => ['auth'],
]);

Route::post('/profil/edit', [
	'uses' => 'ProfilController@postProfilEdit',
	'middleware' => ['auth'],
]);
// gambar profil
// Route::get('/profil/avatar', [
// 	'uses' => 'ProfilController@avatar',
// 	'as' => 'user.avatar',
// 	'middleware' => ['auth'],
// ]);
Route::post('/profil/avatar', [
	'uses' => 'ProfilController@postAvatar',
	'as' => 'profil.avatar',
	'middleware' => ['auth'],
]);

/**
 * Status
 */

Route::post('/status', [
	'uses' => 'StatusController@postStatus',
	'as' => 'status.post',
	'middleware' => ['auth'],
]);

Route::post('/status/{statusId}/balas', [
	'uses' => 'StatusController@postBalas',
	'as' => 'status.balas',
	'middleware' => ['auth'],
]);

Route::get('/status/{statusId}/suka', [
	'uses' => 'StatusController@getSuka',
	'as' => 'status.suka',
	'middleware' => ['auth'],
]);