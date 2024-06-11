<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('markets/list',[ArticleController::class,'list'])->name('markets.list');
route::get('markets/food',[ArticleController::class,'food']);
route::post('markets/shop',[ArticleController::class,'shop'])->name('markets.shop');
Route::get('markets/{markets}/show',[ArticleController::class,'show'])->name('markets.show');
Route::put('markets/{markets}',[ArticleController::class,'update'])->name('markets.update');
Route::delete('markets/{markets}',[ArticleController::class,'destroy'])->name('markets.destroy');
Route::get('markets/{markets}/edit',[ArticleController::class,'edit'])->name('markets.edit');
