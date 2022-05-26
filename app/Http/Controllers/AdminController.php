<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Booking;
use App\Models\feedback;
use App\Models\User;
use App\Models\Psychologist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('staff.index');
    }

    public function schedule()
    {
        $data= Booking::all();
        return view('staff.schedule', ['data' =>$data]);
    }

//crud_staff
    public function managementStaff()
    {
        $staf=Staff::latest()->paginate(10);
        return view('staff.management.crud_staff', ['staf' =>$staf]);
    }

    public function blankStaff()
    {
        return view('staff.management.form.blank_staff');
    }

    public function store1(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'password' => 'required|string|min:8',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        Staff::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
         ]);
        return redirect('/staff/management/crud_staff')->with('succes','Data created successfully');
    }

    public function edit1($id)
    {
        $staf = Staff::findOrFail($id);
        return view('staff.management.edit.blank_staff', ['staf' =>$staf]);
    }

    public function update1(Request $request, $id)
    {
        if ($request->password=="" || empty($request->password)) {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'password' => 'required|string|min:8',
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }

        if ($request->password=="" || empty($request->password)) {
            $staf = Staff::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]);
        } else {
            $staf = Staff::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect('/staff/management/crud_staff')->with('succes','Data updated successfully');
    }

    public function destroy1($id)
    {
        Staff::findOrFail($id)->delete();
        return redirect('/staff/management/crud_staff')->with('succes', 'Data deleted successfully');
    }

//crud_psikolog
    public function managementPsikolog()
    {
        $psikolog=Psychologist::latest()->paginate(10);
        return view('staff.management.crud_psikolog', ['psikolog' => $psikolog]);
    }

    public function blankPsikolog()
    {
        return view('staff.management.form.blank_psikolog');
    }

    public function store2(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'password' => 'required|string|min:8',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        Psychologist::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
         ]);
        return redirect('/staff/management/crud_psikolog')->with('succes','Data created successfully');
    }

    public function edit2($id)
    {
        $psikolog = Psychologist::findOrFail($id);
        return view('staff.management.edit.blank_psikolog', ['psikolog' =>$psikolog]);
    }

    public function update2(Request $request, $id)
    {
        if ($request->password=="" || empty($request->password)) {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'password' => 'required|string|min:8',
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }

        if ($request->password=="" || empty($request->password)) {
            $psikolog = Psychologist::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]);
        } else {
            $psikolog = Psychologist::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect('/staff/management/crud_psikolog')->with('succes','Data updated successfully');
    }

    public function destroy2($id)
    {
        Psychologist::findOrFail($id)->delete();
        return redirect('/staff/management/crud_psikolog')->with('succes', 'Data deleted successfully');
    }

//crud_pasien
    public function managementPasien()
    {
        $us=User::latest()->paginate(10);
        return view('staff.management.crud_pasien', ['us' =>$us]);
    }

    public function blankPasien()
    {
        return view('staff.management.form.blank_pasien');
    }

    public function store3(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'password' => 'required|string|min:8',
        ]);
        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
         ]);
        return redirect('/staff/management/crud_pasien')->with('succes','Data created successfully');
    }

    public function edit3($id)
    {
        $us = User::findOrFail($id);
        return view('staff.management.edit.blank_pasien', ['us' =>$us]);
    }

    public function update3(Request $request, $id)
    {
        if ($request->password=="" || empty($request->password)) {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'password' => 'required|string|min:8',
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }

        if ($request->password=="" || empty($request->password)) {
            $us = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]);
        } else {
            $us = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect('/staff/management/crud_pasien')->with('succes','Data updated successfully');
    }

    public function destroy3($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/staff/management/crud_pasien')->with('succes', 'Data deleted successfully');
    }

//feedback
    public function feedback()
    {
        $feedback=feedback::all();
        return view('staff.feedback', ['feedback' => $feedback]);
    }

    public function blankFeedback()
    {
        return view('staff.feedback');
    }
}
