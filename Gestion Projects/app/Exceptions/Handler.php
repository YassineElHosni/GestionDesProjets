<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
        //\Symfony\Component\HttpKernel\Exception\NotFoundHttpException::class,
        //UnexpectedValueException::class,
        //NotFoundHttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
    /*   if ($e instanceof HttpException) {
         $e = new HttpException(503, $e->getMessage());
         return $this->renderHttpException($e);
       }
      // 404 page when a model is not found
    if ($e instanceof ModelNotFoundException) {
      $e = new ModelNotFoundException(404, $e->getMessage());
      return $this->renderModelNotFoundException($e);
        //return response()->abort(404, 'Page not found!');
    }
    // custom error message
    if ($e instanceof \ErrorException) {
      $e = new ErrorException(500, $e->getMessage());
      return $this->renderErrorException($e);
      //  return response()->abort(500,'Oups somthing went wrong!');
    } else {
        return parent::render($request, $e);
    }*/

    //return parent::render($request, $e);
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
    /*
    *generate error msg due to a missing value
    */
    /*protected function missingvalue($request,UnexpectedValueException $exception)
    {

        return 'Oups something went wrong  !';
    });
    /*
    *handling routing exception error ResourceNotFoundException
    *
    protected function routingException($request,NotFoundHttpException $exception)
    {
      abort(500, 'Oups the page you are looking for is missing ');
    });*/
}
