<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->has('keyword'))
        {
            $teachers = Teacher::where('name','like','%'.request()->keyword.'%')->paginate(5);
        }else
        {
            $teachers = Teacher::paginate(5);
        }
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:teachers,email',
            'phone' => 'required|max:20',
        ]);

        // upload file

        // store data
        Teacher::create([
            // [اسم العمود في قواعد البيانات]=>[ index اسم الحقل في ]

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        // return message
        return redirect()->route('teachers.index')->with('msg', 'Teacher added successfull')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|max:20',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        // return message
        return redirect()->route('teachers.index')->with('msg', 'Teacher Edited successfull')->with('type', 'info');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy($id);

        // $item = Teacher::find($id);

        // $image=$item->image;
        // unlink($image);

        // $item->delete();


        // return message
        return redirect()->route('teachers.index')->with('msg', 'Teacher Deleted successfull')->with('type', 'danger');
    }
}
