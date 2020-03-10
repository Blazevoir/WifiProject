<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Puntoacceso;
use App\Conexion;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexController extends Controller
{
    
    function index(){
        $datos = Conexion::all();
       return view('welcome')->with(['datos' => $datos]);
    }
    
    function adminarea(){
        $registro = null;
        $conexiones = Conexion::all()->groupBy('idpuntoacceso');
        $Cfechas = Conexion::all()->sortByDesc('fecha')->groupBy('fecha');
        $Cmonths = Conexion::orderBy('fecha')->get()->groupBy(function($d) {
            return Carbon::parse($d->fecha)->format('m');
        });
        $Cmacs = \DB::table('conexion')->select(\DB::raw('mac,count(mac) as nmac'))
        ->groupBy('mac')
        ->orderBy('nmac','desc')
        ->take(20)
        ->get();
        
        $Clocations = Conexion::select(DB::Raw('count(idpuntoacceso) as npa, ubicacion'))
            ->join('puntoacceso', 'conexion.idpuntoacceso', '=', 'puntoacceso.id')
            ->groupBy('ubicacion')
            ->get();
        if(session('registro') !== null){
            $registro = 'success';
            session()->forget('registro');
        }
        
        return view('index')->with(['registro' => $registro,
                                    'CpuntosAcceso' => $conexiones,
                                    'Cfechas'  => $Cfechas,
                                    'Cmonths'  => $Cmonths,
                                    'Cmacs' => $Cmacs,
                                    'Clocations' => $Clocations,
                                ]);
    }
    
    function perPoint(){
        $conexiones = Conexion::all()->groupBy('idpuntoacceso');
        return view('graphs.ap')->with(['CpuntosAcceso' => $conexiones,
                                        'Cfechas'  => 1,
                                        'Cmonths'  => 1,
                                        'Cmacs' => 1,
                                        'Clocations' => 1]);
    }
    
    function perDay(){
        $Cfechas = Conexion::all()->sortByDesc('fecha')->groupBy('fecha');
        return view('graphs.pd')->with(['CpuntosAcceso' => 1,
                                        'Cfechas'  => $Cfechas,
                                        'Cmonths'  => 1,
                                        'Cmacs' => 1,
                                        'Clocations' => 1]);
    }
    
    function perMonth(){
        $Cmonths = Conexion::orderBy('fecha')->get()->groupBy(function($d) {
            return Carbon::parse($d->fecha)->format('m');
        });
        return view('graphs.pm')->with(['CpuntosAcceso' => 1,
                                        'Cfechas'  => 1,
                                        'Cmonths'  => $Cmonths,
                                        'Cmacs' => 1,
                                        'Clocations' => 1]);
    }
    
    function perMacs(){
       $Cmacs = \DB::table('conexion')->select(\DB::raw('mac,count(mac) as nmac'))
        ->groupBy('mac')
        ->orderBy('nmac','desc')
        ->take(20)
        ->get();
        return view('graphs.pmacs')->with(['CpuntosAcceso' => 1,
                                        'Cfechas'  => 1,
                                        'Cmonths'  => 1,
                                        'Cmacs' => $Cmacs,
                                        'Clocations' => 1]);
    }    
    function perLocation(){
       $Clocations = Conexion::select(DB::Raw('count(idpuntoacceso) as npa'))
            ->join('puntoacceso', 'conexion.idpuntoacceso', '=', 'puntoacceso.id')
            ->groupBy('idpuntoacceso')
            ->get();
        return view('graphs.pl')->with(['CpuntosAcceso' => 1,
                                        'Cfechas'  => 1,
                                        'Cmonths'  => 1,
                                        'Cmacs' => 1,
                                        'Clocations' => $Clocations]);
    }        
}
