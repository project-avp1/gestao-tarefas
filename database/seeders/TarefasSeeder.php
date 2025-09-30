<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarefa;
use App\Models\User;
use Carbon\Carbon;

class TarefasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->warn('Nenhum usuário encontrado. Execute primeiro o UserSeeder.');
            return;
        }

        $tarefas = [
            [
                'titulo' => 'Estudar Laravel',
                'descricao' => 'Aprender sobre Eloquent ORM, Migrations e Seeders para melhorar as habilidades em desenvolvimento web.',
                'data_vencimento' => Carbon::now()->addDays(7),
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Fazer compras do mês',
                'descricao' => 'Lista: arroz, feijão, carne, legumes, frutas, produtos de limpeza e higiene pessoal.',
                'data_vencimento' => Carbon::now()->addDays(3),
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Organizar documentos fiscais',
                'descricao' => 'Separar notas fiscais, comprovantes de pagamento e organizar arquivos para o contador.',
                'data_vencimento' => Carbon::now()->addDays(15),
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Marcar consulta médica',
                'descricao' => 'Agendar consulta de rotina com o clínico geral e exames preventivos.',
                'data_vencimento' => Carbon::now()->addDays(5),
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Planejar férias de fim de ano',
                'descricao' => 'Pesquisar destinos, comparar preços de passagens e hotéis, definir roteiro de viagem.',
                'data_vencimento' => Carbon::now()->addDays(30),
                'status' => 'pendente',
            ],

            [
                'titulo' => 'Desenvolver sistema de gestão',
                'descricao' => 'Criar CRUD completo para gerenciamento de tarefas com autenticação de usuários e interface responsiva.',
                'data_vencimento' => Carbon::now()->addDays(10),
                'status' => 'em_andamento',
            ],
            [
                'titulo' => 'Curso de JavaScript avançado',
                'descricao' => 'Completar módulos sobre Promises, Async/Await, APIs REST e frameworks modernos.',
                'data_vencimento' => Carbon::now()->addDays(20),
                'status' => 'em_andamento',
            ],
            [
                'titulo' => 'Reforma do quarto',
                'descricao' => 'Pintar paredes, trocar móveis, instalar nova iluminação e organizar o espaço.',
                'data_vencimento' => Carbon::now()->addDays(25),
                'status' => 'em_andamento',
            ],
            [
                'titulo' => 'Projeto freelance - Website',
                'descricao' => 'Desenvolver site institucional para cliente com design responsivo e integração com redes sociais.',
                'data_vencimento' => Carbon::now()->addDays(12),
                'status' => 'em_andamento',
            ],

            [
                'titulo' => 'Backup dos arquivos importantes',
                'descricao' => 'Fazer backup completo de documentos, fotos e projetos em nuvem e drive externo.',
                'data_vencimento' => Carbon::now()->subDays(2),
                'status' => 'concluida',
            ],
            [
                'titulo' => 'Renovar CNH',
                'descricao' => 'Renovar carteira de habilitação no DETRAN, fazer exames médicos e pagar taxas.',
                'data_vencimento' => Carbon::now()->subDays(5),
                'status' => 'concluida',
            ],
            [
                'titulo' => 'Configurar ambiente de desenvolvimento',
                'descricao' => 'Instalar PHP, Composer, Node.js, configurar VS Code e extensões para desenvolvimento.',
                'data_vencimento' => Carbon::now()->subDays(1),
                'status' => 'concluida',
            ],
            [
                'titulo' => 'Limpeza geral da casa',
                'descricao' => 'Organizar todos os cômodos, limpar janelas, aspirar carpetes e fazer faxina completa.',
                'data_vencimento' => Carbon::now()->subDays(3),
                'status' => 'concluida',
            ],

            [
                'titulo' => 'Aprender Docker',
                'descricao' => 'Estudar containerização, Docker Compose e deploy de aplicações em contêineres.',
                'data_vencimento' => Carbon::now()->addDays(45),
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Exercícios físicos diários',
                'descricao' => 'Manter rotina de exercícios: 30min caminhada ou academia, 3x por semana.',
                'data_vencimento' => null, // Tarefa sem prazo definido
                'status' => 'em_andamento',
            ],
            [
                'titulo' => 'Ler livro "Clean Code"',
                'descricao' => 'Estudar boas práticas de programação e aplicar conceitos nos projetos atuais.',
                'data_vencimento' => Carbon::now()->addDays(60),
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Organizar festa de aniversário',
                'descricao' => 'Definir local, cardápio, lista de convidados e decoração para a celebração.',
                'data_vencimento' => Carbon::now()->addDays(14),
                'status' => 'em_andamento',
            ],

            [
                'titulo' => 'Entregar relatório mensal',
                'descricao' => 'Compilar dados de vendas, métricas de performance e análise de resultados do mês.',
                'data_vencimento' => Carbon::now()->subDays(2), // Atrasada
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Pagar conta de energia',
                'descricao' => 'Efetuar pagamento da conta de luz antes do vencimento para evitar juros.',
                'data_vencimento' => Carbon::now()->addDays(1), // Vence amanhã
                'status' => 'pendente',
            ],
        ];

        foreach ($tarefas as $tarefaData) {
            Tarefa::create([
                'titulo' => $tarefaData['titulo'],
                'descricao' => $tarefaData['descricao'],
                'data_vencimento' => $tarefaData['data_vencimento'],
                'status' => $tarefaData['status'],
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
