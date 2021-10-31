<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Roomcontroller;
use App\Http\Controllers\TypeController;
use App\Models\TypeModel;
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
Route::get("/", function(){
    $dataType = TypeModel::all();
        return view("front.pages.index")->with(["type" => $dataType]);
});
Route::get("/contact", function(){
    return view("front.pages.contact");
});
Route::resource('/room', Roomcontroller::class);
Route::resource('/admin/type', TypeController::class);