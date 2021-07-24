<?php

namespace App\Http\Controllers\EcomFront;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeEcomController extends Controller
{
    //

    public function index(Request $req)
    {
        # code...

        return view('ecom_front_views.ecome_home');
    }
}
