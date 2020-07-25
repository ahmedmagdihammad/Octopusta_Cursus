<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificatCenterController extends Controller
{
    public function certification_center()
    {
        return view('frontend.certification_center');
    }

    public function certification_test_view()
    {
        return view('frontend.certification_test_view');
    }

    public function certification_start_form()
    {
        return view('frontend.certification_start_form');
    }
}
