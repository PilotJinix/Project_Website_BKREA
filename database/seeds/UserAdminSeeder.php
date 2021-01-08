<?php

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nama_lengkap'	=> 'admin',
            'username' => 'admin',
            'email'	=> 'admin@email.com',
            'nomer_hp' => '070980809070',
            'alamat' => 'sdawdsada',
            'password'	=> Hash::make('12345678'),
    ]);
    }
}
