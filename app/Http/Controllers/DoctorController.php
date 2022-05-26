<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        return view('psy.index');
    }

    public function schedule()
    {
        $psy = Auth::guard('webpsy')->user()->name;
        $data = Booking::where('psychologist', $psy)->get();
        return view('psy.schedule', ['data' => $data]);
    }

    public function feedback()
    {
        $feedback=feedback::all();
        return view('psy.feedback', ['feedback' => $feedback]);
    }
}
