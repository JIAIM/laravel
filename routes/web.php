<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\Mouse2Controller;
use App\Http\Controllers\ProductController;

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


Route::get('/index', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/syrokopcheni', function () {
    return view('syrokopcheni');
});

Route::get('/layout/type_syrokopcheni.blade.php/{name}/{value}/', [ProductController::class,'show']);





Route::get('/main', function () {
    return view('welcome');
});
