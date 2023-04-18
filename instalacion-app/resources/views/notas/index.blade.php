@foreach($notaf as $notag)
<div>
    {{$notag ->titulo}}
    <a href="{{ url('/notas/' . $notag->id) }}" title="View Note">jajajaj</a>
    <a href="{{ url('/notas/' . $notag->id) . '/edit' }}" title="View Note">Editar</a>


    <form method="POST" action="{{ url('/notas/' . $notag->id) }}" accept-charset="UTF-8">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    <button type="submit" title="Delete Note" onclick="return confirm(&quot;¿Estás seguro? Se eliminará definitivamente&quot;)">
        eliminar
    </button>
</form>
</div>

@endforeach