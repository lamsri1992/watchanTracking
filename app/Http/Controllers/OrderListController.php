<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderListController extends Controller
{
    function createOrder(Request $request)
    {
        $test = $request->get('formData');
        return response()->json($test);
    }
}
