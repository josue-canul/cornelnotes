<x-guest-layout>
    <x-slot name="headtext"><span name="head" class="ml-2 dark:text-white font-bold text-3xl">
            <h1>Registrarse</h1>
        </span></x-slot>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nombre" :value="__('Nombre')" />
            <x-text-input id="nombre" class="block mt-1 w-full h-2/4" type="text" name="nombre" :value="old('nombre')"
                required autofocus autocomplete="nombre" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="apellido" :value="__('Apellido')" />
            <x-text-input id="apellido" class="block mt-1 w-full h-2/4" type="text" name="apellido"
                :value="old('apellido')" required autofocus autocomplete="apellido" />
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>

        <!-- Control Number -->
        <div class="mt-4">
            <x-input-label for="matricula" :value="__('Numero de Control')" />
            <x-text-input id="matricula" class="block mt-1 w-full h-2/4" type="number" name="matricula"
                :value="old('matricula')" required autofocus autocomplete="matricula" />
            <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
        </div>

        <!-- carrera -->
        <div class="mt-4">
            <x-input-label for="carrera" :value="__('Carerra')" />
            <select id="carrera"
                class="block mt-1 w-full h-2/4 border-gray-300 rounded-lg shadow-sm"
                type="text" name="carrera" :value="old('carrera')" required autofocus autocomplete="carrera">
                @foreach (DB::table('carreras')->get() as $carrera)
                    <option class="border-none" value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('carrera')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full h-2/4" type="email" name="email"
                :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full h-2/4" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full h-2/4" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('¿Estas registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
