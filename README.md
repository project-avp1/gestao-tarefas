# 📋 Gestão de Tarefas - Projeto Laravel



## 🎯 Objetivo

Permitir que usuários se registrem, entrem com suas credenciais e gerenciem suas tarefas (criar, editar, marcar como concluída, filtrar e excluir). 

---

## 🔥 Principais features (MVP)

* Autenticação (registro / login / logout) — Laravel Breeze
* CRUD completo de tarefas (título, descrição, status, vínculo com usuário)
* Filtrar tarefas: Todas / Pendentes / Concluídas
* Layout simples em Blade com alertas de sucesso/erro
* Seeders para popular dados de teste

---

## 🧰 Tecnologias

* Laravel
* PHP 8.2+
* SQLite 
* Laravel Breeze (autenticação com Blade)
* Node.js + NPM (assets)

---

## ✅ Pré-requisitos

* PHP 8.2+ — [https://www.php.net/](https://www.php.net/)
* Composer — [https://getcomposer.org/](https://getcomposer.org/)
* Node.js (LTS) — [https://nodejs.org/](https://nodejs.org/)
* Git — [https://git-scm.com/](https://git-scm.com/)

---

## 🚀 Instalação (local)

1. **Clonar o repositório**

```bash
git clone https://github.com/project-avp1/gestao-tarefas.git
cd gestao-tarefas
```

2. **Instalar dependências PHP**

```bash
composer install
```

3. **Instalar dependências JS**

```bash
npm install
# ou pnpm install
```

4. **Copiar .env e gerar chave**

```bash
cp .env.example .env
php artisan key:generate
```

5. **Configurar SQLite (recomendado para dev)**

```bash
# criar arquivo do banco
touch database/database.sqlite

# no .env defina:
# DB_CONNECTION=sqlite
```

6. **Migrar e seed (criar tabelas + dados de exemplo)**

```bash
php artisan migrate
php artisan db:seed
# ou para recriar tudo:
# php artisan migrate:fresh --seed
```

7. **Build de assets**

```bash
npm run dev
# ou para produção
# npm run build
```

8. **Rodar servidor**

```bash
php artisan serve
# acesse http://127.0.0.1:8000
```

---

## ⚙️ Comandos úteis

* `php artisan migrate` — executa migrations
* `php artisan migrate:fresh --seed` — recria banco e roda seeders
* `php artisan db:seed --class=UserSeeder` — rodar seeder específico
* `php artisan tinker` — console interativo Laravel
* `npm run dev` — compila assets para desenvolvimento

---

## 🗂️ Rotas principais (exemplos)

> Protegidas por middleware `auth`:

* `GET /` → lista de tarefas do usuário (index)
* `GET /tasks/create` → formulário de criação
* `POST /tasks` → salvar nova tarefa
* `GET /tasks/{task}/edit` → formulário de edição
* `PUT /tasks/{task}` → atualizar tarefa
* `DELETE /tasks/{task}` → excluir tarefa
* `POST /tasks/{task}/toggle` → marcar/desmarcar concluída

Rotas de autenticação (Laravel Breeze):

* `/register`, `/login`, `/logout`

---

## 🧩 Estrutura do Model (Task)

* `id`
* `title` (string) — obrigatório
* `description` (text, opcional)
* `status` (enum/string) — `pending` ou `done`
* `user_id` (foreign key) — vínculo com `users`
* `timestamps`

Relacionamento:

* `User` -> `hasMany(Task)`
* `Task` -> `belongsTo(User)`

---

## ✨ Refinamentos e Testes

* Melhorar validações e mensagens amigáveis nos formulários
* Criar seeders (usuários + tarefas) para facilitar testes
* Testes manuais: registro → criação → edição → marcação → exclusão
* Revisão de permissões (garantir que um usuário não acesse tarefas de terceiros)

Seeders de exemplo:

```bash
php artisan migrate:fresh --seed
```

---

## ✅ Checklist — Issues sugeridas

* [ ] 🔑 Autenticação e Proteção de Rotas
* [ ] ✅ Estrutura de Tarefas (Model / Migration / Controller)
* [ ] 📂 Funcionalidades de Tarefas (CRUD + Filtros)
* [ ] 🎨 Interface e Layout (simples)
* [ ] ✨ Refinamentos e Testes

---

## 🤝 Como contribuir

1. Abra uma branch: `git checkout -b feature/minha-coisa`
2. Faça commits claros e pequenos
3. Abra Pull Request apontando pra `main`
4. Use issues para reportar bugs ou pedir features

---


---

## 📜 Licença

Projetado para estudos / entrega acadêmica.
