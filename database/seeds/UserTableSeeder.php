<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('users')->insert(array(
            'name'     => 'Natanael Acosta',
            'email'    => 'natanael926@gmail.com',
            'password' => \Hash::make('secret')
        ));
    }

}