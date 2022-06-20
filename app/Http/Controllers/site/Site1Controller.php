<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index()
    {
        return view('site1.index');
    }

    public function about()
    {
        return view('site1.about');
    }

    public function contact()
    {
        return view('site1.contact');
    }


}
