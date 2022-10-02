<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\status_yates;
use Illuminate\Support\Facades\DB;

class Status_YateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos por defecto elementos en la base de datos

        DB::table('status_yates')->insert([
            // ..
            "nombre"=> 'disponible',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
        ]);

        DB::table('status_yates')->insert([
            // ..
            "nombre"=> 'vendido',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
        ]);

        DB::table('status_yates')->insert([
            // ..
            "nombre"=> 'alquilado',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
        ]);

        DB::table('status_yates')->insert([
            // ..
            "nombre"=> 'dañado',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
        ]);

    }
}
