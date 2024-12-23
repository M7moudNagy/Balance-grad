<?php

namespace App\Http\Controllers\DoctorPanal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('doctor.dashboard');
    }
}
