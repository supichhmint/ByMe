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






Route::get('/', function()
{
	
	
	
	
	
	
	return View::make('index');
	
	
	
	
	
	
}





);






Route::get('/login', function()
{
	
	
	
	
	
	
	return View::make('login');
	
	
	
	
	
	
}





);







Route::get('/documentation', function()
{
	
	
	
	
	
	
	return View::make('documentation');
	
	
	
	
	
	
}





);







Route::get('/app', function()
{
	
	
	
	
	
	
	return View::make('app');
	
	
	
	
	
	
}





);







Route::get('/addTrip', function()
{
	
	
	
	
	
	
	return View::make('/addtrip');
	
	
	
	
	
	
}





);






Route::get('/headlogo', function()
{
	
	
	
	
	
	
	return View::make('/headlogo');
	
	
	
	
	
	
}





);






Route::get('/profile_user', function()
{
	
	
	
	
	
	
	return view('/profile_user');
	
	
	
	
	
	
}





);







Route::get('/listGrid', function()
{
	
	
	
	
	
	
	return view('/listGrid');
	
	
	
	
	
	
}





);







Route::get('/loginas', function()
{
	
	
	
	
	
	
	return view('/loginas');
	
	
	
	
	
	
}





);






Route::get('/regisuser', function()
{
	
	
	
	
	
	
	return view('/regis_user');
	
	
	
	
	
	
}





);





Route::get('/regisagency', function()
{
	
	
	
	
	
	
	return view('/regis_agency');
	
	
	
	
	
	
}





);




Route::get('/logintourist', function()
{
	
	
	
	
	
	
	return view('/logintourist');
	
	
	
	
	
	
}





);




Route::get('/booking', function()
{
	
	
	
	
	
	
	return view('/booking');
	
	
	
	
	
	
}
);
Route::get('/bookingsum', function()
{
	
	
	
	
	
	
	return view('/bookingsum');
	
	
	
	
	
	
}




);
Route::get('/searchtrip', function()
{
	
	
	
	
	
	
	return view('/searchTrip');
	
	
	
	
	
	
}




);

Route::get('/agreement', function()
{
	
	
	
	
	
	
	return view('/agreement');
	
	
	
	
	
	
}




);
Auth::routes();







Route::get('/home', 'HomeController@index');






Route::get('/agency', 'tripController@index');







//Route::get('/addtripround', 'tripController@add_tripRound');







Route::resource('/addtrip','addtripController');






Route::resource('/show','showtripController');






Route::resource('/showtrip','tripAgencyController');






Route::resource('/trip','tripController');






Route::resource('/addtripround','addtriproundController');






Route::resource('/completetrip','comptelttripController');








Auth::routes();







Route::get('/home', 'HomeController@index')->name('home');






