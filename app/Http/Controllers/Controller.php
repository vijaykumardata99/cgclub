<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        return view('index');
    }
    
    public function aboutCgClub() {
        return view('about');
    }
    public function facilities__s() {
        return view('facilities');
    }
    public function amenties__s() {
        return view('amenties');
    }
    public function management__s() {
        return view('management');
    }
    public function programs__s() {
        return view('programs');
    }
    public function gallery__s() {
        return view('gallery');
    }
    public function contact__s() {
        return view('contact');
    }
    public function booking__s() {
        return view('booking');
    }
    public function faq__s() {
        return view('faq');
    }
    public function login__s() {
        return view('login');
    }

    public function policies__s() {
        return view('policies');
    }
    public function clubs__s() {
        return view('other-clubs');
    }
    public function coach__s() {
        return view('our-coach');
    }
    public function timings__s() {
        return view('timings');
    }
    
}
