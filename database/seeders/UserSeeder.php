<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'testemail@gmail.com',
            'password' => bcrypt('password'),
            'program_id' => 4,
            'email_verified_at'=>new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'program_id' => 3,
            'email_verified_at'=>new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);
        
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'program_id' => 1,
            'email_verified_at'=>new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
