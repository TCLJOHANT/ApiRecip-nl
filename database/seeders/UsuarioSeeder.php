<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
	        	'nombre' => 'Johan Chate',
	        	'correo' => 'soytcljohant@gmail.com',
	        	'fecha_nacimiento' => '2005-06-12',
	        	'genero' => 'Masculino',
	        	'contraseña' =>  bcrypt('tcljohant'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
        	[
	        	'nombre' => 'Julio Ramón',
	        	'correo' => 'julio@gmail.com',
	        	'fecha_nacimiento' => '2002-09-02',
	        	'genero' => 'Masculino',
	        	'contraseña' => bcrypt('1234567890'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'nombre' => 'María Fernanda',
                'correo' => 'maria@gmail.com',
                'fecha_nacimiento' => '1998-03-21',
                'genero' => 'Femenino',
                'contraseña' => bcrypt('12345678'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nombre' => 'Pedro Luis',
                'correo' => 'pedro@gmail.com',
                'fecha_nacimiento' => '1985-10-05',
                'genero' => 'Masculino',
                'contraseña' => bcrypt('123456789'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
