<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ActivoRequest extends FormRequest
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
            'fechainicial'    => 'Fecha inicial',
            'fechafinal'    => 'Fecha final',
            'horainicial'      => 'Hora inicial',
            'horafinal'      => 'Hora final',
            'periodominimo'      => 'Periodo minimo',
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
        return [
            'fechainicial.required'      => $required,
            'fechainicial.date'          => $date,
            'fechafinal.required'        => $required,
            'fechafinal.date'            => $date,
            'horainicial.required'       => $required,
            'horainicial.date'           => $date,
            'horafinal.required'         => $required,
            'horafinal.date'             => $date,      
            'periodominimo.required'     => $required,
            'periodominimo.numeric'      => $numeric,  
            'periodominimo.min'          => $min,  
            'periodominimo.max'          => $max,  
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
            'fechainicial'  =>  'required | string',
            'fechafinal'    =>  'required | string',
            'horainicial'   =>  'required | string',
            'horafinal'     =>  'required | string',
            'periodominimo' =>  'required | numeric | min:0 | max:99999',
            // 'required|date|date_format:Y-m-d'
        ];
    }
}
