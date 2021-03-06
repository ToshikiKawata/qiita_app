<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [ArticleController::class, 'index']);

route::resource('articles', ArticleController::class)
->Middleware('auth');

//route::redirect('/', route('articles.index'), 302);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
