<?php
use Illuminate\Support\Facades\Input;
use \App\User;
use \App\Models\students;
use \App\Models\rcLists;
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

Route::post('rollCall/class', function(){
    $date = Input::get('date');
    $data = students::where('teacher', Auth::user()->email)
                    ->where('date', $date)
                    ->get();
    echo $data;
}); 

Route::post('rollCall/add', function() {
    $data = array(
        'teacher' => Auth::user()->email,
        'class' => Input::get('class'),
        'grade' => Input::get('grade'),
        'date' => Input::get('date'),
        'time' => Input::get('time'));
    students::where('teacher', $data['teacher'])
            ->where('date', $data['date'])
            ->where('time', $data['time'])
            ->delete();
    if($data['grade']!='none' && $data['class']!='none'){
        $student = new students($data);
        $student->save();
    } 
});

Route::post('rollCall/search', function() {
    $class = students::where('teacher', Auth::user()->email)
                   ->where('date', Input::get('date'))
                   ->where('time', Input::get('time'))
                   ->first();
    if($class==""){
        echo "null";
    }else{
        $data = User::where('class', $class['class'])
                ->get();
        echo $data;
    }
});

Route::post('rollCall/addStatus', function() {
    $data = array(
        'stuEmail' => Input::get('email'),
        'status' => Input::get('status'),
        'date' => Input::get('date'),
        'time' => Input::get('time'));
    rcLists::where('stuEmail', $data['stuEmail'])
            ->where('date', $data['date'])
            ->where('time', $data['time'])
            ->delete();
    if($data['status']!='OK'){
        $rc = new rcLists($data);
        $rc->save();
        echo "OK";
    }
});