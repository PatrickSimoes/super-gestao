<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor@a.com';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@asc.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 01',
            'site'=>'site.com',
            'uf'=>'PP',
            'email'=>'e@aaa.com'
        ]);
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 02',
            'site'=>'site2.com',
            'uf'=>'PR',
            'email'=>'aab@aaa.com'
        ]);
   }
}
