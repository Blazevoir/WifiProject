<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index(){
        $users = Auth::all();
        return view('auth.create')->with(['users' => $users]);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    // public function store(Request $request) {
    
    //     $user = new user([
    //         "name"=> $request->get("name"),
    //         "email"=> $request->get("email"),
    //         "password"=> Hash::make($request->get("password")),
    //         "tipo"=> $request->get("tipo"),
    //     ]);
        
    //     $user->save();

    //     return back();
    // }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo'  => 'tecnico',
        ]);
        

        
        return $user;
    }
    
    public function register(Request $request)
        {
            // dd($request->all());
            $this->validator($request->all())->validated();


            event(new Registered($user = $this->create($request->all())));
            $user->sendEmailVerificationNotification();
            // $this->guard()->login($user);
            session(['registro' => 'ok']);
            
            return $this->registered($request, $user)
                            ?: redirect($this->redirectPath());
        }

}
