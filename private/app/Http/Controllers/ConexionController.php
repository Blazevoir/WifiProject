<?php

namespace App\Http\Controllers;

use App\Conexion;
use Illuminate\Http\Request;

class ConexionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conexion = new Conexion([
            "idpuntoacceso"=> $request->get("idpuntoacceso"),
            "fecha"=> $request->get("fecha"),
            "hora"=> $request->get("hora"),
            "mac"=> $request->get("mac"),
        ]);
        
        $conexion->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function show(conexion $conexion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function edit(conexion $conexion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conexion $conexion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\conexion  $conexion
     * @return \Illuminate\Http\Response
     */
    public function destroy(conexion $conexion)
    {
        //
    }
}
