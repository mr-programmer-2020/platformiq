<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * SettingsSeeder this seeder will be used to create data for setting model when the project upload 
         * 
         * [/]   => to leave from SettingsSeeder file 
         * [App/Setting] => to enter folder of the project and choice Setting model
        **/
         \App\Setting::create([

        'blog_name'=> 'alex Blog' ,
        'phone_number'=> '213 445 67 543' ,
        'blog_email'=> 'alex@alex.org' ,
        'address'=> 'street - 12'  
       ]);

        
    }
}