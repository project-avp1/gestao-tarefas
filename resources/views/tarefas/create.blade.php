@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Nova Tarefa') }}
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
                    <form method="POST" action="{{ route('tarefas.store') }}">
                        @csrf

                        <!-- Título -->
                        <div class="mb-6">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-2">
                                Título *
                            </label>
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required
                                maxlength="255"
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
                                placeholder="Descreva sua tarefa (opcional)">{{ old('descricao') }}</textarea>
                        </div>

                        <!-- Data de Vencimento -->
                        <div class="mb-6">
                            <label for="data_vencimento" class="block text-sm font-medium text-gray-700 mb-2">
                                Data de Vencimento
                            </label>
                            <input type="date" name="data_vencimento" id="data_vencimento"
                                value="{{ old('data_vencimento') }}" min="{{ date('Y-m-d') }}"
                                class="border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <p class="mt-1 text-sm text-gray-500">
                                Data opcional para quando a tarefa deve ser concluída
                            </p>
                        </div>

                        <!-- Botões -->
                        <div class="flex gap-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                                Criar Tarefa
                            </button>

                            <a href="{{ route('tarefas.index') }}"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection