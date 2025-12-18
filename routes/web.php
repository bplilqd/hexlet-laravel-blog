<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about'])->name('about');
// Route::get('about', function () {
//     return view('about');
// })->name('about');

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками
Route::get('articles/{id}', [ArticleController::class, 'show'])
  ->name('articles.show');
// Route::get('articles', function () {
//     $test = App\Models\Article::test32();
//     $articles = App\Models\Article::all();
//     $first = App\Models\Article::first();
//     $two = App\Models\Article::find(2);
//     return view('articles', [
//         'test' => $test,
//         'two' => $two,
//         'first' => $first,
//         'articles' => $articles
//     ]);
// });
