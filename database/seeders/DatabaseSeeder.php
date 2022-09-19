<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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

        if(! User::where('nombre', 'admin')->first())
            User::create([
                'nombre' => 'admin',
                'email' => 'admin@solanko.com',
                'password' => Hash::make('solanko12345'),
                'role'  => 1,
            ]);
    }
}
