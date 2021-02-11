<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Route::get('/post/create', [PostController::class, 'create']);
// Route::post('/post', [PostController::class, 'store']);

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
Route::get('/', [PageController::class, 'show']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'store']);

// Route::get('/login', function(){
//     return view('login');
// });

// Route::get('/', function(){
//     $name = request('name');

//     return view('test', [
//         'name' => $name
//     ]);
// });

// Route::get('/hello/{name}', 'App\Http\Controllers\HelloWorldController@show');



// TODO checkout tutorial laracast blade cookbook to my code

// use Illuminate\Support\Facades\Route;
// use App\Comment;


// // Select Nav Link Setup

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/about', function () {
//     return view('welcome');
// })->name('about');

// Route::get('/testimonials', function () {
//     return view('welcome');
// })->name('testimonials');

// Route::get('/contact', function () {
//     return view('welcome');
// })->name('contact');

// Route::get('/contact-team', function () {
//     return view('welcome');
// });

// Route::get('/comments/{comment}/edit', function (Comment $comment) {
//     return view('comments.edit', ['comment' => $comment]);
// });

// Route::patch('/comments/{comment}', function (Comment $comment) {
//     $comment->update(
//         request()->validate(['body' => 'required|string'])
//     );

//     return redirect("/comments/{$comment->id}/edit");
// });

// Route::delete('/comments/{comment}', function (Comment $comment) {
//     // authorize the delete

//     $comment->delete();

//     return redirect('/');
// });
