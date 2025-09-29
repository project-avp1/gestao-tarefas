@extends('layouts.app')

@section('header')
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minhas Tarefas') }}
        </h2>
        <a href="{{ route('tarefas.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Nova Tarefa
        </a>
    </div>
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Filtros -->
                    <div class="mb-6">
                        <form method="GET" action="{{ route('tarefas.index') }}" class="flex gap-4">
                            <select name="status" class="border-gray-300 rounded-md shadow-sm"
                                onchange="this.form.submit()">
                                <option value="">Todas as Tarefas</option>
                                <option value="pendente" {{ request('status') == 'pendente' ? 'selected' : '' }}>
                                    Pendentes
                                </option>
                                <option value="concluida" {{ request('status') == 'concluida' ? 'selected' : '' }}>
                                    Concluídas
                                </option>
                            </select>
                        </form>
                    </div>

                    <!-- Mensagens de sucesso/erro -->
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Lista de Tarefas -->
                    @if($tarefas->count() > 0)
                        <div class="space-y-4">
                            @foreach($tarefas as $tarefa)
                                <div
                                    class="border rounded-lg p-4 {{ $tarefa->status == 'concluida' ? 'bg-green-50' : 'bg-white' }}">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold {{ $tarefa->status == 'concluida' ? 'line-through text-gray-500' : 'text-gray-900' }}">
                                                {{ $tarefa->titulo }}
                                            </h3>
                                            @if($tarefa->descricao)
                                                <p class="text-gray-600 mt-2">{{ $tarefa->descricao }}</p>
                                            @endif

                                            <div class="flex items-center gap-4 mt-3 text-sm text-gray-500">
                                                <span
                                                    class="px-2 py-1 rounded-full text-xs {{ $tarefa->status == 'concluida' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                    {{ ucfirst($tarefa->status) }}
                                                </span>

                                                @if($tarefa->data_vencimento)
                                                    <span>
                                                        <strong>Vence em:</strong>
                                                        {{ $tarefa->data_vencimento->format('d/m/Y') }}
                                                    </span>
                                                @endif

                                                <span>
                                                    <strong>Criada em:</strong>
                                                    {{ $tarefa->created_at->format('d/m/Y H:i') }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="flex gap-2 ml-4">
                                            <!-- Botão Toggle Status -->
                                            <form method="POST" action="{{ route('tarefas.toggle-status', $tarefa) }}"
                                                class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="px-3 py-1 text-sm rounded {{ $tarefa->status == 'pendente' ? 'bg-green-500 hover:bg-green-700 text-white' : 'bg-yellow-500 hover:bg-yellow-700 text-white' }}">
                                                    {{ $tarefa->status == 'pendente' ? 'Concluir' : 'Reabrir' }}
                                                </button>
                                            </form>

                                            <!-- Botão Ver -->
                                            <a href="{{ route('tarefas.show', $tarefa) }}"
                                                class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 text-sm rounded">
                                                Ver
                                            </a>

                                            <!-- Botão Editar -->
                                            <a href="{{ route('tarefas.edit', $tarefa) }}"
                                                class="bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-1 text-sm rounded">
                                                Editar
                                            </a>

                                            <!-- Botão Excluir -->
                                            <form method="POST" action="{{ route('tarefas.destroy', $tarefa) }}" class="inline"
                                                onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 text-sm rounded">
                                                    Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Paginação -->
                        <div class="mt-6">
                            {{ $tarefas->appends(request()->query())->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <p class="text-gray-500 text-lg">Nenhuma tarefa encontrada.</p>
                            <a href="{{ route('tarefas.create') }}"
                                class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Criar Primeira Tarefa
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection