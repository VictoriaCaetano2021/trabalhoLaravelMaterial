<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'nome' => 'tinta',
            'descricao' => 'tinta fosca para paredes',
            'imagem' => '',
            'setor' => 'pintura',
            
        ]);


        DB::table('materials')->insert([
            'nome' => 'pincel',
            'descricao' => 'pencel chanfrado',
            'imagem' => '',
            'setor' => 'pintura',
            
        ]);

        DB::table('materials')->insert([
            'nome' => 'régua',
            'descricao' => 'régua de 15 cm',
            'imagem' => '',
            'setor' => 'projetos',
            
        ]);
    }
}
