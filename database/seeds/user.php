<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999);
        // shuffle the result
        $string = str_shuffle($pin);
        DB::table('users')->insert([
            'name' => Str::random(4),
            'email' => Str::random(4).'@gmail.com',
            'password' => bcrypt('password'),
            'PhoneNumber' =>'09'.mt_rand(1000000, 9999999),
            'gender'=> 'bot',
            'birthDate'=> mt_rand(1350,1379).'/'.mt_rand(1,12).'/'.mt_rand(1,30),
        ]);
    }
}
