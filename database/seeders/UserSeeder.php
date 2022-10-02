<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(! User::where('nombre', 'admin')->first())
            User::create([
                'nombre' => 'admin',
                'email' => 'admin@solanko.com',
                //'password' => Hash::make('solanko12345'),
                'password' => Hash::make('123'),
                'role'  => 1,
            ]);
        
            User::create([
                'nombre' => 'lucas',
                'email' => 'lucas@solanko.com',
                //'password' => Hash::make('solanko12345'),
                'password' => Hash::make('lucas'),
                'role'  => 1,
            ]);
    }
}
