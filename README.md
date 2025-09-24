📝 Projeto: Gestão de Tarefas
📌 Objetivo

Sistema simples para gerenciar tarefas com CRUD completo em Laravel Fullstack (Blade). Inclui autenticação básica para login e registro de usuários.

⚙️ Tecnologias

Laravel

PHP

SQLite

🚀 Como Rodar
Pré-requisitos

PHP
 8+

Composer

Node.js
 (LTS recomendado)

Passos

Clonar o projeto

git clone <url-do-repo>
cd gestao-tarefas


Configurar o ambiente

Copie o .env.example para .env

Ajuste o banco para SQLite:

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite


Crie o arquivo do banco:

touch database/database.sqlite


Instalar dependências

composer install
npm install


Gerar chave da aplicação

php artisan key:generate


Rodar as migrations

php artisan migrate


Compilar assets

npm run dev


Iniciar servidor

php artisan serve

🌿 Fluxo com Git
Criar e entrar em uma branch nova
git checkout -b nome-da-branch

Entrar em uma branch existente
git checkout nome-da-branch

Adicionar alterações
git add .

Fazer commit
git commit -m "mensagem do commit"

Enviar branch para o repositório remoto
git push origin nome-da-branch

🎯 Acesso

App: http://localhost:8000
