<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admire extends Model
{
protected $connection = 'sqlsrv2';
    protected $table = 'KiruvLogin';

/*
public function MileageLoginProcedure(){
		
		$userName = Input::get('userName');
 		$password = Input::get('password');
		$authMailAge  = "execute MileageLogin'".$userName."','0','".$password."' , NULL";
		$database = \DB::select($authMailAge);
		return $database;
		
	}*/
	
	public function LoginProcedure(){
		
		// @LoginCode, @Password, @IpAddress, @ApiKey, @ImeiNumber
	/*	$accountid = Input::get('accountid');
 		$Lastname = Input::get('Lastname');
*/
		$accountid ="204095";
 		$Lastname = 'Pultman';

		$LoginConn = 
		"EXEC	[dbo].[ActLogin]
		@ActID = " . $accountid .",
		@LastName = '" .$Lastname."'";

		$databaseResponse = \DB::select($LoginConn);
		return $databaseResponse;
	}
	/*
	public function MileageGetCoordinator($AuthTokenValue){
		
		$MileageGetCoordinator  = 'Execute MileageGetCoordinator "'.$AuthTokenValue.'"';
		$GetCoordinator = \DB::select($MileageGetCoordinator);
		return $GetCoordinator;
	}
*/
}
