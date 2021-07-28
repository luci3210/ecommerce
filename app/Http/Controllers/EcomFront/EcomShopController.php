<?php

namespace App\Http\Controllers\EcomFront;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcomShopController extends Controller
{
    //
    public function index(Request $req)
    {
        return view('ecom_front_views.shop.shop_view_item');

    }

    public function list(Request $req)
    {
        return view('ecom_front_views.shop.shop_list_item');

    }
}
