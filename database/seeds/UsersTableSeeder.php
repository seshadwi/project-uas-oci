<?php

use Illuminate\Database\Seeder;

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
            'full_name'  => 'Sesha Dwi Lestari',
            'email'      => '1941720173@student.polinema.ac.id',
            'username'   => 'admin',
            'password'   => bcrypt('admin123'),
            'avatar'     => '898192462.png'
        ]);
    }
}
