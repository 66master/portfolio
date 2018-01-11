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

/*
Route::get('/', function () {
    return view('home');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index')->name('home');

//portfolio
Route::get('/portfolios', 'PortfoliosController@index')->name('portfolio');
Route::get('/portfolios/create', 'PortfoliosController@create');
Route::post('/portfolios', 'PortfoliosController@store');
Route::get('/portfolios/edit', 'PortfoliosController@edit');
Route::get('/portfolios/show/{id}', 'PortfoliosController@show')->name('portfolio.show');


//profile
Route::get('/profile/show/{id?}', function($id = null){

	$profile = new App\Http\Controllers\ProfileController;

	if(isset($id)){
		return $profile->show($id);
	}elseif($id === null){
		return view('profile.show')->with('message', 'プロフィーはまだ登録されていません。');
	}else{
		
	}

})->name('profile');

Route::get('/profile/edit', 'ProfileController@edit');



//jsからenvの内容を取得するajax用のルーティング
Route::post('/profile/getenv', function() {

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$request = $_POST['request'];
	}
	return env($request);

});