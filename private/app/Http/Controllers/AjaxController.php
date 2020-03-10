<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activo;
use App\User;
use App\Puntoacceso;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    function token(){
        return response()->json([
            'token' => csrf_token(),
        ]);
    }
    
    function rellenarActivo(){
    $activo = Activo::paginate(5);
        return response()->json([
            'activo' => $activo,
            'authenticated' => Auth::check(),
        ]);
    }
    
    function borrarActivo(Request $request){
        $activo = Activo::find($request->input('id'));
        $activo->delete();
        return response()->json([
            'deleting' => $activo,
        ]);
    }
    
    function rellenarPuntoAcceso(){
    $puntoAcceso = Puntoacceso::paginate(5);
        return response()->json([
            'puntoAcceso' => $puntoAcceso,
            'authenticated' => Auth::check(),
        ]);
    }
    
    function borrarPuntoAcceso(Request $request){
        $puntoAcceso = Puntoacceso::find($request->input('id'));
        $puntoAcceso->delete();
        return response()->json([
            'deleting' => $puntoAcceso,
        ]);
    }
    
    function rellenarUser(){
    $user = User::paginate(5);
        return response()->json([
            'user' => $user,
            'authenticated' => Auth::check(),
        ]);
    }
    
    function borrarUser(Request $request){
        $user = User::find($request->input('id'));
        $user->delete();
        return response()->json([
            'deleting' => $user,
        ]);
    }
}