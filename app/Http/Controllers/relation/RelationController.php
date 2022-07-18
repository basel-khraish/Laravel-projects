<?php

namespace App\Http\Controllers\relation;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        return view('relation.posts', compact('posts'));
    }

    public function post_single($id)
    {
        $post = Post::with('comments.user')->findOrFail($id);

        $next_post = Post::where('id', '>', $post->id)->first();
        $prev_post = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();

        // dd($next_post);

        return view('relation.posts_single', compact('post', 'id', 'next_post', 'prev_post'));
    }




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
