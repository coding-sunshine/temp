<?php

namespace App\Exceptions;

use Exception;
use Response;
use App\Exceptions\ReallyFriendlyException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Session;
use ReflectionException;

class Handler extends ExceptionHandler
{
	/**
	 * A list of the exception types that should not be reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		HttpException::class,
		ModelNotFoundException::class,
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
		return parent::report($e);
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
		switch($e){
			case ($e instanceof ModelNotFoundException):
				$e = new NotFoundHttpException($e->getMessage(), $e);
				break;
			case ($e instanceof ReallyFriendlyException):
                Session::flash('message', $e->getMessage()); 
                Session::flash('alert-class', 'alert-danger');  
				if ($e->redirect_url)
					redirect($e->redirect_url);
				else if(request()->server('HTTP_REFERER'))
					return redirect()->back();
				else
					return redirect('');
				break;
			case ($e instanceof ReflectionException):
                Session::flash('message', 'Invalid URL '. request()->url()); 
                Session::flash('alert-class', 'alert-danger');  
				return redirect('');
				break;
		}
		return parent::render($request, $e);
	}
}
