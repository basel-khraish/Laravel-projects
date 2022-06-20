<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        $title = "This is new Title";
        $desc = "Graphic Artist - Web Designer ";
        return view('site2.index',compact('title','desc'));
    }

    public function portfolio()
    {
        return view('site2.portfolio');
    }

    public function about()
    {
        return view('site2.about');
    }

    public function contact()
    {
        return view('site2.contact');
    }


}
