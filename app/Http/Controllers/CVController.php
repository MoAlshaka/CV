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
    return $data;
    session(['data' =>$data]);
    return view('cv.design')->with(['date'=>$data]);
   }

   public function design1(){
    $data = session('data');
    return view('cv.design1')->with(['date'=>$data]);
   }
}
