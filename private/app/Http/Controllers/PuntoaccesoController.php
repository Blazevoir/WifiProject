<?php

namespace App\Http\Controllers;
use App\Puntoacceso;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PuntoAccesoRequest;

class PuntoaccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('puntoacceso.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('puntoacceso.create')->with(['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PuntoAccesoRequest $request)
    {
        $input = $request->validated();
        $puntoacceso = new Puntoacceso($input);
        $result = $puntoacceso->save();
        if($result == 1 ){
            $result = 'Punto de acceso introducido con exito';
        }
        else{
            $result = 'Ha habido un fallo insertando un punto de acceso';
        }
        return view('index')->with(['result' => $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\puntoacceso  $puntoacceso
     * @return \Illuminate\Http\Response
     */
    public function show(puntoacceso $puntoacceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\puntoacceso  $puntoacceso
     * @return \Illuminate\Http\Response
     */
    public function edit(puntoacceso $puntoacceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\puntoacceso  $puntoacceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, puntoacceso $puntoacceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\puntoacceso  $puntoacceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(puntoacceso $puntoacceso)
    {
        //
    }
}
