<?php

namespace Database\Seeders;

use App\Models\Receta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recetas')->insert([
        	[
                'titulo' => 'Tarta de manzana',
                'categoria' => 'Postres',
                'ingredientes' => '3 manzanas, 200g de harina, 150g de azúcar, 100g de mantequilla, 2 huevos',
                'preparacion' => '1. Pelar y cortar las manzanas en rodajas. 2. Mezclar la harina, el azúcar y la mantequilla hasta obtener una masa. 3. Colocar la masa en un molde y cubrir con las rodajas de manzana. 4. Batir los huevos y verter sobre la tarta. 5. Hornear a 180°C durante 30 minutos.',
                'descripcion' => 'Deliciosa tarta de manzana casera.',
                'numComentarios' => 5
            ],
            [
                'titulo' => 'Pasta carbonara',
                'categoria' => 'Pastas',
                'ingredientes' => '200g de pasta, 100g de panceta, 2 yemas de huevo, 50g de queso parmesano rallado',
                'preparacion' => '1. Cocinar la pasta al dente en agua con sal. 2. Dorar la panceta en una sartén. 3. En un bol aparte, mezclar las yemas de huevo y el queso parmesano rallado. 4. Escurrir la pasta y mezclar con la panceta. 5. Agregar la mezcla de yemas y queso, y remover bien. 6. Servir caliente.',
                'descripcion' => 'Clásica receta italiana de pasta carbonara.',
                'numComentarios' => 8
            ],
            [
                'titulo' => 'Ensalada César',
                'categoria' => 'Ensaladas',
                'ingredientes' => 'Lechuga romana, croutones, queso parmesano, pechuga de pollo, aderezo César',
                'preparacion' => '1. Lavar y cortar la lechuga en trozos. 2. Cocinar la pechuga de pollo a la parrilla y cortar en tiras. 3. Mezclar la lechuga, los croutones y el queso parmesano en un bol. 4. Agregar las tiras de pollo. 5. Aliñar con aderezo César y mezclar bien.',
                'descripcion' => 'Refrescante ensalada César con pollo a la parrilla.',
                'numComentarios' => 3
            ]
        ]);
    }
}
