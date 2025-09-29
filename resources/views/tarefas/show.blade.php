@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Detalhes da Tarefa') }}
    </h2>
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Botão Voltar -->
                    <div class="mb-6">
                        <a href="{{ route('tarefas.index') }}" class="text-blue-600 hover:text-blue-800">
                            ← Voltar para Lista de Tarefas
                        </a>
                    </div>

                    <!-- Detalhes da Tarefa -->
                    <div class="space-y-6">

                        <!-- Título e Status -->
                        <div class="flex justify-between items-start">
                            <h1
                                class="text-2xl font-bold {{ $tarefa->status == 'concluida' ? 'line-through text-gray-500' : 'text-gray-900' }}">
                                {{ $tarefa->titulo }}
                            </h1>
                            <span
                                class="px-3 py-1 rounded-full text-sm {{ $tarefa->status == 'concluida' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ ucfirst($tarefa->status) }}
                            </span>
                        </div>

                        <!-- Descrição -->
                        @if($tarefa->descricao)
                            <div>
                                <h3 class="font-medium text-gray-700 mb-2">Descrição</h3>
                                <div class="bg-gray-50 p-4 rounded border">
                                    <p class="text-gray-700 whitespace-pre-wrap">{{ $tarefa->descricao }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Informações -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded">
                                <h3 class="font-medium text-gray-700 mb-2">Data de Criação</h3>
                                <p class="text-gray-600">{{ $tarefa->created_at->format('d/m/Y H:i') }}</p>
                            </div>

                            @if($tarefa->data_vencimento)
                                <div class="bg-gray-50 p-4 rounded">
                                    <h3 class="font-medium text-gray-700 mb-2">Data de Vencimento</h3>
                                    <p class="text-gray-600">{{ $tarefa->data_vencimento->format('d/m/Y') }}</p>

                                    @if($tarefa->status == 'pendente')
                                        @php
                                            $diasRestantes = now()->diffInDays($tarefa->data_vencimento, false);
                                        @endphp

                                        @if($diasRestantes < 0)
                                            <p class="text-red-600 text-sm mt-1">
                                                Atrasada há {{ abs($diasRestantes) }}
                                                {{ abs($diasRestantes) == 1 ? 'dia' : 'dias' }}
                                            </p>
                                        @elseif($diasRestantes == 0)
                                            <p class="text-orange-600 text-sm mt-1">Vence hoje!</p>
                                        @elseif($diasRestantes <= 3)
                                            <p class="text-orange-600 text-sm mt-1">
                                                Vence em {{ $diasRestantes }} {{ $diasRestantes == 1 ? 'dia' : 'dias' }}
                                            </p>
                                        @else
                                            <p class="text-green-600 text-sm mt-1">
                                                Faltam {{ $diasRestantes }} dias
                                            </p>
                                        @endif
                                    @endif
                                </div>
                            @endif
                        </div>

                        @if($tarefa->updated_at != $tarefa->created_at)
                            <div class="bg-gray-50 p-4 rounded">
                                <h3 class="font-medium text-gray-700 mb-2">Última Atualização</h3>
                                <p class="text-gray-600">{{ $tarefa->updated_at->format('d/m/Y H:i') }}</p>
                            </div>
                        @endif

                        <!-- Ações -->
                        <div class="flex flex-wrap gap-3 pt-6 border-t">

                            <!-- Toggle Status -->
                            <form method="POST" action="{{ route('tarefas.toggle-status', $tarefa) }}" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="px-4 py-2 rounded font-medium {{ $tarefa->status == 'pendente' ? 'bg-green-500 hover:bg-green-700 text-white' : 'bg-yellow-500 hover:bg-yellow-700 text-white' }}">
                                    {{ $tarefa->status == 'pendente' ? 'Marcar como Concluída' : 'Marcar como Pendente' }}
                                </button>
                            </form>

                            <!-- Editar -->
                            <a href="{{ route('tarefas.edit', $tarefa) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded font-medium">
                                Editar
                            </a>

                            <!-- Excluir -->
                            <form method="POST" action="{{ route('tarefas.destroy', $tarefa) }}" class="inline"
                                onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa? Esta ação não pode ser desfeita.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded font-medium">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection