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
	public function DashboardFamilyTel($familyid) {
	$SqlConn = 
		"EXEC [dbo].[ActGetTels]
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
	
}
