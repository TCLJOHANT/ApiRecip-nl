<?php

namespace App\Http\Controllers\API;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarUsuarioRequest;
use App\Http\Requests\GuardarUsuarioRequest;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //get-leer-read
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    //post-crear-create
    public function store(GuardarUsuarioRequest $request)
    {
        Usuario::create($request->all());
        return response()->json([
            'respuesta'=> true,
            'mensaje' => 'usuario guardado con exito'
        ]);
    }

    /**
     * Display the specified resource.
     */
    //llamar solo un registro
    public function show(Usuario $usuario)
    {
        return response()->json([
            'respuesta'=> true,
            'usuario' => $usuario
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    //put-update-actualizar
    public function update(ActualizarUsuarioRequest $request,Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json([
            "respuesta" => True,
            "mensaje" => "Usuario Actualizado Correctamente"
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    //delete-eliminar
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json([
            "respuesta" => True,
            "mensaje" => "Usuario Eliminado Exitosamente"
        ],200);
    }
}
