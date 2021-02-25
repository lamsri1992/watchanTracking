<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use DB;

class DrugOrderController extends Controller
{

    function index()
    {
        $data = DB::connection('mysql')->table('order_drug')
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
        $path = public_path('MDR/'.$json['visit_vn'].'/Order');
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
            DB::connection('mysql')->table('order_drug')->insert(
                [
                    'drug_hn' => $json['visit_hn'],
                    'drug_vn' => $json['visit_vn'],
                    'drug_bed' => $json['visit_bed']
                ]
            );
        }
    }

    public function upload(Request $request)
    {
        $file = $request->file('vn_file');
        $file_name = $file->getClientOriginalName();
        $vn = $request->get('vn_id');
        $file->move(public_path('MDR/'.$vn.'/Order'), $file_name);

        $Token = "qhtvdJ3vVilU4pkcUlcimaoFCf3AIQa38EvZC9zdxQI";
        $message = "IPD Create New Order";
        line_notify($Token, $message);

        return redirect('/drugOrder');
    }
}
