<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffsController extends Controller
{
    public function signin()
    {
        return view('staff.signin');
    }
}
