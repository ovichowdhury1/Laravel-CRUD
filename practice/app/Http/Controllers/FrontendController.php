<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

     public function index(){
        return view('frontend.home');
     }
     public function about(){
        return view('frontend.about');
     }

     public function service(){
        return view('frontend.service');
     }

}
