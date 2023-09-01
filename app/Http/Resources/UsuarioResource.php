<?php

namespace App\Http\Resources;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id'=> $this->id,
            'nombre'=> Str::upper($this->nombre),
            'correo' => $this->correo,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'genero' => $this->genero,
            'contraseña' => $this->contraseña,
            //se puede mostrar created_at y updated _at a pesar que en modelo no lo permito.
            // 'fecha_creacion' => $this->created_at->format('d-m-Y'),
            // 'fecha_actualizacion' => $this->updated_at->format('d-m-Y')
        ];

    }
    public function with(Request $request)
    {
        return [
            'respuesta'=> true
        ];
    }
}
