<x-app-layout>
<h1 class="p-4 mt-2 text-3xl font-bold text-center text-orange-300 bg-gray-800">
            RECORDATORIOS
</h1>
<center>
<div class="bg-slate-500 p-4 rounded-lg shadow-md">
<div class="bg-slate-400"> 
 
 <div class="grid grid-cols-6 gap-4 top-0 right-0">
     <a href="{{ url('/recordatorios/create') }}" title="crear recordatorio">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke-width="2" stroke="white" class="w-6 h-6">
             <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
 
     </a>
 </div>

<div>

    <table class="table-fixed">
    <thead>
                <tr class="bg-blue-600">
                    <th class="px-6">IMPORTANCIA</th>
                    <th class="px-6">RECORDAR</th>
                    <th class="px-6">Acciones</th>
                </tr>
            </thead>
            <tbody>

@foreach($recordatoriof as $recordatoriog)
<tr class="{{ $loop->iteration % 2 == 0 ? 'bg-blue-400' : 'bg-blue-300' }} text-white text-center">
<div>

    <td>{{ $recordatoriog->importancia }}</td>
    <td>{{ $recordatoriog->recordar }}</td>
    <td class="flex text-center" ><a href="{{ url('/recordatorios/' . $recordatoriog->id) }}" title="View recordatorio"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg></a>
    <a href="{{ url('/recordatorios/' . $recordatoriog->id) . '/edit' }}" title="View recordatorio"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
</svg></a>


    <form method="POST" action="{{ url('/recordatorios/' . $recordatoriog->id) }}" accept-charset="UTF-8">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    <button type="submit" title="Delete recordatorio" onclick="return confirm(&quot;¿Estás seguro? Se eliminará definitivamente&quot;)">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
</svg>
    </button>
</form></td>
</div>
</div>

@endforeach
</table>

</div>
</center>
</x-app-layout>
