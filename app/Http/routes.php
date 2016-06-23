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
use Illuminate\Support\Facades\Session;
use App\InsertTuition;

//welcome screen

Route::get('/', function () {
 
    return view('welcome', compact('admire'));
});

//tuition form section
  Route::resource('form', 'TuitionController');

  Route::get('/upload', ['as'=>'upload', function() {
return view('upload');

      }]);

      Route::post('/upload', 'UploadController@upload');	

   Route::get('/uploadext', ['as'=>'uploadext', function() {
return view('uploadext');

      }]);

      Route::post('/uploadext', 'UploadExtController@upload');	

      //account management section

Route::resource('account', 'AccountController');

Route::get('account/login', array('uses' => 'accountController@show', 'as'=>'accountlogin'));
Route::post('account/login', array('uses' => 'accountController@doLogin'));
Route::get('account/dashboardmain/{id}', array('uses' => 'accountController@showDashboardMain','as'=>'accountmaindashboard'));
Route::get('account/dashboardind/{parentid}/{id}', array('uses' => 'accountController@showDashboardInd','as'=>'accountInddashboard'));
Route::get('account/upload/{id}', array('uses' => 'accountController@showUpload', 'as'=>'accountupload'));
Route::post('account/upload', array('uses' => 'UploadController@uploadFromAccounts'));

//ajax proc routes
Route::post('account/sendnewaddress', array('uses'=>'accountController@insertNewAddress' ));
Route::post('account/sendeditaddress', array('uses'=>'accountController@editAddress' ));
Route::post('account/senddeleteaddress', array('uses'=>'accountController@deleteAddress' ));
Route::post('account/senddefaultaddress', array('uses'=>'accountController@defaultAddress' ));
Route::post('account/sendnewtelaccount', array('uses'=>'accountController@newTelAccount' ));
Route::post('account/sendnewtelind', array('uses'=>'accountController@newTelInd' ));
Route::post('account/sendedittel', array('uses'=>'accountController@editTel' ));
Route::post('account/newdob', array('uses'=>'accountController@newDOB' ));
