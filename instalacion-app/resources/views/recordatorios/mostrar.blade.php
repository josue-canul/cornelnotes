<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver recordatorio') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body w-3/4 m-8 mx-auto text-center text-white bg-blue-600 rounded-3xl p-8">
            <div class="text-center">
                <label for="tema" class="pl-5">Titulo:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">
                    {{ $recordatorio->titulo }}</p><br>
                <label for="contenido">Contenido:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">
                    {{ $recordatorio->contenido }}</p><br>
                <label for="p_clave">importancia:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">
                    {{ $recordatorio->importancia }}</p><br>
                <label for="resumen">fecha:</label><br>
                <p class="break-words w-2/4 p-5 border-2 mx-auto rounded-3xl bg-white text-black">
                    {{ $recordatorio->fecha }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
