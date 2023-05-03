<x-app-layout>
<div>
<h1 class="p-4 mt-2 text-3xl font-bold text-center text-orange-300 bg-gray-800">
            Crear Notas
</h1>


<form class="w-full max-w-lg mx-auto p-28 text-slate-50" action="{{ url('notas') }}"method="post">
    {!! csrf_field() !!}

    <h3>tema</h3>
    <input type="text" name="temi" id="temi">

    <h3>titulo</h3>
    <input type="text" name="titulo" id="titulo">

    <h3>resumen</h3>
    <input type="text" name="resumen" id="resumen">

    <h3>palabras clave</h3>
    <input type="text" name="p_clave" id="p_clave">

    <h3>apunte</h3>
    <input type="text" name="apunte" id="apunte">

<button type="submit">enviar</button>

</form>
</div>
</x-app-layout>

