<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use App\Models\Tema;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=auth()->id();
        //dole dos puntos consuta
        $notaf=Nota::where('User_id',$userid)->get();

        return view('notas.index',compact('notaf'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create');
        
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

        $notal=new Nota;
        $notal->titulo=$request->titulo;
        $notal->resumen=$request->resumen;
        $notal->p_clave=$request->p_clave;
        $notal->apunte=$request->apunte;
        $notal->User_id=$userid;
        $notal->Tema_id=$tema->id;

        $notal->save();
    
        return redirect()->route('notas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notas= Nota::find($id);

        return view('notas.show',compact('notas'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notas= Nota::find($id);

        return view('notas.edit',compact('notas'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notaj=Nota::find($id);
        $user_id=auth()->id();

        $notaj->titulo=$request->titulo;
        $notaj->resumen=$request->resumen;
        $notaj->p_clave=$request->p_clave;
        $notaj->apunte=$request->apunte;
        $notaj->save();
        return redirect()->route('notas.index')->with('actualizacion correcta');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notad=Nota::find($id);
        $notad->delete();
        return redirect()->route('notas.index');
        //
    }
}
