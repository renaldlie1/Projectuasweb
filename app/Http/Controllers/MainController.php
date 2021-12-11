<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function homepage() {
        return view('homepage', [
            'image' => 'sbkuislogo.png'
        ]);

    }

    public function aboutus(){
        return view('aboutus', [
        ]);
    }

    
}
