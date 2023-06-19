<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recordatorios') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/recordatorios/create') }}"
                            class="block w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded"
                            title="Add New nota">
                            Nuevo
                        </a>
                        <br />
                        <br />
                        <form action="{{ route('recordatorios.index') }}" method="GET" class="flex gap-2 pb-4 mx-16 w-full justify-center">
                            <input type="text" class="w-96 rounded-lg" name="buscador" value="{{ $buscar ?? '' }}" placeholder="Buscar recordatorio por importancia..." autocomplete="off">
                            <x-primary-button>
                                buscar
                            </x-primary-button>
                        </form>
                        <div class="table-responsive pb-16 mx-16 w-full">
                            <table class="table w-full">
                                <thead class="bg-blue-800 text-white">
                                    <tr>
                                        <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">#</th>
                                        <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Titulo
                                        </th>
                                        <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                            Contenido</th>
                                        <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Fecha de
                                            evento</th>
                                        <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recordatorios as $item)
                                        <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-300' : 'bg-gray-100' }}">
                                            <td class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                {{ $loop->iteration }}</td>
                                            <td class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                {{ $item->titulo }}</td>
                                            <td class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                {{ substr($item->contenido, 0, 50) }}...</td>
                                            <td class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                {{ $item->fecha }}</td>

                                            <td class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                <a href="{{ url('/recordatorios/' . $item->id) }}"
                                                    title="View nota"><button class="inline-flex m-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button></a>
                                                <a href="{{ url('/recordatorios/' . $item->id . '/edit') }}"
                                                    title="Edit nota"><button class="inline-flex m-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </button></a>

                                                <form method="POST"
                                                    action="{{ url('/recordatorios' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="inline-flex m-2" title="Delete nota"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
