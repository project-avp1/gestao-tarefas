<x-guest-layout>
<<<<<<< HEAD
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
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
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M4.5 6.75h15M4.5 12h15m-15 5.25h15" />
          </svg>
        </div>
        <h2 class="mt-4 text-3xl font-extrabold text-gray-800">Bem-vindo</h2>
        <p class="mt-1 text-sm text-gray-500">Faça login para gerenciar suas tarefas</p>
      </div>

      <!-- Abas -->
      <div class="flex border-b border-gray-200">
        <button class="w-1/2 py-3 text-center font-semibold border-b-2 border-indigo-600 text-indigo-700 transition">
          Login
        </button>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="w-1/2 py-3 text-center text-gray-500 hover:text-indigo-600 font-semibold transition">
          Cadastro
        </a>
        @endif
      </div>

      <!-- Formulário -->
      <div class="px-8 py-6">
        <!-- Mensagens -->
        <x-auth-session-status :status="session('status')" class="mb-4 p-3 rounded bg-indigo-100 text-indigo-800 text-sm" />
        <x-input-error :messages="$errors->all()" class="mb-4 p-3 rounded bg-red-100 text-red-700 text-sm" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
          @csrf

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
              placeholder="Digite seu email" />
          </div>

          <!-- Senha -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
            <input id="password" type="password" name="password" required
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
              placeholder="Digite sua senha" />
          </div>

          <!-- Remember Me -->
          <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center gap-2 text-sm text-gray-600">
              <input id="remember_me" type="checkbox" name="remember"
                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
              Lembrar-me
            </label>
            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Esqueceu a senha?</a>
          </div>

          <!-- Botão Login -->
          <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-md transition-all transform hover:scale-105">
            Entrar
          </button>

          <!-- Divisor -->
          <div class="flex items-center justify-center my-4 text-gray-400 text-sm relative">
            <span class="absolute bg-white px-3"></span>
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
