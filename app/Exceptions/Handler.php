<?php

namespace App\Exceptions;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Input;
use Request;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
	if ($e instanceof \Exception) {
        // emails.exception is the template of your email
        // it will have access to the $error that we are passing below

Mail::send('emails.error',['error' => $e->getMessage(), 'request'=>Input::all()], function($message)
{
$message->from('devorah.fleisher@oorah.org', 'Devorah Fleisher');
    $message->to('k4kerrors@gmail.com')->subject('Tuition Application Error');
});		
		
    }
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
	//if my ip give error message
	if ($_SERVER['REMOTE_ADDR'] != "216.160.130.51") { 
	  if ($e instanceof \ErrorException) {
        return response()->view('errors.500', [], 500);
    }else if($e instanceof \InvalidArgumentException) {
		return response()->view('errors.500', [], 500);
		}else if($e instanceof \QueryException) {
		return response()->view('errors.500', [], 500);
	} else {
        return parent::render($request, $e);
    }
	}else { //else my ip
	return parent::render($request, $e);
	}//end my ip 
	
     
    }
}
