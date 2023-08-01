<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccesoRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AutenticarController extends Controller
{
    public function registro( RegistroRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json([
            'respuesta'=> true,
            'mensaje' => 'Usuario Registrado Correctamente'
        ],200);
    }
    //autentica y generar token de acceso 
    public function acceso(AccesoRequest $request){
        //recibe solicitud de acceso con los datos del usuario
        $user = User::where('email', $request->email)->first();
        //busca en la base usuario con el email proporcionado usando  User. Si no se encuentra usuario o contraseña 
        //no coincide con la almacenada en la base, lanza excepción de validación con un error. 
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'mensaje' => ['las credenciales son incorrectas.'],
            ]);
        }
        //Si las credenciales son correctas, se genera un token de acceso en este caso se gusrada e texto plano
        $token = $user->createToken($request->email )->plainTextToken;
        return response()->json([
            'respuesta' => true,
            'token' => $token,
            'usuario' => $user
        ],200);
    }

    //eliminacion del token
    public function cerrarSesion(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'respuesta' => true,
            'mensaje' => 'Token eliminado Exitosamente'
        ],200);
    }
}
