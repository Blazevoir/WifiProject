<?php

namespace App\Http\Controllers;

use App\Activo;
use Illuminate\Http\Request;
use App\Http\Requests\ActivoRequest;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activo.index');
    }

    public function create()
    {
        return view('activo.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivoRequest $request)
    {
        $input = $request->validated();
        $activo = new Activo($input);
        $result = $activo->save();
        if($result == 1 ){
            $result = 'Periodo activo introducido con exito';
        }
        else{
            $result = 'Ha habido un fallo insertando un periodo activo';
        }
        return view('index')->with(['result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function show(activo $activo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function edit(activo $activo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activo $activo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function destroy(activo $activo)
    {
        //
    }
}
