<?php

namespace Trueque\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Trueque\Http\Requests;
use Trueque\Http\Controllers\Controller;
use Trueque\usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $use = \Trueque\usuario::All();
        return view('usuario.index',compact('use'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        \Trueque\usuario::create([
            'nombres' => $request['nombres'],
            'apellidop' => $request['apellidop'],
            'apellidom'=> $request['apellidom'],
            'correo'  => $request['correo'],
            'password' => $request['password'],
            'telefono' => $request['telefono'],
            'fecha_nacimiento'=> $request['fecha_nacimiento'],
          
        ]);

        return Redirect::to('usuario');
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
        $usuario = usuario::find($id);
        return view('usuario.edit',['usuario'=>$usuario]);
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
        $usuario  =usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        return Redirect::to('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        usuario::destroy($id);
        return Redirect::to('usuario');
    }
}
