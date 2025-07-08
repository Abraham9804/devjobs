<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Olvidaste tu contraseña? coloca tu correo y te enviaremos un enlace para que puedas restablecer tu contraseña') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between my-6">
            <x-link :href="route('login')">
                Iniciar sesion
            </x-link>
            <x-link :href="route('register')">
                Registrar cuenta
            </x-link> 
        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Enviar correo') }}
        </x-primary-button>
    </form>
</x-guest-layout>
