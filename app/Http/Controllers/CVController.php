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
    $request->validate([
        'name' => 'required|string|max:255',
        'date' => 'required|date',
        'phone' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'institution' => 'required|string|max:255',
        'degree' => 'required|string|max:255',
        'areaOfStudy' => 'required|string|max:255',
        'grade' => 'required|string|max:255',
        'startEducationDate' => 'required|date',
        'endEducationDate' => 'required|date',
        'companyName' => 'required|array',
        'companyName.*' => 'required|string|max:255',
        'position' => 'required|array',
        'position.*' => 'required|string|max:255',
        'startDate' => 'required|array',
        'startDate.*' => 'required|date',
        'endDate' => 'required|array',
        'endDate.*' => 'required|date',
        'skill' => 'required|array',
        'skill.*' => 'required|string|max:255',
        'langName' => 'required|array',
        'langName.*' => 'required|string|max:255',
        'langLvl' => 'required|array',
        'langLvl.*' => 'required|string|max:255',
        'martialStatus' => 'required|string|max:255',
        'militaryStatus' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'comment' => 'required|string|max:255',
        // 'image' => 'required|file|mimes:jpg,png,pdf|max:2048'
    ]);
    $data=$request->all();
    session(['data' =>$data]);
    return view('cv.design')->with(['date'=>$data]);
   }


   public function design1(){
    $data = session('data');
    return view('cv.design1')->with(['date'=>$data]);
   }

   public function design(){
    $data = session('data');
    return view('cv.design')->with(['date'=>$data]);
   }
}
