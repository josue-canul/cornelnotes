<form action="{{ url('recordatorios') }}"method="post">
    {!! csrf_field() !!}

    <h3>tema</h3>
    <input type="text" name="temi" id="temi">

    <h3>titulo</h3>
    <input type="text" name="importancia" id="importancia">

    <h3>resumen</h3>
    <input type="text" name="recordar" id="recordar">

<button type="submit">enviar</button>

</form>