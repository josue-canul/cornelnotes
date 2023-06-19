<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use App\Models\Tema;
use Illuminate\Http\Request;

class NotaController extends Controller
{

    public function index(Request $request)
    {
        $user_id = auth()->id();
        $buscar = $request->get('buscador');
        $asignaturas = Asignatura::where('id_carrera', auth()->user()->id_carrera)->get();
        if ($buscar) {
            $notas = Nota::where('id_usuario', $user_id)
                ->whereHas('temas.asignaturas', function ($query) use ($buscar) {
                    $query->where('asignatura', 'like', '%' . $buscar . '%');
                })
                ->get();
        } else {
            $buscar = null;
            $notas = Nota::where('id_usuario', $user_id)->get();
        }
        return view('notas.index')->with([
            'notas' => $notas,
            'asignaturas' => $asignaturas,
        ]);
    }

    public function create()
    {
        $asignaturas = Asignatura::where('id_carrera', auth()->user()->id_carrera)->get();
        $temas = Tema::whereIn('id_asignatura', $asignaturas->pluck('id'))->get();
        return view('notas.crear', compact('temas', 'asignaturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tema' => ['required', 'numeric', 'not_in:0'], // Requerido, numérico y debe ser mayor a 0
            'titulo' => ['required'],
            'contenido' => ['required', 'min:10'],
            'p_clave' => ['required'],
            'resumen' => ['required', 'min:10'],
        ]);

        $user_id = auth()->id();

        $nota = new Nota;
        $nota->titulo = $request->titulo;
        $nota->contenido = $request->contenido;
        $nota->p_clave = $request->p_clave;
        $nota->resumen = $request->resumen;
        $nota->id_usuario = $user_id;
        $nota->id_tema = $request->tema;
        $nota->save();
        return redirect('notas')->with('flash_message', 'Nota Addedd!');
    }
    public function show($id)
    {
        $nota = Nota::find($id);
        $tema = Tema::where('id', $nota->id_tema)->first();
        $asignatura = Asignatura::where('id', $tema->id_asignatura)->first();
        return view('notas.mostrar')->with([
            'nota' => $nota,
            'tema' => $tema,
            'asignatura' => $asignatura
        ]);
    }

    public function edit($id)
    {
        $nota = Nota::find($id);
        $tema = Tema::where('id', $nota->id_tema)->first();
        $asignatura = Asignatura::where('id', $tema->id_asignatura)->first();
        return view('notas.editar')->with([
            'nota' => $nota,
            'tema' => $tema,
            'asignatura' => $asignatura,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => ['required'],
            'contenido' => ['required', 'min:10'],
            'p_clave' => ['required'],
            'resumen' => ['required', 'min:10'],
        ]);

        $nota = Nota::find($id);

        $nota->titulo = $request->titulo;
        $nota->contenido = $request->contenido;
        $nota->p_clave = $request->p_clave;
        $nota->resumen = $request->resumen;
        $nota->save();
        return redirect('notas')->with('flash_message', 'Nota Updated!');
    }

    public function destroy($id)
    {
        Nota::destroy($id);
        return redirect('notas')->with('flash_message', 'Nota deleted!');
    }
}
