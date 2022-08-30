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
        if(! Role::where('type', 'admin')->first())
            Role::insert(
                array(
                    'type'           => 'admin',
                    'created_at'    => date('Y-m-d H:m:s'),
                    'updated_at'    => date('Y-m-d H:m:s'),
                )
            );

        if(! Role::where('type', 'user')->first())
            Role::insert(
                array(
                    'type'           => 'user',
                    'created_at'    => date('Y-m-d H:m:s'),
                    'updated_at'    => date('Y-m-d H:m:s'),
                )
            );

        if(! User::where('name', 'admin')->first())
            User::create([
                'name' => 'admin',
                'email' => 'admin@solanko.com',
                'password' => Hash::make('solanko12345'),
                'role'  => 1,
            ]);
    }
}
