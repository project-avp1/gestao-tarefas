@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard - Gestão de Tarefas') }}
    </h2>
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Cards de Estatísticas -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

                <!-- Total de Tarefas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">0</div>
                        <div class="text-gray-600 text-sm">Total de Tarefas</div>
                    </div>
                </div>

                <!-- Tarefas Pendentes -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-yellow-600 mb-2">0</div>
                        <div class="text-gray-600 text-sm">Pendentes</div>
                    </div>
                </div>

                <!-- Tarefas Concluídas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">0</div>
                        <div class="text-gray-600 text-sm">Concluídas</div>
                    </div>
                </div>

                <!-- Tarefas Atrasadas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">0</div>
                        <div class="text-gray-600 text-sm">Atrasadas</div>
                    </div>
                </div>
            </div>

            <!-- Ações Rápidas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Ações Principais -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Ações Rápidas</h3>
                        <div class="space-y-3">
                            <a href="{{ route('tarefas.create') }}"
                                class="flex items-center p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                                <div class="bg-blue-500 text-white p-2 rounded-lg mr-3">
                                    ➕
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Nova Tarefa</div>
                                    <div class="text-sm text-gray-600">Criar uma nova tarefa</div>
                                </div>
                            </a>

                            <a href="{{ route('tarefas.index') }}"
                                class="flex items-center p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors">
                                <div class="bg-green-500 text-white p-2 rounded-lg mr-3">
                                    📋
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Ver Todas as Tarefas</div>
                                    <div class="text-sm text-gray-600">Gerenciar tarefas existentes</div>
                                </div>
                            </a>

                            <a href="{{ route('tarefas.index', ['status' => 'pendente']) }}"
                                class="flex items-center p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors">
                                <div class="bg-yellow-500 text-white p-2 rounded-lg mr-3">
                                    ⏰
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Tarefas Pendentes</div>
                                    <div class="text-sm text-gray-600">Ver apenas tarefas não concluídas</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dicas e Informações -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Bem-vindo ao Sistema</h3>
                        <div class="space-y-4 text-gray-600">
                            <div class="flex items-start">
                                <div class="bg-blue-100 text-blue-600 p-1 rounded mr-3 mt-0.5">
                                    ✓
                                </div>
                                <div class="text-sm">
                                    <strong>Organize suas tarefas:</strong> Crie, edite e gerencie suas tarefas de forma
                                    eficiente.
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-green-100 text-green-600 p-1 rounded mr-3 mt-0.5">
                                    🎯
                                </div>
                                <div class="text-sm">
                                    <strong>Defina prazos:</strong> Configure datas de vencimento para suas tarefas
                                    importantes.
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-100 text-yellow-600 p-1 rounded mr-3 mt-0.5">
                                    📊
                                </div>
                                <div class="text-sm">
                                    <strong>Acompanhe progresso:</strong> Marque tarefas como concluídas e filtre por
                                    status.
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="text-sm text-gray-500">
                                <strong>Dica:</strong> Use os filtros na página de tarefas para encontrar rapidamente o
                                que procura!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Começar Agora -->
            @if(true) {{-- Aqui depois será verificado se o usuário tem tarefas --}}
                <div class="mt-8 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-lg">
                    <div class="p-8 text-center text-white">
                        <h3 class="text-2xl font-bold mb-2">Pronto para começar?</h3>
                        <p class="text-blue-100 mb-6">
                            Crie sua primeira tarefa e comece a organizar seu dia!
                        </p>
                        <a href="{{ route('tarefas.create') }}"
                            class="inline-flex items-center bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-blue-50 transition-colors">
                            Criar Primeira Tarefa
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection