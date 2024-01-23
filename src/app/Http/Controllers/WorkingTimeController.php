<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\breaking_time;
use App\Models\working_time;

class WorkingTimeController extends Controller
{
    public function view(){

        $users = User::all();
        $breaking_times = breaking_time::all();
        $working_times = working_time::all();

        return view('userWarkingTime', compact('users','breaking_times','working_times'));
    }
}
