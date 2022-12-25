<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:8'
        // ]);

        // $credentials = $request->only('email', 'password');

        // if (!Auth::attempt($credentials)) return redirect("login")->withErrors(['msg' => 'The Message']);

        // if (auth()->user()->role == 'dealer') return redirect(route('dealer.dashboard'))->withSuccess('Signed in');
        // if (auth()->user()->role == 'biro') return redirect(route('biro.BiroDashboard'))->withSuccess('Signed in');

        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            if (auth()->user()->role == 'biro') {
    
                return redirect()->route('biro.Dashboard');
            } 
            elseif (auth()->user()->role == 'dealer') {
                return redirect()->route('dealer.ashboard');
            }
        }else{
            toast('Gagal Login, <br> <small>Cek kembali Email dan Password Anda</small>','error');
            return redirect()->route('login');
        }
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $data = $request->all();
        $check = $this->create($data);

        $this->login($request);

        return redirect('dashboard')->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
