<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\AdminProfile;
use App\FooterSetting;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Car::orderBy('created_at','desc')->take(4)->get();
        $adminprofile = AdminProfile::first();
        $footer = FooterSetting::first();    
        if(!isset($_GET['key'])){
            $cars1 = Car::orderBy('created_at','desc')->take(4)->get();
        }
        else{
            $cars1 = Car::orderBy('created_at','desc')->get();
        }
        return view('frontend.index')->with(compact('footer','cars','cars1','adminprofile','category_id', 'slider_images', 'testimonials', 'pricings','our_services'));
       

    }
    public static function getGeneralSetting()
    { 
        $adminprofile = AdminProfile::first();
        return $adminprofile;
    }
}
