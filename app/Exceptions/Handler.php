<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TheSeer\Tokenizer\Exception;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Exception|Throwable $e)
    {
        if ($e instanceof ModelNotFoundException) {
            //$e = new NotFoundHttpException($e->getMessage(), $e);
            return \Response::json(['error' => 'No se encontró Registro'], 404);
        }

        if ($e instanceof NotFoundHttpException)
        {
            return \Response::json(['error' => 'La consulta API no es correcta verifique la ruta!'], 404);
        }

        return parent::render($request, $e);
    }
}
