<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\status_yates;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            Status_YateSeeder::class,
            RolSeeder::class,
            UserSeeder::class,
        ]);
        

        

        
    }
}
