<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//usa la validacion de parametros
use App\Http\Requests\MensajeRequest;
// usa el modelo del ORM eloquent
use App\Mensaje;

class mensajesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth',['except' => ['create','store'] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::all();
        return view('mensajes.index',compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //muestra el formulario de creacion
        return view('mensajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MensajeRequest $request)
    {

        //guardar
        Mensaje::create($request->all());
        // si quiero ver el paquete json que se envio hacer return $request->all();
        //redireccionar
        return redirect()->route('mensajes.create')->with('info', 'Hemos recibido tu mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $mensaje = Mensaje::find($id);
        return view('mensajes.show',compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensaje = Mensaje::find($id);
        return view('mensajes.edit',compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MensajeRequest $request, $id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->update($request->all());
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        return redirect()->route('mensajes.index');
    }
}
