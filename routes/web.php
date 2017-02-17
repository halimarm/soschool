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


// login & daftar
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
// admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/user/edit/password', 'PasswordController@gantiAdmin')->name('admin.gantipass');
    Route::put('/admin/user/edit/password', 'PasswordController@updateAdmin')->name('admin.updateAdmin');
});
// member
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profil/edit/password', 'PasswordController@ganti')->name('password.ganti');
    Route::put('/profil/edit/password', 'PasswordController@update')->name('password.update');
});
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

// hapus status member
Route::post('/status/{id}/hapus', [
	'uses' => 'HomeController@statusHapus',
	'as' => 'status.hapus',
]);
Route::post('/komentar/{id}/hapus', [
	'uses' => 'HomeController@komentarHapus',
	'as' => 'komentar.hapus',
]);

// Route::get('/carbon', 'StatusController@carbon');


/**
 * Admin 
 */

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin',function(){
    	return redirect()->route('admin.login');
    });
    Route::get('/admin/login', [
    	'uses' => 'AdminAuthController@getLogin',
    ]);

    Route::post('/admin/login', [
		'uses' => 'AdminAuthController@postLogin',
		'as' => 'admin.login',
		
	]);
    Route::get('/admin/logout', [
    	'uses' => 'AdminAuthController@adminLogout',
    	'as' => 'admin.logout',
    ]);


	Route::get('/admin/member/{username}/detail', [
		'uses' => 'AdminController@detail',
		'as' => 'admin.member.detail',
	]);

	Route::get('/admin/dashboard', [
		'uses' => 'AdminController@index',
		'as' => 'admin.index',
		
	]);

	Route::get('/admin/member', [
		'uses' => 'AdminController@member',
		'as' => 'admin.member',
		
	]);

	// tambah member
	Route::get('/admin/member/tambah', [
		'uses' => 'AdminController@getTambahUser',
		'as' => 'admin.member.tambah',
		
	]);

	// HAPUS member
	Route::post('/admin/member/{id}/hapus', [
		'uses' => 'AdminController@hapus',
		'as' => 'admin.member.hapus',
		
	]);
	// HAPUS admin
	Route::post('/admin/user/{id}/hapus', [
		'uses' => 'AdminController@hapusAdmin',
		'as' => 'admin.hapus',
	]);
	// HAPUS status
	Route::post('/admin/status/{id}/hapus', [
		'uses' => 'AdminController@statusHapus',
		'as' => 'admin.status.hapus',
		
	]);
	// HAPUS komentar
	Route::post('/admin/komentar/{id}/hapus', [
		'uses' => 'AdminController@komentarHapus',
		'as' => 'admin.komentar.hapus',
		
	]);

	// semua status
	Route::get('/admin/status', [
		'uses' => 'AdminController@status',
		'as' => 'admin.status',
		
	]);

	Route::get('/admin/komentar', [
		'uses' => 'AdminController@komentar',
		'as' => 'admin.komentar',
		
	]);

	// pengaturan admin
	Route::get('/admin/user', [
		'uses' => 'AdminController@getUserAdmin',
		'as' => 'admin.user',
		
	]);
	Route::get('/admin/user/tambah', [
		'uses' => 'AdminController@getTambahAdmin',
		'as' => 'admin.tambah',
		
	]);
	Route::post('/admin/user/tambah', [
		'uses' => 'AdminController@postTambahAdmin',
	]);

});  



// berkas

Route::get('/berkas', [
	'uses' => 'HomeController@berkas',
	'as' => 'berkas'
]);

Route::get('/member', [
	'uses' => 'HomeController@member',
	'as' => 'member'
]);

