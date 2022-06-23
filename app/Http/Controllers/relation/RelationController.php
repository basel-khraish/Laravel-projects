<?php

namespace App\Http\Controllers\relation;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function register_subject()
    {
        $subjects= Subject::all();
        $student = Student::find(4);

        return view('relation.register_subject',compact('subjects','student'));
    }
    public function register_subject_submit(Request $request)
    {
        $student = Student::find(4);

        $student->subjects()->sync($request->subject);
        return redirect()->back();

    }
}
