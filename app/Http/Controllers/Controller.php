<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('home');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function foodMenu(){
        return view('foodMenu');
    }

    public function contactUs(){
        return view('contactUs');
    }
}
