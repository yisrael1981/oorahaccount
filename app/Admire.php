<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admire extends Model
{
protected $connection = 'sqlsrv2';
	

	public function LoginProcedure($userdata){

		//$accountid ="204095";
		//$Lastname = 'Pultman';

		$SqlConn = 
		"EXEC	[dbo].[ActLogin]
		@ActID = " . $userdata["accountnum"] .",
		@LastName = '" .$userdata["lastname"] ."'";

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
		
	}
		public function testnames () {
	$SqlConn = 
		"EXEC [dbo].[ActGetInfo]
		@ActID =   204095";
		//@ActID =  " . $familyid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	
	public function DashboardFamilyNames ($familyid) {
	$SqlConn = 
		"EXEC [dbo].[ActGetInfo]
		@ActID =  " . $familyid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function DashboardFamilyAddress ($familyid) {
	$SqlConn = 
		"EXEC [dbo].[ActGetAdrs]
		@ActID =  " . $familyid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	
public function InsertNewAddress ($input) {
	        $parts = explode(" ", $input['Address']);
$number = array_shift($parts);
$street = implode(" ", $parts);
	       
	        $SqlConn = 
		"EXEC [dbo].[AdrInsert]
		@ActID = '" . $input['accountid'] ."',
		@Type = '" . $input['Type'] ."',
		@Number = 	'" . $number ."',
		@Street = '" . $street ."',
		@City = '" . $input['City'] ."',
		@Country ='" . $input['Country'] ."',
		@State = '" . $input['State'] ."',
		@Zip = '" . $input['Zip'] ."',
		@InActive = " . $input['InActive']   ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		//$response = $databaseResponse->adrId;
		return $databaseResponse;
	}
	public function EditAddress ($input) {
		$parts = explode(" ", $input['Address']);
		$number = array_shift($parts);
		$street = implode(" ", $parts);
			       
	    $SqlConn = 
		"EXEC [dbo].[AdrUpdate]
		@AdrID = '" . $input['adrid'] ."',
		@Type = '" . $input['Type'] ."',
		@Number = 	'" . $number ."',
		@Street = '" . $street ."',
		@City = '" . $input['City'] ."',
		@Country ='" . $input['Country'] ."',
		@State = '" . $input['State'] ."',
		@Zip = '" . $input['Zip'] ."',
		@InActive = " . $input['InActive']   ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		//$response = $databaseResponse->adrId;
		return $databaseResponse;
	}
	public function DefaultAddress($input) {
	$SqlConn = 
		"EXEC [dbo].[ActMarkAdrAsDefault]
		@ActID =  " . $input['accountid'] .
		", @AdrID  = " . $input['adrid']  ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}

	public function DashboardFamilyTel($familyid) {
	$SqlConn = 
		"EXEC [dbo].[ActGetTels]
		@ActID =  " . $familyid  ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
		public function NewAccountTel($input) {
	$SqlConn = 
		"EXEC	[dbo].[ActTelInsert]
		@ActID = ". trim($input['accountid']) .",
		@Type = '". $input['Type'] ."',
		@Tel  = ".$input['Telephone']  ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function NewIndTel($input) {
	$SqlConn = 
		"EXEC	[dbo].[IndTelInsert]
		@ActID = ". trim($input['accountid']) .",
		@IndID  = ". $input['indid'] .",
		@Type = '". $input['Type'] ."',
		@Tel  = '".$input['Telephone']  ."'" ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function EditTel($input) {
	$SqlConn = 
		"EXEC	[dbo].[TelUpdate]
		@TelID  = ".$input['telid'].",
		@Type =  '". $input['Type'] ."',
		@Tel   = '".$input['Telephone'] . "',
		@Active = " . $input['active']  ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function DashboardFamilyEvent($familyid) {
	$SqlConn = 
		"EXEC [dbo].[Events_GetInvites_ActId ]
		@ActID =  " . $familyid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function DashboardIndividual($familyid) {
	$SqlConn = 
		"EXEC [dbo].[ActGetInds]
		@ActID =  " . $familyid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}

	public function DashboardIndGetInfo($indid){
	$SqlConn = 
		"EXEC [dbo].[IndGetInfo]
		@IndID  =  " . $indid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function DashboardIndTel($indid){
	$SqlConn = 
		"EXEC [dbo].[IndGetTels]
		@IndID  =  " . $indid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function DashboardIndAffiliation($indid){
	$SqlConn = 
		"EXEC [dbo].[IndGetKiruvAffiliation]
		@IndID  =  " . $indid ;

		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function DashboardUploadImage ($indid, $content) {
	$SqlConn = " EXEC	[dbo].[IndUpdateInfo]
		@IndID  = " .$indid. ",
		@DOB = NULL,
		@Image  = '". $content."',
		@Thumb ='". $content."'" ;
	
		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}
	public function NewDOB ($input) {
	$SqlConn = " EXEC	[dbo].[IndUpdateInfo]
		@IndID  = ". $input['indid']. ",
		@DOB = '" . $input['DOB'] ."',
		@Image  = NULL,
		@Thumb = NULL" ;
	
		$databaseResponse = \DB::connection('sqlsrv2')->select($SqlConn);
		return $databaseResponse;
	}	
}

