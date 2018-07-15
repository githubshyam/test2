
<?php
use Illuminate\Http\Request;

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

Route::post('post-name','test\UserNameController@user');
//Route::post('post-name', function(Request $request) {
	//dd('jjk');
    // dd($request->all());
// });

Route::get('user-detail','test\UserNameController@getuser');
Route::get('form','FormController@create');
Route::get('form-detail','FormController@getuser');

Route::post('form','FormController@store');
//Route::post('form-detail','FormController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('post-name', function (Request $request) {
    //$path = $request->file('upload')->store('upload');

   // dd($path);
//});
