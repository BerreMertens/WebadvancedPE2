<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Onbekwaamste',
            'username' => 'administrator',
            'email' => 'driesmoris@gmail.com',
            'password' => Hash::make('pxl123'),

        ));
    }
}
