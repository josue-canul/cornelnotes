@foreach($recordatoriof as $recordatoriog)
<div>
    {{$recordatoriog ->importancia}}
    <a href="{{ url('/recordatorios/' . $recordatoriog->id) }}" title="View recordatorio">jajajaj</a>
    <a href="{{ url('/recordatorios/' . $recordatoriog->id) . '/edit' }}" title="View recordatorio">Editar</a>


    <form method="POST" action="{{ url('/recordatorios/' . $recordatoriog->id) }}" accept-charset="UTF-8">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    <button type="submit" title="Delete recordatorio" onclick="return confirm(&quot;¿Estás seguro? Se eliminará definitivamente&quot;)">
        eliminar
    </button>
</form>
</div>

@endforeach