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
 
    return view('welcome');
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

Route::get('account/login', array('uses' => 'accountController@showLogin', 'as'=>'accountlogin'));
Route::get('account/dashboardmain/{accountid}', array('uses' => 'accountController@showDashboardMain','as'=>'accountmaindashboard'));
Route::get('account/dashboardind/{accountid}/{indid}', array('uses' => 'accountController@showDashboardInd','as'=>'accountInddashboard'));
Route::get('account/upload/{indid}', array('uses' => 'accountController@showUpload', 'as'=>'accountupload'));
Route::post('account/upload', array('uses' => 'UploadController@uploadFromAccounts'));


Route::post('account/login', array('uses' => 'accountController@doLogin'));
Route::resource('account', 'AccountController');
