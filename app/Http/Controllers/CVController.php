<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvRequest;
use Illuminate\Http\Request;

class CVController extends Controller
{
   public function info(){
    return view('cv.info');
   }

   public function store(Request $request){
    $data=$request->all();
    session(['data' =>$data]);
    return view('cv.desin')->with(['date'=>$data]);
   }
}
