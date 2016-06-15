<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admire;
use Validator;
use Redirect;

use Illuminate\Support\Facades\Input;
class accountController extends Controller
{

function showlogin() {
return view('account.login');

}
	
	 function doLogin()
	{
	
	// validate the info, create rules for the inputs
$rules = array(
    'accountnum'    => 'required', 
    'lastname' => 'required' 
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return redirect()->back()
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(); // send back the input (not the password) so that we can repopulate the form
} else {

    // create our user data for the authentication
    $userdata = array(
        'accountnum'     => Input::get('accountnum'),
        'lastname'  => Input::get('lastname')
    );

		$admire = new admire();
		$database =  $admire->LoginProcedure($userdata);
		

		if($database[0]->Valid != 1)
		{
		return redirect()->back()->withInput()->with('message', 'Invalid Username and password.');
        
		}
				 setcookie("account", Input::get('accountnum'));

		return redirect()->route('accountmaindashboard', Input::get('accountnum'));

		
		//return $database;
		}//else validates
	} //end check login
	
	
	function showDashboardMain($accountid) {

		$admire = new admire();
		$familyNames =  $admire->DashboardFamilyNames($accountid);
		$familyAddress =  $admire->DashboardFamilyAddress($accountid);
		$familyIndividuals =  $admire->DashboardIndividual($accountid);
		$familytel =  $admire->DashboardFamilyTel($accountid);
	//	$familyEvent = $admire->DashboardFamilyEvent($accountid);
	return view('account.dashboardmain')
	->with('familyNames',$familyNames)
	->with('familyAddress',$familyAddress)
	->with('TelLists',$familytel)
	//->with('familyEvents',$familyEvent)
	->with('familyIndividuals',$familyIndividuals);
	}
	function showDashboardInd($indid) {
	
	setcookie('indid', $indid, time()+60*60*24*365, '/', 'oorah.org', false);
	$admire = new admire();
		$IndInfo =  $admire->DashboardIndGetInfo($indid);
		$IndTels =  $admire->DashboardIndTel($indid);
		$IndAffiliation = $admire->DashboardIndAffiliation($indid);
		
return view('account.dashboardInd')
	->with('IndInfo',$IndInfo)
	->with('TelLists',$IndTels)
	->with('IndAffiliations',$IndAffiliation)
;

	}
	
	function showUpload() {
	return view('account.upload');
	}
	
	function doUpload() {
	// read image from temporary file
$img = Image::make($_FILES['image']['tmp_name']);

// resize image
$img->fit(300, 200);

// save image
//$img->save('foo/bar.jpg');
return $img;
	}
} // end extends controller
