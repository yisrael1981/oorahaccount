<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admire;
use Validator;
use Redirect;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class accountController extends Controller
{

	protected $addressRules = [
		'Address'=>'required|max:50',
		'City'=>'required|max:40',
		'State'=>'required|max:20',
		'Zip'=>'required|max:15',
		'Country'=>'required|max:20'		
	];

	protected $telRules = [
	'Telephone' =>'required'
	];

	function show() {
		return view('account.login');

	}
	function destroy(Request $request) {
			$request->session()->flush();
			return view('account.logout');

	}
	 
	 function doLogin()	{
	
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

 		$admire = new admire();
		$response =  $admire->LoginProcedure(Input::all());
		

		if($response[0]->Valid != 1)
		{
		return redirect()->back()->withInput()->with('message', 'Invalid Username and password.');
        
		}/*
		$user = new User;
		$user->name= Input::get('lastname');
		$user->id= Input::get('accountnum');

		Auth::login($user);*/
		 session(['accountid' => Input::get('accountnum') ]);
		return redirect()->route('accountmaindashboard');
		}//else validates
	} //end check login
	
	
	function showDashboardMain() {


		$this->checkloggedin();
		$admire = new admire();

		return view('account.dashboardmain', compact('admire'))
		->with('TelLists', $admire->DashboardFamilyTel(session('accountid')))
		;
		}
	
function test() {
	
$admire = new admire();
			$response =  $admire->testnames(238051);
			return $response;
}
	function showDashboardInd( $indid) {
	
		$this->checkloggedin();
	
	$admire = new admire();
	
	return view('account.dashboardInd', compact('admire'))
	->with('indid', $indid)
	->with('TelLists',  $admire->DashboardIndTel($indid))
	;
	}
	
	function showUpload() {
	return view('account.upload');
	}
	
	function InsertNewAddress(Request $request) {
 		return $this->updateInformation(Input::all(),  $this->addressRules, 'InsertNewAddress');
	}

	function EditAddress(Request $request) {
 		return $this->updateInformation(Input::all(),  $this->addressRules, 'EditAddress');
	}
	function DeleteAddress(Request $request) {
 		return $this->updateInformation(Input::all(),  [] , 'EditAddress');
	}

	function DefaultAddress(Request $request) {
 		return $this->updateInformation(Input::all(),  [] , 'DefaultAddress');
	}

	function newTelAccount() {
		return $this->updateInformation(Input::all(),  $this->telRules, 'NewAccountTel');	
	}

	function newTelInd(){
		return $this->updateInformation(Input::all(),  $this->telRules , 'NewIndTel');	
	}
	function EditTel(){
		return $this->updateInformation(Input::all(),  $this->telRules , 'EditTel');	
	}
	function  newDOB(){
		return $this->updateInformation(Input::all(),  ['DOB'=>'required|date'] , 'NewDOB');		
	}
	protected function updateInformation($request, $rules, $procName){

	    $validator = Validator::make($request,  $rules);
	  if ($validator->fails()) {
	          return $validator->errors()->all();
	  }

		$admire = new admire();
		$response =  $admire->$procName($request);
		
		if($response[0]){
			return 'Success';
		}
		
		return 'Error';

		}//end new address

		protected function checkloggedin(){
			if ( session("accountid") == '') {
				abort(403);

			}

		}
} // end extends controller
