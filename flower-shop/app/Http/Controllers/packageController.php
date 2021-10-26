<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class packageController extends Controller
{
    function onSelect(){
    $jsonData = DB::select('Select * from packages');
    $selectData = json_encode($jsonData);
    return view('package',['selectKey'=>$jsonData]);
    }
}
