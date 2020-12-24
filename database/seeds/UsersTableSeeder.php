<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // Generate demo Admin infor
        DB::table('users')->insert([
            'role_id'   => '1',
            'name'      => 'Hieu Tran',
            'email'     => 'tinasot9874@gmail.com',
            'password'  => Hash::make('151503654'),
        ]);

        // Generate demo Customer info
        DB::table('users')->insert([
            'role_id'   => '2',
            'name'      => Str::random(10),
            'email'     => Str::random(10).'@gmail.com',
            'password'  => Hash::make('123456'),
        ]);
    }
}
