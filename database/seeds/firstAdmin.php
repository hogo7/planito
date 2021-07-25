<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class firstAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'master',
            'userName' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => bcrypt('password'),
            'accessLevel' => 'root',

        ]);
    }
    
}
