<?php

namespace App\Http\Controllers;
use App\Puntoacceso;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PuntoAccesoRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }
    

}
