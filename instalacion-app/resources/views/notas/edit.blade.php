<form action="{{ url('notas/' . $notas->id) }}" method="post">
        {!! csrf_field() !!}
    <div>
        @method("PATCH")
            <h3>titulo</h3>
                <input type="text" name="titulo" id="titulo" value="{{$notas ->titulo}}">

            <h3>resumen</h3>
                <input type="text" name="resumen" id="resumen" value="{{$notas ->resumen}}">

            <h3>palabras clave</h3>
                <input type="text" name="p_clave" id="p_clave" value="{{$notas ->p_clave}}">

            <h3>apunte</h3>
                <input type="text" name="apunte" id="apunte" value="{{$notas ->apunte}}">


    <input type="submit" value="Enviar">
        

     </div>
</form>