<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-red-500 w-96 p-4 mt-2 mb-4 mx-auto text-white rounded-3xl text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('notas') }}" method="post"
                class="w-3/4 m-8 mx-auto text-center text-white bg-gradient-to-r from-blue-500 via-blue-400 to-blue-500 bg-opacity-50 rounded-3xl">
                {!! csrf_field() !!}
                <div class="text-center">
                    <div>
                        <label for="titulo" class="pl-5">Titulo:</label>
                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"
                            class="text-center w-96 rounded-3xl m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md"><br>
                    </div>
                    <div class="mx-5">
                        <label for="contenido">Nota:</label><br>
                        <textarea type="text" name="contenido" id="contenido"
                            class="text-center w-full h-96 rounded-3xl m-5 mr-2 ml-2 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('contenido') }}</textarea><br>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mx-5">
                        <div>
                            <label for="p_clave">Palabras clave:</label><br>
                            <textarea type="text" name="p_clave" id="p_clave"
                                class="text-center w-full h-40 rounded-3xl m-5 mr-2 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('p_clave') }}</textarea><br>
                        </div>
                        <div>
                            <label for="resumen">Resumen:</label><br>
                            <textarea type="text" name="resumen" id="resumen"
                                class="text-center w-full h-40 rounded-3xl m-5 ml-2 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('resumen') }}</textarea>
                        </div>
                    </div>
                    <div class="mx-5">
                        <label for="tema">Tema:</label><br>
                        <select name="tema" id="tema" class="rounded-lg text-black">
                            <option value="0">Tema</option>
                            @foreach ($temas as $tema)
                                <option value="{{ $tema->id }}" @if (old('tema') == $tema->id) selected @endif>
                                    {{ $tema->tema }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="submit" value="Guardar"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded-3xl">
            </form>
        </div>
    </div>
</x-app-layout>
