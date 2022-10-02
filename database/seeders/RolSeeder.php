<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(! Role::where('nombre', 'admin')->first())
            Role::insert(
                array(
                    'nombre'           => 'admin',
                    'created_at'    => date('Y-m-d H:m:s'),
                    'updated_at'    => date('Y-m-d H:m:s'),
                )
            );

        if(! Role::where('nombre', 'user')->first())
            Role::insert(
                array(
                    'nombre'           => 'user',
                    'created_at'    => date('Y-m-d H:m:s'),
                    'updated_at'    => date('Y-m-d H:m:s'),
                )
            );
    }
}
