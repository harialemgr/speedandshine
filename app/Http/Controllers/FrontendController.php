<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class FrontendController extends Controller
{
    public function Cars(){
        $cars1 = Car::orderBy('created_at','desc')->get();
        return view('frontend.cars')->with('cars1',$cars1);
    }
}
