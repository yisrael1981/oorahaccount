<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admire;

class accountController extends Controller
{
    //

	function index() {
		$admire = admire::all();

       return $admire;

	}

	 function create()
	{
	
		$admire = new admire();
		$database =  $admire->LoginProcedure();
		/*if($database)
		{
			$data['type'] = 'Success';
			$data['Id'] = $database[0]->Id;
			$data['token'] = MD5($database[0]->Email);
			$response = $data;
		}
		else
		{
			$response['type'] = 'Error'; 
			$response['data'] = 'Wrong Username Or Password Provided.';
		}		
		header('Content-Type: application/json');
		echo json_encode($response);*/
		return $database;
	}
	

}
