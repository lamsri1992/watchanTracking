<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DrugOrderController extends Controller
{
    function createOrder(Request $request)
    {
        $json = $request->get('formData');
        return response()->json($json);
    }
}
