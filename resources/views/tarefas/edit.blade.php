@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar Tarefa') }}
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

                    <!-- Exibir erros de validação -->
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulário -->
                    <form method="POST" action="{{ route('tarefas.update', $tarefa) }}">
                        @csrf
                        @method('PUT')

                        <!-- Título -->
                        <div class="mb-6">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-2">
                                Título *
                            </label>
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $tarefa->titulo) }}"
                                required maxlength="255"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Digite o título da tarefa">
                        </div>

                        <!-- Descrição -->
                        <div class="mb-6">
                            <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">
                                Descrição
                            </label>
                            <textarea name="descricao" id="descricao" rows="4"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Descreva sua tarefa (opcional)">{{ old('descricao', $tarefa->descricao) }}</textarea>
                        </div>

                        <!-- Data de Vencimento -->
                        <div class="mb-6">
                            <label for="data_vencimento" class="block text-sm font-medium text-gray-700 mb-2">
                                Data de Vencimento
                            </label>
                            <input type="date" name="data_vencimento" id="data_vencimento"
                                value="{{ old('data_vencimento', $tarefa->data_vencimento?->format('Y-m-d')) }}"
                                min="{{ date('Y-m-d') }}"
                                class="border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <p class="mt-1 text-sm text-gray-500">
                                Data opcional para quando a tarefa deve ser concluída
                            </p>
                        </div>

                        <!-- Informações adicionais -->
                        <div class="mb-6 bg-gray-50 p-4 rounded">
                            <h3 class="font-medium text-gray-700 mb-2">Informações da Tarefa</h3>
                            <div class="text-sm text-gray-600 space-y-1">
                                <p><strong>Status atual:</strong>
                                    <span
                                        class="px-2 py-1 rounded-full text-xs {{ $tarefa->status == 'concluida' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ ucfirst($tarefa->status) }}
                                    </span>
                                </p>
                                <p><strong>Criada em:</strong> {{ $tarefa->created_at->format('d/m/Y H:i') }}</p>
                                @if($tarefa->updated_at != $tarefa->created_at)
                                    <p><strong>Última atualização:</strong> {{ $tarefa->updated_at->format('d/m/Y H:i') }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="flex gap-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                                Atualizar Tarefa
                            </button>

                            <a href="{{ route('tarefas.show', $tarefa) }}"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded">
                                Ver Tarefa
                            </a>

                            <a href="{{ route('tarefas.index') }}"
                                class="bg-gray-300 hover:bg-gray-500 text-gray-700 font-bold py-2 px-6 rounded">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection