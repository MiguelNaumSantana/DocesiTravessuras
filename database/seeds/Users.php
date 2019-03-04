<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Miguel',
            'email' => 'miguel'.'@gmail.com',
            'password' => bcrypt('h3dz1209'),
            
        ]);   
    }
}
