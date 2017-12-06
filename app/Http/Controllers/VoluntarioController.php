<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voluntario;

class VoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntarios = Voluntario::all();
        return view('voluntarios.index',compact('voluntarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar
        Voluntario::create($request->all());
        // si quiero ver el paquete json que se envio hacer return $request->all();
        //redireccionar
        return redirect()->route('voluntarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voluntario = Voluntario::find($id);
        return view('voluntarios.edit',compact('voluntario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voluntario = Voluntario::find($id);
        $voluntario->update($request->all());
        return redirect()->route('voluntarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voluntario = Voluntario::find($id);
        $voluntario->delete();
        return redirect()->route('voluntarios.index');
    }
}
