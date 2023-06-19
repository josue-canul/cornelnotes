<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'carrera' => 'ISC',
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'II',
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'IEM',
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'IE',
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'IER',
        ]);
    }
}
