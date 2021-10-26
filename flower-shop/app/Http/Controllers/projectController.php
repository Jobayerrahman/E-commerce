<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projectController extends Controller
{
    //
    function onSelect(){
    $jsonData = DB::select('Select * from projects');
    $selectData = json_encode($jsonData);
    return view('project',['selectKey'=>$jsonData]);
    }
}
