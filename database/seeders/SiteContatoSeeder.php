<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       /*  $contato = new SiteContato();
        $contato->nome = 'Patrick';
        $contato->telefone = '(41)99879-4561';
        $contato->email = 'contato@contato.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Quero fazer contato';
        $contato->save(); */
        \App\Models\SiteContato::factory()->count(100)->create();
    }
}