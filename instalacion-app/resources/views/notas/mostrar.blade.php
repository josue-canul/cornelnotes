<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body w-3/4 m-8 mx-auto text-center text-white bg-gradient-to-r from-blue-500 via-blue-400 to-blue-500 bg-opacity-50 rounded-3xl p-8">
            <div class="text-center">
                <div class="p-5">
                    <h1 class=""><strong>Asignatura: </strong>{{ $asignatura->asignatura }}</h1>
                    <h1 class=""><strong>Tema: </strong>{{ $tema->tema }}</h1>
                </div>
                <label for="tema" class="pl-5">Titulo:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">{{ $nota->titulo }}</p><br>
                <label for="contenido">Contenido:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">{{ $nota->contenido }}</p><br>
                <label for="p_clave">Palabras clave:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">{{ $nota->p_clave }}</p><br>
                <label for="resumen">Resumen:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">{{ $nota->resumen }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
