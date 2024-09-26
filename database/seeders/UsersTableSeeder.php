<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {

        User::create([
            'nome' => 'João Silva',
            'endereco' => 'Rua A, 123',
            'serie' => '1º Ano',
            'turma' => 'A'
        ]);

        User::create([
            'nome' => 'Maria Oliveira',
            'endereco' => 'Rua B, 456',
            'serie' => '2º Ano',
            'turma' => 'B',
        ]);

        User::create([
            'nome' => 'Samantha',
            'endereco' => 'Rua C, 789',
            'serie' => '3º Ano',
            'turma' => 'C',
        ]);

    }
}
