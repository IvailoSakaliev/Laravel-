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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', 'ContactController@index');
Route::post('contact', 'ContactController@SendMassage')
;

Auth::routes();

Route::get('/home', 'HomeController@index');

Route:: get ('logout' , function ()
{
	return view('index');
});

Route::get('admin',function()
{	
	return view('Admin\indexDashboard');
})->middleware('admin');

Route::get('create', function ()
{
	return view('Admin/create');
})-> middleware('admin');

Route::get('edit', 'ProductsController@IndexDashboard')-> middleware('admin');

Route::get('delete', 'ProductsController@IndexDashboard')-> middleware('admin');

Route::get('editProduct/{id}', 'ProductsController@IndexEdit')-> middleware('admin');

Route::get('deleteProduct/{id}', 'ProductsController@IndexDelete')-> middleware('admin');
Route::get('product','ProductsController@Index');

// post 
Route::post('deleteProduct/{id}','ProductsController@DeleteProduct');
Route::post('editProduct/{id}','ProductsController@EditProduct');
Route::post('create', 'ProductsController@AddProduct');

Route::get('viewProduct/{id}', 'ProductsController@ViewProduct');
Route::post('viewProduct/{id}', 'ProductsController@EnterComment');

Route::get('viewProduct/comment/{id}', 'ProductsController@IndexCommnets');

Route::post('product' , "ProductsController@FilterProducts");