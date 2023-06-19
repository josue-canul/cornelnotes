<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function GuzzleHttp\Promise\all;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = Carrera::all();
        foreach ($carreras as $carrera) {
            Asignatura::factory()
                ->count(6)
                ->create([
                    'id_carrera' => $carrera
                ]);
        }
    }
}
