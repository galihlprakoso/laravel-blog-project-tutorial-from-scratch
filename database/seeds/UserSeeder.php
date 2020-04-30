<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Galih Laras Prakoso',
        'email' => 'galih@ghack.dev',
        'password' => Hash::make('password'),
      ]);
    }
}
