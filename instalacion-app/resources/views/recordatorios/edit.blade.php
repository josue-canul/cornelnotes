<form action="{{ url('recordatorios/' . $recordatorios->id) }}" method="post">
        {!! csrf_field() !!}
    <div>
        @method("PATCH")
            <h3>importancia</h3>
                <input type="text" name="importancia" id="importancia" value="{{$recordatorioss ->importancia}}">

            <h3>recordar</h3>
                <input type="text" name="recordar" id="recordar" value="{{$recordatorios ->recordar}}">

    <input type="submit" value="Enviar">
        

     </div>
</form>