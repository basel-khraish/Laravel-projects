<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_submit(Request $request)
    {
        // dd($request->all());
        // $name = $request->input('name');
        // $age = $request->input('age');
        $name = htmlspecialchars($request->name);
        $age = htmlspecialchars($request->age);
        return 'My Name Is : '.$name.' And My Age Is : '.$age;
        // return view('forms.form1_submit',compact('name','age'));
    }


    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_submit(Request $request)
    {
        $name = htmlspecialchars($request -> name);
        $cv = $request->cv;
        $name_cv = rand().'_'.time().'_'.rand().'_'.$request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads'),$name_cv);
    }

    public function form3()
    {
        return view('forms.form3');
    }
    public function form3_submit(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        // $cv = $request->cv;
        // $name_cv = rand().'_'.time().'_'.rand().'_'.$request->file('cv')->getClientOriginalName();
        // $request->file('cv')->move(public_path('uploads'),$name_cv);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);
        return 'done';
    }

    public function form4()
    {
        return view('forms.form4');
    }
    public function form4_submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'message'=>'required|max:100'
        ]);
        return 'Done';
    }
}


