<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Article;
use App\Models\Category;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [PageController::class, 'homepage']);
Route::get('/{article:slug}', function(Article $article){
    return view('article', ['article'=>$article]);      //depedency injection,function paraméterében
});

/* cikk hozáadása */
Route::get('/admin/article/add', function(){
    return view('/layout/admin/add_article');
});
Route::post('/admin/article/add', [PageController::class, 'add_article']);

/* cikkek szerkesztése */
Route::get('/admin/article/edit/{article:id}', function(Article $article){
    return view('/layout/admin/edit_article', ['article'=>$article]);     //depedency injection-ön keresztül átadom az adatokat az "article" kulcson
});
Route::post('/admin/article/edit/{article:id}', [PageController::class, 'edit_articles']);

/*cikkek listázás */
Route::get('/admin/article/list', function(){
    return view('/layout/admin/show_article', ['show_articles'=>Article::get()]);    //itt csak egy listát kapok a "show_articles" kulcson
});

/* kategória hozzáadása */
Route::get('/admin/category/add', function(){
    return view('/layout/admin/add_category');
});
Route::post('/admin/category/add', [PageController::class, 'add_category']);

/* kategória szerkesztése */
Route::get('/admin/category/edit/{category:id}', function(Category $category){
    return view('/layout/admin/edit_category', ['category'=>$category]);     //depedency injection-ön keresztül átadom az adatokat az "article" kulcson
});
Route::post('/admin/category/edit/{category:id}', [PageController::class, 'edit_category']);
/* kategória törlése */
Route::post('/admin/category/delete/{category:id}', [PageController::class, 'delete_category']);

/* kategória listázása */
Route::get('/admin/category/list', function(){
    return view('/layout/admin/show_category');
});


//rövidebb url neveket!!