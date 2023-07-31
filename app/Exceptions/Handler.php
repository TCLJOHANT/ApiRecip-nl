<?php
//el archivo  handler.php  se utiliza para personalizar y 
//controlar cómo se manejan las excepciones y errores en la aplicación Laravel
namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    //
    public function invalidJson ($request, ValidationValidationException $e){
        return response()->json([
            'mensaje' => __('los datos proporionados no son validos'),
            'errores' => $e->errors(),
        ],$e->status);
    }

    //al momento de no encontrar un modelo, envia un json diciendo el error
    public function render($request, Throwable $e)
    {
        if($e instanceof ModelNotFoundException){
            return response()->json([
                "respuesta" => false,
                "error" => "Error modelo no encontrado"
            ],400);
        }
        return parent::render($request,$e);
    }


}
