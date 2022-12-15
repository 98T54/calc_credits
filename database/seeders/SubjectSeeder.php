<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => '学域GS',
            ]);
        
        DB::table('subjects')->insert([
            'name' => '学域GS言語',
            ]);
        
        DB::table('subjects')->insert([
            'name' => '人文基盤',
            ]);
            
        DB::table('subjects')->insert([
            'name' => '卒論関係',
            ]);
    }
}
