<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\Site1Controller;
use App\Http\Controllers\site\Site2Controller;
use App\Http\Controllers\crud\TeacherController;
use App\Http\Controllers\relation\RelationController;
use App\Http\Controllers\RelationController as ControllersRelationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/',function(){return 'Home Page';});
//     Route::get('/contact',function(){return 'Contact Page';});
//     Route::get('/about',function(){return 'About Page';});
//     Route::get('/page/{id?}',function($id=''){return 'Number Page # '.$id;});
// });

Route::prefix('site')->name('site.')->controller(SiteController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
});



Route::prefix('site1')->name('site1.')->controller(Site1Controller::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
});

Route::prefix('site2')->name('site2.')->controller(Site2Controller::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/portfolio','portfolio')->name('portfolio');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
});

Route::get('form1',[FormsController::class,'form1'])->name('forms.form1');
Route::post('form1',[FormsController::class,'form1_submit'])->name('forms.form1_submit');

Route::get('form2',[FormsController::class,'form2'])->name('forms.form2');
Route::post('form2',[FormsController::class,'form2_submit'])->name('forms.form2_submit');

Route::get('form3',[FormsController::class,'form3'])->name('forms.form3');
Route::post('form3',[FormsController::class,'form3_submit'])->name('forms.form3_submit');

Route::get('form4',[FormsController::class,'form4'])->name('forms.form4');
Route::post('form4',[FormsController::class,'form4_submit'])->name('forms.form4_submit');


Route::resource('teachers',TeacherController::class);

// Relation one to one
Route::get('one-to-one',[RelationController::class,'one_to_one']);
// Relation one to many
Route::get('one-to-many',[RelationController::class,'one_to_many']);




// Relation one to many ex||
Route::get('posts', [RelationController::class, 'posts'])->name('posts.all');
Route::get('posts/{id}', [RelationController::class, 'post_single'])->name('posts.single');





Route::get('register-subject',[RelationController::class,'register_subject'])->name('register_subject');
Route::post('register-subject',[RelationController::class,'register_subject_submit'])->name('register_subject_submit');
