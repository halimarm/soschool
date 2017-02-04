<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
    	// DB::table('users')->insert([
    	// 	'name'     => str_random(10),
    	// 	'email'    => str_random(10).'@gmail.com',
    	// 	'password' => bcrypt('scret'),
    	// ]);
        User::create( [
            'nama_depan'  => 'halim',
            'nama_belakang'  => 'arm',
            'email' => 'halimarm@soschool.dev',
            'kelas_jurusan' => '12 RPL',
            'alamat' => 'Pasuruan',
            'jenis_kelamin' => 'Laki - Laki',
            'no_hp' => '08888888888',
            'status' => 'Siswa',
            'username' => 'halimarm',
            'password' => bcrypt('halimarm'),
        ] );

    }
}
