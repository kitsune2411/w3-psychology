<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('web')->check()) {
            return redirect('/');
        }
        return view('auth.patient.index');
    }

    /**
     * Display register Page
     *
     * @return void
     */
    public function registerPage()
    {
        if (Auth::guard('web')->check()) {
            return redirect('/');
        }
        return view('auth.patient.signup');
    }

    /**
     * login proses
     *
     * @param  mixed $request
     * @return void
     */
    public function login(Request $request)
    {

        if (!Auth::guard('web')->attempt($request->only('email', 'password'), $request->get('remember')))
        {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);

        // return response()->json(['message' => 'login success']);
        return redirect()->intended('');
    }

    /**
     * register proses
     *
     * @param  mixed $request
     * @return void
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            // 'gender' => 'required',
            // 'age' => 'required|integer',
            'phone_number' => 'required|min:9',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);
        // dd(Session::all());

        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            // 'gender' => $request->gender,
            // 'age' => $request->age,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);

        // return response()->json(['user' => $user ]);
        return redirect('/login');
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('web')->logout();

        // return [
        //     'message' => 'You have successfully logged out and the token was successfully deleted'
        // ];
        return redirect('/');
    }



}
