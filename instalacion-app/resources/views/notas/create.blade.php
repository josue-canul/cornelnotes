
<form action="{{ url('notas') }}"method="post">
    {!! csrf_field() !!}

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