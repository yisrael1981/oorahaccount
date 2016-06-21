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

 		$admire = new admire();
		$response =  $admire->LoginProcedure(Input::all());
		

		if($response[0]->Valid != 1)
		{
		return redirect()->back()->withInput()->with('message', 'Invalid Username and password.');
        
		}
			return redirect()->route('accountmaindashboard', Input::get('accountnum'));
		}//else validates
	} //end check login
	
	
	function showDashboardMain($accountid) {

		$admire = new admire();
	
		return view('account.dashboardmain')
		->with('familyNames', $admire->DashboardFamilyNames($accountid) )
		->with('familyAddress', $admire->DashboardFamilyAddress($accountid))
		->with('TelLists', $admire->DashboardFamilyTel($accountid))
		//->with('familyEvents',$admire->DashboardFamilyEvent($accountid))
		->with('familyIndividuals',$admire->DashboardIndividual($accountid));
		}
	function showDashboardInd($parentid, $indid) {
	
	
	$admire = new admire();
	
	return view('account.dashboardInd')
	->with('parentid', $parentid)
	->with('IndInfo',$admire->DashboardIndGetInfo($indid))
	->with('TelLists',  $admire->DashboardIndTel($indid))
	->with('IndAffiliations',$admire->DashboardIndAffiliation($indid))
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
} // end extends controller
