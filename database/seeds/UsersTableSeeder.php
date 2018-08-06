<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'faisal',
            'email' => 'faisal@gmail.com',
            'password' => bcrypt('faisal'),
            'role_id' => 1
        ]);
    }
}
