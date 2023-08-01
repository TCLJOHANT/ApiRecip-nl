<?php

namespace App\Http\Controllers\API;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarUsuarioRequest;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Http\Resources\UsuarioResource;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //get-leer-read
    public function index()
    {
        return UsuarioResource::collection(Usuario::paginate(2));
    }
    //post-crear-create
    public function store(GuardarUsuarioRequest $request)
    {
        return (new UsuarioResource( Usuario::create($request->all())))->additional([
            'mensaje' => 'Usuario Agregado con exito'
        ]);
    }
    //llamar solo un registro
    public function show(Usuario $usuario)
    {
        return new UsuarioResource($usuario);
    }
    //put-update-actualizar
    public function update(ActualizarUsuarioRequest $request,Usuario $usuario)
    {
        $usuario->update($request->all());
        return (new UsuarioResource($usuario))->additional([
            'respuesta'=> 'Usuario Actualizado con exito'
        ])->response()->setStatusCode(202);
    }
    //delete-eliminar
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return (new UsuarioResource($usuario))->additional([
            'mensaje' => 'Usuario Eliminado con exito'
        ]);;
    }
}
