<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'subject_id' => 1,
            'name' => '大学・学問論',
            'credit' => 1,
            ]);
        
        DB::table('classes')->insert([
            'subject_id' => 1,
            'name' => 'ジェンダーと教育',
            'credit' => 1,
            ]);
            
        DB::table('classes')->insert([
            'subject_id' => 1,
            'name' => '異文化理解1',
            'credit' => 1,
            ]);    
    }
}
