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
            'username'  => 'Lionflex IT',
            'password'  => bcrypt('admin123'),
            'email'     => 'lionflexit@gmail.com',
            'zipcode'   => '5701RK',
            'address'   => 'Markt 32D',
            'city'      => 'Helmond',
        ]);
    }
}
