<?php
use Illuminate\Support\Facades\Input;
use \App\User;
use \App\Models\students;
//require_once('..\app\User.php');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        $indentity = Auth::user()->indentity;
        return view('index')->with('indentity', $indentity);
    }
    else return view('login');
});

Route::get('login', function() {
    if(Auth::check()) return Redirect::to('/');
    else return view('login');
});

Route::post('login', function() {
    $data = array(
        'email' => Input::get('email'),
        'password' => Input::get('pwd'));
    if(Auth::attempt($data)){
        echo "true";
    }else{
        echo "false";
    }
});

Route::get('signup', function() {
    return view('signup');
});

Route::post('signup', function() {
    $data = array(
        'indentity' => Input::get('indentity'),
        'name' => Input::get('name'),
        'nick' => Input::get('nick'),
        'email' => Input::get('email'),
        'password' => Hash::make(Input::get('pwd') ));
    if($data['indentity']=='student'){
      $data['class'] = Input::get('class');
      $data['grade'] = Input::get('grade');
    }else{
      $data['class'] = 'none';
      $data['grade'] = 'none';
    }
    $user = new User($data);
    $user->save();
    return Redirect::to('login');
});

Route::get('dashboard', function() {
    if(Auth::check())
        echo 'Hello, <a href="'.URL::to('logout').'">logout?</a>';
    else
        echo 'error!';
});

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('login');
});

Route::get('rollCall/student', function() {
   if(Auth::check()){
       echo "Yes";
   }else{
       return Redirect::to('login');
   }
});

Route::get('rollCall/teacher', function() {
   if(Auth::check()){
       $indentity = Auth::user()->indentity;
       $email = Auth::user()->email;
       $list = students::where('teacher', $email)->get();
       return view('rcTeacher')->with('list', $list);
   }else{
       return Redirect::to('login');
   }
});

Route::post('search', function() {
    $input = Input::get('input');
    $data = User::where('email', $input)
                  ->orWhere('nick', $input)
                  ->where('indentity', 'student')
                  ->get();
    echo $data;
});

Route::get('add/{email}', function($email) {
    echo Auth::user()->email;
    $nick = User::where('email', $email)->first()->nick;
    echo $nick;
    $data = array(
        'teacher' => Auth::user()->email,
        'student' => $email,
        'nick' => $nick);
    $student = new students($data);
    $student->save();
    return Redirect::to('rollCall/teacher');
});