<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PuntoAccesoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();  
    }

    public function attributes(){
        return[
            'iduser'      => 'Tecnico',
            'modelo'    => 'Modelo',
            'ubicacion'    => 'Ubicacion',
            'latitud'      => 'Latitud',
            'longitud'      => 'Longitud',
            'fechaalta'      => 'Fecha de alta',
        ];
    }
    
    public function messages() {
        $alpha      = 'El campo :attribute ha de ser alfanumérico';
        $required   = 'El campo :attribute es obligatorio';
        $min        = 'La longitud mínima del campo :attribute es :min';
        $max        = 'La longitud máxima del campo :attribute es :max';
        $mimes      = 'El formato del campo :attribute no es correcto';
        $numeric    = 'El valor campo :attribute debe de ser numérico.';
        $gte        = 'El valor campo :attribute debe de ser mayor o igual que cero.';
        $lte        = 'El valor campo :attribute debe de ser mayor que uno.';
        $unique     = 'Ya existe un elemento con el mismo nombre';
        $date       = 'La fecha del campo :attribute es invalida';
        $string     = 'El campo :attribute debe ser una cadena de texto';
        return [
            'iduser.required'     => $required,
            'iduser.numeric'      => $numeric,
            'iduser.min'          => $min,
            'modelo.required'     => $required,
            'modelo.min'          => $min,
            'modelo.max'          => $max,
            'modelo.string'       => $string,
            'ubicacion.required'  => $required,
            'ubicacion.min'       => $min,
            'ubicacion.max'       => $max,
            'ubicacion.string'    => $string,
            'latitud.required'    => $required,
            'latitud.string'      => $string,
            'latitud.min'         => $min,
            'latitud.max'         => $max,
            'longitud.required'   => $required,
            'longitud.string'     => $string,
            'longitud.min'        => $min,
            'longitud.max'        => $max,
            'fechaalta.required'  => $required,
            'fechaalta.string'    => $string,
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'iduser'     =>'required | numeric | min:1',
            'modelo'     =>'required | min:2 | max:40 | string',
            'ubicacion'  =>'required | min:2 | max:40 | string',
            'latitud'    =>'required | string | min:0 | max:3',
            'longitud'   =>'required | string | min:0 | max:3',
            'fechaalta'  =>'required | string',
            // 'required|date|date_format:Y-m-d'
        ];
    }
}
