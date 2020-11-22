<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(SettingsSeeder::class);
        /*
           this to call SettingsSeeder class to insert information inside the class which inside SettingsSeeder 
           SettingsSeeder  it will be used to insert info of variables which inside his body 
        */ 
    }
}