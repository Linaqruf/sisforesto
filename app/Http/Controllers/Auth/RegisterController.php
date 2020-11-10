<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {  
        $user = new \App\Models\user;
        $user->role = 'user';
        $user->name = $request->nama_pengguna;
        $user->email = $request->email_pengguna;
        $user->password = Hash::make($data['password']);
        $user->remember_token =  Str::random(60);;
        $user->save();
        // User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
            // 'password' => Hash::make($data['password']),
        //     'role' => 'user',
        // ]);
        // insert ke table pengguna
        $request->request->add(['user_id' => $user->id]);
        $pengguna = \App\Models\pengguna::create($request->all());
        $pengguna->alamat_pengguna = 'default';
        $pengguna->telp_pengguna = 'default';
        return redirect('/pengguna')->with('sukses','Data berhasil disimpan!');



    }
    // public function add(Request $request)
    // {
    //     $pengguna = new \App\Models\pengguna;
    //     $pengguna->user_id = $request->registered->id;
    //     $pengguna->nama_pengguna =$request->name;
    //     $pengguna->alamat_pengguna = 'default';
    //     $pengguna->email_pengguna = $request->email;
    //     $pengguna->telp_pengguna = 'default';
    //     $pengguna->save();
    // }
}
