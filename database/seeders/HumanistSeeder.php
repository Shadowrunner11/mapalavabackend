<?php

namespace Database\Seeders;

use App\Models\Humanist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HumanistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('humanists')->insert([
        [
          'departamento' => "ICA",
          'apelativo' => "El poeta de la prosa",
          'descripcion' => "Uno de los intelectuales más brillantes del Perú, especialista en el siglo XVI con sugestivas aproximaciones a la historia de otros siglos",
          'name' => "Raul",
          'lastName' => "Porras Barrenechea",
          'fotoUrl' => "https://3.bp.blogspot.com/-6iWVHEeCYN8/VesaOTyv0NI/AAAAAAAAAfI/CAf0Z7F8wTk/s1600/raul-porras-barrenechea.jpg",
          'rating' => 5
        ],
        [
          'departamento' => "ICA",
          'apelativo' => "Conde de Lemos",
          'descripcion' => " Es considerado uno de los principales cuentistas del Perú, junto con Julio Ramón Ribeyro",
          'name' => "Abraham",
          'lastName' => "Valdelomar Pinto",
          'fotoUrl' => "https://upload.wikimedia.org/wikipedia/commons/c/c5/Valdelomar1.jpg",
          'rating' => 5
        ],
      ]);
    }
}
