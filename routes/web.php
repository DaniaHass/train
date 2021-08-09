<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',function(){
    return 'welcome to the users page ';
}); 

Route::get('/users',function(){
    return['dania','lia','mahed']; 
});

Route::get('/name',function(){
    return response()->json([
        'name'=>'dary',
        'course'=>'Laravel'
    ]
    );
});
Route::get('/adress',function (){
    return view('homee');
});

Route::get('/products',[ProductsController::class,'index']); 
//Route::get('/product','App\Http\Controllers\ProductsController@index');

//Route::get('/products/{name}',[ProductsController::class,'show']);

Route::get('/products/{id}'
,[ProductsController::class,'show'])->where('id','[0-9]');


