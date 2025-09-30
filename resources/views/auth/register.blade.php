<x-guest-layout>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Password')" />

      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

      <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
      </a>

      <x-primary-button class="ms-4">
        {{ __('Register') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
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
<button type="submit"
  class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-md transition-all transform hover:scale-105">
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
  @keyframes fade-in {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in {
    animation: fade-in 0.5s ease-out forwards;
  }
</style>
</x-guest-layout>