<x-guest-layout>
<<<<<<< HEAD
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
=======
  <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    <div class="w-full max-w-md bg-white shadow-2xl rounded-2xl overflow-hidden animate-fade-in">

      <!-- Cabeçalho -->
      <div class="px-8 py-6 text-center">
        <div class="w-16 h-16 mx-auto bg-indigo-600 text-white flex items-center justify-center rounded-full shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zM6 16c0-1.657 1.343-3 3-3s3 1.343 3 3v1H6v-1zM18 11c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zM12 16c0-1.657 1.343-3 3-3s3 1.343 3 3v1h-6v-1z" />
          </svg>
        </div>
        <h2 class="mt-4 text-3xl font-extrabold text-gray-800">Crie sua conta</h2>
        <p class="mt-1 text-sm text-gray-500">Registre-se para gerenciar suas tarefas</p>
      </div>

      <!-- Abas -->
      <div class="flex border-b border-gray-200">
        <a href="{{ route('login') }}" class="w-1/2 py-3 text-center text-gray-500 hover:text-indigo-600 font-semibold transition">
          Login
        </a>
        <button class="w-1/2 py-3 text-center font-semibold border-b-2 border-indigo-600 text-indigo-700 transition">
          Cadastro
        </button>
      </div>

      <!-- Formulário -->
      <div class="px-8 py-6">
        <!-- Mensagens -->
        <x-auth-session-status :status="session('status')" class="mb-4 p-3 rounded bg-indigo-100 text-indigo-800 text-sm" />
        <x-input-error :messages="$errors->all()" class="mb-4 p-3 rounded bg-red-100 text-red-700 text-sm" />

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
          @csrf

          <!-- Nome -->
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
              placeholder="Seu nome completo" />
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
              placeholder="seu@email.com" />
          </div>

          <!-- Senha -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
            <input id="password" type="password" name="password" required
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
              placeholder="••••••••" />
          </div>

          <!-- Confirmar Senha -->
          <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmar Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
              placeholder="••••••••" />
          </div>

          <!-- Botão Registrar -->
          <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-md transition-all transform hover:scale-105">
            Registrar
          </button>

          <!-- Divisor -->
          <div class="flex items-center justify-center my-4 text-gray-400 text-sm relative">
            <span class="absolute bg-white px-3">git status</span>
            <div class="w-full border-t border-gray-300"></div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- Animação Fade-in -->
  <style>
    @keyframes fade-in { from { opacity: 0; transform: translateY(-10px);} to {opacity:1; transform: translateY(0);} }
    .animate-fade-in { animation: fade-in 0.5s ease-out forwards; }
  </style>
>>>>>>> b3a1dab (Primeiro commit do projeto Laravel)
</x-guest-layout>
