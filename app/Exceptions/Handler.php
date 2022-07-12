<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;

// Core 
use App\Utils\ConstantsUtil;
use App\Utils\ResponseJsonUtil;

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

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($e->getCode() === ConstantsUtil::NOT_FOUND) {
            return ResponseJsonUtil::message(
                ConstantsUtil::FAIL,
                ConstantsUtil::NOT_FOUND,
                $e->getMessage()
            );
        }
        if ($e instanceof ValidationException) {            
            return ResponseJsonUtil::message(
                ConstantsUtil::FAIL,
                ConstantsUtil::UNPROCESSABLE_ENTITY,
                "Los datos proporcionados no son válidos."
            );
        }

        return ResponseJsonUtil::message(
            ConstantsUtil::FAIL,
            ConstantsUtil::SERVER_ERROR,
            $e->getMessage()
        );
    }
}