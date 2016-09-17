<?php

use App\Notifications\PaymentNotifications;
use App\notifications\PostUpdated;
use App\Notifications\PostNotification;
use App\Notifications\SubscriptionCancelled;
use App\Mail\WelcomeMail;
use App\User;
use App\Post;

//Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');


Route::get('/vue', function () {
    return view('welcome_vue');
});

Route::get('/pagination', function () {
    return view('user_pagination', ['users' => \App\User::paginate(5)]);
});

Route::get('/send_mail', function () {
    $email = new WelcomeMail(new User(['name'=>'Lenna123']));
    Mail::to('mglrahul@gmail.com')->send($email);
});

Route::get('/loop', function(){
    $users = collect(['Nitesh','Ravi', 'Rahul', 'Manish'])->map(function($name){
        return new App\User(['name'=>$name]);
    });

    return view('loop', compact('users'));
});

Route::get('notify', function(){
    $user = User::find(1);
    $post = Post::find(1);

    $user->notify(new PostNotification($post));
});

Route::get('db_notify', function(){
    //Auth::user()->notify(new SubscriptionCancelled);

    // $post = Post::first();
    // Auth::user()->notify(new PostUpdated($post));
    return view('db_notify');
});

Route::delete('users/{user}/notifications', function(App\User $user){
    $user->unreadNotifications->map(function($n){
        $n->markAsRead();
    });

    return back();
});

Route::get('slack_noti', function(){
    $user = User::find(2);
    $admin = User::find(1);

    $admin->notify(new PaymentNotifications($user));
});

Route::get('file_upload', function(){
    return view('file_upload');
});

Route::post('upload', function(){
    //dd(request());
    return request()->file('avatar')->store('avatars');

    //return back();
});

Route::get('test123', function () {
    echo 'Hello test';
});
