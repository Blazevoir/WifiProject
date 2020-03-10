<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Activo;
use App\Conexion;
use App\Basura;
class ApiController extends Controller
{
    
    function data(Request $request){
        $periodosactivos = Activo::all();
        $puntoacceso = $request->input('idpuntoacceso');
        
        $fecha = Carbon::parse($request->input('fecha'));
        $hora  = Carbon::parse($request->input('hora'));
        $mac = $request->input('mac');
        
        foreach($periodosactivos as $periodoactivo){
                $fechainicial = Carbon::parse($periodoactivo->fechainicial);
                $fechafinal = Carbon::parse($periodoactivo->fechafinal);
                $horainicial = Carbon::parse($periodoactivo->horainicial);
                $horafinal = Carbon::parse($periodoactivo->horafinal);
                if($fecha->gt($fechainicial) && $fecha->lt($fechafinal) && $hora->gt($horainicial) && $hora->lt($horafinal) && self::checkPeriodoMinimo($mac,$periodoactivo->periodoMinimo) === true){
                    $conexion = new Conexion(['idpuntoacceso'=>$puntoacceso,
                                              'fecha' => $fecha->format('Y-m-d'),
                                              'hora'  => $hora->format('h:i:s'),
                                              'mac'   => $mac,
                    ]);
                    $conexion->save();
                    return response()->json([
                        'punto de acceso' => $puntoacceso,
                        'fecha' => $fecha,
                        'hora' => $hora,
                        'mac' => $mac,
                        ]);
                }
        }
        $conexion = new Basura(['idpuntoacceso'=>$puntoacceso,
                                  'fecha' => $fecha->format('Y-m-d'),
                                  'hora'  => $hora->format('h:i:s'),
                                  'mac'   => $mac,
                    ]);
                    $conexion->save();
        return response()->json(['conexion' => 'fallida']);
    }
    
    static function checkPeriodoMinimo($mac,$time){
        $conexion = Conexion::where('mac',$mac)->orderBy('created_at','desc')->take(1)->get();
        if(count($conexion) == 0){
            return true;
        }
        foreach($conexion as $c){
            if(($c->created_at)->diffInMinutes(Carbon::now())>$time){
                return true;
            } else return false;
        }
        
    }
    
}
