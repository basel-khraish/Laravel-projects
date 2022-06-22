<?php

namespace App\Http\Controllers\relation;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        $insurances = Insurance::with('user')->get();

        return view('relation.one-to-one',compact('insurances'));
    }
}
