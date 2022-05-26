<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Psychologist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('appointment')){
            //forget session
            Session::forget('appointment');
        }

        $data = booking::where('email', Auth::guard('web')->user()->email)->get();
        return view('patient.booking.index', ['appointment' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Psychologist::select('name')->get();
        return view('patient.booking.create', ['nama' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'telp' => 'required|numeric|min:9',
            'date' => 'required',
            'finish' => 'required',
            'service' => 'required',
            'hour' => 'required',
            'psychologist' => 'required',
            'message' => '',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        $data = [
            'email'         => $request->email,
            'telp'          => $request->telp,
            'date'          => $request->date,
            'finnish'       => $request->finish,
            'service'       => $request->service,
            'hour'          => $request->hour,
            'psychologist'  => $request->psychologist,
            'message'       => $request->message
        ];

        Session::put('appointment' ,$data);
        return redirect()->route('payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        booking::findOrFail($id)->delete();
        return redirect('/staff/schedule')->with('succes', 'Data deleted successfully');
    }
}
