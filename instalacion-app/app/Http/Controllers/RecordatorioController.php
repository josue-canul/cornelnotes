<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use Illuminate\Http\Request;
use App\Models\Tema;


class RecordatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=auth()->id();
        //dole dos puntos consulta
        $recordatoriof=Recordatorio::where('User_id',$userid)->get();

        return view('recordatorios.index',compact('recordatoriof'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recordatorios.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userid=auth()->id();
        $tema=Tema::where('name',$request->temi)
            ->first();

        $recordatoriol=new Recordatorio;
        $recordatoriol->importancia=$request->importancia;
        $recordatoriol->recordar=$request->recordar;
        $recordatoriol->User_id=$userid;
        $recordatoriol->Tema_id=$tema->id;

        $recordatoriol->save();
    
        return redirect()->route('recordatorios.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recordatorio  $recordatorio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recordatorios= Recordatorio::find($id);

        return view('recordatorios.show',compact('recordatorios'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recordatorio  $recordatorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recordatorios= Recordatorio::find($id);

        return view('recordatorios.edit',compact('recordatorios'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recordatorio  $recordatorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recordatorioj=Recordatorio::find($id);
        $user_id=auth()->id();

        $recordatoriol->importancia=$request->importancia;
        $recordatoriol->recordar=$request->recordar;
        $recordarorioj->save();
        return redirect()->route('recordatorios.index')->with('actualizacion correcta');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recordatorio  $recordatorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recordatoriod=Recordatorio::find($id);
        $recordatoriod->delete();
        return redirect()->route('recordatorios.index');
        //
    }
}
