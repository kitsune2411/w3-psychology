<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Htpp\payment;
use App\Models\Payment as ModelsPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pay=pay::all();
        if(!Session::has('appointment')){
            //forget session
            redirect()->route('make_appointment');
        }
        $data = Session::get('appointment');
        return view('patient.booking.payment', ['item' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Session::has('appointment');
        if (!$data) {
            return redirect()->route('make_appointment')->withError('Something went wrong!');
        }
        //insert code validation for payment form
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|min:9',
            'receipt' => 'required|mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        //insert code to store payment data
        $imageName = time().'.'.$request->receipt->getClientOriginalExtension();
        $request->receipt->storeAs('receipt', $imageName, 'public');
        $data = Session::get('appointment');
        booking::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'telp'          => $request->phone_number,
            'date'          => $data['date'],
            'finish'        => $data['finnish'],
            'service'       => $data['service'],
            'hour'          => $data['hour'],
            'psychologist'  => $data['psychologist'],
            'message'       => $data['message'],
            'receipt'       => $imageName
        ]);


        return redirect()->route('list_appointment');

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
        //
    }
}
