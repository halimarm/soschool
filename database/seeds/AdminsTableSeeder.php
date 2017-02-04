<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin::truncate(); 
        Admin::create( [
            'nama'  => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@soschool.dev',
            'password' => bcrypt('admin'),
        ] );
    }
}
