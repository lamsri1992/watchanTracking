<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class DrugOrderController extends Controller
{

    function index()
    {
        $data = DB::connection('mysql')->table('order_drug')
                ->where('drug_status', 1)
                ->get();
        return view('drug.index', ['data'=>$data]);
    }

    function show($id)
    {
        $parm_id = base64_decode($id);
        $list = DB::connection('mysql')->table('order_drug')
                ->where('drug_id', $parm_id)
                ->first();
        return view('drug.show', ['list'=>$list]);
    }

    function createOrder(Request $request)
    {
        $json = $request->get('formData');
        Storage::disk('local')->makeDirectory('public/MDR/'.$json['visit_vn']);
        DB::connection('mysql')->table('order_drug')->insert(
            [
                'drug_hn' => $json['visit_hn'],
                'drug_vn' => $json['visit_vn'],
                'drug_bed' => $json['visit_bed']
            ]
        );
    }

    public function store(Request $request)
    {
        $path = $request->file('orderFile')->store('MDR','public');
        return redirect('/');
    }
}
