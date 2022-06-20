<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{

public function home()
{
    return view('site.home');
}

public function about()
{
    return view('site.about');
}

public function contact()
{
    return view('site.contact');
}


}
