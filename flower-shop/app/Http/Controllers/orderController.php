<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    function onSelect(){
    $jsonData = DB::select('Select * from orders');
    $selectData = json_encode($jsonData);
    return view('order',['selectKey'=>$jsonData]);
    }
}
