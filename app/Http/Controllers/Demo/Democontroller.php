<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Democontroller extends Controller
{
    public function Index(){
        return view ('about');
    }//end method
    public function ContactMetods(){
        return view ('contact');
    }//end method
}

