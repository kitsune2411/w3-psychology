<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('webstaff')->check()) {
            return redirect('staff/');
        }
        return view('auth.staff.login');
    }

    public function login(Request $request)
    {
        if (!Auth::guard('webstaff')->attempt($request->only('email', 'password')))
        {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }

        $user = Staff::where('email', $request['email'])->firstOrFail();

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);

        // return response()->json(['message' => 'login success']);
        return redirect()->intended('staff/');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'gender' => 'required',
            'age' => 'required|integer',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:staff',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = Staff::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);

        return response()->json(['user' => $user ]);
        // return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('webstaff')->logout();

        // return [
        //     'message' => 'You have successfully logged out and the token was successfully deleted'
        // ];
        return redirect()->intended('staff/login');
    }
}
