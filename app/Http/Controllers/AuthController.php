<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Friend;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends Controller
{
    use AuthorizesRequests;

    public function user_login()
    {
        return view('userlogin');
    }

    public function registration()
    {
        return view('register');
    }

    public function home()

    {
        $users = User::where('id','!=',Auth::id())
        ->paginate(6);

        if(Auth::check()){
            return view('home',compact('users'));
        }
        return redirect("/")->with('success', 'Please Login Here');

    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required|min:6',
            'img_path' => 'required'
        ]);

        $image_name = time() . '-' . $request->name . '.' .$request->img_path->extension();
        $request->img_path->move(public_path('images'), $image_name);
        $data = $request->all();


        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'img_path' => $image_name,
            'password' => Hash::make($data['password'])
          ]);

        return redirect("/")->with('success', 'You have Successfully registered.. please log in');
    }

    public function logout() {

        Auth::logout();

        return redirect('/');
    }
}
