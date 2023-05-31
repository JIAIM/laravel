<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\Mouse2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FilmController;

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

Route::get('/hello', function (){
    return 'Hello world!'   ;
});

Route::get('/contacts/', function (){
    return 'сторінка контактів';
});

Route::get('/news/{section}/{id}/', function (string $section, string $id){
    return 'новина під номером = '.$id.' із розділу '.$section;
})->whereNumber('id')->whereAlpha('section');

Route::get('/my_page', [MyPlaceController::class, 'my_place']);

Route::get('/', [MouseController::class,'show2']);

Route::get('/2', [Mouse2Controller::class,'form']);

Route::post('/3', [Mouse2Controller::class,'result']);

Route::get('/team/{id}/{name}/', [MouseController::class,'show'])->whereNumber('id');


Route::get('/main', function () {
    return view('welcome');
});


Route::get('/films/', [FilmController::class,'index'])->name('film.index');
Route::get('/films/create', [FilmController::class,'create'])->name('film.create');
Route::post('/films/', [FilmController::class,'store'])->name('film.store');
Route::get('/films/{film}', [FilmController::class,'show'])->name('film.show');
Route::get('/films/{film}/edit', [FilmController::class,'edit'])->name('film.edit');
Route::patch('/films/{film}/edit', [FilmController::class,'update'])->name('film.update');
Route::delete('/films/{film}', [FilmController::class,'delete'])->name('film.delete');




Route::get('/films2/', [FilmController::class,'index']);
Route::get('/films/update', [FilmController::class,'update']);
Route::get('/films/delete', [FilmController::class,'delete']);
Route::get('/films/first_or_create', [FilmController::class,'firstOrCreate']);
Route::get('/films/update_or_create', [FilmController::class,'updateOrCreate']);




Route::get('/index', [ProductController::class,'index']);
Route::get('/product', [ProductController::class,'product']);
Route::get('/contact', [ProductController::class,'contact']);
Route::get('/about_us', [ProductController::class,'about_us']);
Route::get('/syrokopcheni/{data}', [ProductController::class,'syrokopcheni']);
Route::get('/basket', [ProductController::class,'basket']);
Route::get('/phone-menu', [ProductController::class,'phone']);
Route::get('/layout/type_syrokopcheni.blade.php/{name}/{value}/', [ProductController::class,'show']);
Route::get('/add/{name}/{num}', [ProductController::class,'add']);
Route::get('/del/{num}', [ProductController::class,'delete']);
