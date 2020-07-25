<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Session;
use App\Level;

class CoursesController extends Controller
{
    public function course_detail_view($id)
    {
        $sessions = Session::all();
        $session = Session::find($id);
        return view('frontend.course_detail_view', compact('sessions', 'session'));
    }

    public function live_output($id)
    {
        $sessions = Session::all();
        $session = Session::find($id);
        return view('frontend.live_output', compact('sessions', 'session'));
    }
}
