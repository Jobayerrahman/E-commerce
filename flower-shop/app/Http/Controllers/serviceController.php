<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceController extends Controller
{
    //
    function onSelect(){
        $jsonData = DB::select('Select * from services');
        $selectData = json_encode($jsonData);
        return view('service',['selectKey'=>$jsonData]);
    }
}
