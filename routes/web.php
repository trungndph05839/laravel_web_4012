<?php

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
use App\Models\User;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});
    
Route::get('starter', function() {
	$users = factory(User::class, 10)
	->make()
	->toArray();
	
    	return view('starter',[
    		'users' =>$users
    	]);  	
});
Route::get('post', function() {
	$post1 = factory(Post::class, 10)
	->make()
	->toArray();
	
    	return view('post',[
    		'post1' =>$post1
    	]);  	
});

