<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'name' => '心理学プログラム',
            ]);
        
        DB::table('programs')->insert([
            'name' => '現代社会・人間学プログラム',
            ]);
        
        DB::table('programs')->insert([
            'name' => '考古学・文化資源学プログラム',
            ]);
            
        DB::table('programs')->insert([
            'name' => '歴史学プログラム',
            ]);
            
        DB::table('programs')->insert([
            'name' => '日本・中国言語文化学プログラム',
            ]);
            
        DB::table('programs')->insert([
            'name' => '欧米言語文化学プログラム',
            ]);
            
        DB::table('programs')->insert([
            'name' => '言語科学プログラム',
            ]);
    }
}
