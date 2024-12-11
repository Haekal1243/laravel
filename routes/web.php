<?php
use Illuminate\Support\Facades\Route;
//home
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

//signin
Route::get('/signin', function () {
    return view('signin');
});

Route::post('/signin', function () {
    return 'Process Signin'; 
});
//signup
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', function () {
    return 'Process Signup'; 
});

//blog
Route::get('/blog', function () {
    return 'List of Blog Articles';
});
 Route::get('/blogpost/{blogId}', function ($blogId) {
   $title = request()->query('title', 'Default Title');
   $content = request()->query('content', 'No Content');
  return "Blog ID: $blogId, Title: $title, Content: $content";
});

Route::get('/blog/{Idblog}', function ($Idblog) {
    return view('blog', compact('Idblog'));
});
//category
Route::get('/category/{slug}', function ($slug) {
    return  "Articles in Category with Slug: $slug";
});

//author
Route::get('/author/{username}', function ($username) {
    return "Articles by Author: $username";
});

//privacy
Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});

//profile
Route::get('/profile/{Idprofile}', function ($Idprofile) {
    return view('profile', compact('Idprofile'));
});