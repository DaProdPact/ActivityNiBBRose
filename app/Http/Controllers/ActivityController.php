<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        return view('activity1.index');
    }
    public function user(){
        return view('activity1.user');
    }
    public function about(){
        return view('activity1.about');
    }

}
