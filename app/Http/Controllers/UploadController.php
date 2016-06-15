<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Validator;
use Redirect;
use Request;
use Image;
use App\Admire;
use App\InsertTuition;
class UploadController extends Controller {
public function upload() {
  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required|max:4000'); //mimes:jpeg,bmp,png and for max size max:10000
  $messages = [
    'same'    => 'The :attribute and :other must match.',
    'size'    => 'The :attribute must be exactly :size.',
    'between' => 'The :attribute must be between :min - :max.',
    'required'      => 'The :attribute is missing or corrupted.',
];
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules,$messages);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'C:\\inetpub\\sites\\thezone.org\\uploads\\'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
	  //Insert into database
	  $tuition = InsertTuition::findOrFail(Input::get('record'));
	  if (Input::get('type') == 'child') {
$tuition ->filename="ftp://207.97.208.219:2121/" .$fileName;
	  } elseif (Input::get('type') == 'father') {
$tuition ->filenameparent1= "ftp://207.97.208.219:2121/" . $fileName;
	  } else{
$tuition ->filenameparent2="ftp://207.97.208.219:2121/" .$fileName;	  	
	  }
		$tuition->update();

      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('http://www.oorah.org/tuition/childlist.asp');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload')->withError('uploaded file is not valid');
    }
  }
}

	public function uploadFromAccounts() {
 // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required'); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('account.upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
	/*
$img = Image::make(Input::file('image'));

// resize image
$img->fit(300, 200);
*/
/*$user->image = $big_image->encode('jpg', 80);
$user->save();*/

$img_data = file_get_contents(Input::file('image'));
$type = pathinfo(Input::file('image'), PATHINFO_EXTENSION);
$base64 = base64_encode($img_data);


$fp      = fopen($_FILES['image']['tmp_name'], 'r');
$content = fread($fp, filesize($_FILES['image']['tmp_name']));
$content = addslashes($content);
fclose($fp);


    //  $destinationPath = 'C:\\inetpub\\sites\\thezone.org\\uploads\\'; // upload path
     // $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
     // $fileName = rand(11111,99999).'.'.$extension; // renameing image
     // Input::file('image')->move($destinationPath, $fileName); // uploading file to given 

	$admire = new admire();
		$IndInfoUpload =  $admire->DashboardUploadImage(37286, $content );

		return $IndInfoUpload;

      Session::flash('message', 'Upload successfully'); 
		return redirect()->route('accountInddashboard', Input::get('indid'));
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('account/upload');
    }
  }
	}
}